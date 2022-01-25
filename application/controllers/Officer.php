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
		$result = $this->officer_model->fetch_user_login($this->input->post('user_id'), $this->input->post('password'));
		if (!empty($result)) {
			$session = array(
				'USER_ID' => $result->USER_ID,
				'LEVEL_CODE' => $result->LEVEL_CODE,
				'BR_NO' => $result->BR_NO,
				'USER_NAME' => $result->USER_NAME
			);
			$this->session->set_userdata($session);
			$user_id = $this->session->userdata('USER_ID');
			$level_code = $this->session->userdata('LEVEL_CODE');
			$data = $this->officer_model->data_officer($user_id);
			if ($level_code === "A") {
				$title['title'] = "ระบบผู้จัดการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
				$this->load->view("containner/head", $title);
				$this->load->view("containner/header_officer", $data);
				$this->load->view("containner/sidebar_manager");
				$this->load->view("officer/member_share_system/member_share_system");
				$this->load->view("containner/script");
			} else {
				$title['title'] = "ระบบเจ้าหน้าที่ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
				$this->load->view("containner/head", $title);
				$this->load->view("containner/header_officer", $data);
				$this->load->view("containner/sidebar_officer");
				$this->load->view("officer/member_share_system/member_share_system");
				$this->load->view("containner/script");
			}
		} else {
			echo "<script>alert('คุณใส่ Email หรือ Password ไม่ถูกต้อง');</script>";
			redirect('index/index', 'refresh');
		}
	}

	public function logout_officer()
	{
		$this->session->unset_userdata(array('USER_ID', 'LEVEL_CODE', 'BR_NO', 'USER_NAME'));
		redirect('index', 'refresh');
	}

	public function member_share_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระบบทะเบียนสมาชิกและหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/member_share_system");
		$this->load->view("containner/script");
	}

	public function deposit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบเงินฝาก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/deposit_system");
		$this->load->view("containner/script");
	}

	public function depositreport_summary()
	{
		$user_id = $this->session->userdata('USER_ID');
		$branch_number = $this->session->userdata('BR_NO');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->depositreport_summary($startdate, $enddate, $user_id, $branch_number);
		$title['title'] = "เงินฝากพนักงานประจำวัน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/depositreport_summary", $data);
		$this->load->view("containner/script");
	}

	public function list_deposit_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$account_number = $this->input->post('account_number');
		$mem_id = $this->input->post('mem_id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->list_deposit_member($account_number, $mem_id, $fname, $lname, $branch_number);
		$title['title'] = "ค้นหาเงินฝากในบัญชีสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/list_deposit_member", $data);
		$this->load->view("containner/script");
	}

	public function deposit_member_detail($account_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->deposit_member_detail($account_number);
		$title['title'] = "เงินฝากในบัญชีสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/deposit_member_detail", $data);
		$this->load->view("containner/script");
	}

	public function credit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data1 = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบงานสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data1);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/credit_system");
		$this->load->view("containner/script");
	}

	public function listcredit_member()
	{
		$mem_id = $this->input->post('mem_id');
		$branch_number = $this->input->post('branch_number');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->listcredit_member($mem_id, $branch_number, $fname, $lname);
		$title['title'] = "ค้นหายอดสินเชื่อในสมุดของบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/listdatacredit_member", $data);
		$this->load->view("containner/script");
	}

	public function cooperative_regulation()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ค้นหายอดสินเชื่อในสมุดของบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/cooperative_regulation/cooperative_regulation");
		$this->load->view("containner/script");
	}

	public function cooperative_rules()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ค้นหายอดสินเชื่อในสมุดของบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/cooperative_rules/cooperative_rules");
		$this->load->view("containner/script");
	}

	public function credit_officer($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['name'] = $this->officer_model->data_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->credit_officer($mem_id, $branch_number);
		$title['title'] = "สินเชื่อคุณ" . $data['name']->FNAME . " " . $data['name']->FNAME . " สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/credit_officer", $data);
		$this->load->view("containner/script");
	}

	public function credit_officer_detail($code, $br_no)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['select'] = $this->officer_model->credit_officer_select($code, $br_no);
		$data['result'] = $this->officer_model->credit_officer_detail($code, $br_no);
		$title['title'] = "รายละเอียดสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/credit_officer_detail", $data);
		$this->load->view("containner/script");
	}

	public function listclosedcredit_member()
	{
		$mem_id = $this->input->post('mem_id');
		$branch_number = $this->input->post('branch_number');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->listcredit_member($mem_id, $branch_number, $fname, $lname);
		$title['title'] = "ค้นหายอดสินเชื่อที่ปิดแล้วในสมุดของบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/listclosedcredit_member", $data);
		$this->load->view("containner/script");
	}

	public function closed_credit_officer($mem_id, $branch_number)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['name'] = $this->officer_model->data_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->checkcredit_officer($mem_id, $branch_number);
		$title['title'] = "สินเชื่อคุณ" . $data['name']->FNAME . " " . $data['name']->FNAME . " สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/closed_credit_officer", $data);
		$this->load->view("containner/script");
	}

	public function closedcredit_officer_detail($code, $branch_number)
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['select'] = $this->officer_model->checkcredit_officer_select($code, $branch_number);
		$data['result'] = $this->officer_model->checkcredit_officer_detail($code, $branch_number);
		$title['title'] = "รายละเอียดสินเชื่อที่ปิดแล้ว สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/closed_credit_officer_detail", $data);
		$this->load->view("containner/script");
	}

	public function search_data_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['data_member'] = $this->officer_model->seedata_member($mem_id, $branch_number);
		$data['deposit_member'] = $this->officer_model->deposit_member($mem_id, $branch_number);
		$data['credit_member'] = $this->officer_model->credit_member($mem_id, $branch_number);
		$data['stock_select'] = $this->officer_model->stock_select($mem_id, $branch_number);
		$data['stock_details'] = $this->officer_model->stock_details($mem_id, $branch_number);
		$title['title'] = "สมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/search_data_member", $data);
		$this->load->view("containner/script");
	}

	public function account_details($account_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['account_details'] = $this->officer_model->account_details($account_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/account_details", $data);
		$this->load->view("containner/script");
	}

	public function loan_details($code,$branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['loan_select'] = $this->officer_model->loan_select($code,$branch_number);
		$data['loan_details'] = $this->officer_model->loan_details($code,$branch_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/loan_details", $data);
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
		$title['title'] = "รายชื่อสมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/listdata_member", $data);
		$this->load->view("containner/script");
	}

	public function list_datashare_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data['result'] = $this->officer_model->list_datashare_member($fname, $lname, $branch_number);
		$title['title'] = "รายชื่อสมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/list_datashare_member", $data);
		$this->load->view("containner/script");
	}

	public function datashare_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['resume'] = $this->officer_model->share_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->datashare_member($mem_id, $branch_number);
		$title['title'] = "ข้อมูลหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/datashare_member", $data);
		$this->load->view("containner/script");
	}

	public function takaful_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระบบกองทุนตะกาฟุล สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/takaful_system/takaful_system");
		$this->load->view("containner/script");
	}

	public function takaful_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$mem_id = $this->input->post('mem_id');
		$branch_number = $this->input->post('branch_number');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['name'] = $this->officer_model->data_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->welfare_member($mem_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/takaful_system/takaful_member", $data);
		$this->load->view("containner/script");
	}

	// =========================================================================================================================================================================

	public function reportmember_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระบบรายงานสมาชิก สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/report_member_system/report_member_system");
		$this->load->view("containner/script");
	}

	public function searchreport_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$branch_number = $this->input->post('branch_number');
		$start = $this->input->post('start');
		$to = $this->input->post('to');

		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->searchreport_member($branch_number, $start, $to);
		$data['variable'] = array(
			'branch_number' => $branch_number,
			'start' => $start,
			'to' => $to
		);
		$title['title'] = "รายงานสมาชิกหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/report_member_system/searchreport_member", $data);
		$this->load->view("containner/script");
	}

	public function reportexcel_member($branch_number, $start, $to)
	{
		$this->load->library('excel');
		$object = new PHPExcel();
		$object->setActiveSheetIndex(0);
		$table_columns = array("สาขา", "ชื่อ", "สกุล", "จำนวนเงินหุ้น", "จำนวนเงินฝาก", "เบอร์โทร");
		$column = 0;
		foreach ($table_columns as $field) {
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}
		$data = $this->officer_model->searchreport_member($branch_number, $start, $to);
		$excel_row = 2;

		foreach ($data->result() as $row) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->BR_NAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->FNAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->LNAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, number_format($row->SHR_SUM_BTH, 2));
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, number_format($row->BALANCE, 2));
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->MOBILE_TEL);
			$excel_row++;
		}
		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Export Data.xls"');
		$object_writer->save('php://output');
	}

	public function searchreport_member_allbranch()
	{
		$user_id = $this->session->userdata('USER_ID');
		$start = $this->input->post('start');
		$to = $this->input->post('to');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->officer_model->searchreport_member_allbranch($start, $to);
		$data['variable'] = array(
			'start' => $start,
			'to' => $to
		);
		$title['title'] = "รายงานสมาชิกหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/report_member_system/searchreport_member_allbranch", $data);
		$this->load->view("containner/script");
	}

	public function reportexcel_member_allbranch($start, $to)
	{
		$this->load->library('excel');
		$object = new PHPExcel();
		$object->setActiveSheetIndex(0);
		$table_columns = array("สาขา", "ชื่อ", "สกุล", "จำนวนเงินหุ้น", "จำนวนเงินฝาก", "เบอร์โทร");
		$column = 0;
		foreach ($table_columns as $field) {
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}
		$data = $this->officer_model->searchreport_member_allbranch($start, $to);
		$excel_row = 2;

		foreach ($data->result() as $row) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->BR_NAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->FNAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->LNAME);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, number_format($row->SHR_SUM_BTH, 2));
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, number_format($row->BALANCE, 2));
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->MOBILE_TEL);
			$excel_row++;
		}
		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Export Data.xls"');
		$object_writer->save('php://output');
	}

	public function newsupload()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/newsupload_system/newsupload");
		$this->load->view("containner/script");
	}

	public function uploadnews_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$listnews['result'] = $this->officer_model->get_news_upload();
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/newsupload_system/listnews", $listnews);
		$this->load->view("containner/script");
	}

	function upload()
	{
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');

		do {
			$newsnumber = rand(10, 10000);
			$result = $this->officer_model->checknewsnumber($newsnumber);
			$num = $result->num_rows();
		} while ($num > 0);

		$countFiles = count($_FILES['uploadedFiles']['name']);
		$countUploadedFiles = 0;
		$countErrorUploadFiles = 0;
		for ($i = 0; $i < $countFiles; $i++) {
			$_FILES['uploadFile']['name'] = $_FILES['uploadedFiles']['name'][$i];
			$_FILES['uploadFile']['type'] = $_FILES['uploadedFiles']['type'][$i];
			$_FILES['uploadFile']['size'] = $_FILES['uploadedFiles']['size'][$i];
			$_FILES['uploadFile']['tmp_name'] = $_FILES['uploadedFiles']['tmp_name'][$i];
			$_FILES['uploadFile']['error'] = $_FILES['uploadedFiles']['error'][$i];

			$uploadStatus = $this->uploadFile('uploadFile');
			if ($uploadStatus != false) {
				$countUploadedFiles++;
				$this->officer_model->uploadpicture($newsnumber, $uploadStatus, date('Y-m-d H:i:s'));
			} else {
				$countErrorUploadFiles++;
			}
		}

		$this->officer_model->uploadnews($newsnumber, $title, $description, date('Y-m-d H:i:s'), $date);

		echo "<script>alert('อัพโหลดข่าวแล้ว');</script>";
		redirect('officer/uploadnews_system', 'refresh');
	}

	function uploadFile($name)
	{
		$uploadPath = 'uploads/';
		if (!is_dir($uploadPath)) {
			mkdir($uploadPath, 0777, TRUE);
		}

		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpeg|JPEG|JPG|jpg|png|PNG';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload($name)) {
			$fileData = $this->upload->data();
			return $fileData['file_name'];
		} else {
			return false;
		}
	}

	public function deletenews($newsnumber)
	{
		$result = $this->officer_model->deletenews($newsnumber);
		if ($result) {
			$result = $this->officer_model->selectpicture($newsnumber);
			if ($result) {
				foreach ($result->result() as $row) {
					unlink('uploads/' . $row->picturename);
				}
				$result = $this->officer_model->deletepicture($newsnumber);
				if ($result) {
					echo "<script>alert('ลบสำเร็จ');</script>";
					redirect('officer/uploadnews_system', 'refresh');
				}
			}
		} else {
			echo "<script>alert('ไม่ลบสำเร็จ');</script>";
			redirect('officer/uploadnews_system', 'refresh');
		}
	}

	public function editnews($newsnumber)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($user_id);
		$news = $this->officer_model->selectnews($newsnumber);
		$title['title'] = "แก้ไขข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/newsupload_system/editnews", $news);
		$this->load->view("containner/script");
	}

	public function updatenews()
	{
		$newsnumber = $this->input->post('newsnumber');
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');
		$result = $this->officer_model->updatenews($newsnumber, $title, $date, $description);
		if ($result) {
			echo "<script>alert('แก้ไขเรียบร้อย');</script>";
			redirect('officer/uploadnews_system', 'refresh');
		} else {
			echo "<script>alert('แก้ไขไม่สำเร็จ');</script>";
			redirect('officer/editnews/' . $newsnumber, 'refresh');
		}
	}
}
