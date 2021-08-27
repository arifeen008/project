<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Credit extends CI_Controller
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
		$this->load->view("service/credit");	
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
		$this->load->view("service/credit");	
		// $this->load->view("containner/footermember");
		$this->load->view("containner/script");		
	}

	public function gordulhazan()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("service/credit/gordulhazan");	
		$this->load->view("containner/script");		
	}

	public function ordinary_emergency()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");	
		$this->load->view("service/credit/ordinary_emergency");	
		$this->load->view("containner/script");		
	}

	public function ordinary()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");	
		$this->load->view("service/credit/ordinary");	
		$this->load->view("containner/script");		
	}

	public function special()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("service/credit/special");	
		$this->load->view("containner/script");		
	}

	public function project()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("service/credit/project");	
		$this->load->view("containner/script");		
	}

	public function project_asset()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("service/credit/project_asset");	
		$this->load->view("containner/script");		
	}


}
