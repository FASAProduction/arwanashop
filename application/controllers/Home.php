<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_gen');
		$this->load->helper('rupiah_helper');

	}
	
	public function index()
	{
		$data['judul'] = 'Arwana Store';
		$this->load->view('templ/head', $data);
		$this->load->view('home', $data);
		$this->load->view('templ/foot');
	}
	
}