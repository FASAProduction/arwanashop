<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

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
                $head['judul'] = "Backend Pesanan - Arwana Store";
				$adm = $this->session->userdata('ses_id');
				$head['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
				$data['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
				$data['cust'] = $this->admin->customer()->result();
				$data['ordall'] = $this->admin->all_orders()->result();
                $this->load->view('backend/templ/head', $head);
                $this->load->view('backend/pemesanan/pesan', $data);
                $this->load->view('backend/templ/foot');
	}
	


}