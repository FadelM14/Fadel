<?php

if ($_GET['hal']=='home'){
  include "home.php";
}
elseif ($_GET['hal']=='customer'){
  include "customer/data_cust.php";
}
elseif ($_GET['hal']=='data_motor'){
  include "data_motor/form_motor.php";
}
elseif ($_GET['hal']=='data_penjualan'){
  include "data_penjualan/form_penjualan.php";
}
else{
  echo "<meta http-equiv='refresh' content='0;url=?hal=home'>";
}
?>
