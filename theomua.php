<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php require("./header.php") ;
         require("./config.php");
        $sql="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLTM` = 1";
        $sql2="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLTM` = 2";
        $sql3="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLTM` = 3";
        $sql4="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLTM` = 4";
            $loatheomua =mysqli_query($conn,$sql);
            $loatheomua1 =mysqli_query($conn,$sql2);
            $loatheomua2 =mysqli_query($conn,$sql3);
            $loatheomua3 =mysqli_query($conn,$sql4);
    ?>
    <div class="main" style="padding-top: 17rem; background-color: #f5eee8;">
        <div class="">
            <div class="main__taskbar pb-4">
                <div class="main__breadcrumb">
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Thực đơn</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Theo mùa</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div id="MUA_XUAN" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                    MÙA XUÂN</div>
                <div class="row">
                    <?php
                        if ($loatheomua) {
                            while ($row = $loatheomua->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/TheoMua/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input class='btn text-white' type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
                </div>
            </div>
            <div class="pt-5">
                <div id="MUA_HA" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                  MÙA HẠ</div>
                <div class="row">
                    <?php
                        if ($loatheomua1) {
                            while ($row = $loatheomua1->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/TheoMua/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input class='btn text-white' type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div id="MUA_THU" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                MÙA THU</div>
            <div class="row">
                     <?php
                        if ($loatheomua2) {
                            while ($row = $loatheomua2->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/TheoMua/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input class='btn text-white' type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
        <div class="pt-5 pb-5">
            <div id="MUA_DONG" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                MÙA ĐÔNG</div>
            <div class="row">
                    <?php
                        if ($loatheomua3) {
                            while ($row = $loatheomua3->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/TheoMua/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input class='btn text-white' type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
    </div>
    </div>
    <?php require("./footer.php") ?>

    <!-- Script common -->
    <script src="./assets/js/commonscript.js ">
    </script>
    <script>
        function calcRate(r) {
            const f = ~~r, //Tương tự Math.floor(r)
                id = 'star' + f + (r % f ? 'half' : '')
            id && (document.getElementById(id).checked = !0)
        }
    </script>
</body>

</html>