<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Manager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('officer_model');
    }

    public function memberandshare()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("memberandshare");
        $this->load->view("containner/script");
    }

    public function deposit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("deposit_system");
        $this->load->view("containner/script");
    }

    public function welfare_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("welfare_system");
        $this->load->view("containner/script");
    }

    public function credit_system()
    {
        $user_id = $this->session->userdata('USER_ID');
        $data = $this->officer_model->data_officer($user_id);
        $this->load->view("containner/head");
        $this->load->view("containner/header_officer", $data);
        $this->load->view("containner/sidebar_manager");
        $this->load->view("credit_system");
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
}
