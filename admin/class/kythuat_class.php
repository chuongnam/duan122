<?php
include "database.php";

?>
<?php
 class kythuat {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insertkt(){
       $khungsuon = $_POST['khungsuon'];
       $yen = $_POST['yen'];
       $taynam = $_POST['taynam'];
       $lop = $_POST['lop'];
       $xich = $_POST['xich'];
       $vanh = $_POST['vanh'];
        $query ="INSERT INTO kythuat(khungsuon,yen,taynam,lop,xich,vanh) VALUE ('$khungsuon','$yen','$taynam','$lop','$xich','$vanh')";
        $this->db->insert($query);
        // header ("location:listsanpham.php");
        // header ('location:listkythuat.php');
      
    }
    public function showkt(){
        $query = "SELECT * FROM kythuat ORDER BY kt_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    // public function get_cartergory($cartegory_id){
    //     $query = "SELECT * FROM loaixe WHERE cartegory_id = '.$cartegory_id'";
    //     $result = $this->db->select($query);
    //     return $result;
    // }
    // public function updatedm($cartegory_id,$tendanhmuc){
    //     $query = "UPDATE loaixe SET tendanhmuc = '$tendanhmuc' WHERE cartegory_id='$cartegory_id'";
    //     $result = $this->db->update($query);
    //     header ('location:listdanhmuc.php');
    //     return $result;

    // }
    public function deletekt($kt_id){
        $query = "DELETE FROM kythuat WHERE kt_id='$kt_id'";
        $result = $this->db->delete($query);
        header ("location:listkythuat.php");
        return $result;
    }
 }
?>