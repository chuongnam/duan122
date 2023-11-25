
<?php
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
//lay du lieu form
// if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
//         $images = $_POST['images'];
//         $product_name=$_POST['product_name'];
//         $product_gia=$_POST['product_gia'];
//         $color = $_POST['color'];
//         $soluong=$_POST['soluong'];
//         $sp=[$images,$product_name,$product_gia,$color, $soluong];
//         $_SESSION['giohang'][]=$sp;
//         header("location:cart.php");
        
// }
//  function showgiohang(){
//     if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
//         for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
//             $tt= $_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][4];
//             echo '<tr>
//             <td>'.($i+1).'</td>
//             <td><img src="../admin/image/'.$_SESSION['giohang'][$i][0].'"></td>
//             <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
//             <td>'.$_SESSION['giohang'][$i][2].'</td>
//             <td>'.$_SESSION['giohang'][$i][3].'</td>
//             <td>'.$_SESSION['giohang'][$i][4].'</td>
//             <td>'.$tt.'</td>
//             <td><span>x</span></td>

//         </tr>';
        
//         }
//     }
//  }
?>
