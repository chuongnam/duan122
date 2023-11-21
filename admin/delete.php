<?php
include "class/cartegoryadd_class.php";
$cartegory = new Cartegory;
if(!isset($_GET["cartegory_id"]) || ($_GET["cartegory_id"])==null){
    echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
}
else{
    $cartegory_id = $_GET["cartegory_id"];
}
    $delete_cartegory = $cartegory->deletedm($cartegory_id);
    
?>