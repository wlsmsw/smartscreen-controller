<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
    
    function __construct() {
		parent::__construct();
        
        $this->load->model('mmain');
        
		$this->_access_token = (isset($_SESSION['access_token'])) ? $_SESSION['access_token'] : '';
	}
	
    
    public function save_registration() {
    
        $status = FALSE;
		$response = "Something went wrong while registering this unit.";
		$passkey = "none";
		
		$pcname = $_POST['pcname'];
		$outlet = $_POST['outlet'];
		$pckey = $this->generateRandomString();
		$pcurl = "https://www.msw.ph/en";
		$dateadded = date('Y-m-d H:i:s');
		$addedby = "admin";
		
		$save = $this->mmain->registerPCDetails($pcname,$outlet,$pckey,$pcurl,$dateadded,$addedby);
		
		if($save){
		    $passkey = $pckey;
		    $status = TRUE;
		    $response = "PC Registration successful.";
		}
		
		echo json_encode(array(
			'status' => $status,
			'response' => $response,
			'passkey' => $passkey,
			'pcurl' => $pcurl
		));

		session_write_close();
		
    }
    
    public function get_assigned_url() {
        
        $pckey = $_POST['pckey'];
        $pcurl = $this->mmain->get_assigned_url($pckey);
        
        echo json_encode(array(
            'pcurl' => $pcurl
        ));

        session_write_close();
        
    }
    
    private function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
    
        return $randomString;
    }
    
    
    
}


