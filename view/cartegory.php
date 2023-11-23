<?php

include "header.php";
include "model/sanpham.php";

?>
<?php

$product = new productt();
$loadsp = $product->loadsp();
?>
<?php

$cartegory = new cartegory();
$loaddm = $cartegory->loaddm();
?>
<style>
    .cartegory-right-content {
        display: flex;
    }
   
    .cartegory-left{
        width: 20%;
        padding: 40px;
    }
  
</style>

<section class="cartegory">
    <div class="container">

    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <div class="cartegory-left-item">
                    <h1>DANH MỤC</h1>

                    <?php
                if ($loaddm) {
                    while ($row = $loaddm->fetch_assoc()) {
                        ?>

                       <li><a href="spdanhmuc.php?cartegory_id=<?php echo $row['cartegory_id']?>"><?php echo $row['tendanhmuc']?></a><li>
                  
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
                                <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>" class="btn.btn-danger">xem them</a>
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