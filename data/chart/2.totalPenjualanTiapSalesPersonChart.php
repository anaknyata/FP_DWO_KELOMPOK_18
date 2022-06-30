<?php
header('Content-Type: application/json');
require_once('../koneksi.php');

$noGetTotalPenjualanTiapSalesPerson = 0;
$sGetTotalPenjualanTiapSalesPerson = "SELECT COUNT(a.SalesYTD) AS totalSalesYTD, SUM(a.SalesLastYear) AS totalSalesLastYear, c.Name FROM salesquotafact AS a RIGHT JOIN salesperson AS b on b.SalesPersonID = a.SalesPersonID INNER JOIN employee as c ON c.EmployeeID = b.EmployeeID GROUP BY c.EmployeeID  
ORDER BY `c`.`Name` ASC;";


$qGetTotalPenjualanTiapSalesPerson = mysqli_query($conn, $sGetTotalPenjualanTiapSalesPerson);
while ($fGetTotalPenjualanTiapSalesPerson = mysqli_fetch_array($qGetTotalPenjualanTiapSalesPerson)) {

  $return[$noGetTotalPenjualanTiapSalesPerson]['Name'] = $fGetTotalPenjualanTiapSalesPerson['Name'];
  $return[$noGetTotalPenjualanTiapSalesPerson]['totalSalesYTD'] = $fGetTotalPenjualanTiapSalesPerson['totalSalesYTD'];
  $return[$noGetTotalPenjualanTiapSalesPerson]['totalSalesLastYear'] = $fGetTotalPenjualanTiapSalesPerson['totalSalesLastYear'];

  $noGetTotalPenjualanTiapSalesPerson++;
}



print_r(json_encode($return));
exit();