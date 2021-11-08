<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Hoá Đơn</title>
    <link rel="stylesheet" href="./bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
  <?php
      // 1. Ket noi CSDL
      require("./config.php");
      $conn = mysqli_connect($hostName, $username,$password,$databaseName) or die ('Không
      thể kết nối tới database'. mysqli_connect_error());
      echo  "<script> console.log('Kết nối thành công'); </script>";
      mysqli_set_charset($conn,'UTF8');
      $sql = "SELECT * FROM `ct_hoadon`";
      $tt_sua = mysqli_query($conn,$sql);
  ?>
    <div class="container">
      <h4 class="text-dark text-center pt-4 pb-3">CHI TIẾT HOÁ ĐƠN</h4>
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th class="text-info" scope="col">Số hoá đơn</th>
            <th class="text-info" scope="col">Mã sữa</th>
            <th class="text-info" scope="col">Số lượng</th>
            <th class="text-info" scope="col">Đơn giá</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($tt_sua) !=0 ){
          while($row = mysqli_fetch_array($tt_sua)){
            $so_hd= $row[0];
            $ma_sua = $row[1];
            $so_luong = $row[2];
            $don_gia = $row[3];
              echo "<tr>
              <td> $so_hd </td>
              <td> $ma_sua </td>
              <td> $so_luong </td>
              <td> $don_gia </td>
              </tr>";
          }
        }
        else echo "Bang khong co dữ liệu";
        //đóng kết nối
       mysqli_free_result($tt_sua);
       mysqli_close($conn);
      ?>
        </tbody>
      </table>
    </div>
</body>
    <script src="./bootstrap-4.6.0-dist/js/jquery.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</html>