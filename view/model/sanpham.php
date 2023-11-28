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
class user {

    private $db;
    public function __construct() {
        $this->db = new Database();
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
    public function login($email,$pass){
        $query = "SELECT * FROM user WHERE email='$email' and pass='$pass'";
        echo '<script>console.log("'.$query.'");</script>';
        $result = $this->db->select($query);
        return $result;
    }
    
 }
?>