<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 27-Oct-17
 * Time: 2:07 PM
 */

class Appointment extends CI_Model
{
public function insertdata(){
    $data=array(
        'date'=>$this->input->post('appDate',True),
        'email'=>$this->input->post('userEmail',True),
        'mobile'=>$this->input->post('userPhone',True)
    );
    return $this->db->insert('appointment',$data);

}
}