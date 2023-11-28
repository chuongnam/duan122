<?php

include "header.php";
include "model/addcart.php";
?>
<style>
     .thanh-toan{
        margin-top: 10px;
        width: 150px;
        height: 35px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
        
    }
   .thanh-toan:hover{
    background-color: black;
    color: white;
   }
   .pttt{
    margin-left:  20px;
   }
    </style>
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
                     <form action="bill.php" method="POST">
                    
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
                    <input required type="text" name="bill_address">
                 </div>
                 <div class="pttt">
                    Phương Thức Thanh Toán<span style="color: red;">*</span>
                    <p><input type="radio" name="pttt" value="Trả tiền khi nhận hàng" checked>Trả tiền khi nhận hàng</p>
                    <p><input type="radio" name="pttt" value="Thanh toán online">Thanh toán online </p>
                    <p><input type="radio" name="pttt" value="thanh toán qua ngân hàng">thanh toán qua ngân hàng </p>
                 </div>
                 
                 <div class="delivery-content-left-button">
                    
                   <input type="submit" name="dongydathang" value="thanh toan" class="thanh-toan">
                     </form>
                 </div>
                 
                </div>
               
              </div>
           </div>
    </section>
    <?php
include "footer.php";
?>
   