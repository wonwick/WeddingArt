<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pictures_model_DB extends CI_Model {



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


	function getServicePicture($serviceId){
		$this->db->where('serviceId',$serviceId);
		$query=$this->db->get('service_has_picture');
		return $query->result();
		

	}
	function getPictureByPicId($picId){
		$this->db->where('picId',$picId);
		$query=$this->db->get('picture');
		return $query->result();

	}


	function insertPictue($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('picture');
	}



}
