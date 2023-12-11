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
    <table>
        <h1>ĐƠN HÀNG CỦA TÔI</h1>
        <tr>
            <th>STT</th>
            <th>MÃ ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT HÀNG</th>
            <th>PHƯƠNG THỨC THANH TOÁN</th>
            <th>THÀNH TIỀN</th>
            <th>TRẠNG THÁI ĐƠN HÀNG</th>
            <th>action</th>
        </tr>
        <tr>
            <?php
            if ($showdonhang) {
                $i = 1;
                foreach ($showdonhang as $row) {
                    echo '<tr>
            <td>' . $i++ . '</td>
            <td>' . $row['id_bill'] . '</td>
            <td>' . $row['ngaydathang'] . '</td>
            <td>' . $row['pttt'] . '</td>
            <td>' . number_format($row['total']) . 'vnd</td>
            <td>' . $row['trangthai'] . '</td>
            <td>';

                    if ($row['trangthai'] != 'Đang Giao' && $row['trangthai'] != 'Đã Hủy') {
                        echo '<a style="color:green" href="index.php?act=chitietdonhang&id=' . $row['id_bill'] . '">Chi Tiết</a>
                  <a style="color: red" href="#" onclick="confirmCancelOrder(' . $row['id_bill'] . ')">Hủy Đơn</a>';
                    } else {
                        echo '<a style="color:green" href="index.php?act=chitietdonhang&id=' . $row['id_bill'] . '">Chi Tiết</a>';
                    }

                    echo '</td></tr>';
                }
            }
            ?>

    </table>
</div>