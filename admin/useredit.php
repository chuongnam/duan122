<?php
include "header.php";
include "slilde.php";
include "class/user_class.php";
?>
<?php
$user = new user();
if(!isset($_GET["user_id"]) || ($_GET["user_id"])==null){
    echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
}
else{
    $user_id = $_GET["user_id"];
}
    $get_user = $user->get_cartergory($user_id);
    if($get_user){
        $result = $get_user->fetch_assoc();
    }
?>

<?php
$user = new user;
if(isset($_POST["submit"])){
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $insertuser = $user->updateuser($user_id,$user_name,$pass,$email);
}

?>
<div class="admin-content-right">
         <div class="admin-content-right-cartegoryadd">
            <h1>SỬA USER</h1>
            <form action="" method="POST" >
                <label for="">USER</label><br>
                <input required type="text" name="user_name" placeholder="user"
                 value="<?php echo $result['user_name'] ?>"><br>
                 <label for="">PASSWORLD</label><br>
                 <input required type="text" name="pass" placeholder="pass"
                 value="<?php echo $result['pass'] ?>"><br>
                 <label for="">EMAIL</label><br>
                 <input required type="text" name="email" placeholder="email"
                 value="<?php echo $result['email'] ?>">
                <button type="submit" name="submit">thêm</button>
            </form>
         </div>
    </div>
</section>
</body>
</html>