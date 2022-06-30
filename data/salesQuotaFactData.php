
<?php
require_once('koneksi.php');

$getJumlahTerritory = "SELECT COUNT(TerritoryID) as jumlahTerritory from salesterritory;";
$query1 = mysqli_query($conn,$getJumlahTerritory);

$jumlahTerritory = $query1->fetch_assoc()['jumlahTerritory'];
// ================================================================================
$getjumlahSalesPerson = "SELECT COUNT(SalesPersonID) as jumlahSalesPerson from salesperson";
$query2 = mysqli_query($conn,$getjumlahSalesPerson);

$jumlahSalesPerson = $query2->fetch_assoc()['jumlahSalesPerson'];

// ================================================================================
$getSalesYTD = "SELECT SUM(SalesYTD) as totalSalesYTD from salesquotafact";
$query3 = mysqli_query($conn,$getSalesYTD);

$salesYTD = $query3->fetch_assoc()['totalSalesYTD'];
// ================================================================================
$getTotalSalesLastYear = "SELECT SUM((SalesLastYear)) as totalSalesLastYear from salesquotafact;";
$query4 = mysqli_query($conn,$getTotalSalesLastYear);

$totalSalesLastYear = $query4->fetch_assoc()['totalSalesLastYear'];



