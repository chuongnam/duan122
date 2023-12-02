<?php
include ".././admin/database.php";
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
}

?>
l