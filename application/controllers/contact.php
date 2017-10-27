<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
  // not working

	public function index()
	{
    $this->load->helper('url');
    $this->load->view('template/header');
    $this->load->view('contact');
    $this->load->view('template/footer');

	}
    public function submitContact(){

            $this->form_validation->set_rules('userName','Name','required');
            $this->form_validation->set_rules('userEmail','Email Address','required');
            $this->form_validation->set_rules('userPhone','Contact Number','required');
            $this->form_validation->set_rules('appDate','Appointment Date','required');

            if($this->form_validation->run()==FALSE){

                $this->load->view('template/header');
                $this->load->view('contact');
                $this->load->view('template/footer');
            }else{
                $this->load->model('appointment');

                $result=$this->appointment->insertdata();
                $data['info'] = 'Appointment Placed';
                redirect('home');

            }


    }
}
