<?php
class Grafik_model extends CI_Model
{
 
 
 function load_data($where)
 {
 	$this->db->select('*');
	$this->db->from('tbl_pertumbuhan');
	$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
	$this->db->where('tbl_pertumbuhan.balita='.$where);
  	$query = $this->db->get();
  	return $query->result_array();
 }

 function load_data_front($where)
 {
 	$this->db->select('*');
	$this->db->from('tbl_pertumbuhan');
	$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
	$this->db->JOIN('tbl_ortu','tbl_ortu.id_ortu=tbl_balita.id_ortu');
	$this->db->where('tbl_pertumbuhan.balita='.$where);
  	$query = $this->db->get();
  	return $query->result_array();
 }

}
?>