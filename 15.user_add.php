<?php

error_reporting(0); // 關閉錯誤報告
session_start(); // 啟動 Session
if (!$_SESSION["id"]) {  // 如果 Session 中沒有 id
    echo "請登入帳號"; // 網頁印出請登入帳號
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到 2.login.html
}
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立資料庫連結
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; // 資料庫查詢資料指令
   #echo $sql;
   if (!mysqli_query($conn, $sql)) { // 如果查詢指令錯誤
     echo "新增命令錯誤"; // 印出新增命令錯誤
   }
   else{ // 如果成功
     echo "新增使用者成功，三秒鐘後回到網頁"; // 印出新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";// 三秒後跳轉到18.user.php
   } 
}
?>
