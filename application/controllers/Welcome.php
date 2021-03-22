<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('doctor');
        $this->load->model('Doctors_profile');
        $this->load->library("pagination");
        $this->load->library('email');
    }

	public function index()
	{
		$doctorList['doctors'] = $this->Doctors_profile->doctorList();
		$doctorList['blogs'] = $this->Doctors_profile->doctorBlog();

		$this->load->view('front/header/header.php');
		$this->load->view('front/page/index.php',$doctorList);
		$this->load->view('front/footer/footer.php');
	}

	public function about(){
		$this->load->view('front/header/header.php');
		$this->load->view('front/page/about.php');
		$this->load->view('front/footer/footer.php');
	}

	public function doctor(){

		$config = array();
        $config["base_url"] = base_url().'welcome/doctor';
        $config["total_rows"] = $this->Doctors_profile->get_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class=""><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous Page';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
 

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['doctors'] = $this->Doctors_profile->get_doctors($config["per_page"], $page);

		$this->load->view('front/header/header.php');
		$this->load->view('front/page/doctor.php',$data);
		$this->load->view('front/footer/footer.php');
	}
	public function blog(){
		$this->load->view('front/header/header.php');
		$this->load->view('front/page/blog.php');
		$this->load->view('front/footer/footer.php');
	}


	public function appointment(){
		$doctorList['doctors'] = $this->Doctors_profile->doctorList();
		$this->load->view('front/header/header.php');
		$this->load->view('front/page/appointment.php',$doctorList);
		$this->load->view('front/footer/footer.php');
	}
	public function contact(){
		$this->load->view('front/header/header.php');
		$this->load->view('front/page/contact.php');
		$this->load->view('front/footer/footer.php');
	}
	public function register(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$registerData = $this->input->post();

		$this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[doctor_register.email]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('re_password', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('agree-term', 'Term and condition', 'required');
            if ($this->form_validation->run() == true) { 
         		$dataInsert = $this->doctor->register($registerData);
         		if($dataInsert ==true){
         		$this->session->set_flashdata('message', 'Your data insert successfully !');
				redirect($_SERVER['HTTP_REFERER']);
         		}
			}
		}
		$this->load->view('front/header/header.php');
		$this->load->view('front/page/register.php');
		$this->load->view('front/footer/footer.php');
	}
	public function login(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
		$registerData = $this->input->post();
		$this->form_validation->set_rules('username','Username','trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == true) { 
				$responseData = $this->doctor->login($registerData);
				if($responseData == True){
					//checked session data 
					//$sessionData['sessionData'] = $this->session->userdata();
					redirect('/doctor/dashbord');
				}else{
			$this->session->set_flashdata('message', 'Your user name or password invalid !');
			redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
		$this->load->view('front/doctor/login.php');
	}

	public function newsLetter(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$newsData = $this->input->post();
			$email = $newsData['email'];
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
			$this->email->from('developerphp1995@gmail.com', 'Muzaffer Doctor news Letter');
			$this->email->to('developerphp1995@gmail.com'); 
			$this->email->subject('Doctor newsLetter Email');
			$this->email->message('Hello Site owner sir. I have scribe your News letter with my Email:='.$email);

			if($this->email->send()){
		        echo "You have Successfully subscribe";
		     }else{
		     echo $this->email->print_debugger();
		    }
		}
	}
}
