<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetJumlahOrder = 0;
$sGetJumlahOrder = "SELECT COUNT(a.SalesOrderID) AS jumlahOrder, b.QuarterName FROM salesorderfact AS a INNER JOIN timedimension AS b ON b.TimeID = a.TimeID GROUP BY b.QuarterName ORDER BY b.QuarterName ASC;";
$qGetJumlahOrder = mysqli_query($conn, $sGetJumlahOrder);
while ($fGetJumlahOrder = mysqli_fetch_array($qGetJumlahOrder)) {

  $return[$noGetJumlahOrder]['jumlahOrder'] = $fGetJumlahOrder['jumlahOrder'];
  $return[$noGetJumlahOrder]['QuarterName'] = $fGetJumlahOrder['QuarterName'];

  $noGetJumlahOrder++;
}



print_r(json_encode($return));
exit();