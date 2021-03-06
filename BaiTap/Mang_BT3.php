<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng phát sinh tính toán</title>
    
</head>
<body>
    <?php
        $mang = array();
        $mangkq = "";
        $max = "";
        $min = "";
        $tong = "";
        function tao_mang($n){
            for($i = 0; $i < $n;$i++){
                $mang[$i] = rand(0, 20);
            }
            return $mang;
        }
        function xuat_mang($mang){
            $n = count($mang);
            $chuoi = "";
            for($i = 0 ; $i<$n; $i++){
                $chuoi = implode(" ", $mang);
            }
            return $chuoi;
        }

        function tim_max($mang){
            $n = count($mang);
            $max = $mang[0];
            for($i = 0; $i < $n; $i++){
                if($mang[$i] > $max)
                    $max = $mang[$i];
            }
            return $max;
        }

        function tim_min($mang){
            $n = count($mang);
            $min = $mang[0];
            for($i = 0; $i < $n; $i++){
                if($mang[$i] < $min)
                    $min = $mang[$i];
            }
            return $min;
        }

        function tong_mang($mang){
            $n = count($mang);
            $tong = 0;
            for($i = 0; $i < $n; $i++){
                $tong += $mang[$i];
            }
            return $tong;
        }

        if(isset($_POST['n'])){
            $n = $_POST['n'];
            $mang = tao_mang($n);
            $mangkq= xuat_mang($mang);
            $max = tim_max($mang);
            $min = tim_min($mang);
            $tong = tong_mang($mang);
        }
        else $n = "";
        
    ?>
    <form action="" method="post">
        <table style="width:500px;" align="center" bgcolor="#20B2AA" cellpadding="2" cellspacing="2">
            <tr>
                <th colspan="3" align="center"><h3><i><font color="white">PHÁT SINH MẢNG VÀ TÍNH TOÁN</font></i></h3></th>
            </tr>
            <tr>
                <td>Nhập số phần tử:</td>
                <td><input type="text" name="n" value="<?php echo $n; ?>" size="20"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnTinh" value="Phát sinh và tính toán"/></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang" disabled="disabled" value="<?php echo $mangkq; ?>" size="45"/></td>
            </tr>
            <tr>
                <td>GTLN(MAX) trong mảng:</td>
                <td><input type="text" name="max" disabled="disabled" value="<?php echo $max; ?>" size="20"/></td>
            </tr>
            <tr>
                <td>GTNN(MIN) trong mảng:</td>
                <td><input type="text" name="min" disabled="disabled" value="<?php echo $min; ?>" size="20"/></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" name="tong" disabled="disabled" value="<?php echo $tong; ?>" size="20"/></td>
            </tr>
        </table>
    </form>
</body>
</html>