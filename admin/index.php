<?php
include "database.php";
include "class/cartegoryadd_class.php";
include "class/product_class.php";
include "class/user_class.php";
include "class/kythuat_class.php";
include "class/donhang_class.php";
include "class/binhluan_class.php";
include "class/lienhe_class.php";
include "header.php";
include "slilde.php";
$cartegory = new Cartegory();
$product = new product();
$binhluan = new binhluan();
$lienhe = new lienhe();
$user = new user();
$cart = new cart();
$cartt = new cartt();

$kythuat = new kythuat;

if(isset($_GET['act'])) {
    switch($_GET['act']) {

        case "adddm":
            if(isset($_POST["submit"])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                $insertlh = $cartegory->insertlh($tendanhmuc);
            }

            include "./danhmuc/cartegoryadd.php";
            break;
        case "showdm":
            $showdm = $cartegory->showdm();

            include "./danhmuc/listdanhmuc.php";
            break;
        case "xoadm":
            if(!isset($_GET["cartegory_id"]) || ($_GET["cartegory_id"]) == null) {
                echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
            } else {
                $cartegory_id = $_GET["cartegory_id"];
            }
            $delete_cartegory = $cartegory->deletedm($cartegory_id);
            include "./danhmuc/listdanhmuc.php";
            break;
        case "suadm":
            if(!isset($_GET["cartegory_id"]) || ($_GET["cartegory_id"]) == null) {
                echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
            } else {
                $cartegory_id = $_GET["cartegory_id"];
            }
            $get_cartegory = $cartegory->get_cartergory($cartegory_id);

            if($get_cartegory) {
                $row = $get_cartegory->fetch_assoc();
            }
            $cartegory = new Cartegory;
            if(isset($_POST["submit"])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                $insertlh = $cartegory->updatedm($cartegory_id, $tendanhmuc);
            }
            include "./danhmuc/cartegoryedit.php";
            break;
        case "addsp":
            if(isset($_POST["submit"])) {

                $insert_product = $product->insertproduct($_POST, $_FILES);

            }

            include "./sanpham/productadd.php";
            break;
        case "suasp":
            if(!isset($_GET["product_id"]) || ($_GET["product_id"]) == null) {
                echo "<scrip>window.location = 'cartegorylist.php'</scrip>";
            } else {
                $product_id = $_GET["product_id"];
            }
            $get_product = $product->get_product($product_id);

            if($get_product) {
                $result = $get_product->fetch_assoc();
            }
            if(isset($_POST["submit"])) {
                $product_name = $_POST['product_name'];
                $product_gia = $_POST['product_gia'];
                $product_mota = $_POST['mota'];
                $soluong = $_POST['soluong'];
                $masp = $_POST['masp'];
                $color = $_POST['color'];
                $insertsp = $product->updatesp($product_name, $product_gia, $product_mota, $soluong, $masp, $color, $product_id);
            }
           
            include "./sanpham/productedit.php";
            break;
        case "showsp":
            $showsp = $product->showsp();

            include "./sanpham/listsanpham.php";
            break;
        case "xoasp":
            if(!isset($_GET["product_id"]) || ($_GET["product_id"]) == null) {
                echo "<scrip>window.location = 'listsanpham.php'</scrip>";
            } else {
                $product_id = $_GET["product_id"];
            }
            $delete_product = $product->deletesp($product_id);
            include "./sanpham/listsanpham.php";
            break;
        case "showtk":
            $showuser = $user->showuser();

            include "./user/listtaikhoan.php";
            break;
        case "xoatk":
            if(!isset($_GET["user_id"]) || ($_GET["user_id"]) == null) {
                echo "<scrip>window.location = 'listtaikhoan.php'</scrip>";
            } else {
                $user_id = $_GET["user_id"];
            }
            $delete_user = $user->deleteuser($user_id);
            include "./user/listtaikhoan.php";
            break;
        case "dsdonhang":

            $showdonhang = $cart->showdonhang();
            include "./donhang/dsdonhang.php";
            break;
        case "addkt":

            if(isset($_POST["submit"])) {

                $insert_kt = $kythuat->insertkt($_POST);
                //  var_dump($_POST,$_FILES);
            }
            include "./kythuat/kythuatadd.php";
            break;
        case "showkt":

            $showkt = $kythuat->showkt();
            include "./kythuat/listkythuat.php";
            break;
        case "showbinhluan":

            $binhluan = $binhluan->showbinhluan();
            include "./binhluan/listbinhluan.php";
            break;
        case "thongke":
            $cartt = $cartt->donhangnew();
            $product = $product->thongke();
            $cart = $cart->xemnhieu();
            include "./thongke/listthongke.php";
            break;
        
        case "showlienhe":

            $lienhe = $lienhe->showlh();
            include "./lienhe/listlienhe.php";
            break;
            case "inbill":

                $cart = $cart->hoadon();
                include "./donhang/inbill.php";
                break;
        case "xoabl":
            if(!isset($_GET["id_binhluan"]) || ($_GET["id_binhluan"]) == null) {

            } else {
                $id_binhluan = $_GET["id_binhluan"];
            }
            $delete_binhluan = $binhluan->deletebl($id_binhluan);
            include "./binhluan/listbinhluan.php";
            break;
        case "xoalh":
            if(!isset($_GET["lienhe_id"]) || ($_GET["lienhe_id"]) == null) {

            } else {
                $lienhe_id = $_GET["lienhe_id"];
            }
            $delete_lienhe = $lienhe->deletelh($lienhe_id);
            include "./lienhe/listlienhe.php";
            break;
        case "xoakt":

            if(!isset($_GET["kt_id"]) || ($_GET["kt_id"]) == null) {
                echo "<scrip>window.location = 'listkyhuat.php'</scrip>";
            } else {
                $kt_id = $_GET["kt_id"];
            }
            $delete_kt = $kythuat->deletekt($kt_id);
            include "./kythuat/listkythuat.php";
            break;
        case "suatt":
            if(!isset($_GET["cart_bill"]) || ($_GET["cart_bill"]) == null) {

            } else {
                $cart_bill = $_GET["cart_bill"];
            }
            $get_donhang = $cartt->get_donhang($cart_bill);

            if($get_donhang) {
                $row = $get_donhang->fetch_assoc();
            }

            if(isset($_POST["submit"])) {
                $trangthai_id = $_POST['trangthai_id'];
                $insertdh = $cartt->updatedh($cart_bill, $trangthai_id);
            }
            include "./donhang/suatt.php";
            break;
        case "xoatt":
            if(!isset($_GET["id_bill"]) || ($_GET["id_bill"]) == null) {

            } else {
                $id_bill = $_GET["id_bill"];
            }
            $delete_donhang = $cartt->deletedonhang($id_bill);
            include "./donhang/dsdonhnag";
            break;






        default:
            include "";
            break;
    }
}
