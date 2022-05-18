<div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
	<h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">
		Input Data Customer</h3>
	
	<form method="post" action="<?php echo"proses_barang.php?aksi=tambah" ?>">
		<div class="mb-3">
			<label class="form-label">Kode</label>
			<input type="text" class="form-control" name="kode_cust" placeholder="Masukkan kode customer">
		</div>
		<div class="mb-3">
			<label class="form-label">Nama</label>
			<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama customer">
		</div>
		<div class="mb-3">
			<label class="form-label">Alamat</label>
			<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat customer">
		</div>
		<div class="mb-3">
			<label class="form-label">No HP</label>
			<input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Hp customer">
		</div>
		<div class="mb-3">
			<label class="form-label">No KTP</label>
			<input type="text" class="form-control" name="no_ktp" placeholder="Masukkan No KTP customer">
		</div>
		<div class="mb-3">
			<label class="form-label">No KK</label>
			<input type="text" class="form-control" name="no_kk" placeholder="Masukkan No KK customer">
		</div>
		<div class="mb-3">
			<label class="form-label">Keterangan</label>
			<textarea class="form-control" rows="3" name="keterangan" placeholder=" Masukkan Keterangan customer"></textarea>
		</div>

		<div class="mb-3">
			<input type="button" class="btn btn-primary" value="simpan_data">
			<input type="reset" class="btn btn-primary" value="reset">
		</div>
		
	</form>
</div>