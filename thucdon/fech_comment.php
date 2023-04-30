<?php
include_once('../connect.php');
session_start();
$connect = new PDO('mysql:host=localhost;dbname=luanvan', 'root', '');
    $id_td=$_SESSION['id_td'];
    $query = "
    SELECT * FROM binh_luan
    WHERE id_td= '$id_td' ;
    ORDER BY id_bl DESC
    ";

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row)
    {
    $output .= '
    <div class="panel panel-default">
    <div class="panel-heading">By <b style="color:blue;">'.$row["ten_kh"].'</b> on <i>'.$row["ngaygio"].'</i></div>
    <div class="panel-body">'.$row["noidung"].'</div>
    </div>
    ';
    }

echo $output;


?>
