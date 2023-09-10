<?php
/**
 * @Author: Your name
 * @Date:   2022-04-30 10:53:00
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-06 21:55:20
 */

	include "connect.php";	
	$SDT = $_POST['SDT'];
	$matkhau = $_POST['matkhau'];
	$tenuser= $_POST['tenuser'];
	$gmail= $_POST['gmail'];
	

	$query='SELECT * FROM `user` WHERE `SDT` = "'.$SDT.'"';
	$data = mysqli_query($conn,$query);
	$numrow = mysqli_num_rows($data);
	if($numrow > 0){
		$arr=[
			'success'=>false,
			'message'=> "Số điện thoại đã tồn tại"
		];

	}else{
		$hashed_string = md5($matkhau);
		$query='INSERT INTO `user`( `SDT`, `matkhau`, `tenuser`,`gmail`) VALUES ("'.$SDT.'","'.$hashed_string.'","'.$tenuser.'","'.$gmail.'")';
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