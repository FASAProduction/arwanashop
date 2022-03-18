<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model', 'produk');
        $this->load->library('user_agent');
        $this->load->helper('rupiah_helper');
    }

    public function index(){
       
    }
	
	function product($pr){
		$head['judul'] = 'Detail - Arwana Store';
		$cst = $this->session->userdata('ses_id');
		$head['cust'] = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$cst'")->result();
		$head['krjg'] = $this->db->query("SELECT * FROM keranjang WHERE id_pelanggan='$cst'")->num_rows();
		$data['dp'] = $this->produk->product_detail($pr)->result();
		$this->load->view('templ/head', $head);
		$this->load->view('detail', $data);
		$this->load->view('templ/foot');
	}

}