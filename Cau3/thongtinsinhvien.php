<!DOCTYPE html>
<html>
    <fieldset style="width: 200px;">
        <p style="color: skyblue;">Thông tin sinh viên:</p>
    <p style="color: blue;">Tên:
    <?php

    $name = $_GET['name'];
        echo $name;
    ?>
    </p>
    <p style="color: blue;">Password: 
    <?php

    $pass = $_GET['pass'];
        echo $pass;
    ?>
    </p>
    </fieldset> 
    
</html>