-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 09:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mvcphu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'phu', 'phu@gmail.com', 'phuAdmin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'admin', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `binhluan_id` int(11) NOT NULL,
  `tenbinhluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binhluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`binhluan_id`, `tenbinhluan`, `binhluan`, `product_id`, `blog_id`, `image`) VALUES
(3, 'manh doan', 'abc\r\n', 22, 0, ''),
(4, 'Doanf', 'adadasd', 22, 0, ''),
(5, 'Doanf', 'adadasd', 22, 0, ''),
(6, 'Doanf', 'adadasd', 22, 0, ''),
(7, 'Doanf', 'dasdas', 22, 0, ''),
(8, 'adsadsa', 'đấ', 22, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(6, 'Samsum'),
(7, 'Apple'),
(8, 'Huawei'),
(9, 'Oppo'),
(10, 'Dell'),
(12, 'Viettel'),
(13, 'OEM'),
(14, 'TP-Link'),
(15, 'Sam sung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(1, 7, '0omn99jipm7namf6srjhj4kva2', 'Điện thoại samsung S10+', '12000000', 3, '6deaf01c29.jpg'),
(2, 7, 'up8l6ff347ik19fsoa18qff452', 'Điện thoại samsung S10+', '12000000', 1, '6deaf01c29.jpg'),
(3, 7, '9lmppj5kalib60o1s7soiiaqo4', 'Điện thoại samsung S10+', '12000000', 1, '6deaf01c29.jpg'),
(4, 8, '9lmppj5kalib60o1s7soiiaqo4', 'Điện thoại Huawei Pro', '5000000', 1, 'd611667f13.jpg'),
(8, 6, 'c6o66m1rfnpfhqmdffk77pu083', 'Máy ảnh Dell A503', '10000000', 1, 'dbb417a309.jpg'),
(9, 8, '3e1a29t1pgb3ock6s8hi8ho2d5', 'Điện thoại Huawei Pro', '5000000', 1, 'd611667f13.jpg'),
(13, 17, 'grfc2bmmrmga6mn5q7484i87f2', 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu', '1099000', 1, '785e8d373d.jpg'),
(14, 19, '39p4lauudimhcb91i8mhna4bf2', 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 3, '6d72eb58ae.jpg'),
(18, 18, '3eg83l0tcklmed91e5h8raqsa2', 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', 1000, '32942e9470.jpg'),
(19, 19, 'hlkksgphiqn70b37sjg3u89unu', 'Đồng hồ thông Minh Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 1, '6d72eb58ae.jpg'),
(21, 22, 'jqm7etpvn2ujshovgtee9e0rbv', 'Máy sever apple sql', '60000', 2, '643929ce40.jpg'),
(23, 22, 'jqm7etpvn2ujshovgtee9e0rbv', 'Apple New For Mysql Server', '60000', 1, '643929ce40.jpg'),
(25, 17, '0h8285fg9f8fjt4nmsdhi45c9u', 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu\r\n', '1099000', 1, '785e8d373d.jpg'),
(26, 19, 'c1ol14ndm5r3ta5hgvcjm9359s', 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 3, '6d72eb58ae.jpg'),
(27, 20, 'dnng3rqo02q3tbh7tcol8mplad', 'Router Wifi 4G Huawei 300Mbps B593S-12', '1240000', 1, '49b106217c.jpg'),
(29, 19, 'cvo7pabh1aucm3q04h217mh4rf', 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 2, '6d72eb58ae.jpg'),
(30, 19, 'cvo7pabh1aucm3q04h217mh4rf', 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 1, '6d72eb58ae.jpg'),
(31, 17, 'fkgnsrvfu7fghsiq2flrvcdreh', 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu', '1099000', 1, '785e8d373d.jpg'),
(32, 17, 'fkgnsrvfu7fghsiq2flrvcdreh', 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - HÃ ng Nháº­p Kháº©u', '1099000', 1, '785e8d373d.jpg'),
(33, 18, 'q2o64eg9f5q20nluksjia8qa1j', 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', 1, '32942e9470.jpg'),
(34, 18, 'q2o64eg9f5q20nluksjia8qa1j', 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', 1, '32942e9470.jpg'),
(36, 17, 'u58dtc76lpovdb5larqb1drqmt', 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập khẩu', '1099000', 1, '785e8d373d.jpg'),
(38, 22, '5a48261i3qgdg3hctemssspsji', 'máy xay sinh tố panasonic 1202', '60000', 1, '643929ce40.jpg'),
(40, 22, 'u90o7nrj3t4no566lidbclneag', 'máy xay sinh tố panasonic 1202', '60000', 1, '643929ce40.jpg'),
(42, 19, 'u90o7nrj3t4no566lidbclneag', 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', '9700000', 1, '6d72eb58ae.jpg'),
(43, 22, 'kngfag27n2rhl5ngngmn1lfcsd', 'máy xay sinh tố panasonic 1202', '60000', 1, '643929ce40.jpg'),
(44, 22, 'kngfag27n2rhl5ngngmn1lfcsd', 'máy xay sinh tố panasonic 1202', '60000', 1, '643929ce40.jpg'),
(46, 18, '5err9amctbtg0eb09vmms6sk7d', 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', 1, '32942e9470.jpg'),
(90, 22, '5mflh78skh5f6bh6b7qkvf5vrc', 'máy xay sinh tố panasonic 1202', '60000', 1, '643929ce40.jpg'),
(91, 18, '51t2k3ljnur7nhncq6cis9rdmj', 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', 1, '32942e9470.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(3, 'Laptop'),
(4, 'Desktop'),
(5, 'Mobile Phones'),
(6, 'Accessories'),
(7, 'Software'),
(15, 'Test'),
(16, 'Đồng hồ thông Minh'),
(17, 'Máy ok'),
(18, 'Dell 3800 hot'),
(19, 'Dell Sale');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_compare`
--

INSERT INTO `tbl_compare` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(2, 7, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(17, 'Mạnh Đoàn', 'Trần Đăng Ninh', 'HNUE', 'hn', '1222122', '0398814494', 'manhdoan1', '73a080420c8d02f53856b4ca5ddce4f9'),
(18, 'Longgggg', 'ngo 3 pham van dong, thai binh', 'hanoi', 'hcm', '131313123213131', '1698814494', 'hong1', '25db9dc6fcfbbc3d57d7bc2747c4618d'),
(19, 'Hongf', 'ngo 3 pham van dong, thai binh', 'hanoi', 'hn', '131313123213131', '1698814494', 'hong2', '84d95b10661407715024dea89b567ddf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(60, 22, 'máy xay sinh tố panasonic 1202', 17, 2, '120000', '643929ce40.jpg', 1, '2020-05-24 23:23:53'),
(64, 17, 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu', 19, 1, '1099000', '785e8d373d.jpg', 1, '2020-05-26 10:26:28'),
(65, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', 19, 2, '5179800', '32942e9470.jpg', 0, '2020-05-26 10:36:42'),
(66, 17, 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu', 19, 3, '3297000', '785e8d373d.jpg', 0, '2020-05-26 10:36:42'),
(67, 19, 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', 18, 1, '9700000', '6d72eb58ae.jpg', 1, '2020-05-26 11:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `productQuantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_soldout` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_remain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `product_code`, `productQuantity`, `product_soldout`, `product_remain`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(6, 'Máy ảnh Dell A503', 'MH1122', '50', '0', '50', 3, 10, '<p>M&aacute;y t&iacute;nh Dell A503M&aacute;y t&iacute;nh Dell A503M&aacute;y t&iacute;nh Dell A503M&aacute;y t&iacute;nh Dell A503M&aacute;y t&iacute;nh Dell A503</p>', 1, '10000000', 'dbb417a309.jpg'),
(7, 'Điện thoại samsung S10+', 'MH1123', '60', '0', '60', 5, 6, 'Điện thoại đẹp', 0, '12000000', 'f71a0935f3.jpg'),
(8, 'Điện thoại Huawei Pro', 'MH1124', '70', '0', '70', 5, 8, 'Điện thoại xịn', 0, '5000000', '03ae5f8327.jpg'),
(9, 'IPad Xsmax', 'MH1125', '100', '0', '100', 3, 7, '<p>IPad XsmaxIPad XsmaxIPad XsmaxIPad XsmaxIPad XsmaxIPad XsmaxIPad XsmaxIPad Xsmax</p>', 0, '8000000', '7418d9b02e.jpg'),
(13, 'Đồng hồ thông Minh Forerunner', 'MH1126', '30', '0', '30', 16, 13, '<p>Chá»‘ng nÆ°á»›c 5ATM</p>\r\n<p>Pin sáº¡c Lithium-ion</p>\r\n<p>Cá»•ng káº¿t ná»‘i: Bluetooth Smart vaÌ€ ANT+</p>\r\n<p>Bá»™ nhá»›: 200 giá» dá»¯ liá»‡u hoáº¡t Ä‘á»™ng</p>\r\n<p>M&agrave;n h&igrave;nh: 215 x 180 pixel</p>', 1, '4690000', '25ebd2d0ff.jpg'),
(15, 'phần mềm diệt Virus BKAV Profressional 1 PC tháng', 'MH1127', '20', '0', '20', 7, 9, '<p>Pháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ngPháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ngPháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ngPháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ngPháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ngPháº§n Má»m Diá»‡t Virus BKAV Profressional 1 PC 12 Th&aacute;ng</p>', 0, '195000', '4167b1a4c5.jpg'),
(16, 'TP - Link TL- WN725N - USB Wifi Nano ', 'MH1128', '90', '0', '90', 17, 14, '<p>Thiáº¿t káº¿ thu nhá» cá»±c gá»n, cá»±c xinh</p>\r\n<p>Tá»‘c Ä‘á»™ kh&ocirc;ng d&acirc;y 150Mbps</p>\r\n<p>M&atilde; h&oacute;a WPA/WPA2 - Báº£o máº­t n&acirc;ng cao</p>\r\n<p>ÄÄ©a CD Ä‘i k&egrave;m cho Hoáº¡t Ä‘á»™ng dá»… d&agrave;ng</p>\r\n<p>Bao b&igrave; sáº£n pháº©m c&oacute; thá»ƒ thay Ä‘á»•i theo tá»«ng Ä‘á»£t h&agrave;ng nháº­p</p>', 0, '125000', '6c53b185b0.jpg'),
(17, 'ổ cứng SSD Samsung 860 Evo 250GB Sata III 2.5 inch - Hàng Nhập Khẩu', 'MH1129', '100', '1', '99', 7, 6, '<p>2.5 inch - H&agrave;ng Nháº­p Kháº©u</p>', 0, '1099000', '785e8d373d.jpg'),
(18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', 'MH1130', '120', '8', '112', 3, 10, '<p>Chip: Intel Core i7-8750H (2.2GHz up to 4.1GHz, 9MB)</p>\r\n<p>RAM: 8GB DDR4 2400MHz</p>\r\n<p>Phần cứng: HDD 1TB 5400rpm + 128GB SSD M.2</p>\r\n<p>Chipset đồ họa: NVIDIA GeForce GTX 1050Ti 4GB GDDR5</p>\r\n<p>M&agrave;n h&igrave;nh: 15.6 inch Full HD (1920 x 1080) IPS, Anti-Glare, LED Backlit Display</p>\r\n<p>Hệ điều hành: Windows 10 Home</p>\r\n<p>Pin: 4 Cell 56 Whrs</p>', 0, '2589900', '32942e9470.jpg'),
(19, 'Đồng hồ thông Minh Apple Watch Series 4 GPS Aluminum Case With Sport Loop', 'MH1140', '65', '3', '62', 16, 7, 'Đồng hồ đẹp', 0, '9700000', '6d72eb58ae.jpg'),
(20, 'Router Wifi 4G Huawei 300Mbps B593S-12', 'MH1150', '70', '10', '65', 17, 8, 'Router 2 râu cực mạnh truyền xa đến 20m', 0, '1240000', '49b106217c.jpg'),
(21, 'tủ lạnh panasonic', 'MH1115', '48', '0', '61', 17, 14, 'Tủ lạnh Nhật Bản tốt cho sức khỏe', 0, '50000', 'ad351ef94f.png'),
(22, 'máy xay sinh tố panasonic 1202', 'MH1111', '95', '21', '74', 17, 14, 'Máy xay sinh tố xay hoa quả tốt cho sức khỏe', 0, '60000', '643929ce40.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(12, 'ảnh đại học', '5ae733a9ad.jpg', 1),
(13, 'bannenee', '4171477cb5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warehouse`
--

CREATE TABLE `tbl_warehouse` (
  `id_warehouse` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `sl_nhap` varchar(50) NOT NULL,
  `sl_ngaynhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_warehouse`
--

INSERT INTO `tbl_warehouse` (`id_warehouse`, `id_sanpham`, `sl_nhap`, `sl_ngaynhap`) VALUES
(1, 22, '5', '2020-05-19 18:31:22'),
(3, 21, '3', '2020-01-21 18:42:59'),
(4, 20, '5', '2020-05-13 18:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(3, 3, 6, 'MÃ¡y tÃ­nh Dell A503', '10000000', 'dbb417a309.jpg'),
(4, 3, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg'),
(5, 17, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg'),
(6, 17, 22, 'máy xay sinh tố panasonic 1202', '60000', '643929ce40.jpg'),
(7, 19, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`binhluan_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  ADD PRIMARY KEY (`id_warehouse`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `binhluan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  MODIFY `id_warehouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
