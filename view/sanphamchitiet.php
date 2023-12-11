<?php
if (isset($_POST['submit-comment'])) {
    $currentDateTime = date("Y-m-d H:i:s");
    $content = $_POST['cmt-content'];
    $user_cmt->insert_binhluan($_SESSION['user_id'], $id, $currentDateTime, $content);
}
$binhluan = $user_cmt->loadall_binhluan($id);
?>
<style>
    .quantity {
        margin-top: 10px;
    }

    .thanh-toan {
        margin-top: 10px;
        width: 150px;
        height: 35px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
    }

    .thanh-toan:hover {
        background-color: black;
        color: white;
    }

    .soluongg input {
        margin-top: 10px;
        width: 50px;
    }

    .pttt {
        display: flex;
        margin-bottom: 20px;

    }

    .tt {
        margin-left: 15px;
    }

    a:hover {
        color: aliceblue;
    }

    .content-item {
        max-width: 270px;
        border: 2px solid gray;
        flex: 1 0 20%;
        /* Flex-grow: 1; Flex-shrink: 0; Flex-basis: 30%; */
        margin: 10px;
        box-sizing: border-box;
    }

    .content-item:hover {
        border: 2px solid gray;
    }

    .content-item h1 {
        margin-top: 20px;
    }

    .content-item p {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #commentI {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        /* Khoảng cách với các phần tử xung quanh */
        box-sizing: border-box;
        /* Đảm bảo rằng padding không làm thay đổi kích thước toàn bộ chiều rộng */
        border: 1px solid #ccc;
        /* Màu và độ dày của đường viền */
        border-radius: 5px;
        /* Bo tròn góc */
        font-size: 14px;
        /* Cỡ chữ */
        line-height: 1.5;
        /* Độ dài dòng */
        resize: vertical;
        /* Cho phép người dùng điều chỉnh chiều cao theo chiều dọc */
    }
</style>
<section class="product">
    <div class="container">
        <div class="product-top row">

        </div>

        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="../admin/upload/<?php echo $sanphamchitiet['images']; ?>" alt="Product Image">
                </div>

            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $sanphamchitiet['product_name'] ?></h1>
                    <P><?php echo $sanphamchitiet['masp'] ?></P>
                </div>
                <div class="product-content-right-product-price">
                    <p><?php echo number_format($sanphamchitiet['product_gia'])  ?><sup>VNĐ</sup></p>
                </div>




                <div class="mota">
                    <h3>MÔ TẢ:</h3>
                    <p><?php echo $sanphamchitiet['product_mota'] ?>
                    </p>
                </div>
                <!-----form dat hang-->
                <form action="index.php?act=taogio" method="POST">

                    <p style="font-weight: bold;" class="soluongg">Số Lượng :<input type="number" min="1" value="1" name="soluong"></p> <br>

                    <input type="text" name="product_id" value="<?php echo $sanphamchitiet['product_id'] ?>" hidden>
                    <input type="text" name="images" value="<?php echo $sanphamchitiet['images'] ?>" hidden>
                    <input type="text" name="product_name" value="<?php echo $sanphamchitiet['product_name'] ?>" hidden>
                    <input type="text" name="product_gia" value="<?php echo $sanphamchitiet['product_gia'] ?>" hidden>
                    <div class="pttt">
                        Màu Sắc:<br>
                        <p><input type="radio" name="color" value="vàng" checked class="tt">Vàng</p>
                        <p><input type="radio" name="color" value="trắng" class="tt">Trắng</p>
                        <p><input type="radio" name="color" value="đen" class="tt">Đen </p>
                    </div>

                    <input type="submit" value="THÊM GIỎ HÀNG" name="addtocart" onclick="add" class="thanh-toan">
                </form>
                <!-------end-------->
                <div class="product-content-right-product-button">

                    <button>
                        <p><a href="thanhtoan.php">MUA NGAY</a></p>
                    </button>

                </div>
                <div class="product-content-right-product-icon">
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-phone"></i>
                        <p>hotline</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-weixin"></i>
                        <p>commnet</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="material-icons" style="font-size:36px">drafts</i>
                        <p>mail</p>

                    </div>
                </div>
                <div class="product-content-right-bottom-content-big">
                    <div class="product-content-right-bottom-content">
                    </div>
                </div>

            </div>
        </div>
        <section class="product-relate">
            <div class="product-relate-title">
                <h2>Sản Phẩm Liên Quan</h2>
            </div>
            <div class="row product-content">
                <?php
                if ($splienquan) {
                    while ($row = $splienquan->fetch_assoc()) {
                ?>
                        <div style="text-align: center; margin: 20px; padding: 10px; border: none; border-radius: 10px;" class="content-item">
                            <img src="../admin/upload/<?php echo $row['images'] ?>" style="width: 200px; height: 200px; border-radius: 5px;">
                            <h1 style="margin-top: 10px;"><?php echo $row['product_name'] ?></h1>
                            <p><?php echo number_format($row['product_gia']) ?> VNĐ</p>
                            <a href="index.php?act=chitiet&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none; background-color: #007BFF; color: #fff; padding: 10px 15px; border-radius: 5px; display: inline-block; margin-top: 10px;">Xem Chi Tiết</a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section>

        <section class="comment" style="width:70%;margin:auto;margin-top:20px">
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<div class="myInputComent" style="margin:auto">
            <h2 style="text-align:center;margin:20px 0px">Bình Luận Về ' . htmlspecialchars($sanphamchitiet['product_name']) . '</h2>
            <form action="" method="post">
                <textarea name="cmt-content" id="commentI" placeholder="nội dung bình luận" rows="5"></textarea>
                <button style="background-color: green; color: #fff; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px;" name="submit-comment">Gửi Bình Luận</button>
            </form>
        </div>
        <div class="otherComment" style="margin-top:20px;display:flex;flex-direction:column">';
            }
            ?>
            <?php
            if (isset($_SESSION['user_id'])) {
                if ($binhluan) {
                    foreach ($binhluan as $row) {
                        echo '<div class="otherCommentItem" style="display:flex; background-color: #f2f2f2; padding: 10px; margin-bottom: 10px; border-radius: 5px;">';
                        echo '<div class="image">
                        <img src="https://t4.ftcdn.net/jpg/05/49/98/39/360_F_549983970_bRCkYfk0P6PP5fKbMhZMIb07mCJ6esXL.jpg" style="width:50px" alt="">
                    </div>';
                        echo '<div class="content" style="margin-left:10px;">';
                        echo '<h2 style="margin-bottom: 5px; font-size: 18px;">' . $row['user_name'] . '</h2>';
                        echo '<p style="margin-bottom: 5px; color: #888;">' . $row['date'] . '</p>';
                        echo '<p style="margin-bottom: 0;">' . $row['noidung'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo '<h2 style="text-align:center">vui lòng đăng nhập để bình luận</h2>';
            }
            ?>
    </div>


</section>
</div>
</div>
</div>
</section>