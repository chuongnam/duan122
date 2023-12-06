<style>
    .h1 {
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1 class="h1">THÔNG KÊ SẢN PHẨM</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th>MÃ DANH MỤC</th>

                        <th>TỔNG SẢN PHÂM</th>
                        <th>TÊN DANH MỤC</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ TRUNG BINH</th>
                        <th>TỔNG</th>

                    </tr>

                    <?php
                    if($product) {

                        while($row = $product->fetch_assoc()) {
                            ?>



                            <td>
                                <?php echo $row['madm'] ?>
                            </td>
                            <td>
                                <?php echo $row['countsp'] ?>
                            </td>
                            <td>
                                <?php echo $row['tendm'] ?>
                            </td>
                            <td>
                                <?php echo number_format($row['minprice']) ?> VNĐ
                            </td>
                            <td>
                                <?php echo number_format($row['maxprice']) ?> VNĐ
                            </td>
                            <td>
                                <?php echo number_format($row['avg']) ?> VNĐ
                            </td>
                            <td>
                                <?php echo number_format($row['sum']) ?> VNĐ
                            </td>












                            </tr>
                            <?php
                        }
                    }
                    ?>


                    </tr>
                    </tr>
                </thead>



            </table>
        </div>
    </div>
    <div class="admin-content-right-cartegory_list">
        <h1 class="h1">ĐƠN HÀNG MỚI</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th>MÃ ĐƠN HÀNG</th>

                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>TỔNG TIỀN</th>
                      

                    </tr>

                    <?php
                    if($cartt) {

                        while($row = $cartt->fetch_assoc()) {
                            ?>



                            <td>
                                <?php echo $row['id_bill'] ?>
                            </td>
                            <td>
                                <?php echo $row['ngaydathang'] ?>
                            </td>
                          
                            <td>
                                <?php echo number_format($row['total']) ?> VNĐ
                            </td>
                           












                            </tr>
                            <?php
                        }
                    }
                    ?>


                    </tr>
                    </tr>
                </thead>



            </table>
        </div>
    </div>
    <div class="admin-content-right-cartegory_list">
        <h1 class="h1">SẢN PHẨM XEM NHIỀU NHẤT</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th>TÊN SẢN PHẨM</th>

                        <th>MÃ SẢN PHẨM</th>
                        <th>GIÁ TIỀN</th>
                        <th>IMAGES</th>
                        <th>LƯỢT XEM</th>
                      

                    </tr>

                    <?php
                    if($cart) {

                        while($row = $cart->fetch_assoc()) {
                            ?>



                            <td>
                                <?php echo $row['product_name'] ?>
                            </td>
                            <td>
                                <?php echo $row['product_id'] ?>
                            </td>
                          
                            <td>
                                <?php echo number_format($row['product_gia']) ?> VNĐ
                            </td>
                            <td><img src="../admin/upload/<?php echo $row['images'] ?>" width="50px"></td>
                            <td>
                                <?php echo $row['luotxem'] ?>
                            </td>
                           












                            </tr>
                            <?php
                        }
                    }
                    ?>


                    </tr>
                    </tr>
                </thead>



            </table>
        </div>
    </div>
   
</div>

</body>

</html>