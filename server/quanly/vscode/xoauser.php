<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 14:16:09
 */

//require_once '../db/connection.php';
$id = $_GET['IDuser'];
$sql = "DELETE FROM user where IDuser='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php?page=xemuser');