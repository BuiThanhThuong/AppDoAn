<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2022-05-27 22:28:27
 */
include "connect.php";  
    

    $sql_loai="SELECT * FROM mathang";
    $query_loai=mysqli_query($conn,$sql_loai);
if($query_loai==true){

    $tenmathang = $_POST['tenmathang'];
    $gia = $_POST['gia'];
    $hinhanhmathang = $_POST['hinhanhmathang'];
    $IDSP = $_POST['IDSP'];
    $mota = $_POST['mota'];
}
    
$sql = 'INSERT INTO `mathang`(`tenmathang`,`gia`,`hinhanhmathang`,`IDSP`,`mota`)"."VALUES("'.$tenmathang.'",'.$gia.',"'.$hinhanhmathang.'",'.$IDSP.',"'.$mota.'"")';

$query = mysqli_query($conn,$sql);

if($query==true)
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





        
       

?>
        
