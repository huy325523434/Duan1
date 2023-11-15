<?php 
    include("../model/pdo.php");
    include("model/danhmuc.php");
    include("model/sanpham.php");
    include("header.php");

    // Controller
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // CRUD sản phẩm
            case "listsp":
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

            case "addsp":
                

            // CRUD danhmuc
            case "listdm":
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case "adddm":
                if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                    $tenloai = $_POST["tenloai"];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            };


            


    }else{
        include "home.php";
    }
    include("footer.php");
?>

<!-- include("list.php"); -->