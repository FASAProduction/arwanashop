<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_gen extends CI_Model{
    function data_cust(){
        $sesid = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM pelanggan WHERE cust_id='$sesid'");
        return $query;
    }

    function preinput($taff_id,$pre_date,$s_pre,$pre_total,$pre_permit,$pre_alpa){
        $qu = $this->db->query("INSERT INTO staff_presence (staff_id,pre_date,s_pre,pre_total,pre_permit,pre_alpa)
        VALUES ('$taff_id','$pre_date','$s_pre','$pre_total','$pre_permit','$pre_alpa')");
        return $qu;
    }

    function data_presence(){
        $sesid = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM staff_presence WHERE staff_id='$sesid'");
        return $query;
    }

    function data_product(){
        $queryy = $this->db->query("SELECT * FROM packet");
        return $queryy;
    }

    function data_brand(){
        $qu = $this->db->query("SELECT * FROM brand LIMIT 2");
        return $qu;
    }

    function data_custo(){
        $ss = $this->session->userdata('ses_id');
        $aa = $this->db->query("SELECT * FROM pelanggan WHERE cust_id='$ss'");
        return $aa;
    }

    public function up($cust_id, $data)
  {
      $row = $this->db->where('cust_id',$cust_id)->get('picto');
      unlink('/komponen/assets/images/cust/'.$row->pict);
      $this->db->where('cust_id',$cust_id);
      $this->db->update('pelanggan', $data);
      return TRUE;
  }

  public function cekfoto($cust_id){
      $aa = $this->db->query("SELECT pict FROM pelanggan WHERE cust_id='$cust_id'");
      return $aa;
  }

  function pro_ubah($cust_id,$uname,$pass,$first_name,$last_name,$jk,$cust_email,$cust_phone,$who,$company,$country,$pict){
      $g = $this->db->query("UPDATE pelanggan SET
      uname='$uname',
      pass='$pass',
      first_name='$first_name',
      last_name='$last_name',
      jk='$jk',
      cust_email='$cust_email',
      cust_phone='$cust_phone',
      who='$who',
      company='$company',
      country='$country',
      pict='$pict'
      WHERE cust_id='$cust_id'");
      return $g;
  }

  function data_trans_web(){
      $plg = $this->session->userdata('ses_id');
      $a = $this->db->query("SELECT * FROM transaction
      JOIN pelanggan ON pelanggan.cust_id=transaction.cust_id
      JOIN packet ON packet.packet_id=transaction.packet_id
      WHERE transaction.cust_id='$plg'");
      return $a;
  }

  function data_paket(){
      $p = $this->db->query("SELECT * FROM packet");
      return $p;
  }
  
  function data_cart(){
	  $cust = $this->session->userdata('ses_id');
	  $w = $this->db->query("SELECT * FROM keranjang JOIN packet ON packet.packet_id=keranjang.packet_id WHERE cust_id='$cust'");
	  return $w;
  }

  function data_details(){
      return $this->db->query("SELECT * FROM details
      JOIN keranjang
      ON keranjang.cart_id=details.cart_id
      JOIN packet
      ON packet.packet_id=keranjang.packet_id");
  }
}
?>