<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>Search</span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="page-title text-center">
                <?php
                if (isset($_GET['keySearch'])) {
                    $keySearch = $_GET['keySearch'];
                    $sqlSearch = "SELECT * FROM product WHERE product_name LIKE '%$keySearch%'";
                    $productResult = mysqli_query($conn, $sqlSearch);
                    ?>
                    <h1>Result for "
                        <?php
                            echo $keySearch;
                        ?>
                        "
                    </h1>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg aside">
                    <div class="prd-grid-wrap">
                        <div class="product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid prd-grid"
                            data-grid-tab-content>
                            <?php
                                while ($product = $productResult->fetch_assoc()) {
                                    ?>
                                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                        <div class="prd-inside">
                                            <div class="prd-img-area">
                                                <a href=<?php echo "?request_uri=detail-product&productId=" . $product['product_id'] ?> class="prd-img image-hover-scale image-container">
                                                    <img src="<?php echo $product['image'] ?>"
                                                        class="js-prd-img lazyload fade-up">
                                                    <div class="foxic-loader"></div>
                                                    <div class="prd-big-squared-labels">
                                                    </div>
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
                                                    <h2 class="prd-title"><a href=<?php echo "?request_uri=detail-product&productId=" . $product['product_id'] ?>>
                                                            <?php echo $product['product_name'] ?>
                                                        </a></h2>
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
                                                                title="Remove From Wishlist"><i
                                                                    class="icon-heart-hover"></i></a></div>
                                                        <div class="prd-hide-mobile"><a href="#"
                                                                class="circle-label-qview js-prd-quickview"
                                                                data-src="ajax/ajax-quickview.html"><i
                                                                    class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                    </div>
                                                    <div class="prd-price">
                                                        <div class="price-new">$
                                                            <?php echo $product['price'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="prd-action">
                                                        <div class="prd-action-left">
                                                            <form action="#">
                                                                <button class="btn js-prd-addtocart"
                                                                    data-product='{"name": "Leather Pegged Pants", "path":"images/skins/fashion/products/product-01-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add
                                                                    To Cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                if($productResult == null || $productResult->num_rows == 0){
                                    echo "<div class='text-title text-center w-100 mt-5'><h4>No product found</h4></div>";
                                } ?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
