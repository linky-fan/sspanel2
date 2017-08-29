-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2017 at 01:48 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sspanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `rootid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `datetime` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `type` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `content`, `rootid`, `userid`, `datetime`, `status`, `type`, `contact`, `phone`) VALUES
(1, 'https://bwh1.net/vps-hosting.php', '<p>a<a href=\"https://bwh1.net/vps-hosting.php\">https://bwh1.net/vps-hosting.php</a></p>\n', 0, 1, 1491560117, 1, '', '', ''),
(2, '18370894188', '<p>testetsetsetsetse</p>\n', 0, 17, 1501320751, 1, '', '', ''),
(3, 'sdf', '<p>asdf</p>\n', 0, 1, 1501863760, 1, '', '', ''),
(4, 'trest1', '<p>sdfsdfsd</p>\n', 0, 1, 1501864229, 1, '意见反馈', '1099083298', '18370894188');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
