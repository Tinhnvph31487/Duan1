<?php
include"../model/pdo.php";
include"../model/danhmuc.php";
include"../model/Sanpham.php";
include"../model/taikhoan.php";
include"../model/donhang.php";
include"view/header.php";
include"view/Giua.php";
include"view/footer.php";
if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'tlphim':
            //Kiểm tra người dùng có click vào add hay không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="bạn đã nhập thành công";
            }
            include"admin/danhmuc/add.php";
            break;
        case 'listtl':
            $listdanhmuc=loadall_danhmuc();

            include"admin/danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
               
            }
                
            $listdanhmuc=loadall_danhmuc();
            include"admin/danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sql="select * from danhmuc where id=".$_GET['id'];
            $dm=loadone_danhmuc($_GET['id']);
            }
            
            include"admin/danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $iddm=$_POST['id'];
                update_danhmuc($iddm,$tenloai);
                $thongbao="bạn đã cập nhập thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include"admin/danhmuc/list.php";
            break;

                    case 'addsp':
                        //Kiểm tra người dùng có click vào add hay không
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir="../upload/";
                            $target_file=$target_dir.basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                                // echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))."has been upload.";
                            }else{
                                // echo"Lỗi file khong thể upload lên";
                            }
                            insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                            $thongbao="bạn đã nhập thành công";
                        }
                        $listdanhmuc=loadall_danhmuc();
                        include"admin/Sanpham/add.php";
                        break;
                    case 'listsp':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw=$_POST['kyw'];
                            $iddm=$_POST['iddm'];

                        }else{
                            $kyw='';
                            $iddm=0;
                        }
                        $listdanhmuc=loadall_danhmuc();
                        $listsanpham=loadall_sanpham($kyw,$iddm);
    
                        include"admin/Sanpham/list.php";
                        break;
                    case 'xoasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $sql="delete from sanpham where id=".$_GET['id'];
                            pdo_execute($sql);
                        }
                        $listsanpham=loadall_sanpham("",0);
                        include"admin/Sanpham/list.php";
                        break;
                    case 'suasp':
                        $idSP = $_GET['id'];
                        
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $sql="select * from sanpham where id=".$_GET['id'];
                        $sp=loadone_sanpham($_GET['id']);
                        }
                        $listdanhmuc=loadall_danhmuc();
                        include"admin/Sanpham/update.php";
                        
                        break;
                    case 'updatesp':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $idSP=$_POST['id'];
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir="../upload/";
                            $target_file=$target_dir . basename($_FILES["hinh"]["name"]);

                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                                // echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))."has been upload.";
                            }else{
                                // echo"Lỗi file khong thể upload lên";
                            }
                            update_sanpham($idSP,$iddm,$tensp,$giasp,$hinh,$mota);
                            $thongbao="bạn đã cập nhập thành công";
                        }
                        $listdanhmuc=loadall_danhmuc();
                        $listsanpham=loadall_sanpham("",0);
                        include"admin/Sanpham/list.php";
                        break;
                            case 'dskh':
                                $listtaikhoan=loadall_taikhoan();
                                include"taikhoan/taikhoan.php";
                                break;
                                case 'listgh':
                                    $listgiohang=loadall_giohang();
                                    include"admin/qlygiohang/list.php";
                                    break;
            }
            
        }
        
    

?>