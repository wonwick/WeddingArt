<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pictures_model_DB extends CI_Model {

	function Picture_model_DB(){
		parent::Model();
	}

	function getData(){
		//for testing purposes
		$query=$this->db->get("service");
		return $query->result();

	}
	function getCurrentPicture(){
		$this->db->select_max('picId');
		$query=$this->db->get('picture');
		$query->result();
		return $query->result();

	}

	function insertPictue($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('picture');
	}


}
