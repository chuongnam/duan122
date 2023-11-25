<?php

include "header.php";
include "model/sanpham.php";
?>
<?php

$product = new product();
$loadsp = $product->loadsp();
?>
<?php

$cartegory = new category();
$loaddm = $cartegory->loaddm();
?>
<style>
    .cartegory-right-content {
        display: flex;
    }
    .content-left{
        width: 20%;
    }
</style>
<section class="cartegory">
    <div class="container">

    </div>
    <div class="container">
        <div class="row">
<div class="content-left">
<div class="cartegory-right-top-item">
                    <h1>DANH MỤC</h1>
                    <?php
                if ($loaddm) {
                    while ($row = $loaddm->fetch_assoc()) {
                        ?>
                        <a href="spdanhmuc.php?cartegory_id=<?php echo $row['cartegory_id']?>"><?php echo $row['tendanhmuc']?></p></a>
                               <?php
                    }
                }
                ?>

                </div>
</div>
            <div class="cartegory-right">
                
                
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
                                <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>">xem them</a>
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