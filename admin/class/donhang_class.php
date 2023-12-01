<?php
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

class bill{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
public function get_donhang($id_bill)
    {
        $query = "SELECT * FROM bill WHERE id_bill = $id_bill";
        $result = $this->db->select($query);
        return $result;
    }
    public function insertlh($trangthai)
    {
        $query = "INSERT INTO bill(trangthai) VALUE ('$trangthai')";
        $result = $this->db->insert($query);
        header('location:index.php?act=dsdonhang');
        return $result;
    }
    public function updatedh($id_bill, $trangthai)
    {
        $query = "UPDATE bill SET trangthai = '$trangthai' WHERE id_bill='$id_bill'";
        $result = $this->db->update($query);
        header('location:index.php?act=dsdonhang');
        return $result;

    }
    public function deletedonhang($id_bill){
        $query = "DELETE FROM bill WHERE id_bill='$id_bill'";
        $result = $this->db->delete($query);
        header ("location:index.php?act=dsdonhang");
        return $result;
    }
}
?>