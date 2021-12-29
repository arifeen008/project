<?php defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class News extends CI_Controller
{
	public function news001()
	{
		$this->load->view('index/news/activity/news001.php');
	}


}
