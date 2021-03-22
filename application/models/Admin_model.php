<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function login($dataForm){
        $email = $dataForm['email'];
        $password = $dataForm['password'];
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('admins');
        if($query->num_rows() == 1){
            $row = $query->row();
            $data = array('email' =>$row->email,'name' =>$row->name,'success'=>'Login successfully');
           $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}
?>