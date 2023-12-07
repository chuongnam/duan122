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
$cartegory = new category();
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "taogio":
            if (!empty($_POST)) {
                $_SESSION['giohang'][$_POST['product_id']] = [
                    'product_name' => $_POST['product_name'],
                    'images' => $_POST['images'],
                    'product_gia' => $_POST['product_gia'],
                    'color' => $_POST['color'],
                    'soluong' => $_POST['soluong'],
                ];

            }
            include "cart.php";
            break;
            case "xoasp":
                $product_id = $_GET['product_id'] ?? '';
    
                if (!empty($product_id)) {
                    unset($_SESSION['giohang'][$product_id]);
                }
                header('Location: index.php?act=taogio');
    
                break;
            case "them":
                $product_id = $_GET['product_id'] ?? '';
    
                if (!empty($product_id)) {
                    ++$_SESSION['giohang'][$product_id]['soluong'];
                }
    
                header('Location: index.php?act=taogio');
    
                break;
            case "tru":
                $product_id = $_GET['product_id'] ?? '';
    
                if (!empty($product_id)) {
                    $_SESSION['giohang'][$product_id]['soluong'] = max(1, $_SESSION['giohang'][$product_id]['soluong'] - 1);
                }
    
                header('Location: index.php?act=taogio');
    
                break;
            case "mua":
    
    
                if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                    $sum = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        $sum += $item['product_gia'] * $item['soluong'];
                    }
                    $bill_name = $_POST['bill_name'];
                    $bill_address = $_POST['bill_address'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $ngaydathang = date('d-m-y h:i:s');
                    $total = $sum;
                    $pttt = $_POST['pttt'];
    
    
                    $id_bill = taogiohang($bill_name, $bill_address, $tel, $email, $total, $pttt, $ngaydathang);
    
                    foreach ($_SESSION['giohang'] as $product_id => $item) {
                        $pro_name = $item['product_name'];
                        $images = $item['images'];
                        $dongia = $item['product_gia'];
                        $soluong = $item['soluong'];
                        $color = $item['color'];
                        $trangthai_id =1;
                        $thanhtien = $dongia * $soluong;
                        taodonhang($pro_name, $images, $dongia, $soluong, $thanhtien, $color, $id_bill, $trangthai_id);
                    }
    
    
    
    
                }
                unset($_SESSION['giohang']);
    
    
    
                header("location:index.php?act=camon");
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
            case "camon":
               
    
                include "camon.php";
                break;
            
        case "trangthaii":

            $trangthai = $trangthai->trangthai();
            include "danhmuctt.php";
            break;
        case "trangchu":
            $product = $product->top10();
            include "trangchu.php";
            break;
            case "timkiem":
                if (isset($_GET['name'])) {
                    $name = $_GET['name'];
                    $loadsp = $product->get_productByName($name);
                } else {
                    $loadsp = $product->loadsp();
                }
                $loaddm = $cartegory->loaddm();
                include "cartegory.php";
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
                $redirect = ($user_info['role_id'] == 1) ? "../admin/index.php?act=thongke" : "index.php?act=trangchu";
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