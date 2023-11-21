<?php
include "header.php";
?>
    <section class="cart">
       
       <div class="container">
           <div class="cart-content row">
               <div class="cart-content-left">
                    <table>
                       <tr>
                           <th>SẢN PHẨM</th>
                           <th>TÊN SẢN PHẨM</th>
                           <th>MÀU</th>
                           <th>so luong</th>
                   
                           <th>THÀNH TIỀN</th>
                           <th>XÓA</th>
                       </tr>
                       <tr>
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
   
                       </tr>
                    </table>
               </div>
               <div class="cart-content-right">
                   <table>
                       <tr>
                           <th colspan="2">Tổng giỏ hàng</th>
                       </tr>
                       <tr>
                           <td>Tổng Sản Phẩm</td>
                           <td>2</td>
                       </tr>
                       <tr>
                           <td>Tổng Tiền Hàng</td>
                           <td><p>3.000.000<sub>đ</sub></p></td>
                       </tr>
                       <tr>
                           <td>Tạm Tính</td>
                           <td><p style="color: black; font-weight: bold;">5.000.000<sub>đ</sub></p></td>
                       </tr>
                   </table>
                  <div class="cart-content-right-text">
                    <p>bạn sẽ được miễn phí giao hàng khi đơn hàng của bạn có tổng giá trị trên 2.000.000<sub>đ</sub></p>
                    <p style="color: red; font-weight: bold;">mua thêm <span style="font-size: 18px;">200.000</span> để được miễn phí ship</p>
                  </div>
                  <div class="cart-content-right-button">
                   <button><a href="cartegory.php">TIẾP TỤC MUA HÀNG</a></button>
                   <button><a href="thanhtoan.php">THANH TOÁN</a></button>
                  </div>
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
   