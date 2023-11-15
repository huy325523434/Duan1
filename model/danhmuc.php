<?php 
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }
?>