<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$this->load->view('visimisi');
		
		$this->load->view('include/footer');
	}
}
