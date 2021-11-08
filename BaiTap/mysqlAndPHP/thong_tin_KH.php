<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Khách Hàng</title>
    <link rel="stylesheet" href="./bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
  <?php
      // 1. Ket noi CSDL
      require("./config.php");
      $conn = mysqli_connect($hostName, $username,$password,$databaseName) or die ('Không
      thể kết nối tới database'. mysqli_connect_error());
      echo  "<script> console.log('Kết nối thành công'); </script>";
      mysqli_set_charset($conn,'UTF8');
      $sql = "SELECT * FROM `khach_hang`";
      $khach_hang = mysqli_query($conn,$sql);
  ?>
    <div class="container">
      <h4 class="text-dark text-center pt-4 pb-3">THÔNG TIN KHÁCH HÀNG</h4>
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th class="text-info text-center" scope="col">Mã KH</th>
            <th class="text-info text-center" scope="col">Tên khách hàng</th>
            <th class="text-info text-center" scope="col">Giới tính</th>
            <th class="text-info text-center" scope="col">Địa chỉ</th>
            <th class="text-info text-center" scope="col">Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($khach_hang) !=0 ){
          while($row = mysqli_fetch_array($khach_hang)){
            $maKH= $row[0];
            $tenKH = $row[1];
            $gt = $row[2];
            $dia_chi = $row[3];
            $sdt = $row[4];
            
            echo "<tr>
              <td> $maKH </td>
              <td> $tenKH </td>";
              if($gt === "0") {
                  echo "<td  style='font-size: 1.5rem;  text-align: center;'><i class='fa fa-male'></i>  </td>";
              }
               else echo "<td style='font-size: 1.5rem;  text-align: center;'> <i class='fa fa-female'></i> </td>";
              echo "
              <td> $dia_chi </td>
              <td> $sdt </td>
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