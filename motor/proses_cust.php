<?php
include 'koneksi.php';
$db = new database();

$aksi = $_GET['aksi'];
$id = $_GET['id'];
	if ($aksi == "tambah") {
		$db->input_cust('',$_POST['kode_cust'],
				$_POST['nama'],
				$_POST['alamat'],
				$_POST['no_hp'],
				$_POST['no_ktp'],
				$_POST['kk'],
				$_POST['keterangan']);

		echo "
		<script language = 'JavaScript'>
		alert('Data Berhasil Disimpan');
		document.location='index.php';
		</script> 
		";
	}elseif ($aksi == "update" ) {
		$db->update_cust(
				$_POST['id'],
				$_POST['kode_cust'],
				$_POST['nama'],
				$_POST['alamat'],
				$_POST['no_hp'],
				$_POST['no_ktp'],
				$_POST['kk'],
				$_POST['keterangan']);
		echo"
			<script language = 'JavaScript'>
			alert('Data Berhasil Diupdate');
			document.location='index.php';
			</script>
		";
	}
	else{
		echo "Database anda eror silahkan kembali lagi <a href='index.php?'>Klik Disini</a>";
	}
	if ($aksi == "hapus") {
		$db->hapus_cust($id)
		;

		echo "
		<script language = 'JavaScript'>
		alert('Data Berhasil Dihapus');
		document.location='index.php';
		</script> 
		";
	}else{
		echo "Database anda eror silahkan kembali lagi <a href='index.php?'>Klik Disini</a>";
	}

?>