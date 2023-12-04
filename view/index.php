<?php
session_start();
ob_start();
include "model/addcart.php";
include "model/sanpham.php";
include "model/user.php";
include "header.php";
$user = new user_client();
$cart = new cart();
$product = new product();
$trangthai = new trangthai();
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


                $id_bill = taogiohang($bill_name, $bill_address, $tel, $email, $total, $pttt, $ngaydathang);

                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    $pro_name = $_SESSION['giohang'][$i][1];
                    $images = $_SESSION['giohang'][$i][0];
                    $dongia = $_SESSION['giohang'][$i][2];
                    $soluong = $_SESSION['giohang'][$i][4];
                    $color = $_SESSION['giohang'][$i][3];
                    $trangthai_id = "1";
                    $thanhtien = $dongia * $soluong;
                    taodonhang($pro_name, $images, $dongia, $soluong, $thanhtien, $color, $id_bill, $trangthai_id);
                }


            }
            unset($_SESSION['giohang']);



            header("location:index.php?act=trangthaii");
            break;
        case "showdon":
            $showdonhang = $cart->showdonhang();
            $trangthai = $trangthai->trangthai();
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
        case "trangthai":
            $trangthai = $trangthai->sptrangthai();

            include "trangthai.php";
            break;
        case "showtrangthai":
            $trangthai = $trangthai->sptrangthai();

            include "trangthai.php";
            break;
            break;
        case "trangthaii":

            $trangthai = $trangthai->trangthai();
            include "danhmuctt.php";
            break;
        case "trangchu":
            $product = $product->top10();
            include "trangchu.php";
            break;

        case "login":
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if ($user->login($email, $pass)) {
                $user_info = $user->getUserByEmail($email)->fetch_assoc();
                $_SESSION['user_email'] = $email;
                $_SESSION['user_id'] = $user_info['user_id'];
                $_SESSION['role'] = $user_info['role_id'];
                $_SESSION['userr'] = $user_info;
                $redirect = ($user_info['role_id'] == 1) ? "../admin/" : "index.php?act=trangchu";
                header("location: $redirect");
                exit();
            }

            include "login.php";
            break;


        default:
            include "";
            break;
    }
}
?>