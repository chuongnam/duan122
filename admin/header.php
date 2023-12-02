<?php
session_start();
if ($_SESSION['role'] == '2') {
    header("location:../view/404.php");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        header{
            margin-top: 50px;
            text-align: center;
            
        }
        </style>
</head>
<body>
   <header>
    <img src="../view/image/logo.jpg" width="300px"> <br> <br>
    <a href="../view/index.php">Quay về trang chủ>>></a>
</header> 