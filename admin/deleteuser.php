<?php
include "class/user_class.php";
$user = new user;
if(!isset($_GET["user_id"]) || ($_GET["user_id"])==null){
    echo "<scrip>window.location = 'listtaikhoan.php'</scrip>";
}
else{
    $user_id = $_GET["user_id"];
}
    $delete_user = $user->deleteuser($user_id);
    
?>