<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Order extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('pemesanan_model', 'pemesanan');
        $this->load->model('keranjang_model', 'keranjang');
        $this->load->library('user_agent');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
		$this->load->helper('terbilang_helper');

        if($this->session->userdata('ses_id') == NULL){
            redirect('home');
        }
    }

    public function index(){
        $head['judul'] = 'Arwana Store';
		$cst = $this->session->userdata('ses_id');
		$head['cust'] = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$cst'")->result();
		$head['krjg'] = $this->db->query("SELECT * FROM keranjang WHERE id_pelanggan='$cst'")->num_rows();
		$data['ord'] = $this->pemesanan->pesan()->result();
		$data['ordht'] = $this->pemesanan->pesan()->num_rows();
		$this->load->view('templ/head', $head);
		$this->load->view('pes/pesan', $data);
		$this->load->view('templ/foot');
    }
	
	public function detail($code){
		$d['title'] = "Pembayaran Transaksi " . $code . " - Sambal Resep Njenot";
		$d['code'] = $code;
		$d['detail'] = $this->pemesanan->details($code)->result();
		$d['total_cart'] = $this->keranjang->get()->num_rows();
		$this->load->view('pay', $d);
	}
	
	public function process_payment(){
		$kode_transaksi = $this->input->post('kode_transaksi', TRUE);
		$payment_method = $this->input->post('payment_method', TRUE);
		$paymento = $this->input->post('paymento');
		$config['upload_path']          = 'assets/img/payment';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['payment']            	= $paymento;
		$config['overwrite']            = true;
		$config['max_size']             = 6024; // 1MB
		$config['max_width']            = 800;
		$config['max_height']           = 700;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('payment')) {
			$data['error'] = $this->upload->display_errors();
		} else {
			$b = array('payment' => $this->upload->data());
			$bpay = $b['payment']['file_name'];
			$this->pemesanan->pay($kode_transaksi,$payment_method,$bpay);
		}

	redirect('order');
	}

}