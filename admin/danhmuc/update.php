<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT LOẠI HÀNG HOÁ</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại</label>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row2 mb10">
                <label> Tên loại</label>
                <input type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id_dm" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lisdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
            }
            ?>
        </form>
    </div>
</div>