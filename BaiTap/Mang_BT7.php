<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg", "chuot.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg"
        , "than.jpg", "dau.jpg", "tuat.jpg");

        if(isset($_POST["namDL"]))
            $namDL = trim($_POST["namDL"]);
        else
            $namDL = "";
        if(isset($_POST["namAL"]))
            $namAL = trim($_POST["namAL"]);
        else
            $namAL = "";
        if(isset($_POST["kiemTra"]))
            if( is_numeric( $namDL ))
            {
                $namAL = $mang_can[($namDL - 3)%10]." ".$mang_chi[($namDL -3)%12];
                $hinh = $mang_hinh[($namDL - 3)%12];
                $hinhanh = "<img src='./images/$hinh'>";
            }
            else
            {
                $hinhanh = "";
                echo "<p align = 'center'>Vui lòng nhập lại ô năm dương lịch</p>";
            }
                
        else
            {
                $namDL = "";
                $namAL = "";
                $hinhanh = "";
            }
    ?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <th colspan="3">TÍNH NĂM ÂM LỊCH</th>
            </tr>
            <tr>
                <td>Năm dương lịch</td>
                <td></td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="namDL" value="<?php echo $namDL ?>">
                </td>
                <td>
                    <input type="submit" value="=>" name="kiemTra">
                </td>
                <td>
                    <input type="text" name="namAL" value="<?php echo $namAL ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">                
                     <?php echo $hinhanh ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>