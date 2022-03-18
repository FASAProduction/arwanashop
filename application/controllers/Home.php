<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model', 'produk');
        $this->load->library('user_agent');
        $this->load->helper('rupiah_helper');
    }

    public function index(){
        $head['judul'] = 'Arwana Store';
		$cst = $this->session->userdata('ses_id');
		$head['cust'] = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$cst'")->result();
		$head['cart'] = $this->db->query("SELECT * FROM keranjang JOIN produk ON produk.id_produk=keranjang.id_produk WHERE id_pelanggan='$cst'")->row_array();
        $head['krjg'] = $this->db->query("SELECT * FROM keranjang WHERE id_pelanggan='$cst'")->num_rows();
		$data['p'] = $this->produk->product()->result();
		$data['pc'] = $this->produk->product()->num_rows();
		$this->load->view('templ/head', $head);
		$this->load->view('home', $data);
		$this->load->view('templ/foot');
    }
	
	function add($prod){
		$pelanggan = $this->session->userdata('ses_id');
		$qty = "1";
		$this->db->query("INSERT INTO keranjang (id_pelanggan,id_produk,qty) VALUES ('$pelanggan','$prod','$qty')");
		$this->session->set_flashdata('yey', '<div class="alert alert-success notif"><center>Ditambahkan Ke Keranjang! <a href="" data-dismiss="true">Oke</a></center></div>');
		$url = base_url();
		redirect($url);
	}

}