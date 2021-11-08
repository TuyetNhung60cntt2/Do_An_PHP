<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEBSITE BÁN TRÀ SỮA</title>
  <link rel="icon" href="./assets/img/layout/header/logo.png" />
  <link rel="stylesheet" href="./bootstrap-4.6.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.min.css">
  <!-- Font roboto -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Icon fontanwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Reset css & grid sytem -->
  <link rel="stylesheet" href="./assets/css/library.css">
  <link href="./assets/owlCarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <!-- Layout -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <!-- index -->
  <link href="./assets/css/header.css" rel="stylesheet" />
  <link href="./assets/css/home.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Owl caroucel Js-->
  <script src="./assets/owlCarousel/owl.carousel.min.js"></script>

</head>

<body>
<?php
  require("./config.php");
  // $user;
  $nguoiDung = "";
  if (isset($_POST['dangnhap'])) {
    $tk = $_POST['tk'];
    $mk = $_POST['mk'];
    $sql = "SELECT * FROM `taikhoan` JOIN `nguoidung` ON `taikhoan`.`MaTK` = `nguoidung`.`MaTK` WHERE `taikhoan`.`TenTK`= '$tk' AND `taikhoan`.`MatKhau` = '$mk' ";
    $result =  mysqli_query($conn, $sql);
    $message;

    // if ($result) {
    //   setcookie("user", $result["MaND"], time() + (86400 * 30));
    //   $URL = "http://localhost/Quan_Ly_TS/index.php";
    //   header("Location: $URL");
    //   $message = " <span class='form-message'>Đăng nhập thành công</span>";
    // } else {
    //   $message = "<span class='form-message'>Tài khoản không chính xác !</span>";
    // }

    if(mysqli_num_rows($result)!=0){
        while ($row = mysqli_fetch_array($result))
        { 
          $nguoiDung = $row['TenND'];
                    setcookie("user", $row['MaND'], time() + (86400 * 30));
                    $URL="http://localhost/Quan_Ly_TS/index.php";
                    header ("Location: $URL", TRUE);
                    break;

        }
    }
    else
    {
        header("Refresh:0");
        $message = "<span class='form-message'>Tài khoản không chính xác !</span>";
    }
  }
  ?>
  <div class="header scrolling" id="myHeader">
    <div class="grid wide">
      <div class="header__top">
        <div class="navbar-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="index.php" class="header__logo" style="text-decoration: none;">
          <div class="d-flex">
            <img style=" max-width: 100%;
            height: 8rem;
            object-fit: fill;" src="./assets/img/layout/header/logo.png" alt="">
            <div class="d-flex align-items-center">
              <div style="font-size: 2.5rem; color:#b81f32;">Gong Cha</div>
            </div>
          </div>
        </a>
        <div class="header__search">
          <div class="header__search-wrap">
            <input type="text" class="header__search-input" placeholder="Tìm kiếm">
            <a class="header__search-icon" href="#">
              <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
        <div class="header__account">
          <?php
            if(isset($_COOKIE["user"]))
              echo "Xin chào $nguoiDung";
            else
              echo "<a href='#my-Login' class='header__account-login'>Đăng Nhập</a>";
          ?>
          
          <a href="#my-Register" class="header__account-register">Đăng Kí</a>
        </div>
        <!-- Cart -->
        <div class="header__cart have" href="#">
          <i class="fas fa-shopping-basket"></i>
          <div class="header__cart-wrap">
            <a href="cart.php" class="btn btn--default cart-btn">Xem giỏ hàng</a>
            <a href="pay.php" class="btn btn--default cart-btn orange">Thanh toán</a>
            <!-- norcart -->
            <!-- <img class="header__cart-img-nocart" src="http://www.giaybinhduong.com/images/empty-cart.png" alt=""> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Menu -->
    <div class="header__nav">
      <ul class="header__nav-list">
        <li class="header__nav-item nav__search">
          <div class="nav__search-wrap">
            <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
          </div>
          <div class="nav__search-btn">
            <i class="fas fa-search"></i>
          </div>
        </li>
        <li class="header__nav-item authen-form">
          <a href="#" class="header__nav-link">Tài Khoản</a>
          <ul class="sub-nav">
            <li class="sub-nav__item">
              <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
            </li>
            <li class="sub-nav__item">
              <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
            </li>
          </ul>
        </li>
        <li class="header__nav-item index">
          <a href="index.php" class="header__nav-link">Trang chủ</a>
        </li>
        <li class="header__nav-item">
          <a href="gioithieu.php" class="header__nav-link">Giới Thiệu</a>
        </li>
        <li class="header__nav-item">
          <a href="product.php" class="header__nav-link">Thực Đơn</a>
          <div class="sub-nav-wrap grid wide" style=" background-color: #f5eee8;">
            <ul class="sub-nav">
              <li class="sub-nav__item">
                <a href="product.php" class="sub-nav__link heading" style="text-decoration: none;">Menu hiện tại</a>
              </li>
              <li class="sub-nav__item">
                <a href="#LATTE_SERIES" class="sub-nav__link" style="text-decoration: none;">Latte Series</a>
              </li>
              <li class="sub-nav__item">
                <a href="#THUC_UONG_DAC_BIET_GONG_CHA" class="sub-nav__link" style="text-decoration: none;">Thức uống đặc biệt Gong Cha</a>
              </li>
              <li class="sub-nav__item">
                <a href="#TRA_SUA" class="sub-nav__link" style="text-decoration: none;">Trà sữa</a>
              </li>
              <li class="sub-nav__item">
                <a href="#TRA_NGUYEN_CHAT" class="sub-nav__link" style="text-decoration: none;">Trà nguyên chất</a>
              </li>
              <li class="sub-nav__item">
                <a href="#THUC_UONG_SANG_TAO" class="sub-nav__link" style="text-decoration: none;">Thức uống sáng tạo</a>
              </li>
              <li class="sub-nav__item">
                <a href="#THUC_UONG_DA_XAY" class="sub-nav__link" style="text-decoration: none;">Thức uống đá xay</a>
              </li>
              <li class="sub-nav__item">
                <a href="#TOPPING" class="sub-nav__link" style="text-decoration: none;">Topping</a>
              </li>
            </ul>
            <ul class="sub-nav">
              <li class="sub-nav__item">
                <a href="monmoi.php" class="sub-nav__link heading" style="text-decoration: none;">Món mới</a>
              </li>
              <li class="sub-nav__item">
                <a href="#NAM2021" class="sub-nav__link" style="text-decoration: none;">Năm 2021</a>
              </li>
              <li class="sub-nav__item">
                <a href="#NAM2020" class="sub-nav__link" style="text-decoration: none;">Năm 2020</a>
              </li>
              <li class="sub-nav__item">
                <a href="#NAM2019" class="sub-nav__link" style="text-decoration: none;">Năm 2019</a>
              </li>
              <li class="sub-nav__item">
                <a href="#NAM2018" class="sub-nav__link" style="text-decoration: none;">Năm 2018</a>
              </li>
            </ul>
            <ul class="sub-nav">
              <li class="sub-nav__item">
                <a href="theomua.php" class="sub-nav__link heading" style="text-decoration: none;">Theo mùa</a>
              </li>
              <li class="sub-nav__item">
                <a href="#MUA_XUAN" class="sub-nav__link" style="text-decoration: none;">Mùa xuân</a>
              </li>
              <li class="sub-nav__item">
                <a href="#MUA_HA" class="sub-nav__link" style="text-decoration: none;">Mùa hạ</a>
              </li>
              <li class="sub-nav__item">
                <a href="#MUA_THU" class="sub-nav__link" style="text-decoration: none;">Mùa thu</a>
              </li>
              <li class="sub-nav__item">
                <a href="#MUA_DONG" class="sub-nav__link" style="text-decoration: none;">Mùa đông</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="header__nav-item">
          <a href="news.php" class="header__nav-link">Tin Tức</a>
        </li>
        <li class="header__nav-item">
          <a href="contact.php" class="header__nav-link">Liên Hệ</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Modal Form -->
  <div class="ModalForm">
    <?php require("./dangKi.php"); ?>

  <form action="" method="POST">
    <div class="modal" id="my-Login">
      <a href="#" class="overlay-close"></a>
      <div class="authen-modal login">
        <h3 class="authen-modal__title">Đăng Nhập</h3>
        <div class="form-group">
          <label for="account" class="form-label">Tên tài khoản *</label>
          <input id="account" name="tk" type="text" class="form-control" value="<?php if (isset($tk)) echo $tk; ?>">
          <?php echo isset($message) ? $message : "" ?>
        </div>
        <div class="form-group">
          <label for="password" class="form-label">Mật khẩu *</label>
          <input id="password" name="mk" type="text" class="form-control" value="<?php if (isset($mk)) echo $mk; ?>">
          <span class="form-message"></span>
        </div>
        <div class="authen__btns">
          <button type="submit" class="btn btn--default" name="dangnhap">Đăng Nhập</button>
          <input type="checkbox" class="authen-checkbox">
          <label class="form-label">Ghi nhớ mật khẩu</label>
        </div>
        <a class="authen__link">Quên mật khẩu ?</a>
      </div>
    </div>
  </form>
    <div class="up-top" id="upTop" onclick="goToTop()">
      <i class="fas fa-chevron-up"></i>
    </div>
  </div>
</body>
<!-- Script common -->
<script src="./assets/js/commonscript.js"></script>

</html>