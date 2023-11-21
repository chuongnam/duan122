<?php
include "header.php";
include "slilde.php";
include "class/cartegoryadd_class.php";
?>
<?php
$cartegory = new Cartegory;
if(isset($_POST["submit"])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $insertlh = $cartegory->insertlh($tendanhmuc);
}

?>
<style>
    .admin-content-right-cartegoryadd input{
        width: 250px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegoryadd">
            <h1>thêm danh mục</h1>
            <form action="" method="POST" >
                <input required type="text" name="tendanhmuc" placeholder="thêm danh mục">
                <button type="submit" name="submit" class="btn btn-danger">thêm</button>
            </form>
         </div>
    </div>
</section>
</body>
</html>