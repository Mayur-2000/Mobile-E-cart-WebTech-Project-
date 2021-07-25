-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 09:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('mayur', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `dev_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_num` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`dev_name`, `mod_num`, `company`, `image`, `description`, `price`) VALUES
('iphone 7', 'A1778', 'Apple', 'iphone_7_plus.png', 'The iPhone 7 features a 28mm 12-megapixel camera with optical image stabilization, a wider f/1.8 aperture 6-element lens, wide color capture, and a revamped Apple image signal processor, all of which result in brighter, sharper, more detailed photos, even in low-light conditions', '44000.00'),
('iphone 7 plus', 'A1785', 'Apple', 'IPhone_7_Plus.png', 'The Apple iPhone 7 Plus is a smartphone that was tested with the iOS 10.0. 2 operating system. This model weighs 6.6 ounces, has a 5.5 inch touch screen display, 12-megapixel main camera, and 7-megapixel selfie camera. It comes with 3GB of RAM.', '33000.00'),
('iphone 8', 'A1792', 'Apple', 'IPhone_8.png', 'The iPhone 8 features a 4.7-inch display with a resolution of 1334 by 750 with 326 pixels per inch and a 1400:1 contrast ratio, while the iPhone 8 Plus features a 5.5-inch display with a 1920 by 1080 resolution, 401 pixels per inch, and a 1300:1 contrast ratio.', '55499.00'),
('iphone X', 'A1901', 'Apple', 'Iphone_X.jpg', 'The iPhone X was Apples flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max', '72499.00'),
('OnePlus 8', 'A8000', 'OnePlus', 'oneplus8.jpg', 'The OnePlus 8 has a 6.55-inch AMOLED panel with sloping sides, a wide colour gamut, and a hole-punch cutout in the upper left corner. The 90Hz refresh rate makes usage in general feel fluid and snappy. It also has an in-display fingerprint sensor, which is super quick at authentication.', '41999.00'),
('OnePlus 8 Pro', 'A8001', 'OnePlus', 'oneplus8p.jpg', 'The OnePlus 8 Pro is an IP68 rated phone that is resistant to dust and water. It comes with an impressive 6.78-inch AMOLED panel that has a resolution of 1440x3168 pixels with high color accuracy and HDR10+ support. Also, it can run at 120Hz at the QHD+ resolution.', '54990.00'),
('OnePlus Nord', 'AN000', 'OnePlus', 'oneplusn.jpg', 'OnePlus Nord smartphone runs on Android v10 (Q) operating system. The phone is powered by Octa core (2.4 GHz, Single core, Kryo 475 + 2.2 GHz, Single core, Kryo 475 + 1.8 GHz, Hexa Core, Kryo 475) processor. It runs on the Qualcomm Snapdragon 765G Chipset', '27999.00'),
('Sony Xperia XZ2 Compact', 'D2302', 'Sony', 'sonyz2.jpg', 'The phone comes with a 5.00-inch touchscreen display with a resolution of 1080x2160 pixels. Sony Xperia XZ2 Compact is powered by an octa-core Qualcomm Snapdragon 845 processor. It comes with 4GB of RAM. The Sony Xperia XZ2 Compact runs Android 8.0 and is powered by a 2780mAh non-removable battery.', '72042.00'),
('Sony Xperia XA2 Ultra', 'D5325', 'Sony', 'sonya2u.jpg', 'Sony Xperia XA2 Ultra smartphone was launched in January 2018. The phone comes with a 6.00-inch touchscreen display with a resolution of 1080x1920 pixels. Sony Xperia XA2 Ultra is powered by an octa-core Qualcomm Snapdragon 630 processor. It comes with 4GB of RAM.', '7416.00'),
('Sony Xperia XA2', 'E4215', 'Sony', 'sonya2.jpg', 'Sony Xperia XA2 Summary Sony Xperia XA2 smartphone was launched in January 2018. The phone comes with a 5.20-inch touchscreen display with a resolution of 1080x1920 pixels. Sony Xperia XA2 is powered by an octa-core Qualcomm Snapdragon 630 processor. It comes with 3GB of RAM.', '21990.00'),
('Sony Xperia XA1 Plus', 'F2125', 'Sony', 'sonya1.jpg', 'Sony Xperia XA1 Plus smartphone was launched in August 2017. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080x1920 pixels. Sony Xperia XA1 Plus is powered by a 1.6GHz octa-core MediaTek Helio P20 (MT6757) processor. It comes with 3GB of RAM.', '15990.00'),
('Google Pixel 4 XL', 'G-2PW4100', 'Google', 'gp4xl.jpg', 'The phone comes with a 6.30-inch touchscreen display with a resolution of 1440x3040 pixels at a pixel density of 537 pixels per inch (ppi) and an aspect ratio of 19:9. Google Pixel 4 XL is powered by an octa-core Qualcomm Snapdragon 855 processor', '83900.00'),
('Google Pixel 4', 'G-2PW4200', 'Google', 'gp4.jpg', 'The Google Pixel 4 gets a 5.7-inch screen, which has an OLED display having 1,080 x 2,280 pixels screen resolution. It results in a pixel density of 443 PPI. It also gets Corning Gorilla Glass v5 for screen protection. The device has a non-expandable 64GB internal storage', '79990.00'),
('OnePlus 7', 'mi', 'xiaomi', 'oneplusn.jpg', 'Powering the smartphone is an Exynos 9611 SoC that is capable of delivering decent performance. It is available in 4GB and 6GB RAM variants. It also comes in 64GB and 128GB storage variants. The Galaxy M21 sports a triple camera setup with the highlight being the 48-megapixel primary scanner.', '4000.00'),
('Nokia 2.6', 'NOK26', 'Nokia', 'nokia26.jpg', 'Nokia 2.6 smartphone has a IPS LCD display. It measures 154 mm x 75.8 mm x 7.8 mm and weighs 169 grams. The screen has a resolution of Full HD (1080 x 1920 pixels) and 401 ppi pixel density.', '9000.00'),
('Nokia 5.3', 'NOK53', 'Nokia', 'nokia53.jpg', 'Nokia 5.3 smartphone runs on Android v10  operating system. The phone is powered by Octa core 2 GHz, Quad core, Kryo 260 + 1.8 GHz, Quad core, Kryo 260 processor. It runs on the Qualcomm Snapdragon 665 Chipset. It has 3 GB RAM and 64 GB internal storage.', '14000.00'),
('Nokia 7.2', 'NOK72', 'Nokia', 'nokia72.jpg', 'Nokia 7.2 Android smartphone. Announced Sep 2019. Features 6.3″ IPS LCD display, Snapdragon 660 chipset, 3500 mAh battery, 128 GB storage, 6 GB RAM', '18500.00'),
('Redmi 9', 'RED090', 'Xiaomi', 'redmi9.jpg', 'The phone comes with a 6.53-inch touchscreen display with a resolution of 720x1600 pixels and an aspect ratio of 20:9. Redmi 9 is powered by an octa-core MediaTek Helio G35 processor. It comes with 4GB of RAM. The Redmi 9 runs Android 10 and is powered by a 5000mAh battery.', '8999.00'),
('Redmi 9 Prime', 'RED09P', 'Xiaomi', 'redmi9p.jpg', 'Redmi 9 Prime comes with Octa-core Helio G80 processor and upto 2.0GHz clock speed. It also comes with 13 MP Quad Rear camera setup + Ultra-wide and Macro mode along with 8 MP front camera.', '9999.00'),
('Redmi Note 9', 'REDN90', 'Xiaomi', 'redmin9.jpg', 'The Redmi Note 9 is an entry-level offering from Xiaomi in the Note 9 series. It shares the same design as the Redmi Note 9 Pro and the Redmi Note 9 Pro Max. It sports a 6.53-inch display with a hole-punch on the top left corner. There is Corning Gorilla Glass 5 to protect the display', '11999.00'),
('Samsung Galaxy M31s', 'SAMGM31', 'Samsung', 'samgalm31.jpg', 'Samsung Galaxy M31 smartphone runs on Android v10 (Q) operating system. The phone is powered by Octa core (2.3 GHz, Quad core, Cortex A73 + 1.7 GHz, Quad core, Cortex A53) processor. It runs on the Samsung Exynos 9 Octa 9611 Chipset', '22580.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `slno` int(3) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datein` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateout` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`slno`, `Email`, `datein`, `dateout`) VALUES
(15, 'mayurmayur729@gmail.com', '2021/06/26 00:41:48', '2021/06/26 00:44:10'),
(16, 'mayurmayur729@gmail.com', '2021/06/26 00:46:38', '2021/06/26 19:16:34'),
(17, 'mayurmayur729@gmail.com', '2021/06/26 19:16:44', NULL),
(18, 'mayurmayur729@gmail.com', '2021/06/28 13:09:44', '2021/06/28 13:09:53'),
(19, 'mayurmayur729@gmail.com', '2021/06/28 14:19:13', NULL),
(20, 'mayurmayur729@gmail.com', '2021/06/28 14:24:00', '2021/06/28 14:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) DEFAULT NULL,
  `mod_num` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dev_price` decimal(8,2) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `mod_num`, `dev_price`, `quantity`) VALUES
(7, 'SAMG21', '15249.00', 1),
(8, 'D5325', '74164.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Email`, `psw`) VALUES
('mayurmayur729@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`mod_num`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `slno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
