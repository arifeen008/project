<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_lang();
		$this->load->model('officer_model');
	}

	public function index()
	{
		$covid = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
		$news = file_get_contents('https://newsdata.io/api/1/news?apikey=pub_7046fa204ea984c89b7a98592308f3f28097&language=th&country=th&domain=naewna');
		$data['google_news'] = json_decode($news);
		$data['covid_data'] = json_decode($covid, true);
		$data['news_information'] = $this->officer_model->get_news_information();
		$data['news_welfare'] = $this->officer_model->get_news_welfare();
		$data['news_credit'] = $this->officer_model->get_news_credit();
		$data['news_foundation'] = $this->officer_model->get_news_foundation();
		$data['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header", $data);
		$this->load->view("index", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function news($newsnumber)
	{
		$data['data'] = $this->officer_model->get_news_data($newsnumber);
		$data['picture'] = $this->officer_model->get_newspicture($newsnumber);
		$data['side_data'] = $this->officer_model->get_sidenewsdata($newsnumber);
		$data['title'] = $data['data']->title . " สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("news", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function board()
	{
		$data['title'] = "คณะกรรมการผู้บริหาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/about/board");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function history()
	{
		$data['title'] = "ประวัติความเป็นมา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/about/history");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function office()
	{
		$data['title'] = "สำนักงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/office");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function klongyang()
	{
		$data['title'] = "สาขา สำนักงานใหญ่(คลองยาง) สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/klongyang");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function krabi()
	{
		$data['title'] = "สำนักงาน สาขากระบี่ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/krabi");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function aoluek()
	{
		$data['title'] = "สำนักงาน สาขาอ่าวลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/aoluek");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function kohlanta()
	{
		$data['title'] = "สำนักงาน สาขาเกาะลันตา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/kohlanta");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function klongthom()
	{
		$data['title'] = "สำนักงาน สาขาคลองท่อม สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/klongthom");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function huayluk()
	{
		$data['title'] = "สำนักงาน สาขาห้วยลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/huayluk");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function karnjanadid()
	{
		$data['title'] = "จุดบริการกาญจนดิษฐ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/karnjanadid");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function thontuay()
	{
		$data['title'] = "จุดบริการต้นทวย สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/thontuay");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function mobile1()
	{
		$data['title'] = "รถโมบายเคลื่อนที่ 1 สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/mobile1");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function mobile2()
	{
		$data['title'] = "รถโมบายเคลื่อนที่ 2 สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/branch/mobile2");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vision()
	{
		$data['title'] = "วิสัยทัศน์ พันธกิจ วัตถุประสงค์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/head");
		$this->load->view("containner/header");
		$this->load->view("index/about/vision");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function register()
	{
		$data['title'] = "สมัครสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/service/register");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function deposit()
	{
		$data['title'] = "บริการเงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/service/deposit");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function credit()
	{
		$data['title'] = "บริการสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/service/credit");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function marry()
	{
		$data['title'] = "สวัสดิการแต่งงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/marry");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function maternity()
	{
		$data['title'] = "สวัสดิการคลอดบุตร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/maternity");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function oldage()
	{
		$data['title'] = "สวัสดิการเงินสมทบยามชรา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/oldage");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function medical()
	{
		$data['title'] = "สวัสดิการช่วยเหลือค่ารักษาพยาบาล สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/medical");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function dead()
	{
		$data['title'] = "สวัสดิการเสียชีวิต สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/welfare/dead");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function promotion()
	{
		$data['title'] = "โปรโมชั่น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/news/promotion");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function activity()
	{
		$data['result'] = $this->officer_model->get_list_activity();
		$data['title'] = "ข่าวสาร/กิจกรรมความเคลื่อนไหว สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/news/activity", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function calendar()
	{
		$data['title'] = "ปฏิทิน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/news/calendar");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function stadium()
	{
		$data['title'] = "โครงการสนามหญ้าเทียม SKF Stadium สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/project/stadium");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function village()
	{
		$data['title'] = "โครงการหมู่บ้านษะกอฟะฮ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/project/village");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function gasstation()
	{
		$data['title'] = "โครงการปั้มน้ำมันเซลล์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/project/gasstation");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function orphan()
	{
		$data['title'] = "โครงการอุปถัมภ์เลี้ยงดูเด็กกำพร้า สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/project/orphan");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function sakofahmarket()
	{
		$data['title'] = "โครงการ Sakofah Market สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/project/sakofahmarket");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function document()
	{
		$data['title'] = "รายงานกิจการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/download/document");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function report()
	{
		$data['title'] = "เอกสารสำหรับสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/download/report");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function withus()
	{
		$data['title'] = "ร่วมงานกับเรา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/contact/withus");
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function real_estate_sale_list()
	{
		$data['result'] = $this->officer_model->get_list_estate();
		$data['title'] = "ขายอสังหาริมทรัพย์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/real_estate_sale/real_estate_sale_list", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function real_estate_sale($asset_number)
	{
		$data['title'] = "ขายอสังหาริมทรัพย์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$data['data'] = $this->officer_model->get_asset_data($asset_number);
		$data['picture'] = $this->officer_model->get_assetpicture($asset_number);
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/real_estate_sale/real_estate_sale", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vacant_list()
	{
		$data['result'] = $this->officer_model->get_list_vacant();
		$data['title'] = "ที่ดินเปล่า สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/vacant/vacant_list", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function vacant($asset_number)
	{
		$data['title'] = "ที่ดินเปล่า สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$data['data'] = $this->officer_model->get_asset_data($asset_number);
		$data['picture'] = $this->officer_model->get_assetpicture($asset_number);
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/vacant/vacant", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function condo_list()
	{
		$data['result'] = $this->officer_model->get_list_condo();
		$data['title'] = "คอนโด สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/vacant/vacant_list", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}

	public function condo($asset_number)
	{
		$data['title'] = "คอนโด สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$data['data'] = $this->officer_model->get_asset_data($asset_number);
		$data['picture'] = $this->officer_model->get_assetpicture($asset_number);
		$this->load->view("containner/head", $data);
		$this->load->view("containner/header");
		$this->load->view("index/asset/condo/condo", $data);
		$this->load->view("containner/footer");
		$this->load->view("containner/script");
	}
}
