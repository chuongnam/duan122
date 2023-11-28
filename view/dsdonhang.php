<?php
include "header.php";
include "model/sanpham.php";
?>
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
    .a{
        padding-top: 100px;
    }
    .thanh-toan{
        margin-top: 10px;
        width: 150px;
        height: 35px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
    }
   .thanh-toan:hover{
    background-color: black;
    color: white;
   }
   h1{
    text-align: center;
    align-items: center;
    font-size: 25px;
    color: #BF8A49;
   }
</style>
<?php


$cart = new cart();
$showdonhang = $cart->showdonhang();
?>

<div class="a">
<table>
    <h1>ĐƠN HÀNG CỦA BẠN</h1>
    <tr>
        <th>STT</th>
        <th>MÃ ĐƠN HÀNG</th>
        <th>TÊN SẢN PHÂM</th>
        <th>IMAGES</th>
    
        <th>TÊN KHÁCH HÀNG</th>
        <th>NGÀY ĐẶT HÀNG</th>
        <th>SỐ LƯỢNG</th>
       
        <th>PHƯƠNG THỨC THANH TOÁN</th>
        <th>MÀU</th>
        <th>THÀNH TIỀN</th>
       

    </tr>
    <tr>
    <?php
      if ($showdonhang) {
        $i=1;
      while ($row = $showdonhang->fetch_assoc()) {
        ?>
        <td><?php echo $i++ ?></td>
        <td><?php echo $row['id_bill']?></td>
        <td><?php echo $row['pro_name']?></td>
        <td><img src="../admin/upload/<?php echo $row['images'] ?>" width="100px"></td>
       
        <td><?php echo $row['bill_name']?></td>
        <td><?php echo $row['ngaydathang']?></td>
        <td><?php echo $row['soluong']?></td>
    
        <td><?php echo $row['pttt']?></td>
        <td><?php echo $row['color']?></td>
        <td><?php echo number_format($row['thanhtien']),'vnd'?></td>
        
        

        
    </tr>
    <?php
                    }
                }
                ?>
                <a href="cart.php" class="thanh-toan">quay lại giỏ hàng</a>
</table>
</div>

<?php
include "footer.php";
?>