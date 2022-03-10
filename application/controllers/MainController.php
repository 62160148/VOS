<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

	public function test()
	{
		// $this->load->view('consent/v_test');
		$this->output('consent/v_test');
	}

	public function output($view, $data=null)
	{
		$this->load->view('includes/template/header');
		$this->load->view('includes/template/sidebar');
		$this->load->view('includes/template/topbar');
		$this->load->view($view, $data);
		$this->load->view('includes/template/javascript');
		$this->load->view('includes/template/footer');
	}

	public function login()
	{
		$this->output('auth/v_user_login');
	}

	public function login2()
	{
		$this->output('auth/v_user_login2');
	}

}
