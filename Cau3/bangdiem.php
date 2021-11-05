<!DOCTYPE html>
<html>
    <head>
        <style >
            table, td{
                border-collapse: collapse;
                border:  1px solid #e67300;
                background: #ffd9b3;
            }
        </style>
    </head>
    <body>
        <form method="get" action = "thongtinsinhvien.php">
        <h3 style="color: #003399;">BẢNG ĐIỂM</h3>
        <p style="color: blue;">Tên:
            <?php
                $name = $_GET['name'];
                echo $name;
            ?>
        </p><input type = "hidden" name = "name" value="<?php
               $name = $_GET['name'];
               echo $name;
            ?>">
            <input type = "hidden" name = "pass" value="<?php
                $pass = $_GET['password'];
                echo $pass;


            ?>">
        
        <table>
            <tr>
                <td>STT</td>
                <td>Tên môn</td>
                <td>Điểm</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Cơ sở dữ liệu</td>
                <td>7</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Phát triển ứng dụng web</td>
                <td>8</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lập trình Java</td>
                <td>7.5</td>
            </tr>
        </table>
        <input style="border: none; color: blue; background: none; font-style: italic; font-family: Times New Roman; font-size: 16px; text-decoration: underline;" type="submit" value="Xem thông tin sinh viên">
            </form>
    </body> 
</html>