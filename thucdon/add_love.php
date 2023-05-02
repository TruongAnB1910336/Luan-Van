<?php 
include_once('../connect.php');
session_start();
if($_POST){
    $ten_kh=$_SESSION['ten_kh'];
    $id_td=trim($_POST['id_td']);
    $sql_add_love=mysqli_query($conn,"insert into yeu_thich(id_td,ten_kh) values('$id_td','$ten_kh')");
}
?>