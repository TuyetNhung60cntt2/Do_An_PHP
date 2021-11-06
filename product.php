<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asets/product.css">
</head>

<body>
    <?php require("./header.php") ;
        require("./config.php");
        $sql="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 1";
        $sql2="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 2";
        $sql3="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 3";
        $sql4="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 4";
        $sql5="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 5";
        $sql6="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 6";
        $sql7="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLHT` = 7";
            $loaihientai =mysqli_query($conn,$sql);
            $loaihientai2 =mysqli_query($conn,$sql2);
            $loaihientai3 =mysqli_query($conn,$sql3);
            $loaihientai4 =mysqli_query($conn,$sql4);
            $loaihientai5 =mysqli_query($conn,$sql5);
            $loaihientai6 =mysqli_query($conn,$sql6);
            $loaihientai7 =mysqli_query($conn,$sql7);
    ?>
    <div class="main" style="padding-top: 17rem; background-color: #f5eee8;">
        <div class="main__taskbar pb-4">
            <div class="main__breadcrumb">
                <div class="breadcrumb__item">
                    <a href="#" class="breadcrumb__link">Trang chủ</a>
                </div>
                <div class="breadcrumb__item">
                    <a href="#" class="breadcrumb__link">Thực đơn</a>
                </div>
                <div class="breadcrumb__item">
                    <a href="#" class="breadcrumb__link">Menu hiện tại</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="">
                <div id="LATTE_SERIES" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">LATTE SERIES</div>
                <div class="row">
                        <?php
                        if ($loaihientai) {
                            while ($row = $loaihientai->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
                </div>
            </div>
            <div class="pt-5">
                <div id="THUC_UONG_DAC_BIET_GONG_CHA" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                    THỨC UỐNG ĐẶC BIỆT GONG CHA</div>
                <div class="row">
                <?php
                        if ($loaihientai2) {
                            while ($row = $loaihientai2->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
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
            <div id="TRA_SUA" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                TRÀ SỮA</div>
            <div class="row">
                    <?php
                        if ($loaihientai3) {
                            while ($row = $loaihientai3->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
        <div class="pt-5">
            <div id="TRA_NGUYEN_CHAT" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                TRÀ NGUYÊN CHẤT</div>
            <div class="row">
                     <?php
                        if ($loaihientai4) {
                            while ($row = $loaihientai4->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
        <div class="pt-5">
            <div id="THUC_UONG_SANG_TAO" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                THỨC UỐNG SÁNG TẠO</div>
            <div class="row">
                     <?php
                        if ($loaihientai5) {
                            while ($row = $loaihientai5->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
        <div class="pt-5">
            <div id="THUC_UONG_DA_XAY" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                THỨC UỐNG ĐÁ XAY</div>
            <div class="row">
                    <?php
                        if ($loaihientai6) {
                            while ($row = $loaihientai6->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
                                    </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
        <div class="pt-5 pb-5">
            <div id="TOPPING" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                TOPPING</div>
            <div class="row">
                    <?php
                        if ($loaihientai7) {
                            while ($row = $loaihientai7->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/MenuHT/".$row['HinhAnh']."' alt=''>
                                        <div >" .$row['TenSP']."</div>
                                        <div class='d-flex justify-content-center' >
                                            <div>Size : " .$row['Size']."</div>
                                            <div>-></div>
                                            <div>Giá : " .$row['DonGia']."</div>
                                        </div>
                                            <input type='submit' value='Đặt hàng' style='font-size: 2rem; background-color: #b81f32;margin-top: 1.2rem;'></input>
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