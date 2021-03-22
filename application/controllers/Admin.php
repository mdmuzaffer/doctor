<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
            $this->load->model('Admin_model');
            $this->load->library('session');
            $this->load->model('Doctors_profile');
            $this->load->library('email');
      }

	public function index(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			//$adminData =$this->input->post();
			$dataForm = array(
				'email'=> $this->input->post('username'),
				'password'=> md5($this->input->post('password'))
				);

			$result = $this->Admin_model->login($dataForm);
			if($result == TRUE) {
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('message', 'Your username/password incorrect');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		$this->load->view('admin/admin_login');
	}
	public function dashboard(){
		if(!empty($this->session->userdata('name'))){
			$this->load->view('admin/dashboard');
			$this->load->view('admin/index.php');
			$this->load->view('admin/footer.php');
		}else{
			$this->session->set_flashdata('message', 'Please login for admin');
			redirect('admin');
		}
	}

	public function doctor(){
		$doctorList['doctors'] = $this->Doctors_profile->doctorList();
	
		$this->load->view('admin/dashboard');
		$this->load->view('admin/doctor/doctor_list.php',$doctorList);
		$this->load->view('admin/footer.php');
	}
	public function register_doctor(){
		$doctorList['doctors'] = $this->Doctors_profile->registerDoctor();
		$this->load->view('admin/dashboard');
		$this->load->view('admin/doctor/register_doctor.php',$doctorList);
		$this->load->view('admin/footer.php');
	}
	public function doctorStatus(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$userId = $this->input->post('doctor_id');
			$doctorData = array(
				'status' =>1
			);
			$doctorData['status'] = $this->Doctors_profile->doctorStatus($userId,$doctorData);
			if($doctorData ==true){
				$doctorMail = $this->Doctors_profile->doctorMail($userId);
				$email = $doctorMail[0]->email;
				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.gmail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '7';
				$config['smtp_user']    = 'developerphp1995@gmail.com';
				$config['smtp_pass']    = 'shfcftmqlmryjlwi';
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html';
				$config['validation'] = TRUE;      

				$this->email->initialize($config);
				$this->email->from('developerphp1995@gmail.com', 'Muzaffer Doctor');
				$this->email->to($email); 
				$this->email->subject('Doctor Profile Email');
				$this->email->message('Your Profile has been approved Dear '.$doctorMail[0]->name.',<br> I will contact you soon');

				if($this->email->send()){
			        echo "Mail send Successfully";
			     }else{
			     echo $this->email->print_debugger();
			    }
				//echo "Successfull update doctor status";
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
