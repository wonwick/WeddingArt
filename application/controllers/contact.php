<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->view('contact.html');
	}
}