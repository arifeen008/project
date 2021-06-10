<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	public function login_member()
	{
		$this->load->view("containner/head");
		$this->load->view("login_member");
	}

	public function check_member()
	{
		$this->form_validation->set_rules('user_id', 'user_id', 'required', array('required' => 'กรุณาใส่ชื่อผู้ใช้'));
		$this->form_validation->set_rules('password', 'password', 'required', array('required' => 'กรุณาใส่รหัสผ่าน'));
		if ($this->form_validation->run() == false) {
			$this->load->view("containner/head");
			$this->load->view("login_member");
			$this->load->view("containner/script");
		} else {
			$result = $this->member_model->fetch_user_login($this->input->post("user_id"));
			if (password_verify($this->input->post("password"), $result->PASSWORD)) {
				$login = $this->member->getdata_member($result->BR_NO, $result->MEM_ID);
				$session = array(
					'ID_CARD' => $login->ID_CARD, 'MEM_ID' => $login->MEM_ID, 'BR_NO' => $login->BR_NO, 'FNAME' => $login->FNAME, 'LNAME' => $login->LNAME
				);
				$this->session->set_userdata($session);
				$ID_CARD = $this->session->userdata("ID_CARD");
				$data = $this->member_model->data_member($ID_CARD);
				$this->load->view("containner/head");
				$this->load->view("containner/headermember", $data);
				$this->load->view("containner/sidebarmember", $data);
				$this->load->view("data_member", $data);
				// $this->load->view("containner/footermember");
				$this->load->view("containner/script");
			} else {
				$this->load->view("containner/head");
				$this->load->view("login_member");
				$this->load->view("containner/script");
				echo "<script>alert('กรุณาใส่รหัสผ่านให้ถูกต้อง');</script>";
			}
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
				echo "<script>alert('สมัครสมาชิกไม่สำเร็จ');</script>";
			}
		}
	}

	public function data_member()
	{
		$ID_CARD = $this->session->userdata("ID_CARD");
		$data = $this->member_model->data_member($ID_CARD);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data);
		$this->load->view("containner/sidebarmember", $data);
		$this->load->view("data_member", $data);
		$this->load->view("containner/script");
	}

	public function editdata_member()
	{
		$ID_CARD = $this->session->userdata("ID_CARD");
		$data = $this->member_model->data_member($ID_CARD);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data);
		$this->load->view("containner/sidebarmember", $data);
		$this->load->view("editdata_member", $data);
		$this->load->view("containner/script");
	}

	public function updateeditdata_member()
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MOBILE_TEL = $this->input->post('MOBILE_TEL');
		$LINE_ID = $this->input->post('LINE_ID');
		$EMAIL = $this->input->post('EMAIL');
		$result = $this->member_model->updatephone_member($MOBILE_TEL, $LINE_ID, $EMAIL, $ID_CARD);
		if ($result) {
			$data = $this->member_model->data_member($ID_CARD);
			echo "<script>alert('แก้ไขสำเร็จ')</script>";
			redirect('member/data_member', 'refresh');
		} else {
			$data = $this->member_model->data_member($ID_CARD);
			echo "<script>alert('แก้ไขไม่สำเร็จ')</script>";
			redirect('member/data_member', 'refresh');
		}
	}

	public function share_member()
	{
		$MEM_ID = $this->session->userdata("MEM_ID");
		$ID_CARD = $this->session->userdata("ID_CARD");
		$BR_NO = $this->session->userdata("BR_NO");
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->share_member($ID_CARD, $BR_NO, $MEM_ID);
		$data2['detail'] = $this->member_model->share_member_detail($ID_CARD, $BR_NO, $MEM_ID);
		// echo "MEM_ID = ". $MEM_ID ."ID_CARD = ". $ID_CARD;
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("share_member", $data2);
		$this->load->view("containner/script");
	}

	public function deposit_member()
	{
		$ID_CARD = $this->session->userdata("ID_CARD");
		$BR_NO = $this->session->userdata("BR_NO");
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->deposit_member($ID_CARD, $BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember");
		$this->load->view("deposit_member", $data2);
		$this->load->view("containner/script");
	}

	public function deposit_member_seedata($ACCOUNT_NO)
	{
		$ID_CARD = $this->session->userdata("ID_CARD");
		$account_number = $this->input->get('ACCOUNT_NO');
		$dataaccount['result'] = $this->member_model->getaccount_member($ACCOUNT_NO);
		$data = $this->member_model->data_member($ID_CARD);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data);
		$this->load->view("containner/sidebarmember");
		$this->load->view("deposit_member_seedata", $dataaccount);
		$this->load->view("containner/script");
	}

	public function deposit_member_seeaccount()
	{
		$ID_CARD = $this->session->userdata("ID_CARD");
		$account_number = $this->input->post("account_number");
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->deposit_member_seeaccount($account_number, $startdate, $enddate);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember");
		$this->load->view("deposit_member_seeaccount", $data2);
		$this->load->view("containner/script");
	}

	public function deposit_member_seeaccount_allday($ACCOUNT_NO)
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->deposit_member_seeaccount_allday($ACCOUNT_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember");
		$this->load->view("deposit_member_seeaccount", $data2);
		$this->load->view("containner/script");
	}

	public function credit_member()
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MEM_ID = $this->session->userdata('MEM_ID');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->credit_member($MEM_ID, $ID_CARD, $BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("credit_member", $data2);
		$this->load->view("containner/script");
	}

	public function credit_member_detail($code)
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->credit_member_detail($BR_NO, $code);
		$data2['select'] = $this->member_model->credit_member_select($BR_NO, $code);

		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("credit_member_detail", $data2);
		$this->load->view("containner/script");
	}

	public function checkcredit_member()
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MEM_ID = $this->session->userdata('MEM_ID');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->checkcredit_member($MEM_ID, $ID_CARD, $BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("checkcredit_member", $data2);
		$this->load->view("containner/script");
	}

	public function checkcredit_member_detail($code)
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MEM_ID = $this->session->userdata('MEM_ID');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->credit_member_detail($BR_NO, $code);
		$data2['select'] = $this->member_model->credit_member_select($BR_NO, $code);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("checkcredit_member_detail", $data2);
		$this->load->view("containner/script");
	}

	public function welfare_member()
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MEM_ID = $this->session->userdata('MEM_ID');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->welfare_member($MEM_ID, $ID_CARD, $BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("welfare_member", $data2);
		$this->load->view("containner/script");
	}

	public function requestwelfare_member()
	{
		$ID_CARD = $this->session->userdata('ID_CARD');
		$MEM_ID = $this->session->userdata('MEM_ID');
		$BR_NO = $this->session->userdata('BR_NO');
		$data1 = $this->member_model->data_member($ID_CARD);
		$data2['result'] = $this->member_model->welfare_member($MEM_ID, $ID_CARD, $BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/headermember", $data1);
		$this->load->view("containner/sidebarmember", $data1);
		$this->load->view("requestwelfare_member", $data2);
		$this->load->view("containner/script");
	}
}
