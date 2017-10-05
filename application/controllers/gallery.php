<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->view('gallery.html');
	}
}
