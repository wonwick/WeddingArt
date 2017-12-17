<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
    $this->load->view('template/header');
		$data=array();
		$this->load->Model("Pictures_model_DB");
		$data["curPicData"]=$this->Pictures_model_DB->getCarouselPics();
		$this->load->view('home',$data);
		$this->load->view('middleContent');
		$this->load->view('template/footer');

	}
}
