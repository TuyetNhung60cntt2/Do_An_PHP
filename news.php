<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/new.css">
</head>

<body>
    <?php require("./header.php");
     require("./config.php");
     $sql="SELECT * FROM `tintuc`";
         $tintuc =mysqli_query($conn,$sql);
    ?>
    <div class="main" style="padding-top: 15rem; background-color: #f5eee8;">
        <div class="grid wide">
            <div class="main__taskbar">
                <div class="main__breadcrumb">
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Danh sách tin tức</a>
                    </div>
                </div>
            </div>
            <div class="list-new">
                     <?php
                        if ($tintuc) {
                            while ($row = $tintuc->fetch_assoc()) {
                            echo "<div href='#' class='new-item'>
                            <a href='#' class='new-item__img'>
                                <img style='max-width: 100%;' src='./assets/img/news/".$row['HinhAnhMH']."' alt=''>
                            </a>
                            <div class='new-item__body'>
                                <a style='text-decoration: none;' class='new-item__title'>
                                    ".$row['TenTT']."
                               </a>
                                <p class='new-item__time'> Ngày đăng:  ".$row['NgayDang']."</p>
                                <p class='new-item__description'> ".$row['NoiDung']."</p>
                            </div>
                        </div>";
                            }
                        } else echo " <tr>
                            <td colspan='6' align='center'>Không có bản ghi nào hiển thị </td>
                                    </tr>";
                    ?>
            </div>
        </div>
      <?php require("./footer.php") ?>
        <!-- Sccipt for owl caroucel -->

        <!-- Script common -->
    


</body>

</html>