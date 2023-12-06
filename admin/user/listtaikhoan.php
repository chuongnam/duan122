<style>
    .h1{
        text-align: center;
        align-items: center;
        margin-bottom: 20px;
    }
    </style>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
         <h1 class="h1">DANH SÁCH TÀI KHOẢN</h1>
            <div class="table-responsive">   
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    
                    <th>pass</th>
                    <th>email</th>
                    
                </tr>
                </thead>
                <?php
                if($showuser){
                    while($result = $showuser->fetch_assoc()){
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $result['user_id']?></td>
                    <td><?php echo $result['user_name']?></td>
                    <td><?php echo $result['pass']?></td>
                    <td><?php echo $result['email']?></td>
                    <td><a onclick="return confirm('bạn có muốn xóa')" href="index.php?act=xoatk&user_id=<?php echo $result['user_id']?>" class="btn btn-success">XÓA</a></td>
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