-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 03:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(5) NOT NULL,
  `time_d` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `school` varchar(200) COLLATE utf8_bin NOT NULL,
  `e` varchar(50) COLLATE utf8_bin NOT NULL,
  `t` varchar(50) COLLATE utf8_bin NOT NULL,
  `moviename` varchar(30) COLLATE utf8_bin NOT NULL,
  `rong` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `time_d`, `name`, `school`, `e`, `t`, `moviename`, `rong`) VALUES
(27, '13', 'อีฟฟาน มะกือตา', '0808611704', '28', '1636087019', '', 0),
(28, '14', 'ซาฟิค เจีะอาแซ', '0859547500', '19', '1636087102', '', 0),
(29, '15', 'บุลกีนี ดาโอ๊ะ', '0867498021', '14', '1636087173', '', 0),
(30, '15', 'ลาภวัต เหล่าวิกรัย', '0978520647', '13', '1636087204', '', 0),
(31, '13', 'อัฟดอล นิสาและ', '0893567540', '27', '1636087247', '', 0),
(32, '20', 'ฮาซัน มุซฮมะ', '0983546852', '30,28,26,5,3,1', '1636088197', '', 0),
(33, '16', 'อามีร นิเซ็ง', '0864783245', '29', '1636120245', '', 0),
(34, '18', 'อาฟีฟี สามะ', '0936545824', '7', '1636120359', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(5) NOT NULL,
  `num` varchar(10) NOT NULL,
  `time_d` int(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `num`, `time_d`, `status`) VALUES
(39, '28', 13, 1),
(40, '19', 14, 1),
(41, '14', 15, 1),
(42, '13', 15, 1),
(43, '27', 13, 1),
(44, '30', 20, 1),
(45, '28', 20, 1),
(46, '26', 20, 1),
(47, '5', 20, 1),
(48, '3', 20, 1),
(49, '1', 20, 1),
(50, '29', 16, 1),
(51, '7', 18, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
