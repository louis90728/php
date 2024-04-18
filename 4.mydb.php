<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 這行程式碼是用於建立到指定資料庫伺服器的連接，並選擇指定的資料庫，使用指定的帳號和密碼進行驗證。
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user"); // 從user的資料表中擷取所有資料，並將結果存儲在$result變數中。
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result); // 從資料庫查詢結果集中提取下一行作為關聯數組或數字數組，並將其存儲在 $row 變數中。
    echo $row["id"] . " " . $row["pwd"]."<br>"; // "id" 和 "pwd" 欄位的數據，並插入 HTML 換行元素 "<br>" 以產生換行效果。
    $row=mysqli_fetch_array($result); // 從資料庫查詢結果集中提取下一行作為關聯數組或數字數組，並將其存儲在 $row 變數中。
    echo $row["id"] . " " . $row["pwd"]; // 用來輸出$row 關聯數組中 "id" 和 "pwd" 兩個鍵對應的值，並以空格分隔
?>
