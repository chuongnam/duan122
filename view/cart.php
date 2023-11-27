<?php
session_start();
include "header.php";
include "addcart.php";

?>

<?php

if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];

//lay du lieu form
if(isset($_POST['addtocart'])&&($_POST['addtocart'])){

        $images = $_POST['images'];
        $product_name=$_POST['product_name'];
        $product_gia=$_POST['product_gia'];
        $color = $_POST['color'];
        $soluong=$_POST['soluong'];
        //ktra sản phẩm có trong giỏ hàng hay k
        $fl=0;
       for ($i=0;$i <sizeof($_SESSION['giohang']); $i++){
        if($_SESSION['giohang'][$i][1]==$product_name){
            $fl=1;
            $soluongnew=$soluong+$_SESSION['giohang'][$i][4];
            $_SESSION['giohang'][$i][4]=$soluongnew;
            break;
        }
       }
        if($fl==0){
        //them moi
        $sp=[$images,$product_name,$product_gia,$color,$soluong];
        $_SESSION['giohang'][]=$sp;
        header("location:cart.php");
        }
}

?>

    <section class="cart">
       
       <div class="container">
           <div class="cart-content row">
      
               <div class="cart-content-left">
                    <table>
                       <tr>
                           <th>STT</th>
                           <th>ẢNH SẢN PHẨM</th>
                           <th>TÊN SẢN PHẨM</th>
                           <th>GIÁ</th>
                   
                           <th>MÀU SẮC</th>
                           <th>SỐ LƯỢNG</th>
                           <th>THÀNH TIỀN</th>
                         
                           <th>XÓA</th>
                       </tr>
                       <form action="bill.php" method="POST">
                       <?php showgiohang() ?>
                       <!-- <tr>
                           <td><img src="image/anh11.jpg"></td>
                           <td><p>xe đạp trẻ em</p></td>
                           <td><img src="image/color.jpg" ></td>
                         
                           <td><input type="number" value="1" min="1"></td>
                           <td><p>4.000.000<sub>đ</sub></p></td>
                           <td><span>x</span></td>
   
                       </tr>
                       <tr>
                           <td><img src="image/anh11.jpg"></td>
                           <td><p>xe đạp trẻ em</p></td>
                           <td><img src="image/color.jpg" ></td>
                         
                           <td><input type="number" value="1" min="1"></td>
                           <td><p>4.000.000<sub>đ</sub></p></td>
                           <td><span>x</span></td>
   
                       </tr> -->
                    </table>
               </div>
               <div class="cart-content-right">
                   <table>
                  
                      
                       
                   </table>
                   <div class="delivery-content-left">
                   <p>VUI LÒNG CHỌN ĐỊA CHỈ GIAO HÀNG</p>
                   <div class="delivery-content-left-dangnhap row">
                    <i class="fa fa-user" href=""></i>
                    <p>đăng nhập (nếu bạn có tài khoản)</p>
                   </div>
                   <div class="delivery-content-left-khachle row">
                     <input checked name="loaikhach" type="radio">
                     <p><span style="font-weight: bold;">KHÁCH LẺ</span> (NẾU BẠN KHÔNG MUỐN LƯU LẠI THÔNG TIN)</p>
                   </div>
                   <div class="delivery-content-left-dangky row">
                    <input checked name="loaikhach" type="radio">
                    <p><span style="font-weight: bold;">ĐĂNG KÝ</span> (tạo mới tài khoản với thông tin bên dưới)</p>
                   </div>
                   <div class="delivery-content-left-input-top-item">
                        <label for="">Họ Tên <span style="color: red;">*</span></label>
                        <input type="text" name="bill_name">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Điện Thoại <span style="color: red;">*</span></label>
                        <input type="text" name="tel">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">EMAIL <span style="color: red;">*</span></label>
                        <input type="text" name="email">
                     </div>
                  
                  
                 
                   <div class="delivery-content-left-input-top-item">
                    <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                    <input type="text" name="bill_address">
                 </div>
                  <div class="cart-content-right-text">
                    <p>bạn sẽ được miễn phí giao hàng khi đơn hàng của bạn có tổng giá trị trên 2.000.000<sub>đ</sub></p>
                    <p style="color: red; font-weight: bold;">mua thêm <span style="font-size: 18px;">200.000</span> để được miễn phí ship</p>
                  </div>
                  <div class="cart-content-right-button">
                   <button><a href="cartegory.php">TIẾP TỤC MUA HÀNG</a></button>
                  <input type="submit" name="dongydathang" value="thanh toán">
                  </div>
</form>
                  <div class="cart-content-right-dangnhap">
                   <p>tài khoản</p><br>
                   <p>Hãy <a href=""  style="color: red;">ĐĂNG NHẬP</a> tài khoản của bạn để tích điểm thành viên</p>
                  </div>
               </div>
           </div>
       </div>
     </section>  
     <?php
include "footer.php";
?>
   