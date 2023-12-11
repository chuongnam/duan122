<?php

$login_text = "Đăng nhập";
$login_link = "login.php";


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .dropdown:hover .options {

            display: <?php echo ($login_text === "Tôi") ? 'block' : 'none'; ?>;
        }
    </style>
    <script>
        function showToastr(message, type) {
            toastr[type](message);
        }
    </script>
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

                <div class="searchBox">
                    <input class="searchInput" type="text" name="search" placeholder="Search">
                    <button class="searchButton" name="search-btn" href="#">
                        <i class="material-icons">
                            search
                        </i>
                    </button>
                </div>
            </form>
            <div class="other-logo" style="display: flex; align-items: center;position:absolute;top:20px;right:65px">
                <li style="list-style-type: none; margin-right: 10px;"><a href="index.php?act=taogio" style="text-decoration: none; color: black;"><i class="fa fa-shopping-bag fa-2x"></i></a></li>
                <div>
                    <button style="background-color: #bbc0bb; /* Green */
               border: none;
               color: white;
               padding: 9px 13px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
               cursor: pointer;
               border-radius: 5px;">
                        <a href="<?php echo isset($_SESSION['user_email'], $_SESSION['user_id'], $_SESSION['role']) && $_SESSION['role'] == 2 ? 'index.php?act=thongtincuatoi' : $login_link; ?>" style="text-decoration: none; color: black;">
                            <?php echo isset($_SESSION['user_email'], $_SESSION['user_id'], $_SESSION['role']) && $_SESSION['role'] == 2 ? '<i class="fa-solid fa-user fa-2x"></i>' : $login_text; ?>
                        </a>
                    </button>
                   
                </div>
            </div>
        </div>


    </header>