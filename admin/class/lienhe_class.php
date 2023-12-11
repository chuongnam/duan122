<?php


?>
<?php
class Lienhe
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function insertlh($tendanhmuc)
    {
        $query = "INSERT INTO loaixe(tendanhmuc) VALUE ('$tendanhmuc')";
        $result = $this->db->insert($query);
        header('location:listdanhmuc.php');
        return $result;
    }
    public function showlh()
    {
        $query = "SELECT * FROM lienhe ";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_lienhe($lienhe_id)
    {
        $query = "SELECT * FROM lienhe WHERE lienhe_id = $lienhe_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function updatelh($cartegory_id, $tendanhmuc)
    {
        $query = "UPDATE loaixe SET tendanhmuc = '$tendanhmuc' WHERE cartegory_id='$cartegory_id'";
        $result = $this->db->update($query);
        header('location:listdanhmuc.php');
        return $result;

    }
    public function deletelh($lienhe_id)
    {
        $query = "DELETE FROM lienhe WHERE lienhe_id='$lienhe_id'";
        $result = $this->db->delete($query);
        header("location:index.php?act=showlienhe");
        return $result;
    }


}
?>