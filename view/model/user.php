<?php
include ".././admin/database.php";
class user_client {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function login($email,$pass){
<<<<<<< Updated upstream
        $sql="SELECT * FROM `user` WHERE email = '$email' and pass = '$pass' ";
=======
        $sql="SELECT * FROM `user` WHERE email = '$email' and pass = '".sha1($pass)."' ";
>>>>>>> Stashed changes
        $result = $this->db->select($sql);
        return $result;
    }
    public function getUserByEmail($email){
        $sql="SELECT * FROM `user` WHERE email = '$email'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function check_old_pass($id,$oldPassword){
        $sql="SELECT * FROM `user` WHERE user_id = $id and pass='$oldPassword'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function update_pasword($id,$newPassword){
        $sql="UPDATE `user` SET `pass`= '$newPassword' WHERE user_id=$id";
        return $this->db->update($sql);
    }
    public function get_roleNameByID($role_id){
        $sql = "SELECT `name` FROM `role` WHERE role_id = $role_id";
        $result = $this->db->select($sql);
        return $result;
    }
    function insert_user($username,$email,$pass){
        $errors = [];
        if ((empty($email))) {
            $errors['email'] = "Email không được để trống!";
        } else if (!empty($email) && !filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không đúng định dạng!";
        }else if ($email != "") {
          $sql = "SELECT email FROM user  WHERE  email = '$email' ";
          $check = $this->db->select($sql);
        if ($check) {
          $errors['email'] = "Email đã tồn tại";
        }
      }
        if ($username == "") {
            $errors['user_name'] = "Tài khoản không được để trống!";
      } else if ($username != "") {
        $sql = "SELECT user_name FROM user  WHERE  user_name = '$username' ";
        $check = $this->db->select($sql);
        if($check){
        $errors['user_name'] = "Tài khoản đã tồn tại";
      }
      }

    if (empty($pass)) {
          $errors['pass'] = "Mật khẩu không được để trống!";
       }
       if (!empty($pass) && strlen($pass) <= '5') {
        $errors['pass'] = "Mật khẩu của bạn phải chứa ít nhất 5 ký tự!";
    }
       if (!$errors) {
        $sql = "insert into user(user_name,pass,email,role_id) values('$username','".sha1($pass)."','$email',2)";
        $result=$this->db->insert($sql);
        $errors['thongbao'] = "Đăng kí thành công! Vui lòng đăng nhập";
      }else{
        $errors['thongbao'] = "";
      }
        $_SESSION['dangky'] =  $errors; 
        
    }
}

?>
