<?php
session_start();
include "header.php";
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
      margin-top: 10px;
   }
   .tt{
     margin-top: 10px;
     margin-bottom: 10px;
   }
    </style>

<section class="delivery">
           <div class="container">
              <div class="delivery-content row">

    <div class="delivery-content-left">
                   <p>VUI LÒNG CHỌN ĐỊA CHỈ GIAO HÀNG</p>
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
                    <input required type="text" name="bill_address">
                 </div>
                 <div class="pttt">
                    Phương Thức Thanh Toán<span style="color: red;">*</span>
                    <p><input type="radio" name="pttt" value="Trả tiền khi nhận hàng" checked class="tt">Trả tiền khi nhận hàng</p>
                    <p><input type="radio" name="pttt" value="Thanh toán online" class="tt">Thanh toán online </p>
                    <p><input type="radio" name="pttt" value="thanh toán qua ngân hàng" class="tt">thanh toán qua ngân hàng </p>
                 </div>
                 
                 
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
   