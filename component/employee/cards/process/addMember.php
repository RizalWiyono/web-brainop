<?php

include '../../../../src/connection/connection.php';

$id = $_POST["id"];
$idPage = $_POST["idPage"];
$member = $_POST["member"];

mysqli_query($connect, "INSERT INTO contributiontask 
( idcontributionTask, idlistTask, iddataEmployee, status) 
values 
(null, $id, '$member', ' ')");

header("location: ../?id=".$idPage);
