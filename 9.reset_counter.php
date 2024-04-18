<?php
    session_start(); // 啟動會話
    unset($_SESSION["counter"]); // 刪除會話中的計數器
    echo "counter重置成功...."; // 輸出重置成功訊息
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; // 重定向到指定頁面


?>
