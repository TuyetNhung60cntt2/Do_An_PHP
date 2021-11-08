<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Sữa</title>
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
      $sql = "SELECT `sua`.*, `loai_sua`.*, `hang_sua`.*
      FROM `sua` 
        LEFT JOIN `loai_sua` ON `sua`.`Ma_loai_sua` = `loai_sua`.`Ma_loai_sua` 
        LEFT JOIN `hang_sua` ON `sua`.`Ma_hang_sua` = `hang_sua`.`Ma_hang_sua`;";
      $tt_sua = mysqli_query($conn,$sql);
  ?>
    <div class="container">
      <h4 class="text-dark text-center pt-4 pb-3">THÔNG TIN SỮA</h4>
      <table class="table table-bordered ">
        <thead>
          <tr>
            <th class="text-info" scope="col">Số TT</th>
            <th class="text-info" scope="col">Tên sữa</th>
            <th class="text-info" scope="col">Hãng sữa</th>
            <th class="text-info" scope="col">Loại sữa</th>
            <th class="text-info" scope="col">Trọng lượng</th>
            <th class="text-info" scope="col">Đơn giá</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($tt_sua) !=0 ){
          $stt = 1;
          while($row = mysqli_fetch_array($tt_sua)){
            if($stt % 2 == 0){
              echo "<tr>
              <td> $stt </td>
              <td>" .$row['Ten_sua']. "</td>
              <td> " .$row['Ten_hang_sua']. " </td>
              <td>" .$row['Ten_loai']. " </td>
              <td>" .$row['Trong_luong']. " </td>
              <td> " .$row['Don_gia']. " </td>
                  </tr>";
            }
            else 
              echo "<tr  bgcolor='pink'>
              <td> $stt </td>
              <td>" .$row['Ten_sua']. "</td>
              <td> " .$row['Ten_hang_sua']. " </td>
              <td>" .$row['Ten_loai']. " </td>
              <td>" .$row['Trong_luong']. " </td>
              <td> " .$row['Don_gia']. " </td>
                  </tr>";
               $stt++;
          }
        }
      ?>
        </tbody>
      </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
        </nav>
    </div>
</body>
    <script src="./bootstrap-4.6.0-dist/js/jquery.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</html>