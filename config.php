<?php
    $hostName = "127.0.0.1";
    $user ="root";
    $password="";
    $dbName="ql_ban_tra_sua";
    
    $conn= mysqli_connect($hostName,$user,$password,$dbName) or die('Không thể kết nối đến database'.mysqli_connect_error());
    echo "<script> console.log('kết nối thành công');</script>";
    mysqli_set_charset($conn,'UTF8');

?>