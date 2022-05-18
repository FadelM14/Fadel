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
  <label class="form-label">Id</label>
  <input type="text" class="form-control" placeholder="Masukkan Id" name="id" value="<?= $data_motor['id'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">No Plat</label>
  <input type="text" class="form-control" placeholder="Masukkan No Plat" name="no_plat" value="<?= $data_motor['no_plat']  ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Merk</label>
  <input type="text" class="form-control" placeholder="Masukkan Merk Motor" name="merk" value="<?= $data_motor['merk'] ?> ">
  </div>

  <div class="mb-3">
  <label class="form-label">Warna</label>
  <input type="text" class="form-control" placeholder="Masukkan Warna" name="warna" value="<?= $data_motor['warna'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Foto</label>
  <input type="text" class="form-control" placeholder="Masukkan Foto" name="foto" value="<?= $data_motor['foto'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">merk</label>
  <textarea class="form-control" rows="3" placeholder="Masukkan merk" name="merk"><?php echo $data_motor['harga']?></textarea>
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
    DATA MOTOR
  </div>
  <div class="card-body">
      <form action="<?php echo' proses_motor.php?aksi=tambah' ?>" method = "post" >
  <div class="mb-3">
  <label class="form-label">Id</label>
  <input type="text" class="form-control" placeholder="Masukkan Id" name="id">
  </div>

  <div class="mb-3">
  <label class="form-label">No Plat</label>
  <input type="text" class="form-control" placeholder="Masukkan No Plat" name="no_plat">
  </div>

  <div class="mb-3">
  <label class="form-label">Merk</label>
  <input type="text" class="form-control" placeholder="Masukkan Merk" name="merk">
  </div>

  <div class="mb-3">
  <label class="form-label">Warna</label>
  <input type="text" class="form-control" placeholder="Masukkan Warna" name="warna">
  </div>

  <div class="mb-3">
  <label class="form-label">Foto</label>
  <input type="text" class="form-control" placeholder="Masukkan foto" name="foto">
  </div>

  <div class="mb-3">
  <label class="form-label">Harga</label>
  <textarea class="form-control" rows="3" placeholder="Masukkan Harga" name="harga"></textarea>
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
    INPUT MOTOR
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">No Plat</th>
      <th scope="col">Merk</th>
      <th scope="col">Warna</th>
      <th scope="col">Foto</th>
      <th scope="col">Harga</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php   $i = 1; ?>
    <?php   foreach ($data_motor as $row) {
      ?>

    <tr>
      <th scope="row"><?= $i++    ?></th>
      <td><?= $row['no_plat']    ?></td>
      <td><?= $row['merk']    ?></td>
      <th><?= $row['warna']    ?></th>
      <td><?= $row['foto']    ?></td>
      <td><?= $row['harga']    ?></td>
      <td><a href="proses_motor.php?aksi=hapus&&id=<?= $row['id']  ?>" class="btn-sm btn-primary">HAPUS</a><a href="index.php?&&edit=update&&id=<?= $row['id']    ?>" class="btn-sm btn-primary">UPDATE</a></td>
    </tr>
          <?php
    } ?>
  </tbody>
</table>
  </div>
  
  </div>
  </div>
</div>