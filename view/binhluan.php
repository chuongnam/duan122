<?php
session_start();
include "model/sanpham.php";

$product_id =$_REQUEST['product_id'];
$user = new user();
$danhsachbinhluan = $user->loadall_binhluan($product_id);

if(isset($_POST['guibinhluan'])) {
  $noidung = $_POST['noidung'];
    $product_id = $_POST['product_id'];  
    $id_user = $_SESSION['userr']['user_id'];
    $date = date('h:i:sa d/m/Y');
    $user->insert_binhluan($id_user,$product_id,$date,$noidung);
    header("location:".$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <p class="text-[20px]">Bình Luận</p>
    <table class="w-[100%] my-[20px]">
      <?php
if($danhsachbinhluan){
    while($row = $danhsachbinhluan->fetch_assoc()){

?>

<tr>
    <td><?php echo $row['noidung']?></td>
    <td><?php echo $row['id_user']?></td>
    <td><?php echo $row['date']?></td>
    
</tr>

<?php
                    }
                }
                ?>
    </table>

    <?php 
if (!isset($_SESSION['userr'])) {
?>
    <a class="bg-[black] text-white px-[25px] py-[7px] rounded" href="login.php">Đăng Nhập Để
      Bình Luận</a>
    <?php 
  }else{
    extract($_SESSION['userr']);
  ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <input type="hidden" name="product_id" value="<?=$product_id?>">

      <input type="text" name="noidung" required
        class="border  shadow-xl pl-[5px] rounded-lg py-[5px] px-[20px]" placeholder="Nhập Bình Luận">
      <input type="submit" name="guibinhluan" value="Gửi Bình Luận"
        class="bg-[black] px-[30px] py-[3px] rounded text-white cursor-pointer hover:bg-[red]">
    </form>

    <?php
  }
  ?>
  </div>
</body>

</html>