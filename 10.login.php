<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立資料庫連結
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); // 從資料庫查詢資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; // 設定布林值為FALSE
   while ($row=mysqli_fetch_array($result)) { // 檢查用戶提交的帳號和密碼是否與資料庫中的匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; // 如果匹配成功，設置登入狀態為真
     }
   } 
   if ($login==TRUE) {  // 如果登入成功
    session_start(); // 啟動會話
    $_SESSION["id"]=$_POST["id"]; // 將帳號存入會話
    echo "登入成功"; // 輸出登入成功訊息
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 重定向到指定頁面
   }

  else{  // 如果登入失敗
    echo "帳號/密碼 錯誤"; // 輸出帳號/密碼錯誤訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 重定向到登入頁面
  }
?>
