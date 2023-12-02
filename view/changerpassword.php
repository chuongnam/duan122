<?php
include "header.php";
include "model/user.php";
$user = new user_client();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($user -> check_old_pass($user_id,$oldPassword)==false) {
        $error = "Mật khẩu cũ không đúng";
    } elseif ($newPassword !== $confirmPassword) {
        $error = "Mật khẩu mới không khớp";
    } else {
        $user -> update_pasword($user_id,$newPassword);
        $success = "Đã cập nhật mật khẩu thành công !";
        
    }
}
?>

<div class="changepassword">
<h2>Thông tin cá nhân</h2><br>
<h3>Đổi Mật Khẩu</h3>



<form method="post" action="">
    <label for="old_password">Mật khẩu cũ:</label> 
    <input type="password" name="old_password" required><br>

    <label for="new_password">Mật khẩu mới:</label>
    <input type="password" name="new_password" required><br>

    <label for="confirm_password">Xác nhận mật khẩu mới:</label>
    <input type="password" name="confirm_password" required><br>

    <button >Đổi Mật Khẩu</button>
</form>
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<?php if (isset($success)): ?>
    <p style="color: green;"><?php echo $success; ?></p>
<?php endif; ?>
</div>

