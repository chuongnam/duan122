<?php

class user_client {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function login($email,$pass){
        $sql="SELECT * FROM `user` WHERE email = '$email' and pass = '$pass' ";
        
        $result = $this->db->select($sql);
        return $result;
       
    }
    public function getUserByEmail($email){
        $sql="SELECT * FROM `user` WHERE email = '$email'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getUserById($id){
        $sql="SELECT * FROM `user` WHERE user_id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function check_old_pass($user_id,$oldPassword){
        $sql="SELECT * FROM `user` WHERE user_id = $user_id and pass='$oldPassword'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function update_pasword($user_id,$newPassword){
        $sql="UPDATE `user` SET `pass`= '$newPassword' WHERE user_id=$user_id";
        return $this->db->update($sql);
    }
}

?>
