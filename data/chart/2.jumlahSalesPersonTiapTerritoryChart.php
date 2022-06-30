<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetJumlahSalesPersonTiapTerritory = 0;
$sGetJumlahSalesPersonTiapTerritory = "SELECT COUNT(a.SalesPersonID) AS jumlahSalesPersonTiapTerritory, b.Name FROM salesquotafact AS a INNER JOIN salesterritory as b on a.TerritoryID = b.TerritoryID GROUP BY b.TerritoryID  
ORDER BY `jumlahSalesPersonTiapTerritory` DESC;";
$qGetJumlahSalesPersonTiapTerritory = mysqli_query($conn, $sGetJumlahSalesPersonTiapTerritory);
while ($fGetJumlahSalesPersonTiapTerritory = mysqli_fetch_array($qGetJumlahSalesPersonTiapTerritory)) {

  $return[$noGetJumlahSalesPersonTiapTerritory]['jumlahSalesPersonTiapTerritory'] = $fGetJumlahSalesPersonTiapTerritory['jumlahSalesPersonTiapTerritory'];
  $return[$noGetJumlahSalesPersonTiapTerritory]['Name'] = $fGetJumlahSalesPersonTiapTerritory['Name'];

  $noGetJumlahSalesPersonTiapTerritory++;
}



print_r(json_encode($return));
exit();