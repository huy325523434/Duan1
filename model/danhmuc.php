<?php 
   
function load_ten_dm($id){
    if($id > 0){
        $sql = "SELECT * FROM danhmuc WHERE id = $id";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}

function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
?>