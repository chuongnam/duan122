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
        width: 200px;

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
    <h1 class="h1">TOP YÊU THÍCH</h1>
    </div>
    <div class="container">

            <div class="cartegory-right">


                <div class="content-sp">
                    <?php
                    if ($product) {
                        while ($row = $product->fetch_assoc()) {
                            ?>


                            <div class="content-item">
                                <img src="../admin/upload/<?php echo $row['images'] ?>" width="200px" height="200px">
                                <h1>
                                    <?php echo $row['product_name'] ?>
                                </h1>
                                <p>
                                    <?php echo number_format($row['product_gia']) ?> VNĐ
                                </p>
                                <a href="index.php?act=chitiet&product_id=<?php echo $row['product_id'] ?>"
                                    class="btn-xemthem">xem them</a>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>



            </div>
        </div>


</section>