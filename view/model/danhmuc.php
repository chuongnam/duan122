<?php
include ".././admin/database.php";
?>
<?php


?>
<?php
 class cartegoryy {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function loaddm(){
        $query = "SELECT * FROM loaixe";
        $result = $this->db->select($query);
        return $result;
    }
 }
?>