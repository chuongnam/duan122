<style>
    .h1 {
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1 class="h1">DANH SÁCH ĐƠN HÀNG</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Khách Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Số Điện Thoại</th>
                        <th>Trạng Thái</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($showdonhang) {
                        $i = 1;
                        while ($row = $showdonhang->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $i++ . '</td>';
                            echo '<td>' . $row['bill_name'] . '</td>';
                            echo '<td>' . $row['ngaydathang'] . '</td>';
                            echo '<td>' . $row['tel'] . '</td>';
                            echo '<td>' . $row['trangthai'] . '</td>';
                            echo '<td>';
                            echo '<button class="btn btn-success" data-toggle="collapse" data-target="#chiTietCollapse' . $row['id_bill'] . '"data-toggle="tooltip" title="chi tiết">Chi Tiết</button>';
                            echo '<a href="index.php?act=suatt&cart_bill=' . $row['id_bill'] . '" class="btn btn-success"><i class="fa-solid fa-pen" data-toggle="tooltip" title="cập nhật trạng thái"></i></a>';

                            echo '<a onclick="return confirm(\'bạn có muốn xóa\')" href="index.php?act=xoatt&id_bill=' . $row['id_bill'] . '" class="btn btn-danger"data-toggle="tooltip" title="Xóa"><i class="fa-solid fa-trash"></i></a>';
                            echo '</td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td colspan="6">'; // Adjust colspan to cover all 6 columns
                            echo '<div id="chiTietCollapse' . $row['id_bill'] . '" class="panel-collapse collapse fade">';
                            echo '<div class="panel panel-default">';
                            echo '<div class="panel-heading" style="background-color: #eeeeeea8;">Chi Tiết Đơn Hàng #' . $row['id_bill'] . '</div>';
                            echo '<div class="panel-body">';

                            $cartId = $row['id_bill'];
                            echo $cartId;
                            $hoadon = $cart->hoadon($cartId);
                            $totalAmount = 0; 
                            while ($productRow = $hoadon->fetch_assoc()) {
                                echo '<div class="row">';
                                echo '<div class="col-md-3">';
                                echo '<img src="/admin/upload/' . $productRow['images'] . '" width="90" style="max-width: 100%;">';
                                echo '</div>';
                                echo '<div class="col-md-6">';
                                echo '<span class="font-weight-bold">' . $productRow['pro_name'] . '</span>';
                                echo '<div class="product-qty d-flex flex-column">';
                                echo '<span class="d-block" style="font-size: 12px; color: gray;">Số Lượng:' . $productRow['soluong'] . ';</span>';
                                echo '<span style="font-size: 12px; color: gray;">Màu:' . $productRow['color'] . '</span>';
                                echo '</div>';
                                echo '<div class="font-weight-bold" style="font-size: 12px;">' . number_format($productRow['dongia']) . ' VNĐ</div>';
                                echo '</div>';
                                echo '<div class="col-md-3 text-left">';
                                echo '</div>';
                                echo '</div>';
                                $totalAmount += $productRow['thanhtien'];
                            }
                            echo '<div class="font-weight-bold" style="font-size: 14px;">Tổng Thành Tiền: ' . number_format($totalAmount) . ' VNĐ</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>

</html>