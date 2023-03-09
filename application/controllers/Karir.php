<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('Karir');
		
		$this->load->view('include/footer');
	}

	public function Detail()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('karir-details');
		
		$this->load->view('include/footer');
	}
}
