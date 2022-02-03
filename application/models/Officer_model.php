<?php defined('BASEPATH') or exit('No direct script access allowed');

class Officer_model extends CI_Model
{
	public function fetch_user_login($user_id, $password)
	{
		$this->db->where('USER_ID', $user_id);
		$this->db->where('PASSWORD', $password);
		$query = $this->db->get('BK_H_TELLER_CONTROL');
		return $query->row();
	}

	public function data_officer($user_id)
	{
		$this->db->select('BK_H_TELLER_CONTROL.USER_ID,BK_H_TELLER_CONTROL.USER_NAME,BK_H_TELLER_CONTROL.LEVEL_CODE,BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME');
		$this->db->where('BK_H_TELLER_CONTROL.USER_ID', $user_id);
		$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_TELLER_CONTROL.BR_NO');
		$query = $this->db->get('BK_H_TELLER_CONTROL');
		return $query->row();
	}

	public function data_member($mem_id, $branch_number)
	{
		$this->db->select('MEM_ID,BR_NO,FNAME,LNAME');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$query = $this->db->get('MEM_H_MEMBER');
		return $query->row();
	}

	public function depositreport_summary($startdate, $enddate, $user_id, $branch_number)
	{
		$this->db->select('F_DATE,F_DEP,F_WDL,F_BALANCE');
		$this->db->where('USER_ID', $user_id);
		$this->db->where('F_BRNO', $branch_number);
		$this->db->where('F_DATE >=', $startdate);
		$this->db->where('F_DATE <=', $enddate);
		$this->db->group_by('F_DATE');
		$this->db->order_by('F_DATE', 'DESC');
		$result = $this->db->get('BK_T_FINANCE');
		return $result;
	}

	public function deposit_member($mem_id, $branch_number)
	{
		$this->db->select('ACCOUNT_NO,ACCOUNT_NAME,BALANCE');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$result = $this->db->get('BK_H_SAVINGACCOUNT');
		return $result;
	}

	public function account_details($account_number)
	{
		$this->db->select('F_TIME,F_DEP,F_WDL,F_BALANCE');
		$this->db->where('F_FROM_ACC', $account_number);
		$this->db->order_by('F_TIME', 'DESC');
		$result = $this->db->get('BK_T_FINANCE');
		return $result;
	}

	public function opened_credit_member($mem_id, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.BR_NO,LOAN_M_CONTACT.CODE,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
		$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_REGISTER.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '1');
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_CONTACT');
		return $result;
	}

	public function closed_credit_member($mem_id, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.BR_NO,LOAN_M_CONTACT.CODE,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
		$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_REGISTER.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '4');
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_CONTACT');
		return $result;
	}

	public function listcredit_member($mem_id, $branch_number, $fname, $lname)
	{
		$this->db->select('MEM_H_MEMBER.MEM_ID,MEM_H_MEMBER.BR_NO,MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,BK_M_BRANCH.BR_NAME');
		$this->db->like('MEM_H_MEMBER.MEM_ID', $mem_id);
		$this->db->like('MEM_H_MEMBER.BR_NO', $branch_number);
		$this->db->like('MEM_H_MEMBER.FNAME', $fname);
		$this->db->like('MEM_H_MEMBER.LNAME', $lname);
		$this->db->join('BK_M_BRANCH', 'MEM_H_MEMBER.BR_NO = BK_M_BRANCH.BR_NO');
		$this->db->order_by('MEM_H_MEMBER.FNAME', 'ASC');
		$result = $this->db->get('MEM_H_MEMBER');
		return $result;
	}

	public function credit_officer($mem_id, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.BR_NO,LOAN_M_CONTACT.CODE,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
		$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_REGISTER.MEM_ID', $mem_id);
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '1');
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
		$result = $this->db->get('LOAN_M_CONTACT');
		return $result;
	}

	public function opened_loan_select($code, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.CODE', $code);
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$query = $this->db->get('LOAN_M_CONTACT');
		return $query->row();
	}

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

	public function closed_loan_select($code, $branch_number)
	{
		$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
		$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
		$this->db->where('LOAN_M_REGISTER.CODE', $code);
		$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
		$query = $this->db->get('LOAN_M_CONTACT');
		return $query->row();
	}

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

	// public function credit_officer_detail($code, $branch_number)
	// {
	// 	$this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
	// 	$this->db->where('LOAN_M_PAYDEPT.CODE', $code);
	// 	$this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
	// 	$this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
	// 	$this->db->order_by('LPD_DATE', 'ASC');
	// 	$result = $this->db->get('LOAN_M_PAYDEPT');
	// 	return $result;
	// }

	// public function credit_officer_select($code, $BR_NO)
	// {
	// 	$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
	// 	$this->db->where('LOAN_M_CONTACT.BR_NO', $BR_NO);
	// 	$this->db->where('LOAN_M_REGISTER.BR_NO', $BR_NO);
	// 	$this->db->where('LOAN_M_REGISTER.CODE', $code);
	// 	$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
	// 	$query = $this->db->get('LOAN_M_CONTACT');
	// 	return $query->row();
	// }

	// public function checkcredit_officer($mem_id, $branch_number)
	// {
	// 	$this->db->select('LCONT_ID,L_TYPE_CODE,LSUB_CODE,LCONT_DATE,LCONT_APPROVE_SAL,LCONT_AMOUNT_SAL,CODE,BR_NO');
	// 	$this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
	// 	$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
	// 	$this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '4');
	// 	$this->db->order_by('LCONT_DATE', 'ASC');
	// 	$result = $this->db->get('LOAN_M_CONTACT');
	// 	return $result;
	// }

	// public function checkcredit_officer_select($code, $branch_number)
	// {
	// 	$this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
	// 	$this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
	// 	$this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
	// 	$this->db->where('LOAN_M_REGISTER.CODE', $code);
	// 	$this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
	// 	$query = $this->db->get('LOAN_M_CONTACT');
	// 	return $query->row();
	// }

	// public function checkcredit_officer_detail($code, $branch_number)
	// {
	// 	$this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
	// 	$this->db->where('LOAN_M_PAYDEPT.CODE', $code);
	// 	$this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
	// 	$this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
	// 	$this->db->order_by('LPD_DATE', 'ASC');
	// 	$result = $this->db->get('LOAN_M_PAYDEPT');
	// 	return $result;
	// }

	// public function deposittype()
	// {
	// 	$this->db->select('ACC_TYPE,ACC_DESC');
	// 	$this->db->order_by('ACC_TYPE', 'ASC');
	// 	$result = $this->db->get('BK_M_ACC_TYPE');
	// 	return $result;
	// }

	// public function sum_deposit_summary($startdate, $enddate, $USER_ID, $ACC_TYPE)
	// {
	// 	$this->db->select_sum('BK_T_FINANCE.F_DEP');
	// 	$this->db->where('BK_H_TELLER_CONTROL.USER_ID', $USER_ID);
	// 	$this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $ACC_TYPE);
	// 	$this->db->where('BK_T_FINANCE.F_DATE >=', $startdate);
	// 	$this->db->where('BK_T_FINANCE.F_DATE <=', $enddate);
	// 	$this->db->join('BK_T_FINANCE', 'BK_T_FINANCE.USER_ID = BK_H_TELLER_CONTROL.USER_ID');
	// 	$this->db->join('BK_H_SAVINGACCOUNT', 'BK_T_FINANCE.F_FROM_ACC = BK_H_SAVINGACCOUNT.ACCOUNT_NO');
	// 	$this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
	// 	$this->db->join('BK_M_TRANSCODE', 'BK_M_TRANSCODE.TRANS_CODE = BK_T_FINANCE.TRANS_CODE');
	// 	$this->db->order_by('BK_T_FINANCE.F_DATE', 'asc');
	// 	$result = $this->db->get('BK_H_TELLER_CONTROL');
	// 	return $result->row();
	// }

	// public function sum_withdraw_summary($startdate, $enddate, $USER_ID, $ACC_TYPE)
	// {
	// 	$this->db->select_sum('BK_T_FINANCE.F_WDL');
	// 	$this->db->where('BK_H_TELLER_CONTROL.USER_ID', $USER_ID);
	// 	$this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $ACC_TYPE);
	// 	$this->db->where('BK_T_FINANCE.F_DATE >=', $startdate);
	// 	$this->db->where('BK_T_FINANCE.F_DATE <=', $enddate);
	// 	$this->db->join('BK_T_FINANCE', 'BK_T_FINANCE.USER_ID = BK_H_TELLER_CONTROL.USER_ID');
	// 	$this->db->join('BK_H_SAVINGACCOUNT', 'BK_T_FINANCE.F_FROM_ACC = BK_H_SAVINGACCOUNT.ACCOUNT_NO');
	// 	$this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
	// 	$this->db->join('BK_M_TRANSCODE', 'BK_M_TRANSCODE.TRANS_CODE = BK_T_FINANCE.TRANS_CODE');
	// 	$this->db->order_by('BK_T_FINANCE.F_DATE', 'ASC');
	// 	$result = $this->db->get('BK_H_TELLER_CONTROL');
	// 	return $result->row();
	// }

	// public function list_deposit_member($account_number, $mem_id, $fname, $lname, $branch_number)
	// {
	// 	$this->db->select('MEM_H_MEMBER.MEM_ID,MEM_H_MEMBER.BR_NO,BK_H_SAVINGACCOUNT.ACCOUNT_NO,MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,BK_M_BRANCH.BR_NAME');
	// 	$this->db->like('BK_H_SAVINGACCOUNT.ACCOUNT_NO', $account_number);
	// 	$this->db->like('MEM_H_MEMBER.MEM_ID', $mem_id);
	// 	$this->db->like('MEM_H_MEMBER.BR_NO', $branch_number);
	// 	$this->db->like('MEM_H_MEMBER.FNAME', $fname);
	// 	$this->db->like('MEM_H_MEMBER.LNAME', $lname);
	// 	$this->db->join('BK_M_BRANCH', 'BK_H_SAVINGACCOUNT.BR_NO = BK_M_BRANCH.BR_NO');
	// 	$this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.MEM_ID = BK_H_SAVINGACCOUNT.MEM_ID AND MEM_H_MEMBER.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
	// 	$result = $this->db->get('BK_H_SAVINGACCOUNT');
	// 	return $result;
	// }

	// public function deposit_member_detail($account_number)
	// {
	// 	$this->db->select('F_TIME,F_DEP,F_WDL,F_BALANCE');
	// 	$this->db->where('F_FROM_ACC', $account_number);
	// 	$this->db->order_by('F_TIME', 'ASC');
	// 	$result = $this->db->get('BK_T_FINANCE');
	// 	return $result;
	// }

	// public function list_datashare_member($fname, $lname, $branch_number)
	// {
	// 	$this->db->select('MEM_H_MEMBER.MEM_ID,MEM_H_MEMBER.BR_NO,MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,BK_M_BRANCH.BR_NAME');
	// 	$this->db->like('MEM_H_MEMBER.FNAME', $fname);
	// 	$this->db->like('MEM_H_MEMBER.LNAME', $lname);
	// 	$this->db->where('MEM_H_MEMBER.BR_NO', $branch_number);
	// 	$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
	// 	$result = $this->db->get('MEM_H_MEMBER');
	// 	return $result;
	// }

	public function stock_select($mem_id, $branch_number)
	{
		$this->db->select('SHR_MEM.MEM_ID,BK_M_BRANCH.BR_NAME,SHR_MEM.SHR_SUM_BTH,SHR_MEM.POINT_SHR');
		$this->db->where('SHR_MEM.MEM_ID', $mem_id);
		$this->db->where('SHR_MEM.BR_NO', $branch_number);
		$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
		$query = $this->db->get('SHR_MEM');
		return $query->row();
	}

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

	// public function datashare_member($mem_id, $branch_number)
	// {
	// 	$this->db->select('SHR_T_SHARE.SLIP_NO,SHR_TBL.SHR_NA,SHR_T_SHARE.TMP_SHARE_QTY,SHR_T_SHARE.TMP_SHARE_BHT,SHR_T_SHARE.TMP_DATE_TODAY,SHR_T_SHARE.SHR_SUM_BTH');
	// 	$this->db->where('SHR_T_SHARE.MEM_ID', $mem_id);
	// 	$this->db->where('SHR_T_SHARE.BR_NO', $branch_number);
	// 	$this->db->join('SHR_TBL', 'SHR_T_SHARE.SHR_NO = SHR_TBL.SHR_NO');
	// 	$this->db->order_by('TMP_DATE_TODAY', 'DESC');
	// 	$result = $this->db->get('SHR_T_SHARE');
	// 	return $result;
	// }

	// public function share_member($mem_id, $branch_number)
	// {
	// 	$this->db->select('SHR_MEM.MEM_ID,BK_M_BRANCH.BR_NAME,SHR_MEM.SHR_SUM_BTH,SHR_MEM.POINT_SHR');
	// 	$this->db->where('SHR_MEM.MEM_ID', $mem_id);
	// 	$this->db->where('SHR_MEM.BR_NO', $branch_number);
	// 	$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
	// 	$query = $this->db->get('SHR_MEM');
	// 	return $query->row();
	// }

	public function personal_data_member($mem_id, $branch_number)
	{
		$this->db->select('FNAME,LNAME,ID_CARD,DMY_BIRTH,SEX,FATHER,MOTHER,MARRIAGE_STATUS,BLO_GROUP,ADDRESS,MOO_ADDR,TUMBOL,LINE_ID,EMAIL,MOBILE_TEL');
		$this->db->where('MEM_ID', $mem_id);
		$this->db->where('BR_NO', $branch_number);
		$query = $this->db->get('MEM_H_MEMBER');
		return $query->row();
	}

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

	// public function welfare_member($mem_id, $br_no)
	// {
	// 	$this->db->select('WEL_H_MEMBER.MEM_ID,BK_M_BRANCH.BR_NAME,WEL_H_MEMBER.EXCHG_DATE');
	// 	$this->db->where('WEL_H_MEMBER.MEM_ID', $mem_id);
	// 	$this->db->where('WEL_H_MEMBER.BR_NO', $br_no);
	// 	$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = WEL_H_MEMBER.BR_NO');
	// 	$result = $this->db->get('WEL_H_MEMBER');
	// 	return $result;
	// }

	// public function searchreport_member($branch_number, $start, $to)
	// {
	// 	$this->db->select('BK_M_BRANCH.BR_NAME,MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,MEM_H_MEMBER.MOBILE_TEL,SHR_MEM.SHR_SUM_BTH');
	// 	$this->db->select_sum('BK_H_SAVINGACCOUNT.BALANCE');
	// 	$this->db->where('SHR_MEM.BR_NO', $branch_number);
	// 	$this->db->where('SHR_MEM.SHR_SUM_BTH >=', $start);
	// 	$this->db->where('SHR_MEM.SHR_SUM_BTH <=', $to);
	// 	$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
	// 	$this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.BR_NO = SHR_MEM.BR_NO AND MEM_H_MEMBER.MEM_ID = SHR_MEM.MEM_ID');
	// 	$this->db->join('BK_H_SAVINGACCOUNT', 'BK_H_SAVINGACCOUNT.BR_NO = MEM_H_MEMBER.BR_NO AND BK_H_SAVINGACCOUNT.MEM_ID = MEM_H_MEMBER.MEM_ID');
	// 	$this->db->group_by('MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME');
	// 	$this->db->order_by('SHR_MEM.SHR_SUM_BTH', 'DESC');
	// 	$result = $this->db->get('SHR_MEM');
	// 	return $result;
	// }

	// public function searchreport_member_allbranch($start, $to)
	// {
	// 	$this->db->select('BK_M_BRANCH.BR_NAME,MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME,MEM_H_MEMBER.MOBILE_TEL,SHR_MEM.SHR_SUM_BTH');
	// 	$this->db->select_sum('BK_H_SAVINGACCOUNT.BALANCE');
	// 	$this->db->where('SHR_MEM.SHR_SUM_BTH >=', $start);
	// 	$this->db->where('SHR_MEM.SHR_SUM_BTH <=', $to);
	// 	$this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
	// 	$this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.BR_NO = SHR_MEM.BR_NO AND MEM_H_MEMBER.MEM_ID = SHR_MEM.MEM_ID');
	// 	$this->db->join('BK_H_SAVINGACCOUNT', 'BK_H_SAVINGACCOUNT.BR_NO = MEM_H_MEMBER.BR_NO AND BK_H_SAVINGACCOUNT.MEM_ID = MEM_H_MEMBER.MEM_ID');
	// 	$this->db->group_by('MEM_H_MEMBER.FNAME,MEM_H_MEMBER.LNAME');
	// 	$this->db->order_by('SHR_MEM.SHR_SUM_BTH', 'DESC');
	// 	$result = $this->db->get('SHR_MEM');
	// 	return $result;
	// }

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
		$db2->select('newsnumber');
		$db2->where('newsnumber', $newsnumber);
		$result = $db2->get('news');
		return $result;
	}

	public function get_list_news()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('news.newsnumber,news.title,news.description,news.dateupload,picture.picturename');
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
		$db2->select('news.newsnumber,newstype.news_typename,news.title,news.date,news.dateupload');
		$db2->join('newstype', 'news.news_typeid = newstype.news_typeid');
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
		$db2->order_by('dateupload', 'DESC');
		$result = $db2->get('news');
		return $result;
	}

	public function upload_internalfile($title, $date, $uploadFile)
	{
		$db2 = $this->load->database('db2', TRUE);
		$data = array(
			'title' => $title,
			'date' => $date,
			'uploadFile' => $uploadFile
		);
		$db2->insert('internal_announcement', $data);
	}

	public function get_internalfile()
	{
		$db2 = $this->load->database('db2', TRUE);
		$db2->select('title,date,uploadfile');
		$db2->order_by('date', 'DESC');
		$result = $db2->get('internal_announcement');
		return $result->result();
	}
}
