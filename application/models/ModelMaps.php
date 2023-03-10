<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMaps extends CI_Model
{
    public function __construct()
    {
        $this->db2 = $this->load->database('db2', TRUE);
        // $this->db = $this->load->database('default', TRUE);
    }

	public function GetPosLocation()
    {
        $this->db2->select('PosAmbulans,IdWilayah,Alamat,Lat,Lng,ImagePath');
        $this->db2->from('MasterPosAmbulans');
        $this->db2->where('JenisPos=1');
        $this->db2->where('StatusAktif=1');
        $result = $this->db2->get()->result();
        return $result;
    }

    public function GetUnitKegiatan()
    {
        $this->db2->select('mka.IdKegiatanAmbulans,mka.StatusKegiatan,mka.AsalPanggilan,mka.JenisLayanan,ma.NomorPolisi,mka.JenisKegiatan');
        $this->db2->from('MasterKegiatanAmbulans as mka');
        $this->db2->join('MasterAmbulans as ma', 'mka.IdKegiatanAmbulans=ma.IdKegiatanBerjalan');
        $result = $this->db2->get()->result();
        return $result;
    }
}
