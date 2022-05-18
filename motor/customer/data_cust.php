<?php
include 'koneksi.php';
$db = new database();
$data_cust = $db->data_cust();
?>
<?php   function update(){
	$db = new database();
	$id = $_GET['id'];
	$cust =  $db->tampil_update_cust($id) ;
	?>
	<div class="row">
	 <div class="col-4" style="padding: 12px;border-radius: 10px;"> 

		<div class="card">
			<div class="card-header">
				DATA CUSTOMER
			</div>
			<div class="card-body">
				<form action="<?php echo' customer/proses_cust.php?aksi=update' ?>" method = "post" >
					<input type="hidden" name="id" value="<?= $cust['id']  ?>">
					<div class="mb-3">
						<label class="form-label">Kode Customer</label>
						<input type="text" class="form-control" placeholder="Masukkan Kode Barang" name="kode_cust" value="<?= $cust['kode_cust'] ?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Nama Customer</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Customer" name="nama" value="<?= $cust['nama']  ?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" value="<?= $cust['alamat'] ?> ">
					</div>

					<div class="mb-3">
						<label class="form-label">NO HP customer</label>
						<input type="text" class="form-control" placeholder="Masukkan no hp customer" name="no_hp" value="<?= $cust['no_hp'] ?>">
					</div>

					<div class="mb-3">
						<label class="form-label">NO KTP</label>
						<input type="text" class="form-control" placeholder="Masukkan NO KTP" name="no_ktp" value="<?= $cust['no_ktp'] ?>">
					</div>

					<div class="mb-3">
						<label class="form-label">NO KK</label>
						<input type="text" class="form-control" placeholder="Masukkan NO KK" name="kk" value="<?= $cust['kk'] ?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Keterangan customer</label>
						<textarea class="form-control" rows="3" placeholder="Masukkan Keterangan customer" name="keterangan"><?php echo $cust['keterangan']?></textarea>
					</div>

					<div class="mb-3">
						<input type="submit" class="btn btn-primary" value="Simpan Data">
						<input type="reset" class="btn btn-secondary" value="Reset">
					</div>
				</form>
			</div>
		</div>    
	</div>
	
	<?php
} ?>

<?php  
function tambah(){
	?>
	<div class="col-4" style="padding: 12px;border-radius: 10px;">
		<div class="card">
			<div class="card-header">
				DATA CUSTOMER
			</div>
			<div class="card-body">
				<form action="<?php echo' customer/proses_cust.php?aksi=tambah' ?>" method = "post" >
					<div class="mb-3">
						<label class="form-label">Kode Customer</label>
						<input type="text" class="form-control" placeholder="Masukkan Kode Barang" name="kode_cust">
					</div>

					<div class="mb-3">
						<label class="form-label">Nama Costumer</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Costumer" name="nama">
					</div>

					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
					</div>

					<div class="mb-3">
						<label class="form-label">NO HP</label>
						<input type="text" class="form-control" placeholder="Masukkan NO HP" name="no_hp">
					</div>

					<div class="mb-3">
						<label class="form-label">NO KTP</label>
						<input type="text" class="form-control" placeholder="Masukkan NO KTP" name="no_ktp">
					</div>

					<div class="mb-3">
						<label class="form-label">NO KK</label>
						<textarea class="form-control" rows="3" placeholder="Masukkan NO KK" name="kk"></textarea>
					</div>

					<div class="mb-3">
						<label class="form-label">Keterangan</label>
						<textarea class="form-control" rows="3" placeholder="Masukkan Keterangan" name="keterangan"></textarea>
					</div>

					<div class="mb-3">
						<input type="submit" class="btn btn-primary" value="Simpan Data">
						<input type="reset" class="btn btn-secondary" value="Reset">
					</div>
				</form>
			</div>
		</div>    
	</div>

	<?php
}
?>
<?php   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$edit = $_GET['edit'];
if ($edit=="update") {
	update();
}else{
	tambah();
}

?>
<div class="col-12">
	<div class="card">
		<div class="card-header">
			INPUT DATA CUSTOMER
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">KODE CUSTOMER</th>
						<th scope="col">NAMA</th>
						<th scope="col">ALAMAT</th>
						<th scope="col">NO HP</th>
						<th scope="col">NO KTP</th>
						<th scope="col">NO KK</th>
						<th scope="col">KETERANGAN</th>
						<th scope="col">ACTION</th>
					</tr>
				</thead>
				<tbody>
					<?php   $i = 1; ?>
					<?php   foreach ($data_cust as $row) {
						?>

						<tr>
							<th scope="row"><?= $i++    ?></th>
							<td><?= $row['kode_cust']    ?></td>
							<td><?= $row['nama']    ?></td>
							<td><?= $row['alamat']    ?></td>
							<th><?= $row['no_hp']    ?></th>
							<td><?= $row['no_ktp']    ?></td>
							<td><?= $row['kk']    ?></td>
							<td><?= $row['keterangan']    ?></td>
							<td><a href="customer/proses_cust.php?aksi=hapus&&id=<?= $row['id']  ?>" class="btn-sm btn-primary">HAPUS</a><a href="?hal=customer&&edit=update&&id=<?= $row['id']    ?>" class="btn-sm btn-primary">UPDATE</a></td>
						</tr>
						<?php
					} ?>
				</tbody>
			</table>
		</div>
		
	</div>
</div>
</div>
