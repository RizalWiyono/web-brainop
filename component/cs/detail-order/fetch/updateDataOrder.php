<?php

include '../../../../src/connection/connection.php';

$param = $_POST["param"];
$price_order = $_POST["price_order"];
$newPrice = $_POST["newPrice"];
$desc = $_POST["desc"];

mysqli_query($connect, "UPDATE detailorder SET description='$desc', status='Unpaid' WHERE iddetailOrder=$param");
mysqli_query($connect, "UPDATE transaction SET price_order='$newPrice', status='Unpaid' WHERE iddetailOrder=$param");

header("location: ../?pr=unpaid");
