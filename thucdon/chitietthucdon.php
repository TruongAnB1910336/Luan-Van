<?php 
    include_once('../connect.php');
    session_start();
    $_SESSION['id_td']=$_GET['id'];
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
        <title>CHI TIẾT THỰC ĐƠN</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <h2 style="display: inline;">CHI TIẾT THỰC ĐƠN</h3>
            <img src="../img/hoatiet.webp" style="height: 100px;width: 100px;">
        </div>
       <div style="text-align: center;" class="container">
            <b>Thực đơn tại Cát Khánh là sự kết hợp của tinh hoa ẩm thực dưới bàn tay nghệ thuật của những đầu bếp tài ba.
                
            </b><br>
            <b>
                Với thực đơn đa dạng, hấp dẫn và phong phú với hơn 200 món ăn từ đơn giản đến phức tạp sẽ để lại những dư vị ngọt ngào và cảm giác an lành cho bất cứ ai tham dự.
            </b>
       </div>

       <?php 
             $sql_chitiet=mysqli_query($conn,"select * from thucdon where id_td=" .$_GET['id']);
       ?>

       <div class="row container" style="margin-left: 70px;margin-top: 20px;margin-bottom: 10px;">
       <?php 
            while($row_chitiet=mysqli_fetch_array($sql_chitiet)){
       ?>
        <div class="col-6">
            <div class="menu-monan1">
                <img src="../img/monan.png" style="height: 400px;width: 500px;">
                <div class="thucdon1">
                <h4 style="text-align: center;font-weight: 1000;">Menu <?php echo $row_chitiet['STT'] ?></h4>
                    <p>
                         <?php echo $row_chitiet['tentd1'] ?>
                    </p>
                    <p>
                        <?php echo $row_chitiet['tentd2'] ?>
                    </p>
                    <p>
                        <?php echo $row_chitiet['tentd3'] ?>
                    </p>
                    <p>
                        <?php echo $row_chitiet['tentd4'] ?>
                    </p>
                    <p>
                         <?php echo $row_chitiet['tentd5'] ?>
                    </p>
                    <p>
                         <?php echo $row_chitiet['tentd6'] ?>
                    </p>

                    <div style=" color: blue;padding: 5px;">
                        <p style="display: inline;">Yêu Thích <i class="fa-regular fa-star"></i></p>
                    </div>
                </div>
               </div>
        </div>

                <div class="col-6">
                    <b>
                        <?php echo $row_chitiet['ghichu'] ?>
                    </b>
                    <p>
                         - <?php echo $row_chitiet['tentd1'] ?>
                    </p>
                    <p>
                        -<?php echo $row_chitiet['tentd2'] ?>
                    </p>
                    <p>
                        -<?php echo $row_chitiet['tentd3'] ?>
                    </p>
                    <p>
                        -<?php echo $row_chitiet['tentd4'] ?>
                    </p>
                    <p>
                         -<?php echo $row_chitiet['tentd5'] ?>
                    </p>
                    <p>
                         -<?php echo $row_chitiet['tentd6'] ?>
                    </p>
                    <button class="btn btn-primary">Đặt Món</button>
                </div>
       <?php } ?>

       </div>

       <div class="container" style="margin-top: 40px; margin-left:100px;">
       <h2>Bình Luận</h2>
                    <div class="container">
                    <form method="POST" id="comment_form">
                        <div class="form-group">
                        <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Nhập bình luận..." rows="5"></textarea>
                        </div>
                        <!-- <input type="hidden" name="id_td" value="<?php echo $_GET['id'] ?>"> -->
                        <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Gửi" />
                        </div>
                    </form>
                    <span id="comment_message"></span>
                    <br />
                    <div id="display_comment"></div>
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
    
    <script>
        $(document).ready(function(){
            load_comment();
            $('#comment_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"them_bl.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
                })
            });

            load_comment();

            function load_comment()
            {
                $.ajax({
                url:"fech_comment.php",
                method:"POST",
                success:function(data)
                {
                    $('#display_comment').html(data);
                }
                })
            }

 
});
</script>


    
</body>
</html>