             <!--breadcrumbs area start-->
             <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Chi tiết sản phẩm</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->


                         <!--product wrapper start-->
                        <div class="product_details">
                            <div class="row">
                            <?php extract($sanpham); ?>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                            <div class="product_tab_button">    
                                                <ul class="nav" role="tablist">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false">
                                                            <?php 
                                                                $linkimg = $img_path . $img;
                                                                echo '<img src="'.$linkimg.'" alt="">' 
                                                            ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                         <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2" aria-selected="false">
                                                            <img src="assets\img\cart\cart2.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                       <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3" aria-selected="false"><img src="assets\img\cart\cart4.jpg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div> 
                                            <div class="tab-content produc_tab_c">
                                      
                                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#">
                                                            <?php 
                                                                $linkimg = $img_path . $img;
                                                                echo '<img src="'.$linkimg.'" alt="">';
                                                            ?>
                                                        </a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <?php 
                                                                $linkimg = $img_path . $img;
                                                                echo '<a class="large_view" href="'.$linkimg.'"><i class="fa fa-search-plus"></i></a>';
                                                            ?>
                                                            
                                                        </div>    
                                                    </div>
                                                </div>
                                                <!-- <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="assets\img\product\product14.jpg" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="assets\img\product\product14.jpg"><i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="assets\img\product\product15.jpg" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="assets\img\product\product15.jpg"> <i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div> -->
                                            </div>

                                        </div> 
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1><?php echo $name ?></h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"> Write a review </a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Gomens cam kết dành 10% doanh thu từ sản phẩm “Care & Share” đóng góp vào quỹ để tổ chức các hoạt động thiện nguyện dành cho trẻ em có hoàn cảnh khó khăn.</p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span>$ <?php echo $price?></span>
                                                <span class="old-price">$ <?php echo $original_price ?></span>
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="#">
                                                    <label>Số lượng</label>
                                                    <input min="0" max="100" value="1" type="number">
                                                </form> 
                                                <button type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>    
                                            </div>
                                            <div class="product_d_size mb-20">
                                                <label for="group_1">size</label>
                                                <select name="size" id="group_1">
                                                    <option value="1">S</option>
                                                    <option value="2">M</option>
                                                    <option value="3">L</option>
                                                </select>
                                            </div>

                                            <div class="sidebar_widget color">
                                                <h2>Choose Color</h2>
                                                 <div class="widget_color">
                                                    <ul>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li> <a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>                 

                                            <div class="product_stock mb-20">
                                               <p>299 items</p>
                                                <span> Trong kho </span>
                                            </div>
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--product details end-->


                        <!--product info start-->
                        <?php include "listsp/motasp.php"?> 
                        <!--product info end-->


                        <!--new product area start-->
                        <?php include "listsp/sanphamcl.php" ?>
                        <!--new product area start-->  


                        <!--new product area start-->
                        <?php include "listsp/dm.php"; ?>
                        <!--new product area start-->  

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->