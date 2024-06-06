<?php
    error_reporting(0); // 關閉錯誤報告
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { // 如果Session沒有id
        echo "請登入帳號";   // 網頁印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立資料庫連結
        $sql="delete from user where id='{$_GET["id"]}'"; // 資料庫刪除指令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ // 如果查詢指令錯誤
            echo "使用者刪除錯誤"; // 印出使用者刪除錯誤
        }else{ // 如果成功
            echo "使用者刪除成功"; // 印出使用者刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 三秒後跳轉到18.user.php
    }
?>
