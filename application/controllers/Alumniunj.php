<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumniunj extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($page = 'home'){
		$data['title_web']= 'AlumniUNJ';
		$data['path_content']='module/content';
        $this->load->view('pages/home', $data);
	}
}
?>