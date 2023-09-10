<?php
/**
 * @Author: Your name
 * @Date:   2022-05-27 00:45:08
 * @Last Modified by:   Your name
 * @Last Modified time: 2022-05-27 00:46:41
 */

//require_once '../db/connection.php';
$id = $_GET['IDSP'];
$sql = "DELETE FROM loaimathang where IDSP='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php?page=loai');