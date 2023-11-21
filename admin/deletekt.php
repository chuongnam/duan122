<?php
include "class/kythuat_class.php";
$kythuat = new kythuat;
if(!isset($_GET["kt_id"]) || ($_GET["kt_id"])==null){
    echo "<scrip>window.location = 'listkyhuat.php'</scrip>";
}
else{
    $kt_id = $_GET["kt_id"];
}
    $delete_kt = $kythuat->deletekt($kt_id);
    
?>