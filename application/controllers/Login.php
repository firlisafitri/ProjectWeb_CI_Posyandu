<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('M_Login');
	}

	function index()
	{
		$this->load->view('Backend/login.php');
	}

	function register()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_ortu.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s Tidak Sesuai dengan Password')
	);
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} telah digunakan silahkan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
        	$this->load->view('Backend/register.php');
        } else {
        
        $nm_ayah = $this->input->POST('nm_ayah');
		$nm_ibu = $this->input->POST('nm_ibu');
		$user = $this->input->POST('username');
		$pass = $this->input->POST('password');
		$email = $this->input->POST('email');
		$nohp = $this->input->POST('no_hp');
		$alamat = $this->input->POST('alamat');

		$data = array(
			'nm_ayah' => $nm_ayah,
			'nm_ibu' => $nm_ibu,
			'username' => $user,
			'password' => $pass,
			'email' => $email,
			'no_hp' => $nohp,
			'alamat' => $alamat
		);

		$this->load->model('M_Ortu');
		$this->M_Ortu->input_data($data,'tbl_ortu');
		redirect('Login');
        }

		
	}

	function register_action(){
		$nm_ayah = $this->input->POST('nm_ayah');
		$nm_ibu = $this->input->POST('nm_ibu');
		$user = $this->input->POST('username');
		$pass = $this->input->POST('password');
		$email = $this->input->POST('email');
		$nohp = $this->input->POST('no_hp');
		$alamat = $this->input->POST('alamat');

		$data = array(
			'nm_ayah' => $nm_ayah,
			'nm_ibu' => $nm_ibu,
			'username' => $user,
			'password' => $pass,
			'email' => $email,
			'no_hp' => $nohp,
			'alamat' => $alamat
		);

		$this->load->model('M_Ortu');
		$this->M_Ortu->input_data($data,'tbl_ortu');
		redirect('Login');
	}

	function auth(){
		$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek_kader = $this->M_Login->auth_kader($username,$password);
		$cek_ortu = $this->M_Login->auth_ortu($username,$password);

		if($cek_kader->num_rows() > 0){
			$data = $cek_kader->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if($data['status']=='aktif'){
				$this->session->set_userdata('akses','aktif');
				$this->session->set_userdata('ses_id',$data['username']);
				$this->session->set_userdata('ses_name',$data['nm_kader']);
				redirect('Backend');
			}
		}

		else if($cek_ortu->num_rows() > 0){
			$data = $cek_ortu->row_array();
			$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('akses','Frontend');
				$this->session->set_userdata('ses_id',$data['username']);
				$this->session->set_userdata('ses_name',$data['nm_ibu']);
				$this->session->set_userdata('ses_id_ortu',$data['id_ortu']);
				redirect('Frontend');
		}

		else{
			echo $this->session->set_flashdata('msg','
				<div class="register-reg" style="background-color: red;padding:10px; color: white;">
					<button type="button" data-dismiss="alert">
					</button> Username & Password Salah
				</div>
				');
			redirect('Login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}
}
