
<div class="admin-content-right">
        <div class="admin-content-right-product_add">
           <h1>THÊM SẢN PHẨM</h1>
           <form action="" method="POST" enctype="multipart/form-data" >
            
               <label for="">nhập tên sản phẩm <span style="color: red;">*</span></label>
               <input required type="text" name="product_name" value="<?php echo $result['product_name'] ?>">
               
               <label for="">nhập giá sản phẩm <span style="color: red;">*</span></label>
               <input required type="text" name="product_gia" value="<?php echo $result['product_gia'] ?>">
               <label for="">mô tả <span style="color: red;">*</span></label><br>
               <textarea name="mota" id="" cols="30" rows="10" value="<?php echo $result['product_mota'] ?>"></textarea><br>
               
               <label for="">nhập số lượng <span style="color: red;">*</span></label>
               <input required type="text" name="soluong" value="<?php echo $result['soluong'] ?>">
               <label for="">nhập mã sản phẩm <span style="color: red;">*</span></label>
               <input required type="text" name="masp" value="<?php echo $result['masp'] ?>">
               <label for="">nhập màu sắc <span style="color: red;">*</span></label>
               <input required type="text" name="color" value="<?php echo $result['color'] ?>">
               <button type="submit" name="submit" class="btn btn-danger">thêm</button>
           </form>
        </div>
   </div>