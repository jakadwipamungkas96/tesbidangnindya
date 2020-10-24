<?php
class M_barang extends CI_Model 
{
	public function getBarang(){
		$this->load->database();
		$sql = $this->db->select("*")
						->from("tbl_barang")
						->get()
						->result_array();

		// print_r('<pre>');
		// print_r($sql);
		// exit();
		return $sql;
	}
}
