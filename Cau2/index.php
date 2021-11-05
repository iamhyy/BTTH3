<form method="get" acction="#">
    Nhập tên cần tìm <input type="text" name="tencantim">
    <input type="Submit" name="Tim" value="Tìm"><br><br>

    Thêm phần tử vào cuối mảng <br>
    Nhập tên: <input type="text" name="tencanthem"><br>
    Nhập tuổi: <input type="text" name="tuoicanthem"><br>
    <input type="Submit" name="Them" value="Thêm"><br><br>

    Tìm phần tử theo tuổi <br>
    Nhập tuổi: <input type="text" name="timtentheotuoi"><br>
    <input type="submit" name="TimTheoTuoi" value="Tìm phần tử đầu tiên theo tuổi"><br><br>

    Xóa phần tử theo tên
    Nhập tên: <input type="text" name="xoatheoten"><br>
    <input type="submit" name="xoatheoten" value="Xóa phân tử theo tên"><br><br>
    
    <input type="submit" name="TimTuoiHon20" value="Tìm tuổi lớn hơn 20"><br><br>

    <input type="submit" name="SapXepTang" value="Sắp xếp tăng theo số tuổi"><br><br>

    

    
</form>

<?php
    $ban=array("Tuấn"=>21,"Tú"=>19,"Tâm"=>22,"Tùng"=>20);

    function InMang($array){
        foreach($array as $ten => $tuoi)
        {
            echo $ten."\t".$tuoi."<br>";
        }
    }
    function TimTen($array, $str)
    {
        foreach($array as $ten => $tuoi)
        {
            if($ten==$str)
            {
                return true;
            } 
        }
        return false;
    }
       
    //Tìm tên
    
    if(isset($_GET['Tim'])&&($_GET['Tim']=="Tìm"))
    {
        $ten = $_GET['tencantim'];
        if(TimTen($ban,$ten)==true)
        {
            echo "Tìm thấy ".$ten." trong mảng<br>";
        }
        else
        {
            echo "Tìm không thấy <br>";
        }
    }


    //Xuất tên có tuổi lớn hơn 20
    function TimTenHon20($array)
    {
        echo "Những phần tử có số tuổi lớn hơn 20 là: <br>";
        foreach($array as $ten => $tuoi)
        {
            if($tuoi >20)
            {
                echo $ten."\t".$tuoi."<br>";
            } 
        }
        return false;
    }
    if(isset($_GET['TimTuoiHon20'])&&($_GET['TimTuoiHon20']=="Tìm tuổi lớn hơn 20"))
    {
        TimTenHon20($ban);
    }

    //Sắp xếp mảng tăng theo tuổi
    function SapXepTang($array)
    {
        asort($array);
        echo "Mảng được sắp xếp lại theo số tuổi tăng là: <br>";
        InMang($array);
        return false;
    }
    if(isset($_GET['SapXepTang'])&&($_GET['SapXepTang']=="Sắp xếp tăng theo số tuổi"))
    {
        SapXepTang($ban);
    }

    //Thêm 1 phần tử vào cuối mảng
    function ThemVaoCuoiMang($array,$ten,$tuoi)
    {
        // $new = array($ten=>$tuoi);
        // $array = array_merge($array,$new);
        $array[$ten]= $tuoi;
        echo "Mảng được thêm phần tử mới là: <br>";
        InMang($array);
        return false;
    }
    if(isset($_GET['Them'])&&($_GET['Them']=="Thêm"))
    {
        $ten = $_GET['tencanthem'];
        $tuoi = $_GET['tuoicanthem'];
        ThemVaoCuoiMang($ban,$ten,$tuoi);
    }

    //Tìm 1 phần tử theo tuổi
    function TimTheoTuoi($array,$tuoi)
    {
        echo "Phần tử trong mảng có tuổi bằng ";
        echo $tuoi;
        echo " là: ";
        echo array_search($tuoi,$array);
        return false;
    }
    if(isset($_GET['TimTheoTuoi'])&&($_GET['TimTheoTuoi']=="Tìm phần tử đầu tiên theo tuổi")){
        $tuoi = $_GET['timtentheotuoi'];
        TimTheoTuoi($ban,$tuoi);
    }

    //Xóa theo tên
    function XoaTheoTen($array,$ten)
    {
        unset($array[$ten]);
        return false;
    }
    if(isset($_GET['xoatheoten'])&&($_GET['xoatheoten']=="Xóa phân tử theo tên")){
        $ten = $_GET['xoatheoten'];
        XoaTheoTen($ban,$ten);
    }
?>