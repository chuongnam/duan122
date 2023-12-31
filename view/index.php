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
$userr = new userr();
$lienhe = new lienhe();
$thongbao;
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "taogio":
            // if (!empty($_POST)) {
            //     $_SESSION['giohang'][$_POST['product_id']] = [
            //         'product_name' => $_POST['product_name'],
            //         'images' => $_POST['images'],
            //         'product_gia' => $_POST['product_gia'],
            //         'color' => $_POST['color'],
            //         'soluong' => $_POST['soluong'],
            //     ];
            if (!empty($_POST)) {
                $product_id = $_POST['product_id'];

                if (isset($_SESSION['giohang'][$product_id])) {
                    $_SESSION['giohang'][$product_id]['soluong'] += $_POST['soluong'];
                } else {
                    $_SESSION['giohang'][$product_id] = ['product_name' => $_POST['product_name'], 'images' => $_POST['images'], 'product_gia' => $_POST['product_gia'], 'color' => $_POST['color'], 'soluong' => $_POST['soluong'],];
                }
                echo '<script>window.location.href = "index.php?act=taogio";</script>';
                exit();
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
                    $trangthai_id = 1;
                    $thanhtien = $dongia * $soluong;
                    taodonhang($pro_name, $images, $dongia, $soluong, $thanhtien, $color, $id_bill, $trangthai_id);
                }




            }
            unset($_SESSION['giohang']);



            header("location: camon.php");
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
            case "lienhe":
                if(isset($_POST['submit'])){
                    $bl_name = $_POST['bl_name'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $email=$_POST['email'];
                    $noidungbinhluan = $_POST['noidungbinhluan'];
                    $lienhe=$lienhe->insertlh($bl_name,$sodienthoai,$email,$noidungbinhluan);
                    echo '<script>window.location.href = "index.php?act=lienhe";</script>';
                    exit();
                }
                
                
                include "lienhe.php";
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
        case "dangky":
            if (isset($_POST["btn_dangky"])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $username = $_POST['user_name'];
                $role_id = "2";
                $dangky = $userr->insert_user($username, $email, $pass, $role_id);
                if ($dangky) {
                  $error['thongbao'];
                } else {    
                  
                }
               
            }
           

            include "dangky.php";
            break;
        case "quenmk":
            if (isset($_POST["quenmk"]) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $check = $user->checkemail($email);
                if (is_array($check)) {
                    $thongbao = "mật khẩu của bạn là:" . $check['pass'];
                } else {
                    $thongbao = "email không tồn tại";
                }
            }

            include "quenmk.php";
            break;

        default:
            include "";
            break;
    }
}
?>
