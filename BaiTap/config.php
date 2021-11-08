<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["hoTen"]))
            $hoTen = trim($_POST["hoTen"]);
        else
            $hoTen = "";
        if(isset($_POST["diaChi"]))
            $diaChi = trim($_POST["diaChi"]);
        else
            $diaChi = "";
        if(isset($_POST["sdt"]))
            $sdt = trim($_POST["sdt"]);
        else
            $sdt = "";

        $gioiTinh =  $_POST["gioiTinh"];
        $quocGia = $_POST["quocGia"];
        $ghiChu = $_POST["ghiChu"];
        if($_POST["gioiTinh"] == 'Nam')
            $gioiTinh = "Nam";
        if($_POST["gioiTinh"] == 'Nu')
            $gioiTinh = "Nữ";
    ?>
    <form action="" method="GET">
        <label>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</label>
        <br> Họ tên: <?php echo $hoTen ?>
        <br> Giới tính: <?php echo $gioiTinh?>
        <br> Địa chỉ: <?php echo $diaChi?>
        <br> Điện thoại: <?php echo $sdt?>
        <br> Quốc tịch: <?php echo $quocGia?>
        <br> Môn học: 
        <?php 
            if(isset($_POST["mon1"]))
            {
                echo $_POST["mon1"];
                echo " | ";
            }

            if(isset($_POST["mon2"]))
            {
                echo $_POST["mon2"];
                echo " | ";
            }
            if(isset($_POST["mon3"]))
            {
                echo $_POST["mon3"];
                echo " | ";
            }
            if(isset($_POST["mon4"]))
                echo $_POST["mon4"];

        ?>
        <br> Ghi chú: <?php echo $ghiChu ?>
        <br> <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
    </form>
</body>
</html>