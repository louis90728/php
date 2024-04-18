<?php
    session_start(); // 啟動PHP會話（session）
    if (!isset($_SESSION["counter"])) // 檢查是否已經設置了會話變數 
        $_SESSION["counter"]=1; // 如果沒有，將計數器設置為1。
    else
        $_SESSION["counter"]++; // 將計數器值增加1

    echo "counter=".$_SESSION["counter"]; // 在網頁上輸出計數器的值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; // 點擊該連結時將重置計數器的值
?>
