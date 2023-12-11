<?php

$login_text = "Đăng nhập";
$login_link = "login.php";

if (isset($_SESSION['user_email'], $_SESSION['user_id'], $_SESSION['role']) && $_SESSION['role'] == 2) {
    $login_text = "Tôi";
    $login_link = "#";
}

if (isset($_POST["search-btn"])) {
    $value = $_POST['search'];
    header("location: index.php?act=timkiem&name=$value");
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php?act=trangchu");
    exit();
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
    
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .options {
            width: 100px;
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .options {
            display: <?php echo ($login_text === "Tôi") ? 'block' : 'none'; ?>;
        }
    </style>
</head>


<body>
    <header>
        <div class="logo">
            <img src="image/logo.jpg">
        </div>
        <div class="menu">
            <li><a href="index.php?act=trangchu">TRANG CHỦ</a></li>
            <li><a href="index.php?act=timkiem">SẢN PHẨM</a>



            </li>
            <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
            <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>

        </div>
        <div class="others">
            <form action="" method="post">
                <li><input type="text" placeholder="tìm kiếm..." name="search"><button name="search-btn"></button></li>
            </form>

            <li><a href="index.php?act=taogio"><i class="fa fa-shopping-bag"></i></a></li>
            <div class="dropdown">
            <button class="dropdown-btn"><a href="<?php echo $login_link; ?>"><?php echo $login_text; ?></a></button>
            <div class="options">
                    <a href="changerpassword.php">Đổi mật khẩu</a>
                    <a href="index.php?act=trangthaii">Đơn Hàng</a>
                    <a href="?logout=true">Đăng xuất</a>
                </div>
            </div>
            
        </div>

    </header>
    <script src="js/silde.js"> </script>