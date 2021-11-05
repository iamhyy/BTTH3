<!DOCTYPE html>
<html>
    <head>
        <style>
            table, td{
                border: 1px solid black;
                border-collapse: collapse;
                background: #99ccff;
                border-color: violet;
            }
        </style>
    </head>
    <body>
        <form method="get" action="#">
            <h3 style="color: blue;">Chương trình cộng, trừ, nhân, chia hai phân số</h3>
        <table >
            <tr>
                <td width="280px">
                    <label>Tử phân số 1</label>
                    <input type="number" name="tua"><br><br>
                    <label>Mẫu phân số 1</label>
                    <input type="number" name="maua"><br><br>
                    <label>Tử phân số 2</label>
                    <input type="number" name="tub"><br><br>
                    <label>Mẫu phân số 2</label>
                    <input type="number" name="maub"><br><br>
                    <input type="submit" value="=" name="result" style="width: 50px; border-radius: 20%;" >
                    <p>
                        <?php
                            
                            $tu1 = (float)$_GET['tua'];
                            $mau1 = (float)$_GET['maua'];
                            $tu2 = (float)$_GET['tub'];
                            $mau2 = (float)$_GET['maub'];
                            include "phanso.php";
                            $phansoa = new phanso($tu1, $mau1);
                            $phansob = new phanso($tu2, $mau2);
                            if(isset($_GET['result'])&&($_GET['result']=="=")){
                                if($_GET['tinh'] == "+"){ 
                                    $kq = $phansoa->tong($phansob);
                                    echo "Tổng ".$tu1."/".$mau1."+".$tu2."/".$mau2."=".$kq;
                                }else if($_GET['tinh'] == "-"){ 
                                    $kq = $phansoa->hieu($phansob);
                                    echo "Hiệu ".$tu1."/".$mau1."-".$tu2."/".$mau2."=".$kq;
                                }else if($_GET['tinh'] == "*"){ 
                                    $kq = $phansoa->tich($phansob);
                                    echo "Tích ".$tu1."/".$mau1."*".$tu2."/".$mau2."=".$kq;
                                }else if($_GET['tinh'] == "/"){ 
                                    $kq = $phansoa->thuong($phansob);
                                    echo "Thương ".$tu1."/".$mau1."/".$tu2."/".$mau2."=".$kq;
                                }
                                
                            }
                        ?>
                    </p>
                </td>
                <td width="150px">
                <fieldset>
                <legend> Phép tính</legend>
                    <input type="radio" name="tinh" value="+">+<br>
                    <input type="radio" name="tinh" value="-">-<br>
                    <input type="radio" name="tinh" value="*">*<br>
                    <input type="radio" name="tinh" value="/">/<br>
                </fieldset>  
                </td>
            </tr>
        </table>
        </form>
        
    </body>
</html>