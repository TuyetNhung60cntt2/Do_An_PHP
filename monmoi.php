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
        $sql="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLMM` = 1";
        $sql2="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLMM` = 2";
        $sql3="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLMM` = 3";
        $sql4="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLMM` = 4";
            $loaimonmoi =mysqli_query($conn,$sql);
            $loaimonmoi1 =mysqli_query($conn,$sql2);
            $loaimonmoi2 =mysqli_query($conn,$sql3);
            $loaimonmoi3 =mysqli_query($conn,$sql4);
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
                        <a href="#" class="breadcrumb__link">Món mới</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div id="NAM2021" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                  NĂM 2021</div>
                <div class="row">
                <?php
                        if ($loaimonmoi) {
                            while ($row = $loaimonmoi->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/".$row['HinhAnh']."' alt=''>
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
                <div id="NAM2020" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                    NĂM 2020</div>
                <div class="row">
                <?php
                        if ($loaimonmoi1) {
                            while ($row = $loaimonmoi1->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/".$row['HinhAnh']."' alt=''>
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
            <div id="NAM2019" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                NĂM 2019</div>
            <div class="row">
                    <?php
                        if ($loaimonmoi2) {
                            while ($row = $loaimonmoi2->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/".$row['HinhAnh']."' alt=''>
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
            <div id="NAM2018" style="background-color: #e5ded8; font-weight: bold; font-size: 2.5rem; padding: 1.5rem 0; text-align: center;">
                NĂM 2018</div>
            <div class="row">
                    <?php
                        if ($loaimonmoi3) {
                            while ($row = $loaimonmoi3->fetch_assoc()) {
                            echo "<div class='col-12-col-md-12 col-lg-4 text-center' style='font-size: 2rem; color: #b81f32;'>
                                        <img style='max-width: 100%;' src='./assets/img/menu/".$row['HinhAnh']."' alt=''>
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