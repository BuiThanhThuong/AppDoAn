<?php
	include "connect.php";	
	$sdtadmin = $_POST['sdtadmin'];
	$mkadmin = $_POST['mkadmin'];
	$tenadmin= $_POST['tenadmin'];
	$email= $_POST['email'];
	$diachi=$_POST['diachi'];
	

	$query='SELECT * FROM `adminn` WHERE `sdtadmin` = "'.$sdtadmin.'"';
	$data = mysqli_query($conn,$query);
	$numrow = mysqli_num_rows($data);
	if($numrow > 0){
		$arr=[
			'success'=>false,
			'message'=> "Số điện thoại đã tồn tại"
		];

	}else{
		$query='INSERT INTO `adminn`( `sdtadmin`, `mkadmin`, `tenadmin`,`email`,`diachi`) VALUES ("'.$sdtadmin.'","'.$mkadmin.'","'.$tenadmin.'","'.$email.'","'.$diachi.'")';
			$data = mysqli_query($conn,$query);
			if($data == true){
				$arr = [
					'success'=>true,
					'message'=> "ok"
					
				];
			}else{
				$arr = [	
				'success'=>false,
				'message'=> "khong thanh cong"
				];
			}
}
	print_r(json_encode($arr));
?>