<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
 <html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>tinh tiền điện</title>
</head>
<body>
    <?php 
        if(isset($_POST['ten']))  
            $ten=trim($_POST['ten']); 
        else 
            $ten="";
        if(isset($_POST['csCu']))  
            $csCu=trim($_POST['csCu']); 
        else 
            $csCu=0;
        if(isset($_POST['csMoi']))  
            $csMoi=trim($_POST['csMoi']); 
        else 
            $csMoi=0;
        if(isset($_POST['donGia']))  
            $donGia=trim($_POST['donGia']); 
        else 
            $donGia=20000;    
        if(isset($_POST['tinh']))
            if (is_numeric($donGia) && $donGia > 0 && is_numeric($csCu) && $csCu > 0 && is_numeric($csMoi) && $csMoi > 0 && $csMoi > $csCu)  
            {
                $soTien = ($csMoi - $csCu) * $donGia;
            }
            else 
            {
                echo "<font color='red'>Vui lòng nhập lại! </font>"; 
                $soTien = "";
            }
        else 
        {
            $soTien = 0;
        }
    ?>
    <form align='center' action="" method="post">
        <table border="0">
            <tr bgcolor="yellow">
                <th colspan="2" align="center"><h3><font color="red">THANH TOÁN TIỀN ĐIỆN</font></h3></th>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="ten" value="<?php  echo $ten;?> "/></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="csCu" value="<?php  echo $csCu;?> "/></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="csMoi" value="<?php  echo $csMoi;?> "/></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="donGia" value="<?php  echo $donGia;?> "/></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền cần thanh toán:</td>
                <td><input type="text" name="soTien" disabled="disabled" value="<?php  echo $soTien;?> "/></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>