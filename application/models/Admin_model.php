<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function data_login($username,$password){
		return $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	}
	
	public function transaction_payed(){
		return $this->db->query("SELECT * FROM pemesanan WHERE status_bayar='Sudah Bayar'");
	}
	
	public function transaction_nonpayed(){
		return $this->db->query("SELECT * FROM pemesanan WHERE status_bayar='Belum Bayar'");
	}
	
	public function transaction(){
		return $this->db->query("SELECT * FROM pemesanan");
	}
	
	public function customer(){
		return $this->db->query("SELECT * FROM pelanggan JOIN provinsi ON provinsi.id_provinsi=pelanggan.id_provinsi");
	}
	
	public function totalget(){
		return $this->db->query("SELECT SUM(total) as too FROM pemesanan");
	}
	
	public function all_orders(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		GROUP BY kode_pemesanan ORDER BY kode_pemesanan DESC");
	}
	
	public function payed(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE status_bayar='Sudah Bayar'");
	}
	
	public function unpayed(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE status_bayar='Belum Bayar'");
	}
	
	public function packed(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE status_kirim='Dikemas'");
	}
	
	public function send(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE status_kirim='Dikirim'");
	}
	
	public function done(){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE status_kirim='Selesai'");
	}
	
	public function data_filter($from,$to){
		return $this->db->query("SELECT * FROM pemesanan
		JOIN pelanggan ON pelanggan.id_pelanggan=pemesanan.id_pelanggan
		JOIN produk ON produk.id_produk=pemesanan.id_produk
		WHERE tanggal_pemesanan BETWEEN '$from' AND '$to'
		GROUP BY kode_pemesanan ORDER BY kode_pemesanan DESC");
	}
	
	function products(){
		return $this->db->query("SELECT * FROM produk ORDER BY id_produk DESC");
	}
	
	function productsadd($id_admin,$nama_produk,$hasil,$stok,$harga,$bpic){
		return $this->db->query("INSERT INTO produk (id_admin,nama_produk,deskripsi,stok,harga,gambar)
		VALUES ('$id_admin','$nama_produk','$hasil','$stok','$harga','$bpic')");
	}
}