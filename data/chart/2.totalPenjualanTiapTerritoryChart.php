<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetTotalPenjualanTiapTerritory = 0;
$sGetTotalPenjualanTiapTerritory = "SELECT SUM(a.SalesYTD) AS totalSalesYTD, SUM(a.SalesLastYear) AS totalSalesLastYear, b.Name FROM salesquotafact AS a INNER JOIN salesterritory as b on a.TerritoryID = b.TerritoryID GROUP BY b.TerritoryID  
ORDER BY `b`.`Name` ASC";


$qGetTotalPenjualanTiapTerritory = mysqli_query($conn, $sGetTotalPenjualanTiapTerritory);
while ($fGetTotalPenjualanTiapTerritory = mysqli_fetch_array($qGetTotalPenjualanTiapTerritory)) {

  $return[$noGetTotalPenjualanTiapTerritory]['Name'] = $fGetTotalPenjualanTiapTerritory['Name'];
  $return[$noGetTotalPenjualanTiapTerritory]['totalSalesYTD'] = $fGetTotalPenjualanTiapTerritory['totalSalesYTD'];
  $return[$noGetTotalPenjualanTiapTerritory]['totalSalesLastYear'] = $fGetTotalPenjualanTiapTerritory['totalSalesLastYear'];

  $noGetTotalPenjualanTiapTerritory++;
}



print_r(json_encode($return));
exit();