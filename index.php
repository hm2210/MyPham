<?php
session_start();
include("connect.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cosmetic</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/vendor.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="fonts/icomoon/icons.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
</head>

<body class="has-smround-btns has-loader-bg equal-height">
    <?php
    function addToCart($productId, $quantity, $conn)
    {
        $userId = $_SESSION['userId'];

        $sqlCheckExisting = "SELECT * FROM shopping_cart WHERE product_id = " . $productId . " AND user_id = " . $userId;
        $resultCheck = mysqli_query($conn, $sqlCheckExisting);
        $exist = $resultCheck->fetch_assoc();
        if ($exist != null) {
            $newQuantity = $exist["quantity"] + $quantity;
            $sqlUpdateQuantity = "UPDATE shopping_cart SET quantity = " . $newQuantity . " WHERE product_id = " . $productId . " AND user_id = " . $userId;

            $resultUpdate = mysqli_query($conn, $sqlUpdateQuantity);
        } else {
            $sql = "INSERT INTO shopping_cart(user_id, product_id, quantity) VALUES($userId, $productId, $quantity)";
            $result = mysqli_query($conn, $sql);
        }

    }
    echo "<script>if ( window.history.replaceState ) { window.history.replaceState( null, null, window.location.href ); }</script>";

    include("header.php");
    // include("login.php");
    if(isset($_GET['keySearch'])){
        include("search-result.php");
    }else{
        if (isset($_GET['request_uri'])) {
            $request_uri = $_GET['request_uri'];
            // Kiểm tra URL và xử lý yêu cầu
            if ($request_uri == '/' || $request_uri == '') {
                include("home.php");
            } elseif ($request_uri == 'login') {
                include("login.php");
            } elseif ($request_uri == 'category') {
                include("category.php");
            } elseif ($request_uri == 'detail-product') {
                include("detail-product.php");
            } elseif ($request_uri == 'register') {
                include("register.php");
            }
            elseif ($request_uri == 'cart') {
                if (!isset($_SESSION["userId"])) {
                    ?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire({
                            icon: 'warning',
                            title: 'You must be login to continue!',
                            showConfirmButton: true,
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.replace('?request_uri=login');
                            }
                        })
                    </script>
                    <?php
                } else {
                    include("shopping-cart.php");
                }
    
            } else {
                // Nếu không tìm thấy định tuyến
                // header("HTTP/1.0 404 Not Found");
                echo "Page not found";
            }
        } else {
            include("home.php");
        }
    }


    include("footer.php");

    ?>
    <!-- ================================ -->
    <?php
    if (isset($_POST['productId']) && isset($_POST['quantity'])) {
        $productId = $_POST['productId'];
        $quantity = $_POST['quantity'];
        // echo $_SESSION['userId'];
        if ($_SESSION['userId'] != null || $_SESSION['userId'] != '') {
            addToCart($productId, $quantity, $conn);
            $numRows = mysqli_affected_rows($conn);
            if ($numRows > 0) {
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Add product to cart successfully!',
                        showConfirmButton: true,
                        confirmButtonText: 'OK'
                    })
                </script>
                <?php
            }
        } else {
            ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'You must be login to continue!',
                showConfirmButton: true,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('?request_uri=login');
                }
            })
        </script>
    <?php
        }

    }
    ?>


    <script src="js/vendor-special/lazysizes.min.js"></script>
    <script src="js/vendor-special/ls.bgset.min.js"></script>
    <script src="js/vendor-special/ls.aspectratio.min.js"></script>
    <script src="js/vendor-special/jquery.min.js"></script>
    <script src="js/vendor-special/jquery.ez-plus.js"></script>
    <script src="js/vendor/vendor.min.js"></script>
    <script src="js/app-html.js"></script>
</body>

</html>