<?php

include '../../../../src/connection/connection.php';

$idParam = $_POST["idParam"];
$price = $_POST["price"];
$adding_price = $_POST["adding_price"];
$newPice= str_replace(".", "", $price);

$total = $newPice + $adding_price;

mysqli_query($connect, "UPDATE detailorder SET status='Unpaid' WHERE iddetailOrder=$idParam");

mysqli_query($connect, "INSERT INTO transaction 
( idtransaction, iddetailOrder, price_order, proof_of_payment, status) 
values 
(null, $idParam, '$total', '-', 'Unpaid')");

header("location: ../?pr=unpaid");
