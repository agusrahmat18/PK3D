<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StandarisasiPelayanan extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('standarisasi-pelayanan');

		$this->load->view('include/footer');
	}
}
