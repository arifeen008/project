<?php defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{
    public function fetch_user_login($user_id)
    {
        $this->db->select('BR_NO,MEM_ID,USER_ID,PASSWORD');
        $this->db->where('USER_ID', $user_id);
        $query = $this->db->get('WEB_H_MEMBER');
        return $query->row();
    }

    public function insert_register_form($email, $password, $id_card)
    {
        $userdata = $this->data_member($id_card);
        $data = array(
            'BR_NO' => $userdata->BR_NO,
            'MEM_ID' => $userdata->MEM_ID,
            'USER_ID' => $email,
            'PASSWORD' => $password,
            'MEMBER_STATUS' => 'Y',
            'LAST_UPDATE' => date("Y-m-d"),
            'LOGIN_DATE' => date("Y-m-d"),
            'PASSWORD_OLD' => $password,
            'LOGIN_NUM' => 1
        );
        $result = $this->db->insert('WEB_H_MEMBER', $data);
        return $result;
    }

	public function insert_email($email,$id_card)
    {
        $userdata = $this->data_member($id_card);
        $data = array(       
            'USER_ID' => $email,    
        );
		$this->db->where('MEM_ID',$userdata->MEM_ID);
		$this->db->where('BR_NO',$userdata->BR_NO);
        $result = $this->db->update('WEB_H_MEMBER', $data);
        return $result;
    }

    public function getdata_member($BR_NO, $MEM_ID)
    {
        $this->db->where('BR_NO', $BR_NO);
        $this->db->where('MEM_ID', $MEM_ID);
        $query = $this->db->get('MEM_H_MEMBER');
        return $query->row();
    }

    public function data_member($ID_CARD)
    {
        $this->db->select('MEM_ID,BR_NO,MEM_ID');
        $this->db->where('ID_CARD', $ID_CARD);
        $query = $this->db->get('MEM_H_MEMBER');
        return $query->row();
    }

    public function updatephone_member($MOBILE_TEL, $LINE_ID, $EMAIL, $ID_CARD)
    {
        $data = array(
            'MOBILE_TEL' => $MOBILE_TEL,
            'LINE_ID' => $LINE_ID,
            'EMAIL' => $EMAIL
        );
        $this->db->where('ID_CARD', $ID_CARD);
        $result = $this->db->update('MEM_H_MEMBER', $data);
        return $result;
    }

    public function share_member($br_no, $mem_id)
    {
        $this->db->select('SHR_MEM.MEM_ID,BK_M_BRANCH.BR_NAME,SHR_MEM.SHR_SUM_BTH,SHR_MEM.POINT_SHR');
        $this->db->where('SHR_MEM.MEM_ID', $mem_id);
        $this->db->where('SHR_MEM.BR_NO', $br_no);
        $this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.MEM_ID = SHR_MEM.MEM_ID AND MEM_H_MEMBER.BR_NO = SHR_MEM.BR_NO');
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_MEM.BR_NO');
        $query = $this->db->get('SHR_MEM');
        return $query->row();
    }

    public function share_member_detail($br_no, $mem_id)
    {
        $this->db->select('SHR_T_SHARE.SLIP_NO,SHR_TBL.SHR_NA,SHR_T_SHARE.TMP_DATE_TODAY,SHR_T_SHARE.SHR_SUM_BTH,SHR_T_SHARE.TMP_SHARE_QTY,SHR_T_SHARE.TMP_SHARE_BHT');
        $this->db->where('SHR_T_SHARE.BR_NO', $br_no);
        $this->db->where('SHR_T_SHARE.MEM_ID', $mem_id);
        $this->db->join('SHR_TBL', 'SHR_TBL.SHR_NO = SHR_T_SHARE.SHR_NO');
        $this->db->order_by('SHR_T_SHARE.TMP_DATE_TODAY', 'DESC');
        $result = $this->db->get('SHR_T_SHARE');
        return $result;
    }

    public function deposit_member($br_no, $mem_id)
    {
        $this->db->select('BK_H_SAVINGACCOUNT.ACCOUNT_NAME, BK_H_SAVINGACCOUNT.ACCOUNT_NO, BK_M_ACC_TYPE.ACC_DESC, BK_M_BRANCH.BR_NAME, BK_H_SAVINGACCOUNT.BALANCE, BK_H_SAVINGACCOUNT.ACCOUNT_NO');
        $this->db->where('BK_H_SAVINGACCOUNT.MEM_ID', $mem_id);
        $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $br_no);
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
        $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
        $result = $this->db->get('BK_H_SAVINGACCOUNT');
        return $result;
    }

    public function credit_member($br_no, $mem_id)
    {
        $this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_CONTACT.CODE,LOAN_M_REGISTER.END_PAYDEPT');
        $this->db->where('LOAN_M_CONTACT.BR_NO', $br_no);
        $this->db->where('LOAN_M_CONTACT.MEM_ID', $mem_id);
        $this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '1');
        $this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
        $this->db->order_by('LOAN_M_CONTACT.LCONT_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_CONTACT');
        return $result;
    }

    public function credit_member_detail($BR_NO, $code)
    {
        $this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
        $this->db->where('LOAN_M_PAYDEPT.CODE', $code);
        $this->db->where('LOAN_M_PAYDEPT.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
        $this->db->order_by('LPD_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_PAYDEPT');
        return $result;
    }

    public function credit_member_select($BR_NO, $code)
    {
        $this->db->select('LOAN_M_CONTACT.LCONT_ID,LOAN_M_CONTACT.L_TYPE_CODE,LOAN_M_CONTACT.LSUB_CODE,LOAN_M_CONTACT.LCONT_DATE,LOAN_M_CONTACT.LCONT_APPROVE_SAL,LOAN_M_CONTACT.LCONT_AMOUNT_INST,LOAN_M_CONTACT.LCONT_AMOUNT_SAL,LOAN_M_REGISTER.END_PAYDEPT');
        $this->db->where('LOAN_M_CONTACT.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_REGISTER.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_REGISTER.CODE', $code);
        $this->db->join('LOAN_M_REGISTER', ' LOAN_M_REGISTER.CODE = LOAN_M_CONTACT.CODE ');
        $query = $this->db->get('LOAN_M_CONTACT');
        return $query->row();
    }

    public function checkcredit_member($MEM_ID, $ID_CARD, $BR_NO)
    {
        $this->db->select('LCONT_ID,L_TYPE_CODE,LSUB_CODE,LCONT_DATE,LCONT_APPROVE_SAL,LCONT_AMOUNT_SAL,CODE');
        $this->db->where('MEM_H_MEMBER.ID_CARD', $ID_CARD);
        $this->db->where('MEM_H_MEMBER.MEM_ID', $MEM_ID);
        $this->db->where('LOAN_M_CONTACT.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_CONTACT.LCONT_STATUS_FLAG', '4');
        $this->db->join('MEM_H_MEMBER', ' MEM_H_MEMBER.MEM_ID = LOAN_M_CONTACT.MEM_ID ');
        $this->db->order_by('LCONT_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_CONTACT');
        return $result;
    }

    public function checkcredit_member_detail($BR_NO, $code)
    {
        $this->db->select('LPD_DATE,SUM_SAL,LCONT_BAL_AMOUNT,LPD_NUM_INST');
        $this->db->where('LOAN_M_PAYDEPT.CODE', $code);
        $this->db->where('LOAN_M_PAYDEPT.BR_NO', $BR_NO);
        $this->db->where('LOAN_M_PAYDEPT.LPD_NUM_INST >', '0');
        $this->db->order_by('LPD_DATE', 'ASC');
        $result = $this->db->get('LOAN_M_PAYDEPT');
        return $result;
    }

    public function data_deposit_member($account_number)
    {
        $this->db->select('F_TIME,F_DEP,F_WDL,F_BALANCE');
        $this->db->where('F_FROM_ACC', $account_number);
        $this->db->order_by('F_TIME', 'DESC');
        $result = $this->db->get('BK_T_FINANCE');
        return $result;
    }

    public function welfare_member($mem_id, $br_no)
    {
        $this->db->select('WEL_H_MEMBER.MEM_ID,BK_M_BRANCH.BR_NAME,WEL_H_MEMBER.EXCHG_DATE');
        $this->db->where('WEL_H_MEMBER.MEM_ID', $mem_id);
        $this->db->where('WEL_H_MEMBER.BR_NO', $br_no);
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = WEL_H_MEMBER.BR_NO');
        $result = $this->db->get('WEL_H_MEMBER');
        return $result->row();
    }

    public function requestwelfare_member($MEM_ID, $ID_CARD, $BR_NO)
    {
        $this->db->where('MEM_H_MEMBER.ID_CARD', $ID_CARD);
        $this->db->where('MEM_H_MEMBER.MEM_ID', $MEM_ID);
        $this->db->where('WEL_H_MEMBER.BR_NO', $BR_NO);
        $this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.MEM_ID = WEL_H_MEMBER.MEM_ID');
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
        $result = $this->db->get('WEL_H_MEMBER');
        return $result;
    }
}
