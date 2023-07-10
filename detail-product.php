<?php
    $product = null;
    $lstSugget = null;
    if (isset($_GET['productId'])) {
        $sql = "SELECT * FROM product WHERE product_id = " . $_GET['productId'];
        $resultProduct = mysqli_query($conn, $sql);
        $product = $resultProduct->fetch_assoc();
    }

    if (isset($product['category_id'])) {
        $sql = "SELECT  DISTINCT * FROM product  WHERE category_id = " . $product['category_id'] . " AND product_id != " . $product['product_id'] . " ORDER BY RAND() LIMIT 8";
        $resultCategory = mysqli_query($conn, $sql);
        $lstSuggest = $resultCategory->fetch_assoc();
    }

?>
<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>
                        <?php echo $product['product_name'] ?>
                    </span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container js-prd-gallery" id="prdGallery">
            <div class="row prd-block prd-block-under prd-block--prv-right">
                <div class="col">
                    <div class="js-prd-d-holder">
                        <div class="prd-block_title-wrap">
                            <h1 class="prd-block_title">
                                <?php echo $product['product_name'] ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row prd-block prd-block--prv-right">
                <div class="col-md-8 col-lg-10 aside--sticky js-sticky-collision">
                    <div class="aside-content">
                        <div class="product-previews-wrapper">
                            <img src="https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-8 mt-1 mt-md-0">
                    <div class="prd-block_info prd-block_info--style1"
                        data-prd-handle="/products/copy-of-suede-leather-mini-skirt">
                        <div class="prd-block_info-top prd-block_info_item order-0 order-md-2">
                            <div class="prd-block_price prd-block_price--style2">
                                <div class="prd-block_price--actual">$
                                    <?php echo $product['price'] ?>
                                </div>
                                <!-- <div class="prd-block_price-old-wrap">
                                    <span class="prd-block_price--old">$210.00</span>
                                    <span class="prd-block_price--text">You Save: $131.99 (28%)</span>
                                </div> -->
                            </div>
                            <div class="prd-block_description prd-block_info_item ">
                                <h3>Short description</h3>
                                <p>Model is 5'9" wearing Size XS TallAnd without further ado, we give you our finest
                                    Shopify Theme FOXic! It is a subtle, complex and yet an extremely easy to use
                                    template for anyone, who wants to create own website in ANY area of expertise.</p>
                                <div class="mt-1"></div>
                                <div class="row vert-margin-less">
                                    <div class="col-sm">
                                        <ul class="list-marker">
                                            <li>100% Polyester</li>
                                            <li>Lining:100% Viscose</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm">
                                        <ul class="list-marker">
                                            <li>Do not dry clean</li>
                                            <li>Only non-chlorine</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="prd-block_viewed-wrap d-none d-md-flex">
                                <div class="prd-block_viewed">
                                    <i class="icon-time"></i>
                                    <span>This product was viewed 13 times within last hour</span>
                                </div>
                            </div>
                        </div>
                        <div class="order-0 order-md-100">
                            <form method="post" action="#">
                                <div class="prd-block_actions prd-block_actions--wishlist">
                                    <div class="prd-block_qty">
                                        <div class="qty qty-changer">
                                            <button class="decrease js-qty-button"></button>
                                            <input type="number" class="qty-input" name="quantity" value="1"
                                                data-min="1" data-max="1000">
                                            <button class="increase js-qty-button"></button>
                                        </div>
                                    </div>
                                    <div class="btn-wrap">
                                        <button class="btn btn--add-to-cart js-trigger-addtocart js-prd-addtocart"
                                            data-product='{"name":  "Leather Pegged Pants ",  "url ": "product.html",  "path ": "images/skins/fashion/product-page/product-01.webp",  "aspect_ratio ": "0.78"}'>Add
                                            to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="prd-block_info_item">
                            <ul class="prd-block_links list-unstyled">
                                <li><i class="icon-delivery-1"></i><a href="#" data-fancybox class="modal-info-link"
                                        data-src="#deliveryInfo">Delivery and Return</a></li>
                                <li><i class="icon-email-1"></i><a href="#" data-fancybox class="modal-info-link"
                                        data-src="#contactModal">Ask about this product</a></li>
                            </ul>
                            <div id="deliveryInfo" style="display: none;"
                                class="modal-info-content modal-info-content-lg">
                                <div class="modal-info-heading">
                                    <div class="mb-1"><i class="icon-delivery-1"></i></div>
                                    <h2>Delivery and Return</h2>
                                </div>
                                <br>
                                <h5>Our parcel courier service</h5>
                                <p>Foxic is proud to offer an exceptional international parcel shipping service. It is
                                    straightforward and very easy to organise international parcel shipping. Our
                                    customer service team works around the clock to make sure that you receive high
                                    quality courier service from start to finish.</p>
                                <p>Sending a parcel with us is simple. To start the process you will first need to get a
                                    quote using our free online quotation service. From this, you’ll be able to navigate
                                    through the online form to book a collection date for your parcel, selecting a
                                    shipping day suitable for you.</p>
                                <br>
                                <h5>Shipping Time</h5>
                                <p>The shipping time is based on the shipping method you chose.<br>
                                    EMS takes about 5-10 working days for delivery.<br>
                                    DHL takes about 2-5 working days for delivery.<br>
                                    DPEX takes about 2-8 working days for delivery.<br>
                                    JCEX takes about 3-7 working days for delivery.<br>
                                    China Post Registered Mail takes 20-40 working days for delivery.</p>
                            </div>
                            <div id="contactModal" style="display: none;"
                                class="modal-info-content modal-info-content-sm">
                                <div class="modal-info-heading">
                                    <div class="mb-1"><i class="icon-envelope"></i></div>
                                    <h2>Have a question?</h2>
                                </div>
                                <form method="post" action="#" id="contactForm" class="contact-form">
                                    <div class="form-group">
                                        <input type="text" name="contact[name]" class="form-control form-control--sm"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contact[email]" class="form-control form-control--sm"
                                            placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contact[phone]" class="form-control form-control--sm"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control textarea--height-170" name="contact[body]"
                                            placeholder="Message"
                                            required="">Hi! I need next info about the "Oversize Cotton Dress":</textarea>
                                    </div>
                                    <button class="btn" type="submit">Ask our consultant</button>
                                    <p class="p--small mt-15 mb-0">and we will contact you soon</p><input
                                        name="recaptcha-v3-token" type="hidden"
                                        value="03AGdBq27T8WvzvZu79QsHn8lp5GhjNX-w3wkcpVJgCH15Ehh0tu8c9wTKj4aNXyU0OLM949jTA4cDxfznP9myOBw9m-wggkfcp1Cv_vhsi-TQ9E_EbeLl33dqRhp2sa5tKBOtDspTgwoEDODTHAz3nuvG28jE7foIFoqGWiCqdQo5iEphqtGTvY1G7XgWPAkNPnD0B9V221SYth9vMazf1mkYX3YHAj_g_6qhikdQDsgF2Sa2wOcoLKWiTBMF6L0wxdwhIoGFz3k3VptYem75sxPM4lpS8Y_UAxfvF06fywFATA0nNH0IRnd5eEPnnhJuYc5LYsV6Djg7_S4wLBmOzYnahC-S60MHvQFf-scQqqhPWOtgEKPihUYiGFBJYRn2p1bZwIIhozAgveOtTNQQi7FGqmlbKkRWCA">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="prd-block_info prd-block_info--style1">
                        <div class="panel-group panel-group--style1 prd-block_accordion" id="productAccordion">
                            <div class="panel">
                                <div class="panel-heading active">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#productAccordion" href="#collapse2">
                                            Description</a>
                                    </h4>
                                </div>
                                <?php echo $product['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="holder prd-block_links-wrap-bg d-none d-md-block">
            <div class="prd-block_links-wrap prd-block_info_item container mt-2 mt-md-5 py-1">
                <div class="prd-block_link"><span><i class="icon-call-center"></i>24/7 Support</span></div>
                <div class="prd-block_link">
                    <span>Use promocode FOXIC to get 15% discount!</span>
                </div>
                <div class="prd-block_link"><span><i class="icon-delivery-truck"></i> Fast Shipping</span></div>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1-style">You may also like</h2>
                    <div class="carousel-arrows carousel-arrows--center"></div>
                </div>
                <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2"
                    data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                    <?php
                    while ($suggestProduct = $resultCategory->fetch_assoc()) {
                        ?>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="<?php echo "?request_uri=detail-product&productId=" . $suggestProduct['product_id'] ?>" class="prd-img image-hover-scale image-container">
                                    <img src="<?php echo $suggestProduct['image'] ?>"
                                        alt="" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                    </div>
                                </a>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <h2 class="prd-title"><a href="<?php echo "?request_uri=detail-product&productId=" . $suggestProduct['product_id'] ?>"><?php echo $suggestProduct['product_name'] ?></a></h2>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-price">
                                        <div class="price-new">$ <?php echo $suggestProduct['price'] ?></div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>