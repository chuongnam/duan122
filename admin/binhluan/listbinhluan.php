<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
         <h1 class="h1">DANH SÁCH BÌNH LUẬN</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>ID USER</th>
                    <th>SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>NỘI DUNG</th>
                    <th>TÙY CHỈNH</th>

                    
                </tr>
                </thead>
                <?php
                if($binhluan){
                    while($row = $binhluan->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['id_binhluan']?></td>
                    <td><?php echo $row['user_name']?></td>
                    <td><?php echo $row['product_id']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><?php echo $row['noidung']?></td>
                    <td><a onclick="return confirm('bạn có muốn xóa')" href="index.php?act=xoabl&id_binhluan=<?php echo $row['id_binhluan']?>" class="btn btn-success">XÓA</a>
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
                <a class="btn btn-success" href="index.php?act=adddm">THÊM</a>
            </table>
            </div>
         </div>
    </div>
</section>
</body>
</html>