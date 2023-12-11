<style>
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
    .nam{
        font-size: 25px;
        font-weight: bold;
    }
    
</style>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

<section class="cart">

    <div class="container">
        <div class="cart-content row">

            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>IMAGES</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>

                        <th>MÀU SẮC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>THÀNH TIỀN</th>

                        <th>XÓA</th>
                    </tr>
                    <form action="thanhtoan.php" method="POST">
                        <?php
                        if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                            $i = 1;
                            $tong = 0;
                            $sum = 0;
                            foreach ($_SESSION['giohang'] as $idSP => $value):
                                $sum = $value['product_gia'] * $value['soluong'];
                                $tong += $sum;
                                ?>
                                <tr>
                                    <td>
                                        <?= $i++ ?>
                                    </td>
                                    <td>
                                        <?= $idSP ?>
                                    </td>
                                    <td><img src="../admin/upload/<?= $value['images'] ?>" width="200px"></td>
                                    <td>
                                        <?= $value['product_name'] ?>
                                    </td>
                                    <td>
                                        <?= number_format($value['product_gia']) ?><sup>VNĐ</sup>
                                    </td>

                                    <td>
                                        <?= $value['color'] ?>
                                    </td>

                                    <td>
                                        <a href="index.php?act=them&product_id=<?= $idSP ?>" class="btn btn-success">+</a>
                                        <?= $value['soluong'] ?>
                                        <a href="index.php?act=tru&product_id=<?= $idSP ?>" class="btn btn-danger">-</a>
                                    </td>

                                    <td>
                                        <?= number_format($sum) ?><sup>VNĐ</sup>
                                    </td>



                                    <td>
                                        <a onclick="return confirm('bạn có sản phẩm này không')" href="index.php?act=xoasp&product_id=<?= $idSP ?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>

                                <?php
                                $i++;
                            endforeach;
                        } else {
                            // Nếu giỏ hàng không có giá trị session, hiển thị thông báo giỏ hàng trống
                            echo '<tr><td colspan="9">Giỏ hàng trống</td></tr>';
                        }
                        ?>
                       
                </table>
               
                <a href="index.php?act=showdon">ĐƠN HÀNG</a> 
          
                </ul>
            </div>
            <div class="cart-content-right">
                <table>

                <ul>
                <p class="nam">Tổng tiền:

                    <?php 
                     if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                        $sum = 0;
                        foreach ($_SESSION['giohang'] as $item) {
                            $sum += $item['product_gia'] * $item['soluong'];
                        }

                        echo number_format($sum) . "<sup>vnđ</sup>";
                    }
                    ?>
                <p>
            </ul>
               
                </table>



                <div class="cart-content-right-text">

                    <p>Bạn sẽ được miễn phí giao hàng khi đơn hàng của bạn có tổng giá trị trên 2.000.000<sub>đ</sub>
                    </p>
                    
                </div>
                <div class="cart-content-right-button">

                    <?php if(isset($_SESSION['giohang'])){
                        echo '<input type="submit" name="dongydathang" value="thanh toán" class="thanh-toan">';
                    } ?>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>