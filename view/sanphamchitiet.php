

<style>
    .quantity {
        margin-top: 10px;
    }
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
   .soluongg input{
     margin-top: 10px;
         width: 50px;
   }
</style>
<section class="product">
    <div class="container">
        <div class="product-top row">

        </div>
        
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="../admin/upload/<?php echo $sanphamchitiet['images']; ?>" alt="Product Image">
                </div>

            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $sanphamchitiet['product_name'] ?></h1>
                    <P><?php echo $sanphamchitiet['masp'] ?></P>
                </div>
                <div class="product-content-right-product-price">
                    <p><?php echo number_format($sanphamchitiet['product_gia'])  ?><sup>VNĐ</sup></p>
                </div>
                <div class="product-content-right-product-color">
                    <p><span style="font-weight: bold;">MÀU SẮC :</span><?php echo $sanphamchitiet['color'] ?> <span style="color: red;">*</span></p>

                </div>

             

                <div class="mota">
                    <h3>MÔ TẢ:</h3>
                    <p><?php echo $sanphamchitiet['product_mota'] ?>
                    </p>
                </div>
                 <!-----form dat hang-->
                <form action="index.php?act=taogio" method="POST">
                
                <p style="font-weight: bold;" class="soluongg">Số Lượng :<input type="number" min="1" value="1" name="soluong"></p> <br>

                <input type="text" name="product_id" value="<?php echo $sanphamchitiet['product_id'] ?>" hidden>
                <input type="text" name="images" value="<?php echo $sanphamchitiet['images'] ?>" hidden>
                <input type="text" name="product_name" value="<?php echo $sanphamchitiet['product_name'] ?>" hidden>
                <input type="text" name="product_gia" value="<?php echo $sanphamchitiet['product_gia'] ?>" hidden>
                <input type="text" name="color" value="<?php echo $sanphamchitiet['color'] ?>" hidden>
                
                <input type="submit" value="THÊM GIỎ HÀNG" name="addtocart" class="thanh-toan">
                </form>
                <!-------end-------->
                <div class="product-content-right-product-button">
   
                    <button>
                        <p>TÌM TẠI CỦA HÀNG</p>
                    </button>
                </div>
                <div class="product-content-right-product-icon">
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-phone"></i>
                        <p>hotline</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-weixin"></i>
                        <p>commnet</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="material-icons" style="font-size:36px">drafts</i>
                        <p>mail</p>

                    </div>
                </div>
                <div class="product-content-right-product-QR">
                    <img src="image/prcode.png">
                </div>

                <div class="product-content-right-bottom-content-big">
                 
                    <div class="product-content-right-bottom-content">
                       

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-----sản phẩm liên quam-->
<section class="product-relate">
    <div class="product-relate-title">
        <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="row product-content">
    <?php
                if ($splienquan) {
                    while ($row = $splienquan->fetch_assoc()) {
                        ?>
    <div class="product-relate-item">
    <img src="../admin/upload/<?php echo $row['images']; ?>">
            <h1><?php echo $row['product_name'] ?></h1>
            <p><?php echo number_format($row['product_gia']),'VNĐ' ?></p>
            <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>" class="btn-xemthem">xem them</a>
        </div>
        <?php
                    }
                }
                ?>
        
    </div>
</section>
<?php
include "footer.php";
?>