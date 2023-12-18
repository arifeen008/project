<?php defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_lang();
		$this->load->model('news_model');
	}

	public function index()
	{
		// $data['google_news'] = json_decode(file_get_contents('https://newsdata.io/api/1/news?country=th&apikey=pub_7046fa204ea984c89b7a98592308f3f28097&language=th&domain=banmuang'));
		$data['news_information'] = $this->news_model->get_news_information();
		$data['news_welfare'] = $this->news_model->get_news_welfare();
		$data['news_credit'] = $this->news_model->get_news_credit();
		$data['news_foundation'] = $this->news_model->get_news_foundation();
		$title['title'] = 'สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $title);
		$this->load->view('container/header_index', $data);
		$this->load->view('index', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script_index');
		$this->news_model->visited_history();
	}

	public function login_page()
	{
		$title['title'] = "เข้าสู่ระบบ";
		$this->load->view("container/head", $title);
		$this->load->view("login");
		$this->load->view("container/script_officer");
	}

	public function news($news_number)
	{
		$data['data'] = $this->news_model->get_news_data($news_number);
		$data['picture'] = $this->news_model->get_newspicture($news_number);
		$data['side_data'] = $this->news_model->get_sidenewsdata($news_number);
		$data['title'] = $data['data']->title . ' สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/news/news', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function board()
	{
		$data['title'] = 'คณะกรรมการผู้บริหาร สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/about/board');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function history()
	{
		$data['title'] = 'ประวัติความเป็นมา สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/about/history');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function office()
	{
		$data['title'] = 'สำนักงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/office');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function klongyang()
	{
		$data['title'] = 'สาขา สำนักงานใหญ่(คลองยาง) สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/klongyang');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function krabi()
	{
		$data['title'] = 'สำนักงาน สาขากระบี่ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/krabi');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function aoluek()
	{
		$data['title'] = 'สำนักงาน สาขาอ่าวลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/aoluek');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function kohlanta()
	{
		$data['title'] = 'สำนักงาน สาขาเกาะลันตา สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/kohlanta');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function klongthom()
	{
		$data['title'] = 'สำนักงาน สาขาคลองท่อม สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/klongthom');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function huayluk()
	{
		$data['title'] = 'สำนักงาน สาขาห้วยลึก สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/huayluk');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function karnjanadid()
	{
		$data['title'] = 'จุดบริการกาญจนดิษฐ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/karnjanadid');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function thontuay()
	{
		$data['title'] = 'จุดบริการต้นทวย สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/thontuay');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function mobile1()
	{
		$data['title'] = 'รถโมบายเคลื่อนที่ 1 สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/mobile1');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function mobile2()
	{
		$data['title'] = 'รถโมบายเคลื่อนที่ 2 สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/branch/mobile2');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function vision()
	{
		$data['title'] = 'วิสัยทัศน์ พันธกิจ วัตถุประสงค์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/vision');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function structure()
	{
		$data['title'] = 'สำนักงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/structure');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function result()
	{
		$data['title'] = 'ผลการดำเนินงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/head');
		$this->load->view('container/header_index');
		$this->load->view('index/about/result');
		$this->load->view('container/footer');
		$this->load->view('container/script_result');
	}

	public function register()
	{
		$data['title'] = 'สมัครสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/service/register');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function deposit()
	{
		$data['title'] = 'บริการเงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/service/deposit');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function credit()
	{
		$data['title'] = 'บริการสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/service/credit');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function marry()
	{
		$data['title'] = 'สวัสดิการแต่งงาน สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/welfare/marry');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function maternity()
	{
		$data['title'] = 'สวัสดิการคลอดบุตร สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/welfare/maternity');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function oldage()
	{
		$data['title'] = 'สวัสดิการเงินสมทบยามชรา สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/welfare/oldage');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function medical()
	{
		$data['title'] = 'สวัสดิการช่วยเหลือค่ารักษาพยาบาล สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/welfare/medical');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function dead()
	{
		$data['title'] = 'สวัสดิการเสียชีวิต สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/welfare/dead');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function promotion()
	{
		$data['title'] = 'โปรโมชั่น สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/news/promotion');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function activity()
	{
		$config = array();
		$config['base_url'] = base_url('index/activity');
		$config['total_rows'] = $this->news_model->getAllNews();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;

		$config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination pagination-circle justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = 'หน้าแรก';
		$config['last_link'] = 'หน้าสุดท้าย';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><span class="page-link" href="#">';
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['title'] = 'ข่าวสาร/กิจกรรมความเคลื่อนไหว สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$data['links'] = $this->pagination->create_links();
		$data['result'] = $this->news_model->get_list_activity($config['per_page'], $page);
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/news/activity', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function calendar()
	{
		$data['title'] = 'ปฏิทิน สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/news/calendar');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function pray_time()
	{
		$pray_time = file_get_contents('http://api.aladhan.com/v1/calendarByAddress?address=krabi,Thailand&method=2&month=09&year=2022');
		$data['pray_time'] = json_decode($pray_time);
		$title['title'] = 'เวลาละหมาด สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $title);
		$this->load->view('container/header_index');
		$this->load->view('index/news/pray_time', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function stadium()
	{
		$data['title'] = 'โครงการสนามหญ้าเทียม SKF Stadium สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/project/stadium');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function village()
	{
		$data['title'] = 'โครงการหมู่บ้านษะกอฟะฮ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/project/village');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function gasstation()
	{
		$data['title'] = 'โครงการปั้มน้ำมันเซลล์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/project/gasstation');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function orphan()
	{
		$data['title'] = 'โครงการอุปถัมภ์เลี้ยงดูเด็กกำพร้า สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/project/orphan');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function sakofahmarket()
	{
		$data['title'] = 'โครงการ Sakofah Market สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/project/sakofahmarket');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function document()
	{
		$data['title'] = 'รายงานกิจการ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/download/document');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function report()
	{
		$data['title'] = 'เอกสารสำหรับสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/download/report');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function withus()
	{
		$data['title'] = 'ร่วมงานกับเรา สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/contact/withus');
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function home_list()
	{
		$data['result'] = $this->news_model->get_list_estate();
		$data['title'] = 'ขายอสังหาริมทรัพย์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/home/home_list', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function home($asset_number)
	{
		$data['title'] = 'ขายอสังหาริมทรัพย์ สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$data['data'] = $this->news_model->get_asset_data($asset_number);
		$data['picture'] = $this->news_model->get_assetpicture($asset_number);
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/home/home', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function vacant_list()
	{
		$data['result'] = $this->news_model->get_list_vacant();
		$data['title'] = 'ที่ดินเปล่า สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/vacant/vacant_list', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function vacant($asset_number)
	{
		$data['title'] = 'ที่ดินเปล่า สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$data['data'] = $this->news_model->get_asset_data($asset_number);
		$data['picture'] = $this->news_model->get_assetpicture($asset_number);
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/vacant/vacant', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function condo_list()
	{
		$data['result'] = $this->news_model->get_list_condo();
		$data['title'] = 'คอนโด สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/condo/condo_list', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}

	public function condo($asset_number)
	{
		$data['title'] = 'คอนโด สหกรณ์อิสลามษะกอฟะฮ จำกัด';
		$data['data'] = $this->news_model->get_asset_data($asset_number);
		$data['picture'] = $this->news_model->get_assetpicture($asset_number);
		$this->load->view('container/head', $data);
		$this->load->view('container/header_index');
		$this->load->view('index/asset/condo/condo', $data);
		$this->load->view('container/footer');
		$this->load->view('container/script');
	}
}
