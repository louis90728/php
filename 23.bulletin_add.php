<?php
    error_reporting(0); // 關閉錯誤報告顯示
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { //如果Session沒有id
        echo "please login first"; //網頁印出請登入帳號  
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
    }
    else{ //有id
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //資料庫連線
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";  //資料庫查詢指令
         if (!mysqli_query($conn, $sql)){ //資料庫查詢指令出錯
            echo "新增命令錯誤"; //印出字串
        }
        else{ //查詢指令成功
            echo "新增佈告成功，三秒鐘後回到網頁"; //印出字串
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //三秒後跳轉網頁11.bulletin.php
        }
    }
?>
