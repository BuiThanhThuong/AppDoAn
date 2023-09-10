<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 12:07:37
 */
session_start();

//echo 'Admin: ' . $_SESSION['tenadmin'];
$sql = "SELECT * FROM mathang inner join loaimathang on mathang.IDSP=loaimathang.IDSP";
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
<style>
	
</style>
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


		<!-- Sidebar -->
	
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
		<!-- End Sidebar -->
		<h1 style=" text-align: right ;margin-right:40px;">
			<?php
		echo 'Admin: ' . $_SESSION['tenadmin'];
		?>
		</h1>
        <div class="main-panel"  style="overflow-y: auto;overflow: auto;">
			<div class="content">
			<div>
		
					
		</div>

				<div class="page-inner">

                <table class="table" style="background-color: #FFFFCC;">
        <style>
            table{
                border:1px solid black;
                border-collapse:collapse;

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
						<th width="140px">Tên măt hàng</th>
						<th width="50px">Giá</th>
						<th width="90px">Hình ảnh</th>
						<th width="100px">Loại</th>					
						<th width="700px">Mô tả</th>
						<th></th>
						<th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $i++;?></td>
    <td><?= $row['tenmathang']?></td>
    <td><?= $row['gia']?>đ</td>
    <td>
        <img src="<?= $row['hinhanhmathang']?>" width="100px">
    </td>
    <td><?= $row['tenloai']?></td>
    <td><?= $row['mota']?></td>
    <td>
    <a
        href="index.php?page=suasanpham&mamathang=<?= $row['mamathang']?>" class="btn btn-warning">Sửa
        
    </a>
    </td>
    <td>
        <a
         onclick="return confirm('Xóa sản phẩm ?')"
          href="index.php?page=xoasanpham&mamathang=<?= $row['mamathang']?>"class="btn btn-warning">Xóa</a>
    </td>
    
    
</tr>
           <?php }
?>
</tbody>
    </table>

                </div>
            </div>
        </div>
		
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="vscode/js/core/jquery.3.2.1.min.js"></script>
	<script src="vscode/js/core/popper.min.js"></script>
	<script src="vscode/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="vscode/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="vscode/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="vscode/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="vscode/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="vscode/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="vscode/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="vscode/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->


	<!-- jQuery Vector Maps -->
	<script src="vscode/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="vscode/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="vscode/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="vscode/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="vscode/js/setting-demo.js"></script>
	<script src="vscode/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>