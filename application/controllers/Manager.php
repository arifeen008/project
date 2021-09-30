<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Manager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        $this->load->model('officer_model');
        $this->load->model('manager_model');
    }

    public function member_share_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/member_share_system/member_share_system");
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
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/member_share_system/listdata_member", $data);
        $this->load->view("containner/script");
    }

    public function seedata_member($mem_id, $branch_number)
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['result'] = $this->officer_model->seedata_member($mem_id, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/member_share_system/seedata_member", $data);
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
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/member_share_system/listdatashare_member", $data);
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
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/member_share_system/datashare_member", $data);
        $this->load->view("containner/script");
    }

    public function deposit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/deposit_system/deposit_system");
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
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/deposit_system/depositreport_summary", $data);
        $this->load->view("containner/script");
    }

    public function account_book_balance()
    {
        $user_id = $this->session->userdata('USER_ID');
        $account_number = $this->input->post('account_number');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['result'] = $this->officer_model->account_book_balance($account_number);
        $data['detail'] = $this->officer_model->detail_deposit($account_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/deposit_system/account_book_balance", $data);
        $this->load->view("containner/script");
    }

    public function takaful_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/takaful_system/takaful_system");
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
        $this->load->view("manager/takaful_system/takaful_member", $data);
        $this->load->view("containner/script");
    }

    public function credit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/credit_system/credit_system");
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
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/credit_system/listdatacredit_member", $data);
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
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/credit_system/credit_officer", $data);
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
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/credit_system/credit_officer_detail", $data);
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
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/credit_system/listclosedcredit_member", $data);
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
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/credit_system//closed_credit_officer", $data);
		$this->load->view("containner/script");
    }

    public function closed_credit_officer_detail($code, $branch_number)
    {
        $USER_ID = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($USER_ID);
        $data['select'] = $this->officer_model->checkcredit_officer_select($code, $branch_number);
        $data['result'] = $this->officer_model->checkcredit_officer_detail($code, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/credit_system//closed_credit_officer_detail", $data);
        $this->load->view("containner/script");
    }

    public function reportmember_system()
	{
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$this->load->view("containner/head");
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/report_member_system/report_member_system");
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
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/report_member_system/searchreport_member", $data);
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
		$this->load->view("containner/sidebar_manager");
		$this->load->view("manager/report_member_system/searchreport_member_allbranch", $data);
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

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function daily_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_report");
        $this->load->view("containner/script");
    }
    public function monthly_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthy_report");
        $this->load->view("containner/script");
    }
    public function yearly_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_report");
        $this->load->view("containner/script");
    }

    public function share_capital_member_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->share_capital_member_report($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/share_capital_member_report", $data);
        $this->load->view("containner/script");
    }

    public function daily_share_capital()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_share_capital($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_share_capital($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_share_capital", $data);
        $this->load->view("containner/script");
    }

    public function daily_deposit_account_type()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $account_type = $this->input->post('account_type');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_deposit_account_type($account_type, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_deposit_account_type($account_type, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_deposit_account_type", $data);
        $this->load->view("containner/script");
    }

    public function daily_deposit_account_branch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_deposit_account_branch($branch_number, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_deposit_account_branch($branch_number, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_deposit_account_branch", $data);
        $this->load->view("containner/script");
    }

    public function daily_credit()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_credit($main_type, $sub_type, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_credit($main_type, $sub_type, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_credit", $data);
        $this->load->view("containner/script");
    }

    public function daily_credit_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_credit_allbranch($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_credit_allbranch($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_credit_allbranch", $data);
        $this->load->view("containner/script");
    }

    public function daily_payment()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_payment($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_payment($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_payment", $data);
        $this->load->view("containner/script");
    }

    public function daily_share_deposit()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_share_deposit($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_share_deposit($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/daily/daily_share_deposit", $data);
        $this->load->view("containner/script");
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function monthly_inout()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_inout($select_month, $select_year);
        //// $data['summary'] = $this->manager_model->sum_monthy_inout($select_month, $select_year); ใช้ไม่ได้
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthy_inout", $data);
        $this->load->view("containner/script");
    }

    public function monthly_share_capital()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_share_capital($select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_share_capital($select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_share_capital", $data);
        $this->load->view("containner/script");
    }

    public function monthly_deposit_account_type()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $account_type = $this->input->post('account_type');
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_deposit_account_type($account_type, $select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_deposit_account_type($account_type, $select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_deposit_account_type", $data);
        $this->load->view("containner/script");
    }

    public function monthly_deposit_account_branch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_deposit_account_branch($branch_number, $select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_deposit_account_branch($branch_number, $select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_deposit_account_branch", $data);
        $this->load->view("containner/script");
    }

    public function monthly_credit()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_credit($main_type, $sub_type, $select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_credit($main_type, $sub_type, $select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_credit", $data);
        $this->load->view("containner/script");
    }

    public function monthly_credit_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_credit_allbranch($select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_credit_allbranch($select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_credit_allbranch", $data);
        $this->load->view("containner/script");
    }

    public function credit_branch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->credit_branch($branch_number, $select_month);
        // $data['summary'] = $this->manager_model->sum_credit_branch($branch_number, $select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/credit_branch");
        $this->load->view("containner/script");
    }

    public function credit_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->credit_allbranch($select_month);
        // $data['summary'] = $this->manager_model->sum_credit_allbranch($select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/credit_allbranch");
        $this->load->view("containner/script");
    }

    public function credit_type_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->credit_type_allbranch($main_type,$sub_type,$select_month);
        // $data['summary'] = $this->manager_model->sum_credit_type_allbranch($main_type,$sub_type,$select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/credit_type_allbranch");
        $this->load->view("containner/script");
    }

    public function deptor_branch_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->deptor_branch_report($branch_number, $select_month);
        // $data['summary'] = $this->manager_model->sum_deptor_branch_report($branch_number, $select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/deptor_branch_report");
        $this->load->view("containner/script");
    }

    public function deptor_allbranch_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->deptor_allbranch_report($select_month);
        // $data['summary'] = $this->manager_model->sum_deptor_allbranch_report($select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/deptor_branch_report");
        $this->load->view("containner/script");
    }

    public function deptor_typeallbranch_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $select_month = $this->input->post('select_month');
        // $data['result'] = $this->manager_model->deptor_typeallbranch_report($main_type, $sub_type, $select_month);
        // $data['summary'] = $this->manager_model->sum_deptor_typeallbranch_report($main_type, $sub_type, $select_month);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/deptor_typeallbranch_report");
        $this->load->view("containner/script");
    }

    public function monthly_payment()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->monthly_payment($select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_monthly_payment($select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/monthly_payment", $data);
        $this->load->view("containner/script");
    }

    public function shared_deposit_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_month = $this->input->post('select_month');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->shared_deposit_report($select_month, $select_year);
        $data['summary'] = $this->manager_model->sum_shared_deposit_report($select_month, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/monthly/shared_deposit_report", $data);
        $this->load->view("containner/script");
    }
    //-------------------------------------------------------------------------------------------------------------------------------------------------//

    public function yearly_inout()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_inout($select_year);
        // $data['summary'] = $this->manager_model->sum_yearly_inout($select_year); // ใช้ไม่ได้
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_inout", $data);
        $this->load->view("containner/script");
    }

    // public function yearly_summarymember()
    // {
    //     $user_id = $this->session->userdata('USER_ID');
    //     $data_officer = $this->officer_model->data_officer($user_id);
    //     $branch_number = $this->input->post('branch_number');
    //     $select_year = $this->input->post('select_year');
    //     $data['result'] = $this->manager_model->yearly_summarymember($branch_number, $select_year);
    //     $data['summary'] = $this->manager_model->sum_yearly_summarymember($branch_number, $select_year);
    //     $this->load->view("containner/head");
    //     $this->load->view("containner/header_officer", $data_officer);
    //     $this->load->view("containner/sidebar_manager");
    //     $this->load->view("yearly/yearly_summarymember", $data);
    //     $this->load->view("containner/script");
    // }

    public function yearly_share_capital()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_share_capital($select_year);
        $data['summary'] = $this->manager_model->sum_yearly_share_capital($select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_share_capital", $data);
        $this->load->view("containner/script");
    }

    public function yearly_deposit_account_type()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $account_type = $this->input->post('account_type');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_deposit_account_type($account_type, $select_year);
        $data['summary'] = $this->manager_model->sum_yearly_deposit_account_type($account_type, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_deposit_account_type", $data);
        $this->load->view("containner/script");
    }

    public function yearly_deposit_account_branch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_deposit_account_branch($branch_number, $select_year);
        $data['summary'] = $this->manager_model->sum_yearly_deposit_account_branch($branch_number, $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_deposit_account_branch", $data);
        $this->load->view("containner/script");
    }

    public function yearly_credit()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_credit($main_type, $sub_type,  $select_year);
        $data['summary'] = $this->manager_model->sum_yearly_credit($main_type, $sub_type,  $select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_credit", $data);
        $this->load->view("containner/script");
    }

    public function yearly_credit_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_credit_allbranch($select_year);
        $data['summary'] = $this->manager_model->sum_yearly_credit_allbranch($select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_credit_allbranch", $data);
        $this->load->view("containner/script");
    }

    public function yearly_payment()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_payment($select_year);
        $data['summary'] = $this->manager_model->sum_yearly_payment($select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_payment", $data);
        $this->load->view("containner/script");
    }

    public function yearly_shared_deposit_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $select_year = $this->input->post('select_year');
        $data['result'] = $this->manager_model->yearly_shared_deposit_report($select_year);
        $data['summary'] = $this->manager_model->sum_yearly_shared_deposit_report($select_year);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/yearly/yearly_shared_deposit_report", $data);
        $this->load->view("containner/script");
    }
}
