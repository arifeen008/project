<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Officer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('officer_model');
		$this->load->model('news_model');
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
			$this->load->view("container/head", $title);
			$this->load->view("container/header_officer", $data);
			$this->load->view("container/sidebar_officer", $level_code);
			$this->load->view("officer/search_member/search_member");
			$this->load->view("container/script_officer");
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
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/search_member");
		$this->load->view("container/script_officer");
	}

	public function internal_announcement()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data['ho'] = $this->news_model->get_internalfile_ho();
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ประกาศภายใน สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/internal_announcement/internal_announcement", $data);
		$this->load->view("container/script_officer");
	}

	public function performance()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data['code'] = $this->session->userdata('LEVEL_CODE');
		$data['result'] = $this->news_model->get_document();
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ผลการดำเนินงานประจำปี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/performance/performance", $data);
		$this->load->view("container/script_officer");
	}

	public function upload_document()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดผลการดำเนินงานประจำปี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/performance/upload_document");
		$this->load->view("container/script_officer");
	}

	public function uploadDocumentFile()
	{
		$document_name = $this->input->post('document_name');
		$config['upload_path']          = 'file/performance/';
		$config['allowed_types']        = 'csv|xlsx|xls';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('documentFile')) {
			$error = $this->upload->display_errors();
			echo "<script>alert('$error');</script>";
			redirect('officer/performance', 'refresh');
		} else {
			$file_name = $this->upload->data('file_name');
			$path = 'file/perfomance/';
			$date = date('Y-m-d H:i:s');
			$this->news_model->uploadDocumentFile($document_name, $file_name, $path, $date);
			echo "<script>alert('Upload document success');</script>";
			redirect('officer/performance', 'refresh');
		}
	}

	public function delete_document($performance_id)
	{
		$result = $this->news_model->select_document($performance_id);
		if ($result) {
			if (!unlink('file/performance/' . $result->file_name)) {
				echo "<script>alert('Delete unsuccess');</script>";
				redirect('officer/performance', 'refresh');
			} else {
				$this->news_model->delete_document($performance_id);
				echo "<script>alert('Delete success');</script>";
				redirect('officer/performance', 'refresh');
			}
		}
	}

	public function download_document($performance_id)
	{
		$result = $this->news_model->select_document($performance_id);
		$data = file_get_contents(base_url('file/performance/' . $result->file_name));
		force_download($result->document_name . '.xlsx', $data);
	}

	public function human_resource_development_activities()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "กิจกรรมพัฒนาบุคลากร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/human_resource_development_activities/human_resource_development_activities");
		$this->load->view("container/script_officer");
	}

	public function cooperative_regulation()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ระเบียบเจ้าหน้าที่ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/cooperative_regulation/cooperative_regulation");
		$this->load->view("container/script_officer");
	}

	public function cooperative_rules()
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$title['title'] = "ข้อบังคับสหกรณ์ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/cooperative_rules/cooperative_rules");
		$this->load->view("container/script_officer");
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
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/search_data_member", $data);
		$this->load->view("container/script_officer");
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
		$data['stock_age'] = $this->officer_model->stock_age($mem_id, $branch_number);
		$data['stock_details'] = $this->officer_model->stock_details($mem_id, $branch_number);
		$data['dividend'] = $this->officer_model->dividend_member($mem_id, $branch_number);
		$title['title'] = "สมาชิกที่ค้นหา สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/data_member", $data);
		$this->load->view("container/script_data");
	}

	public function account_details($account_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['account_details'] = $this->officer_model->account_details($account_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/account_details", $data);
		$this->load->view("container/script_officer");
	}

	public function opened_loan_details($code, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['opened_loan_select'] = $this->officer_model->opened_loan_select($code, $branch_number);
		$data['opened_loan_details'] = $this->officer_model->opened_loan_details($code, $branch_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/opened_loan_details", $data);
		$this->load->view("container/script_officer");
	}

	public function closed_loan_details($code, $branch_number)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['closed_loan_select'] = $this->officer_model->closed_loan_select($code, $branch_number);
		$data['closed_loan_details'] = $this->officer_model->closed_loan_details($code, $branch_number);
		$title['title'] = "รายละเอียดบัญชี สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/search_member/closed_loan_details", $data);
		$this->load->view("container/script_officer");
	}

	public function upload_news()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/uploadnews_system/upload_news");
		$this->load->view("container/script_news");
	}

	public function uploadnews_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data = $this->officer_model->data_officer($USER_ID);
		$table_news['result'] = $this->news_model->get_news_upload();
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/uploadnews_system/table_news", $table_news);
		$this->load->view("container/script_officer");
	}

	function upload()
	{
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');
		$news_type = $this->input->post('news_type');

		do {
			$newsnumber = rand(10, 10000);
			$result = $this->news_model->check_newsnumber($newsnumber);
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
				$this->news_model->upload_picture($newsnumber, $uploadStatus, date('Y-m-d H:i:s'));
			} else {
				$countErrorUploadFiles++;
			}
		}

		$this->news_model->upload_news($newsnumber, $title, $description, $news_type, date('Y-m-d H:i:s'), $date);

		echo "<script>alert('อัพโหลดข่าวแล้ว');</script>";
		redirect('officer/uploadnews_system', 'refresh');
	}

	function uploadFile($name)
	{
		$config['upload_path'] = 'uploads/';
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

	public function delete_news($newsnumber)
	{
		$result = $this->news_model->deletenews($newsnumber);
		if ($result) {
			$result = $this->news_model->selectpicture($newsnumber);
			if ($result) {
				foreach ($result->result() as $row) {
					unlink('uploads/' . $row->picturename);
				}
				$result = $this->news_model->deletepicture($newsnumber);
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

	public function edit_news($newsnumber)
	{
		$user_id = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data = $this->officer_model->data_officer($user_id);
		$news = $this->news_model->selectnews($newsnumber);
		$title['title'] = "แก้ไขข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/uploadnews_system/edit_news", $news);
		$this->load->view("container/script_news");
	}

	public function update_news()
	{
		$newsnumber = $this->input->post('newsnumber');
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$description = $this->input->post('description');
		$news_type = $this->input->post('news_type');
		$result = $this->news_model->updatenews($newsnumber, $news_type, $title, $date, $description);
		if ($result) {
			echo "<script>alert('แก้ไขเรียบร้อย');</script>";
			redirect('officer/uploadnews_system', 'refresh');
		} else {
			echo "<script>alert('แก้ไขไม่สำเร็จ');</script>";
			redirect('officer/editnews/' . $newsnumber, 'refresh');
		}
	}

	public function form()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['result'] = $this->news_model->get_internalfile_hr();
		$title['title'] = "แบบฟอร์ม สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/form/form", $data);
		$this->load->view("container/script_officer");
	}

	public function download_form($internal_id)
	{
		$result = $this->news_model->select_form($internal_id);
		$data = file_get_contents(base_url('file/inside_publish/' . $result->uploadfile));
		force_download($result->title . '.pdf', $data);
	}

	public function import_internal_declaration()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/internal_announcement/import_internal_declaration");
		$this->load->view("container/script_officer");
	}

	public function upload_internalfile()
	{
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$type_announcement = $this->input->post('type_announcement');
		$config['upload_path']          = 'file/inside_publish';
		$config['allowed_types']        = 'pdf';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadFile')) {
			echo "<script>alert('อัพโหลดไม่สำเร็จ');</script>";
			redirect('officer/internal_announcement', 'refresh');
		} else {
			$uploadFile = $this->upload->data('file_name');
			$this->news_model->upload_internalfile($title, $date, $uploadFile, $type_announcement);
			echo "<script>alert('อัพโหลดสำเร็จ');</script>";
			redirect('officer/import_internal_declaration', 'refresh');
		}
	}

	public function creditupload_system()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/creditupload_system/searchcredit");
		$this->load->view("container/script_officer");
	}

	public function uploadcreditfile()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$USER_ID = $this->session->userdata('USER_ID');
		$data = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/creditupload_system/uploadcreditfile");
		$this->load->view("container/script_officer");
	}

	public function uploadFileCredit()
	{
		$username = $this->session->userdata('USER_NAME');
		$mem_id = $this->input->post('mem_id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$lcon_id = $this->input->post('lcon_id');
		$year = $this->input->post('year');
		$branch_id = $this->input->post('branch_id');
		$credit_id = $this->input->post('credit_id');
		switch ($credit_id) {
			case "1":
				$precis_type = "ฉ.";
				break;
			case "2":
				$precis_type = "สฉ.";
				break;
			case "3":
				$precis_type = "ส.";
				break;
			case "4":
				$precis_type = "พ.";
				break;
			case "5":
				$precis_type = "ค.";
				break;
			case "6":
				$precis_type = "คส.";
				break;
			case "7":
				$precis_type = "จท.";
				break;
		}
		$fullcont_id = $precis_type . $lcon_id . '/' . $year;
		$new_name = $_FILES["userfiles"]['name'];
		$config['file_name'] = $new_name;
		$config['upload_path']          = 'file/credit_folder/' . $year . '/' . $branch_id . '/' . $credit_id;
		$config['allowed_types']        = 'pdf';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('creditFile')) {
			$error = $this->upload->display_errors();
			echo "<script>alert('$error');</script>";
			redirect('officer/uploadcreditfile', 'refresh');
		} else {
			$file_name = $this->upload->data('file_name');
			$path = 'file/credit_folder/' . $year . '/' . $branch_id . '/' . $credit_id;
			$date = date('Y-m-d');
			$result = $this->news_model->upload_creditfile($mem_id, $fname, $lname, $fullcont_id,  $year, $branch_id, $credit_id, $file_name, $path, $username, $date);
			if ($result) {
				echo "<script>alert('อัพโหลดไฟล์สินเชื่อไม่สำเร็จ');</script>";
				redirect('officer/uploadcreditfile', 'refresh');
			} else {
				echo "<script>alert('อัพโหลดไฟล์สินเชื่อสำเร็จ');</script>";
				redirect('officer/uploadcreditfile', 'refresh');
			}
		}
	}

	public function search_credit()
	{
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$year = $this->input->post('year');
		$branch_id = $this->input->post('branch_id');
		$credit_id = $this->input->post('credit_id');
		$user_id = $this->session->userdata('USER_ID');
		$data_officer = $this->officer_model->data_officer($user_id);
		$data['result'] = $this->news_model->search_credit($year, $branch_id, $credit_id);
		$title['title'] = "ค้นหาสินเชื่อ สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/creditupload_system/listcredit", $data);
		$this->load->view("container/script_officer");
	}

	public function delete_credit($id_credit)
	{
		$result = $this->news_model->select_credit($id_credit);
		if ($result) {
			if (!unlink($result->path . '/' . $result->file_name)) {
				echo "<script>alert('Delete unsuccess');</script>";
				redirect('officer/creditupload_system', 'refresh');
			} else {
				$this->news_model->delete_credit($id_credit);
				echo "<script>alert('ลบสำเร็จ');</script>";
				redirect('officer/creditupload_system', 'refresh');
			}
		}
	}

	public function download_credit($credit_id)
	{
		$result = $this->news_model->select_credit($credit_id);
		$data = file_get_contents(base_url($result->path . '/' . $result->file_name));
		force_download($result->fullcont_id . '.pdf', $data);
	}

	public function uploadasset_system()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$data['result'] = $this->news_model->get_asset();
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/asset_system/asset_list", $data);
		$this->load->view("container/script_officer");
	}

	public function upload_asset()
	{
		$USER_ID = $this->session->userdata('USER_ID');
		$level_code['level_code'] = $this->session->userdata('LEVEL_CODE');
		$data_officer = $this->officer_model->data_officer($USER_ID);
		$title['title'] = "ระบบอัพโหลดข่าวสาร สหกรณ์อิสลามษะกอฟะฮ จำกัด";
		$this->load->view("container/head", $title);
		$this->load->view("container/header_officer", $data_officer);
		$this->load->view("container/sidebar_officer", $level_code);
		$this->load->view("officer/asset_system/uploadasset_system");
		$this->load->view("container/script_officer");
	}

	public function asset_upload()
	{
		$title = $this->input->post('title');
		$description1 = $this->input->post('description1');
		$description2 = $this->input->post('description2');
		$contact = $this->input->post('contact');
		$asset_type = $this->input->post('asset_type');
		do {
			$asset_number = rand(10, 10000);
			$result = $this->news_model->checkasset_number($asset_number);
			$num = $result->num_rows();
		} while ($num > 0);
		$countUploadedFiles = 0;
		$countErrorUploadFiles = 0;
		$countFiles = count($_FILES['asset_pictures']['name']);
		for ($i = 0; $i < $countFiles; $i++) {
			$_FILES['asset_picture']['name'] = $_FILES['asset_pictures']['name'][$i];
			$_FILES['asset_picture']['type'] = $_FILES['asset_pictures']['type'][$i];
			$_FILES['asset_picture']['size'] = $_FILES['asset_pictures']['size'][$i];
			$_FILES['asset_picture']['tmp_name'] = $_FILES['asset_pictures']['tmp_name'][$i];
			$_FILES['asset_picture']['error'] = $_FILES['asset_pictures']['error'][$i];
			$uploadStatus = $this->uploadFile('asset_picture');

			if ($uploadStatus != false) {
				$countUploadedFiles++;
				$this->news_model->upload_asset_picture($asset_number, $uploadStatus);
			} else {
				$countErrorUploadFiles++;
			}
		}
		$this->news_model->asset_upload($asset_number, $title, $description1, $description2, $contact, $asset_type, date('Y-m-d H:i:s'));
		echo "<script>alert('Import success');</script>";
		redirect('officer/upload_asset', 'refresh');
	}

	function uploadAsset_picture($name)
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload($name)) {
			$fileData = $this->upload->data();
			return $fileData['file_name'];
		} else {
			return false;
		}
	}
}
