<?php
    error_reporting(0); // 用來關閉 PHP 的錯誤報告，從而阻止顯示錯誤訊息和警告。
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立"db4free.net" 資料庫伺服器的連接，使用帳號 "immust" 和密碼 "immustimmust" 進行驗證。
    $result=mysqli_query($conn, "select * from bulletin"); // 發送SQL 查詢從"bulletin"資料表中擷取所有欄位的資料。
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; // 建立一個具有邊框的表格，包含了五個欄位的標題行，分別是「佈告編號」、「佈告類別」、「標題」、「佈告內容」和「發佈時間」。
    while ($row=mysqli_fetch_array($result)){ // 當資料庫查詢結果還有下一行資料時，從結果集中提取一行資料並存儲在 $row 變數中，然後執行迴圈內的程式碼區塊。
        echo "<tr><td>"; // 定義一個表格行 定義一個表格單元
        echo $row["bid"]; // 顯示資料庫裡bid的資料
        echo "</td><td>"; // </td>前一個表格的結束 <td>下個表格的開始
        echo $row["type"]; // 顯示資料庫裡type的資料
        echo "</td><td>"; 
        echo $row["title"]; // 顯示資料庫裡title的資料
        echo "</td><td>";
        echo $row["content"]; // 顯示資料庫裡content的資料
        echo "</td><td>";
        echo $row["time"]; // 顯示資料庫裡time的資料
        echo "</td></tr>"; // </td>前一個表格的結束 </tr>結束一個表格行
    }
    echo "</table>" // html表格的結尾
?>
