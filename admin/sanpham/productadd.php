<div class="admin-content-right">
  <div class="admin-content-right-product_add">
    <h1>THÊM SẢN PHẨM</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="container">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
            <label for="product_name" class="control-label">Nhập tên sản phẩm <span style="color: red;">*</span></label>
          <input required type="text" name="product_name" class="form-control">

          <label for="cartegory_id">Chọn danh mục <span style="color: red;">*</span></label>
          <select name="cartegory_id">
            <option value="#">--Chọn--</option>
            <?php
            $showdm = $product->showdm();
            if ($showdm) {
              while ($result = $showdm->fetch_assoc()) {
            ?>
                <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['tendanhmuc'] ?></option>
            <?php
              }
            }
            ?>
          </select>
          <label for="product_gia">Nhập giá sản phẩm <span style="color: red;">*</span></label>
          <input required type="text" name="product_gia" class="form-control">
          <label for="mota">Mô tả <span style="color: red;">*</span></label><br>
          <textarea name="mota" id="mota" cols="30" rows="8" class="form-control"></textarea>
          <button type="submit" name="submit" class="btn btn-danger">Thêm</button>
            </div>
            <div class="col-md-6">


          <label for="soluong">Nhập số lượng <span style="color: red;">*</span></label>
          <input required type="text" name="soluong" class="form-control">
          <label for="masp">Nhập mã sản phẩm <span style="color: red;">*</span></label>
          <input required type="text" name="masp" class="form-control">
          <label for="color">Nhập màu sắc <span style="color: red;">*</span></label>
          <input required type="text" name="color" class="form-control">
          
            </div>
          </div>
        </div>
        <div class="col-md-6">
        <label for="imagesInput">Ảnh sản phẩm <span style="color: red;">*</span></label> <br>
        <input required type="file" id="imagesInput" style="display: none;" name="images">
          <button type="button" class="btn btn-primary" id="insert-img-btn">Chọn ảnh</button> <br> <br>
          <div id="imagePreview"></div>
        </div>
      </div>
      </div>
    </form>

  </div>
</div>