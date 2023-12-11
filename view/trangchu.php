<?php include "slide.php" ?>
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
        flex-wrap: wrap;

    }

    h1 {
        font-size: 20px;
    }

    .content-item {
        max-width: 285px;
        border: 2px solid gray;
        flex: 1 0 20%;
        margin: 10px;
        box-sizing: border-box;
    }

    .content-item h1 {
        margin-top: 20px;
    }

    .content-item p {
        margin-top: 10px;
        margin-bottom: 10px;
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

    <div class="cartegory-right">

        <div class="content-sp">
        <?php
        if ($product) {
            while ($row = $product->fetch_assoc()) {
        ?>
            <div style="text-align: center; margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 10px;" class="content-item">
                                <img src="../admin/upload/<?php echo $row['images'] ?>" style="width: 200px; height: 200px; border-radius: 5px;">
                                <h1 style="margin-top: 10px; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['product_name'] ?></h1>
                                <p><?php echo number_format($row['product_gia']) ?> VNĐ</p>
                                <a href="index.php?act=chitiet&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none; background-color: #007BFF; color: #fff; padding: 10px 15px; border-radius: 5px; display: inline-block; margin-top: 10px;">Xem Chi Tiết</a>
                            </div>

        <?php
            }
        }
        ?>
        </div>

    </div>
</div>


</section>