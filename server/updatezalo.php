<?php
	 include "connect.php";
	
	 //error_reporting(0);

	 $tokenn		= $_POST['Thanh toán thành công'];
	 $iddonhang = $_POST['madonhang'];
	
	
	 $query = 'UPDATE `donhang` SET `token`= "Thanh toán thành công" WHERE `madonhang` = '.$iddonhang;
	//$query = "UPDATE donhang SET  token  ='$token' where madonhang= '$iddonhang'";
	$data = mysqli_query($conn,$query);
	
	if($data==true)
	{
		$arr=[
			'success' => true,
			'message' =>"Thanh cong"
		];
	}
		else{
			$arr=[
			'success' => false,
			'message' =>"khong Thanh cong"

		];	
			
			
		}	
	
print_r(json_encode($arr));
?>	