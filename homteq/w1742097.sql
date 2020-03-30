-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 10:31 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
