<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Utama extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_gen');
		$this->load->helper('rupiah_helper');

	}
	
	public function index()
	{
		$data['judul'] = 'FasTechnology';
		$data['prod'] = $this->m_gen->data_product()->result();
		$this->load->view('main/main', $data);
	}
	
}