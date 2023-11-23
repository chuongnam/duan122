<?php
include "header.php";
include "slilde.php";
include "class/cartegoryadd_class.php";
?>
<?php
$cartegory = new Cartegory();
if (!isset($_GET["cartegory_id"]) || ($_GET["cartegory_id"]) == null) {
    echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
} else {
    $cartegory_id = $_GET["cartegory_id"];
}
$get_cartegory = $cartegory->get_cartergory($cartegory_id);

if ($get_cartegory) {
    $row = $get_cartegory->fetch_assoc();
}

?>

<?php
$cartegory = new Cartegory;
if (isset($_POST["submit"])) {
    $tendanhmuc = $_POST['tendanhmuc'];
    $insertlh = $cartegory->updatedm($cartegory_id, $tendanhmuc);
}

?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegoryadd">
        <h1>SỬA DANH MỤC</h1>
        <form action="" method="POST">
            <input required type="text" name="tendanhmuc" placeholder="nhập danh danh mục"
                value="<?php echo $row['tendanhmuc'] ?>">
            <button type="submit" name="submit">thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>