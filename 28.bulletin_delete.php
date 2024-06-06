<?php
    error_reporting(0); // 關閉錯誤報告顯示
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { //如果Session沒有id
        echo "請登入帳號"; //網頁印出請登入帳號 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳轉網頁到2.login.html
    }
    else{   //有id的話
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //資料庫連線
        $sql="delete from bulletin where bid='{$_GET["bid"]}'"; //資料庫查詢指令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //資料庫連線指令沒問題
            echo "佈告刪除錯誤"; //印出文字到網頁
        }else{ //連線指令沒有問題
            echo "佈告刪除成功"; //印出文字到網頁
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //三秒後跳轉到11.bulletin.php
    }
?>
