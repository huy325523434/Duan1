<!-- CONTENT -->
<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
    $hinhpath = "No file image!";
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
            }
            ?>
            <div class="row2 mb10 form_content_container">
                <label>Danh mục</label>
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $key => $value) {
                        if ($iddm == $value["id"]) {
                            echo '<option value="' . $value["id"] . '"selected>' . $value["name"] . '</option>';
                        } else {
                            echo '<option value="' . $value["id"] . '">' . $value["name"] . '</option>';
                        }
                    } ?>
                </select>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Mã sản phẩm </label>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm </label>
                <input type="text" name="tensp" value="<?php echo $name ?>">
            </div>
            <div class="row2 mb10">
                <label>Giá gốc </label>
                <input type="text" name="original_price" value="<?php echo $original_price ?>">
            </div>
            <div class="row2 mb10">
                <label>Giá sản phẩm</label>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh</label>
                <input type="file" name="hinh">
                <?php echo $hinhpath ?>
            </div>
            <div class="row2 mb10">
                <label>Trạng thái </label>
                <input type="text" name="trangthai" value="<?php echo $trangthai ?>" required>
            </div>
            <div class="row2 mb10">
                <label>Mô tả</label>
                <textarea rows="10" cols="100" name="mota" value="<?php echo $mota ?>"></textarea>
            </div>
            <div class="row mb10 " style="margin-left: 20px ">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>