<?php
require_once("conn.php");
if(empty($_GET['id'])){
    die("請傳入id");
}
echo "id : ".$_GET['id'];
$id = $_GET['id'];
$sql = sprintf ("DELETE FROM `users` WHERE id = ('%d') ", $id);
$result = $conn->query($sql);
if(!$result){
    die($conn->error);
}
if ($conn->affected_rows >= 1) {
    echo '刪除成功';
  } else {
    echo '查無資料';
  }
header("Location: index.php");
?>