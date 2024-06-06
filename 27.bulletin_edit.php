<?php

    error_reporting(0); // 關閉錯誤報告顯示
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { //如果Session沒有id
        echo "請登入帳號"; //網頁印出請登入帳號 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //資料庫連線
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤"; //如果資料庫指令有錯誤 印出字串
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //三秒後跳轉到網頁11.bulletin.php
        }else{ 
            echo "修改成功，三秒鐘後回到佈告欄列表"; //資料庫指令沒問題
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //三秒後跳轉到網頁11.bulletin.php
        }
    }

?>
