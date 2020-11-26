<?php
    $tendangnhap = $_GET['username'];
    $matkhau = $_GET['passwork'];
    if($tendangnhap == 'admin' && $matkhau == '123'){
        echo"Đăng nhập thành công";
    }else echo"Đăng nhâp thất bại";
?>