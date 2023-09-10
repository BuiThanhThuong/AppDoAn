<!-- tao file connection ket noi den db -->
<?php 
$conn = mysqli_connect('localhost','root','','sanpham');
if($conn) {
    mysqli_query($conn,'SET NAME "UTF 8"');
    
}else{
    echo ' ket noi loi';
}

?>
