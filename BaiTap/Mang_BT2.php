<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color: #59D8E6;
        }
        .heading{
            background-color: blue;
            color: white;
            padding: 0.5rem;
        }
        .color-red{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST["ipSo"]))
            $ipSo = trim($_POST["ipSo"]);
        else
            $ipSo = "";
        $KQ = 0;
        $mang = explode(',', $ipSo);

        if(isset($_POST["tong"]))
        {
            $file = fopen("dulieu_bai2.txt", "a") or exit("Khong tim thay file can mo");
                fwrite($file, "\n".$ipSo);
            fclose($file);
    
            for($i = 0; $i < count(explode(',', $ipSo)); $i++)
            {
                $KQ += $mang[$i];
            }
        }
    ?>
    <form action="" method="post">
        <table align="center">
            <!-- <tr>
                <td colspan="2"><?php echo $show ?></td>
            </tr> -->
            <tr>
                <th class="heading" colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
            </tr>
            <tr>
                <td>Nhập dãy số</td>
                <td><input type="text" name="ipSo" value="<?php echo $ipSo ?>"><label class="color-red">(*)</label></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" name="tong" value="Tổng dãy số"></td>
            </tr>
            <tr> 
                <td>Tổng dãy số</td>              
                <td><input type="text" value="<?php echo $KQ ?>"></td>          
            </tr>
            <tr>
                <td align="center" colspan="2"><label class="color-red">(*)</label>Các số phải nhập cách nhau bằng dấu ","</td>
            </tr>
        </table>
    </form>
</body>
</html>