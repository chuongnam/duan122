<?php

include "model/sanpham.php";
$user = new user();
if(isset($_POST["btn_dangky"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $username = $_POST['user_name'];
    $dangky = $user->insert_user($username,$email,$pass);
    if($dangky){
		header("location:login.php");
    }
	else{
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
	.main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #008080;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2{
	color:#008080;
}
.login_form{
	background-color: #fff;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
form{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em .5em .5em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
}
.form__input:focus{
	border-bottom-color: #008080;
	box-shadow: 0 0 5px rgba(0,80,80,.4); 
	border-radius: 4px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	border-radius: 30px;
	color:#008080;
	font-weight: 600;
	background-color: #fff;
	border: 1px solid #008080;
	margin-top: 1.5em;
	margin-bottom: 1em;
}
.btn:hover, .btn:focus{
	background-color: #008080;
	color:#fff;
}
</style>
<body>
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
<div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><span class="fa fa-android"></span></h2>
                </span>
                <h4 class="company_title">Your Company Logo</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Đăng Ký</h2>
                    </div>
                    <div class="row">
                        <form control="" class="form-group" method="post">
						<div class="row">
							<input type="text" placeholder="USERNAME" class="form__input" name="user_name" required>
							</div>
							<br>
                				<small style="color: red;"><?php if (isset($_SESSION['dangky']['user_name'])) : ?>
                                                <?= $_SESSION['dangky']['user_name'] ?>
                                           <?php endif ?></small>
                            <div class="row">
                                <input type="text" name="email" id="username" class="form__input" placeholder="email" required>
                            </div>
							<br>
                		<small style="color: red;"><?php if (isset($_SESSION['dangky']['email'])) : ?>
                                                <?= $_SESSION['dangky']['email'] ?>
                                           <?php endif ?></small>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="pass" id="password" class="form__input" placeholder="pass"required>
                            </div>
							<br>
                			<small style="color: red;"><?php if (isset($_SESSION['dangky']['pass'])) : ?>
                                                <?= $_SESSION['dangky']['pass'] ?>
                                           <?php endif ?></small>	
                            <div class="row">
                            <button class="submit" name="btn_dangky">ĐĂNG KÝ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>