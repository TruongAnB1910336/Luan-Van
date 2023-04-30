<?php 
include_once('connect.php');
require ('./mail/sendmail.php');
?>
<?php 
    if(isset($_POST['dangky'])) {
        $username=$_POST['hoten'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $mk=$_POST['matkhau'];
        $diachi=$_POST['diachi'];
        $sql_kt=mysqli_query($conn,"select * from khach_hang where email='$email' or matkhau='$mk' limit 1");
        $count=mysqli_num_rows($sql_kt);
        if($count>0){
            echo '<script>alert("Tài khoản đã tồn tại!")</script>';
        }
        else{
            $sql_dk=mysqli_query($conn,"insert into khach_hang(ten,sdt,diachi,email,matkhau) values('$username','$sdt','$diachi','$email','$mk')");
            echo '<script>alert("Đăng ký thành công!")</script>';
            $tieude="Xin Chào $username";
            $noidung="
                <p>Bạn đã đăng ký tài khoản thành công</p>
                <p>Tên đăng nhập: $username</p>
                <p>Mật khẩu: $mk</p>
            ";
            $mail= new Mailer();
            $mail->dangky($tieude,$noidung,$email);
            // header("location: dangnhap.php");
        }
       
    }
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>ĐĂNG KÝ</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/script.js"></script>
    </head>
<body>
    <header>
        <div class="div-i-header">
            <i class="fa-solid fa-phone"></i>Điện thoại: (08).3962.3228 &emsp;
            <i class="fa-solid fa-phone"></i>Hotline: 0902.816.288 &emsp;
            <i class="fa-solid fa-envelope"></i>Email: tieccuoicatkhanh@gmail.com
        </div>
        <div class="nav" >
           <a href="index.php" style="margin-left: 20px;padding: 20px;"> <img src="img/iconcatkhanh.jpg" style="height:100px;width: 150px;border-radius: 20px;"></a>
           <div class="div-menu">
            <a href="index.php"><i class="fa-solid fa-house"></i>TRANG CHỦ</a>
            <a href="gioithieu.php"><i class="fa-solid fa-star"></i> GIỚI THIỆU</a>
            <div class="dropdown1">
            <a href="#"><i class="fa-solid fa-bowl-food"></i>THỰC ĐƠN
            <div class="list-menu1">
                <a href="thucdon/thucdontc.php" style="text-align: left;"><i class="fa-regular fa-star"></i>Thực Đơn Tự Chọn</a>
                <a href="thucdon/khuyenmaitdtc.php" style="text-align: left;"><i class="fa-solid fa-gift"></i>Khuyến Mãi Thực Đơn Tự Chọn</a> 
            </div>
            </a>
            </div>
            <a href="dichvu.php"><i class="fa-solid fa-bowl-food"></i>DỊCH VỤ</a>
            <a href="yeuthich.php"><i class="fa-solid fa-cake-candles"></i>YÊU THÍCH</a>
            <a href="tintuc.php"><i class="fa-solid fa-newspaper"></i>TIN TỨC</a>
            <a href="lienhe.php"><i class="fa-solid fa-phone-volume"></i>LIÊN HỆ</a>
            <a href="dangnhap.php"><i class="fa-solid fa-right-to-bracket"></i>ĐĂNG NHẬP</a>
            <?php
                if(isset($_SESSION['ten_kh'])){
                  $tag_dangxuat=' <a href="?dangxuat="dangxuat"><i class="fa-solid fa-plane"></i>Đăng Xuất</a>';
                  echo $tag_dangxuat;
                }
            ?>
            <?php
                if(isset($_GET['dangxuat']) == 'dangxuat') {
                  unset($_SESSION['id_kh']);
                  unset($_SESSION['ten_kh']);
                  header('location: dangnhap.php');
                }
            ?>
           </div>
        </div>
    </header>

    <main>

        <div class="container" style="border: 1px solid;width: 500px;padding: 20px;margin-top: 30px;background-color: #aaffaa;">
          <h4 style="text-align: center;margin-bottom: 40px;">ĐĂNG KÝ</h4>
          <form action="dangky.php" method="POST">
              <input type="text" name="hoten" placeholder="Tên Đăng Nhập" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              <input type="text" name="email" id="email" placeholder="Email" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              <input type="text" name="sdt" id="sdt" placeholder="Số Điện Thoại" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              <input type="text" name="diachi" placeholder="Địa Chỉ" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              <input type="password" name="matkhau" id="matkhau" placeholder="Mật Khẩu" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              <input type="password" id="nhaplaimk" placeholder="Nhập Lại Mật Khẩu" size="55" style="background-color: blanchedalmond;border: 1px solid;"><br><br>
              
              <button onclick="return hamdk()" class="btn btn-success" style="margin-left: 170px;margin-top: 20px; " name="dangky">ĐĂNG KÝ</button>
          </form>
        </div>
    </main>

    <footer style="margin-top: 50px;background-color: aqua; padding: 10px;">
        <div class="row">
            <div class="col-4" style="text-align: center;">
              <a href="index.html" style="margin-left: 20px;padding: 20px;"> <img src="img/iconcatkhanh.jpg" style="height:200px;width: 300px;border-radius: 20px;"></a>
              <h4 style="color: blue;">NHÀ HÀNG TIỆC CƯỚI CÁT KHÁNH</h2>
              <p style="color: blue;">123A Phạm Ngũ Lão, P11, Q11, TP.HCM</p>
            </div>
            <div class="col-8">
              <div class="row" style="text-align: center; color: blue;">
                <div class="col-4">
                  <i class="fa-solid fa-blender-phone fa-2x"></i>
                  <hr>
                  ĐIỆN THOẠI
                  <hr>
                  (028) 999 999
                </div>
                <div class="col-4">
                  <i class="fa-solid fa-phone fa-2x"></i> 
                  <hr>
                  HOTLINE
                  <hr>
                  0902181181
                </div>
                <div class="col-4">
                  <i class="fa-solid fa-envelope fa-2x"></i>
                  <hr>
                  EMAIL
                  <hr>
                  tieccuoicatkhanh@gmail.com
                </div>
              </div>
            </div>
        </div>
    </footer>

</body>
</html>