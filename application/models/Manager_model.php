<?php defined('BASEPATH') or exit('No direct script access allowed');

class Manager_model extends CI_Model
{
    public function share_capital_member_report($startdate, $enddate)
    {
        $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as mem_number');
        $this->db->where('MEM_H_MEMBER.MEM_DATE >=' ,$startdate);
        $this->db->where('MEM_H_MEMBER.MEM_DATE <=' ,$enddate);
        $this->db->join('BK_M_BRANCH','BK_M_BRANCH.BR_NO = MEM_H_MEMBER.BR_NO');
        $result = $this->db->get('MEM_H_MEMBER');
        return $result;
    }

    public function daily_share_capital($startdate, $enddate)
    {
        $this->db->select('BK_M_BRANCH.BR_NO,BK_M_BRANCH.BR_NAME,sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
        $this->db->where('SHR_T_SHARE.TEMP_TODAY >=' ,$startdate);
        $this->db->where('SHR_T_SHARE.TEMP_TODAY <=' ,$enddate);
        $this->db->join('BK_M_BRANCH','BK_M_BRANCH.BR_NO = SHR_T_SHARE.BR_NO');
        $this->db->group_by('BK_M_BRANCH.BR_NO');
        $result = $this->db->get('SHR_T_SHARE');
        return $result;
    }

    public function sum_daily_share_capital($startdate, $enddate)
    {
        $this->db->select('sum(SHR_T_SHARE.TMP_SHARE_BHT) as share_money');
        $this->db->where('SHR_T_SHARE.TEMP_TODAY >=' ,$startdate);
        $this->db->where('SHR_T_SHARE.TEMP_TODAY <=' ,$enddate);
        $result = $this->db->get('SHR_T_SHARE');
        return $result->row();
    }
}
