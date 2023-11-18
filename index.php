<?php 

    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION["thanhtoan"])) $_SESSION["thanhtoan"] = [];
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){

            // Sản phẩm
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id=$_GET['id'];
                }else{
                    $id=0;
                }
                $dssp=loadall_sanpham($kyw,$id);
                $tendm= load_ten_dm($id);
                include "view/sanpham.php";
                break;


            // Chi tiết sản phẩm
            case "sanphamct":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $sanpham = loadone_sanpham($_GET['id']);
                    $sanphamcl = load_sanpham_cungloai($_GET['id'], $sanpham['id']);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";            
                }
                break;
            
            // Blog 
            case "blog1":
                include "view/blog/blog1.php";
                break;

            case "blog2":
                include "view/blog/blog2.php";
                break;

            case "blog3":
                include "view/blog/blog3.php";
                break;
            
            // Giỏ hàng
            case "addtocart":
                if(isset($_POST["addtocart"]) && ($_POST["addtocart"]> 0)){
                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $img = $_POST["img"];
                    $price = $_POST["price"];
                    $soluong = 1;
                    $thanhtien = $soluong * $price;
                    $spadd = [$id, $name, $img, $price, $soluong, $thanhtien];
                    array_push($_SESSION["thanhtoan"], $spadd);
                }
                include "./view/cart/thanhtoan.php";
                break;

       
         

        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>