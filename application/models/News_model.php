<?php defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}

	public function upload_picture($news_number, $uploadStatus, $dateupload)
	{
		$data = array(
			'news_number' => $news_number,
			'picture_name' => $uploadStatus,
			'dateupload' => $dateupload
		);
		$this->db2->insert('picture', $data);
	}

	public function upload_picture_cover($news_number, $uploadStatus)
	{
		$data = array(
			'news_number' => $news_number,
			'picture_name' => $uploadStatus
		);
		$this->db2->insert('picture_cover', $data);
	}

	public function upload_news($news_number, $title, $description, $news_type, $date, $dateupload)
	{
		$data = array(
			'news_number' => $news_number,
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'date' => $date,
			'dateupload' => $dateupload
		);
		$this->db2->insert('news', $data);
	}

	public function check_news_number($news_number)
	{
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_news_information()
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->where('news.news_typeid', '1');
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_welfare()
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->where('news.news_typeid', '2');
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_credit()
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->where('news.news_typeid', '3');
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_foundation()
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->where('news.news_typeid', '4');
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_sidenewsdata($news_number)
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->where('news.news_number !=', $news_number);
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('news.dateupload', 'DESC');
		$this->db2->limit(6);
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_news_data($news_number)
	{
		$this->db2->select('title,description,date,dateupload');
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->get('news');
		return $result->row();
	}

	public function get_news_upload()
	{
		$this->db2->select('news.news_number,news_type.news_typename,news.title,news.date,news.dateupload');
		$this->db2->join('news_type', 'news.news_typeid = news_type.news_typeid');
		$this->db2->order_by('news.dateupload', 'DESC');
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_newspicture($news_number)
	{
		$this->db2->select('news_number,picture_name');
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->get('picture');
		return $result;
	}

	public function deletenews($news_number)
	{
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->delete('news');
		return $result;
	}

	public function selectnews($news_number)
	{
		$this->db2->select('news_number,title,description,date,dateupload');
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->get('news');
		return $result->row();
	}

	public function updatenews($news_number, $news_type, $title, $date, $description)
	{
		$data = array(
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'dateupload' => $date
		);

		$this->db2->where('news_number', $news_number);
		$result = $this->db2->update('news', $data);
		return $result;
	}

	public function selectpicture($news_number)
	{
		$this->db2->select('picture_name');
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->get('picture');
		return $result;
	}

	public function deletepicture($news_number)
	{
		$this->db2->where('news_number', $news_number);
		$result = $this->db2->delete('picture');
		return $result;
	}

	public function get_list_activity($limit, $start)
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload,picture.picture_name');
		$this->db2->join('picture', 'news.news_number = picture.news_number');
		$this->db2->group_by('news.news_number');
		$this->db2->order_by('dateupload', 'desc');
		$this->db2->limit($limit, $start);
		$result = $this->db2->get('news');
		return $result;
	}

	public function getAllNews()
	{
		return $this->db2->count_all('news');
	}

	public function get_students($limit, $start)
	{
		$this->db2->select('news.news_number,news.title,news.description,news.dateupload');
		$this->db2->order_by('dateupload', 'desc');
		$this->db2->limit($limit, $start);
		$query = $this->db2->get('news');
		return $query->result();
	}

	public function upload_internalfile($title, $date, $uploadFile, $type_announcement)
	{
		$data = array(
			'title' => $title,
			'date' => $date,
			'uploadFile' => $uploadFile,
			'type_announcement' => $type_announcement
		);
		$this->db2->insert('internal_announcement', $data);
	}

	public function select_form($internal_id)
	{
		$this->db2->where('internal_id', $internal_id);
		$result = $this->db2->get('internal_announcement');
		return $result->row();
	}

	public function get_internalfile_hr()
	{
		$this->db2->select('internal_id,title,date,uploadfile');
		$this->db2->where('type_announcement', 1);
		$this->db2->order_by('date', 'DESC');
		$result = $this->db2->get('internal_announcement');
		return $result->result();
	}

	public function get_internalfile_ho()
	{
		$this->db2->select('internal_id,title,date,uploadfile');
		$this->db2->where('type_announcement', 2);
		$this->db2->order_by('date', 'DESC');
		$result = $this->db2->get('internal_announcement');
		return $result->result();
	}

	public function upload_creditfile($mem_id, $fname, $lname, $lcon_id,  $year, $branch_id, $credit_id, $file_name, $path, $username, $date)
	{
		$data = array(
			'mem_id' => $mem_id,
			'fname' => $fname,
			'lname' => $lname,
			'fullcont_id' => $lcon_id,
			'branch_id' => $branch_id,
			'credit_id' => $credit_id,
			'year' => $year,
			'file_name' => $file_name,
			'path' => $path,
			'name_upload' => $username,
			'date_upload' => $date
		);
		$this->db2->insert('credit_upload', $data);
	}

	public function search_credit($year, $branch_id, $credit_id)
	{
		$this->db2->select('credit_upload.id_credit,credit_upload.mem_id,credit_upload.fname,credit_upload.lname,credit_upload.fullcont_id,credit_upload.path,credit_upload.name_upload,credit_upload.date_upload,credit_upload.year,branch_name.name_branch,credit_type.credit_name');
		$this->db2->where('credit_upload.year', $year);
		$this->db2->where('credit_upload.branch_id', $branch_id);
		$this->db2->where('credit_upload.credit_id', $credit_id);
		$this->db2->join('credit_type', 'credit_type.credit_id = credit_upload.credit_id');
		$this->db2->join('branch_name', 'branch_name.branch_id = credit_upload.branch_id');
		$this->db2->order_by('date_upload', 'desc');
		$result = $this->db2->get('credit_upload');
		return $result->result();
	}

	public function select_credit($id_credit)
	{
		$this->db2->where('id_credit', $id_credit);
		$result = $this->db2->get('credit_upload');
		return $result->row();
	}

	public function delete_credit($id_credit)
	{
		$this->db2->where('id_credit', $id_credit);
		$result = $this->db2->delete('credit_upload');
		return $result;
	}

	public function get_document()
	{
		$result = $this->db2->get('performance');
		return $result->result();
	}

	public function uploadDocumentFile($document_name, $file_name, $path, $date)
	{
		$data = array(
			'document_name' => $document_name,
			'file_name' => $file_name,
			'path' => $path,
			'date' => $date
		);
		$this->db2->insert('performance', $data);
	}

	public function select_document($performance_id)
	{
		$this->db2->where('performance_id', $performance_id);
		$result = $this->db2->get('performance');
		return $result->row();
	}

	public function delete_document($performance_id)
	{
		$this->db2->where('performance_id', $performance_id);
		$result = $this->db2->delete('performance');
		return $result;
	}

	public function checkasset_number($asset_number)
	{
		$this->db2->where('asset_number', $asset_number);
		$result = $this->db2->get('asset');
		return $result;
	}

	public function asset_upload($asset_number, $title, $description1, $description2, $contact, $asset_type, $date)
	{
		$data = array(
			'asset_number' => $asset_number,
			'title' => $title,
			'asset_type' => $asset_type,
			'title' => $title,
			'description1' => $description1,
			'description2' => $description2,
			'contact' => $contact,
			'date' => $date
		);
		$this->db2->insert('asset', $data);
	}

	public function upload_asset_picture($asset_number, $uploadStatus)
	{
		$data = array(
			'asset_number' => $asset_number,
			'picture_name' => $uploadStatus
		);
		$this->db2->insert('asset_picture', $data);
	}

	public function get_asset()
	{
		$this->db2->join('asset_type', 'asset_type.asset_type = asset.asset_type');
		$result = $this->db2->get('asset');
		return $result->result();
	}

	public function get_list_estate()
	{
		$this->db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$this->db2->where('asset.asset_type', 1);
		$this->db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$this->db2->group_by('asset.asset_number');
		$result = $this->db2->get('asset');
		return $result->result();
	}

	public function get_list_vacant()
	{
		$this->db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$this->db2->where('asset.asset_type', 2);
		$this->db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$this->db2->group_by('asset.asset_number');
		$result = $this->db2->get('asset');
		return $result->result();
	}

	public function get_list_condo()
	{
		$this->db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$this->db2->where('asset.asset_type', 3);
		$this->db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$this->db2->group_by('asset.asset_number');
		$result = $this->db2->get('asset');
		return $result->result();
	}

	public function get_asset_data($asset_number)
	{
		$this->db2->where('asset_number', $asset_number);
		$result = $this->db2->get('asset');
		return $result->row();
	}

	public function get_assetpicture($asset_number)
	{
		$this->db2->where('asset_number', $asset_number);
		$result = $this->db2->get('asset_picture');
		return $result->result();
	}

	public function uploadcreditfile_consider($username, $mem_id, $fname, $lname, $lnumber_id, $loan_year, $branch_id, $loan_id, $file_name, $path, $status_id)
	{
		date_default_timezone_set('Asia/Bangkok');
		$data = array(
			'username' => $username,
			'mem_id' => $mem_id,
			'fname' => $fname,
			'lname' =>  $lname,
			'lnumber_id' =>  $lnumber_id,
			'loan_year' =>  $loan_year,
			'branch_id' =>  $branch_id,
			'loan_id' =>  $loan_id,
			'path' =>  $path,
			'file_name' =>  $file_name,
			'date' =>  date('Y-m-d H:i:s'),
			'status_id' => $status_id
		);
		$this->db2->insert('credit_consider', $data);
		$insert_id = $this->db2->insert_id();
		return $insert_id;
	}

	public function add_credit_consider_process($return_id, $status_id)
	{
		date_default_timezone_set('Asia/Bangkok');
		$data = array(
			'credit_consider_id' => $return_id,
			'date' =>  date('Y-m-d H:i:s'),
			'status_id' => $status_id
		);
		$result = $this->db2->insert('credit_consider_process', $data);
		return $result;
	}

	public function get_credit_consider($username)
	{
		$this->db2->where('credit_consider.username', $username);
		$this->db2->join('status_credit', 'credit_consider.status_id = status_credit.status_id');
		$this->db2->join('credit_type', 'credit_consider.loan_id = credit_type.credit_id');
		$this->db2->join('branch_name', 'credit_consider.branch_id = branch_name.branch_id');
		$this->db2->order_by('credit_consider.date', 'desc');
		$result = $this->db2->get('credit_consider');
		return $result->result();
	}

	public function get_credit_consider2()
	{
		$this->db2->where('credit_consider.status_id', 1);
		$this->db2->join('status_credit', 'credit_consider.status_id = status_credit.status_id');
		$this->db2->join('credit_type', 'credit_consider.loan_id = credit_type.credit_id');
		$this->db2->join('branch_name', 'credit_consider.branch_id = branch_name.branch_id');
		$result = $this->db2->get('credit_consider');
		return $result->result();
	}

	public function get_credit_consider_process($credit_consider_id)
	{
		$this->db2->select('credit_consider_process.date,status_credit.status_name,credit_consider_process.status_id');
		$this->db2->where('credit_consider_process.credit_consider_id', $credit_consider_id);
		$this->db2->join('status_credit', 'credit_consider_process.status_id = status_credit.status_id');
		$this->db2->order_by('credit_consider_process.date', 'asc');
		$result = $this->db2->get('credit_consider_process');
		return $result->result();
	}

	public function get_credit_consider_detail($credit_consider_id)
	{
		$this->db2->where('credit_consider.credit_consider_id', $credit_consider_id);
		$this->db2->join('credit_type', 'credit_consider.loan_id = credit_type.credit_id');
		$this->db2->join('branch_name', 'credit_consider.branch_id = branch_name.branch_id');
		$result = $this->db2->get('credit_consider');
		return $result->row();
	}

	public function select_credit_consider($credit_consider_id)
	{
		$this->db2->where('credit_consider_id', $credit_consider_id);
		$result = $this->db2->get('credit_consider');
		return $result->row();
	}

	public function delete_credit_consider($credit_consider_id)
	{
		$this->db2->where('credit_consider_id', $credit_consider_id);
		$result = $this->db2->delete('credit_consider');
		return $result;
	}

	public function delete_credit_consider_process($credit_consider_id)
	{
		$this->db2->where('credit_consider_id', $credit_consider_id);
		$result = $this->db2->delete('credit_consider_process');
		return $result;
	}

	public function accept_credit_consider($credit_consider_id)
	{
		date_default_timezone_set('Asia/Bangkok');
		$this->db2->set('status_id', '02');
		$this->db2->where('credit_consider_id', $credit_consider_id);
		$this->db2->update('credit_consider');
		$data = array(
			'credit_consider_id' => $credit_consider_id,
			'date' => date('Y-m-d H:i:s'),
			'status_id' => '2'
		);
		$result = $this->db2->insert('credit_consider_process', $data);
		return $result;
	}

	public function reject_credit_consider($credit_consider_id, $note)
	{
		date_default_timezone_set('Asia/Bangkok');
		$this->db2->set('status_id', '03');
		$this->db2->set('note', $note);
		$this->db2->where('credit_consider_id', $credit_consider_id);
		$this->db2->update('credit_consider');
		$data = array(
			'credit_consider_id' => $credit_consider_id,
			'date' => date('Y-m-d H:i:s'),
			'status_id' => '3'
		);
		$this->db2->insert('credit_consider_process', $data);
	}

	public function get_status_credit_consider()
	{
		$result = $this->db2->get('status_credit');
		return $result->result();
	}

	public function get_status($status_id)
	{
		$this->db2->where('status_id', $status_id);
		$result = $this->db2->get('status_credit');
		return $result->row();
	}

	public function add_status($status_name)
	{
		$data = array(
			'status_name' => $status_name
		);
		$this->db2->insert('status_credit', $data);
	}

	public function update_status($status_id, $status_name)
	{
		$this->db2->where('status_id', $status_id);
		$data = array(
			'status_name' => $status_name
		);
		$this->db2->update('status_credit', $data);
	}

	public function delete_status($status_id)
	{
		$this->db2->where('status_id', $status_id);
		$this->db2->delete('status_credit');
	}
}
