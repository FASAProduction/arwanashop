<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_trans extends CI_Model{
    function tampil(){
        $oo = $this->session->userdata('ses_id');
        $aa = $this->db->query("SELECT * FROM f_trans
                                JOIN products ON products.prod_id=f_trans.prod_id
                                JOIN pelanggan ON pelanggan.cust_id=f_trans.cust_id
                                WHERE f_trans.cust_id='$oo'");
    }

    public function msk($data)
  {
      $this->db->insert('transaction',$data);
      return TRUE;
  }

    public function single_data($trans_code){
        $cid = $this->session->userdata('ses_id');
        $as = $this->db->query("SELECT * FROM transaction
        JOIN pelanggan ON pelanggan.cust_id=transaction.cust_id
        WHERE trans_code='$trans_code' AND transaction.cust_id='$cid'");
            return $as;
        }
    
    public function CreateCode(){
        $this->db->select('RIGHT(transaction.trans_code,5) as kode', FALSE);
        $this->db->order_by('kode','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('transaction');
            if($query->num_rows() <> 0){      
                $data = $query->row();
                $kode = intval($data->kode) + 1; 
            }
            else{      
                $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "TR-FSP".$batas;
        return $kodetampil;  
    }

    function adddetailss($cart_id,$packet_id,$project_name,$description,$feature,$duration){
        $d = $this->db->query("INSERT INTO details (cart_id,packet_id,project_name,descript,feature,duration)
        VALUES ('$cart_id','$packet_id','$project_name','$description','$feature','$duration')");
        return $d;
    }

    function view_keranjang(){
        $cs = $this->session->userdata('ses_id');
        return $this->db->query("SELECT * FROM keranjang
        JOIN details
        ON details.cart_id=keranjang.cart_id
        WHERE cust_id='$cs'");
    }
}




?>