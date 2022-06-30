
<?php
require_once('koneksi.php');

$getJumlahSalesOrder = "SELECT COUNT(SalesOrderID) as jumlahSalesOrder FROM salesorderfact";
$query1 = mysqli_query($conn,$getJumlahSalesOrder);

$jumlahSalesOrder = $query1->fetch_assoc()['jumlahSalesOrder'];
// ================================================================================
$getJumlahProduct = "SELECT COUNT(ProductID) as jumlahProduct from product";
$query2 = mysqli_query($conn,$getJumlahProduct);

$jumlahProduct = $query2->fetch_assoc()['jumlahProduct'];

// ================================================================================
$getProductTerjual = "SELECT SUM(OrderQty) as productTerjual from salesorderfact";
$query3 = mysqli_query($conn,$getProductTerjual);

$productTerjual = $query3->fetch_assoc()['productTerjual'];
// ================================================================================
$getTotalPenjualanProduct = "SELECT SUM(LineTotal) as totalPenjualanProduct from salesorderfact;";
$query4 = mysqli_query($conn,$getTotalPenjualanProduct);

$totalPenjualanProduct = $query4->fetch_assoc()['totalPenjualanProduct'];



