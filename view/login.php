<?php

include "model/sanpham.php";
$user = new user();
if(isset($_POST["btn_login"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_check = $user->login($email, $pass);
    if($login_check){
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

</html>