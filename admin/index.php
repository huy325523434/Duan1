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
            }
    }else{
        include "home.php";
    }
    include("footer.php");
?>

<!-- include("list.php"); -->