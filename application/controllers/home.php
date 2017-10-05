<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
  // not working

	public function index()
	{ $this->load->view('template/header.html');
		$this->load->view('home.html');
    $this->load->view('template/footer.html');
	}
}
