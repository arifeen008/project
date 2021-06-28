<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Officer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('officer_model');
	}

	public function login_officer()
	{
		$this->load->view("containner/head");
		$this->load->view("login_officer");
	}

	public function check_officer()
	{
		$this->form_validation->set_rules('user_id', 'user_id', 'required', array('required' => 'กรุณาใส่ ID เจ้าหน้าที่'));
		$this->form_validation->set_rules('password', 'password', 'required', array('required' => 'กรุณาใส่รหัสผ่าน'));
		if ($this->form_validation->run() == false) {
			$this->load->view("containner/head");
			$this->load->view("login_officer");
			$this->load->view("containner/script");
		} else {
			$result = $this->officer_model->fetch_user_login($this->input->post('user_id'), $this->input->post('password'));
			if (!empty($result)) {
				$session = array(
					'USER_ID' => $result->USER_ID,
					'LEVEL_CODE' => $result->LEVEL_CODE,
					'BR_NO' => $result->BR_NO,
					'USER_NAME' => $result->USER_NAME
				);

				$this->session->set_userdata($session);
				$USER_ID = $this->session->userdata('USER_ID');
				$LEVEL_CODE = $this->session->userdata('LEVEL_CODE');
				$data = $this->officer_model->data_officer($USER_ID);
				if ($LEVEL_CODE === "A") {
					$this->load->view("containner/head");
					$this->load->view("containner/header_officer", $data);
					$this->load->view("containner/sidebar_manager");
					$this->load->view("memberandshare");
					$this->load->view("containner/script");
				} else {
					$this->load->view("containner/head");
					$this->load->view("containner/header_officer", $data);
					$this->load->view("containner/sidebar_officer");
					$this->load->view("memberandshare");
					$this->load->view("containner/script");
				}
			} else {
				$this->session->unset_userdata(array('USER_ID', 'BR_NO', 'LEVEL_CODE', 'USER_NAME'));
				$this->load->view("containner/head");
				$this->load->view("login_officer");
				$this->load->view("containner/script");
				echo "<script>alert('คุณใส่ Usename หรือ Password ไม่ถูกต้อง');</script>";
			}
		}
	}

	public function logout_officer()
	{
		$this->session->unset_userdata('USER_ID', 'LEVEL_CODE', 'USER_NAME', 'BR_NO');
		redirect('index', 'refresh');
	}

	public function data_officer()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("data_officer");
		$this->load->view("containner/script");
	}

	public function goto_data_officer()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("data_officer");
		$this->load->view("containner/script");
	}

	public function deposit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("deposit_system");
		$this->load->view("containner/script");
	}

	public function depositreport_summary()
	{
		$user_id = $this->session->userdata('USER_ID');
		$branch_number = $this->session->userdata('BR_NO');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$data1 = $this->officer_model->data_officer($user_id);
		$data2['result'] = $this->officer_model->depositreport_summary($startdate, $enddate, $user_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data1);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("depositreport_summary", $data2);
		$this->load->view("containner/script");
	}

	public function account_book_balance()
	{
		$user_id = $this->session->userdata('USER_ID');
		$account_number = $this->input->post('account_number');
		$id_card = $this->input->post('id_card');
		// $data_member = $this->officer_model->getid($id_card);
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->account_book_balance($account_number);
		$data['detail'] = $this->officer_model->detail_deposit($account_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("account_book_balance", $data);
		$this->load->view("containner/script");
	}

	public function credit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data1 = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data1);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("credit_system");
		$this->load->view("containner/script");
	}

	public function credit_officer()
	{
		$id_card = $this->input->post('id_card');
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['name'] = $this->officer_model->getname_member($id_card);
		$mem_id = $data['name']->MEM_ID;
		$br_no = $data['name']->BR_NO;
		$data['result'] = $this->officer_model->credit_officer($mem_id, $br_no);
		if ($data['name'] != NULL && $data['result'] != NULL) {
			$this->load->view("containner/head");
			$this->load->view("containner/header_officer", $data_officer);
			$this->load->view("containner/sidebar_officer");
			$this->load->view("credit_officer", $data);
			$this->load->view("containner/script");
		} else {
			echo "<script>alert('ไม่มียอดข้อมูลสินเชื่อสมาชิกดังกล่าว');</script>";
			redirect('officer/credit_system', 'refresh');
		}
	}

	public function credit_officer_detail($code, $br_no)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['select'] = $this->officer_model->credit_officer_select($code, $br_no);
		$data['result'] = $this->officer_model->credit_officer_detail($code, $br_no);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("credit_officer_detail", $data);
		$this->load->view("containner/script");
	}

	public function checkcredit_officer($mem_id, $branch_number)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['member'] = $this->officer_model->data_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->checkcredit_officer($mem_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("checkcredit_officer", $data);
		$this->load->view("containner/script");
	}

	public function checkcredit_officer_detail($code, $branch_number)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['select'] = $this->officer_model->checkcredit_officer_select($code, $branch_number);
		$data['result'] = $this->officer_model->checkcredit_officer_detail($code, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("checkcredit_officer_detail", $data);
		$this->load->view("containner/script");
	}

	public function memberandshare()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("memberandshare");
		$this->load->view("containner/script");
	}

	public function seedata_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->seedata_member($mem_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("seedata_member", $data);
		$this->load->view("containner/script");
	}

	public function listdata_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data['result'] = $this->officer_model->listdata_member($fname, $lname, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("listdata_member", $data);
		$this->load->view("containner/script");
	}

	public function listdatashare_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data['result'] = $this->officer_model->listdatashare_member($fname, $lname, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("listdatashare_member", $data);
		$this->load->view("containner/script");
	}

	public function datashare_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['resume'] = $this->officer_model->share_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->datashare_member($mem_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("datashare_member", $data);
		$this->load->view("containner/script");
	}

	public function welfare_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("welfare_system");
		$this->load->view("containner/script");
	}

	public function welfare_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$id_card = $this->input->post('id_card');
		$data_member = $this->officer_model->getid($id_card);
		$data['result'] = $this->officer_model->welfare_member($data_member->MEM_ID, $data_member->BR_NO);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("seewelfare_member", $data);
		$this->load->view("containner/script");
	}

	// =========================================================================================================================================================================


}
