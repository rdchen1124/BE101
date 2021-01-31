<?php 
//使用conn.php(連線模組)來連接 SQL 的範例
require_once("conn.php");
print_r($conn);
echo "<br>";
//echo $conn->connect_error;
if(empty($conn->connect_error)){
    die("資料庫連線成功!!"."<br>");
}
?>