<style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: #333;
        font-family: Arial, sans-serif;
        font-size: 14px;
        text-align: left;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    table th {
        background-color: gray;
        color: #fff;
        font-weight: bold;
        padding: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-top: 1px solid #fff;
        border-bottom: 1px solid gray;
    }

    table tr:nth-child(even) td {
        background-color: #f2f2f2;
    }

    table tr:hover td {
        background-color: gray;
    }

    table td {
        background-color: #fff;
        padding: 10px;
        border-bottom: 1px solid #ccc;
        font-weight: bold;
    }

    .a {
        padding-top: 100px;
    }

    .thanh-toan {
        margin-top: 10px;
        width: 150px;
        height: 35px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
        margin-left: 20px;
    }

    .thanh-toan:hover {
        background-color: black;
        color: white;
    }

    h1 {
        text-align: center;
        align-items: center;
        font-size: 25px;
        color: #BF8A49;
    }
</style>
<div class="a">
    <h1>CHI TIẾT ĐƠN HÀNG #<?php echo $id_bill ?></h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh Sản Phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Màu Sắc</th>
            <th>Thành Tiền</th>
        </tr>

        <?php
        if (!isset($_SESSION['user_id'])) {
            $i = 1;
            foreach ($chitietdonhang as $productRow) {
                echo '<tr>
        <td>' . $i++ . '</td>
        <td>' . $productRow['pro_name'] . '</td>
        <td><img src="/admin/upload/' . $productRow['images'] . '" width="90" style="max-width: 100%;"></td>
        <td>' . number_format($productRow['dongia']) . ' VNĐ</td>
        <td>' . $productRow['soluong'] . '</td>
        <td>' . $productRow['color'] . '</td>
        <td>' . number_format($productRow['thanhtien']) . ' VNĐ</td>
    </tr>';
            }
        }
        else{
            $i = 1;
            while ($productRow = $chitietdonhang->fetch_assoc()) {
                echo '<tr>
        <td>' . $i++ . '</td>
        <td>' . $productRow['pro_name'] . '</td>
        <td><img src="/admin/upload/' . $productRow['images'] . '" width="90" style="max-width: 100%;"></td>
        <td>' . number_format($productRow['dongia']) . ' VNĐ</td>
        <td>' . $productRow['soluong'] . '</td>
        <td>' . $productRow['color'] . '</td>
        <td>' . number_format($productRow['thanhtien']) . ' VNĐ</td>
    </tr>';
            }
        }
        ?>



    </table>

</div>