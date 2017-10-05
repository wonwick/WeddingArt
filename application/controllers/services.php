<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class services extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
    $this->load->view('template/header');
		$this->load->view('services');
		$this->load->view('template/footer');

	}
}
