<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) // 檢查從表單中提交的帳號和密碼是否等於"john"和"john1234"，如果條件成立則執行相應的程式碼。
        echo "登入成功"; // 在網頁上顯示登入成功
    else
        echo "登入失敗"; // 在網頁上顯示登入失敗
?>
