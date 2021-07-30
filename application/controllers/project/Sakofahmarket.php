<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Sakofahmarket extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	public function index()
	{
		$this->load->view("containner/head");		
		$this->load->view("containner/header");	
		$this->load->view("project/sakofahmarket");	
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");	
	}

	public function indexmember()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);	
		$this->load->view("project/sakofahmarket");	
		// $this->load->view("containner/footermember");
		$this->load->view("containner/script");		
	}

}
