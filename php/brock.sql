-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 05:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brock`
--

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(30) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `types` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `ip`, `types`) VALUES
(72, '111111', 'yes'),
(73, '111111', 'no'),
(74, '111111', 'yes'),
(75, '111111', 'yes'),
(76, '111111', 'yes'),
(77, '111111', 'yes'),
(78, '111111', 'yes'),
(79, '111111', 'yes'),
(80, '111111', 'yes'),
(81, '111111', 'yes'),
(82, '111111', 'no'),
(83, '111111', 'yes'),
(84, '111111', 'yes'),
(85, '111111', 'yes'),
(86, '111111', 'yes'),
(87, '111111', 'no'),
(88, '111111', 'yes'),
(89, '111111', 'no'),
(90, '111111', 'yes'),
(91, '111111', 'no'),
(92, '111111', 'yes'),
(93, '111111', 'yes'),
(94, '111111', 'yes'),
(95, '111111', 'yes'),
(96, '111111', 'yes'),
(97, '111111', 'yes'),
(98, '111111', 'yes'),
(99, '111111', 'yes'),
(100, '111111', 'yes'),
(101, '111111', 'yes'),
(102, '111111', 'yes'),
(103, '111111', 'yes'),
(104, '111111', 'yes'),
(105, '111111', 'yes'),
(106, '111111', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
