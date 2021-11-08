<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kết quả thi đại học</title>
</head>
<body>
    <?php
        if(isset($_POST["toan"]))
            $toan = trim($_POST["toan"]);
        else
            $toan = "";
        if(isset($_POST["ly"]))
            $ly = trim($_POST["ly"]);
        else
            $ly = "";
        if(isset($_POST["hoa"]))
            $hoa = trim($_POST["hoa"]);
        else
            $hoa = "";
        if(isset($_POST["diemChuan"]))
            $diemChuan = trim($_POST["diemChuan"]);
        else
            $diemChuan = "";
        if(isset($_POST["tinh"]))
            if(is_numeric($toan) && $toan >= 0 && is_numeric($ly) && $ly >= 0 && is_numeric($hoa) && $hoa >= 0 && is_numeric($diemChuan) && $diemChuan > 0)
            {
                $tongDiem = $toan + $hoa + $ly;
                if($tongDiem >= $diemChuan)
                {
                    $ketQua = "Đậu";
                }
                else
                    $ketQua = "Rớt";
            }
            else
            {
                echo "Xin vui lòng nhập lại";
                $toan = 0;
                $ly = 0;
                $hoa = 0;
                $diemChuan = 0; 
                $tongDiem = 0;
                $ketQua = "";
            }
        else
        {
            $toan = 0;
            $ly = 0;
            $hoa = 0;
            $diemChuan = 0; 
            $tongDiem = 0;
            $ketQua = "";
        }
    ?>
    <form action="" method="post">
        <table border="0" bgcolor = "pink">
            <tr bgcolor = "#ffc0cbb8">
                <th colspan="2" align="center">KẾT QUẢ THI ĐẠI HỌC</th>
            </tr>
            <tr>
                <td>Toán:</td>
                <td><input type="text" name="toan" value="<?php echo $toan?>"></td>
            </tr>
            <tr>
                <td>Lý</td>
                <td><input type="text" name="ly" value="<?php echo $ly?>"></td>
            </tr>
            <tr>
                <td>Hóa</td>
                <td><input type="text" name="hoa" value="<?php echo $hoa?>"></td>
            </tr>
            <tr>
                <td>Điểm chuẩn</td>
                <td><input type="text" name="diemChuan" value="<?php echo $diemChuan?>"></td>
            </tr>
            <tr>
                <td>Tổng điểm</td>
                <td><input type="text" name="tongDiem" disabled="disabled" value="<?php echo $tongDiem?>"></td>
            </tr>
            <tr>
                <td>Kết quả thi</td>
                <td><input type="text" name="ketQua" disabled="disabled" value="<?php echo $ketQua?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="tinh" value="Xem kết quả"></td>
            </tr>
        </table>
    </form>
</body>
</html>