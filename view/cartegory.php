<?php

include "header.php";
include "model/sanpham.php";
?>
<?php
if (isset($_GET['name'])) {

    $name = $_GET['name'];
    $product = new product();
    $loadsp = $product->get_productByName($name);
    $cartegory = new category();
    $loaddm = $cartegory->loaddm();
} else {
    $product = new product();
    $loadsp = $product->loadsp();
    $cartegory = new category();
    $loaddm = $cartegory->loaddm();
}
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
                            <a href="spdanhmuc.php?cartegory_id=<?php echo $row['cartegory_id'] ?>"><?php echo $row['tendanhmuc'] ?></p></a>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="cartegory-right">


                <div class="content-sp">
                    <?php
                    if ($loadsp && $loadsp->num_rows > 0) {
                        // Nếu có sản phẩm
                        while ($row = $loadsp->fetch_assoc()) {
                    ?>
                            <div class="content-item">
                                <img src="../admin/upload/<?php echo $row['images'] ?>" width="200px" height="200px">
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
                    } else {
                        // Nếu không có sản phẩm
                        echo '<p>Sản phẩm không tồn tại.</p>';
                    }
                    ?>
                </div>




            </div>
        </div>


</section>
<?php
include "footer.php";
?>