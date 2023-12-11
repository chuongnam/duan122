<?php


class binhluan{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showbinhluan(){
        $query = "SELECT * FROM binhluan,user where binhluan.id_user = user.user_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function deletebl($id_binhluan)
    {
        $query = "DELETE FROM binhluan WHERE id_binhluan='$id_binhluan'";
        $result = $this->db->delete($query);
        header('location:index.php?act=showbinhluan');
        return $result;
    }

}
?>