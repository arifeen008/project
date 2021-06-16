<?php defined('BASEPATH') or exit('No direct script access allowed');

class Officer_model extends CI_Model
{
    private $tbl_name1 = 'BK_H_TELLER_CONTROL';
    private $tbl_name2 = 'BK_M_BRANCH';
    private $tbl_name3 = 'BK_H_SAVINGACCOUNT';
    private $tbl_name4 = 'BK_T_FINANCE';
    private $tbl_name5 = 'MEM_H_MEMBER';
    private $tbl_name6 = 'BK_M_ACC_TYPE';
    private $tbl_name7 = 'LOAN_M_CONTACT';
    private $tbl_name8 = 'LOAN_M_PAYDEPT';
    private $tbl_name9 = 'uploadfile';


    public function fetch_user_login($USER_ID, $PASSWORD)
    {
        $this->db->where('USER_ID', $USER_ID);
        $this->db->where('PASSWORD', $PASSWORD);
        $query = $this->db->get($this->tbl_name1);
        return $query->row();
    }

    public function data_officer($USER_ID)
    {
        // $this->db->select('BK_H_TELLER_CONTROL.USER_ID,BK_H_TELLER_CONTROL.USER_NAME,BK_H_TELLER_CONTROL.LEVEL_CODE,BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME');
        $this->db->where('BK_H_TELLER_CONTROL.USER_ID', $USER_ID);
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_TELLER_CONTROL.BR_NO');
        $query = $this->db->get($this->tbl_name1);
        return $query->row();
    }

    public function data_member($mem_id, $branch_number)
    {
        $this->db->select('MEM_ID,BR_NO,FNAME,LNAME');
        $this->db->where('MEM_ID', $mem_id);
        $this->db->where('BR_NO', $branch_number);
        $query = $this->db->get($this->tbl_name5);
        if ($query == null) {
            return null;
        } else {
            return $query->row();
        }
    }

    public function getname_member($id_card)
    {
        $this->db->select('FNAME,LNAME,MEM_ID,BR_NO');
        $this->db->where('ID_CARD', $id_card);
        $result = $this->db->get('MEM_H_MEMBER');
        return $result->row();
    }

    public function getid($id_card)
    {
        $this->db->select('MEM_ID,BR_NO');
        $this->db->where('ID_CARD', $id_card);
        $result = $this->db->get('MEM_H_MEMBER');
        return $result->row();
    }

    public function pullbranch()
    {
        $this->db->select('BR_NO,BR_NAME');
        $this->db->order_by('BR_NO', 'ASC');
        $result = $this->db->get($this->tbl_name2);
        return $result;
    }


    public function depositreport_summary($startdate, $enddate, $user_id)
    {
        $this->db->select('F_DATE,F_DEP,F_WDL,F_BALANCE');
        $this->db->where('USER_ID', $user_id);
        $this->db->where('F_DATE >=', $startdate);
        $this->db->where('F_DATE <=', $enddate);
        $this->db->group_by('F_DATE');
        $this->db->order_by('F_DATE', 'ASC');
        $result = $this->db->get('BK_T_FINANCE');
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
        // $this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.LCONT_ID = LOAN_M_CONTACT.LCONT_ID ');
        $this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_CONTACT');
        return $result;
    }

    public function credit_officer_detail($code, $branch_number)
    {
        $this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
        $this->db->where('LOAN_M_PAYDEPT.CODE', $code);
        $this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
        $this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
        $this->db->order_by('LPD_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_PAYDEPT');
        return $result;
    }

    public function credit_officer_select($code, $BR_NO)
    {
        $this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
        $this->db->where('LOAN_M_CONTACT.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_REGISTER.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_REGISTER.CODE', $code);
        $this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
        $query = $this->db->get('LOAN_M_CONTACT');
        return $query->row();
    }

    public function checkcredit_officer($mem_id, $branch_number)
    {
        $this->db->select('LCONT_ID,L_TYPE_CODE,LSUB_CODE,LCONT_DATE,LCONT_APPROVE_SAL,LCONT_AMOUNT_SAL,CODE,BR_NO');
        $this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
        $this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
        $this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '4');
        $this->db->order_by('LCONT_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_CONTACT');
        return $result;
    }

    public function checkcredit_officer_select($code, $branch_number)
    {
        $this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
        $this->db->where('LOAN_M_CONTACT.BR_NO', $branch_number);
        $this->db->where('LOAN_M_REGISTER.BR_NO', $branch_number);
        $this->db->where('LOAN_M_REGISTER.CODE', $code);
        $this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
        $query = $this->db->get('LOAN_M_CONTACT');
        return $query->row();
    }

    public function checkcredit_officer_detail($code, $branch_number)
    {
        // $this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
        $this->db->where('LOAN_M_PAYDEPT.CODE', $code);
        $this->db->where('LOAN_M_PAYDEPT.BR_NO', $branch_number);
        $this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
        $this->db->order_by('LPD_DATE', 'ASC');
        $result = $this->db->get($this->tbl_name8);
        return $result;
    }

    public function deposittype()
    {
        $this->db->select('ACC_TYPE,ACC_DESC');
        $this->db->order_by('ACC_TYPE', 'ASC');
        $result = $this->db->get($this->tbl_name6);
        return $result;
    }

    public function sum_deposit_summary($startdate, $enddate, $USER_ID, $ACC_TYPE)
    {
        $this->db->select_sum('BK_T_FINANCE.F_DEP');
        $this->db->where('BK_H_TELLER_CONTROL.USER_ID', $USER_ID);
        $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $ACC_TYPE);
        $this->db->where('BK_T_FINANCE.F_DATE >=', $startdate);
        $this->db->where('BK_T_FINANCE.F_DATE <=', $enddate);
        $this->db->join('BK_T_FINANCE', 'BK_T_FINANCE.USER_ID = BK_H_TELLER_CONTROL.USER_ID');
        $this->db->join('BK_H_SAVINGACCOUNT', 'BK_T_FINANCE.F_FROM_ACC = BK_H_SAVINGACCOUNT.ACCOUNT_NO');
        $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
        $this->db->join('BK_M_TRANSCODE', 'BK_M_TRANSCODE.TRANS_CODE = BK_T_FINANCE.TRANS_CODE');
        $this->db->order_by('BK_T_FINANCE.F_DATE', 'asc');
        $result = $this->db->get($this->tbl_name1);
        return $result->row();
    }

    public function sum_withdraw_summary($startdate, $enddate, $USER_ID, $ACC_TYPE)
    {
        $this->db->select_sum('BK_T_FINANCE.F_WDL');
        $this->db->where('BK_H_TELLER_CONTROL.USER_ID', $USER_ID);
        $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $ACC_TYPE);
        $this->db->where('BK_T_FINANCE.F_DATE >=', $startdate);
        $this->db->where('BK_T_FINANCE.F_DATE <=', $enddate);
        $this->db->join('BK_T_FINANCE', 'BK_T_FINANCE.USER_ID = BK_H_TELLER_CONTROL.USER_ID');
        $this->db->join('BK_H_SAVINGACCOUNT', 'BK_T_FINANCE.F_FROM_ACC = BK_H_SAVINGACCOUNT.ACCOUNT_NO');
        $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
        $this->db->join('BK_M_TRANSCODE', 'BK_M_TRANSCODE.TRANS_CODE = BK_T_FINANCE.TRANS_CODE');
        $this->db->order_by('BK_T_FINANCE.F_DATE', 'ASC');
        $result = $this->db->get($this->tbl_name1);
        return $result->row();
    }

    public function account_book_balance($account_number)
    {
        $this->db->select('ACCOUNT_NO,ACCOUNT_NAME,BALANCE,AVAILABLE');
        $this->db->where('ACCOUNT_NO', $account_number);
        $this->db->group_by('ACCOUNT_NO,ACCOUNT_NAME,BALANCE,AVAILABLE');
        $this->db->order_by('ACCOUNT_NO', 'ASC');
        $result = $this->db->get('BK_H_SAVINGACCOUNT');
        return $result->row();
    }

    public function detail_deposit($account_number)
    {
        $this->db->select('F_TIME,F_DEP,F_WDL,F_BALANCE');
        $this->db->where('F_FROM_ACC', $account_number);
        $this->db->order_by('F_TIME', 'ASC');
        $result = $this->db->get('BK_T_FINANCE');
        return $result;
    }
}
