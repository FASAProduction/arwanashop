<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Fp_orders extends CI_Controller {

	function __construct(){
		parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
            $urll = base_url();
            redirect($url);
        }
		$this->load->model('m_gen');
		$this->load->model('m_trans');
		$this->load->library('upload');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('rupiah_helper');

	}
	
	public function index()
	{
		$data['judul'] = 'Pesanan Saya - FASAProduction Website Developer | FasTechnology';
		$data['cust'] = $this->m_gen->data_cust()->result();
		$data['pack'] = $this->m_gen->data_paket()->result();
        $data['trans'] = $this->m_gen->data_trans_web()->result();
		$data['transht'] = $this->m_gen->data_trans_web()->num_rows();
		$data['code'] = $this->m_trans->CreateCode();
		$this->load->view('dashboard/transaction/fp/my_orders', $data);
	}

	public function addcart($packet_id){
		$cust_id = $this->session->userdata('ses_id');
		$qty = "1";
		$this->db->query("INSERT INTO keranjang (packet_id,cust_id,qty) VALUES ('$packet_id','$cust_id','$qty')");
		redirect('client/cart');
	}

	
	
}