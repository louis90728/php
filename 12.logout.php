<?php
    session_start(); // 啟動 session 功能
    unset($_SESSION["id"]); // 刪除名為 "id" 的 session 變數
    echo "登出成功....";  // 輸出登出成功的訊息
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; // 設定網頁重新導向，延遲 3 秒後導向到 2.login.html

?>
