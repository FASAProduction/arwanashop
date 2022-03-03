<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_logg extends CI_Model{
    
    function data_login($username,$password){
        $query=$this->db->query("SELECT * FROM pelanggan WHERE uname='$username' AND pass='$password'");
        return $query;
    }

    function reg_pro($uname,$pass,$first_name,$last_name,$jk,$cust_email,$cust_phone,$who,$cc,$country,$pict){
        $quu = $this->db->query("INSERT INTO pelanggan (uname,pass,first_name,last_name,jk,cust_email,cust_phone,who,company,country,pict)
        VALUES ('$uname','$pass','$first_name','$last_name','$jk','$cust_email','$cust_phone','$who','$cc','$country','$pict')");
        return $quu;
    }
}
?>