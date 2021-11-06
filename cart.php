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
                <div class="main__notify-text">Giỏ hàng đã được cập nhật.</div>
            </h3>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="main__cart">
                        <div class="row title">
                            <div class="col-1 col-md-1 col-lg-1">Chọn</div>
                            <div class="col-4 col-md-4 col-lg-4">Thực đơn</div>
                            <div class="col-2 col-md-2 col-lg-2">Giá</div>
                            <div class="col-2 col-md-2 col-lg-2">Số lượng</div>
                            <div class="col-2 col-md-2 col-lg-2">Size</div>
                            <div class="col-1 col-md-1 col-lg-1">Xóa</div>
                        </div>
                        <div class="row item">
                            <div class="col-1 col-md-1 col-lg-1">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" style="font-size: 1.7rem;">
                                <label for="cars">Size:</label>
                                <select name="cars">
                                    <option value="0">M</option>
                                    <option value="1">L</option>
                                </select>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-1 col-md-1 col-lg-1">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" style="font-size: 1.7rem;">
                                <label for="cars">Size:</label>
                                <select name="cars">
                                    <option value="0">M</option>
                                    <option value="1">L</option>
                                </select>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-1 col-md-1 col-lg-1">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <div class="main__cart-product">
                                    <img src="./assets/img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2" style="font-size: 1.7rem;">
                                <label for="cars">Size:</label>
                                <select name="cars">
                                    <option value="0">M</option>
                                    <option value="1">L</option>
                                </select>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn--default mr-5">Cập nhật giỏ hàng</div>
                            <div class="btn btn--default orange">Mua hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require("./footer.php") ?>
    
    <!-- Sccipt for owl caroucel -->




</body>

</html>