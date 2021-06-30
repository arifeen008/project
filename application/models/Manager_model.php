<?php defined('BASEPATH') or exit('No direct script access allowed');

class Manager_model extends CI_Model
{
    public function share_capital_member_report($startdate, $enddate)
    {
        $this->db->select('SHR_T_SHARE.BR_NO,BK_M_BRANCH.BR_NAME,count(MEM_H_MEMBER.MEM_ID) as num1');
        $this->db->where('MEM_H_MEMBER.MEM_DATE >=', $startdate);
        // $this->db->where('MEM_H_MEMBER.MEM_DATE <=', $enddate);
        $this->db->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO = SHR_T_SHARE.BR_NO');
        $this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.MEM_ID = SHR_T_SHARE.MEM_ID');
        // $this->db->join('MEM_H_MEMBER', 'MEM_H_MEMBER.BR_NO = SHR_T_SHARE.BR_NO');
        $this->db->group_by('SHR_T_SHARE.BR_NO');
        $result = $this->db->get('SHR_T_SHARE');
        return $result;
    }
}
