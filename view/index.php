<?php
session_start();
ob_start();
include "model/addcart.php";
include "model/sanpham.php";
include "header.php";

$cart = new cart();

if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "taogio":
            if (!isset($_SESSION['giohang']))
                $_SESSION['giohang'] = [];


            //lay du lieu form
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {

                $images = $_POST['images'];
                $product_name = $_POST['product_name'];
                $product_gia = $_POST['product_gia'];
                $color = $_POST['color'];
                $soluong = $_POST['soluong'];
                //ktra sản phẩm có trong giỏ hàng hay k
                $fl = 0;
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    if ($_SESSION['giohang'][$i][1] == $product_name) {
                        $fl = 1;
                        $integr = $soluong;
                        $soluongnew = intval($soluong) + intval($_SESSION['giohang'][$i][4]);
                        $_SESSION['giohang'][$i][4] = $soluongnew;
                        break;
                    }
                }
                if ($fl == 0) {
                    //them moi
                    $sp = [$images, $product_name, $product_gia, $color, $soluong];
                    $_SESSION['giohang'][] = $sp;
                    header("location:index.php?act=taogio");
                }
            }

            include "cart.php";
            break;
        case "mua":


            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                $bill_name = $_POST['bill_name'];
                $bill_address = $_POST['bill_address'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $ngaydathang = date('d-m-y h:i:s');
                $total = tongdonhang();
                $pttt = $_POST['pttt'];
                $trangthai = "chờ xác nhận";

                $id_bill = taogiohang($bill_name, $bill_address, $tel, $email, $total, $pttt, $ngaydathang, $trangthai);

                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    $pro_name = $_SESSION['giohang'][$i][1];
                    $images = $_SESSION['giohang'][$i][0];
                    $dongia = $_SESSION['giohang'][$i][2];
                    $soluong = $_SESSION['giohang'][$i][4];
                    $color = $_SESSION['giohang'][$i][3];
                    $thanhtien = $dongia * $soluong;
                    taodonhang($pro_name, $images, $dongia, $soluong, $thanhtien, $color, $id_bill);
                }


            }
            unset($_SESSION['giohang']);



            header("location:index.php?act=taogio");
            break;
        case "showdon":
            $showdonhang = $cart->showdonhang();
            include "dsdonhang.php";
            break;
        case "chitiet":
            $id = $_GET["product_id"];

            $sanpham = new product();
            $sanphamchitiet = $sanpham->get_product($id)->fetch_assoc();
            $danhmuc = new category();
            $category = $danhmuc->get_category($sanphamchitiet['cartegory_id']);
            echo '<script>';
            echo 'console.log(' . json_encode($sanphamchitiet) . ');';
            echo 'console.log(' . json_encode($category) . ');';
            echo '</script>';
            $product = new product();
            $splienquan = $product->splienquan();
        
            include "sanphamchitiet.php";
            break;





        default:
            include "";
            break;
    }
}
?>