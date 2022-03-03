<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
            $urll = base_url();
            redirect($url);
        }	
		$this->load->model('m_gen');
		$this->load->library('upload');

	}
	
	public function index()
	{
		$data['judul'] = 'Dashboard | FasTechnology';
		$data['cust'] = $this->m_gen->data_cust()->result();
		$this->load->view('dashboard/dash', $data);
	}
	
}

?>