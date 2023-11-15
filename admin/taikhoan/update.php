<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>
<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatetk" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã khách hàng</label>
                <input type="text" name="makh" disabled>
            </div>
            <div class="row2 mb10">
                <label> Tên đăng nhập</label>
                <input type="text" name="user" value="<?php echo $user ?>">
            </div>
            <div class="row2 mb10">
                <label> Mật khẩu</label>
                <input type="text" name="pass" value="<?php echo $pass ?>">
            </div>
            <div class="row2 mb10">
                <label> Email</label>
                <input type="text" name="email" value="<?php echo $email ?>">
            </div>
            <div class="row2 mb10">
                <label> Địa chỉ</label>
                <input type="text" name="address" value="<?php echo $address ?>">
            </div>
            <div class="row2 mb10">
                <label> Điện thoại</label>
                <input type="text" name="tel" value="<?php echo $tel ?>">
            </div>
            <div class="row2 mb10">
                <label> Role</label>
                <input type="text" name="role" value="<?php echo $role ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=dskh"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
            }
            ?>
        </form>
    </div>
</div>