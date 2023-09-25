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
	public function data_officer($user_id,$br_no)
	{
		$this->db->select('BK_H_TELLER_CONTROL.USER_ID,BK_H_TELLER_CONTROL.USER_NAME,BK_H_TELLER_CONTROL.LEVEL_CODE,BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME');
		$this->db->where('BK_H_TELLER_CONTROL.USER_ID', $user_id);
		$this->db->where('BK_H_TELLER_CONTROL.BR_NO', $br_no);
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
		return $result;
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
}
