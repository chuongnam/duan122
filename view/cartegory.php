<?php
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
        flex-wrap: wrap;

    }

    h1 {
        font-size: 20px;
    }

    .content-item {
        max-width: 270px;
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
</style>
<section class="cartegory">
    <div class="container">

    </div>
    <div class="container">
        <div class="row">
            <div class="content-left">
                <div class="cartegory-right-top-item" style="padding-left: 25px;">
                    <h1>DANH MỤC</h1>
                    <ul style="list-style-type: circle !important; padding: 0;" class="category-list">
                        <?php
                        if ($loaddm) {
                            while ($row = $loaddm->fetch_assoc()) {
                        ?>
                                <li style="font-weight: 700; margin: 7px 0;">
                                    <a href="spdanhmuc.php?cartegory_id=<?php echo $row['cartegory_id'] ?>" style="text-decoration: none; color: #555; display: block;"><?php echo $row['tendanhmuc'] ?></a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>


            </div>
            <div class="cartegory-right">

                <div class="content-sp">
                    <?php
                    if ($loadsp && $loadsp->num_rows > 0) {
                        // Nếu có sản phẩm
                        while ($row = $loadsp->fetch_assoc()) {
                    ?>
                            <div style="text-align: center; margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 10px;" class="content-item">
                                <img src="../admin/upload/<?php echo $row['images'] ?>" style="width: 200px; height: 200px; border-radius: 5px;">
                                <h1 style="margin-top: 10px; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['product_name'] ?></h1>
                                <p><?php echo number_format($row['product_gia']) ?> VNĐ</p>
                                <a href="index.php?act=chitiet&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none; background-color: #007BFF; color: #fff; padding: 10px 15px; border-radius: 5px; display: inline-block; margin-top: 10px;">Xem Chi Tiết</a>
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