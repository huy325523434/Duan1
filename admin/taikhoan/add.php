<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <?php
        if (isset($thanhcong) && ($thanhcong != "")) {
            echo $thanhcong;
        } ?>
        <form action="index.php?act=addtk" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã tài khoản</label>
                <input type="text" name="matk" disabled>
            </div>
            <div class="row2 mb10">
                <label> Tên đăng nhập</label>
                <input type="text" name="user">
            </div>
            <div class="row2 mb10">
                <label> Mật khẩu</label>
                <input type="text" name="pass">
            </div>
            <div class="row2 mb10">
                <label> Email</label>
                <input type="text" name="email">
            </div>
            <div class="row2 mb10">
                <label> Địa chỉ</label>
                <input type="text" name="address">
            </div>
            <div class="row2 mb10">
                <label> Điện thoại</label>
                <input type="text" name="tel">
            </div>
            <div class="row2 mb10">
                <label> Role</label>
                <input type="text" name="role">
            </div>
            <div class="row mb10 ">
                <input class="mr20" name="themmoikh" type="submit" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=dskh"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>