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

 class cartegory {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function loaddm(){
        $query = "SELECT * FROM loaixe WHERE cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function spdanhmuc(){
        $id = $_GET['cartegory_id'];
        $query = "SELECT * FROM product,loaixe WHERE product.cartegory_id = loaixe.cartegory_id AND product.cartegory_id=$id ORDER BY product.cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

}
?>