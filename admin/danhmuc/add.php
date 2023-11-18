<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI DANH MUC</h1>
    </div>
    <div class="row2 form_content ">
        <?php
        if (isset($thanhcong) && ($thanhcong != "")) {
            echo $thanhcong;
        } ?>
        <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại</label>
                <input type="text" name="maloai"   disabled >
            </div>
            <div class="row2 mb10">
                <label> Tên loại</label>
                <input type="text" name="tenloai" required>
            </div>
            <div class="row mb10 ">
                <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm" ><input class="mr20" type="button" value="DANH SÁCH"></a>

            </div>
        </form>
    </div>
</div>