<?php
include "header.php";
include "slide.php";
include "model/sanpham.php";
?>
<hr>
<style>
    .content{
        margin-top: 30px;
    }
   .h1{
        align-items: center;
        text-align: center;
    }
    .content-sp{
        
        margin-left: 10px;
        display: flex;
        justify-content: space-between;
        width: 200px;
        
    }
    h1{
        font-size: 20px;
    }
    .content-item{
        margin-left: 10px;
    }
    </style>
    <?php

$product = new product();
$top10 = $product->top10();
?>
<body>
    <div class="content">
    <h1 class="h1"> TOP 10 YÊU THÍCH</h1>
    <div class="content-sp">
    <?php
                if ($top10) {
                    while ($row = $top10->fetch_assoc()) {
                        ?>

    <div class="content-item">
    <img src="../admin/upload/<?php echo $row['images'] ?>" width="200px">
                                <h1>
                                    <?php echo $row['product_name'] ?>
                                </h1>
                                <p>
                                    <?php echo number_format($row['product_gia'])  ?> VNĐ
                                </p>
                                <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>" class="btn-xemthem">xem them</a>
                </div>
                <?php
                    }
                }
                ?>  
                
    </div>
    
</div>
</body>

<?php
include "footer.php";
?>
