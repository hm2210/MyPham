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
    <footer class="page-footer footer-style-6 ">
        <div class="holder ">
            <div class="footer-shop-info">
                <div class="container">
                    <div class="text-icn-blocks-bg-row">
                        <div class="text-icn-block-footer">
                            <div class="icn">
                                <i class="icon-trolley"></i>
                            </div>
                            <div class="text">
                                <h4>Extra fast delivery</h4>
                                <p>Your order will be delivered 3-5 business days after all of your items are available
                                </p>
                            </div>
                        </div>
                        <div class="text-icn-block-footer">
                            <div class="icn">
                                <i class="icon-currency"></i>
                            </div>
                            <div class="text">
                                <h4>Best price</h4>
                                <p>We'll match the product prices of key online and local competitors for immediately
                                </p>
                            </div>
                        </div>
                        <div class="text-icn-block-footer">
                            <div class="icn">
                                <i class="icon-diplom"></i>
                            </div>
                            <div class="text">
                                <h4>Guarantee</h4>
                                <p>If the item you want is available, we can process a return and place a new order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row mt-0">
                    <div class="col-lg col-xl last-mobile">
                        <div class="footer-block">
                            <div class="footer-logo">
                                <a href="index.html"><img class="lazyload fade-up"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="images/logo-footer.webp 1x, images/logo-footer2x.webp 2x"
                                        alt="Logo"></a>
                            </div>
                            <div class="collapsed-content">
                                <ul>
                                    <li>E-mail: <a href="mailto:Foxshop@gmail.com">Foxshop@gmail.com</a></li>
                                    <li>Hours: 10:00 - 18:00, Mon - Fri</li>
                                </ul>
                            </div>
                            <ul class="social-list">
                                <li>
                                    <a href="#" class="icon icon-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-google"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-vimeo"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-youtube"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-pinterest"></a>
                                </li>
                            </ul>
                            <div class="d-lg-none mt-3">
                                <div class="box-coupon">
                                    <div class="box-coupon-icon"><i class="icon-scissors"></i></div>
                                    <div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-xl">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>Information</h4>
                                <span class="toggle-arrow"><span></span><span></span></span>
                            </div>
                            <div class="collapsed-content">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="typography.html">Terms & Conditions</a></li>
                                    <li><a href="typography.html">Returns & Exchanges</a></li>
                                    <li><a href="typography.html">Shipping & Delivery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-xl">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>Account details</h4>
                                <span class="toggle-arrow"><span></span><span></span></span>
                            </div>
                            <div class="collapsed-content">
                                <ul>
                                    <li><a href="account-details.html">My Account</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="account-wishlist.html">My Wishlist</a></li>
                                    <li><a href="account-history.html">Order Status</a></li>
                                    <li><a href="account-history.html">Track My Order</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-xl">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>Safe payments</h4>
                                <span class="toggle-arrow"><span></span><span></span></span>
                            </div>
                            <div class="collapsed-content">
                                <ul class="payment-link">
                                    <li><i class="icon-google-pay-logo"></i></li>
                                    <li><i class="icon-visa-pay-logo"></i></li>
                                    <li><i class="icon-apple-pay-logo"></i></li>
                                </ul>
                            </div>
                            <div class="d-none d-lg-block">
                                <div class="box-coupon">
                                    <div class="box-coupon-icon"><i class="icon-scissors"></i></div>
                                    <div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom footer-bottom--bg">
            <div class="container">
                <div class="footer-copyright text-center">
                    <a href="#">FOXshop</a> ©2020 copyright
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-sticky">
        <div class="sticky-addcart js-stickyAddToCart closed">
            <div class="container">
                <div class="row">
                    <div class="col-auto sticky-addcart_image">
                        <a href="product.html">
                            <img src="images/skins/fashion/products/product-01-1.html" alt="" />
                        </a>
                    </div>
                    <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                        <h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
                        <div class="sticky-addcart_price">
                            <span class="sticky-addcart_price--actual">$180.00</span>
                            <span class="sticky-addcart_price--old">$210.00</span>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
                        <div class="select-wrapper">
                            <select class="form-control form-control--sm">
                                <option value="">--Please choose an option--</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_actions">
                        <div class="prd-block_qty">
                            <span class="option-label">Quantity:</span>
                            <div class="qty qty-changer">
                                <button class="decrease"></button>
                                <input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
                                <button class="increase"></button>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
            <div class="container">
                <div class="row">
                    <div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
                    <div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i
                            class="icon-basket"></i></div>
                    <div class="col-auto popup-addedtocart_logo">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="images/logo-white-sm.webp" class="lazyload fade-up" alt="">
                    </div>
                    <div class="col popup-addedtocart_info">
                        <div class="row">
                            <a href="product.html" class="col-auto popup-addedtocart_image">
                                <span class="image-container w-100">
                                    <img src="images/skins/fashion/products/product-01-1.html" alt="" />
                                </span>
                            </a>
                            <div class="col popup-addedtocart_text">
                                <a href="product.html" class="popup-addedtocart_title"></a>
                                <span class="popup-addedtocart_message">Added to <a href="cart.html"
                                        class="underline">Cart</a></span>
                                <span class="popup-addedtocart_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto popup-addedtocart_actions">
                        <span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop"
                            data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a>
                        <span>or</span> <a href="checkout.html" class="btn btn--invert btn--sm"><i
                                class="icon-envelope-1"></i><span>Check out</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
            <div class="container">
                <div class="row">
                    <div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
                    <div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
                        <a href="#" data-caption="">
                            <span class="image-container"><img src="#" alt="" /></span>
                        </a>
                    </div>
                    <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                        <h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
                        <div class="sticky-addcart_price">
                            <span class="sticky-addcart_price--actual"></span>
                            <span class="sticky-addcart_price--old"></span>
                        </div>
                        <div class="sticky-addcart_error_message">Error Message</div>
                    </div>
                    <div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
                        <div class="select-wrapper">
                            <select class="form-control form-control--sm sticky-addcart_options_select">
                                <option value="none">Select Option please..</option>
                            </select>
                            <div class="invalid-feedback">Can't be blank</div>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_actions">
                        <div class="prd-block_qty">
                            <span class="option-label">Quantity:</span>
                            <div class="qty qty-changer">
                                <button class="decrease"></button>
                                <input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
                                <button class="increase"></button>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn js-prd-addtocart">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
            <i class="icon icon-angle-up"></i>
        </a>
        <div class="loader-horizontal js-loader-horizontal">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
        </div>
    </div>
    