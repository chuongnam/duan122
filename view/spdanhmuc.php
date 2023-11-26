<?php
include "header.php";
include "model/sanpham.php";
?>

    <?php

$cartegory = new category();
$spdanhmuc = $cartegory->spdanhmuc();
?>
<style>
    .cartegory-right{
        width: 100%;
        padding-top: 100px;
       
      
        
    }
 
    
    </style>
<div class="cartegory-right">
<h1>DANH MỤC</h1>
  
    <div class="cartegory-right-content">
        <div class="cartegory-right-content-item">
        <?php
        
                if ($spdanhmuc) {
                    while ($row = $spdanhmuc->fetch_assoc()) {
                        ?>
            <img src="../admin/upload/<?php echo $row['images'] ?>">
            <h1><?php echo $row['product_name']?></h1>
            <p><?php echo $row['product_gia']?><sub>đ</sub></p>
            <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>">xem them</a>
            <?php
                    }
                }
                ?>
                
        </div>
       

    
     </div>

</div>
<?php
include "footer.php";
?>