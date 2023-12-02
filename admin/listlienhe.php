<?php
include "header.php";
include "slilde.php";
include "class/lienhe_class.php";
?>
<?php
$lienhe = new LienHe();
$showdm = $lienhe->showlh();
?>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
            <h1>DANH SÁCH Liên Hệ</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Nội Dung</th>
                    
                    
                </tr>
                </thead>
                <?php
                if($showdm){
                    while($row = $showdm->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['lienhe_id']?></td>
                    <td><?php echo $row['bl_name']?></td>
                    <td><?php echo $row['sodienthoai']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['noidungbinhluan']?></td>
                    <td><a href="deletelh.php?lienhe_id=<?php echo $row['lienhe_id']?>" class="btn btn-success">XÓA</a>
                    
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
            </table>
            </div>
         </div>
    </div>
</section>
</body>
</html>