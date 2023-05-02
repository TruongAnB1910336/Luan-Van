<?php
    include_once('../connect.php');
    session_start();
    $error = '';
    $comment_name = '';
    $comment_content = '';
    $id_td=$_SESSION['id_td'];
    // $_SESSION['id_td']=$id_td;
    if(empty($_SESSION['ten_kh']))
    {
    $error .= '<p class="text-danger">Bạn cần đăng nhập để bình luận! -><a href="../dangnhap.php" class="btn btn-primary">Đăng Nhập</a></p>';
    }
    else
    {
    $comment_name = $_SESSION['ten_kh'];
    }
    if(empty($_POST["comment_content"]))
    {
     $error .= '<p class="text-danger">Vui lòng nhập bình luận!</p>';
    }
    else
    {
     $comment_content = $_POST["comment_content"];
    }


    if($error == '')
        {
            $sql_them_bl=mysqli_query($conn,"insert into binh_luan(id_td,ten_kh,noidung) values('$id_td','$comment_name','$comment_content')");

        $error = '<label class="text-success"></label>';
        }

        $data = array(
        'error'  => $error
        );

    echo json_encode($data);

   

?>
