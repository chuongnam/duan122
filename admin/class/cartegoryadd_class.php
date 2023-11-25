<?php
include "database.php";

?>
<?php
class cartegory
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
    public function showdm()
    {
        $query = "SELECT * FROM loaixe ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_cartergory($cartegory_id)
    {
        $query = "SELECT * FROM loaixe WHERE cartegory_id = $cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function updatedm($cartegory_id, $tendanhmuc)
    {
        $query = "UPDATE loaixe SET tendanhmuc = '$tendanhmuc' WHERE cartegory_id='$cartegory_id'";
        $result = $this->db->update($query);
        header('location:listdanhmuc.php');
        return $result;

    }
    public function deletedm($cartegory_id)
    {
        $query = "DELETE FROM loaixe WHERE cartegory_id='$cartegory_id'";
        $result = $this->db->delete($query);
        header("location:listdanhmuc.php");
        return $result;
    }


}
?>