<?php 
//使用conn.php(連線模組)來連接 SQL 的範例
require_once("conn.php");
if(!empty($conn->connect_error)){
    die("資料庫連線錯誤!!"."<br>");
}
else{
    echo "資料庫連線成功!!"."<br>";
}

$result = $conn->query("SELECT * FROM `users` ORDER BY id ASC;");
while ($row = $result->fetch_assoc()) {
    echo "id : ".$row['id']." "."<a href='delete.php?id=".$row['id']."'>刪除使用者</a>"."<br>";
    echo "username : ".$row['username']."<br>";
}
?>
<h2>新增使用者</h2>
<form method='POST' action="add.php">
    name : <input name='username' />
    <input type='submit' />
</form>
<h2>編輯使用者</h2>
<form method='POST' action="update.php">
    id : <input name='id' />
    name : <input name='username' />
    <input type='submit' />
</form>