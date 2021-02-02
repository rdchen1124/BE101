<?php
require_once("conn.php");
if(empty($_POST['username'])){
    die("請輸入username");
}
echo "username : ".$_POST['username'];
$username = $_POST['username'];
$sql = sprintf("INSERT INTO `users`(username) VALUES ('%s') ", $username);
$result = $conn->query($sql);
if(!$result){
    die($conn->error);
}
header("Location: index.php");
?>