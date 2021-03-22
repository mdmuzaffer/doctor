<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Doctor extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function register($dataForm){
        $Doctordata = array( 
        'name'=> $_POST['name'] , 
        'email'=>  $_POST['email'], 
        'password'=> md5($_POST['password']),
        'cpassword'=> md5($_POST['re_password']),
        'term'=>  $_POST['agree-term']
    	);
       return $this->db->insert('doctor_register', $Doctordata);
    }

    public function login($registerData){
        $username = $registerData['username'];
        $password = md5($registerData['password']);
        $this->db->where('email',$username);
        $this->db->where('password',$password);
        $this->db->where('term', '1');
        $query = $this->db->get('doctor_register');

         if($query->num_rows() == 1){
            $row = $query->row();
            $data = array('sessionName'=>'doctorSession', 'id' =>$row->id,'name' =>$row->name,'email' =>$row->email);
           $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}
?>