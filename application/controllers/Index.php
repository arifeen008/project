<?php defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('officer_model');
	}

	public function index()
	{
		$covid = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
		$data['covid_data'] = json_decode($covid, true);
		$data['news_information'] = $this->officer_model->get_news_information();
		$data['news_welfare'] = $this->officer_model->get_news_welfare();
		$data['news_credit'] = $this->officer_model->get_news_credit();
		$data['news_foundation'] = $this->officer_model->get_news_foundation();
		$title['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function news($newsnumber)
	{
		$data['data'] = $this->officer_model->get_news_data($newsnumber);
		$data['picture'] = $this->officer_model->get_newspicture($newsnumber);
		$data['side_data'] = $this->officer_model->get_sidenewsdata($newsnumber);
		$title['title'] = $data['data']->title . " สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("news", $data);
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

	public function klongyang()
	{
		$title['title'] = "สาขา สำนักงานใหญ่(คลองยาง) สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/klongyang");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function krabi()
	{
		$title['title'] = "สำนักงาน สาขากระบี่ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/krabi");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function aoluk()
	{
		$title['title'] = "สำนักงาน สาขาอ่าวลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/aoluk");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function kohlanta()
	{
		$title['title'] = "สำนักงาน สาขาเกาะลันตา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/kohlanta");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function klongthom()
	{
		$title['title'] = "สำนักงาน สาขาคลองท่อม สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/klongthom");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function huayluk()
	{
		$title['title'] = "สำนักงาน สาขาห้วยลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/huayluk");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function karnjanadid()
	{
		$title['title'] = "จุดบริการกาญจนดิษฐ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/karnjanadid");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function thontuay()
	{
		$title['title'] = "จุดบริการต้นทวย สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/thontuay");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function mobile1()
	{
		$title['title'] = "รถโมบายเคลื่อนที่ 1 สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/mobile1");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function mobile2()
	{
		$title['title'] = "รถโมบายเคลื่อนที่ 2 สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/mobile2");
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
		$data['result'] = $this->officer_model->get_list_activity();
		$title['title'] = "ข่าวสาร/กิจกรรมความเคลื่อนไหว สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header");
		$this->load->view("index/news/activity", $data);
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
}
