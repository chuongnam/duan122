<?php
class cart
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showdonhang()
    {
        $query = "SELECT `id_bill`, `bill_name`, `bill_address`, `tel`, `email`, `total`, `pttt`, `ngaydathang` ,`trangthai`FROM `bill` WHERE 1";
        $result = $this->db->select($query);
        return $result;
    }
    public function xemnhieu()
    {
        $query = "SELECT * FROM product  ORDER BY luotxem DESC LIMIT 3";
        $result = $this->db->select($query);
        return $result;
    }
    public function hoadon($id)
    {
        $query = "SELECT * FROM cart WHERE id_bill=$id ";
        $result = $this->db->select($query);
        return $result;
    }
}

class cartt
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function get_donhang($cart_bill)
    {
        $query = "SELECT * FROM bill WHERE id_bill = $cart_bill";
        $result = $this->db->select($query);
        return $result;
    }
    public function insertlh($trangthai_id)
    {
        $query = "INSERT INTO cart(trangthai_id) VALUE ('$trangthai_id')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function updatedh($cart_bill, $trangthai_id)
    {
        $query = "UPDATE bill SET trangthai = '$trangthai_id' WHERE id_bill='$cart_bill'";
        $result = $this->db->update($query);
        return $result;
    }
    public function deletedonhang($cart_bill)
    {
        $query = "DELETE FROM bill WHERE id_bill='$cart_bill'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function donhangnew()
    {
        $query = "SELECT * FROM bill  ORDER BY ngaydathang DESC LIMIT 3";
        $result = $this->db->select($query);
        return $result;
    }
}
