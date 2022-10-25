<?php

include '../../../../src/connection/connection.php';

$idParam = $_POST["idParam"];

mysqli_query($connect, "UPDATE detailorder SET status='Lunas' WHERE iddetailOrder=$idParam");
mysqli_query($connect, "UPDATE transaction SET status='Lunas' WHERE iddetailOrder=$idParam");

header("location: ../?pr=paid");
