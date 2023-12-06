

<style>
    .quantity {
        margin-top: 10px;
    }
    .thanh-toan{
        margin-top: 10px;
        width: 150px;
        height: 35px;
        background-color: white;
        border: 2px solid #BF8A49;
        color: #BF8A49;
    }
   .thanh-toan:hover{
    background-color: black;
    color: white;
   }
   .soluongg input{
     margin-top: 10px;
         width: 50px;
   }
   .pttt{
    display: flex;
    margin-bottom: 20px;
    
   }
   .tt{
   margin-left: 15px;
   }
</style>
<section class="product">
    <div class="container">
        <div class="product-top row">

        </div>
        
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="../admin/upload/<?php echo $sanphamchitiet['images']; ?>" alt="Product Image">
                </div>

            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $sanphamchitiet['product_name'] ?></h1>
                    <P><?php echo $sanphamchitiet['masp'] ?></P>
                </div>
                <div class="product-content-right-product-price">
                    <p><?php echo number_format($sanphamchitiet['product_gia'])  ?><sup>VNĐ</sup></p>
                </div>
                

             

                <div class="mota">
                    <h3>MÔ TẢ:</h3>
                    <p><?php echo $sanphamchitiet['product_mota'] ?>
                    </p>
                </div>
                 <!-----form dat hang-->
                <form action="index.php?act=taogio" method="POST">
                
                <p style="font-weight: bold;" class="soluongg">Số Lượng :<input type="number" min="1" value="1" name="soluong"></p> <br>

                <input type="text" name="product_id" value="<?php echo $sanphamchitiet['product_id'] ?>" hidden>
                <input type="text" name="images" value="<?php echo $sanphamchitiet['images'] ?>" hidden>
                <input type="text" name="product_name" value="<?php echo $sanphamchitiet['product_name'] ?>" hidden>
                <input type="text" name="product_gia" value="<?php echo $sanphamchitiet['product_gia'] ?>" hidden>
                <div class="pttt">
                    Màu Sắc:<br>
                    <p><input type="radio" name="color" value="vàng" checked class="tt">Vàng</p>
                    <p><input type="radio" name="color" value="trắng" class="tt">Trắng</p>
                    <p><input type="radio" name="color" value="đen" class="tt">Đen </p>
                 </div>
                
                <input type="submit" value="THÊM GIỎ HÀNG" name="addtocart" class="thanh-toan">
                </form>
                <!-------end-------->
                <div class="product-content-right-product-button">
   
                    <button>
                        <p>TÌM TẠI CỦA HÀNG</p>
                    </button>
                </div>
                <div class="product-content-right-product-icon">
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-phone"></i>
                        <p>hotline</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="fa fa-weixin"></i>
                        <p>commnet</p>

                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="material-icons" style="font-size:36px">drafts</i>
                        <p>mail</p>

                    </div>
                </div>
                <div class="product-content-right-product-QR">
                    <img src="image/prcode.png">
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                $(document).ready(function() {
                $("#binhluan").load("binhluan.php", {
                    product_id: <?=$id?>
                    });
                });
      </script>
      <div id="binhluan">

      </div>

                <div class="product-content-right-bottom-content-big">
                 
                    <div class="product-content-right-bottom-content">
                       

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-----sản phẩm liên quam-->
<section class="product-relate">
    <div class="product-relate-title">
        <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="row product-content">
    <?php
                if ($splienquan) {
                    while ($row = $splienquan->fetch_assoc()) {
                        ?>
    <div class="product-relate-item">
    <img src="../admin/upload/<?php echo $row['images']; ?>">
            <h1><?php echo $row['product_name'] ?></h1>
            <p><?php echo number_format($row['product_gia']),'VNĐ' ?></p>
            <a href="sanphamchitiet.php?product_id=<?php echo $row['product_id'] ?>" class="btn-xemthem">xem them</a>
        </div>
        <?php
                    }
                }
                ?>
        
    </div>
</section>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php
include "footer.php";
?>
