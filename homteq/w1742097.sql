-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 07:40 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w1742097`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `prodId` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `prodId`, `qty`) VALUES
(1, 1, 2),
(2, 1, 7),
(106, 0, 0),
(107, 1, 3),
(108, 0, 0),
(109, 2, 4),
(110, 0, 0),
(111, 2, 4),
(112, 0, 0),
(113, 2, 4),
(114, 1, 1),
(115, 0, 0),
(116, 0, 0),
(117, 0, 0),
(118, 1, 1),
(119, 0, 0),
(120, 1, 1),
(121, 0, 0),
(122, 1, 1),
(123, 2, 1),
(124, 1, 1),
(125, 1, 1),
(126, 1, 1),
(127, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE `orderline` (
  `orderLineId` int(4) NOT NULL,
  `orderNo` int(4) NOT NULL,
  `prodId` int(4) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `subTotal` decimal(8,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNo` int(4) NOT NULL,
  `userId` int(4) NOT NULL,
  `orderDateTime` date NOT NULL,
  `orderTotal` decimal(8,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNo`, `userId`, `orderDateTime`, `orderTotal`) VALUES
(46, 1, '2020-03-20', '22304.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Amazon echo Smart Speaker', 's11.jpg', 's1.jpg', 'Amazon introduced a new version of its popular Echo smart speaker at a launch event in September 2019', 'lexa and Echo devices are built with multiple layers of privacy protection. For example, Echo has a microphone off button that electronically disconnects the microphones. You also have control over your voice recordings. You can view, hear, or delete them at any time.\r\nUse your Alexa devices like an intercom and talk to any room in the house with Drop In and Announcements. Let everyone know dinner is ready, or remind the kids that it’s bedtime. You can also make hands-free calls to almost any number in the United States, Canada, Mexico, and the United Kingdom to stay in touch with family.', '74.00', 10),
(2, 'Samsung QLED 8K TV', 's22.jpg', 'b2.gif', 'Television history has been a remarkable march from standard definition to HD to 4K. And now Samsung is again leading the way as the first to bring 8K to the market. 8K delivers 4 times the resolution of 4K and 16 times the resolution of HD, which transforms flat images into a deeper, more lifelike experience.', '8K Direct Full Array technology lights up your picture in the most precise way, with LEDS directly behind the image that are points of light that individually turn on and off. This precise control improves contrast, reduces blooming and makes bright scenes really pop. All giving you the most precise picture possible.\r\nThe 8K Quantum Processor is our best processor to hit the market and the only one that enables today’s content to be remastered into stunning 8K detail. It also optimizes sound for each scene, adjusts brightness to the room’s environment and with Universal Guide customizes content recommendations. All of which makes it our most powerful processor ever.\r\nYour QLED 8K TV can mirror all aspects of your life. Ambient Mode displays images that reflect your lifestyle. Universal Guide delivers nuanced content with simplicity. All making your QLED 8K TV tailored to you like no TV ever before.\r\n\r\n', '3705.00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `useres`
--

CREATE TABLE `useres` (
  `userId` int(4) NOT NULL,
  `userType` varchar(1) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userSName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTellNo` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useres`
--

INSERT INTO `useres` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTellNo`, `userEmail`, `userPassword`) VALUES
(1, 'C', 'Yasas', 'Mahima', 'Ambalangoda', '80332', '0719076633', 'yasasymahima@gmail.com', '123'),
(20, 'C', 'yasas', 'Mahima', 'LOndon', '123', '0719076633', 'yasasymahim1a@gmail.com', 'Abc@123'),
(23, 'C', 'yasas', 'Mahima', ' london', '123', '0719076633', 'yasas1ymahima@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`orderLineId`),
  ADD KEY `orderNo` (`orderNo`),
  ADD KEY `prodId` (`prodId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNo`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `useres`
--
ALTER TABLE `useres`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `orderline`
--
ALTER TABLE `orderline`
  MODIFY `orderLineId` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useres`
--
ALTER TABLE `useres`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `orderline_ibfk_1` FOREIGN KEY (`orderNo`) REFERENCES `orders` (`orderNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderline_ibfk_2` FOREIGN KEY (`prodId`) REFERENCES `product` (`prodId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `useres` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
