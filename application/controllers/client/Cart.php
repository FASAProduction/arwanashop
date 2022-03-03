<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Cart extends CI_Controller {

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
		$data['judul'] = 'Keranjang Saya - FASAProduction Website Developer | FasTechnology';
		$data['cust'] = $this->m_gen->data_cust()->result();
		$data['cart'] = $this->m_gen->data_cart()->result();
		$data['pack'] = $this->m_gen->data_paket()->result();
		$data['deta'] = $this->m_gen->data_details()->result();
		$data['cartht'] = $this->m_gen->data_cart()->num_rows();
		$this->load->view('dashboard/transaction/cart/my_cart', $data);
	}
	
	function adddetails(){
		$cart_id = $this->input->post('cart_id');
		$packet_id = $this->input->post('packet_id');
		$project_name = $this->input->post('project_name');
		$description = $this->input->post('description');
		$feature = $this->input->post('feature');
		$duration = $this->input->post('duration');
		$this->m_trans->adddetailss($cart_id,$packet_id,$project_name,$description,$feature,$duration);
		redirect('client/cart');
	}

	function checkout(){
		$pelang = $this->session->userdata('ses_id');
		$resi = $this->m_trans->view_keranjang()->result_array();
		$acak = $this->m_trans->CreateCode();
		$tgl = date('Y-m-d');
		$dataa = array();
		
		$index = 0;
		foreach($resi as $da){
			$project_name = $da['project_name'];
			$descript = $da['descript'];
			$packet_id = $da['packet_id'];
			array_push($dataa, array(
			'trans_code' => $acak,
			'trans_name' => $project_name,
			'rincian' => $descript,
			'packet_id' => $packet_id,
			'cust_id' => $pelang,
			'progress_status' => 'New',
			'payment_method' => 'Bank Transfer',
			'payment_status' => 'DP',
			'dp' => '1000000',
			'total_pay' => '3000000',
			'tgl_order' => $tgl
			));
		
			$index++;
		
		}
		
		$this->db->insert_batch('transaction',$dataa);
		$this->db->query("DELETE FROM keranjang WHERE cust_id='$pelang'");
		redirect('client/fp_orders');
	}
	
	
}