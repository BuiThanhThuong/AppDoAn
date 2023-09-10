<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:51:34
 * @Last Modified by:   Your name
 * @Last Modified time: 2022-12-25 23:33:32
 */

 
$conn = mysqli_connect('localhost','root','','sanpham');
if($conn) {
    mysqli_query($conn,'SET NAME "UTF 8"');
    
}else{
    echo ' ket noi loi';
}

if(isset($_POST['submit']))
{
$tendangnhap=$_POST['tendangnhap'];
$mkadmin=$_POST['mkadmin'];

$sql= "SELECT * FROM adminn where tendangnhap='$tendangnhap' AND mkadmin='$mkadmin'";
$admin=mysqli_query($conn,$sql);
if(mysqli_num_rows($admin)>0){
  echo"Đăng nhập thành công";
 header('location:index.php?page=show');
    }else{
      echo "Vui lòng nhập đúng thông tin";
    }

}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
<style>
  html,body,form{
    background-color:#FFc0cb ;
  text-align: center;
  }
</style>
<div class="fadeIn first">
  <img src="anh/logo.jpg" height="120" width="120" >
</div>
<style>
  img{
    margin-top: 1cm;
    
  }
  form{
    margin-top: 0.5cm;
  }

  label{
    color: #990000;
  }
 placeholder{
   font-size: 15px;
 }
</style>
    

  <form method="POST">
    <label for="tendangnhap">Tài khoản</label>
  <div class="form-group">
     
      <input type="text" id="tendangnhap" size="20px" name="tendangnhap" placeholder="Tên đăng nhập">
  </div>
  <label for="mkadmin">Mật khẩu</label>
  <div class="form-group">
     
      <input type="password" id="mkadmin" name="mkadmin" placeholder="Mật khẩu">
  </div>
      <button class="btn btn-danger"  name="submit" type="submit"> Đăng nhập </button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="vscode/dangnhap.css">
</head>
<body>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" id="tendangnhap"  name="tendangnhap" class="form-control" placeholder="Tên đăng nhập">
    
  </div>
  <div class="form-group">
    <label for="mkadmin" class="text-uppercase">Password</label>
    <input type="password" class="form-control" id="mkadmin" name="mkadmin" placeholder="Mật khẩu">
  </div>
  
  
    <div class="form-check">
    <button type="submit" name="submit"class="btn btn-login float-right">Submit</button>
  </div>
  
</form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://hamburgerdanang.com/wp-content/uploads/2021/03/the-ultimate-hamburger.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://sieuthitana.vn/mediacenter/media/2864/images/B%C3%A1nh%20tr%C3%A1ng%20cu%E1%BB%99n%20kh%C3%B4%20g%C3%A0(4).jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
       
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://olongha.com/wp-content/uploads/2020/03/IMG_0031-Copy.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
       
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>  

  
</body>
</html>
