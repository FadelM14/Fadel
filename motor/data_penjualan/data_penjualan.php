<?php
include 'koneksi.php';
$db = new database();
$data_barang = $db->data_barang();
?>
<?php   function update(){
  $db = new database();
  $kd_barang = $_GET['id'];
  $barang =  $db->tampil_update_barang($kd_barang) ;
    ?>
<div class="row">
     <div class="col-4" style="padding: 12px;border-radius: 10px;"> 

      <div class="card">
  <div class="card-header">
    DATA BARANG
  </div>
  <div class="card-body">
      <form action="<?php echo' proses_barang.php?aksi=update' ?>" method = "post" >
        <input type="hidden" name="id" value="<?= $barang['id']  ?>">
  <div class="mb-3">
  <label class="form-label">Kode Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Kode Barang" name="kd_barang" value="<?= $barang['kd_barang'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nm_barang" value="<?= $barang['nm_barang']  ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Harga Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Harga Barang" name="harga" value="<?= $barang['harga'] ?> ">
  </div>

  <div class="mb-3">
  <label class="form-label">Stok Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Stok Barang" name="stock" value="<?= $barang['stock'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Distributor</label>
  <input type="text" class="form-control" placeholder="Masukkan Distributor" name="distributor" value="<?= $barang['distributor'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Keterangan Barang</label>
  <textarea class="form-control" rows="3" placeholder="Masukkan Keterangan Barang" name="ket"><?php echo $barang['ket']?></textarea>
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
    DATA BARANG
  </div>
  <div class="card-body">
      <form action="<?php echo' proses_barang.php?aksi=tambah' ?>" method = "post" >
  <div class="mb-3">
  <label class="form-label">Kode Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Kode Barang" name="kd_barang">
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nm_barang">
  </div>

  <div class="mb-3">
  <label class="form-label">Harga Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Harga Barang" name="harga">
  </div>

  <div class="mb-3">
  <label class="form-label">Stok Barang</label>
  <input type="text" class="form-control" placeholder="Masukkan Stok Barang" name="stock">
  </div>

  <div class="mb-3">
  <label class="form-label">Distributor</label>
  <input type="text" class="form-control" placeholder="Masukkan Distributor" name="distributor">
  </div>

  <div class="mb-3">
  <label class="form-label">Keterangan Barang</label>
  <textarea class="form-control" rows="3" placeholder="Masukkan Keterangan Barang" name="ket"></textarea>
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
  <div class="col-8">
      <div class="card">
  <div class="card-header">
    INPUT BARANG
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">KODE BARANG</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">HARGA</th>
      <th scope="col">STOK</th>
      <th scope="col">DISTRIBUTOR</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php   $i = 1; ?>
    <?php   foreach ($data_barang as $row) {
      ?>

    <tr>
      <th scope="row"><?= $i++    ?></th>
      <td><?= $row['kd_barang']    ?></td>
      <td><?= $row['nm_barang']    ?></td>
      <td><?= $row['harga']    ?></td>
      <th><?= $row['stock']    ?></th>
      <td><?= $row['distributor']    ?></td>
      <td><?= $row['ket']    ?></td>
      <td><a href="proses_barang.php?aksi=hapus&&id=<?= $row['id']  ?>" class="btn-sm btn-primary">HAPUS</a><a href="index.php?&&edit=update&&id=<?= $row['id']    ?>" class="btn-sm btn-primary">UPDATE</a></td>
    </tr>
          <?php
    } ?>
  </tbody>
</table>
  </div>
  
  </div>
  </div>
</div>