<?php
class cart{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showdonhang(){
        $query = "SELECT * FROM cart n INNER JOIN trangthai t join bill b on b.id_bill=n.id_bill WHERE  n.trangthai_id=t.trangthai_id ";
        $result = $this->db->select($query);
        return $result;
    }
    public function xemnhieu(){
        $query = "SELECT * FROM product  ORDER BY luotxem DESC LIMIT 3";
        $result = $this->db->select($query);
        return $result;
    }
    
}

class cartt{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
public function get_donhang($cart_bill)
    {
        $query = "SELECT * FROM cart WHERE cart_bill = $cart_bill";
        $result = $this->db->select($query);
        return $result;
    }
    public function insertlh($trangthai_id)
    {
        $query = "INSERT INTO cart(trangthai_id) VALUE ('$trangthai_id')";
        $result = $this->db->insert($query);
        header('location:index.php?act=dsdonhang');
        return $result;
    }
    public function updatedh($cart_bill, $trangthai_id)
    {
        $query = "UPDATE cart SET trangthai_id = '$trangthai_id' WHERE cart_bill='$cart_bill'";
        $result = $this->db->update($query);
        header('location:index.php?act=dsdonhang');
        return $result;

    }
    public function deletedonhang($cart_bill){
        $query = "DELETE FROM cart WHERE cart_bill='$cart_bill'";
        $result = $this->db->delete($query);
        header ("location:index.php?act=dsdonhang");
        return $result;
    }
    public function donhangnew(){
        $query = "SELECT * FROM bill  ORDER BY ngaydathang DESC LIMIT 3";
        $result = $this->db->select($query);
        return $result;
    }
}
?>