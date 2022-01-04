<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$title['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function board()
	{
		$title['title'] = "คณะกรรมการผู้บริหาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/about/board");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function history()
	{
		$title['title'] = "ประวัติความเป็นมา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/about/history");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function office()
	{
		$title['title'] = "สำนักงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/office");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vision()
	{
		$title['title'] = "วิสัยทัศน์ พันธกิจ วัตถุประสงค์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/vision");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function register()
	{
		$title['title'] = "สมัครสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/service/register");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function deposit()
	{
		$title['title'] = "บริการเงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/service/deposit");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function credit()
	{
		$title['title'] = "บริการสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/service/credit");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function marry()
	{
		$title['title'] = "สวัสดิการแต่งงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/marry");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function maternity()
	{
		$title['title'] = "สวัสดิการคลอดบุตร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/maternity");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function oldage()
	{
		$title['title'] = "สวัสดิการเงินสมทบยามชรา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/oldage");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function medical()
	{
		$title['title'] = "สวัสดิการช่วยเหลือค่ารักษาพยาบาล สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/medical");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function dead()
	{
		$title['title'] = "สวัสดิการเสียชีวิต สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/dead");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function promotion()
	{
		$title['title'] = "โปรโมชั่น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/news/promotion");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function activity()
	{
		$title['title'] = "กิจกรรม สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/news/activity");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function calendar()
	{
		$title['title'] = "ปฏิทิน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/news/calendar");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function stadium()
	{
		$title['title'] = "โครงการสนามหญ้าเทียม SKF Stadium สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/project/stadium");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function village()
	{
		$title['title'] = "โครงการหมู่บ้านษะกอฟะฮ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/project/village");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gasstation()
	{
		$title['title'] = "โครงการปั้มน้ำมันเซลล์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/project/gasstation");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function orphan()
	{
		$title['title'] = "โครงการอุปถัมภ์เลี้ยงดูเด็กกำพร้า สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/project/orphan");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function sakofahmarket()
	{
		$title['title'] = "โครงการ Sakofah Market สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/project/sakofahmarket");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function document()
	{
		$title['title'] = "รายงานกิจการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/download/document");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function report()
	{
		$title['title'] = "เอกสารสำหรับสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/download/report");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function withus()
	{
		$title['title'] = "ร่วมงานกับเรา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/contact/withus");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 	public function index_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function board_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "คณะกรรมการผู้บริหาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/about/board");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function history_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "ประวัติความเป็นมา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/about/history");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function office_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สำนักงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/about/office");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function vision_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "วิสัยทัศน์ พันธกิจ วัตถุประสงค์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/about/vision");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function register_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สมัครสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/register");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function deposit_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "บริการเงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/deposit");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function credit_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "บริการสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit_member");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function gordulhazan_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อฉุกเฉิน (ก็อรดุลหะซัน) สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/gordulhazan");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function ordinary_emergency_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อสามัญฉุกเฉิน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/ordinary_emergency");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function ordinary_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อสามัญ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/ordinary");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function special_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อพิเศษ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/special");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function project_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อโครงการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/project");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function project_asset_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สินเชื่อโครงการสินทรัพย์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/service/credit/project_asset");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function activity_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "กิจกรรม สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/news/activity");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function calendar_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "ปฏิทิน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/news/calendar");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function promotion_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โปรโมชั่น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/news/promotion");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function marry_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สวัสดิการแต่งงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/welfare/marry");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function maternity_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สวัสดิการคลอดบุตร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/welfare/maternity");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function medical_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สวัสดิการช่วยเหลือค่ารักษาพยาบาล สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/welfare/medical");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function oldage_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$this->load->view("containner/head");
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/welfare/oldage");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}
// 	public function dead_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "สวัสดิการเสียชีวิต สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/welfare/dead");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function stadium_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โครงการสนามหญ้าเทียม SKF Stadium สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/project/stadium");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function village_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โครงการหมู่บ้านษะกอฟะฮ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/project/village");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function gasstation_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โครงการปั้มน้ำมันเซลล์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/project/gasstation");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function orphan_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โครงการอุปถัมภ์เลี้ยงดูเด็กกำพร้า สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/project/orphan");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function sakofahmarket_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "โครงการ Sakofah Market สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/project/sakofahmarket");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}


// 	public function document_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "เอกสารสำหรับสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/download/document");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}

// 	public function report_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "รายงานกิจการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/download/report");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}


// 	public function withus_member()
// 	{
// 		$br_no = $this->session->userdata("BR_NO");
// 		$mem_id = $this->session->userdata("MEM_ID");
// 		$data = $this->member_model->getdata_member($br_no, $mem_id);
// 		$title['title'] = "ร่วมงานกับเรา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
// 		$this->load->view("containner/head", $title);
// 		$this->load->view("containner/header_member", $data);
// 		$this->load->view("index/contact/withus");
// 		$this->load->view("containner/footer_member");
// 		$this->load->view("containner/script");
// 	}
}
