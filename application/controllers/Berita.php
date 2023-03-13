<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function  __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		// $this->load->library('pagination');
		$this->load->helper('url');
		$this->load->model('ModelBerita');		
	}

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$data['getBerita'] = $this->ModelBerita->getBerita();
		$this->load->view('berita', $data);

		$this->load->view('include/footer');
	}

	public function Detail()
	{
		$id_berita = $this->uri->segment(3);
		$this->load->view('include/header');
		$this->load->view('include/menu');

		$data['detail_berita'] = $this->ModelBerita->getBeritaDetail($id_berita);
		$this->load->view('berita-details', $data);

		$this->load->view('include/footer');

		// $db->set('jumlah_baca', 'jumlah_baca+1', FALSE);
		// $db->where('id_berita', $id_berita );
		// $db->update('berita');
	}
}