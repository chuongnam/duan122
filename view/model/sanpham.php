<?php
include ".././admin/database.php";
?>

<?php
class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function loadsp()
    {
        $query = "SELECT * FROM product WHERE product_id";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_product($product_id)
    {
        $query = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $this->db->select($query);
        return $result;
    }
}

class category
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function loaddm()
    {
        $query = "SELECT * FROM loaixe WHERE cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function spdanhmuc()
    {
        $id = $_GET['cartegory_id'];
        $query = "SELECT * FROM product,loaixe WHERE product.cartegory_id = loaixe.cartegory_id AND product.cartegory_id=$id ORDER BY product.cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_category($category_id)
    {
        $query = "SELECT * FROM loaixe WHERE cartegory_id = $category_id";
        $result = $this->db->select($query);
        if ($result) {
            $category_data = $result->fetch_assoc();
            return $category_data;
        } else {
            return false;
        }
    }
}
class cart{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showdonhang(){
        $query = "SELECT * FROM cart n INNER JOIN bill b WHERE n.id_bill=b.id_bill ";
        $result = $this->db->select($query);
        return $result;
    }
}
?>