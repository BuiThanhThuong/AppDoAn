<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 14:15:02
 */
//require_once 'db/connection.php';
session_start();
$sql = "SELECT * FROM donhang where madonhang ORDER BY madonhang DESC  ";
$query = mysqli_query($conn,$sql);
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
                                    <a href="index.php?page=xemuser" class="btn btn-info"> Khách hàng </a>
                                    </li>
              </a>
								</ul>
							</div>
						</li>
						
						</li>
						
					</ul>
				
			</div>
		</div>
<style>
		h1{
			text-align: center; 
		}
    
	</style>
   
	<h1 style=" text-align: right ;margin-right:40px;">
			<?php
		echo 'Admin: ' . $_SESSION['tenadmin'];
		?>
		</h1>
<div class="card-body" >
<h1>Đơn hàng</h1>
    <!-- End Sidebar -->
    <div class="main-panel"  style="overflow-y: auto;overflow: auto;">
			<div class="content" >
				<div class="page-inner" >
    <table class="table" style="overflow-y:auto;background-color: #FFFFCC; display: block;max-height: 1500x;">
        <style>
            table{
				overflow-y: auto;
                border:1px solid black;
                border-collapse:collapse;
				table-layout: fixed;
 			     width: 100%;

            }
            th{
                border:1px solid black;
            }
            td{
             border:1px solid black;
            }
	
        </style>
        <thead class="thead-dark">
            <style>
                thead{
                    text-align: center;
                }
                </style>
            <tr>
						<th width="60px">Mã</th>
						<th width="170px">Tên khách hàng</th>
						<th width="150px">Số điện thoại</th>
						<th width="240px">Email</th>
						<th width="400px">Địa chỉ</th>
						<th width="100px">Số lượng</th>
						<th width="100px">Tổng tiền</th>
                        <th width="120px">Tình trạng</th>
						<th width="120px">Thanh toán</th>
						<th width="100dp"></th>
                        <th width="100dp"></th>
                       
						
            </tr>
        </thead>
        <tbody>
            <?php
         //   $i =1;
           while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $row['madonhang']?></td>
    <td><?= $row['tenuser']?></td>
    <td><?= $row['sodienthoai']?></td>
    <td><?= $row['email']?></td>
    <td><?= $row['diachi']?></td>
    <td><?= $row['soluong']?></td>
    <td><?= $row['tongtien']?>đ</td>
    <td><?= $row['tinhtrang']?></td>
	<td><?= $row['token']?></td>
    <td>
    <a
        href="index.php?page=chitiet&iddonhang=<?= $row['madonhang']?>" class="btn btn-warning">Chi tiết</a>
    </td>
    <td>
    <a
        href="index.php?page=edittinhtrang&madonhang=<?= $row['madonhang']?>" class="btn btn-warning">Tình trạng</a>
    </td>
   
</tr>
    <?php }
?>
</tbody>
</table>
</div>
</div>
            </div>
        </div>
