

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

    .soluongg input {
        margin-top: 10px;
        width: 50px;
    }
</style>

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
                    <form action="thanhtoan.php" method="POST">
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

                <div class="cart-content-right-text">
                    <p>bạn sẽ được miễn phí giao hàng khi đơn hàng của bạn có tổng giá trị trên 2.000.000<sub>đ</sub>
                    </p>
                    <p style="color: red; font-weight: bold;">mua thêm <span style="font-size: 18px;">200.000</span> để
                        được miễn phí ship</p>
                </div>
                <div class="cart-content-right-button">

                    <input type="submit" name="dongydathang" value="thanh toán" class="thanh-toan">
                </div>
                </form>
                <div class="cart-content-right-dangnhap">
                    <p>tài khoản</p><br>
                    <p>Hãy <a href="" style="color: red;">ĐĂNG NHẬP</a> tài khoản của bạn để tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>