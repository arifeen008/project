<?php defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}

	public function upload_picture($newsnumber, $uploadStatus, $dateupload)
	{
		$data = array(
			'newsnumber' => $newsnumber,
			'picturename' => $uploadStatus,
			'dateupload' => $dateupload
		);
		$this->db2->insert('picture', $data);
	}

	public function upload_news($newsnumber, $title, $description, $news_type, $date, $dateupload)
	{
		$data = array(
			'newsnumber' => $newsnumber,
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'date' => $date,
			'dateupload' => $dateupload
		);
		$this->db2->insert('news', $data);
	}

	public function check_newsnumber($newsnumber)
	{
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_news_information()
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->where('news.news_typeid', '1');
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_welfare()
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->where('news.news_typeid', '2');
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_credit()
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->where('news.news_typeid', '3');
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_news_foundation()
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->where('news.news_typeid', '4');
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(8);
		$result = $this->db2->get('news');
		return $result->result();
	}

	public function get_sidenewsdata($newsnumber)
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->where('news.newsnumber !=', $newsnumber);
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
		$this->db2->order_by('dateupload', 'DESC');
		$this->db2->limit(6);
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_news_data($newsnumber)
	{
		$this->db2->select('title,description,date,dateupload');
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->get('news');
		return $result->row();
	}

	public function get_news_upload()
	{
		$this->db2->select('news.newsnumber,news_type.news_typename,news.title,news.date,news.dateupload');
		$this->db2->join('news_type', 'news.news_typeid = news_type.news_typeid');
		$this->db2->order_by('news.dateupload', 'DESC');
		$result = $this->db2->get('news');
		return $result;
	}

	public function get_newspicture($newsnumber)
	{
		$this->db2->select('newsnumber,picturename');
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->get('picture');
		return $result;
	}

	public function deletenews($newsnumber)
	{
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->delete('news');
		return $result;
	}

	public function selectnews($newsnumber)
	{
		$this->db2->select('newsnumber,title,description,date,dateupload');
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->get('news');
		return $result->row();
	}

	public function updatenews($newsnumber, $news_type, $title, $date, $description)
	{
		$data = array(
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'dateupload' => $date
		);

		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->update('news', $data);
		return $result;
	}

	public function selectpicture($newsnumber)
	{
		$this->db2->select('picturename');
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->get('picture');
		return $result;
	}

	public function deletepicture($newsnumber)
	{
		$this->db2->where('newsnumber', $newsnumber);
		$result = $this->db2->delete('picture');
		return $result;
	}

	public function get_list_activity($limit, $start)
	{
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$this->db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$this->db2->group_by('news.newsnumber');
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
		$this->db2->select('news.newsnumber,news.title,news.description,news.dateupload');
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

	public function upload_creditfile($mem_id, $fname, $lname, $fullcont_id,  $year, $branch_id, $credit_id, $file_name, $path, $username, $date)
	{
		$data = array(
			'mem_id' => $mem_id,
			'fname' => $fname,
			'lname' => $lname,
			'fullcont_id' => $fullcont_id,
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
}
