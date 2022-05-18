<?php

class database{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "20210120067_cahaya";
	var $koneksi = "";

function __construct(){
	$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
}
 function input_cust($id, $kode_cust, $nama, $alamat, $no_hp, $no_ktp, $kk, $keterangan){
 	mysqli_query($this->koneksi,"insert into tbl_cust values ('','$kode_cust','$nama','$alamat','$no_hp','$no_ktp','$kk','$keterangan')");
 } 
 	function data_cust(){
 		$data_cust = mysqli_query($this->koneksi,"select * from tbl_cust");
 		while ($row = mysqli_fetch_array($data_cust)){
 		 	$hasil_cust[] = $row;
 		 } 
 		 return $hasil_cust;
 	}
 	function hapus_cust($id){
 	mysqli_query($this->koneksi,"DELETE FROM tbl_cust WHERE id='$id'");
 } 
 function tampil_update_cust($id){
 	$query = mysqli_query($this->koneksi,"SELECT * FROM tbl_cust WHERE id = '$id'");
 	return $query->fetch_array();
 }
 function update_cust($id,$kode_cust,$nama,$alamat,$no_hp,$no_ktp,$kk,$keterangan){
 	$query = mysqli_query($this->koneksi,"Update tbl_cust set kode_cust='$kode_cust',nama='$nama',alamat='$alamat',no_hp= $no_hp',no_ktp='$no_ktp',kk='$kk',keterangan='$keterangan' where id='$id'");
}
}

?>