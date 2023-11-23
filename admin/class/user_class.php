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
   
    
    public function deleteuser($user_id){
        $query = "DELETE FROM user WHERE user_id='$user_id'";
        $result = $this->db->delete($query);
        header ("location:listtaikhoan.php");
        return $result;
    }
 }
?>