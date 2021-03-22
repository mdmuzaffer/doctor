<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once dirname(__FILE__) .'/tcpdf/config/lang/eng.php';
//require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Doctor extends CI_Controller {
		public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('Doctors_profile');
        $this->load->library('Pdf');
    }

	public function dashbord(){
		$sessionData = $this->session->userdata();
		$doctorId = $sessionData['id'];
		if($sessionData['sessionName'] ==='doctorSession'){
		$profileData['profileData']= $this->Doctors_profile->profileDetails();
		$doctorAppoint['appointment'] = $this->Doctors_profile->doctorAppoint($doctorId);
		$this->load->view('doctor/layout.php',$profileData);
		$this->load->view('doctor/dashboard.php',$doctorAppoint);
		$this->load->view('doctor/layout2.php');
		}else{
			return redirect('/login');
		}
	}

	public function profile(){
		$sessionData = $this->session->userdata();
		if(!$sessionData['sessionName'] =='doctorSession'){
			return redirect('/login');
		}

		if ($_SERVER['REQUEST_METHOD'] =='POST') {

		$this->form_validation->set_rules('doctor_name', 'Doctor name', 'trim|required');
		$this->form_validation->set_rules('specialty', 'Doctor Specialty', 'trim|required');
		$this->form_validation->set_rules('facebook_link', 'Facebook link', 'trim|required');
		$this->form_validation->set_rules('twitter_link',  'Twitter link', 'trim|required');
		$this->form_validation->set_rules('instagram_link','Instagram link', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'trim|required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('pin','Pin', 'trim|required|numeric');
		$this->form_validation->set_rules('state','State', 'trim|required');
		$this->form_validation->set_rules('city','City', 'trim|required');
		$this->form_validation->set_rules('hospital','Hospital', 'trim|required');
		$this->form_validation->set_rules('passyear','Pass year', 'trim|required');
		$this->form_validation->set_rules('country','Country', 'trim|required');
		if ($this->form_validation->run() == true) { 
			if($_FILES['userfile']['name']){
				$config['upload_path']   = './upload/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['max_size']      = 2000;
		        $config['max_width']     = 1500;
		        $config['max_height']    = 1000;
				$config['overwrite']     = TRUE;
				$config['file_name']     = time().$_FILES['userfile']['name'];

				$this->upload->initialize($config);
				if ($this->upload->do_upload('userfile')){
					$doctorProfileData = $this->input->post();

					    $doctorsProfile = array(
				        	'register_id' =>$sessionData['id'],
				        	'name' =>$doctorProfileData['doctor_name'],
				        	'specialty' =>$doctorProfileData['specialty'],
				        	'image' =>time().$_FILES['userfile']['name'],
				        	'facebook_link' =>$doctorProfileData['facebook_link'],
				        	'twitter_link' =>$doctorProfileData['twitter_link'],
				        	'instagram_link' =>$doctorProfileData['instagram_link'],
				        	'message' =>$doctorProfileData['message'],
				        	'qualification' =>$doctorProfileData['qualification'],
				        	'passing_year' =>$doctorProfileData['passyear'],
				        	'email' =>$doctorProfileData['email'],
				        	'phone' =>$doctorProfileData['phone'],
				        	'country' =>$doctorProfileData['country'],
				        	'pin' =>$doctorProfileData['pin'],
				        	'state' =>$doctorProfileData['state'],
				        	'city' =>$doctorProfileData['city'],
				        	'hospital' =>$doctorProfileData['hospital'],
				        );
				       $doctorSave =  $this->Doctors_profile->doctorProfile($doctorsProfile);

				       if($doctorSave ==true){
		         		$this->session->set_flashdata('message', 'Your data insert successfully !');
						redirect($_SERVER['HTTP_REFERER']);
		         		}
				}else{
					$error['errors'] = array('message' => $this->upload->display_errors());
						$this->load->view('doctor/layout.php');
						$this->load->view('doctor/profile.php',$error);
						$this->load->view('doctor/layout2.php');
						return;
				}
			}
		}

		}
		$profileData['profileData'] = $this->Doctors_profile->profileDetails();
		$this->load->view('doctor/layout.php',$profileData);
		$this->load->view('doctor/profile.php');
		$this->load->view('doctor/layout2.php');
	}

	public function profile_update(){
		$sessionData = $this->session->userdata();
		if($sessionData['sessionName'] ==='doctorSession'){
			$email = $sessionData['email'];
			$id = $sessionData['id'];

			$profileData['profileData'] = $this->Doctors_profile->profileDetails();

			foreach($profileData as $profile){
			if(!empty($profile)){
				$this->load->view('doctor/layout.php',$profileData);
				$this->load->view('doctor/profile_update.php');
				$this->load->view('doctor/layout2.php');
				return;
			}else{
			return redirect('/doctor/profile');
			}
			}
		}else{
			return redirect('/login');
		}	
	}

	public function update(){

	if ($_SERVER['REQUEST_METHOD'] =='POST') {
		$this->form_validation->set_rules('doctor_name', 'Doctor name', 'trim|required');
		$this->form_validation->set_rules('specialty', 'Doctor Specialty', 'trim|required');
		$this->form_validation->set_rules('facebook_link', 'Facebook link', 'trim|required');
		$this->form_validation->set_rules('twitter_link',  'Twitter link', 'trim|required');
		$this->form_validation->set_rules('instagram_link','Instagram link', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'trim|required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('pin','Pin', 'trim|required|numeric');
		$this->form_validation->set_rules('state','State', 'trim|required');
		$this->form_validation->set_rules('city','City', 'trim|required');
		$this->form_validation->set_rules('hospital','Hospital', 'trim|required');
		$this->form_validation->set_rules('passyear','Pass year', 'trim|required');
		$this->form_validation->set_rules('country','Country', 'trim|required');
		if ($this->form_validation->run() == true){ 

			if($_FILES['userfile']['name']){
				$config['upload_path']   = './upload/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['max_size']      = 2000;
		        $config['max_width']     = 1500;
		        $config['max_height']    = 1000;
				$config['overwrite']     = TRUE;
				$config['file_name']     = time().$_FILES['userfile']['name'];

				$this->upload->initialize($config);
				if ($this->upload->do_upload('userfile')){

					$doctorProfileData = $this->input->post();
					    $profileupdate = array(
				        	'register_id' =>$doctorProfileData['user_id'],
				        	'name' =>$doctorProfileData['doctor_name'],
				        	'specialty' =>$doctorProfileData['specialty'],
				        	'image' =>time().$_FILES['userfile']['name'],
				        	'facebook_link' =>$doctorProfileData['facebook_link'],
				        	'twitter_link' =>$doctorProfileData['twitter_link'],
				        	'instagram_link' =>$doctorProfileData['instagram_link'],
				        	'message' =>$doctorProfileData['message'],
				        	'qualification' =>$doctorProfileData['qualification'],
				        	'passing_year' =>$doctorProfileData['passyear'],
				        	'email' =>$doctorProfileData['email'],
				        	'phone' =>$doctorProfileData['phone'],
				        	'country' =>$doctorProfileData['country'],
				        	'pin' =>$doctorProfileData['pin'],
				        	'state' =>$doctorProfileData['state'],
				        	'city' =>$doctorProfileData['city'],
				        	'hospital' =>$doctorProfileData['hospital'],
				        );
				     $doctorUpdate =  $this->Doctors_profile->profileUpdate($profileupdate);
				       if($doctorUpdate ==true){
		         		$this->session->set_flashdata('message', 'Your data updated successfully !');
						return redirect('/doctor/profile_update');
		         		}
		         	}
				}

		}else{
				$sessionData = $this->session->userdata();
				$email = $sessionData['email'];
				$id = $sessionData['id'];
				$profileData['profileData'] = $this->Doctors_profile->profileDetails($id, $email);
				$error['errors'] = array('message' => $this->upload->display_errors());
				$this->load->view('doctor/layout.php');
				$this->load->view('doctor/profile_update.php', $profileData);
				$this->load->view('doctor/layout2.php');
				return;
			}

		}
	}

	public function appointment(){
		if ($_SERVER['REQUEST_METHOD'] =='POST') {
			$doctorData = $this->input->post();
			$doctor['doctor'] = $this->Doctors_profile->appointment($doctorData);
			if($doctor ==true){
				echo "your appointment send successfully";
			}else{
				echo "Some things error contact administration";
			}

		}
	}

	public function medicen(){
		$id = $_GET['id'];
		$medicen['medicen'] =  $this->Doctors_profile->medicen($id);
		$this->load->view('doctor/layout.php');
		$this->load->view('doctor/medicen.php',$medicen);
		$this->load->view('doctor/layout2.php');

	}

	public function dwaeya(){
		$sessionData = $this->session->userdata();
		if(!$sessionData['sessionName'] =='doctorSession'){
			return redirect('/login');
		}
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$data = $this->input->post();
			$patient_id = $data['patient_id'];
			$doctor_id = $data['doctor_id'];
			unset($data['patient_id']);
			unset($data['doctor_id']);
			$data = array_chunk($data,3);
			$medicen['medicen'] = $this->Doctors_profile->dwaeya($patient_id, $doctor_id, $data);
				if ($medicen ==true) {
					$this->session->set_flashdata('success_message', 'Medicine added successfully !');
					redirect('doctor/medicen?id='.$patient_id);
				}
		}
	}
	public function pdf(){
		$sessionData = $this->session->userdata();
		if(!$sessionData['sessionName'] =='doctorSession'){
			return redirect('/login');
		}
		$name = $_GET['name'];
		$sessionData = $this->session->userdata();
		$email = $sessionData['email'];
		$id = $sessionData['id'];
		$data['joineData'] = $this->Doctors_profile->pdfMedicien($name);
		if($data ==true){
			if(empty($data['joineData'][0]->app_email)){
				redirect('doctor/dashbord');
			}else{
				$this->load->view('doctor/pdfreport.php',$data);
			}
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		return redirect('/');
	}
}