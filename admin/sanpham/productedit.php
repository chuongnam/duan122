<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>CẬP NHẬT THÔNG TIN SẢN PHẨM</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="product_name" class="control-label">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                                <input required type="text" name="product_name" value="<?php echo $result['product_name']; ?>" class="form-control">

                                <label for="cartegory_id">Chọn danh mục <span style="color: red;">*</span></label>
                                <select name="cartegory_id">
                                    <option value="#">--Chọn--</option>
                                    <?php
                                    $showdm = $product->showdm();
                                    if ($showdm) {
                                        while ($result_dm = $showdm->fetch_assoc()) {
                                    ?>
                                            <option value="<?php echo $result_dm['cartegory_id']; ?>" <?php echo ($result_dm['cartegory_id'] == $result['cartegory_id']) ? 'selected' : ''; ?>><?php echo $result_dm['tendanhmuc']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <label for="product_gia">Nhập giá sản phẩm <span style="color: red;">*</span></label>
                                <input required type="text" name="product_gia" value="<?php echo $result['product_gia']; ?>" class="form-control">
                                <label for="mota">Mô tả <span style="color: red;">*</span></label><br>
                                <textarea name="mota" id="mota" cols="30" rows="8" class="form-control"><?php echo $result['product_mota']; ?></textarea>
                                <button type="submit" name="submit" class="btn btn-danger">Cập Nhật</button>
                            </div>
                            <div class="col-md-6">


                                <label for="soluong">Nhập số lượng <span style="color: red;">*</span></label>
                                <input required type="text" name="soluong" value="<?php echo $result['soluong']; ?>" class="form-control">
                                <label for="masp">Nhập mã sản phẩm <span style="color: red;">*</span></label>
                                <input required type="text" name="masp" value="<?php echo $result['masp']; ?>" class="form-control">
                                <label for="color">Nhập màu sắc <span style="color: red;">*</span></label>
                                <input required type="text" name="color" value="<?php echo $result['color']; ?>" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="imagesInput">Ảnh sản phẩm <span style="color: red;">*</span></label> <br>
                        <input required type="file" id="imagesInput" style="display: none;" name="images">
                        <button type="button" class="btn btn-primary" id="insert-img-btn">Chọn ảnh</button> <br> <br>
                        <div id="imagePreview">
                            <?php if (isset($result['images'])) : ?>
                                <img style="width:100%" id="cur_img" src="/admin/upload/<?php echo $result['images']; ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>