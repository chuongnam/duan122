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
<a href="?logout=true">Đăng xuất</a>