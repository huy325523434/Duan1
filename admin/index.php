<?php 
    include("../model/pdo.php");
    include("../model/danhmuc.php");
    include("../model/sanpham.php");
    include("header.php");
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
    
            case "adddm":
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                    $tenloai = $_POST["tenloai"];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "../admin/danhmuc/add.php";
                break;

            case "listdm" :
                $listdanhmuc = loadall_danhmuc();
                include "../admin/danhmuc/list.php";
                break;
            case "xoadm" :
                if(isset($_GET["id"]) && ($_GET["id"] > 0)){
                    delete_danhmuc($_GET["id"]);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "suadm" :
                if(isset($_GET["id"]) && ($_GET["id"] > 0)){
                    $dm = loadone_danhmuc($_GET["id"]);
                }
                include "danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST["capnhat"]) && ($_POST["capnhat"])){
                    $tenloai = $_POST["tenloai"];
                    $id = $_POST["id"];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
        
                /* CONTROLLER SẢN PHẨM */
                case "listsp" :
                    if(isset($_POST["clickOK"]) && ($_POST["clickOK"])){
                        $keyw = $_POST["keyw"];
                        $iddm = $_POST["iddm"];
                    }else{
                        $keyw = "";
                        $iddm = 0;
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham($keyw, $iddm);
                    include "sanpham/list.php";
                    break;
                case "addsp" :
                    if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                        $iddm = $_POST["iddm"];
                        $tensp = $_POST["tensp"];
                        $giasp = $_POST["giasp"];
                        $mota = $_POST["mota"];
                        $hinh = $_FILES["hinh"]["name"];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            // echo "Bạn đã upload ảnh thành công";
                        }else{ 
                            // echo "Upload ảnh không thành công";
                        }
                        insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                        $thanhcong = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
               
                case "suasp" :
                    if(isset($_GET["idsp"]) && ($_GET["idsp"]>0)){
                        $sanpham = loadone_sanpham($_GET["idsp"]);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case "updatesp" :
                    if(isset($_POST["capnhat"]) && ($_POST["capnhat"])){
                        $iddm = $_POST["id_dm"];
                        $id = $_POST["id"];
                        $tensp = $_POST["tensp"];
                        $giasp = $_POST["giasp"];
                        $mota = $_POST["mota"];
                        $hinh = $_FILES["hinh"]["name"];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            echo "Cập nhật thành công";
                        }else{
                            echo "Lỗi cập nhật";
                        }
                        update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham($keyw = "", $iddm = 0);
                    include "sanpham/list.php";
                    break;
                
                case "xoasp" :
                    if(isset($_GET["idsp"])){
                        hard_delele($_GET["idsp"]);
                    }
                    $listsanpham = loadall_sanpham($keyw = "", $iddm = 0);
                    include "sanpham/list.php";
                    break;
    
            case 'dskh':
                // $listtaikhoan = loadall_taikhoan();
                // include "taikhoan/list.php";
                // break;
    
            case "xoatk":
                // if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //     delete_taikhoan($_GET['id']);
                // }
                // $listtaikhoan = loadall_taikhoan(0);
                // include "taikhoan/list.php";
                // break;
    
            case 'dsbl':
                // $listbinhluan = loadal_binhluan(0);
                // include "binhluan/list.php";
                // break;
    
            case "xoabl":
                // if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //     delete_binhluan($_GET['id']);
                //     header("Location: index.php?act=dsbl");
                // }
                // $listbinhluan = loadall_binhluan(0);
                // break;
    
            case "thongke":
                // $dsthongke = load_thongke_sp_danhmuc();
                // include "thongke/list.php";
                // break;
    
            case "bieudo":
                // $dsthongke = load_thongke_sp_danhmuc();
                // include "thongke/bieudo.php";
                // break;
            default:
                // include "home.php";
                // break;
        }
    } else {
        include "home.php";
    }



    // include "./list.php";

  
    include("footer.php");
?>

<!-- include("list.php"); -->