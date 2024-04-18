<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 用於建立到指定資料庫伺服器的連接，並使用提供的帳號和密碼進行驗證，最後選擇指定的資料庫。
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); // 發送一個 SQL 查詢，從名為 "user" 的資料表中擷取所有欄位的資料。
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) { // 是一個迴圈，當資料庫查詢結果還有下一行資料時，會從結果集中提取一行資料並存儲在 $row 變數中，然後執行迴圈內的程式碼區塊。
     echo $row["id"]." ".$row["pwd"]."<br>"; // 輸出 $row 關聯數組中 "id" 和 "pwd" 兩個鍵對應的值，並以空格分隔，最後插入 HTML 換行元素 "<br>" 以產生換行效果。
   } 
?>
