<?php
    error_reporting(0); // 關閉錯誤報告
    session_start(); // 啟動會話
    if (!$_SESSION["id"]) {  // 檢查是否已登入
        echo "請先登入"; // 如果尚未登入輸出提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //重定向到登入頁面
    }
    else{ 
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>"; // 如果已登入，顯示歡迎信息和相關操作鏈接
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");// 建立資料庫連接
        $result=mysqli_query($conn, "select * from bulletin");// 從資料庫查詢佈告資料
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";// 顯示佈告資料表格
        while ($row=mysqli_fetch_array($result)){// 迴圈遍歷佈告資料，並顯示每一行的資訊
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>"; // 輸出編輯和刪除連結
            echo $row["bid"];//顯示資料庫裡bid的資料
            echo "</td><td>";//</td>前一個表格的結束 <td>下個表格的開始
            echo $row["type"];//顯示資料庫裡type的資料
            echo "</td><td>"; 
            echo $row["title"];//顯示資料庫裡title的資料
            echo "</td><td>";
            echo $row["content"]; //顯示資料庫裡content的資料
            echo "</td><td>";
            echo $row["time"];//顯示資料庫裡time的資料
            echo "</td></tr>"; // </td>前一個表格的結束 </tr>結束一個表格行
        }
        echo "</table>"; //html表格的結尾
    
    }

?>
