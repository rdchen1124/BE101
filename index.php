<?php 
//使用conn.php(連線模組)來連接 SQL 的範例
require_once("conn.php");
if(!empty($conn->connect_error)){
    die("資料庫連線錯誤!!"."<br>");
}
else{
    echo "資料庫連線成功!!"."<br>";
}

$result = $conn->query("SELECT * FROM `users`;");
while ($row = $result->fetch_assoc()) {
    echo "id : ".$row['id']."<br>";
    echo "username : ".$row['username']."<br>";
}
?>

<form method='POST' action="add.php">
    name : <input name='username' />
    <input type='submit' />
</form>