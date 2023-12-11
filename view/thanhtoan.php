<?php
session_start();
include "header.php";
?>
<style>
   .thanh-toan {
      margin-top: 10px;
      width: 150px;
      height: 35px;
      background-color: white;
      border: 2px solid #BF8A49;
      color: #BF8A49;

   }

   .thanh-toan:hover {
      background-color: black;
      color: white;
   }

   .pttt {
      margin-top: 10px;
   }

   .tt {
      margin-top: 10px;
      margin-bottom: 10px;
   }

   .delivery-content-left-input-top-item input {
      width: 700px;
   }
</style>

<section class="delivery">
   <div class="container row">
      <div class="delivery-content row">
         <?php
         if (!isset($_SESSION['userr'])) {
            ?>
            <div class="delivery-content-left">
               <p>VUI NHẬP ĐỊA CHỈ GIAO HÀNG</p>
               <div class="delivery-content-left-dangnhap row">
                  <form action="index.php?act=mua" method="POST">



                     <div class="delivery-content-left-input-top-item">
                        <label for="">Họ Tên <span style="color: red;">*</span></label>
                        <input required type="text" name="bill_name">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Điện Thoại <span style="color: red;">*</span></label>
                        <input required type="text" name="tel">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">EMAIL <span style="color: red;">*</span></label>
                        <input required type="text" name="email">
                     </div>


                     <div class="delivery-content-left-input-top-item">
                        <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                        <input required type="text" name="bill_address" required>
                     </div>
                     <div class="pttt">
                        Phương Thức Thanh Toán<span style="color: red;">*</span>
                        <p><input type="radio" name="pttt" value="Trả tiền khi nhận hàng" checked class="tt">Trả tiền khi
                           nhận hàng</p>
                      
                     </div>


                     <input type="submit" name="dongydathang" value="thanh toan" class="thanh-toan">
                  </form>
               </div>

            </div>

         </div>


         <?php
         } else {
            extract($_SESSION['userr']);
            ?>
         <div class="delivery-content-left">
            <p>VUI NHẬP ĐỊA CHỈ GIAO HÀNG</p>
            <div class="delivery-content-left-dangnhap row">
               <form action="index.php?act=mua" method="POST">



                  <div class="delivery-content-left-input-top-item">
                     <label for="">Họ Tên <span style="color: red;">*</span></label>
                     <input required type="text" name="bill_name" value="<?= $user_name ?>">
                  </div>
                  <div class="delivery-content-left-input-top-item">
                     <label for="">Điện Thoại <span style="color: red;">*</span></label>
                     <input required type="text" name="tel">
                  </div>
                  <div class="delivery-content-left-input-top-item">
                     <label for="">EMAIL <span style="color: red;">*</span></label>
                     <input required type="text" name="email" value="<?= $email ?>">
                  </div>


                  <div class="delivery-content-left-input-top-item">
                     <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                     <input required type="text" name="bill_address" required>
                  </div>
                  <div class="pttt">
                     Phương Thức Thanh Toán<span style="color: red;">*</span>
                     <p><input type="radio" name="pttt" value="Trả tiền khi nhận hàng" checked class="tt">Trả tiền khi nhận
                        hàng</p>
                     
                  </div>


                  <input type="submit" name="dongydathang" value="thanh toan" class="thanh-toan">
               </form>
            </div>

         </div>

      </div>

 
<?php } ?>
<div class="delivery-content-right">
   <table>

      <tr>
         <th>images</th>
         <th>Tên sản phẩm</th>

         <th>số lượng</th>
         <th>Màu</th>

         <th>thành tiền</th>
      </tr>
      <?php
      if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
         $i = 1;
         $tong = 0;
         $sum = 0;
         foreach ($_SESSION['giohang'] as $idSP => $value):
            $sum = $value['dongia'] * $value['soluong'];
            $tong += $sum;
            ?>
            <tr>
               <td><img src="../admin/upload/<?= $value['images'] ?>" width="100px"></td>
               <td>
                  <?= $value['pro_name'] ?>
               </td>
               <td>
                  <?= $value['soluong'] ?>
               </td>
               <td>
                  <?= $value['color'] ?>
               </td>

               <td>
                  <?= number_format($sum) ?> VNĐ
               </td>

            </tr>
            <?php
            $i++;
         endforeach;
      } else {

      }
      ?>
      <table>

         <ul>
            <p class="nam">Tổng tiền:

               <?php
               if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                  $sum = 0;
                  foreach ($_SESSION['giohang'] as $item) {
                     $sum += $item['dongia'] * $item['soluong'];
                  }

                  echo number_format($sum) . "<sup>vnđ</sup>";
               }
               ?>
            <p>
         </ul>

      </table>


   </table>

</div>
