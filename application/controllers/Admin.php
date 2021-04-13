<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function view_khach_hang()
	{
		$this-> load -> model('admin/m_admin');
		$result['data']=$this->m_admin->viewkhachhang();
		$this -> load -> view('admin/khach_hang/danh_sach',$result);
	}
	// function index()
	// {
	// 	// $result['data']=$this->m_san_pham->dispsp1();
	// 	// $this->load->view('main/index',$result);
	// 	$this->load->view('main/main');
	// }
	// public function main()
	// {
	// 	$this->load->view('main/index');
	// }
	
}

/* End of file Suno.php */
/* Location: ./application/controllers/Suno.php */