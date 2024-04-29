<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Lupa_password extends CI_Controller
{
	
	public function __construct()
	{
		$jenis = "1";
		parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form','url','file','download','html'));
		$this->load->model('admin');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		redirect('lupa_password/lupa_password');
	}

	public function lupa_password()
	{
		$this->load->view('lupa_password');
	}
}