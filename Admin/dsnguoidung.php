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
  require("../config.php");
  $sql = "SELECT `nguoidung`.*, `taikhoan`.*, `loainguoidung`.*
        FROM `nguoidung` 
          LEFT JOIN `taikhoan` ON `nguoidung`.`MaTK` = `taikhoan`.`MaTK` 
          LEFT JOIN `loainguoidung` ON `taikhoan`.`MaLND` = `loainguoidung`.`MaLND` WHERE `loainguoidung`.`MaLND`= 3;";
  $dsnguoidung = mysqli_query($conn, $sql);
  ?>
  <!-- ---Admin--- -->
  <div style="padding-top: 17rem; padding-bottom: 3rem;">
    <div class="container">
      <div style="font-size: 3rem; font-weight: bold; text-align: center; color: rgba(62, 62, 247, 0.658);padding-bottom: 3rem;">Danh Sách Khách Hàng</div>
      <div class="d-flex justify-content-end">
        <button type="button" class="btn bg-primary mb-4 text-white"  style='font-size: 1.8rem;'>Thêm Khách Hàng</button>
      </div>
      <table class="table table-striped table-bordered" style="font-size: 1.8rem;">
        <thead>
          <tr class="text-center">
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">STT</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Tên Khách Hàng</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Địa Chỉ</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Số Điện Thoại</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Email</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Tài Khoản</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Mật Khẩu</th>
            <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">Sửa/Xoá</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php
          if ($dsnguoidung) {
            $index = 0;
            while ($row = $dsnguoidung->fetch_assoc()) {
              $index++;
              echo "<tr>
                        <td style='text-align: center;'>" . $index . "</td>
                        <td>" . $row['TenND'] . "</td>
                        <td>" . $row['DiaChi'] . "</td>
                        <td>" . $row['SDT'] . "</td>
                        <td>" . $row['Email'] . "</td>
                        <td>" . $row['TenTK'] . "</td>
                        <td>" . $row['MatKhau'] . "</td>
                        <td class='d-flex justify-content-center'>
                      <div>
                        <i class='fa fa-edit pr-1' data-toggle='modal' data-target='#editkh'></i>
                          <div class='modal fade' style='z-index: 1045;' id='editkh' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLabel'>Thông Tin Khách Hàng Cần Chỉnh Sửa</h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                                </div>
                                <div class='modal-body text-left' style='font-size: 1.5rem;'>
                                Tên Khách Hàng : <input type='text' class='form-control mb-3'>
                                Địa Chỉ: <input type='text' class='form-control mb-3'>
                                SĐT : <input type='text' class='form-control mb-3'>
                                Email : <input type='email' class='form-control mb-3'>
                                Tên Tài Khoảm : <input type='text' class='form-control mb-3'>
                                Mật Khẩu : <input type='text' class='form-control mb-3'>
                                </div>
                                <div class='modal-footer'>
                                  <button type='submit'  style='font-size: 1.5rem;' class='btn bg-primary' data-dismiss='modal'>Lưu</button>
                                  <button type='submit'  style='font-size: 1.5rem;' class='btn bg-secondary' data-dismiss='modal''>Huỷ</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                      <i class='fa fa-trash' data-toggle='modal' data-target='#deletekh'></i>
                        <div class='modal fade' style='z-index: 1045;' id='deletekh' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Xoá Khách Hàng</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body text-danger' style='font-size: 1.5rem;'>
                                Bạn muốn xoá khách hàng này?
                              </div>
                              <div class='modal-footer'>
                                <button type='button' style='font-size: 1.5rem;' class='btn  bg-primary'  data-dismiss='modal'>Xoá</button>
                                <button type='button' style='font-size: 1.5rem;' class='btn bg-secondary' data-dismiss='modal''>Huỷ</button>
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
    </div>
  </div>
  <?php require("./footerAd.php") ?>
  <!-- Script common -->
  <script src="./assets/js/commonscript.js"></script>
</body>

</html>