<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng tìm kiếm</title>
</head>
<body>
    <?php
        if(isset($_POST['n'])){
            $n = $_POST['n'];
        }
        else $n="";
        $a = array();

        function tim_kiem($a, $n){
            for($i=0; $i < count($a); $i++){
                if($a[$i] === $n){
                    return $i;
                    break;
                }
            }
            return -1;
        }

        $chuoi = "";
        $kq_chuoi = "";
        $kq = "";
        
        if(isset($_POST['btnTimKiem'])){
            $chuoi = $_POST['nmang'];
            $a = explode(", ", $chuoi);
            $kq_chuoi = implode(", ", $a);
            $vitri = tim_kiem($a, $n);
            if($vitri != -1){
                $kq = "Tìm thấy " . $n . " tại vị trí thứ " . $vitri ." của mảng";
            }
            else{
                $kq = "Không tìm thấy số " . $n . " trong mảng";
            }
        }

    ?>
    <form action="" method="POST">
        <table style="width:500px;" align="center" bgcolor="#20B2AA" cellpadding="2" cellspacing="2">
            <tr bgcolor="#008080">
    	        <th colspan="3" align="center"><h3><i><font color="white">TÌM KIẾM</font></i></h3></th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="nmang" value="<?php echo $chuoi; ?>" size="40"/></td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td><input type="text" name="n" value="<?php echo $n; ?>" size="5"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnTimKiem" value="Tìm kiếm"/></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="imang" value="<?php echo $kq_chuoi; ?>" size="40" disabled="disabled"/></td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td><input type="text" name="kq" value="<?php echo $kq; ?>" size="40" disabled="disabled"/></td>
            </tr>
            <tr >
                <td colspan="2" align="center" ><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
            </tr>
        </table>
    </form>
</body>
</html>