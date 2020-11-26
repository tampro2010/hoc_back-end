<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
</head>
<body>
    <h2>Đăng Nhập</h2>

    <form action="" method="get" name="frmDangnhap" id="frmDangnhap">
        Tên Đăng Nhập: <input type="text" name="username" id="username"><br>
        Mật Khẩu: <input type="passwork" name="passwork" id="passwork"><br>
        <input type="submit" name="login" id="login" value="Đăng Nhập">
    </form>
    
    <?php
        if(isset($_GET['login'])){
            $username = $_GET['username'];
            $paswork = $_GET['passwork'];
            if($username == 'admin' && $paswork == '123'){
                echo"<p style='color:green;'>Đăng nhập thành công!!!</p>";
            }else{
                echo"<p style='color:red;'>Đăng nhập thất bại!!!</p>";
            }
        }
    ?>
</body>
</html>