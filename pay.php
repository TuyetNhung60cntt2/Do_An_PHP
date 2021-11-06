<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/cart.css">
</head>

<body>
    <?php require("./header.php") ?>
    <div class="main" style="padding-top: 15rem; background-color: #f5eee8;">
        <div class="grid wide">
            <h3 class="main__notify">
                <div class="main__notify-icon">
                    <i class="fas fa-check"></i>
                    <!-- <i class="fas fa-times"></i> -->
                </div>
                <div class="main__notify-text">Hoá đơn đã được cập nhật.</div>
            </h3>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="main__cart">
                        <div class="row title">
                            <div class="col-1 col-md-1 col-lg-1">STT</div>
                            <div class="col-4 col-md-4 col-lg-4">Thực đơn</div>
                            <div class="col-2 col-md-2 col-lg-2">Giá</div>
                            <div class="col-2 col-md-2 col-lg-2">Số lượng</div>
                            <div class="col-2 col-md-2 col-lg-2">Size</div>
                            <div class="col-1 col-md-1 col-lg-1">Tổng</div>
                        </div>
                        <div class="row item" style="font-size: 1.7rem;">
                            <div class="col-1 col-md-1 col-lg-1">
                                1
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                    <span class="main__cart-icon">
                                        25.000đ
                                    </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2 ">
                                <span class="main__cart-icon">
                                    3
                                </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" style="font-size: 1.7rem;">
                                <span class="main__cart-icon">
                                    M
                                </span>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                85.000đ
                                </span>
                            </div>
                        </div>
                        <div class="row item" style="font-size: 1.7rem;">
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                    2
                                </span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                    <span class="main__cart-icon">
                                        25.000đ
                                    </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <span class="main__cart-icon">
                                    4
                                </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" style="font-size: 1.7rem;">
                                <span class="main__cart-icon">
                                    L
                                </span>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                    80.000đ
                                </span>
                            </div>
                        </div>
                        <div class="row item" style="font-size: 1.7rem;">
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                    3
                                </span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                    <span class="main__cart-icon">
                                        25.000đ
                                    </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <span class="main__cart-icon">
                                    2
                                </span>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" >
                                <span class="main__cart-icon">
                                    M
                                </span>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                    60.000đ
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" style="font-size: 2rem; padding-top: 4rem;">
                            <div>Tổng hoá đơn :</div>
                            <div class="text-danger pl-5"> 158.000 VNĐ</div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn--default mr-5">Cập nhật hoá đơn</div>
                            <div class="btn btn--default orange">Đặt hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require("./footer.php") ?>
    <!-- Sccipt for owl caroucel -->

    <!-- Script common -->



</body>

</html>