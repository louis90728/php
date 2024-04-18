<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 用於建立到名為 "db4free.net" 的資料庫伺服器的連接，使用帳號 "immust" 和密碼 "immustimmust" 進行驗證。
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); // "user" 的資料表發送一個 SQL 查詢，以擷取所有欄位的資料，並將結果存儲在 $result 變數中。
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; // 將變數 $login 設置為布林值 FALSE，表示登入狀態為未驗證
   while ($row=mysqli_fetch_array($result)) { // 當資料庫查詢結果還有下一行資料時，會從結果集中提取一行資料並存儲在 $row 變數中，然後執行迴圈內的程式碼區塊。
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; // 檢查從表單中提交的帳號和密碼是否與資料庫中的相符，如果是的話，則將 $login 變數設置為 TRUE，表示登入成功
     }
   }  
   if ($login==TRUE) // 檢查變數 $login 是否為 TRUE，如果是的話，表示登入已經成功，將執行相應的程式碼
     echo "登入成功"; // 提示使用者登入操作已經成功完成。
  else
     echo "帳號/密碼 錯誤"; // 提示使用者帳號密碼輸入錯誤
?>
