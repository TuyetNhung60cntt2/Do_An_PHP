<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>tinh dien tich hình tròn</title>
</head>
<body>
    <?php 
        if(isset($_POST['bankinh']))  
            $bankinh=trim($_POST['bankinh']); 
        else 
            $bankinh=0;
        if(isset($_POST['tinh']))
            if (is_numeric($bankinh) && $bankinh > 0)  
            {
                $dientich= $bankinh * $bankinh * 3.14;
                $chuvi = $bankinh * 2 * 3.14;
            }
            else 
            {
                echo "<font color='red'>Vui lòng nhập lại! </font>"; 
                $dientich="";
                $chuvi="";
            }
        else 
        {
            $dientich=0;
            $chuvi=0;
        }
    ?>
    <form align='center' action="" method="post">
        <table border="0">
            <tr bgcolor="yellow">
                <th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH HÌNH TRÒN</font></h3></th>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="bankinh" value="<?php  echo $bankinh;?> "/></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuvi" disabled="disabled" value="<?php  echo $chuvi;?> "/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>