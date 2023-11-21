<?php
include "header.php";
include "slilde.php";
include "class/product_class.php";
?>
<?php
$product = new product();
$showsp = $product->showsp();
?>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
            <h1>DANH SÁCH DANH MỤC</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ SẢN PHẨM</th>
                    <th>IMAGE</th>
                    <th>MÔ TẢ</th>
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
                    <td><?php echo $result['product_mota']?></td>
                    <td><?php echo $result['soluong']?></td>
                    <td><?php echo $result['masp']?></td>
                    <td><?php echo $result['color']?></td>
                    <td><?php echo $result['cartegory_id']?></td>
                    <td><a href="deletesanpham.php?product_id=<?php echo $result['product_id']?>" class="btn btn-success">XÓA</a><a class="btn btn-danger" href="productedit.php?product_id=<?php echo $result['product_id']?>">SỬA</a></td>
                    
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
                <a class="btn btn-success" href="productadd.php">THÊM</a>
            </table>
            </div>
         </div>
    </div>
</section>
</body>
</html>