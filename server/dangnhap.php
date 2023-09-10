<?php
/**
 * @Author: Your name
 * @Date:   2022-04-30 23:59:03
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 09:37:50
 */

	include "connect.php";	
	
	$SDT = $_POST['SDT'];
	$matkhau = $_POST['matkhau'];
	
	$hashed_string = md5($matkhau);
	$time = date('Y-m-d H:i:s');
	$query='SELECT * FROM `user` WHERE `SDT`= "'.$SDT.'" AND `matkhau`="'.$hashed_string.'"';
	$data = mysqli_query($conn,$query);
	$result = array();
	while ($row = mysqli_fetch_assoc($data)) {
		$result[] =($row);
	
  

      }
	
	if(!empty($result)){
		$arr=[
			"success" => true,
			"message" => "thanh cong",
			"result" => $result,
		];
	}
	else{
			$arr=[
			"success" => false,
			"message" => "khong thanh cong",
			"result" => $result,
			];
		}

	print_r(json_encode($arr));
?>