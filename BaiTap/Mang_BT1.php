<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng chuỗi bài tập 1</title>
</head>

<body>
    <?php
    if (isset($_POST["doDai"]))
        $doDai = trim($_POST["doDai"]);
    else
        $doDai = 0;
    ?>
    <form action="" method="POST">
        <label>Nhập độ dài của mảng</label>
        <input type="text" name="doDai" value="<?php echo $doDai ?>">
        <input type="submit" value="Kiểm tra">
        <div>Kết quả:</div>
        <div>
            <?php
            for ($i = 0; $i < $doDai; $i++) {
                $mang[$i] = rand(-100, 100);
                echo $mang[$i];
                echo "; ";
            }
            ?>
        </div>
        <div>Số giá trị chẵn trong mảng:
            <?php
            $dem = 0;
            for ($i = 0; $i < $doDai; $i++) {
                if ($mang[$i] % 2 == 0)
                    $dem++;
            }
            echo $dem;
            ?>
        </div>
        <div>Số giá trị bé hơn 100 trong mảng:
            <?php
            $dem = 0;
            for ($i = 0; $i < $doDai; $i++) {
                if ($mang[$i] < 100)
                    $dem++;
            }
            echo $dem;
            ?>
        </div>
        <div>Tổng các giá trị âm trong mảng:
            <?php
            $tongAm = 0;
            for ($i = 0; $i < $doDai; $i++) {
                if ($mang[$i] < 0)
                    $tongAm += $mang[$i];
            }
            echo $tongAm;
            ?>
        </div>
        <div>Vị trí các số bằng 0 trong mảng:
            <?php
            for ($i = 0; $i < $doDai; $i++) {
                if ($mang[$i] == 0) {
                    echo $i;
                    echo ", ";
                }
            }

            ?>
        </div>
        <div>Mảng sau khi sắp xếp(tăng dần):
            <?php
            if ($doDai != 0) {
                sort($mang);
                for ($i = 0; $i < $doDai; $i++) {
                    echo $mang[$i];
                    echo " ";
                }
            } else
                echo "";
            ?>
        </div>
    </form>
</body>

</html>