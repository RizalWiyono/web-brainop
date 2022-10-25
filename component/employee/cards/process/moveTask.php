<?php

include '../../../../src/connection/connection.php';
session_start();

$param = $_POST["param"];
$id = $_POST["id"];
$status = $_POST["status"];
$idAccount = $_SESSION['idaccount'];
$queryName  = mysqli_query($connect, "SELECT * FROM dataemployee WHERE idaccount=$idAccount");
while($row = mysqli_fetch_array($queryName)){
    $iddataEmployee = $row["iddataEmployee"];
}

$date = date("Y-m-d H:i:s");

if($status === "Doing") {
    mysqli_query($connect, "UPDATE listtask SET status='Progress' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Progress', '$date')");
}elseif($status === "Progress") {
    mysqli_query($connect, "UPDATE listtask SET status='Check' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Check', '$date')");
}elseif($status === "Check") {
    mysqli_query($connect, "UPDATE listtask SET status='Done' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Done', '$date')");
}elseif($status === "Back-Progress") {
    mysqli_query($connect, "UPDATE listtask SET status='Doing' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Doing', '$date')");
}elseif($status === "Back-Check") {
    mysqli_query($connect, "UPDATE listtask SET status='Progress' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Progress', '$date')");
}elseif($status === "Back-Done") {
    mysqli_query($connect, "UPDATE listtask SET status='Check' WHERE idlistTask=$id && iddetailOrder='$param'");
    mysqli_query($connect, "INSERT INTO activity (idactivity, iddataEmployee, idlistTask, activity, date)
    VALUES (NULL, $iddataEmployee, $id, 'Memindahkan task ke Check', '$date')");
}

header("location: ../?id=".$param."");
