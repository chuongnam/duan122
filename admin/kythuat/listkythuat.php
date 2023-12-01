
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
            <h1>DANH SÁCH KỸ THUẬT</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>KHUNG SƯỜN</th>
                    <th>YÊN</th>
                    <th>TAY NẮM</th>
                    <th>LỐP</th>
                    <th>XÍCH</th>
                    
                </tr>
                </thead>
                <?php
                if($showkt){
                    while($result = $showkt->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $result['kt_id']?></td>
                    <td><?php echo $result['khungsuon']?></td>
                    <td><?php echo $result['yen']?></td>
                    <td><?php echo $result['taynam']?></td>
                    <td><?php echo $result['lop']?></td>
                    <td><?php echo $result['xich']?></td>
                    <td><a href="index.php?act=xoakt&kt_id=<?php echo $result['kt_id']?>" class="btn btn-success">XÓA</a><a class="btn btn-danger" href="index.php?act=suakt&kt_id=<?php echo $result['kt_id']?>">SỬA</a></td>
                    
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
                <a class="btn btn-success" href="index.php?act=addkt">THÊM</a>
            </table>
            </div>
         </div>
    </div>
</section>
</body>
</html>