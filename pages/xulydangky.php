<?php
    $tendangnhap = $_POST['username'];
    $passwork = $_POST['passwork'];
    $hoten = $_POST['txtHoten'];
?>
<h1>Bạn đã đăng ký thành công</h1>
<p>Tên đăng nhập là: <?php echo"<span style='color:red;'> $tendangnhap</span>";?></p>
<p>Mật khẩu là: <?php echo $passwork?></p>
<p>Họ tên bạn là: <?php echo $hoten?></p>