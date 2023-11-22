<style>
    .select {
        width: 200px;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        margin-left: 350px;
    }

    .tim {
        width: 70px;
        height: 30px;

    }
</style>

<!-- CONTENT -->
<div class="row2" style="text-align: center;">
    <div class="row2 font_title">
        <h1>DANH SÁCH HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <div class="row2 font_title">
                    <form action="index.php?act=listsp" method="POST">
                        <input type="text" name="keyw">
                        <select name="iddm" id="" class="select">
                            <option value="0" selected>Tất cả </option>
                            <?php foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            } ?>
                        </select>
                        <input type="submit" name="clickOK" value="TÌM" class="tim">
                    </form>
                </div>
                <table>
                    <tr>
                       
                        <th class="th">MÃ SẢN PHẨM</th>
                        <th class="th">TÊN SẢN PHẨM</th>
                        <th class="th">GIÁ</th>
                        <th class="th">HÌNH</th>
                        <th class="th">TRẠNG THÁI </th>
                        <th class="th">CHỨC NĂNG</th>
                    </tr>
                    <?php foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&idsp=" . $id;
                        $xoasp = "index.php?act=xoasp&idsp=" . $id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src='" . $hinhpath . "' width='80px' height='80px'>";
                        } else {
                            $hinhpath = "No file image!";
                        }
                        echo '<tr> 
                       
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $original_price . '</td>
                                <td>' . $price . '</td>
                                <td>' . $hinhpath . '</td>
                                <td>' . $trangthai . '</td>
                                

                                <td>
                                    <a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                    <a href="' . $xoasp . '"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xoá không\')"></a>
                                </td>
                            </tr>';
                    } ?>
                </table>
            </div>
            <div class="row mb10 "  style="margin-left: 20px ">
                <input  type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="XOÁ CÁC MỤC ĐÃ CHỌN">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>