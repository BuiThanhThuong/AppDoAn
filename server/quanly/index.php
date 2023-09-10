<?php
/**
 * @Author: Your name
 * @Date:   2022-05-22 00:31:17
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-04-07 14:20:41
 */

require_once 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <!-- file boostrap -->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" 
    href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>


<?php

if(isset($_GET['page'])){
    switch ($_GET['page']) {
      
        case 'show':
            require_once 'vscode/show.php';
            break;
          
                case 'suasanpham':
                    require_once 'vscode/suasanpham.php';
                    break;

                    case 'themsanpham':
                        require_once 'vscode/themsanpham.php';
                        break;

                        case 'xoasanpham':
                            require_once 'vscode/xoasanpham.php';
                            break;
                            case 'donhang':
                                require_once 'vscode/donhang.php';
                                break;  
                                case 'themloai':
                                    require_once 'vscode/themloai.php';
                                    break;
                                    case 'loai':
                                        require_once 'vscode/loai.php';
                                        break;
                                        case 'xoaloai':
                                            require_once 'vscode/xoaloai.php';
                                                 break;
                                            case 'chitiet':
                                                require_once 'vscode/chitiet.php';
                                                break;
                                                case 'edittinhtrang':
                                                    require_once 'vscode/edittinhtrang.php';
                                                    break;
                                                    case 'admin':
                                                        require_once 'vscode/admin.php';
                                                        break;
                                                        case 'xemuser':
                                                            require_once 'vscode/xemuser.php';
                                                            break;
                                                            case 'xoauser':
                                                                require_once 'vscode/xoauser.php';
                                                                     break;
                                                    
                                  
        default:
        require_once 'vscode/show.php' ;
        
            break;
    }
}else {
    require_once 'vscode/admin.php';

}

?>
</body>
</html>