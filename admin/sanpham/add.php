<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
            }
            ?>
            <div class="row2 mb10 form_content_container">
                <label>Danh mục</label>
                <select name="iddm" id="">
                    <option value="">Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Mã sản phẩm </label>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm </label>
                <input type="text" name="tensp" placeholder="Nhập vào tên sản phẩm" required>
            </div>
            <div class="row2 mb10">
                <label>Giá cũ sản phẩm</label>
                <input type="text" name="original_price" placeholder="Nhập vào giá sản phẩm" required>
            </div>
            <div class="row2 mb10">
                <label>Giá sản phẩm</label>
                <input type="text" name="giasp" placeholder="Nhập vào giá sản phẩm" required>
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh</label>
                <input type="file" name="hinh">
            </div>
            <div class="row2 mb10">
                <label>Mô tả</label>
                <textarea rows="10" cols="100" name="mota"></textarea>
            </div>
            <div class="row mb10 ">
                <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>