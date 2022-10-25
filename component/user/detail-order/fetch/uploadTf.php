<?php

include '../../../../src/connection/connection.php';

$idParam = $_POST["idParam"];
// Random Nama Image
$var1 = rand(1111,9999);
$var2 = rand(1111,9999);

$var3 = $var1.$var2;
$var3 = md5($var3);

$fnm = $_FILES["image"]["name"];

// Proses Penyimpanan Gambar
$dst = "../../../../src/images/transfer/".$var3.$fnm;
$dst_db = $var3.$fnm;

$imgMove = move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

mysqli_query($connect, "UPDATE transaction SET proof_of_payment='$dst_db' WHERE iddetailOrder=$idParam");

header("location: ../?pr=unpaid");
