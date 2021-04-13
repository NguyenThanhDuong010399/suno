<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

	function viewkhachhang()
	{
		$query=$this->db->query("Select * from tbl_customer");
		return $query->result();
	}
	// function dispsp()
	// {
	// $query=$this->db->query("SELECT * FROM `tbl_san_pham`");
	// return $query->result();
	// }
	// function dispsp1()
	// {
	// $query=$this->db->query("SELECT * FROM `tbl_san_pham` WHERE `id_phan_loai` = 1");
	// return $query->result();
	// }
	// public function dispsp2($value='')
	// {
	// 	$query=$this->db->query("SELECT * FROM `tbl_san_pham` WHERE `id_phan_loai` = 2");
	// 	return $query->result();
	// }
	// public function dispsp3($value='')
	// {
	// 	$query=$this->db->query("SELECT * FROM `tbl_san_pham` WHERE `id_phan_loai` = 3");
	// 	return $query->result();
	// }
	// function displayrecordsById($id)
	// {
	// $query=$this->db->query("SELECT * FROM `tbl_san_pham` WHERE `id_sp`='".$id."'");
	// $result = $query->result_array();
	// 	return $result;
	// }
	// function displayrecordsBysx($sx)
	// {
	// $query=$this->db->query("SELECT * FROM `tbl_ncc` WHERE `id_ncc`='".$sx."'");
	// $result = $query->result_array();
	// 	return $result;
	// }
	// function displayrecordsBylq($lq)
	// {
	// $query=$this->db->query("SELECT * FROM `tbl_san_pham` WHERE `id_phan_loai`='".$lq."'");
	// $result = $query->result_array();
	// 	return $result;
	// }
}

/* End of file m_san_pham.php */
/* Location: ./application/models/san_pham/m_san_pham.php */