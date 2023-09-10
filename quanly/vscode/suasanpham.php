<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2022-05-27 22:28:52
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <!-- file boostrap -->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" 
    href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
    

<body>

<ul class="nav nav-tabs">
    <style>
        ul{
            text-align: right;
            margin-left:20px;
            width: 500px;
        }
        li{
            text-align: right;
            margin-left:30px;
        }
    </style>
  <li class="nav-item">
    <a class="btn btn-info" href="index.php?page=show">Danh sách sản phẩm</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-info " href="index.php?page=donhang">Đơn hàng</a>
  </li>
  <li class="nav-item">
    <a  class="btn btn-info" href="index.php?page=loai">Loại sản phẩm</a>
  </li>
</ul>

<style>
		html,body{
			background-color:#FFc0cb ;
			margin: 0;
            
		}
</style>
    <?php
    $sql_loai="SELECT * FROM loaimathang";
    $query_loai=mysqli_query($conn,$sql_loai);
    session_start();
    $id = $_GET['mamathang'];
    $sql_up = "SELECT * FROM mathang where mamathang='$id'";
    $query_up = mysqli_query($conn,$sql_up);
    $row_up = mysqli_fetch_array($query_up);

    if(isset
        ($_POST['submit'])){
        $tenmathang = $_POST['tenmathang'];
        $gia = $_POST['gia'];
        $hinhanhmathang = $_POST['hinhanhmathang'];
        $IDSP = $_POST['IDSP'];
       
        $mota = $_POST['mota'];


    $sql = "UPDATE mathang SET
    tenmathang    ='$tenmathang',
    gia           ='$gia',
    hinhanhmathang='$hinhanhmathang',
    IDSP          ='$IDSP',
 
    mota          ='$mota'
    where mamathang= '$id'";


    $query = mysqli_query($conn,$sql);
    header('location:index.php?page=show');

    }

    ?>
    <div class="card-body">
        <div class="container">
			<div class="pannel panel-prinary">
                <h2 class="text-center text-danger" style="margin-top:20px;" >Sửa sản phẩm</h2>
        <form method="POST" enctype="multipart/form-data">
        <?php 
        if(isset($_SESSION['error'])){
            echo '<p style=color:red>'.$_SESSION['error'].'</p>' ;
            unset($_SESSION['error']);
        }
        ?>

            <div class="form-group">
                <label for="ten">Tên mặt hàng</label>
                <input type="text" value="<?= $row_up['tenmathang'] ?>" name="tenmathang" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="gia">Giá</label>
                <input type="number" value="<?= $row_up['gia'] ?>" name="gia" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="hinhanhmathang">Hình ảnh</label>
                <input type="text" value="<?= $row_up['hinhanhmathang'] ?>" name="hinhanhmathang" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="IDSP">Loại</label>
                        <select type="text" value="<?= $row_up['IDSP'] ?>" name="IDSP" id="" class="form-control" placeholder="" aria-describedby="helpId">
                           
            <?php
                
                 while($row=mysqli_fetch_assoc($query_loai)){?>
                <option value ="<?php echo $row['IDSP']; ?>"><?php echo $row['tenloai']; ?> </option>

            
                    
            <?php } 

            ?>
            </select>
            </div>
         
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" value="<?= $row_up['mota'] ?>" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button class="btn btn-danger"  name="submit" type="submit"> SỬA </button>
        </form>
    </div>
    </div>
    </div>