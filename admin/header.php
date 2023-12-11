<?php
session_start();
if (!isset($_SESSION['role']) || !isset($_SESSION['user_email']) || ($_SESSION['role']) == 2) {
    header("Location: ../view/index.php?act=trangchu");
    exit();
}
?>

<?php
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../view/index.php?act=trangchu");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        header {
            margin-top: 50px;
            text-align: center;

        }
    </style>
</head>

<body>

    <header>
        <img src="../view/image/logo.jpg" width="300px">
    </header>
    <button class="btn btn-danger" style="margin-left:15px">
        <a href="?logout=true" style="color: #fff; text-decoration: none;">Đăng xuất</a>
    </button>