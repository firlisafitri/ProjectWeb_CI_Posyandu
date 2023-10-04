<?php
Class M_Pertumbuhan extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_pertumbuhan');
	}

	function tampil_data2(){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_pertumbuhan_front($where){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
		$this->db->JOIN('tbl_ortu','tbl_ortu.id_ortu=tbl_balita.id_ortu');
		$this->db->where('tbl_ortu.id_ortu = '.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlah_pertumbuhan(){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		return $this->db->get()->num_rows();
	}
}