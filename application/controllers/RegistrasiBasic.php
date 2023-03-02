<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiBasic extends CI_Controller {

	public function index()
	{
		$this->load->view('registrasibasic');
	}
}
