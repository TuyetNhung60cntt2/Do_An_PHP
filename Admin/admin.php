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

  <?php require("./headerAd.php");
  // UUID
  function gen_uuid()
  {
    $uuid = array(
      'time_low'  => 0,
      'time_mid'  => 0,
      'time_hi'  => 0,
      'clock_seq_hi' => 0,
      'clock_seq_low' => 0,
      'node'   => array()
    );

    $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
    $uuid['time_mid'] = mt_rand(0, 0xffff);
    $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
    $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
    $uuid['clock_seq_low'] = mt_rand(0, 255);

    for ($i = 0; $i < 6; $i++) {
      $uuid['node'][$i] = mt_rand(0, 255);
    }

    $uuid = sprintf(
      '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
      $uuid['time_low'],
      $uuid['time_mid'],
      $uuid['time_hi'],
      $uuid['clock_seq_hi'],
      $uuid['clock_seq_low'],
      $uuid['node'][0],
      $uuid['node'][1],
      $uuid['node'][2],
      $uuid['node'][3],
      $uuid['node'][4],
      $uuid['node'][5]
    );

    return $uuid;
  }

  // ===================================
  require("../config.php");
  $sql = "SELECT `sanpham`.*, `loaihientai`.*, `loaimonmoi`.*, `loaitheomua`.*
    FROM `sanpham` 
        LEFT JOIN `loaihientai` ON `sanpham`.`MaLHT` = `loaihientai`.`MaLHT` 
        LEFT JOIN `loaimonmoi` ON `sanpham`.`MaLMM` = `loaimonmoi`.`MaLMM` 
        LEFT JOIN `loaitheomua` ON `sanpham`.`MaLTM` = `loaitheomua`.`MaLTM`;";
  $sanpham = mysqli_query($conn, $sql);
  if (isset($_POST['add'])) {
    $ten = $_POST['TenSP'];
    $hinh = "";
    $size = $_POST['Size'];
    $ht = ($_POST['MaLHT'] !== "" ? "'" . $_POST['MaLHT'] . "'" : 'NULL');
    $mm = ($_POST['MaLMM'] !== "" ? "'" . $_POST['MaLMM'] . "'" : 'NULL');
    $tm = ($_POST['MaLTM'] !== "" ? "'" . $_POST['MaLTM'] . "'" : 'NULL');
    $gia = $_POST['DonGia'];
    $sl = $_POST['SoLuongSP'];
    if (isset($_FILES['HinhAnh'])) {
      $type = substr($_FILES['HinhAnh']["type"], 6, 10);
      $fileName = "TS_" . gen_uuid() . "." . $type;
      $hinh = $fileName;
      // echo  $type;
      $_FILES['HinhAnh']["name"] = $fileName;
      $target_file = "../assets/img/menu/" . basename($_FILES['HinhAnh']["name"]);

      move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

    }
    $sqladd = "INSERT INTO `sanpham` (`TenSP`, `HinhAnh`, `Size`, `MaLHT`, `MaLMM`, `MaLTM`, `DonGia`, `SoLuongSP`) VALUES ( '$ten', '$hinh', '$size', $ht, $mm, $tm, '$gia', '$sl')";
    if (!mysqli_query($conn, $sqladd)) {
      echo "Error: " . $sqladd . "<br>" . mysqli_error($conn);
    }
   
  }

  if (isset($_POST['editProduct'])) {
    $ten = $_POST['SuaTenSP'];
    $hinh = "";
    $size = $_POST['SuaSize'];
    $ht = ($_POST['SuaMaLHT'] !== "" ? "`MaLHT` = '" . $_POST['SuaMaLHT'] . "'," : '');
    $mm = ($_POST['SuaMaLMM'] !== "" ? "`MaLMM` = '" . $_POST['SuaMaLMM'] . "'," : '');
    $tm = ($_POST['SuaMaLTM'] !== "" ? "`MaLTM` = '" . $_POST['SuaMaLTM'] . "'," : '');
    $gia = $_POST['SuaDonGia'];
    $sl = $_POST['SuaSoLuongSP'];
    $sqledit="";
    $id=$_POST['SuaMaSP'];
    if (isset($_FILES['SuaHinhAnh'])) {
      $type = substr($_FILES['SuaHinhAnh']["type"], 6, 10);
      $fileName = "TS_" . gen_uuid() . "." . $type;
      $hinh = $fileName;
      // echo  $type;
      $_FILES['SuaHinhAnh']["name"] = $fileName;
      $target_file = "../assets/img/menu/" . basename($_FILES['SuaHinhAnh']["name"]);

      move_uploaded_file($_FILES["SuaHinhAnh"]["tmp_name"], $target_file);
      $sqledit = "UPDATE `sanpham` SET `TenSP` = '$ten', `HinhAnh` = '$hinh ', `Size` = '$size', $ht $mm $tm `DonGia` = '$gia', `SoLuongSP` = '$gia' WHERE `sanpham`.`MaSP` = $id";
    }
    else
    {
      $sqledit = "UPDATE `sanpham` SET `TenSP` = '$ten',  `Size` = '$size',$ht $mm $tm `DonGia` = '$gia', `SoLuongSP` = '$gia' WHERE `sanpham`.`MaSP` = $id";
    }
    
    if (!mysqli_query($conn, $sqledit)) {
      echo "Error: " . $sqledit . "<br>" . mysqli_error($conn);
    }
   
  }

  if(isset($_POST['deleteProduct'])){
    $MaSP = $_POST['MaSP'];
    $sqlDelete = "DELETE FROM `sanpham` WHERE `sanpham`.`MaSP` = '$MaSP'";
    if (!mysqli_query($conn, $sqlDelete)) {
      echo "Error: " . $sqlDelete . "<br>" . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
  ?>
  <!-- ---Admin--- -->

  <div style="padding-top: 17rem; padding-bottom: 3rem;">
    <div class="container">
      <div style="font-size: 3rem; font-weight: bold; text-align: center; color: rgba(62, 62, 247, 0.658);padding-bottom: 3rem;">Danh Sách Thực Đơn</div>
      <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" data-toggle="modal" data-target="#addsp" class="btn bg-primary mb-4 text-white" style='font-size: 1.8rem;'>Thêm Thực Đơn</button>
        <!-- Modal -->
        <div class="modal fade" style='z-index: 1045;' id="addsp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <!-- ================================ Form xử lý ============================ -->
            <form action="/Quan_Ly_TS/Admin/admin.php" method="POST" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class='modal-title' id='exampleModalLabel' style='font-size: 1.8rem;'>Thêm Thực Đơn</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class='modal-body text-left' style='font-size: 1.5rem;'>
                  Tên Sản Phẩm : <input type='text' value="<?php if (isset($ten)) echo $ten; ?>" name="TenSP" class='form-control mb-3'>
                  Hình Ảnh : <input name="HinhAnh" value="" type='file' class='form-control-file mb-3'>
                  Size :
                  <select name="Size" value="<?php if (isset($size)) echo $size; ?>" class='form-control mb-3'>
                    <option value="0">M</option>
                    <option value="1">L</option>
                  </select>
                  Đơn Giá : <input type='text' value="<?php if (isset($gia)) echo $gia; ?>" name="DonGia" class='form-control mb-3'>
                  Loại Hiện Tại :
                  <select name="MaLHT" value="<?php if (isset($ht)) echo $ht; ?>" class='form-control mb-3'>
                    <option value=""></option>
                    <option value="1">Latte Series</option>
                    <option value="2">Thức uống đặc biệt Gong Cha</option>
                    <option value="3">Trà sữa</option>
                    <option value="4">Trà nguyên chất</option>
                    <option value="5">Thức uống sáng tạo</option>
                    <option value="6">Thức uống đá xay</option>
                    <option value="7">Topping</option>
                  </select>
                  Loại Món Mới :
                  <select name="MaLMM" value="<?php if (isset($mm)) echo $mm; ?>" class='form-control mb-3'>
                    <option value=""></option>
                    <option value="1">2021</option>
                    <option value="2">2020</option>
                    <option value="3">2019</option>
                    <option value="4">2018</option>
                  </select>
                  Loại Theo Mùa :
                  <select name="MaLTM" value="<?php if (isset($tm)) echo $tm; ?>" class='form-control mb-3'>
                    <option value=""></option>
                    <option value="1">Mùa xuân</option>
                    <option value="2">Mùa hạ</option>
                    <option value="3">Mùa thu</option>
                    <option value="4">Mùa đông</option>
                  </select>
                  Số Lượng SP : <input value="<?php if (isset($sl)) echo $sl; ?>" type='text' name="SoLuongSP" class='form-control mb-3'>
                </div>
                <div class="modal-footer">
                  <button type='submit' name="add" style='font-size: 1.5rem;' class='btn bg-primary'>Thêm</button>
                  <button type='button' style='font-size: 1.5rem;' class='btn bg-secondary' data-dismiss='modal'>Huỷ</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <table class="table table-striped table-bordered" style="font-size: 1.8rem;">
        <thead>
          <tr class="text-center">
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">STT</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Tên Thực Đơn</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Ảnh</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Size</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Đơn Giá</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">TĐ Hiện Tại</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">TĐ Món Mới</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">TĐ Theo Mùa</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Số Lượng SP</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Sửa/Xoá</th>

          </tr>
        </thead>
        <tbody class="text-center">
          <?php
          if ($sanpham) {
            $index = 0;
            while ($row = $sanpham->fetch_assoc()) {
              $index++;
              echo "<tr>
                  <td style='text-align: center;'>" . $index . "</td>
                  <td>" . $row['TenSP'] . "</td>
                  <td>" . $row['HinhAnh'] . "</td>";
              //Size
              if ($row['Size'] === "0") {
                echo "<td> M</td>";
              } else echo "<td> L</td>";
              echo "<td>" . $row['DonGia'] . "</td>";
              //Loai
              echo "    <td>" . $row['TenLHT'] . "</td>
                        <td>" . $row['TenLMM'] . "</td>
                        <td>" . $row['TenLTM'] . "</td>
                        <td>" . $row['SoLuongSP'] . "</td>
                      <td >
                        <div class='d-flex justify-content-center'>
                          <div>
                            <i class='fa fa-edit pr-1' data-toggle='modal' data-target='#editsp".$row['MaSP']."'></i>
                              <div class='modal fade' style='z-index: 1045;' id='editsp".$row['MaSP']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                  <div class='modal-content'>
                                  <form action='/Quan_Ly_TS/Admin/admin.php' method='POST' enctype='multipart/form-data'>
                                    <div class='modal-header'>
                                      <h5 class='modal-title' id='exampleModalLabel'>Chỉnh sửa sản phẩm: ".$row['TenSP']."</h5>
                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                      </button>
                                    </div>
                                    <div class='modal-body text-left' style='font-size: 1.5rem;'>
                                    <input type='hidden' name='SuaMaSP' value='".$row['MaSP']."'>
                                        Tên Sản Phẩm : <input type='text' name='SuaTenSP' class='form-control mb-3' value='".$row['TenSP']."'>
                                        Hình Ảnh :  <input type='file' name='SuaHinhAnh' class='form-control-file'>
                                        Size :
                                          <select class='form-control mb-3' name='SuaSize' value='".$row['Size']."'>
                                            <option value='0'>M</option>
                                            <option '1'>L</option>
                                          </select>
                                          Loại Hiện Tại :
                                          <select name='SuaMaLHT' class='form-control mb-3'>
                                            <option value=''></option>
                                            <option value='1'>Latte Series</option>
                                            <option value='2'>Thức uống đặc biệt Gong Cha</option>
                                            <option value='3'>Trà sữa</option>
                                            <option value='4'>Trà nguyên chất</option>
                                            <option value='5'>Thức uống sáng tạo</option>
                                            <option value='6'>Thức uống đá xay</option>
                                            <option value='7'>Topping</option>
                                          </select>
                                          Loại Món Mới :
                                          <select name='SuaMaLMM' class='form-control mb-3'>
                                            <option value=''></option>
                                            <option value='1'>2021</option>
                                            <option value='2'>2020</option>
                                            <option value='3'>2019</option>
                                            <option value='4'>2018</option>
                                          </select>
                                          Loại Theo Mùa :
                                          <select name='SuaMaLTM' class='form-control mb-3'>
                                            <option value=''></option>
                                            <option value='1'>Mùa xuân</option>
                                            <option value='2'>Mùa hạ</option>
                                            <option value='3'>Mùa thu</option>
                                            <option value='4'>Mùa đông</option>
                                          </select>
                                        Đơn Giá : <input type='text' name='SuaDonGia' class='form-control mb-3' value='".$row['DonGia']."'>
                                        Số Lượng SP : <input type='text' name='SuaSoLuongSP' class='form-control mb-3' value='".$row['SoLuongSP']."'>
                                    </div>
                                    <div class='modal-footer'>
                                      <button type='submit' name='editProduct' style='font-size: 1.5rem;' class='btn bg-primary'>Lưu</button>
                                      <button type='button'  style='font-size: 1.5rem;' class='btn bg-secondary' data-dismiss='modal''>Huỷ</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                            </div>
                          </div>
                        <div>
                          <i class='fa fa-trash' data-toggle='modal' data-target='#deletesp".$row['MaSP']."'></i>
                            <div class='modal fade' style='z-index: 1045;' id='deletesp".$row['MaSP']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog'>
                                <div class='modal-content'>
                                <form action='' method='POST'>
                                  <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Xoá Sản Phẩm</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>
                                  <div class='modal-body text-danger' style='font-size: 1.5rem;'>
                                    Bạn muốn xoá sản phẩm '".$row['TenSP']."'?
                                  </div>
                                  <input type='hidden' name='MaSP' value='".$row['MaSP']."'>
                                  <div class='modal-footer'>
                                    <button type='submit' name='deleteProduct' style='font-size: 1.5rem;' class='btn  bg-primary'>Xoá</button>
                                    <button type='button' style='font-size: 1.5rem;' class='btn bg-secondary' data-dismiss='modal''>Huỷ</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   </td>
                </tr>";
            }
          } else echo "<tr>
                      <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                              </tr>";
          ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation example" style="font-size: 2rem;">
        <ul class="pagination justify-content-center pt-2">
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
      <?php require("./footerAd.php") ?>
</body>

</html>