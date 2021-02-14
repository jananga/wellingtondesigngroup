<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
		
	/*load Model*/
	$this->load->model('Home_front_model');
	}


	public function index()
	{
		$this->load->view('header/header');
		// $this->load->view('navbar/navbar');
		// $result['data']=$this->Home_front_model->display_Home_front_model();
		// $this->load->view('home_front/home_front',$result);
		// $this->load->view('about/about');
		// $this->load->view('home');
		
		$result['data']=$this->Home_front_model->display_Home_front_model();
		$this->load->view('admin/home_front/update',$result);
		$this->load->view('footer/footerScripts');
		
	}

	public function updateHomeFront()
	{
		$result['data']=$this->Home_front_model->display_Home_front_model();
		$this->load->view('admin/home_front/update',$result);
	}
}
