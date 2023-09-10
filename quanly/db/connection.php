<?php
/**
 * @Author: Your name
 * @Date:   2023-03-31 13:32:00
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-03-31 15:58:53
 */

 
 $conn = mysqli_connect('localhost','root','','sanpham');
 if($conn) {
     mysqli_query($conn,'SET NAME "UTF 8"');
    
}else{
     echo ' ket noi loi';
 }
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sanpham";

// // Tạo kết nối
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// // Kiểm tra kết nối
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Kết nối thành công";
// } catch(PDOException $e) {
//     echo "Kết nối thất bại: " . $e->getMessage();
// }
?>