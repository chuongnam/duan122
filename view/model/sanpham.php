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
    function insert_user($username,$email,$pass){
        $errors = [];
        if ((empty($email))) {
            $errors['email'] = "Email không được để trống!";
        } else if (!empty($email) && !filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không đúng định dạng!";
        }else if ($email != "") {
          $sql = "SELECT email FROM user  WHERE  email = '$email' ";
          $check = $this->db->select($sql);
        if ($check) {
          $errors['email'] = "Email đã tồn tại";
        }
      }
        if ($username == "") {
            $errors['user_name'] = "Tài khoản không được để trống!";
      } else if ($username != "") {
        $sql = "SELECT user_name FROM user  WHERE  user_name = '$username' ";
        $check = $this->db->select($sql);
        if($check){
        $errors['user_name'] = "Tài khoản đã tồn tại";
      }
      }

    if (empty($pass)) {
          $errors['pass'] = "Mật khẩu không được để trống!";
       }
       if (!empty($pass) && strlen($pass) <= '5') {
        $errors['pass'] = "Mật khẩu của bạn phải chứa ít nhất 5 ký tự!";
    }
       if (!$errors) {
        $sql = "insert into user(user_name,pass,email) values('$username','$pass','$email')";
        $result=$this->db->insert($sql);
        $errors['thongbao'] = "Đăng kí thành công! Vui lòng đăng nhập";
      }else{
        $errors['thongbao'] = "";
      }
        $_SESSION['dangky'] =  $errors; 
        
    }


    function loadall_binhluan($product_id){ 
        $sql="select * from binhluan where 1";
      
        if ($product_id >0) 
          $sql.=" AND  product_id='".$product_id."'";
        $sql.= "  order by id_binhluan desc";
       
        $listbinhluan=$this->db->select($sql); 
        return $listbinhluan;}

        function insert_binhluan($id_user,$product_id,$date,$noidung){
            $sql_insert = "insert into binhluan values(null,'$id_user','$product_id','$date','$noidung')";
            $this->db->insert($sql_insert);
         }
    
 }

?>