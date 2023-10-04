<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
			$userdata=base_url;
			redirect($url);
		}
	}

	public function index()
	{
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$this->load->model('grafik_model');
		$data['labelnya'] = $this->grafik_model->load_data_front($where);
		$this->load->view('Frontend/index.php',$data);
	}

	public function biodata()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nm_balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('bb_lahir', 'Berat Badan Lahir', 'required');
		$this->form_validation->set_rules('pb_lahir', 'Panjang Badan Lahir', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
        	$where=$this->session->userdata('ses_id_ortu');
			$this->load->model('M_Ortu');
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$this->load->model('M_Balita');
			$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
			$this->load->view('Frontend/biodata.php',$data);
        
        } else {
        
        	$id_ortu = $this->input->POST('id_ortu');
			$nm_balita = $this->input->POST('nm_balita');
			$tgl_lahir = $this->input->POST('tgl_lahir');
			$jenis_kelamin = $this->input->POST('jenis_kelamin');
			$bb_lahir = $this->input->POST('bb_lahir');
			$pb_lahir = $this->input->POST('pb_lahir');

			$data = array(
				'id_ortu' => $id_ortu,
				'nm_balita' => $nm_balita,
				'tgl_lahir' => $tgl_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'bb_lahir' => $bb_lahir,
				'pb_lahir' => $pb_lahir
		);

		$this->load->model('M_Balita');
		$this->M_Balita->input_data($data,'tbl_balita');
		redirect('Frontend');
        }

	}

	function biodata_action(){
		$id_ortu = $this->input->POST('id_ortu');
		$nm_balita = $this->input->POST('nm_balita');
		$tgl_lahir = $this->input->POST('tgl_lahir');
		$jenis_kelamin = $this->input->POST('jenis_kelamin');
		$bb_lahir = $this->input->POST('bb_lahir');
		$pb_lahir = $this->input->POST('pb_lahir');

		$data = array(
			'id_ortu' => $id_ortu,
			'nm_balita' => $nm_balita,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'bb_lahir' => $bb_lahir,
			'pb_lahir' => $pb_lahir
		);

		$this->load->model('M_Balita');
		$this->M_Balita->input_data($data,'tbl_balita');
		redirect('Frontend');
	}

	public function biodata_view($id_balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->view('Frontend/biodata_view.php',$data);
	}

	public function biodata_edit($id_balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->view('Frontend/biodata_edit.php',$data);
	}

	public function biodata_edit_aksi(){
			$id = $this->input->POST('id_balita');
			$id_ortu =$this->input->POST('id_ortu');
			$nm_balita =$this->input->POST('nm_balita');
			$tgl_lahir =$this->input->POST('tgl_lahir');
			$jenis_kelamin =$this->input->POST('jenis_kelamin');
			$bb_lahir =$this->input->POST('bb_lahir');
			$pb_lahir =$this->input->POST('pb_lahir');

			$data = array(
				'id_ortu' => $id_ortu,
				'nm_balita' => $nm_balita,
				'tgl_lahir' => $tgl_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'bb_lahir' => $bb_lahir,
				'pb_lahir' => $pb_lahir
			);

			$where = array(
				'id_balita' => $id
			);

			$this->load->model('M_Balita');
			$this->M_Balita->update_data($where,$data,'tbl_balita');
			redirect('Frontend');
	}

	public function profil_view($id_ortu){
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$where = array('id_ortu' => $id_ortu);
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->view_data($where,'tbl_ortu')->result();
		$this->load->view('Frontend/profil_view.php',$data);
	}

	public function profil_edit($id_ortu){
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$where = array('id_ortu' => $id_ortu);
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->view_data($where,'tbl_ortu')->result();
		$this->load->view('Frontend/profil_edit.php',$data);
	}

	public function profil_edit_aksi(){
			$id = $this->input->POST('id_ortu');
			$nm_ayah =$this->input->POST('nm_ayah');
			$nm_ibu =$this->input->POST('nm_ibu');
			$username =$this->input->POST('username');
			$password =$this->input->POST('password');
			$email =$this->input->POST('email');
			$nohp =$this->input->POST('no_hp');
			$alamat =$this->input->POST('alamat');

			$data = array(
				'nm_ayah' => $nm_ayah,
				'nm_ibu' => $nm_ibu,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'no_hp' => $nohp,
				'alamat' => $alamat
			);

			$where = array(
				'id_ortu' => $id
			);

			$this->load->model('M_Ortu');
			$this->M_Ortu->update_data($where,$data,'tbl_ortu');
			redirect('Frontend');
	}

	function cek_hasil_gizi($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data_pertumbuhan_front($balita);
		$this->load->view('Frontend/cek_hasil_gizi.php',$data);
	}

	function cetak_hasil_pertumbuhan($balita){
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data_pertumbuhan_front($balita);
		$this->load->view('Frontend/cetak_hasil_pertumbuhan.php',$data);
	}

	public function cek_kemampuan_motorik(){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$this->load->view('Frontend/cek_kemampuan_motorik.php',$data);
	}

	public function hasil_kemampuan_motorik()
	{
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$this->load->view('Frontend/hasil_kemampuan_motorik.php',$data);
	}

	public function cetak_hasil_perkembangan()
	{
		$this->load->view('Frontend/cetak_hasil_perkembangan.php');
	}

	public function periksa_kemampuan_motorik()
	{
		$this->load->model('M_Kemampuan_motorik');
		$data['tbl_kemampuan_motorik'] = $this->M_Kemampuan_motorik->tampil_data()->result();
		$this->load->view('Frontend/periksa_kemampuan_motroik.php',$data);
	}

	public function periksa_perkembangan()
	{
		$this->load->model('M_Kemampuan_motorik');
		$data['tbl_kemampuan_motorik'] = $this->M_Kemampuan_motorik->tampil_data()->result();
		$this->load->view('Frontend/periksa_perkembangan.php',$data);
	}

	public function perkembangan()
	{
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$this->load->view('Frontend/perkembangan.php',$data);
	}

	public function perkembangan_aksi(){
			$usia =$this->input->POST('usia');
			$kemampuan =$this->input->POST('kemampuan');

			for($i=0; $i<count($kemampuan); $i++){
			$data = array(
				'usia' => $usia,
				'kemampuan' => $kemampuan[$i]
			);
			$this->load->model('M_Kemampuan_motorik');
			$this->M_Kemampuan_motorik->input_usia($data,'tbl_perkembangan_motorik');
		}
		redirect('Frontend');
	}

	public function hasil_motorik()
	{
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where=$this->session->userdata('ses_id_ortu');
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data_perkembangan($where);
		$this->load->model('M_Motorik');
		$data['tbl_perkembangan_motorik'] = $this->M_Motorik->tampil_data()->result();
		$this->load->view('Frontend/hasil_perkembangan.php',$data);
	}

	public function perkembangan_balita_aksi(){
			$ido =$this->input->POST('id_ortu');
			$idk =$this->input->POST('id_kemampuan_motorik');

			for($i=0; $i<count($idk); $i++){
			$data = array(
				'id_ortu' => $ido,
				'id_kemampuan_motorik' => $idk[$i]
			);
			$this->load->model('M_Kemampuan_motorik');
			$this->M_Kemampuan_motorik->input_perkembangan_balita($data,'tbl_kemampuan');
		}

		redirect('Frontend');
	}

	public function periksa_kemampuan()
	{
		$this->load->model('M_Kemampuan_motorik');
		$data['tbl_kemampuan_motorik'] = $this->M_Kemampuan_motorik->tampil_data()->result();
		$this->load->view('Frontend/periksa_kemampuan.php',$data);
	}


}