<?php
include "header.php";
include "slilde.php";
include "class/user_class.php";
?>
<?php
$user = new user();
$showuser = $user->showuser();
?>
<div class="admin-content-right">
         <div class="admin-content-right-cartegory_list">
            <h1>DANH SÁCH DANH MỤC</h1>
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
                    <td><a href="deleteuser.php?user_id=<?php echo $result['user_id']?>" class="btn btn-success">XÓA</a><a class="btn btn-danger" href="useredit.php?user_id=<?php echo $result['user_id']?>">SỬA</a></td>
                    
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