<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
         <h1 class="h1">DANH SÁCH SẢN PHẨM</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ SẢN PHẨM</th>
                    <th>IMAGE</th>
                 
                    <th>SỐ LƯỢNG</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>MÀU</th>
                    <th>ID DANH MỤC</th>
                    <th>TÙY CHỈNH</th>
                    
                </tr>
                </thead>
                <?php
                if($showsp){
                    while($result = $showsp->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $result['product_id']?></td>
                    <td><?php echo $result['product_name']?></td>
                    <td><?php echo $result['product_gia']?></td>
                    <td><img src="upload/<?php echo $result['images']?>" width="100px"></td>
                  
                    <td><?php echo $result['soluong']?></td>
                    <td><?php echo $result['masp']?></td>
                    <td><?php echo $result['color']?></td>
                    <td><?php echo $result['cartegory_id']?></td>
                    <td><a href="index.php?act=xoasp&product_id=<?php echo $result['product_id']?>" class="btn btn-success">XÓA</a><a class="btn btn-danger" href="index.php?act=suasp&product_id=<?php echo $result['product_id']?>">SỬA</a></td>
                    
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
                <a class="btn btn-success" href="index.php?act=addsp">THÊM</a>
            </table>
            </div>
         </div>
    </div>
</section>
</body>
</html>