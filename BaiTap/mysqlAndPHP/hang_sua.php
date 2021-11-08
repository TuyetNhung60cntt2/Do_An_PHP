<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Hãng Sữa</title>
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
      $sql = "SELECT * FROM `hang_sua`";
      $hang_sua = mysqli_query($conn,$sql);
  ?>
    <div class="container">
      <h4 class="text-success text-center pt-4 pb-3">THÔNG TIN HÃNG SỮA</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Mã HS</th>
            <th scope="col">Tên Hàng Sữa</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Điện Thoại</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($hang_sua) !=0 ){
          while($row = mysqli_fetch_array($hang_sua)){
            $maHS= $row[0];
            $tenHS = $row[1];
            $dc = $row[2];
            $dt = $row[3];
            $email = $row[4];
            
            echo "<tr>
              <td> $maHS </td>
              <td> $tenHS </td>
              <td> $dc </td>
              <td> $dt </td>
              <td> $email </td>
            </tr>";
          }
        }
      ?>
        </tbody>
      </table>
    </div>
</body>
    <script src="./bootstrap-4.6.0-dist/js/jquery.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</html>