<!DOCTYPE html>
<html>
<head>
  <title>Hóa đơn</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #F5F5F5;
    }

    h1 {
      text-align: center;
      color: #333333;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #FFFFFF;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table td, table th {
      padding: 8px;
      border-bottom: 1px solid #E1E1E1;
    }

    table th {
      text-align: left;
      background-color: #F2F2F2;
    }

    .total {
      text-align: right;
      font-weight: bold;
    }

    .footer {
      margin-top: 20px;
      text-align: center;
      color: #666666;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Chi Tiết Đơn Hàng</h1>
    <table>
      <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <th>Tùy Chỉnh</th>
      </tr>
      <?php
      if ($cart) {
      $soluong=0;
        $tong=0;
        $i=1;
      while ($row = $cart->fetch_assoc()) {
        $tong+=$row['thanhtien'];
        $soluong+=$row['soluong'];
        ?>
      <tr>
        <td><?php echo $row['pro_name']?></td>
        <td><?php echo $row['soluong']?></td>
        <td><?php echo number_format($row['dongia'])?> VNĐ</td>
        <td><?php echo number_format($row['thanhtien'])?> VNĐ</td>
        <td><a href="index.php?act=suatt&cart_bill=<?php echo $row['cart_bill']?>" class="btn btn-success" >XÁC NHẬN</a></td>
      </tr>
      <?php
      
    }
}
?>
      
      <td colspan="4" class="total">Số Lượng</td>
        <td><?php echo number_format($soluong)?></td>
      </tr>
      <tr>
      <td colspan="4" class="total">Tổng Tiền</td>
        <td><?php echo number_format($tong)?></td>
      </tr>
        
     
             
             

        
     
    </table>
   
             
    <div class="footer">
     
    </div>
  </div>
</body>
</html>