<!DOCTYPE html>
<html lang="en">
<head>
    <title>Phép tính</title>
</head>
<body>
    <?php
        if(isset($_POST['So1']))
            $So1 = $_POST['So1'];
        else
            $So1 = 0;
        if(isset($_POST['So2']))
            $So2 = $_POST['So2'];
        else
            $So2 = 0;
        $phepTinh = $_POST['phepTinh'];
        if($phepTinh == "Cong")
            $ketQua = $So1 + $So2;
        else
            if($phepTinh == "Tru")
                $ketQua = $So1 - $So2;
            else
                if($phepTinh == "Nhan")
                    $ketQua = $So1 * $So2;
                else
                    if($phepTinh == "Chia")
                        if($So2 != 0)
                            $ketQua = $So1 / $So2;
                        else
                            $ketQua = "Số thứ 2 phải khác 0";
                    else
                        $ketQua = "Erro";
    ?>
    <form action="PhepTinhTren2So2.php" method="get">
        <table border="0">
            <tr>
                <th colspan="2" align="center" style="color:blue">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr>
                <td style="color:red; text-align:right">Chọn phép tính:</td>
                <td style="color:red">
                    <?php echo $phepTinh;
                    ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Số thức 1:</td>
                <td><input type="text" name="So1" value="<?php echo $So1?>"></td>
            </tr>
            <tr>
                <td style="text-align:right">Số thứ 2:</td>
                <td><input type="text" name="So2" value="<?php echo $So2?>"></td>
            </tr>
            <tr>
                <td style="text-align:right">Kết quả:</td>
                <td><input type="text" name="ketQua" value="<?php echo $ketQua?>"></td>
            </tr>
            <tr>
                <td><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
            </tr>
        </table>
    </form>
</body>
</html>