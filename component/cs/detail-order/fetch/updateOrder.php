<?php

include '../../../../src/connection/connection.php';

$idParam = $_POST["idParam"];
$price = $_POST["price"];

mysqli_query($connect, "UPDATE detailorder SET status='Unpaid' WHERE iddetailOrder=$idParam");

mysqli_query($connect, "INSERT INTO transaction 
( idtransaction, iddetailOrder, price_order, proof_of_payment, status) 
values 
(null, $idParam, '$price', '-', 'Unpaid')");

header("location: ../?pr=unpaid");
