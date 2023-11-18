 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Shopping Cart</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area">
                            <form action="#"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Delete</th>
                                                        <th class="product_thumb">Hình ảnh</th>
                                                        <th class="product_name">Sản phẩm</th>
                                                        <th class="product-price">Đơn giá</th>
                                                        <th class="product_quantity">Số lượng</th>
                                                        <th class="product_total">Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $tong = 0;
                                                        foreach ($_SESSION["thanhtoan"] as $cart){
                                                            $hinh = $img_path . $cart[2];
                                                            $thanhtien = $cart[3] * $cart[4];
                                                            $tong += $thanhtien;
                                                            echo '<tr>
                                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                                <td class="product_thumb"><a href="#"><img src="'.$hinh.'" alt=""></a></td>
                                                                <td class="product_name"><a href="#">'.$cart[1].'</a></td>
                                                                <td class="product-price">$ '.$cart[3].'</td>
                                                                <td class="product_quantity">'.$cart[4].'</td>
                                                                <td class="product_total">'.$thanhtien.'</td>
                                                            </tr>';
                                                        }
                                                    ?>

                                                    <!-- 
                                                    <tr>
                                                       <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        <td class="product_thumb"><a href="#"><img src="assets\img\cart\cart17.jpg" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                        <td class="product-price">£65.00</td>
                                                        <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                                        <td class="product_total">£130.00</td>
                                                    </tr>

                                                    <tr>
                                                       <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        <td class="product_thumb"><a href="#"><img src="assets\img\cart\cart18.jpg" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbags justo</a></td>
                                                        <td class="product-price">£90.00</td>
                                                        <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                                        <td class="product_total">£180.00</td>


                                                    </tr>
                                                    <tr>
                                                       <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        <td class="product_thumb"><a href="#"><img src="assets\img\cart\cart19.jpg" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbag elit</a></td>
                                                        <td class="product-price">£80.00</td>
                                                        <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                                        <td class="product_total">£160.00</td>


                                                    </tr> -->

                                                </tbody>
                                            </table>   
                                                </div>  
                                                <div class="cart_submit">
                                                    <button type="submit">update cart</button>
                                                </div>      
                                            </div>
                                         </div>
                                     </div>
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Phiếu mua hàng</h3>
                                                    <div class="coupon_inner">   
                                                        <p>Nhập mã phiếu giảm giá của bạn nếu có</p>                                
                                                        <input placeholder="Mã giảm giá" type="text">
                                                        <button type="submit">Áp dụng phiếu giảm giá</button>
                                                    </div>    
                                                </div>
                                            </div>

                                            <?php 
                                                $tien = $tong + 30;
                                                echo ' <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Tổng đơn hàng</h3>
                                                    <div class="coupon_inner">
                                                       <div class="cart_subtotal">
                                                           <p>Thành tiền</p>
                                                           <p class="cart_amount">'.$tong.'</p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Phí vận chuyển</p>
                                                           <p class="cart_amount"><span>Giá cố định:</span> $30</p>
                                                       </div>
                                                       <a href="#">Tính toán vận chuyển</a>

                                                       <div class="cart_subtotal">
                                                           <p>Total</p>
                                                           <p class="cart_amount">'.$tien .'</p>
                                                       </div>
                                                       <div class="checkout_btn">
                                                           <a href="#">Tiền hàng kiểm tra</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            ?>
                                           
                                        </div>
                                    </div>
                                    <!--coupon code area end-->
                                </form> 
                         </div>
                         <!--shopping cart area end -->

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->