<div class="page-content">
        <div class="holder fullwidth full-nopad mt-0">
            <div class="container">
                <div class="bnslider-wrapper">
                    <div class="bnslider bnslider--lg keep-scale" id="bnslider-001"
                        data-slick='{"arrows": true, "dots": true}' data-autoplay="false" data-speed="12000"
                        data-start-width="1917" data-start-height="764" data-start-mwidth="1550"
                        data-start-mheight="1000">
                        <div class="bnslider-slide">
                            <div class="bnslider-image-mobile lazyload"
                                data-bgset="images/banners/banner1.jpg"></div>
                            <div class="bnslider-image lazyload"
                                data-bgset="images/banners/banner1.jpg"></div>
                        </div>
                        <div class="bnslider-slide">
                            <div class="bnslider-image-mobile lazyload"
                                data-bgset="images/banners/banner2.jpg"></div>
                            <div class="bnslider-image lazyload"
                                data-bgset="images/banners/banner2.jpg"></div>
                        </div>
                        <div class="bnslider-slide">
                            <div class="bnslider-image-mobile lazyload"
                                data-bgset="images/banners/banner3.jpg"></div>
                            <div class="bnslider-image lazyload"
                                data-bgset="images/banners/banner3.jpg"></div>
                        </div>
                    </div>
                    <div class="bnslider-arrows container-fluid">
                        <div></div>
                    </div>
                    <div class="bnslider-dots container-fluid"></div>
                </div>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1-style">New arrival</h2>
                    <div class="h-sub maxW-825">Hurry up! Limited</div>
                </div>
                <div class="prd-grid-wrap position-relative">
                    <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid"
                        data-grid-tab-content>
                        
                            <?php
                                $queryGetProductHome= "SELECT DISTINCT * FROM product ORDER BY RAND() LIMIT 8";
                                $resultProductHome = mysqli_query($conn, $queryGetProductHome);
                                while ($product = $resultProductHome->fetch_assoc()) {
                                    ?>
                                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                        <div class="prd-inside">
                                            <div class="prd-img-area">
                                                <a href= <?php echo "?request_uri=detail-product&productId=" . $product['product_id'] ?> class="prd-img image-hover-scale image-container">
                                                    <img src="<?php echo $product["image"] ?>"
                                                        alt="" class="js-prd-img lazyload fade-up">
                                                </a>
                                                <div class="prd-circle-labels">
                                                    <a href="#"
                                                        class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                        title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#"
                                                        class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                        title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                        data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK
                                                            VIEW</span></a>
                                                </div>
                                            </div>
                                            <div class="prd-info">
                                                <div class="prd-info-wrap">
                                                    <h2 class="prd-title">
                                                        <a href=<?php echo "?request_uri=detail-product&productId=" . $product['product_id'] ?>>
                                                            <?php echo $product["product_name"] ?>
                                                        </a>
                                                    </h2>
                                                    <div class="prd-action">
                                                        <form action="#">
                                                            <button class="btn js-prd-addtocart">Add To Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="prd-hovers">
                                                    <div class="prd-circle-labels">
                                                        <div><a href="#"
                                                                class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                                title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a
                                                                href="#"
                                                                class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                                title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                        </div>
                                                        <div class="prd-hide-mobile"><a href="#"
                                                                class="circle-label-qview js-prd-quickview"
                                                                data-src="ajax/ajax-quickview.html"><i
                                                                    class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                    </div>
                                                    <div class="prd-price">
                                                        <!-- <div class="price-old">$ 200</div> -->
                                                        <div class="price-new">$ <?php echo $product["price"] ?></div>
                                                    </div>
                                                    <div class="prd-action">
                                                        <div class="prd-action-left">
                                                            <form action="#">
                                                                <button class="btn js-prd-addtocart">Add To Cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <?php ;
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="holder holder-mt-medium">
            <div class="container">
                <div class="title-wrap text-center ">
                    <h2 class="h1-style text-center"><a href="blog.html" title="View all">Suggest For You</a></h2>
                    <div class="carousel-arrows" style="margin:0 auto 65px; width:50px;"></div>
                </div>
                <div class="prd-grid-wrap position-relative">
                    <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid"
                        data-grid-tab-content>
                        
                            <?php
                                $queryProductSuggetst= "SELECT DISTINCT * FROM product ORDER BY RAND() LIMIT 4";
                                $resultProductSuggest = mysqli_query($conn, $queryProductSuggetst);
                                while ($product = $resultProductSuggest->fetch_assoc()) {
                                    ?>
                                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                        <div class="prd-inside">
                                            <div class="prd-img-area">
                                                <a href="product.html" class="prd-img image-hover-scale image-container">
                                                    <img src="<?php echo $product["image"] ?>"
                                                        alt="" class="js-prd-img lazyload fade-up">
                                                </a>
                                                <div class="prd-circle-labels">
                                                    <a href="#"
                                                        class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                        title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#"
                                                        class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                        title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                        data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK
                                                            VIEW</span></a>
                                                </div>
                                            </div>
                                            <div class="prd-info">
                                                <div class="prd-info-wrap">
                                                    <h2 class="prd-title"><a href="product.html"><?php echo $product["product_name"] ?></a></h2>
                                                   
                                                    <div class="prd-action">
                                                        <form action="#">
                                                            <button class="btn js-prd-addtocart">Add To Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="prd-hovers">
                                                    <div class="prd-circle-labels">
                                                        <div><a href="#"
                                                                class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                                title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a
                                                                href="#"
                                                                class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                                title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                        </div>
                                                        <div class="prd-hide-mobile"><a href="#"
                                                                class="circle-label-qview js-prd-quickview"
                                                                data-src="ajax/ajax-quickview.html"><i
                                                                    class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                    </div>
                                                    <div class="prd-price">
                                                        <!-- <div class="price-old">$ 200</div> -->
                                                        <div class="price-new"><?php echo $product["price"] ?></div>
                                                    </div>
                                                    <div class="prd-action">
                                                        <div class="prd-action-left">
                                                            <form action="#">
                                                                <button class="btn js-prd-addtocart"
                                                                    data-product='{"name": "Oversized Cotton Blouse", "path":"images/skins/fashion/products/product-03-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add
                                                                    To Cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <?php ;
                                }
                            ?>
                    </div>
                </div>
            
            </div>
        </div>
    </div>