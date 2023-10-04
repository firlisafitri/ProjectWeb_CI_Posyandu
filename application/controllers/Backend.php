<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
			$userdata=base_url;
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->model('M_Ortu');
		$data['ortu'] = $this->M_Ortu->jumlah_ortu();
		$this->load->model('M_Balita');
		$data['balita'] = $this->M_Balita->jumlah_balita();
		$this->load->model('M_Pertumbuhan');
		$data['pertumbuhan'] = $this->M_Pertumbuhan->jumlah_pertumbuhan();
		$this->load->model('M_Kemampuan_motorik');
		$data['kemampuan'] = $this->M_Kemampuan_motorik->jumlah_kemampuan();
		$this->load->view('Backend/index.php',$data);
	}

	public function data_ortu()
	{
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data2();
		$this->load->view('Backend/data_ortu.php',$data);
	}

	public function data_ortu_input(){

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
        	$this->load->view('Backend/data_ortu_input.php');
        } else {
        
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
			$this->load->model('M_Ortu');
			$this->M_Ortu->input_data($data,'tbl_ortu');
			redirect('Backend/data_ortu');
		}

	}

	public function data_ortu_input_aksi(){
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
			$this->load->model('M_Ortu');
			$this->M_Ortu->input_data($data,'tbl_ortu');
			redirect('Backend/data_ortu');
	}

	public function data_ortu_edit($id_ortu){
		$where = array('id_ortu' => $id_ortu);
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->view_data($where,'tbl_ortu')->result();
		$this->load->view('Backend/data_ortu_edit.php',$data);
	}

	public function data_ortu_edit_aksi(){
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
			redirect('Backend/data_ortu');
	}

	public function data_ortu_delete($id_ortu){
		$where = array('id_ortu' => $id_ortu);
		$this->load->model('M_Ortu');
		$this->M_Ortu->delete_data($where,'tbl_ortu');
		redirect('Backend/data_ortu');
	}

	public function data_balita()
	{
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data2();
		$this->load->view('Backend/data_balita.php',$data);
	}

	public function data_balita_input(){

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('nm_balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('bb_lahir', 'Berat Badan Lahir', 'required');
		$this->form_validation->set_rules('pb_lahir', 'Panjang Badan Lahir', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
        	$this->load->model('M_Ortu');
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$this->load->view('Backend/data_balita_input.php',$data);
        
        } else {
        
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
			$this->load->model('M_Balita');
			$this->M_Balita->input_data($data,'tbl_balita');
			redirect('Backend/data_balita');
        }

		
	}

	public function data_balita_input_aksi(){
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
			$this->load->model('M_Balita');
			$this->M_Balita->input_data($data,'tbl_balita');
			redirect('Backend/data_balita');
	}

	public function data_balita_edit($id_balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->view('Backend/data_balita_edit.php',$data);
	}

	public function data_balita_edit_aksi(){
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
			redirect('Backend/data_balita');
	}

	public function data_balita_delete($id_balita){
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$this->M_Balita->delete_data($where,'tbl_balita');
		redirect('Backend/data_balita');
	}

	public function data_balita1()
	{
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data2();
		$this->load->view('Backend/data_balita1.php',$data);
	}

	public function data_balita_input_1(){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$this->load->view('Backend/data_balita_input.php',$data);
	}

	public function data_balita_input_aksi_1(){
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
			$this->load->model('M_Balita');
			$this->M_Balita->input_data($data,'tbl_balita');
			redirect('Backend/data_balita');
	}

	public function data_balita_edit_1($id_balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->view('Backend/data_balita_edit.php',$data);
	}

	public function data_balita_edit_aksi_1(){
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
			redirect('Backend/data_balita');
	}

	public function data_balita_delete_1($id_balita){
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$this->M_Balita->delete_data($where,'tbl_balita');
		redirect('Backend/data_balita');
	}

	

	public function data_kemampuan_motorik()
	{
		$this->load->model('M_Kemampuan_motorik');
		$data['tbl_kemampuan_motorik'] = $this->M_Kemampuan_motorik->tampil_data()->result();
		$this->load->view('Backend/data_kemampuan_motorik.php',$data);
	}

	public function data_kemampuan_motorik_input(){

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('kode_kemampuan', 'Kode Kemampuan', 'required');
		$this->form_validation->set_rules('kemampuan_motorik', 'Kemampuan Motorik', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
        	$this->load->view('Backend/data_kemampuan_motorik_input.php');
        
        } else {
        
        	
			$usia =$this->input->POST('usia');
			$kode_kemampuan =$this->input->POST('kode_kemampuan');
			$kemampuan_motorik =$this->input->POST('kemampuan_motorik');

			$data = array(
				
				'usia' => $usia,
				'kode_kemampuan' => $kode_kemampuan,
				'kemampuan_motorik' => $kemampuan_motorik
			);
			$this->load->model('M_Kemampuan_motorik');
			$this->M_Kemampuan_motorik->input_data($data,'tbl_kemampuan_motorik');
			redirect('Backend/data_kemampuan_motorik');
        }

	}

	public function data_kemampuan_motorik_input_aksi(){
			$kd_usia =$this->input->POST('kd_usia');
			$usia =$this->input->POST('usia');
			$kode_kemampuan =$this->input->POST('kode_kemampuan');
			$kemampuan_motorik =$this->input->POST('kemampuan_motorik');

			$data = array(
				'kd_usia' => $kd_usia,
				'usia' => $usia,
				'kode_kemampuan' => $kode_kemampuan,
				'kemampuan_motorik' => $kemampuan_motorik
			);
			$this->load->model('M_Kemampuan_motorik');
			$this->M_Kemampuan_motorik->input_data($data,'tbl_kemampuan_motorik');
			redirect('Backend/data_kemampuan_motorik');
	}

	public function data_kemampuan_motorik_edit($id_kemampuan_motorik){
		$where = array('id_kemampuan_motorik' => $id_kemampuan_motorik);
		$this->load->model('M_Kemampuan_motorik');
		$data['tbl_kemampuan_motorik'] = $this->M_Kemampuan_motorik->view_data($where,'tbl_kemampuan_motorik')->result();
		$this->load->view('Backend/data_kemampuan_motorik_edit.php',$data);
	}

	public function data_kemampuan_motorik_edit_aksi(){
			$id = $this->input->POST('id_kemampuan_motorik');
			$kd_usia =$this->input->POST('kd_usia');
			$usia =$this->input->POST('usia');
			$kode_kemampuan =$this->input->POST('kode_kemampuan');
			$kemampuan_motorik =$this->input->POST('kemampuan_motorik');

			$data = array(
				'kd_usia' => $kd_usia,
				'usia' => $usia,
				'kode_kemampuan' => $kode_kemampuan,
				'kemampuan_motorik' => $kemampuan_motorik
			);

			$where = array(
				'id_kemampuan_motorik' => $id
			);

			$this->load->model('M_Kemampuan_motorik');
			$this->M_Kemampuan_motorik->update_data($where,$data,'tbl_kemampuan_motorik');
			redirect('Backend/data_kemampuan_motorik');
	}

	public function data_kemampuan_motorik_delete($id_kemampuan_motorik){
		$where = array('id_kemampuan_motorik' => $id_kemampuan_motorik);
		$this->load->model('M_Kemampuan_motorik');
		$this->M_Kemampuan_motorik->delete_data($where,'tbl_kemampuan_motorik');
		redirect('Backend/data_kemampuan_motorik');
	}

	public function data_pertumbuhan()
	{
		$this->load->model('M_Pertumbuhan');
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->tampil_data2();
		$this->load->view('Backend/data_pertumbuhan.php',$data);
	}

	public function data_pertumbuhan_input(){

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('tgl_cek', 'Tanggal Cek', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
        	$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data()->result();
		$this->load->view('Backend/data_pertumbuhan_input.php',$data);
        
        } else {
        
        	$balita =$this->input->POST('balita');
			$tgl_cek =$this->input->POST('tgl_cek');
			$usia =$this->input->POST('usia');
			$bb =$this->input->POST('berat_badan');

			$data = array(
				'balita' => $balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb
			);
			$this->load->model('M_Pertumbuhan');
			$this->M_Pertumbuhan->input_data($data,'tbl_pertumbuhan');
			redirect('Backend/data_pertumbuhan');
        }

		
	}

	public function data_pertumbuhan_input_aksi(){
			$balita =$this->input->POST('balita');
			$tgl_cek =$this->input->POST('tgl_cek');
			$usia =$this->input->POST('usia');
			$bb =$this->input->POST('berat_badan');

			$data = array(
				'balita' => $balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb
			);
			$this->load->model('M_Pertumbuhan');
			$this->M_Pertumbuhan->input_data($data,'tbl_pertumbuhan');
			redirect('Backend/data_pertumbuhan');
	}

	public function data_pertumbuhan_edit($id_pertumbuhan){
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data()->result();
		$where = array('id_pertumbuhan' => $id_pertumbuhan);
		$this->load->model('M_Pertumbuhan');
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->view_data($where,'tbl_pertumbuhan')->result();
		$this->load->view('Backend/data_pertumbuhan_edit.php',$data);
	}

	public function data_pertumbuhan_edit_aksi(){
			$id = $this->input->POST('id_pertumbuhan');
			$balita =$this->input->POST('balita');
			$tgl_cek =$this->input->POST('tgl_cek');
			$usia =$this->input->POST('usia');
			$bb =$this->input->POST('berat_badan');

			$data = array(
				'balita' => $balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb
			);

			$where = array(
				'id_pertumbuhan' => $id
			);

			$this->load->model('M_Pertumbuhan');
			$this->M_Pertumbuhan->update_data($where,$data,'tbl_pertumbuhan');
			redirect('Backend/data_pertumbuhan');
	}

	public function data_pertumbuhan_delete($id_pertumbuhan){
		$where = array('id_pertumbuhan' => $id_pertumbuhan);
		$this->load->model('M_Pertumbuhan');
		$this->M_Pertumbuhan->delete_data($where,'tbl_pertumbuhan');
		redirect('Backend/data_pertumbuhan');
	}

	function data_pertumbuhan_balita_view($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data($balita);
		$this->load->view('Backend/data_pertumbuhan_balita_view.php',$data);
	}

	public function data_testing_view($id_pertumbuhan){
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data()->result();
		$where = array('id_pertumbuhan' => $id_pertumbuhan);
		$this->load->model('M_Pertumbuhan');
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->view_data($where,'tbl_pertumbuhan')->result();
		$this->load->view('Backend/data_testing_view.php',$data);
	}

	public function hasil_status_gizi()
	{
		$this->load->model('M_Pertumbuhan');
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->tampil_data2();
		$this->load->view('Backend/hasil_status_gizi.php',$data);
	}

	function cek_hasil_gizi($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data($balita);
		$this->load->view('Backend/cek_hasil_gizi.php',$data);
	}

	public function grafik($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->model('grafik_model');
		$data['labelnya'] = $this->grafik_model->load_data($balita);
		$this->load->view('backend/grafik_pertumbuhan.php',$data);	
	}

	function data_pertumbuhan_balita($id_balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$this->load->model('M_Pertumbuhan_balita');
		$data['tbl_pertumbuhan_balita'] = $this->M_Pertumbuhan_balita->tampil_data()->result();
		$this->load->view('Backend/data_pertumbuhan_balita.php',$data);
	}

	public function data_pertumbuhan_balita_aksi(){
			$idb =$this->input->POST('id_balita');
			$idp =$this->input->POST('id_pertumbuhan_balita');

			for($i=0; $i<count($idp); $i++){
			$data = array(
				'id_balita' => $idb,
				'id_pertumbuhan_balita' => $idp[$i]
			);
			$this->load->model('M_Balita');
			$this->M_Balita->input_data_pertumbuhan_balita($data,'tbl_pertumbuhan_blt');
		}

		redirect('Backend/data_balita');
	}

	function data_pertumbuhan_view($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data($balita);
		$this->load->view('Backend/data_pertumbuhan_view.php',$data);
	}

	function cek_hasil_gizi1($balita){
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where,'tbl_balita')->result();
		$data['tbl_pertumbuhan'] = $this->M_Balita->join_data($balita);
		$this->load->view('Backend/cek_gizi.php',$data);
	}


	public function data_pertumbuhan_balita_input(){
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data()->result();
		$this->load->view('Backend/data_pertumbuhan_balita_input.php',$data);
	}

	public function data_pertumbuhan_balita_input_aksi(){
			$balita =$this->input->POST('balita');
			$tgl_cek =$this->input->POST('tgl_cek');
			$usia =$this->input->POST('usia');
			$bb =$this->input->POST('berat_badan');

			$data = array(
				'balita' => $balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb
			);
			$this->load->model('M_Pertumbuhan_balita');
			$this->M_Pertumbuhan_balita->input_data($data,'tbl_pertumbuhan_balita');
			redirect('Backend/data_pertumbuhan_view');
	}

	public function data_pertumbuhan_balita_edit($id_pertumbuhan_balita){
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->tampil_data()->result();
		$where = array('id_pertumbuhan_balita' => $id_pertumbuhan_balita);
		$this->load->model('M_Pertumbuhan_balita');
		$data['tbl_pertumbuhan_balita'] = $this->M_Pertumbuhan_balita->view_data($where,'tbl_pertumbuhan_balita')->result();
		$this->load->view('Backend/data_pertumbuhan_balita_edit.php',$data);
	}

	public function data_pertumbuhan_balita_edit_aksi(){
			$id = $this->input->POST('id_pertumbuhan_balita');
			$balita =$this->input->POST('balita');
			$tgl_cek =$this->input->POST('tgl_cek');
			$usia =$this->input->POST('usia');
			$bb =$this->input->POST('berat_badan');

			$data = array(
				'balita' => $balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb
			);

			$where = array(
				'id_pertumbuhan_balita' => $id
			);

			$this->load->model('M_Pertumbuhan_balita');
			$this->M_Pertumbuhan_balita->update_data($where,$data,'tbl_pertumbuhan_balita');
			redirect('Backend/data_pertumbuhan_view');
	}

	public function data_pertumbuhan_balita_delete($id_pertumbuhan_balita){
		$where = array('id_pertumbuhan_balita' => $id_pertumbuhan_balita);
		$this->load->model('M_Pertumbuhan_balita');
		$this->M_Pertumbuhan_balita->delete_data($where,'tbl_pertumbuhan_balita');
		redirect('Backend/data_balita');
	}








	public function forms()
	{
		$this->load->view('Backend/forms.php');
	}
}
