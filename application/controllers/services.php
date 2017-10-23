<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class services extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('services');
		$this->load->view('poruAndSeteebacks.php');
		$this->load->view('middleContent.php');
		$this->load->view('template/footer');


	}

	public function poruAndSeteebacks()
	{
		$this->load->Model("Service_model_DB");
		$this->load->Model("Pictures_model_DB");
		$services=$this->Service_model_DB->getServiceByType(3);
		foreach ($services as $row){
			echo $row->serviceId;
			echo $row->title;
			echo $row->description;



		}


	}
}
