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
				$this->load->view("containner/head");
				$this->load->view("containner/header_officer", $data);
				$this->load->view("containner/sidebar_manager");
				$this->load->view("officer/member_share_system/member_share_system");
				$this->load->view("containner/script");
			} else {
				$this->load->view("containner/head");
				$this->load->view("containner/header_officer", $data);
				$this->load->view("containner/sidebar_officer");
				$this->load->view("officer/member_share_system/member_share_system");
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

	public function logout_officer()
	{
		$this->session->unset_userdata('USER_ID', 'LEVEL_CODE', 'USER_NAME', 'BR_NO');
		redirect('index', 'refresh');
	}

	public function member_share_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/member_share_system");
		$this->load->view("containner/script");
	}

	public function deposit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
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
		$data1 = $this->officer_model->data_officer($user_id);
		$data2['result'] = $this->officer_model->depositreport_summary($startdate, $enddate, $user_id, $branch_number);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data1);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/depositreport_summary", $data2);
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/deposit_system/deposit_member_detail", $data);
		$this->load->view("containner/script");
	}

	public function credit_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$data1 = $this->officer_model->data_officer($USER_ID);
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/listdatacredit_member", $data);
		$this->load->view("containner/script");
	}

	public function credit_officer($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['name'] = $this->officer_model->data_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->credit_officer($mem_id, $branch_number);
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/credit_system/closed_credit_officer_detail", $data);
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
		$this->load->view("officer/member_share_system/seedata_member", $data);
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer");
		$this->load->view("officer/member_share_system/datashare_member", $data);
		$this->load->view("containner/script");
	}

	public function takaful_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
		$this->load->view("containner/head");
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
}
