<?php
    include '../../../../src/connection/connection.php';

    $email = $_POST["email"];
    $idAccount = $_POST["idAccount"];
    $name = $_POST["name"];
    $idRole = $_POST["role"];

    $queryAccess  = mysqli_query($connect, "SELECT * FROM listaccess WHERE idlistAcccess='$idRole'");
    while($row = mysqli_fetch_array($queryAccess)){
        $role = $row["name"];
    }

    mysqli_query($connect, "UPDATE account SET email='$email', idlistAccess=$idRole WHERE idaccount=$idAccount");
    mysqli_query($connect, "UPDATE dataemployee SET name='$name', role='$role' WHERE idaccount=$idAccount");
    header("location: ../index.php?process=success");
?>