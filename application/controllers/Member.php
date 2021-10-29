<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('member_model');
	}

	public function login_member_page()
	{
		$this->load->view("containner/head");
		$this->load->view("login_member");
	}

	public function login_member()
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
			$this->load->view("containner/head");
			$this->load->view("containner/header_member", $login_result);
			$this->load->view("containner/sidebar_member");
			$this->load->view("member/data_member/data_member", $login_result);
			$this->load->view("containner/script");
		} else {
			$this->load->view("containner/head");
			$this->load->view("login_member");
			echo "<script>alert('กรุณาใส่รหัสผ่านให้ถูกต้อง');</script>";
		}
	}

	public function logout_member()
	{
		$this->session->unset_userdata(array('ID_CARD', 'MEM_ID',  'BR_NO', 'FNAME', 'LNAME'));
		redirect('index', 'refresh');
	}

	public function register_member()
	{
		$this->load->view("containner/head");
		$this->load->view("register_form");
		$this->load->view("containner/script");
	}

	public function register_form()
	{
		$this->form_validation->set_rules(
			'id_card',
			'id_card',
			'required|min_length[13]|max_length[13]',
			array(
				'required' => '*กรุณาใส่รหัสบัตรประชาชน',
				'min_length' => '*กรุณาใส่รหัสบัตรประชาชน 13 หลัก',
				'max_length' => '*กรุณาใส่รหัสบัตรประชาชน 13 หลัก'
			)
		);
		$this->form_validation->set_rules(
			'user_id',
			'user_id',
			'required|min_length[5]|max_length[13]',
			array(
				'required' => '*กรุณาใส่ชื่อผู้ใช้',
				'min_length' => '*กรุณาใส่ชื่อผู้ใช้อย่างน้อย 5 ตัวขึ้นไป',
				'max_length' => '*กรุณาใส่ชื่อผู้ใช้ไม่เกิน 13 ตัว'
			)
		);
		$this->form_validation->set_rules(
			'password',
			'password',
			'required|min_length[6]',
			array(
				'required' => '*กรุณาใส่รหัสผ่าน',
				'min_length' => '*กรุณาใส่รหัสผ่านอย่างต่ำ 6 ตัวขึ้นไป'
			)
		);
		$this->form_validation->set_rules(
			'confirm_password',
			'confirm_password',
			'required|matches[password]',
			array(
				'required' => '*กรุณาใส่ยืนยันรหัสผ่าน',
				'matches' => '*กรุณาใส่รหัสผ่านที่ตรงกัน'
			)
		);
		if ($this->form_validation->run() == false) {
			$this->load->view("containner/head");
			$this->load->view("register_form");
			$this->load->view("containner/script");
		} else {
			$id_card = $this->input->post('id_card');
			$user_id = $this->input->post('user_id');
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$result = $this->member_model->insert_register_form($id_card, $user_id, $password);
			if ($result == true) {
				$this->load->view("containner/head");
				$this->load->view("login_member");
				$this->load->view("containner/script");
				echo "<script>alert('สมัครสมาชิกเสร็จสิ้น');</script>";
			} else {
				$this->load->view("containner/head");
				$this->load->view("register_form");
				$this->load->view("containner/script");
				echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรณีเคยสมัครแล้วลืมรหัสผ่านโปรดแจ้งทางสหกรณ์');</script>";
			}
		}
	}

	public function data_member()
	{
		$br_no = $this->session->userdata("BR_NO");
		$mem_id = $this->session->userdata("MEM_ID");
		$data = $this->member_model->getdata_member($br_no, $mem_id);
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
		$this->load->view("containner/header_member", $data);
		$this->load->view("containner/sidebar_member");
		$this->load->view("member/welfare_member_request/welfare_member_request", $data2);
		$this->load->view("containner/script");
	}
}
