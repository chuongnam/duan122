<?php



 function ketnoidb(){
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan11";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     return $conn;
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
    
  

 }


 function taogiohang($bill_name, $bill_address, $tel,$email,$total,$pttt,$ngaydathang){
    $conn=ketnoidb();
    $sql = "INSERT INTO bill (bill_name, bill_address, tel,email,total,pttt,ngaydathang)
  VALUES ('$bill_name', '$bill_address', '$tel','$email','$total','$pttt','$ngaydathang')";

    
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  $conn = null;
  return $last_id;
 }
 function taodonhang($pro_name, $images, $dongia,$soluong,$thanhtien,$color,$id_bill,$trangthai_id){
    $conn=ketnoidb();
    $sql = "INSERT INTO cart (pro_name, images, dongia,soluong,thanhtien,color,id_bill,trangthai_id)
  VALUES ('$pro_name', '$images', '$dongia','$soluong','$thanhtien','$color','$id_bill','$trangthai_id')";
  
  $conn->exec($sql);
  $conn = null;

 }


 
?>
<style>
   .thanh-toan{
        margin-top: 20px;
        width: 200px;
        height: 50px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
    }
   .thanh-toan:hover{
    background-color: black;
    color: white;
   }
   .soluongg input{
     margin-top: 10px;
         width: 50px;
   }
  </style>