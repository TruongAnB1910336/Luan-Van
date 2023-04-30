<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>KHUYẾN MÃI THỰC ĐƠN TỰ CHỌN</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
    <header>
        <div class="div-i-header">
            <i class="fa-solid fa-phone"></i>Điện thoại: (08).3962.3228 &emsp;
            <i class="fa-solid fa-phone"></i>Hotline: 0902.816.288 &emsp;
            <i class="fa-solid fa-envelope"></i>Email: tieccuoicatkhanh@gmail.com
        </div>
        <div class="nav" >
           <a href="../index.php" style="margin-left: 20px;padding: 20px;"> <img src="../img/iconcatkhanh.jpg" style="height:100px;width: 150px;border-radius: 20px;"></a>
           <div class="div-menu">
            <a href="../index.php"><i class="fa-solid fa-house"></i>TRANG CHỦ</a>
            <a href="../gioithieu.php"><i class="fa-solid fa-star"></i> GIỚI THIỆU</a>
            <div class="dropdown1">
            <a href="#"><i class="fa-solid fa-bowl-food"></i>THỰC ĐƠN
                <div class="list-menu1">
                    <a href="thucdontc.php" style="text-align: left;"><i class="fa-regular fa-star"></i>Thực Đơn Tự Chọn</a>
                    <a href="khuyenmaitdtc.php" style="text-align: left;"><i class="fa-solid fa-gift"></i>Khuyến Mãi Thực Đơn Tự Chọn</a>
                </div>
                </a>
                </div>
                <a href="../dichvu.php"><i class="fa-solid fa-bowl-food"></i>DỊCH VỤ</a>
                <a href="../yeuthich.php"><i class="fa-solid fa-cake-candles"></i>YÊU THÍCH</a>
                <a href="../tintuc.php"><i class="fa-solid fa-newspaper"></i>TIN TỨC</a>
                <a href="../lienhe.php"><i class="fa-solid fa-phone-volume"></i>LIÊN HỆ</a>
                <a href="../dangnhap.php"><i class="fa-solid fa-right-to-bracket"></i>ĐĂNG NHẬP</a>
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
                  header('location: ../dangnhap.php');
                }
            ?>
           </div>
        </div>
    </header>

    <main>
        <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
            <img src="../img/hoatiet.webp" style="height: 100px;width: 100px;" style="display: inline;">
            <h2 style="display: inline;">KHUYẾN MÃI THỰC ĐƠN TỰ CHỌN</h3>
            <img src="../img/hoatiet.webp" style="height: 100px;width: 100px;">
        </div>
       <div style="text-align: center;" class="container">
            <b>Cát Khánh áp dụng khuyến mãi thực đơn tự chọn cho các cặp uyên ương trong mùa cưới 2023 như sau:</b>
       </div>

       <div class="row container" style="margin-left: 70px;margin-top: 20px;margin-bottom: 10px;">
        <div class="col-6">
            <div class="menu-monan1">
                <img src="../img/hinh-anh-hoa-cuoi.jpg" style="height: 600px;width: 500px;">
                <div class="thucdon1">
                    <h4 style="text-align: center;font-weight: 1000;">TIỆC 10-15 BÀN</h4>
                    <p>
                        - Hoa Tươi Bàn Tiệc
                    </p>
                    <p>
                        - Trụ Hoa Trang Trí Lối Đi
                    </p>
                    <p>
                        - Trang Trí Sảnh Tiệc Sang Trọng
                    </p>
                    <p>
                        - Trang Trí Sân Khấu (Sảnh: Vinh Hoa & Long Phụng)
                    </p>
                    <p>
                        - Trang Trí Bàn Ký Tên Tiêu Chuẩn
                    </p>
                    <p>
                        - Giỏ Hoa Tiền Mừng
                    </p>
                    <p>
                        - Liễn Bút Ký Tên Đón Khách
                    </p>
                    <p>
                        - Cổng Hoa Đón Khách
                    </p>
                    <p>
                        - 02 Chai Rượu Champagne
                    </p>
                    <p>
                        - Tháp Ly + Đá Khói
                    </p>

                    <div style="background-color: aqua; color: blue;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>
                </div>
               </div>
        </div>
        <div class="col-6" style="margin-bottom: 30px;">
            <div class="menu-monan2">
                <img src="../img/hinh-anh-hoa-cuoi.jpg" style="height: 700px;width: 500px;">
                <div class="thucdon2">
                    <h4 style="text-align: center;font-weight: 1000;">TIỆC 16-24 BÀN</h4>
                    <p>
                        - Hoa Tươi Bàn Tiệc
                    </p>
                    <p>
                        - Trụ Hoa Trang Trí Lối Đi
                    </p>
                    <p>
                        - Trang Trí Sảnh Tiệc Sang Trọng
                    </p>
                    <p>
                        - Trang Trí Sân Khấu (Sảnh: Vinh Hoa & Long Phụng)
                    </p>
                    <p>
                        - Trang Trí Bàn Ký Tên Tiêu Chuẩn
                    </p>
                    <p>
                        - Giỏ Hoa Tiền Mừng
                    </p>
                    <p>
                        - 02 Chai Rượu Champagne
                    </p>
                    <p>
                        - Tháp Ly + Đá Khói
                    </p>
                    <p>
                        - Pháo Hoa Kim Tuyến (04 Viên )
                    </p>
                    <p>
                        - MC Việt Dẫn Chương Trình Nghi Thức Lễ
                    </p>
                    <p>
                        - Ban Nhạc 02 Nhạc Công ( 2H )
                    </p>
                    <p>
                        - Lễ Tân Đón Khách ( Cổng Chính )
                    </p>
                    <p>
                        - Phần Ăn Nhẹ Cho Đôi Uyên Ương
                    </p>

                    <div style="background-color: aqua; color: blue;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>

                </div>
               </div>
        </div>

        <div class="col-6" style="margin-top: -100px;">
            <div class="menu-monan1">
                <img src="../img/hinh-anh-hoa-cuoi.jpg" style="height: 760px;width: 500px;">
                <div class="thucdon1">
                    <h4 style="text-align: center;font-weight: 1000;">TIỆC 25-30 BÀN</h4>
                    <p>
                        - Hoa Tươi Bàn Tiệc
                    </p>
                    <p>
                        - Trụ Hoa Trang Trí Lối Đi
                    </p>
                    <p>
                        - Trang Trí Sảnh Tiệc Sang Trọng
                    </p>
                    <p>
                        - Trang Trí Sân Khấu (Sảnh: Vinh Hoa & Long Phụng)
                    </p>
                    <p>
                        - Trang Trí Bàn Ký Tên Tiêu Chuẩn
                    </p>
                    <p>
                        - Giỏ Hoa Tiền Mừng
                    </p>
                    <p>
                        - Liễn Bút Ký Tên Đón Khách
                    </p>
                    <p>
                        - Cổng Hoa Đón Khách
                    </p>
                    <p>
                        - 02 Chai Rượu Champagne
                    </p>
                    <p>
                        - Tháp Ly + Đá Khói
                    </p>
                    <p>
                        - Pháo Hoa Kim Tuyến (04 Viên )
                    </p>
                    <p>
                        - Vũ Điệu Uyên Ương Khai Mạc Lễ
                    </p>
                    <p>
                        - 50% Thiệp Cưới Sang Trọng 
                    </p>
                    <p>
                        - Tặng 02 Ca Sĩ (01 Ca Sĩ Hát 02 Bài)
                    </p>
                    <p>
                        -Backdrop Chụp Hình
                    </p>


                    <div style="background-color: aqua; color: blue;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>
                </div>
               </div>
        </div>
        <div class="col-6" style="margin-bottom: 30px;">
            <div class="menu-monan2">
                <img src="../img/hinh-anh-hoa-cuoi.jpg" style="height: 840px;width: 500px;">
                <div class="thucdon2">
                    <h4 style="text-align: center;font-weight: 1000;">TIỆC 31-40 BÀN</h4>
                    <p>
                        - Hoa Tươi Bàn Tiệc
                    </p>
                    <p>
                        - Trụ Hoa Trang Trí Lối Đi
                    </p>
                    <p>
                        - Trang Trí Sảnh Tiệc Sang Trọng
                    </p>
                    <p>
                        - Trang Trí Sân Khấu (Sảnh: Vinh Hoa & Long Phụng)
                    </p>
                    <p>
                        - Trang Trí Bàn Ký Tên Tiêu Chuẩn
                    </p>
                    <p>
                        - Giỏ Hoa Tiền Mừng
                    </p>
                    <p>
                        - 02 Chai Rượu Champagne
                    </p>
                    <p>
                        - Tháp Ly + Đá Khói
                    </p>
                    <p>
                        - Pháo Hoa Kim Tuyến (04 Viên )
                    </p>
                    <p>
                        - MC Việt Dẫn Chương Trình Nghi Thức Lễ
                    </p>
                    <p>
                        - Ban Nhạc 02 Nhạc Công ( 2H )
                    </p>
                    <p>
                        - Lễ Tân Đón Khách ( Cổng Chính )
                    </p>
                    <p>
                        - Phần Ăn Nhẹ Cho Đôi Uyên Ương
                    </p>
                    <p>
                        - Vũ Đoàn Múa Khai Mạc Lễ
                    </p>
                    <p>
                        - Khánh Tiết Rước Ba Mẹ Lên Sân Khấu
                    </p>
                    <p>
                        - 50% Màn Hình Led Sang Trọng
                    </p>
                    <p>
                        - 50% Thiệp Cưới Sang Trọng
                    </p>

                    <div style="background-color: aqua; color: blue;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>

                </div>
               </div>
        </div>

        <div class="col-6" style="margin-bottom: 30px;margin-top: -180px;">
            <div class="menu-monan2">
                <img src="../img/hinh-anh-hoa-cuoi.jpg" style="height: 910px;width: 500px;">
                <div class="thucdon2">
                    <h4 style="text-align: center;font-weight: 1000;">TIỆC 41 BÀN TRỞ LÊN</h4>
                    <p>
                        - Hoa Tươi Bàn Tiệc
                    </p>
                    <p>
                        - Trụ Hoa Trang Trí Lối Đi
                    </p>
                    <p>
                        - Trang Trí Sảnh Tiệc Sang Trọng
                    </p>
                    <p>
                        - Trang Trí Sân Khấu (Sảnh: Vinh Hoa & Long Phụng)
                    </p>
                    <p>
                        - Trang Trí Bàn Ký Tên Tiêu Chuẩn
                    </p>
                    <p>
                        - Giỏ Hoa Tiền Mừng
                    </p>
                    <p>
                        - 02 Chai Rượu Champagne
                    </p>
                    <p>
                        - Tháp Ly + Đá Khói
                    </p>
                    <p>
                        - Pháo Hoa Kim Tuyến (04 Viên )
                    </p>
                    <p>
                        - MC Việt Dẫn Chương Trình Nghi Thức Lễ
                    </p>
                    <p>
                        - Ban Nhạc 02 Nhạc Công ( 2H )
                    </p>
                    <p>
                        - Lễ Tân Đón Khách ( Cổng Chính )
                    </p>
                    <p>
                        - Phần Ăn Nhẹ Cho Đôi Uyên Ương
                    </p>
                    <p>
                        - Vũ Đoàn Múa Khai Mạc Lễ
                    </p>
                    <p>
                        - Khánh Tiết Rước Ba Mẹ Lên Sân Khấu
                    </p>
                    <p>
                        - 50% Màn Hình Led Sang Trọng
                    </p>
                    <p>
                        - 50% Thiệp Cưới Sang Trọng
                    </p>
                    <p>
                        - Màn Hình Hiện Đại
                    </p>
                    <p>
                        - Xe hoa đón dâu nội thành
                    </p>

                    <div style="background-color: aqua; color: blue;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>

                </div>
               </div>
        </div>


       </div>
       
    </main>

    <footer style="margin-top: 50px;background-color: aqua; padding: 10px;">
        <div class="row">
            <div class="col-4" style="text-align: center;">
              <a href="../index.html" style="margin-left: 20px;padding: 20px;"> <img src="../img/iconcatkhanh.jpg" style="height:200px;width: 300px;border-radius: 20px;"></a>
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