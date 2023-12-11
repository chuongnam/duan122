<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>THÔNG TIN CÁ NHÂN</h1>
        </div>

        <!-- Navbar -->
      
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100" height="100">

            <div class="name">
                ImDezCode
            </div>
            <div class="job">
                Web Developer
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#settings">Settings</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><?php echo $userinfor['user_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $userinfor['email'] ?></td>
                        </tr>                     
                    </tbody>
                </table>
            </div>
        </div>
    <form action="" method="post">
    <button class="logout" name="change_pass" style="background-color: #3498db; color: #fff; padding: 10px; border: none; text-decoration: none; cursor: pointer;">
  <a style="text-decoration: none; color: inherit;"><a href="index.php?act=changepassword">Đổi mật khẩu</a> <i class="fa-solid fa-right-to-bracket"></i></a>
</button>

<button class="logout" name="logout" style="background-color: #e74c3c; color: #fff; padding: 10px; border: none; text-decoration: none; cursor: pointer;">
  <a style="text-decoration: none; color: inherit;">ĐĂNG XUẤT<i class="fa-solid fa-right-to-bracket"></i></a>
</button>

    </form>
      
      <div></div>
    </div>
    <!-- End -->
</body>

</html>