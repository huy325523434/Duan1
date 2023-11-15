<?php 
    include("../model/pdo.php");
    include("header.php");

    // Controller
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // CRUD sản phẩm
            case "listsp":
                if(isset($_POST[""])){
                }
            }
    }else{
        include "home.php";
    }
    include("footer.php");
?>

<!-- include("list.php"); -->