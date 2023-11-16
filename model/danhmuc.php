<?php 
   
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
?>