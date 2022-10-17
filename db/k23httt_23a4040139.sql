-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k23httt_23a4040139`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai_may`
--

CREATE TABLE `loai_may` (
  `loai_may_id` int(11) NOT NULL,
  `ten_loai_may` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai_may`
--

INSERT INTO `loai_may` (`loai_may_id`, `ten_loai_may`) VALUES
(1, 'Desktop'),
(2, 'Laptop'),
(3, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `may_tinh`
--

CREATE TABLE `may_tinh` (
  `may_tinh_id` int(11) NOT NULL,
  `ten_may_tinh` varchar(200) NOT NULL,
  `loai_may_id` int(11) NOT NULL,
  `mo_ta_may_tinh` varchar(300) NOT NULL,
  `gia_ban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai_may`
--
ALTER TABLE `loai_may`
  ADD PRIMARY KEY (`loai_may_id`);

--
-- Indexes for table `may_tinh`
--
ALTER TABLE `may_tinh`
  ADD PRIMARY KEY (`may_tinh_id`),
  ADD KEY `loai_may_id` (`loai_may_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loai_may`
--
ALTER TABLE `loai_may`
  MODIFY `loai_may_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `may_tinh`
--
ALTER TABLE `may_tinh`
  MODIFY `may_tinh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `may_tinh`
--
ALTER TABLE `may_tinh`
  ADD CONSTRAINT `may_tinh_ibfk_1` FOREIGN KEY (`loai_may_id`) REFERENCES `loai_may` (`loai_may_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
