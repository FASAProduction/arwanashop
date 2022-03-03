<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_logg');

	}
	
	public function index()
	{	
	}

        function login(){
                $data['judul'] = 'Login | FasTechnology';
		        $this->load->view('auth/login', $data);
        }

	function pro(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
 
        $cek=$this->m_logg->data_login($username,$password);
                    if($cek->num_rows() > 0){
                            $data=$cek->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('ses_id',$data['cust_id']);
                            redirect('client/dashboard');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah!');
                            redirect('client/auth/login');
                    }
        }

        public function create()
	{
		$data['judul'] = 'Buat Akun | FasTechnology';
		$this->load->view('auth/register', $data);
	}

    public function regis(){
        $uname = $this->input->post('uname');
        $pass = md5($this->input->post('pass'));
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $jk = $this->input->post('jk');
        $cust_email = $this->input->post('cust_email');
        $cust_phone = $this->input->post('cust_phone');
        $who = $this->input->post('who');
        $company = $this->input->post('company');
        if($company == null){
            $cc = "-";
        }else{
            $cc = $company;
        }
        $country = $this->input->post('country');
        $pict = $this->input->post('pict');
        $this->m_logg->reg_pro($uname,$pass,$first_name,$last_name,$jk,$cust_email,$cust_phone,$who,$cc,$country,$pict);
        $this->session->set_flashdata('yeay', '<div class="alert alert-success"><b>BERHASIL!</b> Silahkan login dengan username yang telah Anda daftarkan.</div>');
        redirect('client/auth/login');
    }
 
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }
	
}