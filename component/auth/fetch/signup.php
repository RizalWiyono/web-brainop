<?php
include "../../../src/connection/connection.php";

$email = $_POST["email"];
$name = $_POST["name"];
$password = md5($_POST["password"]);

mysqli_query($connect, "INSERT INTO account ( idaccount, idlistAccess, email, password ) 
values 
(null, 1, '$email', '$password')");

$queryFindIdAccount  = mysqli_query($connect, "SELECT idaccount FROM account WHERE email='$email'");
while($row = mysqli_fetch_array($queryFindIdAccount)){
    $idAccount = $row["idaccount"];
}

mysqli_query($connect, "INSERT INTO dataemployee ( iddataemployee, idaccount, name, role ) 
values 
(null, '$idAccount', '$name', 'User')");

header("location: ../login.php?process=success");
?>