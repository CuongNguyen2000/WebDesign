-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 09:42 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storeman`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'dzunglm', '123'),
(3, 'Cn1122000', 'cuong123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatId` int(11) NOT NULL,
  `CatName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'SamSung'),
(2, 'Sony'),
(3, 'Apple'),
(4, 'Nokia'),
(5, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CusId` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderId` varchar(10) NOT NULL,
  `OrderDate` date NOT NULL,
  `CusId` int(11) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderId` varchar(10) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `Quantitty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Price` varchar(11) NOT NULL,
  `Operatingsystem` varchar(50) NOT NULL,
  `rearcamera` varchar(100) NOT NULL,
  `frontcamera` varchar(100) NOT NULL,
  `rom` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `battery` varchar(50) NOT NULL,
  `CatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Image`, `Price`, `Operatingsystem`, `rearcamera`, `frontcamera`, `rom`, `ram`, `battery`, `CatId`) VALUES
('1', 'cuong', 'images/1_iphone6.jpg', '2.679.000', 'eret', '4 camera 12 MP', '1.2 MP', '4', '16GB', '252', 1),
('A001', 'Iphone 6', 'images/1_iphone6.jpg', '2.679.000', 'IOS 10', '8 MP, Quay phim FullHD 1080p@60fps, HDR, Panorama', '2.2 MP', '32GB', '1GB', '1810 mAh', 3),
('A002', 'Iphone 8 plus', 'images/3_iphone8plus.jpg', '8.979.000', 'IOS 11', '2 camera 12 MP,  Quay phim 4K 2160p@60fps, HDR, Panorama, Optical image stabilization (OIS)', '7 MP, Wide-angle camera, Selfie backlit HDR', '64GB', '3GB', '2691 mAh', 3),
('A003', 'Iphone X', 'images/2_iphoneX.jpg', '11.179.000', 'IOS 11.1.1', 'Dual: 12 MP (f/1.8, 28mm) + 12 MP (f/2.4, 52mm), OIS, phase detection autofocus, 2x optical zoom, qu', '7 MP', '64GB', '3GB', '2716 mAh', 3),
('H001', 'Huawei P30 Pro', 'images/1_huaweiP30pro.jpg', '15.990.000', 'Android 9.0 (Pie); EMUI 9.1', '40 MP + 20 MP + 8 MP', '32 MP', '128GB', '8GB', '4200 mAh', 5),
('H002', 'Huawei Nova 3i', 'images/2_huaweinova3i.jpg', '4.390.000', 'Android 8.1 (Oreo)', '16 MP, f/2.2, PDAF 2 MP, depth sensor LED flash, HDR, panorama', '24MP, 2MP, depth sensor', '128GB', '4GB', '3340 mAh', 5),
('H003', 'Huawei Mate 30 Pro', 'images/3_huaweimate30pro.jpg', '20.590.000', 'Android 10 ; EMUI 10', '40 MP + 8 MP + 40 MP', '32MP', '128/256GB', '8GB', '4500 mAh', 5),
('N001', 'Nokia 7.2', 'images/1_nokia7.2.jpg', '4.890.000', 'Android 9.0 (Pie); Andoid One', '48 MP + 8 MP + 5 MP', '20MP, f/2.0', '64GB', '4GB', '3500 mAh', 4),
('N002', 'Nokia 8.1', 'images/2_nokia8.1.jpg', '5.890.000', 'Andoid One', '12 MP + 13 MP, 2160p@30fps, 1080p@30fps (gyro-EIS)', '20 MP, f/2.0, 0.9µm', '64GB', '4GB', '3500 mAh', 4),
('N003', 'Nokia 6.1 plus', 'images/3_nokia6.1plus.jpg', '2.790.000', 'Android 8 (Oreo), Andoid One', '16 MP, phase detection autofocus, dual-LED dual-tone flash', '16MP', '64GB', '4GB', '3060 mAh', 4),
('S001', 'Sony Xperia 5', 'images/1_sonyxperia5.jpg', '19.990.000', 'Android 9.0 (Pie)', '3 camera 12 MP', '6MP', '128GB', '6GB', '3140 mAh', 2),
('S002', 'Sony Xperia 1', 'images/2_sonyxperia1.jpg', '12.990.000', 'Android 9.0 (Pie)', '3 camera 12 MP', '8MP', '128GB', '6 GB', '3330 mAh', 2),
('S003', 'Sony Xperia XZ2', 'images/3_sonyxperiaxz2.jpg', '5.990.000', 'Android 8.0 (Oreo)', '19 MP', '5MP', '64GB', '4GB', '3180 mAh', 2),
('SS001', 'Samsung Galaxy S9', 'images/1_samsungS9.jpg', '19.990.000', 'Android 8.1 (Oreo)', '12 MP, f/1.5-2.4, 26mm (wide), 1/2.55\", 1.4µm, OIS, dual pixel PDAF', '8MP', '64GB', '4GB', '3000 mAh', 1),
('SS002', 'Samsung Galaxy J7 Pro', 'images/2_samsungJ7pro.jpg', '5.399.000', 'Android 7.0', '13 MP, HDR, Panorama', '13MP', '32GB', '3GB', '3600 mAh', 1),
('SS003', 'Samsung Galaxy Note 10+', 'images/3_samsungnote10plus.jpg', '26.990.000', 'Android 9.0 (Pie), One UI 1.5', '12MP (f / 1.5-2.4, OIS, 77 degrees) + 16MP (f / 2.2, 123 degrees) + 12MP (f / 2.1, OIS, 45 degrees) ', '10MP (f/2.2, 80 degrees, autofocus)', '256/512GB', '12GB', '4300 mAh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'hahaha', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `CusId` (`CusId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderId`,`ProductId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `foreignkey_product_catid` (`CatId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CusId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CusId`) REFERENCES `customer` (`CusId`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignkey_product_catid` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
