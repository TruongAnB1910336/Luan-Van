<?php 
include_once('connect.php');
session_start();
echo $_SESSION['ten_kh'];
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/style.css">
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
           </div>
        </div>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100 " style="height: 500px;">
              </div>
              <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100 " style="height: 500px;">
              </div>
              <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100 " style="height: 500px;" >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </header>
    
    <main>
        <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
            <img src="img/hoatiet.webp" style="height: 100px;width: 100px;" style="display: inline;">
            <h2 style="display: inline;">NHÀ HÀNG TIỆC CƯỚI CÁT KHÁNH</h3>
            <img src="img/hoatiet.webp" style="height: 100px;width: 100px;">
        </div>

        <div style="position: relative;">
          <img src="img/gioithieuu.jpg" class="w-100">
          <div class="cap1">
            
                <h2 style="text-align: center;">TRÂN TRỌNG KÍNH CHÀO</h2>
                <p style="text-align: center;">Nhà hàng Tiệc Cưới Cát Khánh tọa lạc tại 288ABC Lãnh Binh Thăng - P.11 - Q.11 - Tp. HCM,
                  tiếp giáp với các Quận 5, 6, 10, 11, rất thuận lợi về giao thông. 
                  Thực đơn tiệc cưới có trên 300 món là sự kết hợp tinh túy giữa ẩm thực Hoa - Việt,
                    được chế biến bởi các đầu bếp tài hoa giàu kinh nghiệm. </p>
                <p style="text-align: center;">
                  Đội ngũ nhân viên được đào tạo và làm việc trong môi trường chuyên nghiệp. 
                  Luôn lắng nghe và ghi nhận ý kiến đóng góp của Quý khách hàng. 
                  Luôn đổi mới và hoàn thiện nâng cao chất lượng phục vụ.
                </p>
                <p style="text-align: center;">&#9734; Cát Khánh - Chắp cánh yêu thương - Nơi ghi dấu hạnh phúc của các đôi uyên ương</p>
          </div>
        </div>

        <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
          <img src="img/hoatiet.webp" style="height: 100px;width: 100px;" style="display: inline;">
          <h2 style="display: inline;">THỰC ĐƠN</h3>
          <img src="img/hoatiet.webp" style="height: 100px;width: 100px;">
      </div>

      
      <div style="position: relative;">
        <img src="img/thucdon.jpg" class="w-100" style="height: 600px;">
        <div class="cap2">
          <p>
            Thực đơn, menu món ăn tiệc cưới hấp dẫn tại Tiệc cưới Cát Khánh sẽ đem lại cho 
            đôi bạn những giây phút thú vị bên cạnh người yêu thương, sự hài hòa trong từng 
            món ngon giúp ngày vui càng thêm ý nghĩa đặc sắc. Thựcđơn tiệc cưới có trên 300 
            món là sự kết hợp tinh túy giữa ẩm thực Hoa - Việt, được chế biến bởi các đầu bếp 
            tài hoa giàu kinh nghiệm.
          </p>
          <button class="btn btn-success" style="margin-left: 80%;"><a href="thucdon/thucdontc.php" style="color: white;text-decoration: none  ;">Xem Chi Tiết</a></button>     
        </div>
      </div>

      <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
        <img src="img/hoatiet.webp" style="height: 100px;width: 100px;" style="display: inline;">
        <h2 style="display: inline;">LIÊN HỆ</h3>
        <img src="img/hoatiet.webp" style="height: 100px;width: 100px;">
    </div>

    <div style="margin: 10px 30px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8414543437184!2d105.76842661401852!3d10.029938975271905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1677661627661!5m2!1svi!2s" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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