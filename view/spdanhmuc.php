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
        justify-content: space-between;
       
      
        
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
        border: 2px solid gray;
        justify-content: space-between;
        
    }
   .h1{
    margin-bottom: 20px;
    text-align: center;
    align-items: center;
    font-size: 40px;
   }
   .content-item h1{
        margin-top: 20px;
    }
    .content-item p{
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .xem-them{
        text-align: center;
        align-items: center;
    }
    
    </style>
    <?php
    
    ?>
<div class="cartegory-right">
    <h1 class="h1">DANH MỤC</h1>
<div class="content-sp row">
<?php
        
        if ($spdanhmuc) {
            
            while ($row = $spdanhmuc->fetch_assoc()) {
                extract($row);
                
                ?>
          
    
        <div class="content-item">
       
            <img src="../admin/upload/<?php echo $row['images'] ?>" width="200px">
            <h1><?php echo $row['product_name']?></h1>
            <p><?php echo $row['product_gia']?><sub>đ</sub></p>
            <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>">xem them</a>
            </div>
       

    
      
            <?php
                    }
                }
                ?>
                
     
</div>
</div>
<?php
include "footer.php";
?>