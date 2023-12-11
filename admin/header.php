<?php
session_start();
if (isset($_SESSION['role']) && ($_SESSION['role']) == 2) {
    header("Location: ../view/index.php?act=trangchu");
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
    <style>
        header{
            margin-top: 50px;
            text-align: center;
            
        }
        </style>
</head>
<body>

   <header>
    <img src="../view/image/logo.jpg" width="300px">
</header> 
<?php
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../view/index.php?act=trangchu");
    exit();
}
?>
<button class="btn btn-danger" style="margin-left:15px">
    <a href="?logout=true" style="color: #fff; text-decoration: none;">Đăng xuất</a>
</button>
