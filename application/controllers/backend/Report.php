<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
		$this->load->helper('terbilang_helper');
		if($this->session->userdata('masuk') != TRUE){
			redirect('backend');
		}
    }

    public function index()
	{
                $head['judul'] = "Backend Laporan - Arwana Store";
				$adm = $this->session->userdata('ses_id');
				$head['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
				$data['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
                $this->load->view('backend/templ/head', $head);
                $this->load->view('backend/laporan/rep');
                $this->load->view('backend/templ/foot');
	}
	
	function filter(){
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$head['judul'] = "Backend Laporan - Arwana Store";
		$adm = $this->session->userdata('ses_id');
		$head['admn'] = $this->db->query("SELECT * FROM admin WHERE id_admin='$adm'")->row_array();
		$daa['filt'] = $this->admin->data_filter($from,$to)->result();
		$daa['fil'] = $this->admin->data_filter($from,$to)->num_rows();
		$daa['from'] = $from;
		$daa['to'] = $to;
		$this->load->view('backend/templ/head', $head);
        $this->load->view('backend/laporan/repfil', $daa);
        $this->load->view('backend/templ/foot');
	}
	
	public function faktur($code){
		$d['title'] = "Faktur Penjualan " . $code;
		$d['all'] = $this->db->query("SELECT * FROM produk JOIN pemesanan ON pemesanan.id_produk=produk.id_produk WHERE kode_pemesanan='$code' GROUP BY kode_pemesanan")->result();
		$this->load->view('backend/laporan/faktur', $d);
	}
	
	public function fakturperiodic(){
        $from = $this->input->get('from');
        $to = $this->input->get('to');
		$d['title'] = "Faktur Penjualan dari tanggal " . $from . "-" . $to;
		$d['afaktur'] = $this->db->query("SELECT * FROM produk JOIN pemesanan ON pemesanan.id_produk=produk.id_produk WHERE tanggal_pemesanan BETWEEN '$from' AND '$to' AND status_kirim='Selesai' GROUP BY kode_pemesanan")->result();
		$this->load->view('backend/laporan/all_faktur', $d);
	}

    public function fakturmonth(){
        $bulan_ini = date('m');
        $tahun_ini = date('Y');

        if($bulan_ini == '01'){
            $bulan = "Januari";
        }else if($bulan_ini == '02'){
            $bulan = "Februari";
        }else if($bulan_ini == '03'){
            $bulan = "Maret";
        }else if($bulan_ini == '04'){
            $bulan = "April";
        }else if($bulan_ini == '05'){
            $bulan = "Mei";
        }else if($bulan_ini == '06'){
            $bulan = "Juni";
        }else if($bulan_ini == '07'){
            $bulan = "Juli";
        }else if($bulan_ini == '08'){
            $bulan = "Agustus";
        }else if($bulan_ini == '09'){
            $bulan = "September";
        }else if($bulan_ini == '10'){
            $bulan = "Oktober";
        }else if($bulan_ini == '11'){
            $bulan = "November";
        }else{
            $bulan = "Desember";
        }
		$d['title'] = "Faktur Penjualan Bulan " . $bulan . "-" . $tahun_ini;
		$d['afaktur'] = $this->db->query("SELECT * FROM produk JOIN pemesanan ON pemesanan.id_produk=produk.id_produk WHERE MONTH(tanggal_pemesanan) = '$bulan_ini' AND status_kirim='Selesai' GROUP BY kode_pemesanan")->result();
		$this->load->view('backend/report/all_faktur', $d);
	}

}