<?php
include "header.php";
include "slide.php";
include "model/sanpham.php";
?>
<?php
session_start(); // Bắt đầu hoặc khôi phục session

// Kiểm tra xem session có tồn tại hay không
if(isset($_SESSION['user_email']) && isset($_SESSION['user_id'])) {
    // Lấy giá trị từ session
    $user_email = $_SESSION['user_email'];
    $user_id = $_SESSION['user_id'];

    // Hiển thị thông tin người dùng
    echo "Welcome, $user_email! Your user ID is $user_id.";
} else {
    // Session không tồn tại, có thể đưa người dùng đăng nhập
    echo "Please log in to access this page.";
}
?>

<hr>
<style>
    .content{
        margin-top: 30px;
    }
   .h1{
        align-items: center;
        text-align: center;
    }
    .content-sp{
        
        margin-left: 10px;
        display: flex;
        justify-content: space-between;
        width: 200px;
        
    }
    h1{
        font-size: 20px;
    }
    .content-item{
        margin-left: 10px;
    }
    </style>
    <?php

$product = new product();
$top10 = $product->top10();
?>
<body>
    <div class="content">
    <h1 class="h1"> TOP 10 YÊU THÍCH</h1>
    <div class="content-sp">
    <?php
                if ($top10) {
                    while ($row = $top10->fetch_assoc()) {
                        ?>

    <div class="content-item">
    <img src="../admin/upload/<?php echo $row['images'] ?>" width="200px">
                                <h1>
                                    <?php echo $row['product_name'] ?>
                                </h1>
                                <p>
                                    <?php echo number_format($row['product_gia'])  ?> VNĐ
                                </p>
                                <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>" class="btn-xemthem">xem them</a>
                </div>
                <?php
                    }
                }
                ?>  
                
    </div>
    
</div>
</body>

<?php
include "footer.php";
?>
