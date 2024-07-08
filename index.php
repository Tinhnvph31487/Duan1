<?php
ob_start();
session_start();
include"model/pdo.php";
include"model/danhmuc.php";
include"model/Sanpham.php";
include"model/taikhoan.php";
include"model/donhang.php";

include"view/khonglam.php";
// include"view/cart/viewcart.php";

if (!isset($_SESSION['mycart']) || !is_array($_SESSION['mycart'])) {
    // Nếu không phải, khởi tạo nó là một mảng rỗng
    $_SESSION['mycart'] = array();
    # code...
}

$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
include"view/header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                $onesp=loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                
                include"view/chitietsp.php";
            }else{
                include"view/home.php";
            }
            
            break;
            case 'sanpham':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != 0)) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include 'view/sanpham.php';
                break;
            case 'dangky':
                if (isset($_POST['dangky'])) {
                    // var_dump($_POST);die;
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    insert_taikhoan($user,$pass,$email);
                    $thongbao="Bạn đã đăng kí tài khoản thành công. Vui lòng đăng nhập để thực hiện chức năng đặt hàng. ";
                }
                include 'view/taikhoan/dangky.php';
                break;
                case 'dangnhap':
                    if (isset($_POST['dangnhap'])) {
                        // var_dump($_POST);die;
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                           header('location: index.php');
                           die;
                        }else{
                            $thongbao="Tài khoản hoặc mặt khẩu không chính xác.Bạn đăng kí để có thể đăng nhập ";
                            die;
                        }
                    }
                    include 'view/taikhoan/dangky.php';
            break;
            
            case 'edit_taikhoan':
                if (isset($_POST['capnhat'])) {
                        // var_dump($_POST);die;
                    
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];

                    update_capnhat_tk($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location: index.php?act=edit_taikhoan');
                   
                }
        include 'view/taikhoan/edit_taikhoan.php';
        break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
            case 'addtocart':
                if (isset($_POST['addtocart'])&&($_POST['addtocart'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    if(isset($_POST['soluong'])&&($_POST['soluong']>0)){
                        $soluong=$_POST['soluong'];
                    }else{
                        $soluong=1;
                    }
                    $fg=0;
                    $i=0;
                    //Kiểm tra sản phẩm có tồn tại hay chưa
                    //Nếu có chỉ cần cập nhật lại số lượng
                    foreach ($_SESSION['mycart'] as $item) {
                        if ($item[1]===$name) {
                            $slnew=$soluong+$item[4];
                            $_SESSION['mycart'][$i][4]=$slnew;
                            $fg=1;
                            break;
                        }
                        $i++;
                        # code...
                    }
                    //Còn ngược lại add mới sp vào giỏ hàng

                    //Khởi tạo một mảng con trước khi đưa vào giỏ hàng 
                    if($fg==0){

                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    // var_dump($spadd);die;   
                    array_push($_SESSION['mycart'],$spadd);
                }
                    
                }

                include 'view/cart/viewcart.php';
                break;
                case 'delcart':
                    if (isset($_GET['idcart'])) {
                        unset($_SESSION['mycart'][$_GET['idcart']]);
                    //    array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                    }else{
                        $_SESSION['mycart']=[];
                    }
                        header('Location: index.php?act=addtocart');
                    // include 'view/cart/viewcart.php';
                    break;
                    case 'thanhtoan':
                        if ((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                            //Lấy dữ liệu
                            $tongdonhang=$_POST['tongdonhang'];
                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $email=$_POST['email'];
                            $ngaydathang=$_POST['ngaydathang'];
                            $pttt=$_POST['pttt'];
                            $madh="MVDGIAY".rand(0,99999999);
                            //Tạo đươn hàng 
                            // Và trả về một id đơn hàng
                            //$spadd=[$id,$name,$img,$price,$soluong,$ttien];
                            $iddh=taodonhang($madh, $tongdonhang, $pttt, $name, $address, $tel, $email,$ngaydathang);
                            if (isset($_SESSION['mycart']) && (count($_SESSION['mycart'])>0)) {
                                foreach ($_SESSION['mycart'] as $item) {
                                    adtocart($item[0],$item[1],$item[2],$item[3],$item[4],$iddh);
                                }
                                # code...
                            }

                        }
                        include 'view/donhang.php';
                        break;

                           
                            case 'ctdonhang':
                        
                        include 'view/ctdonhang.php';
                        break;
           
        default:
           include"view/home.php";
            break;
     }

}else{
    include"view/home.php";
}
include"view/footer.php";
