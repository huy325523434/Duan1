<?php
function loadall_sanpham($keyw = "", $id_dm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE trangthai = 0 ";
    // where 1 tức là nó đúng
    if ($keyw != "") {
        $sql .= " AND NAME LIKE '%" . $keyw . "%'";
    }
    if ($id_dm > 0) {
        $sql .= " AND id_dm = '" . $id_dm . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function load_sanpham_cungloai($id, $id_dm)
{
    $sql = "SELECT * FROM sanpham WHERE id_dm = $id AND id <> $id";
    $result = pdo_query($sql);
    return $result;
}

function loadall_sanpham_home(){
    $sql = "SELECT * FROM sanpham WHERE 1 order by id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh){
    if($hinh != ""){
        $sql = "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `img` = '{$hinh}', `iddm` = '{$iddm}' WHERE `sanpham` . `id` = $id ";
    }else{
        $sql = "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham` . `id` = $id ";
   }
   pdo_execute($sql);
}

// Xoá sản phẩm
function hard_delele($id){
    $sql = "DELETE FROM sanpham WHERE id = " . $id;
    pdo_execute($sql);
}