<?php
    error_reporting(0); // 關閉錯誤報告顯示
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { //如果Session沒有id
        echo "please login first"; //網頁印出請登入帳號 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉網頁到2.login.html
    }
    else{
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //資料庫連線
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}"); //資料庫查詢指令
        $row=mysqli_fetch_array($result); //資料庫查詢指令
        $checked1=""; //變數1設定空字串
        $checked2=""; //變數2設定空字串
        $checked3=""; //變數3設定空字串
        if ($row['type']==1) //如果type 1被勾選
            $checked1="checked"; //設定變數1字串內容
        if ($row['type']==2) //如果type 2被勾選
            $checked2="checked"; //設定變數2字串內容
        if ($row['type']==3) //如果type 3被勾選
            $checked3="checked"; //設定變數3字串內容
        echo "
        <html>
            <head><title>新增佈告</title></head> //網頁標頭
            <body>
                <form method=post action=27.bulletin_edit.php> //建立一個表單
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form> //表單結尾
            </body>
        </html>
        ";
    }
?>
