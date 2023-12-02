<?php
include "class/lienhe_class.php";
$lienhe = new LienHe();
if(!isset($_GET["lienhe_id"]) || ($_GET["lienhe_id"])==null){
    echo "<scrip>window.location = 'listlienhe.php'</scrip>";
}
else{
    $lienhe_id = $_GET["lienhe_id"];
}
    $delete_kt = $lienhe->deletelh($lienhe_id);
    
?>