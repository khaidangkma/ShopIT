-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 05:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnhom11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(9, 'Phạm Thị Yến', 'Học viện kỹ thuật Mật Mã', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0912345678', 1, 2, NULL, NULL, NULL),
(10, 'Vũ Thị Minh Anh', 'Học viện kỹ thuật Mật Mã', 'admin01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0968111111', 1, 2, NULL, NULL, '2019-06-16 07:34:01'),
(11, 'Vũ Văn Diện', 'Học viện kỹ thuật Mật Mã', 'admin02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0968222222', 1, 2, NULL, NULL, '2019-06-16 07:33:50'),
(12, 'Võ Thị Phương', 'Học viện kỹ thuật Mật Mã', 'admin03@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0968333333', 1, 2, NULL, NULL, NULL),
(13, 'Trần Ngọc Diệp', 'Học viện kỹ thuật Mật Mã', 'admin04@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0968444444', 1, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop DELL', 'laptop-dell', NULL, NULL, 1, 1, '2019-06-17 01:42:47', '2019-06-17 04:09:30'),
(2, 'Laptop HP', 'laptop-hp', NULL, NULL, 1, 1, '2019-06-17 01:42:59', '2019-06-17 04:09:31'),
(3, 'Laptop Apple', 'laptop-apple', NULL, NULL, 1, 1, '2019-06-17 01:43:08', '2019-06-17 04:09:32'),
(4, 'Laptop Gaming', 'laptop-gaming', NULL, NULL, 1, 1, '2019-06-17 01:43:47', '2019-06-17 04:09:33'),
(5, 'Laptop Asus', 'laptop-asus', NULL, NULL, 1, 1, '2019-06-17 01:44:27', '2019-06-17 04:09:34'),
(7, 'Laptop Lenovo', 'laptop-lenovo', NULL, NULL, 1, 1, '2019-06-17 07:56:54', '2019-06-17 07:59:16'),
(8, 'Laptop MSI', 'laptop-msi', NULL, NULL, 1, 1, '2019-06-17 07:57:12', '2019-06-17 07:57:26'),
(9, 'Phụ kiện Laptop', 'phu-kien-laptop', NULL, NULL, 1, 1, '2019-06-17 07:58:09', '2019-06-17 07:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 43650000, '2019-06-17 17:50:02', '2019-06-17 17:50:02'),
(2, 1, 10, 1, 20370000, '2019-06-17 17:50:02', '2019-06-17 17:50:02'),
(3, 2, 2, 1, 43650000, '2019-06-17 18:19:29', '2019-06-17 18:19:29'),
(4, 3, 2, 1, 43650000, '2019-06-18 02:25:46', '2019-06-18 02:25:46'),
(5, 4, 11, 1, 218250000, '2019-06-18 02:55:11', '2019-06-18 02:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thunbar` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text,
  `number` int(11) NOT NULL DEFAULT '0',
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `pay` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar`, `category_id`, `content`, `number`, `head`, `view`, `hot`, `pay`, `created_at`, `updated_at`) VALUES
(2, 'Macbook Pro 2018', 'macbook-pro-2018', 45000000, 3, '636716712475449777_macbook-pro-13-touch-bar-256gb-2018-xam-3.jpg', 3, '			            	MacBook Pro 13 Touch Bar 256GB 2018 là chiếc laptop hoàn hảo cho công việc với sức mạnh từ vi xử lý Intel thế hệ thứ 8, Touch Bar thông minh và màn hình Retina sắc nét đến từng chi tiết.			            ', 8, 0, 0, 0, 1, NULL, '2019-06-17 17:51:16'),
(3, 'Acer Predator 17', 'acer-predator-17', 32000000, 4, 'acer-predator-17.jpg', 4, 'CPU: 6th Gen Intel® Core™ i7 6700HQ Processor 2.6GHz (up to 3.5 GHz)\r\nRAM: 16GB DDR4 SDRAM 2133MHz\r\nĐĩa cứng: 1TB HDD + SSD 256GB\r\nMàn hình: In-plane Switching (IPS) Technology Backlight Technology LED 17.3 inch FHD (1920x1080)\r\nCard đồ họa: NVIDIA GeForce GTX 1060 6G', 10, 0, 0, 0, 0, NULL, NULL),
(4, 'DELL G7 15 7590 I7-8750H', 'dell-g7-15-7590-i7-8750h', 40000000, 4, '15535959807088.png', 1, 'Dell G7 15 7590 là phiên bản nâng cấp của Dell G7 15 7588, thiết kế bên ngoài của chúng khá giống nhau với 2 lớp vỏ được làm từ nhôm cao cấp có màu đen hoặc trắng khiến cho chiếc máy bền bỉ hơn nhưng vẫn giữ được nét đẹp rất riêng của mình, tạo cảm hứng rất tốt cho người dùng', 10, 0, 0, 0, 0, NULL, NULL),
(5, 'ASUS ROG G703GI-XS71 17.3\"', 'asus-rog-g703gi-xs71-173', 54000000, 3, 'g703-pugio__92849.1542764938.jpg', 5, 'The new G703 is the first ROG device with an ultra-responsive 17.3-inch Full HD IPS-level display with a 144Hz referesh rate. It\'s powered by up to an 8th Generation Intel® Core™ i7 processor with full-powered GeForce GTX 1080 graphics for the utmost power in portable form factor.', 10, 0, 0, 0, 0, NULL, NULL),
(6, 'HP ENVY 13-AH0027TU', 'hp-envy-13-ah0027tu', 26000000, 3, '636384033587690493_HP-Envy-13-ad076TU-1.png', 2, 'Tặng Balo Laptop\r\nTặng PMH 600,000đ mua Phần mềm Microsoft ( trừ Office 365 Personal 2 năm, 3 năm)\r\nGiảm 20% Combo bảo vệ Laptop (Combo MDMH và Phần mềm Diệt virus Eset) khi mua kèm máy', 10, 0, 0, 0, 0, NULL, NULL),
(7, 'MACBOOK AIR 13 INCH 2018', 'macbook-air-13-inch-2018', 27000000, 2, 'macbook-air-2018-2.jpg', 3, 'Nhìn Macbook Air 2018 chúng ta sẽ thấy sự giống nhau với Macbook 12 inch. Cùng là thiết kế siêu mỏng, sexy đến ngỡ ngàng. Macbook Air 2018 chỉ có màn hình là to hơn chút xíu.\r\n\r\nNó mỏng hơn 10% so với Macbook Air 2017 , trọng lượng chỉ còn 1,25kg.\r\n\r\nMacbook Air 2018 có 3 màu sắc để người dùng có thể lựa chọn: Silver, Gold và Grey.', 10, 0, 0, 0, 0, NULL, NULL),
(8, 'LENOVO Y520-15IKBN', 'lenovo-y520-15ikbn', 20000000, 3, '636368359428628326_Lenovo-Legion-Y520-1.png', 7, 'Lenovo Y520-15IKBN/i5-7300HQ là cỗ máy chơi game di động mỏng nhẹ thuộc dòng Legion từ Lenovo, sẵn sàng chiến game cả ngày và dễ dàng mang đi bất cứ đâu.', 10, 0, 0, 0, 0, NULL, NULL),
(9, 'MSI GL63 8RCS-068VN', 'msi-gl63-8rcs-068vn', 22000000, 3, '636936231914981789_msi-gl63-8rcs-068vn-1.jfif', 8, 'MSI GL63 giúp những game thủ có phút giây giải trí tuyệt vời bên những trò chơi đỉnh cao nhờ những công nghệ hàng đầu hiện nay.', 10, 0, 0, 0, 0, NULL, NULL),
(10, 'ASUS TUF FX505GD-BQ324T', 'asus-tuf-fx505gd-bq324t', 21000000, 3, '636891905749830489_asus-tuf-fx505gd-bq324t-1.jfif', 5, 'Asus TUF FX505GD – sản phẩm sẽ khiến bạn thay đổi cách nhìn nhận về dòng laptop gaming với phần cứng ấn tượng mạnh mẽ, khung vỏ thiết kế hiện đại và bàn phím được tích hợp đèn nền RGB tạo cảm hứng tối đa khi trải nghiệm game.', 9, 0, 0, 0, 1, NULL, '2019-06-17 17:51:16'),
(11, 'HP ENVY 13-AH1011TU', 'hp-envy-13-ah1011tu', 225000000, 3, '636824776997689324_hp-envy-13-ah1011tu-1.jfif', 2, 'Với sức mạnh xử lý của chip Intel® Core™ thế hệ mới nhất, mẫu laptop HP Envy 13 sẵn sàng cùng bạn đương đầu với mọi thử thách và khẳng định dấu ấn riêng trong một phong cách thanh lịch.', 10, 0, 0, 0, 0, NULL, NULL),
(12, 'HP ENVY X360-AR0071AU', 'hp-envy-x360-ar0071au', 23000000, 3, '636883229391308380_hp-envy-x360-13-ag0046au-r7-1.jfif', 2, ' Máy dùng trải nghiệm tốt nhất cho dân văn phòng với hiệu năng mạnh mẽ, thời lượng pin rất tốt và đặc biệt thiết kế vô cùng nhỏ gọn, đẹp mắt.', 10, 0, 0, 0, 0, NULL, NULL),
(13, 'MACBOOK PRO 13 TOUCH BAR', 'macbook-pro-13-touch-bar', 52000000, 4, '636948950247111627_macbook-pro-13-touch-bar-2019-xam-1.png', 3, 'Với dung lượng ổ cứng SSD lớn, thiết kế tuyệt đẹp đẳng cấp, Touch Bar tiện lợi và sức mạnh ưu việt, MacBook Pro 13 Touch Bar (2019) 512GB xứng đáng là chiếc laptop hoàn hảo cho công việc.', 10, 0, 0, 0, 0, NULL, NULL),
(14, 'ASUS STRIX G531GT-AL030T', 'asus-strix-g531gt-al030t', 295000000, 3, '636936819554058664_asus-strix-g531gt-al030t-1.jfif', 5, 'Là chiếc laptop chơi game sở hữu thiết kế tối giản nhưng mang tới những trải nghiệm cốt lõi tuyệt vời, Asus Strix G531GT giúp bạn hòa mình vào thế giới game nhờ hiệu năng thuyết phục được tối ưu hóa bởi hệ thống làm mát thông minh và loạt công nghệ hỗ trợ tuyệt vời.', 10, 0, 0, 0, 0, NULL, NULL),
(15, 'BÀN PHÍM KHÔNG DÂY LOGITECH K480', 'ban-phim-khong-day-logitech-k480', 747000, 5, '4945_img1.jpg', 9, '			            	Kết nối không dây Bluetooth\r\nKhoảng cách kết nối: Tối đa 10m\r\nSử dụng được cho cả máy tính, tablet, smartphone\r\nKết nối tới nhiều thiết bị một lúc\r\nTích hợp giá đỡ điện thoại, máy tính bảng tiện lợi\r\nPin: 2 pin AAA có thể thay thế\r\nHệ điều hành tương thích: Windows 7/8/10, Mac OS X, Chrome OS, iOS 5 và Android 3.2 trở lên			            ', 10, 0, 0, 0, 0, NULL, '2019-06-17 15:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 118437000, 2, 1, 'ok', '2019-06-17 17:50:02', '2019-06-17 17:51:16'),
(2, 48015000, 2, 0, '', '2019-06-17 18:19:29', '2019-06-17 18:19:29'),
(3, 48015000, 2, 0, 'Em ở số nhà ... ngõ ... đối diện ...', '2019-06-18 02:25:46', '2019-06-18 02:25:46'),
(4, 240075000, 2, 0, 'ok', '2019-06-18 02:55:11', '2019-06-18 02:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avartar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avartar`, `status`, `token`, `created_at`, `updated`) VALUES
(1, 'Nguyễn Mạnh Cường', 'manhcuong@gmail.com', '0968940899', 'hà nội', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL, NULL),
(2, 'Phạm Thị Yến', 'phamyen@gmail.com', '09680123456', 'Học viện kỹ thuật Mật Mã', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL, NULL),
(3, 'Vũ Văn Diện', 'vudien@gmail.com', '0968444666', 'hà nội', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL, NULL),
(4, 'Vũ Thị Minh Anh', 'minhanh@gmail.com', '0968222888', 'Hà Nội', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
