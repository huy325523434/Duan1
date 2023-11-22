<!-- CONTENT -->
<div class="row2">
    <div class="row2 font_title">
        <h1>THỐNG KÊ BÌNH LUẬN TRONG SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=dsbl" method="POST">
            <div class="row2 mb10 formds_loai">
                <table border="1px">
                    <tr>
                      
                        <th class="th">ID</th>
                        <th class="th">NỘI DUNG</th>
                        <th class="th">NGÀY BÌNH LUẬN</th>
                        <th class="th">ĐÁNH GIÁ</th>
                        <th class="th">ID SẢN PHẨM</th>
                        <th class="th">ID USER</th>
                        <th class="th">CHỨC NĂNG</th>
                    </tr>
                    <?php foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=" . $id;
                        $xoabl = "index.php?act=xoabl&id=" . $id;
                        echo '<tr> 
                                
                                <td>' . $id . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $ngaybl . '</td>
                                <td>' . $danhgia . '</td>
                                <td>' . $id_sp . '</td>
                                <td>' . $id_user . '</td>
                                <td>
                                    <a href="' . $xoabl . '"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    } ?>
                </table>
            </div>
            <div class="row mb10 " style="margin-left: 20px  ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="XOÁ CÁC MỤC ĐÃ CHỌN">
            </div>
        </form>
    </div>
</div>