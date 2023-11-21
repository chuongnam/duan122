<?php
include "database.php";

?>
<?php
 class user {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insertlh($tendanhmuc){
        $query ="INSERT INTO loaixe(tendanhmuc) VALUE ('$tendanhmuc')";
        $result = $this->db->insert($query);
        header ('location:listdanhmuc.php');
        return $result;
    }
    public function showuser(){
        $query = "SELECT * FROM user ORDER BY user_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_cartergory($cartegory_id){
        $query = "SELECT * FROM loaixe WHERE cartegory_id = '.$cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function updateuser($user_id,$user_name,$pass,$email){
        $query = "UPDATE user SET user_name = '$user_name', pass='$pass', email= '$email' WHERE user_id='$user_id'";
        $result = $this->db->update($query);
        header ('location:listtaikhoan.php');
        return $result;

    }
    public function deleteuser($user_id){
        $query = "DELETE FROM user WHERE user_id='$user_id'";
        $result = $this->db->delete($query);
        header ("location:listtaikhoan.php");
        return $result;
    }
 }
?>