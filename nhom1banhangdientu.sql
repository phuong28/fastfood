-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2023 lúc 06:33 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom1banhangdientu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Lê Văn Hiếu', 'hieulv@gmail.com', 'abc123!@#'),
(2, 'phuong', '1@gmail.com', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `slug`, `image`) VALUES
(7, 'Chickend', 'chickend', 'categories/chien-luoc-marketing-kfc.jpg'),
(8, 'Drink', 'drink', 'categories/images.jpg'),
(9, 'Pizza', 'pizza', 'categories/1200bzhspm-1200x676.jpg'),
(11, 'Xúc xích', 'xucxich', 'categories/Noi-ve-xuc-xich-no-duoc-lam-tu-thit-gia-suc-hoac-gia-cam..png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`name`, `email`, `message`) VALUES
('toan', 'toan@gmail.com', 'very good'),
('hieu', 'hieu@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `order_note` text NOT NULL,
  `subtotal` int(10) UNSIGNED NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `receiver_name`, `phone_number`, `address`, `order_note`, `subtotal`, `payment_type`, `status`) VALUES
(2, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang can than', 100000, 'cod', 1),
(3, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang can than', 100000, 'cod', 1),
(4, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang can than', 100000, 'cod', 0),
(5, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang can than', 100000, 'cod', 1),
(6, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang can than', 100000, 'cod', 1),
(7, 1, 'Van Hieu', '012345', 'Cam Giang, Hai Duong', 'Giao hang nhanh', 180000, 'online', 1),
(8, 1, 'Hieu', '012345', 'Cam Giang, Hai Duong', 'Giao hang can than', 80000, 'cod', 1),
(9, 1, 'Hieu', '012345', 'Cam Giang, Hai Duong', 'Giao hang can than', 80000, 'cod', 1),
(10, 1, 'Hieu', '123456', 'Cam Giang, Hai Duong', 'Giao hang nhanh', 150000, 'cod', 0),
(11, 1, 'Hoang', '12345678', 'Cam Giang, Hai Duong', 'Giao hang tiet kiem', 300000, 'online', 1),
(16, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 160000, 'online', 0),
(17, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 150000, 'cod', 0),
(18, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 150000, 'cod', 0),
(19, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 150000, 'cod', 0),
(20, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 150000, 'online', 0),
(21, 9, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 150000, 'online', 0),
(22, 10, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 30000, 'cod', 0),
(23, 10, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 30000, 'cod', 0),
(24, 10, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', '', 30000, 'cod', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `product_name`, `total`) VALUES
(23, 8, 3, 'Xúc xích việt nhật', 30000),
(24, 5, 1, 'Đùi gà rán', 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `quantity`, `price`, `image`, `category_id`) VALUES
(5, 'Đùi gà rán', 'Gà rán miền Nam Hoa Kỳ, hay còn gọi là gà rán, là một món ăn xuất xứ từ miền Nam Hoa Kỳ; nguyên liệu chính là những miếng thịt gà đã được lăn bột rồi chiên trên chảo, chiên ngập dầu, chiên áp suất hoặc chiên không dầu. Lớp bột chiên xù sẽ giúp cho miếng gà có một lớp vỏ ngoài giòn rụm, còn phần thịt bên trong vẫn mềm và mọng nước. ', 100, 30000, 'images/2e9a8340f87f4dcf40c63bd6b9e6c225.jpg_720x720q80.jpg_.webp', 7),
(6, 'Nước dứa nguyên chất', 'Tin tức Thông tin sức khỏe Dinh dưỡng Nước ép dứa có lợi cho sức khỏe không? Share:  Nước ép dứa nguyên chất là một thức uống giàu dinh dưỡng mà không phải ở các loại trái cây nào cũng có. Không chỉ ngon miệng, có lợi cho sức khỏe uống nước ép dứa còn giúp giảm cân, giải độc hiệu quả. Tuy nhiên, khi sử dụng nước ép dứa giảm cân bạn cần lưu ý, không dùng dứa còn xanh hay chưa chín kỹ để bảo vệ sức khỏe.  1. Vì sao nước é', 11, 11000, 'images/uong-gi-de-nhanh-co-kinh-2-.jpg', 8),
(7, 'pizza ý', 'Những chiếc bánh pizza hải sản trở nên hấp dẫn đối với những người có niềm yêu thích với pizza, một những hương vị hải sản hòa quyện với nhau tạo nên một sản phẩm vô cùng cuốn hút. Sự kết hợp của những nguyên liệu như bột tươi, sốt marinara, hải sản , hành, dứa, phô mai Mozzarella, sốt Pesto. Hương vị hải sản từ tôm, mực, ngao kết hợp với độ ngậy của sốt và phô mai tạo thành một chiếc bánh pizza thật là tuyệt vời.', 30, 25000, 'images/1200bzhspm-1200x676.jpg', 9),
(8, 'Xúc xích việt nhật', 'Xúc xích là một loại thực phẩm chế biến từ thịt (thông thường và chủ yếu là thịt heo) bằng phương pháp dồi (nhồi thịt và dồn vào một bì) kết hợp với các loại muối, gia vị, phụ gia,... Trong Từ điển tiếng Việt thì xúc xích là món ăn làm bằng ruột lợn nhồi thịt, rồi hun khói luộc với lửa nhỏ và kết hợp muối, gia vị, phụ gia', 100, 10000, 'images/xuc-xich-chien.jpg', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'toan', 'toan@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(2, 'hung', 'hung@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'phuong', 'phuong@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(9, 'Ninh Thị Phượng', 'ninhanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Ninh Thị Phượng', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
