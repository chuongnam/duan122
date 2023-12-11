<?php
include "slide.php";
?>
<style>
    .cartegory-right-content {
        display: flex;
    }

    .content-left {
        width: 20%;
    }

    .btn-xemthem {

        border: 2px solid #BF8A49;
    }

    .btn-xemthem:hover {
        background-color: black;
        color: white;
    }

    .content-sp {

        margin-left: 10px;
        display: flex;
        justify-content: space-between;


    }

    h1 {
        font-size: 20px;
    }

    .content-item {
        margin-left: 10px;
        border: 2px solid gray;
    }

    .content-item h1 {
        margin-top: 20px;
    }

    .content-item p {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .dm-item {
        margin-left: 20px;
        margin-top: 10px;

    }

    .item {
        margin: 20 20px 20 20px;
    }

    .dm-item a {
        color: #BF8A49;
    }

    .dm-item a:hover {
        color: red;
    }
.h1{
    margin-bottom: 20px;
    align-items: center;
    text-align: center;
    font-size: 40px;
}
</style>
<section class="cartegory">
<div class="container">
    <h1 class="h1" style="text-align: center; margin-top: 20px;">TOP YÊU THÍCH</h1>

    <div class="cartegory-right" style="display: flex; flex-wrap: wrap">

        <?php
        if ($product) {
            $count = 0;
            while ($row = $product->fetch_assoc()) {
        ?>
            <div style="text-align: center; margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 10px; width: 270px;">
                <img src="../admin/upload/<?php echo $row['images'] ?>" style="width: 100%; height: 200px; border-radius: 5px;">
                <h1 style="margin-top: 10px;"><?php echo $row['product_name'] ?></h1>
                <p><?php echo number_format($row['product_gia']) ?> VNĐ</p>
                <a href="index.php?act=chitiet&product_id=<?php echo $row['product_id'] ?>" class="btn-xemthem" style="text-decoration: none; background-color: #007BFF; color: #fff; padding: 10px 15px; border-radius: 5px; display: inline-block; margin-top: 10px;">Xem Chi Tiết</a>
            </div>

        <?php
            $count++;
            if ($count % 4 == 0) {
                echo '<div style="width: 100%; text-align: center;"></div>';
            }
            }
        }
        ?>

    </div>
</div>


</section>