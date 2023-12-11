<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>sửa trạng thái</h1>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Trạng Thái <span style="color: red;">*</span></label>
            <select name="trangthai_id">
                <option value="Chờ Xác Nhận" <?php echo ($row['trangthai'] == 'Chờ Xác Nhận') ? 'selected' : ''; ?>>Chờ Xác Nhận</option>
                <option value="Đang Giao" <?php echo ($row['trangthai'] == 'Đang Giao') ? 'selected' : ''; ?>>Đang Giao</option>
                <option value="Đã Giao" <?php echo ($row['trangthai'] == 'Đã Giao') ? 'selected' : ''; ?>>Đã Giao</option>
                <option value="Đã Hủy" <?php echo ($row['trangthai'] == 'Đã Hủy') ? 'selected' : ''; ?>>Đã Hủy</option>
            </select>

            <button type="submit" name="submit" class="btn btn-danger">sửa</button>
        </form>

    </div>
</div>