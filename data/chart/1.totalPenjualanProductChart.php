<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetTotalPenjualanProduct = 0;
$sGetTotalPenjualanProduct = "SELECT SUM(a.LineTotal) AS totalPenjualanProduct, b.QuarterName FROM salesorderfact AS a INNER JOIN timedimension AS b ON b.TimeID = a.TimeID GROUP BY b.QuarterName ORDER BY b.QuarterName ASC;";
$qGetTotalPenjualanProduct = mysqli_query($conn, $sGetTotalPenjualanProduct);
while ($fGetTotalPenjualanProduct = mysqli_fetch_array($qGetTotalPenjualanProduct)) {

  $return[$noGetTotalPenjualanProduct]['totalPenjualanProduct'] = $fGetTotalPenjualanProduct['totalPenjualanProduct'];
  $return[$noGetTotalPenjualanProduct]['QuarterName'] = $fGetTotalPenjualanProduct['QuarterName'];

  $noGetTotalPenjualanProduct++;
}



print_r(json_encode($return));
exit();