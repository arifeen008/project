<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Manager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('officer_model');
        $this->load->model('manager_model');
    }

    public function memberandshare_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/memberandshare_system");
        $this->load->view("containner/script");
    }

    public function listdata_member()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $branch_number = $this->input->post('branch_number');
        $data['result'] = $this->officer_model->listdata_member($fname, $lname, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/listdata_member", $data);
        $this->load->view("containner/script");
    }

    public function seedata_member($mem_id, $branch_number)
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['result'] = $this->officer_model->seedata_member($mem_id, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("seedata_member", $data);
        $this->load->view("containner/script");
    }

    public function listdatashare_member()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $branch_number = $this->input->post('branch_number');
        $data['result'] = $this->officer_model->listdatashare_member($fname, $lname, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/listdatashare_member", $data);
        $this->load->view("containner/script");
    }

    public function datashare_member($mem_id, $branch_number)
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['resume'] = $this->officer_model->share_member($mem_id, $branch_number);
        $data['result'] = $this->officer_model->datashare_member($mem_id, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/datashare_member", $data);
        $this->load->view("containner/script");
    }

    public function deposit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/deposit_system");
        $this->load->view("containner/script");
    }

    public function depositreport_summary()
    {
        $user_id = $this->session->userdata('USER_ID');
        $branch_number = $this->session->userdata('BR_NO');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data1 = $this->officer_model->data_officer($user_id);
        $data2['result'] = $this->officer_model->depositreport_summary($startdate, $enddate, $user_id, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data1);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/depositreport_summary", $data2);
        $this->load->view("containner/script");
    }

    public function account_book_balance()
    {
        $user_id = $this->session->userdata('USER_ID');
        $account_number = $this->input->post('account_number');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['result'] = $this->officer_model->account_book_balance($account_number);
        $data['detail'] = $this->officer_model->detail_deposit($account_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/account_book_balance", $data);
        $this->load->view("containner/script");
    }

    public function welfare_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/welfare_system");
        $this->load->view("containner/script");
    }

    public function welfare_member()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $id_card = $this->input->post('id_card');
        $data_member = $this->officer_model->getid($id_card);
        $data['result'] = $this->officer_model->welfare_member($data_member->MEM_ID, $data_member->BR_NO);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/seewelfare_member", $data);
        $this->load->view("containner/script");
    }

    public function credit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("manager/credit_system");
        $this->load->view("containner/script");
    }

    public function credit_officer()
    {
        $id_card = $this->input->post('id_card');
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $data['name'] = $this->officer_model->getname_member($id_card);
        $mem_id = $data['name']->MEM_ID;
        $br_no = $data['name']->BR_NO;
        $data['result'] = $this->officer_model->credit_officer($mem_id, $br_no);
        if ($data['name'] != NULL && $data['result'] != NULL) {
            $this->load->view("containner/head");
            $this->load->view("containner/header_officer", $data_officer);
            $this->load->view("containner/sidebar_manager");
            $this->load->view("manager/credit_officer", $data);
            $this->load->view("containner/script");
        } else {
            echo "<script>alert('ไม่มียอดข้อมูลสินเชื่อสมาชิกดังกล่าว');</script>";
            redirect('officer/credit_system', 'refresh');
        }
    }

    public function credit_officer_detail($code, $br_no)
    {
        $USER_ID = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($USER_ID);
        $data['select'] = $this->officer_model->credit_officer_select($code, $br_no);
        $data['result'] = $this->officer_model->credit_officer_detail($code, $br_no);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("credit_officer_detail", $data);
        $this->load->view("containner/script");
    }

    public function checkcredit_officer($mem_id, $branch_number)
    {
        $USER_ID = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($USER_ID);
        $data['member'] = $this->officer_model->data_member($mem_id, $branch_number);
        $data['result'] = $this->officer_model->checkcredit_officer($mem_id, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("checkcredit_officer", $data);
        $this->load->view("containner/script");
    }

    public function checkcredit_officer_detail($code, $branch_number)
    {
        $USER_ID = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($USER_ID);
        $data['select'] = $this->officer_model->checkcredit_officer_select($code, $branch_number);
        $data['result'] = $this->officer_model->checkcredit_officer_detail($code, $branch_number);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("checkcredit_officer_detail", $data);
        $this->load->view("containner/script");
    }

    public function daily_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily_report");
        $this->load->view("containner/script");
    }
    public function monthy_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("monthy_report");
        $this->load->view("containner/script");
    }
    public function yearly_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("yearly_report");
        $this->load->view("containner/script");
    }

    public function share_capital_member_report()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->share_capital_member_report($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/share_capital_member_report", $data);
        $this->load->view("containner/script");
    }

    public function daily_share_capital()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_share_capital($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_share_capital($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/daily_share_capital", $data);
        $this->load->view("containner/script");
    }

    public function daily_deposit_account_type()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $account_type = $this->input->post('account_type');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_deposit_account_type($account_type, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_deposit_account_type($account_type, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/daily_deposit_account_type", $data);
        $this->load->view("containner/script");
    }

    public function daily_deposit_account_branch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $branch_number = $this->input->post('branch_number');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_deposit_account_branch($branch_number, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_deposit_account_branch($branch_number, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/daily_deposit_account_branch", $data);
        $this->load->view("containner/script");
    }

    public function daily_credit()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $main_type = $this->input->post('main_type');
        $sub_type = $this->input->post('sub_type');
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_credit($main_type, $sub_type, $startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_credit($main_type, $sub_type, $startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/daily_credit", $data);
        $this->load->view("containner/script");
    }

    public function daily_credit_allbranch()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data_officer = $this->officer_model->data_officer($user_id);
        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');
        $data['result'] = $this->manager_model->daily_credit_allbranch($startdate, $enddate);
        $data['summary'] = $this->manager_model->sum_daily_credit_allbranch($startdate, $enddate);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data_officer);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("daily/daily_credit_allbranch", $data);
        $this->load->view("containner/script");
    }
}
