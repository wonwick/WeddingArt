<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class changePics extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/adminheader');
		$this->load->Model("Pictures_model_DB");
		$data=array();
		$data["curPicData"]=$this->Pictures_model_DB->getCarouselPics();
		$this->load->view('carouselPics',$data);
		if(isset($_POST["searchKeys"])){
			$searchKeys=$_POST["searchKeys"];
		}
		else{
			$searchKeys="all";
		}
		$data=array();
		$data["matches"]=$this->Pictures_model_DB->getPicsByTags($searchKeys);
		$this->load->view('imageResults',$data);
		$this->load->view('template/footer');
	}

	public function addPic(){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		if(isset($_POST["addPicButton"])){
			$addedPic=$_POST["addPicButton"];
			$this->Pictures_model_DB->addCarousalPictue($addedPic);
			$this->index();
		}
	}

	public function removePic(){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		if(isset($_POST["removePicButton"])){
			$addedPic=$_POST["removePicButton"];
			$this->Pictures_model_DB->removeCarousalPictue($addedPic);
			$this->index();
		}
	}

}
