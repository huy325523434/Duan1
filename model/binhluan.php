<?php 
    function loadall_binhluan($idpro){
        $sql = "SELECT * FROM binhluan WHERE 1";
        if($idpro > 0){
            $sql.=" AND idpro='".$idpro."'";
        }else{
            $sql.=" ORDER BY id DESC";
        }
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($noidung, $ngaybl, $danhgia, $id_sp,$id_user){
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `ngaybl`,`danhgia`,`id_sp`,`id_user`) 
            VALUES ('$noidung', '$ngaybl', '$danhgia','$id_sp', '$id_user');
        ";
        pdo_execute($sql);
    }

    function delete_binhluan($id){
        $sql = "DELETE FROM binhluan WHERE id=" . $id;
        pdo_execute($sql);
    }
