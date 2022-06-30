
<?php
require_once('koneksi.php');

$getTotalPenjualanProduct = "SELECT SUM(LineTotal) as totalPenjualanProduct from salesorderfact;";
$query1 = mysqli_query($conn,$getTotalPenjualanProduct);

$totalPenjualanProduct = $query1->fetch_assoc()['totalPenjualanProduct'];
// ================================================================================
$getProductTerjual = "SELECT COUNT(ProductID) as productTotal from product";
$query2 = mysqli_query($conn,$getProductTerjual);

$jumlahProduct = $query2->fetch_assoc()['productTotal'];

// ================================================================================
$getProductTerjual = "SELECT SUM(OrderQty) as productTerjual from salesorderfact";
$query3 = mysqli_query($conn,$getProductTerjual);

$productTerjual = $query3->fetch_assoc()['productTerjual'];
// ================================================================================
$getJumlahTerritory = "SELECT COUNT(TerritoryID) as jumlahTerritory from salesterritory;";
$query4 = mysqli_query($conn,$getJumlahTerritory);

$jumlahTerritory = $query4->fetch_assoc()['jumlahTerritory'];



