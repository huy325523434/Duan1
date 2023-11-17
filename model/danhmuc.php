<?php 
   
function load_ten_dm($id_dm){
    if($id_dm > 0){
        $sql = "SELECT * FROM danhmuc WHERE id_dm = $id_dm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}

function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id_dm DESC";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
?>