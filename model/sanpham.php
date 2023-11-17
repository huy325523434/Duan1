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

function loadone_sanpham($id_sp)
{
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
    $result = pdo_query_one($sql);
    return $result;
}

function load_sanpham_cungloai($id_sp, $id_dm)
{
    $sql = "SELECT * FROM sanpham WHERE id_dm = $id_dm AND id_sp <> $id_sp";
    $result = pdo_query($sql);
    return $result;
}

function loadall_sanpham_home(){
    $sql = "SELECT * FROM sanpham WHERE 1 order by id_sp DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}