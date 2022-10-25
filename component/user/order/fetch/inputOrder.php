<?php

include '../../../../src/connection/connection.php';

$project_name = $_POST["project_name"];
$company_name = $_POST["company_name"];
$project_package = $_POST["project_package"];
$app_category = $_POST["app_category"];
$resource = $_POST["resource"];
$deadline = $_POST["deadline"];
$description = $_POST["description"];
$project_package = $_POST["project_package"];
$date = date("Y-m-d"); 
$id = $_POST["iduser"];

mysqli_query($connect, "INSERT INTO detailorder 
( iddetailOrder, iddataUser, project_name, company_name, idappCategory, resource, description, status, date, deadline, project_package) 
values 
(null, $id, '$project_name', '$company_name', '$app_category', '$resource', '$description', 'Konsultasikan', '$date', '$deadline', '$project_package')");


$queryDetailOrder  = mysqli_query($connect, "SELECT * FROM detailorder WHERE project_name='$project_name' && date='$date' && idappCategory='$app_category'");
while($row = mysqli_fetch_array($queryDetailOrder)){
    $iddetailOrder = $row["iddetailOrder"];
}

mysqli_query($connect, "INSERT INTO chat 
( idchat, iddataUser, date, chatUser, chatAdmin) 
values 
(null, $id, '$date', 'tagorder $iddetailOrder', ' ')");

header("location: ../../chat/");
