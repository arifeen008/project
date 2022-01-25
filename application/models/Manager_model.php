<?php defined('BASEPATH') or exit('No direct script access allowed');

// class Manager_model extends CI_Model
// {
//     public function share_capital_member_report($startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as mem_number');
//         $this->db->where('MEM_H_MEMBER.MEM_DATE >=', $startdate);
//         $this->db->where('MEM_H_MEMBER.MEM_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//         $result = $this->db->get('MEM_H_MEMBER');
//         return $result;
//     }

//     public function daily_share_capital($startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
//         $this->db->where('SHR_T_SHARE.TEMP_TODAY >=', $startdate);
//         $this->db->where('SHR_T_SHARE.TEMP_TODAY <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_T_SHARE.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result;
//     }

//     public function sum_daily_share_capital($startdate, $enddate)
//     {
//         $this->db->select('sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
//         $this->db->where('SHR_T_SHARE.TEMP_TODAY >=', $startdate);
//         $this->db->where('SHR_T_SHARE.TEMP_TODAY <=', $enddate);
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result->row();
//     }

//     public function daily_deposit_account_type($account_type, $startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_daily_deposit_account_type($account_type, $startdate, $enddate)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function daily_deposit_account_branch($branch_number, $startdate, $enddate)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_daily_deposit_account_branch($branch_number, $startdate, $enddate)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function daily_credit($main_type, $sub_type, $startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_daily_credit($main_type, $sub_type, $startdate, $enddate)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function daily_credit_allbranch($startdate, $enddate)
//     {
//         $this->db->select('LOAN_M_SUB_NAME.LSUB_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $this->db->group_by('LOAN_M_SUB_NAME.LSUB_NAME');
//         $this->db->order_by('LOAN_M_SUB_NAME.L_TYPE_CODE,LOAN_M_SUB_NAME.LSUB_CODE', 'ASC');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_daily_credit_allbranch($startdate, $enddate)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function daily_payment($startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_daily_payment($startdate, $enddate)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE >=', $startdate);
//         $this->db->where('LOAN_M_CONTACT.LCONT_DATE <=', $enddate);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function daily_share_deposit($startdate, $enddate)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE <=', $enddate);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $this->db->group_by('BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_daily_share_deposit($startdate, $enddate)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE  >=', $startdate);
//         $this->db->where('BK_H_SAVINGACCOUNT.LAST_DATE  <=', $enddate);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

//     public function monthly_inout($select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as mem_number');
//         $this->db->where('MONTH(MEM_H_MEMBER.MEM_DATE)', $select_month);
//         $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('MEM_H_MEMBER');
//         return $result;
//     }

//     public function sum_monthly_inout($select_month, $select_year)
//     {
//         $this->db->select('SUM(COUNT(MEM_H_MEMBER.MEM_ID) as sum_member)');
//         $this->db->where('MONTH(MEM_H_MEMBER.MEM_DATE)', $select_month);
//         $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//         $result = $this->db->get('MEM_H_MEMBER');
//         return $result->row();
//     }

//     public function monthly_share_capital($select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
//         $this->db->where('TMP_MONTH', $select_month);
//         $this->db->where('TMP_YEAR', $select_year);
//         $this->db->join('BK_M_BRANCH', 'SHR_T_SHARE.BR_NO = BK_M_BRANCH.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result;
//     }

//     public function sum_monthly_share_capital($select_month, $select_year)
//     {
//         $this->db->select('sum(TMP_SHARE_BHT) as share_money');
//         $this->db->where('TMP_MONTH', $select_month);
//         $this->db->where('TMP_YEAR', $select_year);
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result->row();
//     }

//     public function monthly_deposit_account_type($account_type, $select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_monthly_deposit_account_type($account_type, $select_month, $select_year)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function monthly_deposit_account_branch($branch_number, $select_month, $select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_monthly_deposit_account_branch($branch_number, $select_month, $select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function monthly_credit($main_type, $sub_type, $select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_monthly_credit($main_type, $sub_type, $select_month, $select_year)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function monthly_credit_allbranch($select_month, $select_year)
//     {
//         $this->db->select('LOAN_M_SUB_NAME.LSUB_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $this->db->group_by('LOAN_M_SUB_NAME.LSUB_NAME');
//         $this->db->order_by('LOAN_M_SUB_NAME.L_TYPE_CODE,LOAN_M_SUB_NAME.LSUB_CODE', 'ASC');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_monthly_credit_allbranch($select_month, $select_year)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function credit_branch($branch_number, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $branch_number);
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_credit_branch($branch_number, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $branch_number);
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function credit_allbranch($select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_credit_allbranch($select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function credit_type_allbranch($main_type, $sub_type, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $main_type);
//         $this->db->where('', $sub_type);
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_credit_type_allbranch($main_type, $sub_type, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $main_type);
//         $this->db->where('', $sub_type);
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function deptor_branch_report($branch_number, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $branch_number);
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_deptor_branch_report($branch_number, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $branch_number);
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function deptor_allbranch_report($select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_deptor_allbranch_report($select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function deptor_typeallbranch_report($main_type, $sub_type, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $main_type);
//         $this->db->where('', $sub_type);
//         $this->db->where('', $select_month);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->join('');
//         $this->db->group_by('');
//         $this->db->order_by('');
//         $result = $this->db->get('');
//         return $result;
//     }

//     public function sum_deptor_typeallbranch_report($main_type, $sub_type, $select_month)
//     {
//         $this->db->select('');
//         $this->db->where('', $main_type);
//         $this->db->where('', $sub_type);
//         $this->db->where('', $select_month);
//         $this->db->join('');
//         $this->db->join('');
//         $result = $this->db->get('');
//         return $result->row();
//     }

//     public function monthly_payment($select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_monthly_payment($select_month, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('MONTH(LOAN_M_CONTACT.LCONT_DATE)', $select_month);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function shared_deposit_report($select_month, $select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $this->db->group_by('BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_shared_deposit_report($select_month, $select_year)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('MONTH(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_month);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

//     public function yearly_inout($select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as mem_number');
//         $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('MEM_H_MEMBER');
//         return $result;
//     }

//     public function sum_yearly_inout($select_year)
//     {
//         $this->db->select('SUM(COUNT(MEM_H_MEMBER.MEM_ID) as sum_member)');
//         $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//         $result = $this->db->get('MEM_H_MEMBER');
//         return $result->row();
//     }

//     // public function yearly_summarymember($branch_number, $select_year)
//     // {
//     //     $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as mem_number');
//     //     $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//     //     $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//     //     $this->db->group_by('BK_M_BRANCH.BR_NO');
//     //     $result = $this->db->get('MEM_H_MEMBER');
//     //     return $result;
//     // }

//     // public function sum_yearly_summarymember($branch_number, $select_year)
//     // {
//     //     $this->db->select('SUM(COUNT(MEM_H_MEMBER.MEM_ID) as sum_member)');
//     //     $this->db->where('YEAR(MEM_H_MEMBER.MEM_DATE)', $select_year);
//     //     $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
//     //     $result = $this->db->get('MEM_H_MEMBER');
//     //     return $result->row();
//     // }

//     public function yearly_share_capital($select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
//         $this->db->where('TMP_YEAR', $select_year);
//         $this->db->join('BK_M_BRANCH', 'SHR_T_SHARE.BR_NO = BK_M_BRANCH.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result;
//     }

//     public function sum_yearly_share_capital($select_year)
//     {
//         $this->db->select('sum(TMP_SHARE_BHT) as share_money');
//         $this->db->where('TMP_YEAR', $select_year);
//         $result = $this->db->get('SHR_T_SHARE');
//         return $result->row();
//     }

//     public function yearly_deposit_account_type($account_type, $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_yearly_deposit_account_type($account_type, $select_year)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as deposit_money');
//         $this->db->where('BK_H_SAVINGACCOUNT.ACC_TYPE', $account_type);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function yearly_deposit_account_branch($branch_number, $select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $this->db->group_by('BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_yearly_deposit_account_branch($branch_number, $select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_TYPE,BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as sum_dast_dep');
//         $this->db->where('BK_H_SAVINGACCOUNT.BR_NO', $branch_number);
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = BK_H_SAVINGACCOUNT.BR_NO');
//         $this->db->join('BK_M_ACC_TYPE', 'BK_M_ACC_TYPE.ACC_TYPE = BK_H_SAVINGACCOUNT.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }

//     public function yearly_credit($main_type, $sub_type,  $select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_yearly_credit($main_type, $sub_type,  $select_year)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('LOAN_M_CONTACT.L_TYPE_CODE', $main_type);
//         $this->db->where('LOAN_M_CONTACT.LSUB_CODE', $sub_type);
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function yearly_credit_allbranch($select_year)
//     {
//         $this->db->select('LOAN_M_SUB_NAME.LSUB_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $this->db->group_by('LOAN_M_SUB_NAME.LSUB_NAME');
//         $this->db->order_by('LOAN_M_SUB_NAME.L_TYPE_CODE,LOAN_M_SUB_NAME.LSUB_CODE', 'ASC');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_yearly_credit_allbranch($select_year)
//     {
//         $this->db->select('count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->join('LOAN_M_SUB_NAME', 'LOAN_M_SUB_NAME.L_TYPE_CODE = LOAN_M_CONTACT.L_TYPE_CODE AND LOAN_M_CONTACT.LSUB_CODE = LOAN_M_SUB_NAME.LSUB_CODE');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function yearly_payment($select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result;
//     }

//     public function sum_yearly_payment($select_year)
//     {
//         $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(LOAN_M_CONTACT.LCONT_ID) as LCONT_ID ,sum(LOAN_M_CONTACT.LCONT_APPROVE_SAL) as LCONT_APPROVE_SAL');
//         $this->db->where('YEAR(LOAN_M_CONTACT.LCONT_DATE)', $select_year);
//         $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = LOAN_M_CONTACT.BR_NO');
//         $this->db->group_by('BK_M_BRANCH.BR_NO');
//         $result = $this->db->get('LOAN_M_CONTACT');
//         return $result->row();
//     }

//     public function yearly_shared_deposit_report($select_year)
//     {
//         $this->db->select('BK_M_ACC_TYPE.ACC_DESC,sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $this->db->group_by('BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result;
//     }

//     public function sum_yearly_shared_deposit_report($select_year)
//     {
//         $this->db->select('sum(BK_H_SAVINGACCOUNT.LAST_DEP) as last_dep');
//         $this->db->where('YEAR(BK_H_SAVINGACCOUNT.LAST_DATE)', $select_year);
//         $this->db->join('BK_M_ACC_TYPE', 'BK_H_SAVINGACCOUNT.ACC_TYPE = BK_M_ACC_TYPE.ACC_TYPE');
//         $result = $this->db->get('BK_H_SAVINGACCOUNT');
//         return $result->row();
//     }
// }
