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
                <th>STT</th>
                    <th>TÊN KHÁCH HÀNG</th>
                   
                 
                    <th>NGÀY ĐẶT</th>
                    <th>SĐT</th>
                        
                    
                    
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
       
       
        <td><?php echo $row['bill_name']?></td>
        

       
        <td><?php echo $row['ngaydathang']?></td>
        <td><?php echo $row['tel']?></td>
       
      
       
    
    
       
        
        
        <td><a href="index.php?act=inbill&id_bill=<?php echo $row['id_bill']?>" class="btn btn-success" >Chi Tiết</a><a onclick="return confirm('bạn có muốn xóa')" href="index.php?act=xoatt&id_bill=<?php echo $row['id_bill']?>" class="btn btn-danger" >xóa</a></td>
       
        
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