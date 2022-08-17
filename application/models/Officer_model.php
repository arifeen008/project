<?php defined('BASEPATH') or exit('No direct script access allowed');

class Officer_model extends CI_Model
{
	// ล็อกอินเจ้าหน้าที่
	public function fetch_user_login($user_id, $password)
	{
		$this->db->where('USER_ID', $user_id);
		$this->db->where('PASSWORD', $password);
		$query = $this->db->get('BK_H_TELLER_CONTROL');
		return $query->row();
	}
	// ดึงข้อมูลเจ้าหน้าที่
	public function data_officer($user_id)
	{
		$this->db->select('BK_H_TELLER_CONTROL.USER_ID,BK_H_TELLER_CONTROL.USER_NAME,BK_H_TELLER_CONTROL.LEVEL_CODE,BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME');
		$this->db->where('BK_H_TELLER_CONTROL.USER_ID', $user_id);
		$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_TELLER_CONTROL.BR_NO');
		$query = $this->db->get('BK_H_TELLER_CONTROL');
		return $query->row();
	}

	// ดึงข้อมูลบัญชีเงินฝากสมาชิก
	public function deposit_member($mem_id, $branch_number)
	{
		$this->db->select('ACCOUNT_NO,ACCOUNT_NAME,BALANCE');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$result = $this->db->get('BK_H_SAVINGACCOUNT');
		return $result;
	}
	// รายละเอียดบัญชีเงินฝาก
	public function account_details($account_number)
	{
		$this->db->select('F_TIME,F_DEP,F_WDL,F_BALANCE');
		$this->db->where('F_FROM_ACC', $account_number);
		$this->db->order_by('F_TIME', 'DESC');
		$result = $this->db->get('BK_T_FINANCE');
		return $result;
	}
	// สินเชื่อที่เปิดอยู่
	public function opened_credit_member($mem_id, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.BR_NO,LOAN_M_CONTACT.CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT,LOAN_M_SUB_NAME.LSUB_NAME');
		$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_REGISTER.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '1');
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->join('LOAN_M_SUB_NAME', ' LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_SUB_NAME.LSUB_CODE = LOAN_M_CONTACT.LSUB_CODE');
		$this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_CONTACT');
		return $result ;
	}
	// สินเชื่อที่ปิดแล้ว
	public function closed_credit_member($mem_id, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.BR_NO,LOAN_M_CONTACT.CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT,LOAN_M_SUB_NAME.LSUB_NAME');
		$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_REGISTER.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '4');
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->join('LOAN_M_SUB_NAME', ' LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_SUB_NAME.LSUB_CODE = LOAN_M_CONTACT.LSUB_CODE');
		$this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_CONTACT');
		return $result;
	}

	// สินเชื่อที่เปิด 
	public function opened_loan_select($code, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT,LOAN_M_SUB_NAME.LSUB_NAME');
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.CODE', $code);
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->join('LOAN_M_SUB_NAME', ' LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_SUB_NAME.LSUB_CODE = LOAN_M_CONTACT.LSUB_CODE');
		$query = $this->db->get('LOAN_M_CONTACT');
		return $query->row();
	}
	// รายละเอียดสินเชื่อที่เปิดอยู่ 
	public function opened_loan_details($code, $branch_number)
	{
		$this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
		$this->db->where('LOAN_M_PAYDEPT.CODE', $code);
		$this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
		$this->db->order_by('LPD_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_PAYDEPT');
		return $result;
	}
	//  สินเชื่อที่ปิดแล้ว 
	public function closed_loan_select($code, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT,LOAN_M_SUB_NAME.LSUB_NAME');
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.CODE', $code);
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->join('LOAN_M_SUB_NAME', ' LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_SUB_NAME.LSUB_CODE = LOAN_M_CONTACT.LSUB_CODE');
		$query = $this->db->get('LOAN_M_CONTACT');
		return $query->row();
	}

	// รายละเอียดสินเชื่อที่ปิดไปแล้ว 
	public function closed_loan_details($code, $branch_number)
	{
		$this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
		$this->db->where('LOAN_M_PAYDEPT.CODE', $code);
		$this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
		$this->db->order_by('LPD_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_PAYDEPT');
		return $result;
	}

	// เงินปันผล 
	public function dividend_member($mem_id, $branch_number)
	{
		$this->db->select('SHR_PAY_DIVIDEND.SHR_YEAR,SHR_PAY_DIVIDEND.SHR_SUMUP_DIV,SHR_PAY_DIVIDEND.SHR_OUT_DATE,SHR_PAY_DIVIDEND.BR_NO_PAY,BK_M_BRANCH.BR_NAME');
		$this->db->where('SHR_PAY_DIVIDEND.MEM_ID', $mem_id);
		$this->db->where('SHR_PAY_DIVIDEND.BR_NO', $branch_number);
		$this->db->where('SHR_PAY_DIVIDEND.SHR_YEAR', '2021');
		$this->db->join('SHR_MEM_PROCESS', ' SHR_MEM_PROCESS.MEM_ID = SHR_PAY_DIVIDEND.MEM_ID AND SHR_MEM_PROCESS.BR_NO = SHR_PAY_DIVIDEND.BR_NO ');
		$this->db->join('BK_M_BRANCH', 'SHR_PAY_DIVIDEND.BR_NO_PAY = BK_M_BRANCH.BR_NO');
		$result = $this->db->get('SHR_PAY_DIVIDEND');
		return $result->row();
	}

	// เงินหุ้น
	public function stock_select($mem_id, $branch_number)
	{
		$this->db->select('SHR_MEM.MEM_ID,BK_M_BRANCH.BR_NAME,SHR_MEM.SHR_SUM_BTH,SHR_MEM.POINT_SHR,WEL_H_MEMBER.MEM_AGE_OLD');
		$this->db->where('SHR_MEM.MEM_ID', $mem_id);
		$this->db->where('SHR_MEM.BR_NO', $branch_number);
		$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
		$this->db->join('WEL_H_MEMBER', 'WEL_H_MEMBER.BR_NO = SHR_MEM.BR_NO AND WEL_H_MEMBER.MEM_ID = SHR_MEM.MEM_ID');
		$query = $this->db->get('SHR_MEM');
		return $query->row();
	}

	// อายุการเป็นสมาชิก
	public function stock_age($mem_id, $branch_number)
	{
		$this->db->select_sum('SHR_ADV_COUNT');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$this->db->where('TMP_DATE_REC >=', '2019/07/01');
		$query = $this->db->get('SHR_T_SHARE');
		return $query->row();
	}
	// รายละเอียดเงินหุ้น
	public function stock_details($mem_id, $branch_number)
	{
		$this->db->select('SHR_T_SHARE.SLIP_NO,SHR_TBL.SHR_NA,SHR_T_SHARE.TMP_SHARE_QTY,SHR_T_SHARE.TMP_SHARE_BHT,SHR_T_SHARE.TMP_DATE_TODAY,SHR_T_SHARE.SHR_SUM_BTH');
		$this->db->where('SHR_T_SHARE.MEM_ID', $mem_id);
		$this->db->where('SHR_T_SHARE.BR_NO', $branch_number);
		$this->db->join('SHR_TBL', 'SHR_T_SHARE.SHR_NO = SHR_TBL.SHR_NO');
		$this->db->order_by('TMP_DATE_TODAY', 'DESC');
		$result = $this->db->get('SHR_T_SHARE');
		return $result;
	}

	// ข้อมูลสมาชิก 
	public function personal_data_member($mem_id, $branch_number)
	{
		$this->db->select('FNAME,LNAME,ID_CARD,DMY_BIRTH,SEX,FATHER,MOTHER,MARRIAGE_STATUS,BLO_GROUP,ADDRESS,MOO_ADDR,TUMBOL,LINE_ID,EMAIL,MOBILE_TEL');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$query = $this->db->get('MEM_H_MEMBER');
		return $query->row();
	}

	// ค้นหาข้อมูลสมาชิก 
	public function search_data_member($id_card, $mem_id, $fname, $lname, $branch_number)
	{
		$this->db->select('MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,BK_M_BRANCH.BR_NAME,MEM_H_MEMBER.MEM_ID,MEM_H_MEMBER.BR_NO');
		$this->db->like('MEM_H_MEMBER.ID_CARD', $id_card);
		$this->db->like('MEM_H_MEMBER.MEM_ID', $mem_id);
		$this->db->like('MEM_H_MEMBER.BR_NO', $branch_number);
		$this->db->like('MEM_H_MEMBER.FNAME', $fname);
		$this->db->like('MEM_H_MEMBER.LNAME', $lname);
		$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
		$this->db->order_by('MEM_H_MEMBER.FNAME', 'ASC');
		$result = $this->db->get('MEM_H_MEMBER');
		return $result;
	}

	public function uploadpicture($newsnumber, $uploadStatus, $date)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'newsnumber' => $newsnumber,
			'picturename' => $uploadStatus,
			'dateupload' => $date
		);
		$db2->insert('picture', $data);
	}

	public function uploadnews($newsnumber, $title, $description, $news_type, $date, $dateupload)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'newsnumber' => $newsnumber,
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'date' => $date,
			'dateupload' => $dateupload
		);
		$db2->insert('news', $data);
	}

	public function checknewsnumber($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('news');
		return $result;
	}

	public function get_news_information()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->where('news.news_typeid', '1');
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'DESC');
		$db2->limit(8);
		$result = $db2->get('news');
		return $result->result();
	}

	public function get_news_welfare()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->where('news.news_typeid', '2');
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'DESC');
		$db2->limit(8);
		$result = $db2->get('news');
		return $result->result();
	}

	public function get_news_credit()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->where('news.news_typeid', '3');
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'DESC');
		$db2->limit(8);
		$result = $db2->get('news');
		return $result->result();
	}

	public function get_news_foundation()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->where('news.news_typeid', '4');
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'DESC');
		$db2->limit(8);
		$result = $db2->get('news');
		return $result->result();
	}

	public function get_sidenewsdata($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->where('news.newsnumber !=', $newsnumber);
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'DESC');
		$db2->limit(6);
		$result = $db2->get('news');
		return $result;
	}

	public function get_news_data($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('title,description,date,dateupload');
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('news');
		return $result->row();
	}

	public function get_news_upload()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news_type.news_typename,news.title,news.date,news.dateupload');
		$db2->join('news_type', 'news.news_typeid = news_type.news_typeid');
		$db2->order_by('news.dateupload', 'DESC');
		$result = $db2->get('news');
		return $result;
	}

	public function get_newspicture($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('newsnumber,picturename');
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('picture');
		return $result;
	}

	public function deletenews($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->delete('news');
		return $result;
	}

	public function selectnews($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('newsnumber,title,description,date,dateupload');
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('news');
		return $result->row();
	}

	public function updatenews($newsnumber, $news_type, $title, $date, $description)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'news_typeid' => $news_type,
			'title' => $title,
			'description' => $description,
			'dateupload' => $date
		);

		$db2->where('newsnumber', $newsnumber);
		$result = $db2->update('news', $data);
		return $result;
	}

	public function selectpicture($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('picturename');
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('picture');
		return $result;
	}

	public function deletepicture($newsnumber)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->delete('picture');
		return $result;
	}

	public function get_list_activity()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
		$db2->join('picture', 'news.newsnumber = picture.newsnumber');
		$db2->group_by('news.newsnumber');
		$db2->order_by('dateupload', 'desc');
		$db2->limit(20);
		$result = $db2->get('news');
		return $result;
	}

	public function upload_internalfile($title, $date, $uploadFile, $type_announcement)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'title' => $title,
			'date' => $date,
			'uploadFile' => $uploadFile,
			'type_announcement' => $type_announcement
		);
		$db2->insert('internal_announcement', $data);
	}

	public function select_form($internal_id)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('internal_id', $internal_id);
		$result = $db2->get('internal_announcement');
		return $result->row();
	}

	public function get_internalfile_hr()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('internal_id,title,date,uploadfile');
		$db2->where('type_announcement', 1);
		$db2->order_by('date', 'DESC');
		$result = $db2->get('internal_announcement');
		return $result->result();
	}

	public function get_internalfile_ho()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('internal_id,title,date,uploadfile');
		$db2->where('type_announcement', 2);
		$db2->order_by('date', 'DESC');
		$result = $db2->get('internal_announcement');
		return $result->result();
	}

	public function upload_creditfile($mem_id, $fname, $lname, $fullcont_id,  $year, $branch_id, $credit_id, $file_name, $path, $username, $date)
	{
		$db2 = $this->load->database('db2', TRUE);
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
		$db2->insert('credit_upload', $data);
	}

	public function search_credit($year, $branch_id, $credit_id)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('credit_upload.id_credit,credit_upload.mem_id,credit_upload.fname,credit_upload.lname,credit_upload.fullcont_id,credit_upload.path,credit_upload.name_upload,credit_upload.date_upload,credit_upload.year,branch_name.name_branch,credit_type.credit_name');
		$db2->where('credit_upload.year', $year);
		$db2->where('credit_upload.branch_id', $branch_id);
		$db2->where('credit_upload.credit_id', $credit_id);
		$db2->join('credit_type', 'credit_type.credit_id = credit_upload.credit_id');
		$db2->join('branch_name', 'branch_name.branch_id = credit_upload.branch_id');
		$db2->order_by('date_upload', 'desc');
		$result = $db2->get('credit_upload');
		return $result->result();
	}

	public function select_credit($id_credit)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('id_credit ', $id_credit);
		$result = $db2->get('credit_upload');
		return $result->row();
	}

	public function delete_credit($id_credit)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('id_credit ', $id_credit);
		$result = $db2->delete('credit_upload');
		return $result;
	}

	public function get_document()
	{
		$db2 = $this->load->database('db2', TRUE);
		$result = $db2->get('performance');
		return $result->result();
	}

	public function uploadDocumentFile($document_name, $file_name, $path, $date)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'document_name' => $document_name,
			'file_name' => $file_name,
			'path' => $path,
			'date' => $date
		);
		$db2->insert('performance', $data);
	}

	public function select_document($performance_id)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('performance_id', $performance_id);
		$result = $db2->get('performance');
		return $result->row();
	}

	public function delete_document($performance_id)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('performance_id', $performance_id);
		$result = $db2->delete('performance');
		return $result;
	}

	public function checkasset_number($asset_number)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('asset_number', $asset_number);
		$result = $db2->get('asset');
		return $result;
	}

	public function asset_upload($asset_number, $title, $description1, $description2, $contact, $asset_type, $date)
	{
		$db2 = $this->load->database('db2', TRUE);
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
		$db2->insert('asset', $data);
	}

	public function upload_asset_picture($asset_number, $uploadStatus)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'asset_number' => $asset_number,
			'picture_name' => $uploadStatus
		);
		$db2->insert('asset_picture', $data);
	}

	public function get_asset()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->join('asset_type', 'asset_type.asset_type = asset.asset_type');
		$result = $db2->get('asset');
		return $result->result();
	}

	public function get_list_estate()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$db2->where('asset.asset_type', 1);
		$db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$db2->group_by('asset.asset_number');
		$result = $db2->get('asset');
		return $result->result();
	}

	public function get_list_vacant()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$db2->where('asset.asset_type', 2);
		$db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$db2->group_by('asset.asset_number');
		$result = $db2->get('asset');
		return $result->result();
	}

	public function get_list_condo()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('asset.asset_number,asset.title,asset.description1,asset.date,asset_picture.picture_name');
		$db2->where('asset.asset_type', 3);
		$db2->join('asset_picture', 'asset_picture.asset_number = asset.asset_number');
		$db2->group_by('asset.asset_number');
		$result = $db2->get('asset');
		return $result->result();
	}

	public function get_asset_data($asset_number)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('asset_number', $asset_number);
		$result = $db2->get('asset');
		return $result->row();
	}

	public function get_assetpicture($asset_number)
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->where('asset_number', $asset_number);
		$result = $db2->get('asset_picture');
		return $result->result();
	}
}
