<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('struktur');
		
		$this->load->view('include/footer');
	}
}
