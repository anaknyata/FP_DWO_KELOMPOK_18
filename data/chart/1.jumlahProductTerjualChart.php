<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetJumlahProductTerjual = 0;
$sGetJumlahProductTerjual = "SELECT b.Name, SUM(a.OrderQty) AS jumlahProductTerjual FROM salesorderfact a INNER JOIN product b ON b.ProductID = a.ProductID  GROUP BY b.Name ORDER BY jumlahProductTerjual DESC LIMIT 5;";
$qGetJumlahJumlahProductTerjual = mysqli_query($conn, $sGetJumlahProductTerjual);
while ($fGetJumlahProductTerjual = mysqli_fetch_array($qGetJumlahJumlahProductTerjual)) {

  $return[$noGetJumlahProductTerjual]['Name'] = $fGetJumlahProductTerjual['Name'];
  $return[$noGetJumlahProductTerjual]['jumlahProductTerjual'] = $fGetJumlahProductTerjual['jumlahProductTerjual'];

  $noGetJumlahProductTerjual++;
}



print_r(json_encode($return));
exit();