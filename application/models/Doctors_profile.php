<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Doctors_profile extends CI_Model{
    protected $table = 'doctor_profile';
    function __construct(){
        parent::__construct();
    }

    public function doctorProfile($doctorsProfile){
       return $this->db->insert('doctor_profile', $doctorsProfile);
    }

    public function profileDetails(){
    	$sessionData = $this->session->userdata();
		$email = $sessionData['email'];
		$id = $sessionData['id'];

    	$this->db->where('register_id', $id);
    	$this->db->where('email',$email);
        $query = $this->db->get('doctor_profile');
        return $query->result();
    }

    public function profileUpdate($profileupdate){
    	$sessionData = $this->session->userdata();
		$email = $sessionData['email'];
		$id = $sessionData['id'];
		$this->db->where('register_id', $id);
    	$this->db->where('email',$email);
		$query = $this->db->update('doctor_profile',$profileupdate);
		return $query;
    }

    public function doctorList(){
        $this->db->select('*');
        $this->db->from('doctor_profile');
        $this->db->join('doctor_register', 'doctor_register.id = doctor_profile.register_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function registerDoctor(){
        $query = $this->db->get('doctor_register');
        return $query->result();
    }

    public function doctorStatus($userId, $doctorData){
        $this->db->where('register_id',$userId);
        $query = $this->db->update('doctor_profile',$doctorData);
        return $query;
    }

    public function doctorMail($userId){
        $this->db->select('*');
        $this->db->from('doctor_profile');
        $this->db->where('register_id',$userId);
        $query = $this->db->get();
        return $query->result();
    }

    public function appointment($doctorData){
        return $this->db->insert('appointment', $doctorData);
    }

    public function get_count(){
        return $this->db->count_all($this->table);
    }

    public function get_doctors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $query = $this->db->from($this->table);
        $this->db->join('doctor_register', 'doctor_register.id = doctor_profile.register_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function doctorAppoint($doctorId){
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where('doctor_id',$doctorId);
        $query = $this->db->get();
        return $query->result();
    }

    public function doctorBlog(){
        $this->db->select('*');
        $this->db->from('doctor_profile');
        $this->db->join('doctor_register', 'doctor_register.id = doctor_profile.register_id');
        $this->db->order_by('register_id', 'desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result(); 
    }

    public function medicen($id){
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where('app_id', $id);
        $query = $this->db->get();
        return $query->result(); 
    }

    public function dwaeya($patient_id, $doctor_id, $data){

        foreach($data as $medicen){
         $dataMed = array(
            'patient_id'=> $patient_id,
            'doctor_id'=>  $doctor_id,
            'medicine'=>  $medicen[0],
            'quantity'=> $medicen[1],
            'price'=> $medicen[2]
        );
        $this->db->insert('medicine',$dataMed);
        }
        return true;
    }

    Public function pdfMedicien($name){
        $this->db->select('*');
        $this->db->from('medicine');
        $this->db->join('appointment', 'appointment.doctor_id = medicine.doctor_id');
        $this->db->join('doctor_register', 'doctor_register.id = medicine.doctor_id');
        $this->db->where(array('appointment.app_name' =>$name));
        $query = $this->db->get();
        return  $query->result ();
    }

}