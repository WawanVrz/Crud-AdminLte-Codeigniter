<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmincontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login")
		{
			redirect("/");
		}
	}

	public function index()
	{
		$this->load->view('homedashboard');
	}

	public function dashbordv2()
	{
		$this->load->view('dashboard');
	}
}
