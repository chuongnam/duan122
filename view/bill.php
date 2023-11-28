<?php
session_start();
include "model/addcart.php";

if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
       $bill_name=$_POST['bill_name'];
       $bill_address=$_POST['bill_address'];
       $tel=$_POST['tel'];
       $email = $_POST['email'];
       $ngaydathang =date('d-m-y h:i:s');
       $total=tongdonhang();
       $pttt=$_POST['pttt'];
     
       $id_bill=taogiohang($bill_name, $bill_address, $tel,$email,$total,$pttt,$ngaydathang);

       for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
           $pro_name=$_SESSION['giohang'][$i][1];
           $images=$_SESSION['giohang'][$i][0];
           $dongia=$_SESSION['giohang'][$i][2];
           $soluong=$_SESSION['giohang'][$i][4];
           $color=$_SESSION['giohang'][$i][3];
           $thanhtien=$dongia*$soluong;
           taodonhang($pro_name, $images, $dongia,$soluong,$thanhtien,$color,$id_bill);
       }
     

}
unset($_SESSION['giohang']);
header("location:cart.php");

?>


