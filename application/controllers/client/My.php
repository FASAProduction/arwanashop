<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class My extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
            $urll = base_url();
            redirect($url);
        }	
		$this->load->model('m_gen');
		$this->load->library('upload');
		$this->load->helper('url');

	}
	
	public function index()
	{
		$data['judul'] = 'My Account | FasTechnology';
		$data['cust'] = $this->m_gen->data_cust()->result();
		$this->load->view('dashboard/room/my_room', $data);
	}

	function ubah(){
		$cust_id = $this->input->post('cust_id');
		$uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $jk = $this->input->post('jk');
        $cust_email = $this->input->post('cust_email');
        $cust_phone = $this->input->post('cust_phone');
        $who = $this->input->post('who');
        $company = $this->input->post('company');
        $country = $this->input->post('country');
        $pict = $this->input->post('pict');
		$this->m_gen->pro_ubah($cust_id,$uname,$pass,$first_name,$last_name,$jk,$cust_email,$cust_phone,$who,$company,$country,$pict);
		$this->session->set_flashdata('oke', '<div class="alert alert-success"><b>BERHASIL!</b> Data Anda berhasil diubah.</div>');
		redirect('client/my');
	}

	public function apdetfoto()
  {
            $cust_id = $this->input->post('cust_id');
			$picto = $this->input->get('picto');

      // get foto
      $config['upload_path'] = './komponen/assets/images/cust';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '99048';  //2MB max
      //$config['max_width'] = '4480'; // pixel
      //$config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['pict']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['pict']['name'])) {
	        if ( $this->upload->do_upload('pict') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                          'cust_id'       => $cust_id,
                            'pict'       => $foto['file_name']
	                        );
							$this->m_gen->up($cust_id, $data);
                            $this->session->set_flashdata('adp', '<div class="alert alert-success"><strong>Sukses!</strong> Alat musik berhasil ditambahkan.</div>');
              redirect('client/my');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }
	
}