    <?php 
    $price = "";
    $sortType = "ASC";
    $resultProduct = null;
    $categoryId = "";
?>
<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>Category</span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container">

            <div class="page-title text-center">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sqlGetCategory = "SELECT * FROM category WHERE category_id = '$id'";
                    $categoryResult = mysqli_query($conn, $sqlGetCategory);
                    $category = $categoryResult->fetch_assoc();
                    ?>
                    <h1>
                        <?php
                        echo $category['category_name'];
                        ?>
                    </h1>
                <?php } ?>
            </div>
            <div class="filter-row">
                <div class="row">
                    <div class="select-wrap d-none d-md-flex">
                        <div class="select-label">SORT BY:</div>
                        <div class="select-wrapper select-wrapper-xxs">
                            <select id="sort" class="form-control input-sm">
                                <option value="ASC" <?php if($_GET['sortType'] == "ASC"){ echo "selected";} ?>>Prices increase gradually</option>
                                <option value="DESC" <?php if($_GET['sortType'] == "DESC"){ echo "selected";} ?>>Price descending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filter-col-content filter-mobile-content" style="margin-right: 100px;">
                    <div class="sidebar-block filter-group-block open">
                        <div class="sidebar-block_title">
                            <span>Filter</span>
                        </div>
                        <!-- -->
                        <div class="sidebar-block_content">
                            <form id="select-price" method="GET">
                                <input type="radio" id="l10" name="price" value="<10" <?php if($_GET['price'] == "<10"){ echo "checked";} ?>>
                                <label for="l10">Less than $10</label><br>
                                <input type="radio" id="l30" name="price" value="<30" <?php if($_GET['price'] == "<30"){ echo "checked";} ?>>
                                <label for="l30">Less than $30</label><br>
                                <input type="radio" id="l50" name="price" value="<50" <?php if($_GET['price'] == "<50"){ echo "checked";} ?>>
                                <label for="l50">Less than $50</label><br>
                                <input type="radio" id="l100" name="price" value="<100" <?php if($_GET['price'] == "<100"){ echo "checked";} ?>>
                                <label for="l100">Less than $100</label><br>
                                <input type="radio" id="m100" name="price" value=">100" <?php if($_GET['price'] == ">100"){ echo "checked";} ?>>
                                <label for="m100">More than $100</label>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg aside">
                    <div class="prd-grid-wrap">
                        <div class="product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid prd-grid"
                            data-grid-tab-content>
                            <?php
                            function getProduct($conn, $sortType, $price, $categoryId)
                            {
                                $sql = "SELECT * FROM product WHERE category_id = " . $categoryId . ($price != "" ? " AND price " . $price : " ") . " ORDER BY price " . $sortType;
                                // echo $sql;
                                $result = mysqli_query($conn, $sql);

                                return $result;
                            }

                            if (isset($_GET['id'])) {
                                $categoryId = $_GET['id'];
                                $resultProduct = getProduct($conn, $sortType, $price, $categoryId);

                            }
                            if (isset($_GET['sortType'])) {
                                $sortType = $_GET['sortType'];
                                $resultProduct = getProduct($conn, $sortType, $price, $categoryId);
                            }
                            if (isset($_GET['price'])) {
                                $price = $_GET['price'];
                                $resultProduct = getProduct($conn, $sortType, $price, $categoryId);
                            }
                            if ($resultProduct != null) {
                                while ($product = $resultProduct->fetch_assoc()) {
                                    ?>


                                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                        <div class="prd-inside">
                                            <div class="prd-img-area">
                                                <a href="product.html" class="prd-img image-hover-scale image-container">
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
                                                    <h2 class="prd-title"><a href="product.html">
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

                                <?php }
                            } ?>
                        </div>
                        <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal
                            style="opacity: 0;"><span></span></div>
                        <div class="circle-loader-wrap">
                            <div class="circle-loader">
                                <a href="ajax/ajax-product-category.json" data-total="30" data-loaded="12" data-load="6"
                                    class="lazyload js-circle-loader">
                                    <svg id="svg_d" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50%" cy="50%" r="63" fill="transparent"></circle>
                                        <circle class="js-circle-bar" cx="50%" cy="50%" r="63" fill="transparent">
                                        </circle>
                                    </svg>
                                    <svg id="svg_m" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50%" cy="50%" r="50" fill="transparent"></circle>
                                        <circle class="js-circle-bar" cx="50%" cy="50%" r="50" fill="transparent">
                                        </circle>
                                    </svg>
                                    <div class="circle-loader-text">Load More</div>
                                    <div class="circle-loader-text-alt"><span
                                            class="js-circle-loader-start"></span>&nbsp;out of&nbsp;<span
                                            class="js-circle-loader-end"></span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("select-price").addEventListener("change", function (event) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của biểu mẫu
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        console.log(urlParams.has('price'));
        if (urlParams.has('price')) {
            urlParams.set('price', event.target.value);
        } else {
            urlParams.append('price', event.target.value);
        }

        window.location.replace("?" + urlParams.toString());
    });

    document.getElementById("sort").addEventListener("change", function (event) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của biểu mẫu
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        if (urlParams.has('sortType')) {
            urlParams.set('sortType', event.target.value);
        } else {
            urlParams.append('sortType', event.target.value);
        }

        window.location.replace("?" + urlParams.toString());
    });
    
</script>