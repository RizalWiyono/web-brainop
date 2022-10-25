<?php

include '../../../../src/connection/connection.php';

$id = $_POST["id"];
$idEmployee = $_POST["idEmployee"];
$comment = $_POST["comment"];
$idPage = $_POST["idPage"];

mysqli_query($connect, "INSERT INTO commenttask 
( idcommentTask, idlistTask, iddataEmployee, comment) 
values 
(null, $id, '$idEmployee', '$comment')");

header("location: ../?id=".$idPage);
