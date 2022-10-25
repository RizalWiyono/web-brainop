<?php

include '../../../../src/connection/connection.php';

$id = $_POST["iduser"];
$date = date("Y-m-d"); 
$chat = $_POST["chat"];

mysqli_query($connect, "INSERT INTO chat 
( idchat, iddataUser, date, chatUser, chatAdmin, status) 
values 
(null, $id, '$date', ' ', '$chat', 'Read')");

header("location: ../?id=".$id);
