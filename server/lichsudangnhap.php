<?php
/**
 * @Author: Your name
 * @Date:   2023-04-06 22:36:41
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 10:15:21
 */
// Kết nối tới MySQL

include "connect.php";	

// Lấy thông tin đăng nhập từ Android

    $IDuser= $_POST["IDuser"];
$SDT = $_POST["SDT"];
$login_time = date("Y-m-d H:i:s");

// Lưu thông tin đăng nhập vào cơ sở dữ liệu
$sql = "INSERT INTO lichsudangnhap (IDuser, SDT, thoigian) VALUES ('$IDuser','$SDT', '$login_time')";
$data = mysqli_query($conn,$sql);
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

// Đóng kết nối tới MySQL
$conn->close();

