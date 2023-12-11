<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
         <h1 class="h1">DANH SÁCH DANH MỤC</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>DANH MỤC</th>
                    <th>TÙY CHỈNH</th>
                    
                </tr>
                </thead>
                <?php
                if($showdm){
                    while($row = $showdm->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['cartegory_id']?></td>
                    <td><?php echo $row['tendanhmuc']?></td>
                    <td><a onclick="return confirm('bạn có muốn xóa')" href="index.php?act=xoadm&cartegory_id=<?php echo $row['cartegory_id']?>" class="btn btn-success">XÓA</a><a class="btn btn-danger" href="index.php?act=suadm&cartegory_id=<?php echo $row['cartegory_id']?>">SỬA</a></td>
                    
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