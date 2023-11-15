<?php 
   function loadall_sanpham($keyw="", $iddm=0){
    $sql = "SELECT * FROM sanpham WHERE trangthai = 0 ";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.= " AND NAME LIKE '%".$keyw."%'";
    }
    if($iddm > 0){
        $sql.= " AND iddm = '" . $iddm . "'";
    }
    $sql.= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>