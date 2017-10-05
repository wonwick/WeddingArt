<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {
  // not working

	public function index()
	{
    $this->load->helper('url');
		$this->load->view('about');
	}
}
