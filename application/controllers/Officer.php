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
			$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
			$data = $this->officer_model->data_officer($user_id);
			$title['title'] = "ระบบผู้จัดการ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
			$this->load->view("containner/head", $title);
			$this->load->view("containner/header_officer", $data);
			$this->load->view("containner/sidebar_officer", $level_code);
			$this->load->view("officer/search_member/search_member");
			$this->load->view("containner/script");
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

	public function search_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระบบค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/search_member");
		$this->load->view("containner/script");
	}

	public function internal_announcement()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data['hr'] = $this->officer_model->get_internalfile_hr();
		$data['ho'] = $this->officer_model->get_internalfile_ho();
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ประกาศภายใน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/internal_announcement/internal_announcement", $data);
		$this->load->view("containner/script");
	}

	public function annual_performance()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ผลการดำเนินงานประจำปี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/annual_performance/annual_performance");
		$this->load->view("containner/script");
	}

	public function human_resource_development_activities()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "กิจกรรมพัฒนาบุคลากร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/human_resource_development_activities/human_resource_development_activities");
		$this->load->view("containner/script");
	}

	public function cooperative_regulation()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระเบียบเจ้าหน้าที่ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/cooperative_regulation/cooperative_regulation");
		$this->load->view("containner/script");
	}

	public function cooperative_rules()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ข้อบังคับสหกรณ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/cooperative_rules/cooperative_rules");
		$this->load->view("containner/script");
	}

	public function search_data_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$id_card = $this->input->post('id_card');
		$mem_id = $this->input->post('mem_id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data['result'] = $this->officer_model->search_data_member($id_card, $mem_id, $fname, $lname, $branch_number);
		$title['title'] = "รายชื่อสมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/search_data_member", $data);
		$this->load->view("containner/script");
	}

	public function data_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['data_member'] = $this->officer_model->personal_data_member($mem_id, $branch_number);
		$data['deposit_member'] = $this->officer_model->deposit_member($mem_id, $branch_number);
		$data['opened_credit_member'] = $this->officer_model->opened_credit_member($mem_id, $branch_number);
		$data['closed_credit_member'] = $this->officer_model->closed_credit_member($mem_id, $branch_number);
		$data['stock_select'] = $this->officer_model->stock_select($mem_id, $branch_number);
		$data['stock_details'] = $this->officer_model->stock_details($mem_id, $branch_number);
		$data['dividend'] = $this->officer_model->dividend_member($mem_id, $branch_number);
		$title['title'] = "สมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/data_member", $data);
		$this->load->view("containner/script");
	}

	public function account_details($account_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['account_details'] = $this->officer_model->account_details($account_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/account_details", $data);
		$this->load->view("containner/script");
	}

	public function opened_loan_details($code, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['opened_loan_select'] = $this->officer_model->opened_loan_select($code, $branch_number);
		$data['opened_loan_details'] = $this->officer_model->opened_loan_details($code, $branch_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/opened_loan_details", $data);
		$this->load->view("containner/script");
	}

	public function closed_loan_details($code, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['closed_loan_select'] = $this->officer_model->closed_loan_select($code, $branch_number);
		$data['closed_loan_details'] = $this->officer_model->closed_loan_details($code, $branch_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/closed_loan_details", $data);
		$this->load->view("containner/script");
	}

	public function list_datashare_member()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$branch_number = $this->input->post('branch_number');
		$data['result'] = $this->officer_model->list_datashare_member($fname, $lname, $branch_number);
		$title['title'] = "รายชื่อสมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/list_datashare_member", $data);
		$this->load->view("containner/script");
	}

	public function datashare_member($mem_id, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['resume'] = $this->officer_model->share_member($mem_id, $branch_number);
		$data['result'] = $this->officer_model->datashare_member($mem_id, $branch_number);
		$title['title'] = "ข้อมูลหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data_officer);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/datashare_member", $data);
		$this->load->view("containner/script");
	}

	// public function searchreport_member()
	// {
	// 	$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
	// 	$user_id = $this->session->userdata('USER_ID');
	// 	$branch_number = $this->input->post('branch_number');
	// 	$start = $this->input->post('start');
	// 	$to = $this->input->post('to');
	// 	$data_officer = $this->officer_model->data_officer($user_id);
	// 	$data['result'] = $this->officer_model->searchreport_member($branch_number, $start, $to);
	// 	$data['variable'] = array(
	// 		'branch_number' => $branch_number,
	// 		'start' => $start,
	// 		'to' => $to
	// 	);
	// 	$title['title'] = "รายงานสมาชิกหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
	// 	$this->load->view("containner/head", $title);
	// 	$this->load->view("containner/header_officer", $data_officer);		
	// 	$this->load->view("containner/sidebar_officer", $level_code);
	// 	$this->load->view("officer/report_member_system/searchreport_member", $data);
	// 	$this->load->view("containner/script");
	// }

	// public function reportexcel_member($branch_number, $start, $to)
	// {
	// 	$this->load->library('excel');
	// 	$object = new PHPExcel();
	// 	$object->setActiveSheetIndex(0);
	// 	$table_columns = array("สาขา", "ชื่อ", "สกุล", "จำนวนเงินหุ้น", "จำนวนเงินฝาก", "เบอร์โทร");
	// 	$column = 0;
	// 	foreach ($table_columns as $field) {
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
	// 		$column++;
	// 	}
	// 	$data = $this->officer_model->searchreport_member($branch_number, $start, $to);
	// 	$excel_row = 2;

	// 	foreach ($data->result() as $row) {
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->BR_NAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->FNAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->LNAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, number_format($row->SHR_SUM_BTH, 2));
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, number_format($row->BALANCE, 2));
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->MOBILE_TEL);
	// 		$excel_row++;
	// 	}
	// 	$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
	// 	header('Content-Type: application/vnd.ms-excel');
	// 	header('Content-Disposition: attachment;filename="Export Data.xls"');
	// 	$object_writer->save('php://output');
	// }

	// public function searchreport_member_allbranch()
	// {
	// 	$user_id = $this->session->userdata('USER_ID');
	// 	$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
	// 	$start = $this->input->post('start');
	// 	$to = $this->input->post('to');
	// 	$data_officer = $this->officer_model->data_officer($user_id);
	// 	$data['result'] = $this->officer_model->searchreport_member_allbranch($start, $to);
	// 	$data['variable'] = array(
	// 		'start' => $start,
	// 		'to' => $to
	// 	);
	// 	$title['title'] = "รายงานสมาชิกหุ้น สหกรณ์อิสลามษะกอฟะฮ จำกัด";
	// 	$this->load->view("containner/head", $title);
	// 	$this->load->view("containner/header_officer", $data_officer);		
	// 	$this->load->view("containner/sidebar_officer", $level_code);
	// 	$this->load->view("officer/report_member_system/searchreport_member_allbranch", $data);
	// 	$this->load->view("containner/script");
	// }

	// public function reportexcel_member_allbranch($start, $to)
	// {
	// 	$this->load->library('excel');
	// 	$object = new PHPExcel();
	// 	$object->setActiveSheetIndex(0);
	// 	$table_columns = array("สาขา", "ชื่อ", "สกุล", "จำนวนเงินหุ้น", "จำนวนเงินฝาก", "เบอร์โทร");
	// 	$column = 0;
	// 	foreach ($table_columns as $field) {
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
	// 		$column++;
	// 	}
	// 	$data = $this->officer_model->searchreport_member_allbranch($start, $to);
	// 	$excel_row = 2;

	// 	foreach ($data->result() as $row) {
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->BR_NAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->FNAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->LNAME);
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, number_format($row->SHR_SUM_BTH, 2));
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, number_format($row->BALANCE, 2));
	// 		$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->MOBILE_TEL);
	// 		$excel_row++;
	// 	}
	// 	$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
	// 	header('Content-Type: application/vnd.ms-excel');
	// 	header('Content-Disposition: attachment;filename="Export Data.xls"');
	// 	$object_writer->save('php://output');
	// }

	public function newsupload()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/newsupload_system/newsupload");
		$this->load->view("containner/script_editer");
	}

	public function uploadnews_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data = $this->officer_model->data_officer($USER_ID);
		$listnews['result'] = $this->officer_model->get_news_upload();
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/newsupload_system/listnews", $listnews);
		$this->load->view("containner/script");
	}

	function upload()
	{
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');
		$news_type = $this->input->post('news_type');

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

		$this->officer_model->uploadnews($newsnumber, $title, $description, $news_type, date('Y-m-d H:i:s'), $date);

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
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data = $this->officer_model->data_officer($user_id);
		$news = $this->officer_model->selectnews($newsnumber);
		$title['title'] = "แก้ไขข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/newsupload_system/editnews", $news);
		$this->load->view("containner/script_editer");
	}

	public function updatenews()
	{
		$newsnumber = $this->input->post('newsnumber');
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');
		$news_type = $this->input->post('news_type');
		$result = $this->officer_model->updatenews($newsnumber, $news_type, $title, $date, $description);
		if ($result) {
			echo "<script>alert('แก้ไขเรียบร้อย');</script>";
			redirect('officer/uploadnews_system', 'refresh');
		} else {
			echo "<script>alert('แก้ไขไม่สำเร็จ');</script>";
			redirect('officer/editnews/' . $newsnumber, 'refresh');
		}
	}

	public function import_internal_declaration()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("containner/head", $title);
		$this->load->view("containner/header_officer", $data);
		$this->load->view("containner/sidebar_officer", $level_code);
		$this->load->view("officer/internal_announcement/import_internal_declaration");
		$this->load->view("containner/script");
	}

	public function upload_internalfile()
	{
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$type_announcement = $this->input->post('type_announcement');
		$config['upload_path']          = 'file/inside_publish';
		$config['allowed_types']        = 'pdf';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadFile')) {
			echo "<script>alert('import failed');</script>";
			redirect('officer/internal_announcement', 'refresh');
		} else {
			$uploadFile = $this->upload->data('file_name');
			$this->officer_model->upload_internalfile($title, $date, $uploadFile, $type_announcement);
			echo "<script>alert('import success');</script>";
			redirect('officer/internal_announcement', 'refresh');
		}
	}
}
