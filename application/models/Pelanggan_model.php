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

}