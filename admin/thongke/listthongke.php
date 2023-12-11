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
                    if ($product) {

                        while ($row = $product->fetch_assoc()) {
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
                    if ($cartt) {

                        while ($row = $cartt->fetch_assoc()) {
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

    </div>
    <?php
    $labels = [];
    $data = [];
    if ($cart) {
        while ($row = $cart->fetch_assoc()) {
            $labels[] = $row['product_name'];
            $data[] = $row['luotxem'];
        }
    }
    ?>
    <div id="pie_chart" style="width:100%; max-width:600px; height:500px;margin:auto"></div>
</div>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        let labels = <?php echo json_encode($labels); ?>;
        let data = <?php echo json_encode($data); ?>;
        const chartData = [
            ['tên', 'Lượt Xem']
        ];
        console.log(chartData)
        for (var i = 0; i < data.length; i++) {
            chartData.push([labels[i], parseInt(data[i])]);
        }
        console.log(chartData)
        const dataTable = google.visualization.arrayToDataTable(chartData)
        const options = {
            title: 'Thống Kê Sản Phẩm Theo Lượt Xem',
            is3D: true
        };
        const chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(dataTable, options);
    }
</script>


</body>

</html>