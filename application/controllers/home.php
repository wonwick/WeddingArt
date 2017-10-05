<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
    $this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');

	}
}
