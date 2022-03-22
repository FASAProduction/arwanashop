<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
		if($this->session->userdata('masuk') != TRUE){
			redirect('backend');
		}
    }

    public function index()
	{
                $head['judul'] = "Backend Products - Arwana Store";
				$adm = $this->session->userdata('ses_id');
				$head['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
				$data['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
				$data['prdct'] = $this->admin->products()->result();
                $this->load->view('backend/templ/head', $head);
                $this->load->view('backend/products', $data);
                $this->load->view('backend/templ/foot');
	}
	
	public function add(){
		$id_admin = $this->session->userdata('ses_id');
		$nama_produk = $this->input->post('nama_produk', TRUE);
		$deskripsi = $this->input->post('deskripsi', TRUE);
		$stok = $this->input->post('stok', TRUE);
		$harga = $this->input->post('harga', TRUE);
		$config['upload_path']          = 'komponen/images/products';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['gambar']            	= $nama_produk;
		$config['overwrite']            = true;
		$config['max_size']             = 6024; // 1MB
		// $config['max_width']            = 800;
		// $config['max_height']           = 700;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data['error'] = $this->upload->display_errors();
		} else {
			$b = array('gambar' => $this->upload->data());
			$bpic = $b['gambar']['file_name'];
			$this->admin->productsadd($id_admin,$nama_produk,$deskripsi,$stok,$harga,$bpic);
		}
	$this->session->set_flashdata('addsuccess', '<div class="col-md-12"><div class="alert alert-success"><b>BERHASIL!</b> Produk sudah ditambahkan. <a href="" data-dismiss="true">Oke</a></div></div>');
	redirect('backend/products');
	}

}