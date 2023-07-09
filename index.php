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
    include("header.php");
    // include("login.php");
    if(isset($_GET['request_uri'])){
        $request_uri = $_GET['request_uri'];
        echo $request_uri;
        // Kiểm tra URL và xử lý yêu cầu
        if ($request_uri == '/' || $request_uri == '') {
            include("home.php");
        } elseif ($request_uri == 'login') {
            include("login.php");
        }elseif ($request_uri == 'category') {
            include("category.php");
        } else {
            // Nếu không tìm thấy định tuyến
            // header("HTTP/1.0 404 Not Found");
            echo "Page not found";
        }
    }else{
        include("home.php");
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