<?php
include ".././admin/database.php";

?>

<?php
 class cartegory {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function showdm(){
        $query = "SELECT * FROM loaixe where cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
 }
?>