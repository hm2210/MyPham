-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 11, 2023 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.5.20-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id18011585_dbmypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Mask'),
(2, 'Skincare'),
(3, 'Make up'),
(4, 'Haircare and body'),
(5, 'Sunscreen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `quantity`, `price`, `image`, `category_id`) VALUES
(1, 'Innisfree Retinol Cica Repair Ampoule 30 mL', '<div id=\"collapse2\" class=\"panel-collapse collapse show\">\r\n                                    <div class=\"panel-body\">\r\n                                        <h4>Give you a complete account of the system</h4>\r\n                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure\r\n                                            and praising pain was born and I will give you a complete account of the\r\n                                            system, and expound the actual teachings of the great explorer of the truth,\r\n                                            the master-builder of human happiness. </p>\r\n                                        <div class=\"row mt-3\">\r\n                                            <div class=\"col-md-9\">\r\n                                                <p>But I must explain to you how all this mistaken idea of denouncing\r\n                                                    pleasure and praising pain was born and I will give you a complete\r\n                                                    account of the system, and expound the actual teachings of the great\r\n                                                    explorer of the truth, the master-builder of human happiness. </p>\r\n                                            </div>\r\n                                            <div class=\"col-md-9\"><img\r\n                                                    src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"\r\n                                                    data-src=\"images/product-description-01.webp\" alt=\"\"\r\n                                                    class=\"lazyload\"></div>\r\n                                        </div>\r\n                                        <div class=\"mt-3\"></div>\r\n                                        <h4>List heading</h4>\r\n                                        <div class=\"row\">\r\n                                            <div class=\"col-sm-9\">\r\n                                                <ul class=\"list-unstyled list-smaller\">\r\n                                                    <li>1. All this mistaken idea of denouncing</li>\r\n                                                    <li>2. Raising pain was born and give you</li>\r\n                                                    <li>3. Complete account of the system</li>\r\n                                                </ul>\r\n                                            </div>\r\n                                            <div class=\"col-sm-9 mt-15 mt-sm-0\">\r\n                                                <ul class=\"list-unstyled list-smaller\">\r\n                                                    <li>4. All this mistaken idea of denouncing</li>\r\n                                                    <li>5. Raising pain was born and give you</li>\r\n                                                    <li>6. Complete account of the system</li>\r\n                                                </ul>\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"row mt-3 align-items-center\">\r\n                                            <div class=\"col-md-9\"><img\r\n                                                    src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"\r\n                                                    data-src=\"images/product-description-02.webp\" alt=\"\"\r\n                                                    class=\"lazyload\"></div>\r\n                                            <div class=\"col-md-9\">\r\n                                                <p>But I must explain to you how all this mistaken idea of denouncing\r\n                                                    pleasure and praising pain was born and I will give you a complete\r\n                                                    account of the system, and expound the actual teachings of the great\r\n                                                    explorer of the truth, the master-builder of human happiness. </p>\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"mt-3\">\r\n                                            <p>But I must explain to you how all this mistaken idea of denouncing\r\n                                                pleasure and praising pain was born and I will give you a complete\r\n                                                account of the system, and expound the actual teachings of the great\r\n                                                explorer of the truth, the master-builder of human happiness. </p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>', 1000, 30, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(2, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 34, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(3, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 11, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(4, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 364, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(5, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 22, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(6, 'test', 'ok', 1000, 76, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(7, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 45, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(8, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 98, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(9, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 64, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(10, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 332, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(11, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 131, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(12, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 68, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(13, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 66, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(14, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 44, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(15, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 54, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(16, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 34, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(17, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 87, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2),
(18, 'Innisfree Retinol Cica Repair Ampoule 30 mL', 'ok', 1000, 53, 'https://product.hstatic.net/200000551679/product/4_bong_tay_trang_jomi_f4ee281e604440b083777d55002355ec_1024x1024.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `shopping_cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `shopping_cart`
--

INSERT INTO `shopping_cart` (`shopping_cart_id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 1, 9, 3),
(2, 1, 5, 1),
(3, 1, 7, 2),
(4, 1, 14, 1),
(5, 1, 12, 1),
(6, 1, 3, 1),
(7, 1, 17, 1),
(8, 1, 13, 1),
(9, 1, 4, 2),
(10, 1, 2, 1),
(11, 1, 10, 1),
(12, 1, 8, 4),
(13, 1, 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `phone_number`, `address`, `full_name`) VALUES
(1, 'minhhuyen221002@gmail.com', '123456', NULL, NULL, NULL),
(7, 'huyenminh2210@gmail.com', '1', '0123456789', 'HN', 'Minh Huyen'),
(8, 'mhuyen.2210@gmail.com', '1', '123456789', 'HN', 'Minh Huyen');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `FK_order_detail_order` (`order_id`),
  ADD KEY `FK_order_detail_product` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_product_category` (`category_id`);

--
-- Chỉ mục cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`shopping_cart_id`),
  ADD KEY `FK__user` (`user_id`),
  ADD KEY `FK__product` (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `shopping_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `FK__product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
