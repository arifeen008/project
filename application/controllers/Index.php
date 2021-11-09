<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	// public function index()
	// {
	// 	$this->load->view("containner/head");
	// 	$this->load->view("containner/header");
	// 	$this->load->view("index");
	// 	// $this->load->view("containner/footer_member");
	// 	$this->load->view("containner/script");
	// }

	public function index()
	{
		$this->load->view("containner/zhead");
		$this->load->view("zindex");
		$this->load->view("containner/zscript");
	}

	public function board()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/board");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function history()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/history");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function office()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/office");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vision()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/vision");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function evaluation()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/contact/evaluation");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function withus()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/contact/withus");
		// $this->load->view("containner/footer");	
		$this->load->view("containner/script");
	}

	public function document()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/download/document");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function report()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/download/report");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function activity()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/news/activity");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function calendar()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/news/calendar");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function promotion()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/news/promotion");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gasstation()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/project/gasstation");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function orphan()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/project/orphan");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function sakofahmarket()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/project/sakofahmarket");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function stadium()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/project/stadium");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function village()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/project/village");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function credit()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gordulhazan()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/gordulhazan");
		$this->load->view("containner/script");
	}

	public function ordinary_emergency()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/ordinary_emergency");
		$this->load->view("containner/script");
	}

	public function ordinary()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/ordinary");
		$this->load->view("containner/script");
	}

	public function special()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/special");
		$this->load->view("containner/script");
	}

	public function project()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/project");
		$this->load->view("containner/script");
	}

	public function project_asset()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/credit/project_asset");
		$this->load->view("containner/script");
	}

	public function deposit()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/deposit");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function register()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/service/register");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function dead()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/welfare/dead");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function marry()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/welfare/marry");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function maternity()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/welfare/maternity");
		// $this->load->view("containner/footer");	
		$this->load->view("containner/script");
	}

	public function medical()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/welfare/medical");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function oldage()
	{
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/welfare/oldage");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index");
		// $this->load->view("containner/footer_member");
		$this->load->view("containner/script");
	}

	public function board_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/about/board");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function history_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/about/history");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function office_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/about/office");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vision_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/about/vision");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function evaluation_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/contact/evaluation");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function withus_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/contact/withus");
		// $this->load->view("containner/footer");	
		$this->load->view("containner/script");
	}

	public function document_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/download/document");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function report_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/download/report");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function activity_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/news/activity");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function calendar_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/news/calendar");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function promotion_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/news/promotion");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gasstation_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/project/gasstation");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function orphan_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/project/orphan");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function sakofahmarket_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/project/sakofahmarket");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function stadium_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/project/stadium");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function village_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/project/village");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function credit_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit_member");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gordulhazan_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/gordulhazan");
		$this->load->view("containner/script");
	}

	public function ordinary_emergency_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/ordinary_emergency");
		$this->load->view("containner/script");
	}

	public function ordinary_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/ordinary");
		$this->load->view("containner/script");
	}

	public function special_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/special");
		$this->load->view("containner/script");
	}

	public function project_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/project");
		$this->load->view("containner/script");
	}

	public function project_asset_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/credit/project_asset");
		$this->load->view("containner/script");
	}

	public function deposit_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/deposit");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function register_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/service/register");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function dead_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/welfare/dead");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function marry_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/welfare/marry");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function maternity_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/welfare/maternity");
		// $this->load->view("containner/footer");	
		$this->load->view("containner/script");
	}

	public function medical_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/welfare/medical");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function oldage_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("index/welfare/oldage");
		// $this->load->view("containner/footer");
		$this->load->view("containner/script");
	}
}
