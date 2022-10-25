<?php
    include '../../../../src/connection/connection.php';

    $idAccount = $_POST["idAccount"];

    mysqli_query($connect, "DELETE FROM account WHERE idaccount=$idAccount");
    mysqli_query($connect, "DELETE FROM dataemployee WHERE idaccount=$idAccount");
    header("location: ../index.php?process=dsuccess");
?>