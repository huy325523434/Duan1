<?php 
    
    // Đăng kí
    function insert_taikhoan($email, $user, $pass){
        $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`) VALUES ( '$email', '$user','$pass'); ";
        pdo_execute($sql);
    }


    // Đăng nhập
    function dangnhap($user, $pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' AND pass = '".$pass."'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }

    // Cập nhật thông tin tài khoản
    function update_taikhoan($id, $user, $pass, $email, $address, $tel){
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id = " . $id;
        pdo_execute($sql);
    }

    // Quên tài khoản
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }


    // Đăng xuất
    function dangxuat(){
        if(isset($_SESSION["user"])){
            unset($_SESSION["user"]);
        }
    }

    // Tài khoản
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function delete_taikhoan($id){
        $sql = "DELETE FROM taikhoan WHERE id=" . $id;
        pdo_execute($sql);
    }

    function loadone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }

    function update_taikhoan1($id, $user, $pass, $email, $address, $tel, $role){
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."',role='".$role."' WHERE id=".$id;
        pdo_execute($sql);
    }

    function insert_taikhoan1($user, $pass, $email, $address, $tel, $role){
        $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$user', '$pass', '$email', '$address', '$tel', '$role')";
        pdo_execute($sql);
    }
