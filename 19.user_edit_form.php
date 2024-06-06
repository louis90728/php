<html>
    <head><title>修改使用者</title></head> //網頁標題
    <body>
    <?php
    error_reporting(0); // 關閉錯誤報告
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { // 如果Session沒有id
        echo "請登入帳號"; // 網頁印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");// 建立資料庫連結
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); // 從資料庫查詢資料
        $row=mysqli_fetch_array($result); // 取得查詢結果的一行資料
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
