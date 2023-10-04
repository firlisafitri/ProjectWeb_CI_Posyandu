<?php
Class M_Pertumbuhan_balita extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_pertumbuhan_balita');
	}

	function tampil_data2(){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan_balita');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan_balita.balita');
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

	function pilih_pertumbuhan(){
		$sql = $this->db->query('Select * from tbl_pertumbuhan_balita where NOT EXISTS (select * from tbl_pertumbuhan_blt where tbl_pertumbuhan_balita.id_pertumbuhan_balita = tbl_pertumbuhan_blt.id_pertumbuhan_balita)');
		return $sql->result_array();
	}
}