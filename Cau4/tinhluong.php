<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border: 1px solid black;
                border-collapse: collapse;
                background: #ff9933;
            }
        </style>
    </head>
    <body>
        <form>
            <table >
                <tr>
                    <td>Mã nhân viên</td>
                    <td><input type="text" name="manv"></td>
                </tr>
                <tr>
                    <td>Tên nhân viên</td>
                    <td><input type="text" name="tennv"></td>
                </tr>
                <tr>
                    <td>Số ngày làm việc</td>
                    <td><input type="text" name="ngaylam"></td>
                </tr>
                <tr>
                    <td>Lương ngày</td>
                    <td><input type="text" name="luongngay"></td>
                </tr>
                <tr>
                    <td>Nhân viên quản lý</td>
                    <td><input type="checkbox" name="nvql" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Lương tháng"></td>
                </tr>
            </table>
        </form>
        <?php
            $ma = $_GET['manv'];
            $ten = $_GET['tennv'];
            $ngay = (float)$_GET['ngaylam'];
            $luong = (float)$_GET['luongngay'];
            include "nhanvien.php";
            $nhanvien = new nhanvien($ma, $ten, $ngay, $luong);
            $ql = new nhanvienql($ma, $ten, $ngay, $luong);
            if(isset($_GET['submit'])&&($_GET['submit']=="Lương tháng")){
                
                if($_GET['nvql'] == true){
                    $rs = $ql->Gan($ma, $ten, $ngay, $luong);
                    $luong = $ql->TinhLuong();
                    echo " -- lương tháng: ".$luong." ";
                    $ql->InNhanVien();
                    
                }else{
                    $rs = $nhanvien->Gan($ma, $ten, $ngay, $luong);
                    $luong = $nhanvien->TinhLuong();
                    echo " -- lương tháng: ".$luong." ";
                    $nhanvien->InNhanVien();
                }
            }
        ?>
    </body>
</html>