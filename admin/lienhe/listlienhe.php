<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
         <h1 class="h1">DANH SÁCH LIÊN HỆ</h1>
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
                if($lienhe){
                    while($row = $lienhe->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['lienhe_id']?></td>
                    <td><?php echo $row['bl_name']?></td>
                    <td><?php echo $row['sodienthoai']?></td>
                    <td><?php echo $row['noidungbinhluan']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><a onclick="return confirm('bạn có muốn xóa')" href="index.php?act=xoalh&lienhe_id=<?php echo $row['lienhe_id']?>" class="btn btn-success">XÓA</a>
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