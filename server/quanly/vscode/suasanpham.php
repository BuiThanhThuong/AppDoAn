<?php
/**
 * @Author: Your name
 * @Date:   2022-05-26 23:34:37
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 12:21:51
 * 
 */
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
   
    

	<!-- Fonts and icons -->
	

	<!-- CSS Files -->
	<link rel="stylesheet" href="vscode/bootstrap.min.css">
	<link rel="stylesheet" href="vscode/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="vscode/demo.css">
</head>
    
<body>

	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				
      <a  href="index.php?page=show">
					<img src="https://www.citypng.com/public/uploads/small/11653174111dcxzrgzmilqvp5fipqzm5rzf6avgibzwgb6ty7n56highrtot5ma5nykrnu5msnshmpbc5k7omiitelylwptmwuxmq6wwuqooyhd.png" style="height: 70px;" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->
            <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				
					<ul class="nav nav-primary">
					
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Quản lý</h4>
						</li>
						<li class="nav-item" >
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Hành động</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base" >
								<ul class="nav nav-collapse" >
					
									<li>
                                    <a class="btn btn-info" href="index.php?page=show">Danh sách sản phẩm</a>									</li>
									<li>
                                    <a href="index.php?page=themsanpham" class="btn btn-info"> Thêm sản phẩm</a>

									</li>
									<li>
                                    <a  class="btn btn-info" href="index.php?page=loai">Loại sản phẩm</a>
									</li>
									<li>
                                    <a class="btn btn-info " href="index.php?page=donhang">Đơn hàng</a>
									</li>
									<li>
                                    <a href="index.php?page=themloai" class="btn btn-info"> Thêm loại</a>
                                    </li>
                                    <li>
                                    <a href="index.php?page=xemuser" class="btn btn-info"> khách hàng</a>
                                    </li>
              </a>      
								</ul>
							</div>
						</li>
						
						</li>
						
					</ul>
				
			</div>
		</div>
    	<h1 style=" text-align: right ;margin-right:40px;">
			<?php
		echo 'Admin: ' . $_SESSION['tenadmin'];
		?>
		</h1>
        <?php
    $sql_loai="SELECT * FROM loaimathang";
    $query_loai=mysqli_query($conn,$sql_loai);

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
   <div class="card-body"style="background-color: #FFFFCC;" >
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
</body>