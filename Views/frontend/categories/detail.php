<list-product>
<div class="container">
<div class="titlePrimary">
<?= $category['name'] ?? null?>
</div>
<section class="banner-bottom py-5">
        <div class="container py-md-5">
<?php foreach ($products as $product):?>
    
            <!-- product right -->
            <div class="left-ads-display wthree">
                <div class="row">
                    <div class="desc1-left col-md-6">
                        <img src="images/bag1.png" class="img-fluid" alt="">
                    </div>
                    <div class="desc1-right col-md-6 pl-lg-3">
                        <h3>Lorem ipsum dolor sit amet laoret.</h3>
                        <h5>Rs. 499 <span>599</span> <a href="#">Click for offer</a></h5>
                        <div class="available mt-3">
                            <form action="#" method="post" class="w3pvt-newsletter subscribe-sec">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn submit">Check</button>

                            </form>
                            <span><a href="#">login to save in wishlist </a></span>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.. </p>
                        </div>
                        <div class="share-desc mt-5">
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>

                <!--/row-->
                <h3 class="title-wthree-single my-lg-5 my-4 text-left">Featured Bags</h3>
                <div class="row shop-wthree-info text-center">
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b1.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="single.html">Messenger Bag </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">$799</span> $675.00</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b2.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="single.html">Shoulder Bag (Pink) </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">$799</span> $675.00</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b3.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="single.html">Sling Bag </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">$599</span> $475.00</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b4.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="single.html">Tote (Blue) </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">$799</span> $675.00</span>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                </div>
                <!--//row-->

            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
</div>
<?php endforeach; ?>
</list-product>