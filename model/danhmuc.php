<?php 
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }

    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
?>