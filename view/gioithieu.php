<?php

if(isset($_POST["search-btn"])){
    $value = $_POST['search'];
    header("location:cartegory.php?name=$value");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    

    
</head>


<body>
    <!--header-->
    <header>
        <div class="logo">
            <img src="image/logo.jpg">
        </div>
        <div class="menu">
             <li><a href="index.php">TRANG CHỦ</a></li>
             <li><a href="cartegory.php">SẢN PHẨM</a>
                 
             
                
             </li>
             <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
             <li><a href="lienhe.php">LIÊN HỆ</a></li>
          
        </div>
        <div class="others">
<form action="" method="post">
             <li><input type="text" placeholder="tìm kiếm..." name="search"><button name="search-btn"> tìm kiếm</button></li></form>
            
             <li><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
             <button><a href="login.php">đăng nhập</a></button>
        </div>
        
    </header>