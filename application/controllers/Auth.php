<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('pelanggan_model', 'pelanggan');
        $this->load->model('keranjang_model', 'keranjang');
    }

    public function index()
	{
                $pel = $this->session->userdata('ses_id');
                $head['judul'] = "Authentication - Arwana Store";
                $head['cart'] = $this->db->query("SELECT * FROM keranjang JOIN produk ON produk.id_produk=keranjang.id_produk WHERE id_pelanggan='$pel'")->row_array();
                $head['cartht'] = $this->db->query("SELECT * FROM keranjang WHERE id_pelanggan='$pel'")->num_rows();
                $this->load->view('templ/head', $head);
                $this->load->view('auth/auth');
                $this->load->view('templ/foot');
	}
	
	function login(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=sha1(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
 
        $cek=$this->pelanggan->data_login($username,$password);
                    if($cek->num_rows() > 0){
                            $data=$cek->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('ses_id',$data['id_pelanggan']);
							$url = base_url();
                            redirect($url);
                    }else{  // jika username dan password tidak ditemukan atau salah
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah!');
                            $url = base_url('auth');
                            redirect($url);
                    }
    }
	
	public function create(){
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $id_provinsi = $this->input->post('id_provinsi');
        $no_hp = $this->input->post('no_hp');
        $this->pelanggan->reg($username,$password,$nama_lengkap,$alamat,$id_provinsi,$no_hp);
        $this->session->set_flashdata('yeay', '<div class="alert alert-success"><b>BERHASIL!</b> Silahkan login dengan username yang telah Anda daftarkan.</div>');
		$url = base_url('auth');
        redirect($url);
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }

}