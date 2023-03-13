<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBerita extends CI_Model
{
    function __construct()
    {
		parent::__construct();
        // $this->db = $this->load->database();
        $this->db = $this->load->database('default', TRUE);
    }


	public function getBerita() 
	{
        $this->db->select('*');
        $this->db->from('masterberita');
        $this->db->order_by('id_berita','DESC');
        $this->db->limit('6');
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
      }

	public function getBeritaDetail($id_berita)
	{
        $id_berita = 7;
        $this->db->select('*');
        $this->db->from('masterberita');
        $this->db->where('id_berita', $id_berita);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
	}

}
