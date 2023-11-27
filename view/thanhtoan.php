<?php

include "header.php";
?>
<section class="delivery">
           <div class="container">
              <div class="delivery-content row">
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
                     <form>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Họ Tên <span style="color: red;">*</span></label>
                        <input type="text">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Điện Thoại <span style="color: red;">*</span></label>
                        <input type="text">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/TP <span style="color: red;">*</span></label>
                        <input type="text">
                     </div>
                     <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/huyện<span style="color: red;">*</span></label>
                        <input type="text">
                     </div>
                  
                  
                   <div class="delivery-content-left-input-top-item">
                    <label for="">Phường/xã<span style="color: red;">*</span></label>
                    <input type="text">
                 </div>
                   <div class="delivery-content-left-input-top-item">
                    <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                    <input type="text">
                 </div>
                 <div class="delivery-content-left-button">
                    <a href="cart.php"><span>&#8610;</span><p>Quay lại giở hàng</p></a>
                   <input type="">
                     </form>
                 </div>
                 
                </div>
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>giảm giá</th>
                            <th>số lượng</th>
                            <th>thành tiền</th>
                        </tr>
                        <tr>
                            <td>xe đạp trẻ em</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td><p>2.000.000<sub>đ</sub></p></td>
                        </tr>
                        <tr>
                            <td>xe đạp trẻ em</td>
                            <td>-20%</td>
                            <td>1</td>
                            <td><p>2.000.000<sub>đ</sub></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;"><p>2.000.000<sub>đ</sub></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">THUẾ VAT</td>
                            <td style="font-weight: bold;"><p>2.000.000<sub>đ</sub></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">TỔNG TIỀN HÀNG</td>
                            <td style="font-weight: bold;"><p>2.000.000<sub>đ</sub></p></td>
                        </tr>
                    </table>
                </div>
              </div>
           </div>
    </section>
    <?php
include "footer.php";
?>
   