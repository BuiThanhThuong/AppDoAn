<?php
/**
 * @Author: Your name
 * @Date:   2022-05-16 20:59:00
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 14:28:25
 */

	include "connect.php";	
	error_reporting(0);
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$tenuser = $_POST['tenuser'];
	$tongtien= $_POST['tongtien'];
	$iduser= $_POST['iduser'];
	$diachi= $_POST['diachi'];
	$soluong= $_POST['soluong'];
	$chitiet=$_POST['chitiet'];
	$token="Thanh toán thành công";
	$tinhtrang = "Đang xử lý";


	$query='INSERT INTO `donhang`(`iduser`, `tenuser`,`diachi`,`sodienthoai`,`email`,`soluong`, `tongtien`,`tinhtrang`,`token`) VALUES ("'.$iduser.'","'.$tenuser.'","'.$diachi.'","'.$sdt.'","'.$email.'","'.$soluong.'","'.$tongtien.'","'.$tinhtrang.'","'.$token.'")';
		
			$data = mysqli_query($conn,$query);
			if($data == true){
				$query='SELECT madonhang AS iddonhang FROM `donhang` WHERE `iduser` = '.$iduser. ' ORDER BY madonhang DESC LIMIT 1';
				$data = mysqli_query($conn,$query);

				while ($row = mysqli_fetch_assoc($data)) {
					$iddonhang =($row);
				}
				if(!empty($iddonhang)){
					$chitiet= json_decode($chitiet,true);
						foreach ($chitiet as $key => $value) {
							$truyvan='INSERT INTO `chitietdonhang`(`iddonhang`, `idsap`, `tensanpham`,`soluong`, `gia`) VALUES  ('.$iddonhang["iddonhang"].','.$value["mamathang"].',"'.$value["tenmathang"].'",'.$value["soluong"].',"'.$value["giasp"].'")';
								
								$data = mysqli_query($conn,$truyvan);
								}	
								if($data==true){
										$arr = [
											'success'=>true,
											'message'=> " thành công",	
											'iddonhang' => $iddonhang["iddonhang"]

										];

								}else{
										$arr = [
											'success'=>false,
											'message'=> " không thành công"	
										
										];

								}
								print_r(json_encode($arr));
						}
						
			}else{
				$arr = [
				'success'=>false,
				'message'=> "Thêm sản phẩm không thành công"	
				
				];
			

		
		print_r(json_encode($arr));
	}
?>