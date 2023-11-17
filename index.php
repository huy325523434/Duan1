<?php 

    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";
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
                if(isset($_GET['id_dm']) && ($_GET['id_dm']>0)){
                    $id_dm=$_GET['id_dm'];
                }else{
                    $id_dm=0;
                }
                $dssp=loadall_sanpham($kyw,$id_dm);
                $tendm= load_ten_dm($id_dm);
                include "view/sanpham.php";
                break;
            case "sanphamct":
                if(isset($_GET['id_sp']) && $_GET['id_sp'] > 0){
                    $sanpham = loadone_sanpham($_GET['id_sp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['id_sp'], $sanpham['id_dm']);
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
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>