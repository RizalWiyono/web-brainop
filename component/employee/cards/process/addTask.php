<?php

include '../../../../src/connection/connection.php';

$param = $_POST["param"];
$task_name = $_POST["task_name"];
$deadline = $_POST["deadline"];
$additional = $_POST["additional"];

mysqli_query($connect, "INSERT INTO listtask ( idlistTask, iddetailOrder, task_name, deadline, progress, status, link_file, additional_link ) 
values 
(null, $param, '$task_name', '$deadline', '', 'Doing', '', '$additional')");

header("location: ../?id=".$param."");
