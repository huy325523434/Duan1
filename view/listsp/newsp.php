              <!--new product area start-->
              <div class="new_product_area product_two">
                  <div class="row">
                      <div class="col-12">
                          <div class="block_title">
                              <h3> New Products</h3>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="single_p_active owl-carousel">
                      <?php 
                            $i = 0;
                            foreach ($spnew as $sp){
                                extract($sp);
                                $hinh = $img_path . $img;
                                $link = "index.php?act=sanphamct&id=$id";
                                    echo '<div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="'.$link.'"><img src="'.$hinh.'" alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="'.$id.'">
                                                    <input type="hidden" name="name" value="'.$name.'">
                                                    <input type="hidden" name="img" value="'.$img.'">
                                                    <input type="hidden" name="price" value="'.$price.'">
                                                    <input type="submit" name="addtocart" value="Add to cart" style="background-color: #00bba6; border: 1px solid #00bba6; color: aliceblue;">
                                                </form> 
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_original_price">$'.$original_price.'</span>
                                            <span class="product_price">$'.$price.'</span> 
                                            <h3 class="product_title"><a href="'.$link.'">'.$name.'</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="'.$link.'" title=" Add to Wishlist ">Xem chi tiết</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#modal_box" title="Quick view">Mua ngay</a></li>
                                            </ul>
                                        </div>
                                       

                                    </div>
                                </div>';

                                }
                                ?>
                                
                          
                          <!-- <div class="col-lg-3">
                              <div class="single_product">
                                  <div class="product_thumb">
                                      <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a>
                                      <div class="hot_img">
                                          <img src="assets\img\cart\span-hot.png" alt="">
                                      </div>

                                  </div>
                                  <div class="product_content">
                                      <span class="product_price">$40.00</span>
                                      <h3 class="product_title"><a href="single-product.html">Quisque ornare dui</a></h3>
                                  </div>
                                  <div class="product_info">
                                      <ul>
                                          <li><a href="#" title=" Add to Wishlist ">Thêm giỏ hàng</a></li>
                                          <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Mua ngay</a></li>
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

                                  </div>
                                  <div class="product_content">
                                      <span class="product_price">$60.00</span>
                                      <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
                                  </div>
                                  <div class="product_info">
                                      <ul>
                                          <li><a href="#" title=" Add to Wishlist ">Thêm giỏ hàng</a></li>
                                          <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Mua ngay</a></li>
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

                                  </div>
                                  <div class="product_content">
                                      <span class="product_price">$65.00</span>
                                      <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
                                  </div>
                                  <div class="product_info">
                                      <ul>
                                          <li><a href="#" title=" Add to Wishlist ">Thêm giỏ hàng</a></li>
                                          <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Mua ngay</a></li>
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

                                  </div>
                                  <div class="product_content">
                                      <span class="product_price">$50.00</span>
                                      <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                  </div>
                                  <div class="product_info">
                                      <ul>
                                          <li><a href="#" title=" Add to Wishlist ">Thêm giỏ hàng</a></li>
                                          <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Mua ngay</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div> -->
                      </div>
                  </div>
              </div>
              <!--new product area start-->