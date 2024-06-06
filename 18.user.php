<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); // 關閉錯誤報告

        session_start(); // 啟動Session
        if (!$_SESSION["id"]) {  // 如果Session沒有id
            echo "請登入帳號"; // 網頁印出請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
        }
        }
        else{   //有id
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立資料庫連結
            $result=mysqli_query($conn, "select * from user"); // 從資料庫查詢資料
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";  // 印出表格
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
