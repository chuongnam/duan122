<?php

if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
if(isset($_GET['delid'])&&($_GET['delid']>=0)){
    array_splice($_SESSION['giohang'],$_GET['delid'],1);
}
function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
       if(sizeof($_SESSION['giohang'])> 0){
         for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
             $tt= $_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][4];
             $tong+=$tt;
             
         
         }
        }
      
          
      
     }
     return $tong;
}
 function showgiohang(){
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
       $tong=0;
        for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
            $tt= $_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][4];
            $tong+=$tt;
            echo '<tr>
            <td>'.($i+1).'</td>
            <td><img src="../admin/upload/'.$_SESSION['giohang'][$i][0].'" width="100px"></td>
            <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
            <td>'.$_SESSION['giohang'][$i][2].'</td>
            <td>'.$_SESSION['giohang'][$i][3].'</td>
            <td>'.$_SESSION['giohang'][$i][4].'</td>
            <td>'.number_format($tt).' vnđ</td>
            <td>
            <a href="cart.php?delid='.$i.'"><span>x</span></a>
            </td>

        </tr>';
        
        }
      echo ' <table>
     
         
      <tr>
          <td>Tổng Tiền Hàng</td>
          <td><p>'.number_format($tong).' vnđ</p></td>
          
      </tr>
      
  </table>';
    }
    echo '<a href="index.php?act=showdon" class="thanh-toan">danh sách đơn hàng</a>';
 }
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
 function taogiohang($bill_name, $bill_address, $tel,$email,$total,$pttt,$ngaydathang,$trangthai){
    $conn=ketnoidb();
    $sql = "INSERT INTO bill (bill_name, bill_address, tel,email,total,pttt,ngaydathang,trangthai)
  VALUES ('$bill_name', '$bill_address', '$tel','$email','$total','$pttt','$ngaydathang','$trangthai')";
    
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  $conn = null;
  return $last_id;
 }
 function taodonhang($pro_name, $images, $dongia,$soluong,$thanhtien,$color,$id_bill){
    $conn=ketnoidb();
    $sql = "INSERT INTO cart (pro_name, images, dongia,soluong,thanhtien,color,id_bill)
  VALUES ('$pro_name', '$images', '$dongia','$soluong','$thanhtien','$color','$id_bill')";
  
  $conn->exec($sql);
  $conn = null;

 }
 function showlai(){
  if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
     $tong=0;
      for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
$tt= $_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][4];
          $tong+=$tt;
          echo '<tr>
         
        
          <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
         
          <td>'.$_SESSION['giohang'][$i][4].'</td>
          <td>'.number_format($tt).' vnđ</td>
         

      </tr>';
      
      }
    echo ' <table>
   
       
    <tr>
        <td>Tổng Tiền Hàng</td>
        <td><p>'.number_format($tong).' vnđ</p></td>
        
    </tr>
    
</table>';
  }
  echo '<a href="index.php?act=showdon" class="thanh-toan">danh sách đơn hàng</a>';
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