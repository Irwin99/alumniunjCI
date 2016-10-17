<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function about(){
		$data['title_web']= 'About';
		$data['path_content']='module/about';
        $this->load->view('pages/home', $data);
	}
	public function tokoh_alumni(){
		$data['title_web']= 'Tokoh Alumni';
		$data['path_content']='module/tokoh_alumni';
        $this->load->view('pages/home', $data);
	}
	public function tokoh(){
		$data['title_web']= 'Tokoh Alumni';
		$data['path_content']='module/tokoh';
        $this->load->view('pages/home', $data);
	}
	public function alumni(){
		$data['title_web']= 'Alumni';
		$data['path_content']='module/alumni';
        $this->load->view('pages/home', $data);
	}
	public function news(){
		$data['title_web']= 'News';
		$data['path_content']='module/news';
        $this->load->view('pages/home', $data);
	}
	public function news_content(){
		$data['title_web']= 'News Content';
		$data['path_content']='module/news_content';
        $this->load->view('pages/home', $data);
	}
	public function certified(){
		$data['title_web']= 'Certified';
		$data['path_content']='module/certified';
        $this->load->view('pages/home', $data);
	}
	public function change_password(){
		$data['title_web']= 'Change Password';
		$data['path_content']='module/change_password';
        $this->load->view('pages/home', $data);
	}
	public function edit_profile(){
		$data['title_web']= 'Edit Profile';
		$data['path_content']='module/edit_profile';
        $this->load->view('pages/home', $data);
	}
	public function login(){
		$data['title_web']= 'Login';
		$data['path_content']='module/login';
        $this->load->view('pages/home', $data);
	}
	public function forgot_password(){
		$data['title_web']= 'Forgot Password';
		$data['path_content']='module/forgot_password';
        $this->load->view('pages/home', $data);
	}
	public function register(){
		$data['title_web']= 'Register';
		$data['path_content']='module/register';
        $this->load->view('pages/home', $data);
	}
	public function profile(){
		$data['title_web']= 'Profile';
		$data['path_content']='module/profile';
        $this->load->view('pages/home', $data);
	}
	public function contact(){
		$data['title_web']= 'Contact';
		$data['path_content']='module/contact';
        $this->load->view('pages/home', $data);
	}
}
?>