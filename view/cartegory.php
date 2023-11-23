<?php

include "header.php";
include "model/sanpham.php";
?>
<?php

$product = new productt();
$loadsp = $product->loadsp();
?>
<style>
    .cartegory-right-content {
        display: flex;
    }
</style>
<section class="cartegory">
    <div class="container">

    </div>
    <div class="container">
        <div class="row">

            <div class="cartegory-right">
                <div class="cartegory-right-top-item">
                    <p>DANH MỤC</p>
                </div>
                <div class="cartegory-right-top-item">
                    <select name="" id="">
                        <option value="">sắp xếp</option>
                        <option value="">xe đạp giá cao</option>
                        <option value="">xe đạp cũ</option>
                        <option value="">xe đạp giá rẻ</option>
                    </select>
                </div>
                <div class="cartegory-right-content">
                <?php
                if ($loadsp) {
                    while ($row = $loadsp->fetch_assoc()) {
                        ?>

                        
                            <div class="cartegory-right-content-item">
                                <img src="../admin/upload/<?php echo $row['images'] ?>">
                                <h1>
                                    <?php echo $row['product_name'] ?>
                                </h1>
                                <p>
                                    <?php echo $row['product_gia'] ?><sub>đ</sub>
                                </p>
                                <a href="chitietsanpham?product_id=<?php echo $row['product_id'] ?>">xem them</a>
                            </div>
                        
                        <?php
                    }
                }
                ?>
                </div>



            </div>
        </div>


</section>
<?php
include "footer.php";
?>