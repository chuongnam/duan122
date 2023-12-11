
<?php
 class product {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function showdm(){
        $query = "SELECT * FROM loaixe ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function insertproduct(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $product_gia = $_POST['product_gia'];
        $product_mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
        $masp = $_POST['masp'];
        $color = $_POST['color'];
        $luotxem=0;
        $images = $_FILES['images']['name'];
        move_uploaded_file($_FILES['images']['tmp_name'],"upload/".$_FILES['images']['name']);
        $query = "INSERT INTO product (
            product_name,
            product_gia,
            images,
            product_mota,
            soluong,
            masp,
            cartegory_id,
            color,luotxem) 
            VALUES(
                '$product_name',
                '$product_gia',
                '$images',
                '$product_mota',
                '$soluong',
                '$masp',
                '$cartegory_id',
                '$color','$luotxem'
                 )";
        $this->db->insert($query);
        echo '<script>window.location.href = "index.php?act=showsp";</script>';

    }
    public function showsp(){
        $query = "SELECT * FROM product ORDER BY product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function deletesp($product_id){
        $query = "DELETE FROM product WHERE product_id='$product_id'";
        $result = $this->db->delete($query);
        echo '<script>window.location.href = "index.php?act=showsp";</script>';
        return $result;
    }
    public function updatesp($product_id,$product_name,$product_gia,$images,$product_mota,$soluong,$masp,$color,$categoryId){
        $id=$_GET['product_id'];
        $query = "UPDATE product SET product_name ='$product_name',product_gia ='$product_gia',images='$images',product_mota ='$product_mota',soluong ='$soluong',masp ='$masp',color ='$color',cartegory_id='$categoryId' WHERE product_id=$product_id";
        $result = $this->db->update($query);
        echo '<script>window.location.href = "index.php?act=showsp";</script>';
        return $result;

    }
    public function get_product($product_id)
    {
        $query = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function thongke(){
        $query = "SELECT loaixe.cartegory_id as madm,loaixe.tendanhmuc as tendm, count(product.product_id) as countsp, min(product.product_gia) as minprice, max(product.product_gia) as maxprice,avg(product.product_gia) as avg,sum(product.product_gia) as sum FROM product left join loaixe on loaixe.cartegory_id = product.cartegory_id GROUP BY loaixe.cartegory_id";
       
        $result = $this->db->select($query);
        return $result;
    }
    
    
 }
?>