<?php
require_once("conn.php");
$result = $conn->query("INSERT INTO `users`(username) VALUES ('') ");

if(!$result){
    die($conn->error);
}
>