
                        <!--new product area start-->
                        <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>  Sản phẩm cùng loại</h3>
                                </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="single_p_active owl-carousel">
                                    <?php 
                                        foreach ($sanphamcl as $value) {

                                            $i = 0;
                                            foreach ($spnew as $sp){
                                                extract($sp);
                                                $hinh = $img_path . $img;
                                                $link = "index.php?act=sanphamct&id=$id";
                                                $link_mua = "index.php?act=muangay&id=$id";
                                                echo '<div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                   <a href="'.$link.'"><img src="'.$hinh.'" alt=""></a> 
                                                   <div class="img_icone">
                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                   </div>
                                                   <div class="product_action">
                                                       <a href="'.$link_mua.'"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                   </div>
                                                </div>
                                                <div class="product_content">
                                                    <span class="product_original_price">$'.$original_price.'</span>
                                                    <span class="product_price">$ '.$price.' </span>
                                                    <h3 class="product_title"><a href="index.php?act=sanphamct&id='.$value['id'].' ">'.$value["name"].'</a></h3>
                                                </div>
                                                <div class="product_info">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist ">Thêm vào giỏ hàng</a></li>
                                                        <li><a href="'.$link.'" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>';
                                            }
                                            
                                        }
                                        ?>
                                
                                    

                                    <!-- <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                               <div class="hot_img">
                                                   <img src="assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$40.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Quisque ornare dui</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$60.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                               <div class="hot_img">
                                                   <img src="assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$65.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="assets\img\product\product6.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$50.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div> 
                            </div>      
                        </div> 
                        <!--new product area start-->  