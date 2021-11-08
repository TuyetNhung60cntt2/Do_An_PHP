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
        if(isset($_POST['phepTinh']))
            $phepTinh = $_POST['phepTinh'];
    ?>
    <form action="./BT6_PhepTinhTren2So2.php" method="post">
        <table border="0">
            <tr>
                <th colspan="2" align="center" style="color:blue">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr>
                <td style="color:red; text-align:right">Chọn phép tính:</td>
                <td style="color:red">
                    <input type="radio" name="phepTinh" value="Cong" checked=checked
                    <?php if(isset($_POST['phepTinh']) && $_POST['phepTinh'] == 'Cong') echo 'checked="checked"'
                    ?>>Cộng
                    <input type="radio" name="phepTinh" value="Tru"
                    <?php if(isset($_POST['phepTinh']) && $_POST['phepTinh'] == 'Tru') echo 'checked="checked"'
                    ?>>Trừ
                    <input type="radio" name="phepTinh" value="Nhan"
                    <?php if(isset($_POST['phepTinh']) && $_POST['phepTinh'] == 'Nhan') echo 'checked="checked"'
                    ?>>Nhân
                    <input type="radio" name="phepTinh" value="Chia"
                    <?php if(isset($_POST['phepTinh']) && $_POST['phepTinh'] == 'Chia') echo 'checked="checked"'
                    ?>>Chia
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
                <td><input type="submit" name="tinh" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>