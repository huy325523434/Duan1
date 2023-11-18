<?php 
// index.php
// function load_ten_dm($id){
//     if($id > 0){
//         $sql = "SELECT * FROM danhmuc WHERE id = $id";
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     }else{
//         return "";
//     }
// }

// function loadall_danhmuc(){
//     $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
//     $listdanhmuc=pdo_query($sql);
//     return  $listdanhmuc;
// }
?>







<?php
// index.php tổng
function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm){
    if($iddm > 0){
        $sql = "SELECT * FROM danhmuc WHERE id = $iddm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}


// index.php danh muc
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id){
    $sql = "DELETE FROM danhmuc WHERE id =" . $id;
    pdo_execute($sql);
}

function loadone_danhmuc($id){
    $sql = "SELECT * FROM danhmuc WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai){
    $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}