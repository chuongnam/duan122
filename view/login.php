<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/login.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<?php
	session_start();
	if (isset($_SESSION['login_error'])) {
		echo '<div style="display: none;">'.$_SESSION['login_error'].'</div>';
		echo "<script>toastr.error('{$_SESSION['login_error']}');</script>";
		unset($_SESSION['login_error']);
	} ?>

</head>
<style>
	.main-content {
		width: 50%;
		border-radius: 20px;
		box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
		margin: 5em auto;
		display: flex;
	}

	.company__info {
		background-color: #008080;
		border-top-left-radius: 20px;
		border-bottom-left-radius: 20px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		color: #fff;
	}

	.fa-android {
		font-size: 3em;
	}

	@media screen and (max-width: 640px) {
		.main-content {
			width: 90%;
		}

		.company__info {
			display: none;
		}

		.login_form {
			border-top-left-radius: 20px;
			border-bottom-left-radius: 20px;
		}
	}

	@media screen and (min-width: 642px) and (max-width:800px) {
		.main-content {
			width: 70%;
		}
	}

	.row>h2 {
		color: #008080;
	}

	.login_form {
		background-color: #fff;
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		border-top: 1px solid #ccc;
		border-right: 1px solid #ccc;
	}

	form {
		padding: 0 2em;
	}
	label.error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
        display: block;
    }

	.form__input {
		width: 100%;
		border: 0px solid transparent;
		border-radius: 0;
		border-bottom: 1px solid #aaa;
		padding: 1em .5em .5em;
		padding-left: 2em;
		outline: none;
		margin: 1.5em auto;
		transition: all .5s ease;
	}

	.form__input:focus {
		border-bottom-color: #008080;
		box-shadow: 0 0 5px rgba(0, 80, 80, .4);
		border-radius: 4px;
	}

	.btn {
		transition: all .5s ease;
		width: 70%;
		border-radius: 30px;
		color: #008080;
		font-weight: 600;
		background-color: #fff;
		border: 1px solid #008080;
		margin-top: 1.5em;
		margin-bottom: 1em;
	}

	.btn:hover,
	.btn:focus {
		background-color: #008080;
		color: #fff;
	}
</style>

<body>


	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo">
					<h2><span class="fa fa-android"></span></h2>
				</span>
				<h4 class="company_title">POLY BIKE</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>ĐĂNG NHẬP THÀNH VIÊN</h2>
					</div>
					<div class="row">
						<form action="index.php?act=login" class="form-group" method="post" id="loginForm">
							<div class="row">
								<input type="text" name="email" id="email" class="form__input" placeholder="Email">
							</div>
							<div class="row">

								<input type="password" name="pass" id="password" class="form__input" placeholder="Password">
							</div>
							<div class="row">
								<button class="submit btn btn-primary" name="btn-login">ĐĂNG NHẬP</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p class="ml-3">Chưa có tài khoản ? <a href="dangky.php">Đăng kí ngay</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
    $(document).ready(function () {
        $('#loginForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                pass: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập địa chỉ email.",
                    email: "Địa chỉ email không hợp lệ."
                },
                pass: {
                    required: "Vui lòng nhập mật khẩu."
                }
            },
			errorClass: "error"
        });
    });
</script>

</body>


</html>