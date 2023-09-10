<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2022-05-27 22:24:45
 */

//require_once '../db/connection.php';
$id = $_GET['mamathang'];
$sql = "DELETE FROM mathang where mamathang='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php?page=show');