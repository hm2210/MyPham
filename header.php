<header class="hdr-wrap">
    <div class="hdr-content hdr-content-sticky">
        <div class="container">
            <div class="row">
                <div class="col-auto show-mobile">
                    <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a>
                    </div>
                </div>
                <div class="col-auto hdr-logo">
                    <a href="index.html" class="logo"><img srcset="images/cosmetic-logo-header.png" alt="Logo"></a>
                </div>
                <div class="hdr-nav hide-mobile nav-holder-s">
                </div>
                <div class="hdr-links-wrap col-auto ml-auto">
                    <div class="hdr-inline-link">
                        <div class="search_container_desktop">
                            <div class="dropdn dropdn_search dropdn_fullwidth">
                                <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i
                                        class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                <div class="dropdn-content">
                                    <div class="container">
                                        <form method="get" action="#" class="search search-off-popular">
                                            <input name="search" type="text" class="search-input input-empty"
                                                placeholder="What are you looking for?">
                                            <button type="submit" class="search-button"><i
                                                    class="icon-search"></i></button>
                                            <a href="#" class="search-close js-dropdn-close"><i
                                                    class="icon-close-thin"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dropdn dropdn_account dropdn_fullheight">
                                <a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon"
                                    data-panel="#dropdnAccount"><i class="icon-user"></i><span
                                        class="dropdn-link-txt">Account</span></a>
                            </div> -->
                        <div class="dropdn dropdn_fullheight minicart">
                            <a href="/?request_uri=cart" class="dropdn-link js-dropdn-link minicart-link only-icon"
                                data-panel="#dropdnMinicart">
                                <i class="icon-basket"></i>
                                <span class="minicart-qty">3</span>
                                <span class="minicart-total hide-mobile">$34.99</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hdr">
        <div class="hdr-topline hdr-topline--dark js-hdr-top">
            <div class="container">
                <div class="row flex-nowrap">
                    <div class="col hdr-topline-left hide-mobile">
                        <div class="hdr-line-separate">
                            <ul class="social-list list-unstyled">
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-vimeo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col hdr-topline-center">
                        <div class="custom-text js-custom-text-carousel"
                            data-slick='{"speed": 1000, "autoplaySpeed": 3000}'>
                            <div class="custom-text-item"><i class="icon-fox"></i> Use promocode <span>FOXIC</span>
                                to get 15% discount!</div>
                            <div class="custom-text-item"><i class="icon-air-freight"></i> <span>Free</span> plane
                                shipping over <span>$250</span></div>
                            <div class="custom-text-item"><i class="icon-gift"></i> Today only! Post
                                <span>holiday</span> Flash Sale! 2 for $20
                            </div>
                        </div>
                    </div>
                    <div class="col hdr-topline-right hide-mobile">
                        <div class="hdr-inline-link">
                            <div class="dropdn_language">
                                <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                                    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i
                                            class="icon-user" style="font-size: 18px"></i><span
                                            class="dropdn-link-txt ">Account</span></a>
                                    <div class="dropdn-content">
                                        <ul>
                                            <li><a href="#"><img src="images/flags/sp.html" alt="">Login</a></li>
                                            <li><a href="#"><img src="images/flags/de.html" alt="">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-content">
            <div class="container">
                <div class="row">
                    <div class="col-auto show-mobile">
                        <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a>
                        </div>
                    </div>
                    <div class="col-auto hdr-logo" style="width:200px">
                        <a href="?request_uri=" class="logo"><img srcset="images/cosmetic-logo-header.png"
                                alt="Logo"></a>
                    </div>
                    <div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
                        <ul class="mmenu mmenu-js">
                            <li class="mmenu-item--simple"><a href="#" class="active">Home</a>
                            </li>
                            <li class="mmenu-item--simple"><a href="#">Product Category</a>
                                <div class="mmenu-submenu">
                                    <ul class="submenu-list">
                                        <?php   
                                            $sqlGetLstCategory = "SELECT * FROM category";
                                            $resultCategory = mysqli_query($conn, $sqlGetLstCategory);
                                            // $lstCategory = mysqli_fetch_array($resultCategory);
                                            while ($row = $resultCategory->fetch_assoc()) {
                                                echo "<li><a href='?request_uri=category&id=" . $row["category_id"] ."'>" . $row["category_name"] . "</a></li>";
                                            }
                                            
                                        ?>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="mmenu-item--simple"><a href="#" class="active">News</a>
                            <li class="mmenu-item--simple"><a href="#" class="active">About us</a>

                        </ul>
                    </div>
                    <div class="hdr-links-wrap col-auto ml-auto">
                        <div class="hdr-inline-link">
                            <div class="search_container_desktop">
                                <div class="dropdn dropdn_search dropdn_fullwidth">
                                    <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i
                                            class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                    <div class="dropdn-content">
                                        <div class="container">
                                            <form method="get" action="#" class="search search-off-popular">
                                                <input name="search" type="text" class="search-input input-empty"
                                                    placeholder="What are you looking for?">
                                                <button type="submit" class="search-button"><i
                                                        class="icon-search"></i></button>
                                                <a href="#" class="search-close js-dropdn-close"><i
                                                        class="icon-close-thin"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="dropdn dropdn_wishlist">
                                    <a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
                                        <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span
                                            class="wishlist-qty">3</span>
                                    </a>
                                </div>
                                <div class="hdr_container_mobile show-mobile">
                                    <div class="dropdn dropdn_account dropdn_fullheight">
                                        <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i
                                                class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
                                    </div>
                                </div> -->
                            <div class="dropdn dropdn_fullheight minicart">
                                <a href="?request_uri=cart" class="dropdn-link js-dropdn-link minicart-link"
                                    data-panel="#dropdnMinicart">
                                    <i class="icon-basket"></i>
                                    <span class="minicart-qty">3</span>
                                    <span class="minicart-total hide-mobile">$34.99</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php

?>