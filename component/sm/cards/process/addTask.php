<?php

include '../../../../src/connection/connection.php';

$param = $_POST["param"];
$task_name = $_POST["task_name"];
$deadline = $_POST["deadline"];
$additional = $_POST["additional"];
$desc = $_POST["desc"];

mysqli_query($connect, "INSERT INTO listtask ( idlistTask, iddetailOrder, task_name, deadline, progress, status, link_file, additional_link, description ) 
values 
(null, $param, '$task_name', '$deadline', '', 'Doing', '', '$additional', '$desc')");

header("location: ../?id=".$param."");
