<?php
include "class/product_class.php";
$product = new product;
if(!isset($_GET["product_id"]) || ($_GET["product_id"])==null){
    echo "<scrip>window.location = 'listsanpham.php'</scrip>";
}
else{
    $product_id = $_GET["product_id"];
}
    $delete_product = $product->deletesp($product_id);
    
?>