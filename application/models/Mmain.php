<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mmain extends CI_Model {

	protected $_conn;

	protected $_conn_close;

	function __construct() {
		parent::__construct();
		$this->load->library('conn');

		$this->_conn = $this->conn->_conn();
		$this->_conn_close = $this->conn->_close();
	}



	public function registerPCDetails($pcname,$outlet,$pckey,$pcurl,$dateadded,$addedby) {

		$query = "INSERT INTO `sc_registration`(`pc_name`, `pc_outlet`, `pc_key`, `date_added`, `added_by`, `pc_url`) VALUES (:pcname,:outlet,:pckey,:dateadded,:addedby,:pcurl)";
		
		$param = array(
			':pcname' => $pcname,
			':outlet' => $outlet,
			':pckey' => $pckey,
			':dateadded' => $dateadded,
			':addedby' => $addedby,
			':pcurl' => $pcurl
		);

		$result = $this->conn->query($query, $param);

		return $result;
	}
    
    
    public function get_assigned_url($pckey){
        $query = "SELECT pc_url FROM `sc_registration` WHERE pc_key = :pckey";
        
        $param = array(':pckey'=>$pckey);
        
        $result = $this->conn->query($query,$param);
        
        return $result[0]['pc_url'];
        
    }

    
    
}