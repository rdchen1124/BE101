<?php
require_once("conn.php");
if(empty($_POST['name'])){
    die("請輸入username");
}
$username = $_POST['name'];
$sql = sprintf("INSERT INTO `users`(username) VALUES (%s) ", $username);
$result = $conn->query($sql);

if(!$result){
    die($conn->error);
}
header("Location : index.php");
?>