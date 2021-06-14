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
		$this->form_validation->set_rules('USER_ID', 'USER_ID', 'required', array('required' => 'กรุณาใส่ ID เจ้าหน้าที่'));
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required', array('required' => 'กรุณาใส่รหัสผ่าน'));
		if ($this->form_validation->run() == false) {
			$this->load->view("containner/head");
			$this->load->view("login_officer");
			$this->load->view("containner/script");
		} else {
			$result = $this->officer_model->fetch_user_login($this->input->post('USER_ID'), $this->input->post('PASSWORD'));
			if (!empty($result)) {
				$session = array(
					'USER_ID' => $result->USER_ID,
					'BR_NO' => $result->BR_NO,
					'LEVEL_CODE' => $result->LEVEL_CODE,
					'USER_NAME' => $result->USER_NAME
				);

				$this->session->set_userdata($session);

				$USER_ID = $this->session->userdata('USER_ID');
				$LEVEL_CODE = $this->session->userdata('LEVEL_CODE');
				$data = $this->officer_model->data_officer($USER_ID);
				if ($LEVEL_CODE === 'A') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer");
					$this->load->view("data_officer");
					$this->load->view("containner/script");
				} elseif ($LEVEL_CODE === 'B') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer");
					$this->load->view("data_officer");
					$this->load->view("containner/script");
				} elseif ($LEVEL_CODE === 'C') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer");
					$data2['result'] = $this->officer_model->pullbranch();
					$this->load->view("depositsystem", $data2);
					$this->load->view("containner/script");
				} elseif ($LEVEL_CODE === 'D') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer_D");
					$this->load->view("data_officer");
					$this->load->view("containner/script");
				} elseif ($LEVEL_CODE === 'E') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer");
					$this->load->view("data_officer");
					$this->load->view("containner/script");
				} elseif ($LEVEL_CODE === 'F') {
					$this->load->view("containner/head");
					$this->load->view("containner/headerofficer", $data);
					$this->load->view("containner/sidebarofficer");
					$this->load->view("data_officer");
					$this->load->view("containner/script");
				}
			} else {
				$this->session->unset_userdata(array('USER_ID', 'LEVEL_CODE', 'USER_NAME', 'BR_NO'));
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
		$this->load->view("containner/headerofficer", $data);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("data_officer");
		$this->load->view("containner/script");
	}

	public function goto_data_officer()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("data_officer");
		$this->load->view("containner/script");
	}

	public function depositsystem()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data1 = $this->officer_model->data_officer($USER_ID);
		$data2['result'] = $this->officer_model->pullbranch();
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data1);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("depositsystem", $data2);
		$this->load->view("containner/script");
	}

	public function depositreport_summary()
	{
		$user_id = $this->session->userdata('USER_ID');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$data1 = $this->officer_model->data_officer($user_id);
		$data2['result'] = $this->officer_model->depositreport_summary($startdate, $enddate, $user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data1);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("depositreport_summary", $data2);
		$this->load->view("containner/script");
	}

	public function account_book_balance()
	{
		$user_id = $this->session->userdata('USER_ID');
		$mem_id = $this->input->post('mem_id');
		$branch_number = $this->input->post('branch_number');
		$data = $this->officer_model->data_officer($user_id);
		$data2['result'] = $this->officer_model->account_book_balance($mem_id,$branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("account_book_balance", $data2);
		$this->load->view("containner/script");
	}

	public function creditsystem()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data1 = $this->officer_model->data_officer($USER_ID);
		$data2['result'] = $this->officer_model->pullbranch();
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data1);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("creditsystem", $data2);
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
		$data['result'] = $this->officer_model->credit_officer($mem_id,$br_no);
		if ($data['name'] != NULL && $data['result'] != NULL) {
			$this->load->view("containner/head");
			$this->load->view("containner/headerofficer", $data_officer);
			$this->load->view("containner/sidebarofficer");
			$this->load->view("credit_officer", $data);
			$this->load->view("containner/script");
		} else {
			echo "<script>alert('ไม่มียอดข้อมูลสินเชื่อสมาชิกดังกล่าว');</script>";
			redirect('officer/creditsystem', 'refresh');
		}
	}

	public function credit_officer_detail($code, $br_no)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['select'] = $this->officer_model->credit_officer_select($code, $br_no);
		$data['result'] = $this->officer_model->credit_officer_detail($code, $br_no);
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data_officer);
		$this->load->view("containner/sidebarofficer");
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
		$this->load->view("containner/headerofficer", $data_officer);
		$this->load->view("containner/sidebarofficer");
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
		$this->load->view("containner/headerofficer", $data_officer);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("checkcredit_officer_detail", $data);
		$this->load->view("containner/script");
	}

	public function memberandshare()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/headerofficer", $data_officer);
		$this->load->view("containner/sidebarofficer");
		$this->load->view("memberandshare");
		$this->load->view("containner/script");
	}
}
