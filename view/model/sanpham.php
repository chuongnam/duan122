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
<<<<<<< HEAD
=======
    public function top10()
    {
        $query = "SELECT * FROM product WHERE luotxem limit 10 ";
        $result = $this->db->select($query);
        return $result;
    }
    public function splienquan()
    {
        
        $query = "SELECT * FROM product,loaixe WHERE product.cartegory_id = loaixe.cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
>>>>>>> a78789311781c389fea0bddfbadc68c51fb96a28
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
<<<<<<< HEAD
=======

>>>>>>> a78789311781c389fea0bddfbadc68c51fb96a28
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
<<<<<<< HEAD
class lienhe{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function insertlh($bl_name,$sodienthoai,$email,$noidungbinhluan){
        $query = "insert into lienhe(bl_name,sodienthoai,email,noidungbinhluan) values('$bl_name','$sodienthoai','$email','$noidungbinhluan')";
        $result = $this->db->insert($query);
        return $result;
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
    public function dangky($username,$email,$pass){
        $query = "insert into user(user_name,email,pass) values('$username','$email','$pass')";
        $result = $this->db->insert($query);
        return $result;
    }
    
 }
=======
>>>>>>> a78789311781c389fea0bddfbadc68c51fb96a28
?>