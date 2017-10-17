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
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('services');
		echo
		$this->load->view('poruAndSeteebacks.php');
		$this->load->view('middleContent.php');
		$this->load->view('template/footer');

	}
}
