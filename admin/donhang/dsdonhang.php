<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
            <h1 class="h1">DANH SÁCH ĐƠN HÀNG</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                
                    <th>IMAGE</th>
                    <th>TỔNG TIỀN</th>
                    <th>NGÀY ĐẶT</th>
                    <th>TRẠNG THÁI</th>
                    <th>TÙY CHỈNH</th>
                    
                </tr>
                <tr>
                <tr>
                <?php
      if ($showdonhang) {
        $i=1;
      while ($row = $showdonhang->fetch_assoc()) {
        ?>
        <td><?php echo $i++ ?></td>
       
        <td><?php echo $row['pro_name']?></td>
        <td><img src="../admin/upload/<?php echo $row['images'] ?>" width="100px"></td>
        <td><?php echo number_format($row['thanhtien']),'vnd'?></td>
        <td><?php echo $row['ngaydathang']?></td>
        <td><?php echo $row['trangthai_id']?></td>
      
       
    
    
       
        
        
        <td><a href="index.php?act=suatt&id_bill=<?php echo $row['id_bill']?>" class="btn btn-success" >CẬP NHẬT</a><a href="index.php?act=xoatt&id_bill=<?php echo $row['id_bill']?>" class="btn btn-danger" >xóa</a></td>

        
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
</section>
</body>
</html>