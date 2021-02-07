<?php
require_once("conn.php");
if(empty($_POST['id'])||empty($_POST['username'])){
    die("請傳入 id 及 username!");
}
// echo "id : ".$_GET['id'];
$id = $_POST['id'];
$username = $_POST['username'];
$sql = sprintf ("UPDATE `users` SET username = '%s' WHERE id = %d ", $username, $id);
echo $sql."<br>";
$result = $conn->query($sql);
if(!$result){
    die($conn->error);
}
if ($conn->affected_rows >= 1) {
    echo '編輯成功';
  } else {
    echo '無此資料';
  }
//header("Location: index.php");
?>