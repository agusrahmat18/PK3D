<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	function  __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->model('ModelKarir');		
	}

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$data['GetMasterKarir']= $this->ModelKarir->GetMasterKarir();
		$this->load->view('karir', $data);
		
		$this->load->view('include/footer');
	}

	public function detailKarir()
	{
		$IdKarir	= $this->uri->segment(3);
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$data['GetDetailKarir']= $this->ModelKarir->GetDetailKarir($IdKarir);
		$this->load->view('karir-details', $data);
		
		$this->load->view('include/footer');
	}
}
