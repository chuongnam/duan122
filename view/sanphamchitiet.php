<?php

include "header.php";
include "model/sanpham.php";
?>

<?php
$id = $_GET["product_id"];
$sanpham = new product();
$sanphamchitiet = $sanpham->get_product($id)->fetch_assoc();
$danhmuc = new category();
$category = $danhmuc->get_category($sanphamchitiet['cartegory_id']);
echo '<script>';
echo 'console.log(' . json_encode($sanphamchitiet) . ');';
echo 'console.log(' . json_encode($category) . ');';
echo '</script>';
?>
<style>
    .quantity {
        margin-top: 10px;
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
                    <p><?php echo $sanphamchitiet['product_gia'] ?><sup>đ</sup></p>
                </div>
                <div class="product-content-right-product-color">
                    <p><span style="font-weight: bold;">MÀU SẮC :</span><?php echo $sanphamchitiet['color'] ?> <span style="color: red;">*</span></p>

                </div>

                <div class="quantity">
                    <p style="font-weight: bold;">Số Lượng :</p>
                    <input type="number" min="1" value="">

                </div>

                <div class="mota">
                    <h3>MÔ TẢ:</h3>
                    <p><?php echo $sanphamchitiet['product_mota'] ?>
                    </p>
                </div>
               
                <div class="product-content-right-product-button">
                    <button><i class="fa fa-shopping-cart"></i>
                        <p>MUA HÀNG</p>
                    </button>
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
                        


                        </p>
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
        <div class="product-relate-item">
            <img src="image/anh11.jpg">
            <h1>xe đạp trẻ em</h1>
            <p>700.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-item">
            <img src="image/anh11.jpg">
            <h1>xe đạp trẻ em</h1>
            <p>700.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-item">
            <img src="image/anh11.jpg">
            <h1>xe đạp trẻ em</h1>
            <p>700.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-item">
            <img src="image/anh11.jpg">
            <h1>xe đạp trẻ em</h1>
            <p>700.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-item">
            <img src="image/anh11.jpg">
            <h1>xe đạp trẻ em</h1>
            <p>700.000<sup>đ</sup></p>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>