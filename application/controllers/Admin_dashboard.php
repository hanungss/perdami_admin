<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin_dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form','url','file'));
		$this->load->model('admin');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		if($this->admin->logged_id()){
			redirect("dashboard/admin");
		}else{
			redirect("login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}

	function admin(){
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$this->load->view('admin', $query);
		}else{
			redirect("login");
		}
	}
	
}