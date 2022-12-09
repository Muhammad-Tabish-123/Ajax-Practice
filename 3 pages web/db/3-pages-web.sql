-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 02:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3-pages-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescrip` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `inCart` tinyint(1) NOT NULL,
  `pQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdescrip`, `pimage`, `price`, `inCart`, `pQuantity`) VALUES
(7, 'SAMSUNG Galaxy S22 Ultra', 'Factory Unlocked Android Smartphone, 128GB, 8K Camera & Video, \r\nBrightest Display Screen, S Pen, Long Battery Life, \r\nFast 4nm Processor, US Version, Phantom Black\r\n<br><br>\r\n8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunn', 'S22.jpg', 1100, 0, 0),
(8, 'SAMSUNG Galaxy S21', '5G Cell Phone, Factory Unlocked Android Smartphone, 128GB, 120Hz Display Screen, Pro Grade Camera, All Day Intelligent Battery, US Version, Olive\r\n\r\nSMOOTH SCROLLING: The 120Hz display delivers a super smooth scroll, with optimized refresh rate, and a fas', 'S21.jpg', 900, 0, 0),
(9, 'SAMSUNG Galaxy A53 5G', 'Factory Unlocked Android Smartphone, 128GB, 6.5” FHD Super AMOLED Screen, Long Battery Life, US Version, Black\r\n\r\nLONG-LASTING BATTERY: Your busy life deserves a battery built for busy; Whether you’re taking a video call on your commute, catching up on yo', 'A53.jpg', 500, 0, 0),
(10, 'SAMSUNG Galaxy Z Flip', 'FLEX YOUR BEST ANGLE: With Flex Mode, just unfold your mobile phone’s screen to your best angle for hands-free pics and video calls; Choose what you want to capture, set it down, stand back and shoot your best shot.Form_factor : Flip\r\nA CAMERA THAT GOES S', 'Z Flip.jpg', 1100, 0, 0),
(11, 'SAMSUNG Galaxy Z Fold 4', 'FLEX MODE: Free up your hands with Flex Mode on the Galaxy Z Fold4; This smartphone stands on its own so you can take notes during a conference call or follow along with instructional videos in real time\r\nHANDS FREE VIDEO: Don’t stay stuck to your cellpho', 'Z Fold 4.jpg', 1355, 0, 0),
(12, 'Apple iPhone 12, 64GB', 'The product is refurbished, fully functional, and in excellent condition. Backed by the 90-day Amazon Renewed Guarantee.\r\n- This pre-owned product has been professionally inspected, tested and cleaned by Amazon qualified vendors. It is not certified by Ap', 'iPhone 12.jpg', 499, 0, 0),
(13, 'Apple iPhone XR, 64GB', 'This phone is unlocked and compatible with any carrier of choice on GSM and CDMA networks (e.g. AT&T, T-Mobile, Sprint, Verizon, US Cellular, Cricket, Metro, Tracfone, Mint Mobile, etc.).\r\nTested for battery health and guaranteed to come with a battery th', 'iPhone XR.jpg', 569, 0, 0),
(14, 'Phone 13 Pro, 512GB', 'Tested for battery health and guaranteed to come with a battery that exceeds 90% of original capacity.\r\nInspected and guaranteed to have minimal cosmetic damage, which is not noticeable when the device is held at arm’s length. Successfully passed a full d', 'iPhone 13 Pro.jpg', 699, 0, 0),
(15, 'iPhone 13 Pro Max, 256GB', 'Tested for battery health and guaranteed to come with a battery that exceeds 90% of original capacity.\r\nInspected and guaranteed to have minimal cosmetic damage, which is not noticeable when the device is held at arm’s length. Successfully passed a full d', 'iPhone 13 Pro Max.jpg', 1399, 0, 0),
(16, 'Apple iPhone SE, 64GB', 'This phone is unlocked and compatible with any carrier of choice on GSM and CDMA networks (e.g. AT&T, T-Mobile, Sprint, Verizon, US Cellular, Cricket, Metro, Tracfone, Mint Mobile, etc.).\r\nTested for battery health and guaranteed to come with a battery th', 'iPhone SE.jpg', 500, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
