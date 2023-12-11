<?php
session_start();
ob_start();
include "model/addcart.php";
include "model/sanpham.php";
include "model/user.php";
include "header.php";
$user = new user_client();
$user_cmt = new user();
$cart = new cart();
$product = new product();
$trangthai = new trangthai();
$cartegory = new category();
$lienhe =new lienhe();
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "taogio":
            if (!empty($_POST)) {
                $product_id = $_POST['product_id'];
                $quantity = $_POST['soluong'];
        
                if (isset($_SESSION['giohang'][$product_id])) {
                    $_SESSION['giohang'][$product_id]['soluong'] += $quantity;
                    $_SESSION['giohang'][$product_id]['thanhtien'] = $_SESSION['giohang'][$product_id]['soluong'] * $_SESSION['giohang'][$product_id]['dongia'];
                } else {
                    $_SESSION['giohang'][$product_id] = [
                        'pro_name' => $_POST['product_name'],
                        'images' => $_POST['images'],
                        'dongia' => $_POST['product_gia'],
                        'color' => $_POST['color'],
                        'soluong' => $quantity,
                        'thanhtien' => $quantity * $_POST['product_gia']
                    ];
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
                        $sum += $item['dongia'] * $item['soluong'];
                    }
                    
                    $bill_name = $_POST['bill_name'];
                    $bill_address = $_POST['bill_address'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $ngaydathang = date('d-m-y h:i:s');
                    $total = $sum;
                    $pttt = $_POST['pttt'];
            
                    if (isset($_SESSION['user_id'])) {
                        $id_bill = taogiohang($bill_name, $_SESSION['user_id'], $bill_address, $tel, $email, $total, $pttt, $ngaydathang,'null');
                        foreach ($_SESSION['giohang'] as $product_id => $item) {
                            $pro_name = $item['pro_name'];
                            $images = $item['images'];
                            $dongia = $item['dongia'];
                            $soluong = $item['soluong'];
                            $color = $item['color'];
                            $thanhtien = $dongia * $soluong;
            
                            taodonhang($pro_name, $images, $dongia, $soluong, $thanhtien, $color, $id_bill);
                        }
                        unset($_SESSION['giohang']);
                    } 
                    else { 
                        $giohang = $_SESSION['giohang'];
                        $session_key=uniqid();
                        $id_bill = taogiohang($bill_name, 0, $bill_address, $tel, $email, $total, $pttt, $ngaydathang,$session_key);
                        $_SESSION['session_orders'] = array(
                            'session_key'=>$session_key,
                            'id_bill'=> $id_bill,
                            'bill_name' => $bill_name,
                            'bill_address' => $bill_address,
                            'tel' => $tel,
                            'email' => $email,
                            'total' => $total,
                            'pttt' => $pttt,
                            'ngaydathang' => $ngaydathang,
                            'trangthai'=>'Chờ Xác Nhận',
                            'items' => $giohang
                        );
                        foreach ($giohang as $item) {
                            taodonhang(
                                $item['pro_name'],
                                $item['images'],
                                $item['dongia'],
                                $item['soluong'],
                                $item['thanhtien'],
                                $item['color'],
                                $id_bill
                            );
                        }
                        unset($_SESSION['giohang']);
                    }
            
                }
                
            
                header("location:index.php?act=camon");
                break;
            

        case "lienhe":
            if (isset($_POST['submit'])) {
                $bl_name = $_POST['bl_name'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $noidungbinhluan = $_POST['noidungbinhluan'];
                $lienhe = $lienhe->insertlh($bl_name, $sodienthoai, $email, $noidungbinhluan);
                echo '<script>window.location.href = "index.php?act=lienhe";</script>';
                exit();
            }

            include "lienhe.php";
            break;
            case "showdon":
                if (isset($_SESSION["user_email"])) {
                    $userinfor = $user->getUserByEmail($_SESSION["user_email"])->fetch_assoc();
                    $showdonhang = $cart->showdonhangUser($userinfor['user_id']);
                } elseif (isset($_SESSION['session_orders'])) {
                    $showdonhang = $cart->showdonhangUserBySessionkey($_SESSION['session_orders']['session_key']);;
                } else {
                    $showdonhang = array();
                }
            
                include "dsdonhang.php";
                break;
            
        case "chitietdonhang":
            if (isset($_SESSION['user_id'])) {
                $id_bill = $_GET['id'];
                $chitietdonhang = $cart->hoadon($id_bill);
            } else {
                $id_bill = $_GET['id'];
                $chitietdonhang = isset($_SESSION['session_orders']) ? $_SESSION['session_orders']['items'] : null;
            }
            
            include "chitietdonhang.php";
            break;
        case "huydonhang":
            $id_bill = $_GET['id_donhang'];
            $cart->deletedonhang($id_bill);
            break;

        case "chitiet":
            $id = $_GET["product_id"];
            $product->update_luotxem($id);
            $sanphamchitiet = $product->get_product($id)->fetch_assoc();
            $category = $cartegory->get_category($sanphamchitiet['cartegory_id']);
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
            } else {
                $_SESSION['login_error'] = "Thông tin đăng nhập không chính xác. Vui lòng thử lại.";
                header("location: login.php");
            }
            break;


        case "thongtincuatoi":

            $userinfor = $user->getUserByEmail($_SESSION['user_email'])->fetch_assoc();
            if (isset($_POST['logout'])) {
                session_unset();
                session_destroy();
                header("Location: index.php?act=trangchu");
                exit();
            }
            include "profile.php";
            break;
        default:
            include "";
            break;
        case "changepassword":
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user_id = $_SESSION['user_id'];
                $oldPassword = $_POST['old_password'];
                $newPassword = $_POST['new_password'];
                $confirmPassword = $_POST['confirm_password'];

                if ($user->check_old_pass($user_id, $oldPassword) == false) {
                    echo '<script>toastr.error("Mật khẩu cũ không đúng");</script>';
                } else {
                    $user->update_pasword($user_id, $newPassword);
                    echo '<script>toastr.success("Đã cập nhật mật khẩu thành công!");</script>';
                }
            }
            include "changepassword.php";
            break;
    }
}
include "footer.php";
