<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    public function data_login($username,$password){
		return $this->db->query("SELECT * FROM pelanggan WHERE username='$username' AND password='$password'");
	}
	
	function reg($username,$password,$nama_lengkap,$alamat,$id_provinsi,$no_hp){
        $quu = $this->db->query("INSERT INTO pelanggan (username,password,nama_lengkap,alamat,id_provinsi,no_hp)
        VALUES ('$username','$password','$nama_lengkap','$alamat','$id_provinsi','$no_hp')");
        return $quu;
    }
	
	function cust(){
		$cuss = $this->session->userdata('ses_id');
		return $this->db->query("SELECT * FROM pelanggan
		JOIN provinsi
		ON provinsi.id_provinsi=pelanggan.id_provinsi
		WHERE id_pelanggan='$cuss'");
	}
	
	function profile($id_pelanggan,$nama_lengkap,$username,$alamat,$id_provinsi,$no_hp){
		return $this->db->query("UPDATE pelanggan SET nama_lengkap='$nama_lengkap', username='$username', alamat='$alamat', id_provinsi='$id_provinsi', no_hp='$no_hp' WHERE id_pelanggan='$id_pelanggan'");
	}

}