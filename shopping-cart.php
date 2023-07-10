<?php
    $userId = $_SESSION['userId'];
    $total = 0;
    $sql = "SELECT user_id, product.product_id, shopping_cart.quantity, product_name, price, image FROM shopping_cart 
        RIGHT JOIN product ON shopping_cart.product_id = product.product_id
        WHERE user_id = '$userId'";
    $lstItem = mysqli_query($conn, $sql);

?>
<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>Cart</span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="page-title text-center">
                <h1>Shopping Cart</h1>
            </div>
            <div class="row">
                <div class="col-lg-11 col-xl-13">
                    <div class="cart-table">
                        <div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
                            <div class="cart-table-prd-image text-center">
                                Image
                            </div>
                            <div class="cart-table-prd-content-wrap">
                                <div class="cart-table-prd-info">Name</div>
                                <div class="cart-table-prd-qty">Qty</div>
                                <div class="cart-table-prd-price">Price</div>
                                <div class="cart-table-prd-action">&nbsp;</div>
                            </div>
                        </div>
                        <?php
                            while ($row = $lstItem->fetch_assoc()) {
                                $total+= $row['price'] * $row['quantity']
                        ?>
                        <div class="cart-table-prd">
                            <div class="cart-table-prd-image">
                                <a href="product.html" class="prd-img"><img class="lazyload fade-up"
                                        src="<?php echo $row['image'] ?>" alt=""></a>
                            </div>
                            <div class="cart-table-prd-content-wrap">
                                <div class="cart-table-prd-info">
                                    <div class="cart-table-prd-price">
                                        <!-- <div class="price-old">$200.00</div> -->
                                        <div class="price-new"><?php echo $row['product_name'] ?></div>
                                    </div>
                                    <h2 class="cart-table-prd-name"><a href="product.html" src="<?php echo $row['image'] ?>"></a></h2>
                                </div>
                                <div class="cart-table-prd-qty">
                                    <div class="qty qty-changer">
                                        <button class="decrease"></button>
                                        <input type="text" class="qty-input" value="<?php echo $row['quantity'] ?>" data-min="0" data-max="1000">
                                        <button class="increase"></button>
                                    </div>
                                </div>
                                <div class="cart-table-prd-price-total">
                                    $ <?php echo $row['price'] ?>
                                </div>
                            </div>
                            <div class="cart-table-prd-action">
                                <a href="#" class="cart-table-prd-remove" data-tooltip="Remove Product"><i
                                        class="icon-recycle"></i></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-5 mt-3 mt-md-0">
                    <div class="card-total">
                        <div class="row d-flex">
                            <div class="col card-total-txt">Total</div>
                            <div class="col-auto card-total-price text-right">$ <?php echo $total ?></div>
                        </div>
                        <button class="btn btn--full btn--lg"><span>Checkout</span></button>
                        <div class="card-text-info text-right">
                            <h5>Standart shipping</h5>
                            <p><b>10 - 11 business days</b><br>1 item ships from the U.S. and will be delivered in 10 -
                                11 business days</p>
                        </div>
                    </div>
                    <div class="mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>