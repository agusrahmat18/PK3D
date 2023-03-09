<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StandarisasiAmbulans extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('standarisasi-ambulans');

		$this->load->view('include/footer');
	}
}
