<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tính tiền lương karaoke</title>
</head>
<body>
    <?php
        if(isset($_POST["gioBD"]))
            $gioBD = trim($_POST["gioBD"]);
        else
            $gioBD = "";
        if(isset($_POST["gioKT"]))
            $gioKT = trim($_POST["gioKT"]);
        else
            $gioKT = "";
        if(isset($_POST["tinh"]))
            if(is_numeric($gioBD) && $gioBD >= 0 && is_numeric($gioKT) && $gioKT >= 0 && $gioBD < $gioKT)
            {
                if($gioBD > 24)
                    echo "Hiện tại không phải giờ làm việc";
                else
                    if($gioBD >= 17 && $gioBD <= 24)
                        $tienTT = ($gioKT - $gioBD) * 45000;
                    else
                        if($gioBD >= 10 && $gioBD < 17)
                            if($gioKT <= 17)
                                $tienTT = ($gioKT - $gioBD) * 20000;
                            else
                                if($gioKT < 17 && $gioKT <= 24)
                                    $tienTT = (17 - $gioBD) * 20000 + ($gioKT - 17) * 45000;
                                else
                                    $tienTT = (17 - $gioBD) * 20000 + (24 - 17) * 45000;
                        else
                            if($gioKT > 17 && $gioKT <= 24)
                                $tienTT = (17 - 10) * 20000 + ($gioKT - 17) * 45000;
                            else
                                if($gioKT >= 10 && $gioKT <= 17)
                                    $tienTT = ($gioKT - 10) * 20000;
                                else
                                    echo "Hiện tại không phải giờ làm việc";
            }
            else
            {
                echo "Giờ kết thúc phải lớn hơn giờ bắt đầu";
                $gioBD = 0;
				$gioKT = 0;
				$tienTT = 0;
            }
        else
        {
			$gioBD = 0;
			$gioKT = 0;
			$tienTT = 0;
        }
    ?>
    <form action="" method="post">
        <table border="0" bgcolor = "#0072ff">
            <tr bgcolor = "#0072ffcf" >
                <th colspan="2" align="center" style="color:#fff">TÍNH TIỀN KARAOKE</th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td><input type="text" name="gioBD" value="<?php echo $gioBD?>"></td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td><input type="text" name="gioKT" value="<?php echo $gioKT?>"></td>
            </tr>
            <tr>
                <td>Tiền thanh toán</td>
                <td><input type="text" name="tienTT" disabled="disabled" value="<?php echo $tienTT?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="tinh" value="Tính tiền"></td>
            </tr>
        </table>
    </form>
</body>
</html>