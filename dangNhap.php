<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require("./config.php");
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
                    setcookie("user", $row['MaND'], time() + (86400 * 30));
                    $URL="http://localhost/QLDA/homepage.php";
                    header ("Location: $URL");
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
</body>

</html>