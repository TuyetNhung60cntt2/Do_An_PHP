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
    <?php require("./headerAd.php") ?>
     <!-- ---Admin--- -->
     <div style="padding-top: 17rem; padding-bottom: 3rem;">
        <div class="container">
            <div style="font-size: 3rem; font-weight: bold; text-align: center; color: rgba(62, 62, 247, 0.658);padding-bottom: 3rem;">Danh Sách Nhân Viên</div>
            <table class="table table-striped table-bordered"style="font-size: 2rem;">
                <thead>
                  <tr class="text-center">
                    <th style="background-color: rgba(0, 0, 255, 0.562);" scope="col">STT</th>
                    <th style="background-color: rgba(0, 0, 255, 0.562);"scope="col">Tên Nhân Viên</th>
                    <th style="background-color: rgba(0, 0, 255, 0.562);"scope="col">Địa Chỉ</th>
                    <th style="background-color: rgba(0, 0, 255, 0.562);"scope="col">Số Điện Thoại</th>
                    <th style="background-color: rgba(0, 0, 255, 0.562);"scope="col">Email</th>
                    <th style="background-color: rgba(0, 0, 255, 0.562);"scope="col">Sửa/Xoá</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td >1</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mark</td>
                    <td>Thornton</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
              <nav aria-label="Page navigation example" style="font-size: 2rem;" >
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