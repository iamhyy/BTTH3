<!DOCTYPE html>
<html>
    <head>
        <style>
            table, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="get">
            <table >
                <tr>
                    <td>Hệ số a</td>
                    <td><input type="number" name="a"></td>
                </tr>
                <tr>
                    <td>Hệ số b</td>
                    <td><input type="number" name="b"></td>
                </tr>
                <tr> 
                    <td>Hệ số c</td>
                    <td><input type="number" name="c"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Giải" name="submit"></td>
                </tr>
            </table>
        </form>
        <?php
if(isset($_GET['submit'])){
    $a = (float)$_GET['a'];
    $b = (float)$_GET['b'];
    $c = (float)$_GET['c'];
    
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
        }
        return;
    }
    if ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }

}
?>
    </body>
</html>

