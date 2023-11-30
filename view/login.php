<!-- <?php

include "model/user.php";
session_start();
$user = new user_client();
if(isset($_POST["btn-login"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_check = $user->login($email, $pass);
    if($login_check){
        $user_infor = $user->getUserByEmail($email)->fetch_assoc();
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $user_infor['$id'];
		header("location:index.php");
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
                        <h2>Log In</h2>
                    </div>
                    <div class="row">
                        <form control="" class="form-group" method="post">
                            <div class="row">
                                <input type="text" name="email" id="username" class="form__input" placeholder="email">
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="pass" id="password" class="form__input" placeholder="pass">
                            </div>
                            <div class="row">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me!</label>
                            </div>
                            <div class="row">
                            <button class="submit" name="btn-login">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="#">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>