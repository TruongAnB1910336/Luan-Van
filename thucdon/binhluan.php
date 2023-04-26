<?php 
include_once('../connect.php');

 $sql_binhluan=mysqli_query($conn,"select * from binh_luan where id_td=" .$_GET['id']);


?>
<?php while($row_binhluan=mysqli_fetch_array($sql_binhluan)){ ?>

            <div>
                <b style="color:blue"><?php echo $row_binhluan['ten_kh'] ?></b> &nbsp;    <b><?php echo $row_binhluan['ngaygio'] ?></b>
                <p><?php echo $row_binhluan['chitiet'] ?></p>
            </div>

<?php }?>