<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    function __construct() {
		parent::__construct();

		$this->_access_token = (isset($_SESSION['access_token'])) ? $_SESSION['access_token'] : '';
	}
	
	public function index()
	{
		echo 'test';
	}
    
    public function register() {
    
        $this->load->view('registration');
        
    }
    
    
    
}


