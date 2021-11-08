<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
<?php require("./header.php") ;
         require("./config.php");
        $sql="SELECT * FROM `sanpham` WHERE `sanpham`.`MaLMM` = 1";
            $loaimonmoi =mysqli_query($conn,$sql);
    ?>
    <div class="main">
        <!-- Slider -->
        <div class="main__slice">
            <div class="slider">
                <div class="slide active" style="background-image: url(./assets/img/home/Slide/slide10.jpg);">
                </div>
                <div class="slide active" style="background-image: url(./assets/img/home/Slide/slide5.jpg);">
                </div>
                <div class="slide active" style="background-image: url(./assets/img/home/Slide/slide15.jpg);">
                </div>
            </div>
            <!-- controls  -->
            <div class="controls">
                <div class="prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!-- indicators -->
            <div class="indicator">
            </div>
        </div>
        <!--Product Category -->
        <div class="main__tabnine">
            <div class="grid wide">
                <!-- Tab items -->
                <h3 class="category__heading">Thực Đơn Mới</h3>
                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                        <?php
                            if ($loaimonmoi) {
                                while ($row = $loaimonmoi->fetch_assoc()) {
                                echo "
                                    <div class='col l-2 m-4 s-6'>
                                        <div class='product'>
                                            <div class='product__avt' style='background-image: url(./assets/img/menu/".$row['HinhAnh'].");'>
                                            </div>
                                            <div class='product__info'>
                                                <h3 class='product__name text-center'>" .$row['TenSP']."</h3>
                                                <div class='product__sale'>
                                                    <span class='product__sale-percent'>New</span>
                                                </div>
                                            </div>
                                            <a href='product.php' class='viewDetail'>Xem chi tiết</a>
                                            <a href='cart.php' class='addToCart'>Thêm vào giỏ</a>
                                        </div>
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
        </div>
        <!-- ---banner---- -->
        <div class="container">
            <div class="col-12 col-md-12 col-lg-12" style="background-image: url(./assets/img/home/Image/Banner-Tinh-Túy-Trà22.jpg); max-width: 100%;
            height: 30rem; text-align: center; font-size: 3rem; color: #b81f32; padding-top: 12rem;">
                Tinh tuý từ lá trà tươi hảo hạng
            </div>
            <!-- -----banner2----- -->
            <div class="row" style=" padding-top: 2rem; align-items: center;padding-bottom: 2rem;">
                <div class="col-12 col-md-12 col-lg-4"><img style="object-fit: fill; max-width: 100%; max-height: 100%;" src="./assets/img/home/Image/ly-tra.png" alt=""></div>
                <div class="col-12 col-md-12 col-lg-4" style="font-size: 2rem;text-align: center;border: 2px solid #b81f32; color: #b81f32; padding: 2rem 1rem;">
                    Bí quyết để có một ly trà hảo hạng
                </div>
                <div class="col-12 col-md-12 col-lg-4"><img src="./assets/img/home/Image/banner-6-buoc-395x494.jpg" alt=""></div>
            </div>
        </div>
    <?php require("./footer.php") ?>
    <script>
        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.owl-carousel.news').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel.bands').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <!-- Script common -->
    <script src="./assets/js/homeScript.js"></script>

</body>

</html>