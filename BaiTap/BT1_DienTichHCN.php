<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
	if(isset($_POST['txtChieuDai']))  
 
	    $chieudai=trim($_POST['txtChieuDai']); 

	else $chieudai=0;

	if(isset($_POST['txtChieuRong'])) 

	    $chieurong=trim($_POST['txtChieuRong']); 

	else $chieurong=0;

	if(isset($_POST['btnTinh']))

        if (is_numeric($chieudai) && is_numeric($chieurong))  

	       $dientich=$chieudai * $chieurong;

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $dientich="";

            }

	else $dientich=0;

?>
    <h1>Diện tích hình chữ nhật</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="txtChieuDai" value="<?php echo $chieudai;?>"/></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="txtChieuRong" value="<?php echo $chieurong;?>"/></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="txtDienTich" disabled="disabled" value="<?php echo $dientich;?>"/></td>
            </tr>
            <tr>
                <td colspan = "2"><input type="submit" name="btnTinh" value="Tính"/></td>
            </tr>
        </table>
    </form>
</body>
</html>