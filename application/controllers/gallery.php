<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
    $this->load->view('template/header');
		$this->load->view('gallery');
		$this->load->view('template/footer');

	}
}
