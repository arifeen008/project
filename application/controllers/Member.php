<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	public function login_page()
	{
		$title['title'] = "เข้าสู่ระบบ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("login");
	}

	public function login()
	{
		$result = $this->member_model->fetch_user_login($this->input->post("user_id"));
		if (password_verify($this->input->post('password'), $result->PASSWORD)) {
			$login_result = $this->member_model->getdata_member($result->BR_NO, $result->MEM_ID);
			$session = array(
				'MEM_ID' => $login_result->MEM_ID,
				'BR_NO' => $login_result->BR_NO,
				'FNAME' => $login_result->FNAME,
				'LNAME' => $login_result->LNAME,
				'ID_CARD' => $login_result->ID_CARD
			);
			$this->session->set_userdata($session);
			$title['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
			$this->load->view("containner/head", $title);
			$this->load->view("containner/header_member", $login_result);
			$this->load->view("containner/sidebar_member");
			$this->load->view("member/data_member/data_member", $login_result);
			$this->load->view("containner/script");
		} else {
			echo "<script>alert('คุณใส่ Email หรือ Password ไม่ถูกต้อง');</script>";
			redirect('member/login_page', 'refresh');
		}
	}

	public function logout_member()
	{
		$this->session->unset_userdata(array('ID_CARD', 'MEM_ID',  'BR_NO', 'FNAME', 'LNAME'));
		redirect('index', 'refresh');
	}

	public function register_page()
	{
		$title['title'] = "สมัครสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head_register", $title);
		$this->load->view("register_form");
		$this->load->view("containner/script_register");
	}

	public function changepassword_page()
	{
		$title['title'] = "เปลี่ยนรหัสผ่าน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head_register", $title);
		$this->load->view("change_password");
		$this->load->view("containner/script");
	}

	public function forgotpassword_page()
	{
		$title['title'] = "ลืมรหัสผ่าน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head_register", $title);
		$this->load->view("forgot_password");
		$this->load->view("containner/script");
	}

	// public function register()
	// {
	// 	if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
	// 		$secret = '6LcD-NkdAAAAAJUtMJS0ZvOzcsyTm6yyTePbk6Pr';
	// 		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
	// 		$responseData = json_decode($verifyResponse);

	// 		if ($responseData->success) {
	// 			$id_card = $this->input->post('id_card');
	// 			$user_id = $this->input->post('user_id');
	// 			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
	// 			$result = $this->member_model->insert_register_form($id_card, $user_id, $password);
	// 			if ($result == true) {
	// 				redirect('member/login_page', 'refresh');
	// 				echo "<script>alert('สมัครสมาชิกเสร็จสิ้น');</script>";
	// 			} else {
	// 				redirect('member/register_page', 'refresh');
	// 				echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรณีเคยสมัครแล้วลืมรหัสผ่านโปรดแจ้งทางสหกรณ์');</script>";
	// 			}
	// 		}
	// 	} else {
	// 		echo "<script>alert('กรุณาติ้ก Recapcha');</script>";
	// 	}
	// }

	public function register()
	{
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$id_card = $this->input->post('id_card');
		$result = $this->member_model->insert_register_form($email, $password, $id_card);
		if ($result) {
			$result = $this->member_model->insert_email($email, $id_card);
			if ($result) {
				echo "<script>alert('สมัครสมาชิกเสร็จสิ้น');</script>";
				redirect('member/login_page', 'refresh');
			} else {
				echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรณีเคยสมัครแล้วลืมรหัสผ่านโปรดแจ้งทางสหกรณ์');</script>";
				redirect('member/register_page', 'refresh');
			}
		} else {
			echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรณีเคยสมัครแล้วลืมรหัสผ่านโปรดแจ้งทางสหกรณ์');</script>";
			redirect('member/register_page', 'refresh');
		}
	}

	public function data_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$title['title'] = "สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member", $data);
		$this->load->view("member/data_member/data_member", $data);
		$this->load->view("containner/script");
	}

	public function share_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data_member = $this->member_model->getdata_member($br_no, $mem_id);
		$data['result'] = $this->member_model->share_member($br_no, $mem_id);
		$data['detail'] = $this->member_model->share_member_detail($br_no, $mem_id);
		$title['title'] = "เงินหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data_member);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/share_member/share_member", $data);
		$this->load->view("containner/script");
	}

	public function deposit_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->deposit_member($br_no, $mem_id);
		$title['title'] = "เงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/deposit_member/deposit_member", $data2);
		$this->load->view("containner/script");
	}

	public function data_deposit_member($ACCOUNT_NO)
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data_account['result'] = $this->member_model->data_deposit_member($ACCOUNT_NO);
		$title['title'] = "เงินฝากในบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/deposit_member/data_deposit_member", $data_account);
		$this->load->view("containner/script");
	}

	public function credit_member_open()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->credit_member($br_no, $mem_id);
		$title['title'] = "สินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member", $data);
		$this->load->view("member/credit_member_open/credit_member_open", $data2);
		$this->load->view("containner/script");
	}

	public function credit_member_open_detail($code)
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->credit_member_detail($br_no, $code);
		$data2['select'] = $this->member_model->credit_member_select($br_no, $code);
		$title['title'] = "รายละเอียดสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member", $data);
		$this->load->view("member/credit_member_open/credit_member_open_detail", $data2);
		$this->load->view("containner/script");
	}

	public function credit_member_close()
	{
		$id_card = $this->session->userdata('ID_CARD');
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->checkcredit_member($mem_id, $id_card, $br_no);
		$title['title'] = "สินเชื่อที่ปิดไปแล้ว สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member", $data);
		$this->load->view("member/credit_member_close/credit_member_close", $data2);
		$this->load->view("containner/script");
	}

	public function credit_member_close_detail($code)
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->credit_member_detail($br_no, $code);
		$data2['select'] = $this->member_model->credit_member_select($br_no, $code);
		$title['title'] = "รายละเอียดสินเชื่อที่ปิดไปแล้ว สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member", $data);
		$this->load->view("member/credit_member/credit_member_close_detail", $data2);
		$this->load->view("containner/script");
	}

	public function welfare_member()
	{
		$mem_id = $this->session->userdata("MEM_ID");
		$br_no = $this->session->userdata("BR_NO");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data_welfare['result'] = $this->member_model->welfare_member($mem_id, $br_no);
		$title['title'] = "สวัสดิการสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/welfare_member/welfare_member", $data_welfare);
		$this->load->view("containner/script");
	}

	public function welfare_member_request()
	{
		$id_card = $this->session->userdata('ID_CARD');
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$data2['result'] = $this->member_model->welfare_member($mem_id, $id_card, $br_no);
		$title['title'] = "ยื่นขอรับสวัสดิการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/welfare_member_request/welfare_member_request", $data2);
		$this->load->view("containner/script");
	}
}
