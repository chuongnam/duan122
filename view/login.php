<<<<<<< Updated upstream
<!-- <?php
=======
<?php
>>>>>>> Stashed changes

include "model/user.php";
session_start();
$user = new user_client();
<<<<<<< Updated upstream
if(isset($_POST["btn-login"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_check = $user->login($email, $pass);
    if($login_check){
        $user_infor = $user->getUserByEmail($email)->fetch_assoc();
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $user_infor['$id'];
		header("location:index.php");
=======

if (isset($_POST["btn-login"])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($user->login($email, $pass)) {
        $user_info = $user->getUserByEmail($email)->fetch_assoc();
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $user_info['user_id'];
        $_SESSION['role'] = $user_info['role_id'];
        $redirect = ($user_info['role_id'] == 1) ? "../admin/" : "index.php";
        header("location: $redirect");
        exit();
>>>>>>> Stashed changes
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< Updated upstream
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

</head>

<body id="body">

	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="#"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="post">
						<h3>SIGN IN</h3>
						<input type="text" placeholder="EMAIL" name="email">
						<input type="text" placeholder="PASSWORD" name="pass">
						<button class="submit" name="btn_login">ĐĂNG NHẬP</button>
					</form>
				</div>
			</div>
			<div class="right">
				<video id="myVideo" width="100%" height="100%" controls autoplay>
					<source src="image/videoplayback.mp4" type="video/mp4">
				</video>

				<div class="right-inductor"><img src="image/logo.jpg" alt=".">
				</div>

				<div class="bot-inductor">
					<p>Nơi Đam Mê Bắt Đầu</p>
				</div>
			</div>

		</div>
	</section>
	<script>
		let body = document.getElementById("body");
		body.addEventListener("click", function() {
			playVideo();
		});

		function playVideo() {
			var video = document.getElementById("myVideo");
			video.play();
		}
	</script>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
=======
>>>>>>> Stashed changes
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<<<<<<< Updated upstream
    <!-- Main Content -->
=======
    
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                        <h2>Log In</h2>
=======
                        <h2>ĐĂNG NHẬP THÀNH VIÊN</h2>
>>>>>>> Stashed changes
                    </div>
                    <div class="row">
                        <form control="" class="form-group" method="post">
                            <div class="row">
<<<<<<< Updated upstream
                                <input type="text" name="email" id="username" class="form__input" placeholder="email">
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="pass" id="password" class="form__input" placeholder="pass">
                            </div>
                            <div class="row">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me!</label>
=======
                                <input type="text" name="email" id="username" class="form__input" placeholder="Email">
                            </div>
                            <div class="row">
                         
                                <input type="password" name="pass" id="password" class="form__input" placeholder="Password">
                            </div>
                            <div class="row">
                                
                                
>>>>>>> Stashed changes
                            </div>
                            <div class="row">
                            <button class="submit" name="btn-login">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
<<<<<<< Updated upstream
                        <p>Don't have an account? <a href="#">Register Here</a></p>
=======
                        <p>Chưa có tài khoản ? <a href="dangky.php">Đăng kí ngay</a></p>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<<<<<<< Updated upstream

=======
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
>>>>>>> Stashed changes
</html>