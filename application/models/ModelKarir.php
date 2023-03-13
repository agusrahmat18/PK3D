<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKarir extends CI_Model
{
    function __construct()
	{
		parent::__construct();
        $this->db = $this->load->database('default', TRUE);
	}

	public function getKarir() 
	{
		$db = $this->load->database('db', TRUE);
		return $db->query("SELECT * FROM MasterKarir ORDER BY IdKarir DESC LIMIT 0,5")->result();
	}

	public function getKarirDetail($IdKarir) 
	{
		$db = $this->load->database('db', TRUE);
		return $db->query("SELECT * FROM MasterKarir where IdKarir='$IdKarir'")->result();
	}
	
}
