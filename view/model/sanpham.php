<?php
include ".././admin/database.php";
?>
<?php


?>
<?php
 class productt {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function loadsp(){
        $query = "SELECT * FROM product WHERE product_id";
        $result = $this->db->select($query);
        return $result;
    }
 }
?>