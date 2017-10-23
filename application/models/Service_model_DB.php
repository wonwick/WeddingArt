<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model_DB extends CI_Model {



	function getData(){
		//for testing purposes
		$query=$this->db->get("service");
		return $query->result();

	}
	function getServiceByType($type){
		$this->db->where('type',$type);
		$query=$this->db->get('service');
		return $query->result();

	}

	function insertPictue($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('picture');
	}


}
