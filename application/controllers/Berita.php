<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('berita');

		$this->load->view('include/footer');
	}

	public function Detail()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('berita-details');

		$this->load->view('include/footer');
	}
}
