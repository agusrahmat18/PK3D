<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

	function  __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->db2 = $this->load->database('db2', TRUE);
        $this->load->model('ModelMaps');
    } 

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');

		// -------------------------------------------
		 $getPos= $this->ModelMaps->GetPosLocation();
		 $data['GetPosLocation']=json_encode($getPos);
		// -------------------------------------------
		session_destroy();
		
		$this->load->view('maps', $data);

		$this->load->view('include/footer');
	}

	public function getGPS()
    {
// print_r("==============================");
        $sessionToken = $this->session->tempdata('tokenGPS');

        if(!$sessionToken){
            $LoginGPS= $this->curlPost();
            $dtGPS = json_decode($LoginGPS);
            $status = $dtGPS->status;
            $respon = array();
            $dtLoop = null;
            if($status){
                $token = $dtGPS->message->data->token;
    
                $this->session->set_tempdata('tokenGPS',$token, 60000);

                $datas= $this->curlGet($token);
                $dt = json_decode($datas);
                $st = $dt->status;
                if($st){
                    $dtLoop['gps'] = $dt->message->data;
                    $dtLoop['unit'] = $this->ModelMaps->GetUnitKegiatan();
                }
    
            }
        } else {
                $datas= $this->curlGet($sessionToken);
                $dt = json_decode($datas);
                $st = $dt->status;
                if($st){
                    $dtLoop['gps'] = $dt->message->data;
                    $dtLoop['unit'] = $this->ModelMaps->GetUnitKegiatan();
                }
        }
        
        $dtRespon = json_encode($dtLoop);

        echo $dtRespon;
    }

    function curlPost()
    {
        /* API URL */
        $url = 'https://portal.gps.id/backend/seen/public/login';
             
        /* Init cURL resource */
        $ch = curl_init($url);
            
        /* Array Parameter Data */
        $data = ['username'=>'agddki', 'password'=>'itpk3d2022'];
            
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
    
        /* close cURL resource */
        curl_close($ch);

        return $result;
    }

    function curlGet($token)
    {
        /* API URL */
        $url = 'https://portal.gps.id/backend/seen/public/vehicle';
             
        /* Init cURL resource */
        $ch = curl_init($url);
           
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type:application/json',
                    'Authorization: Bearer '.$token
                ));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
    
        /* close cURL resource */
        curl_close($ch);

        return $result;
    }
}
