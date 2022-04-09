-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 03:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `fraccount` varchar(256) DEFAULT NULL,
  `toaccount` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `amount`, `fraccount`, `toaccount`) VALUES
(1, 20, '91991237047250', '72508864647250'),
(2, 50, '91991237047250', '72508864647250'),
(3, 50, '91991237047250', '72508864647250'),
(4, 50, '91991237047250', '72508864647250'),
(5, 50, '91991237047250', '72508864647250'),
(6, 500, '91991237047250', '72508864647250'),
(7, 500, '72508864647250', '91991237047250'),
(8, 500, '91991237047250', '72508864647250'),
(9, 20000, '72508864647250', '91991237047250'),
(10, 500, '91991237047250', '72508864647250'),
(11, 500, '91991237047250', '72508864647250'),
(12, 500, '82943235047250', '91991237047250'),
(13, 500, '82943235047250', '72508864647250');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `accountno` varchar(256) DEFAULT NULL,
  `branch` varchar(256) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `accountno`, `branch`, `bal`, `name`) VALUES
(1, 'mg', '12345', '91991237047250', '[india]', 37210, 'Mohit'),
(2, 'sahil_7250', '7250', '72508864647250', 'duabi', 33860, 'sahil'),
(3, 'amit_7250', 'amit7250', '97087903977250', 'india', 200000, 'amit'),
(4, 'gautam_7250', 'gautam7250', '82943235047250', 'india', 1999000, 'gautam'),
(5, 'shu_7250', 'shubham7250', '72540500247250', 'Dubai', 2000000, 'shubham'),
(6, 'ram_7250', 'ram7250', '91224866467250', 'UK', 150000, 'Ram'),
(7, 'shyam_7250', 'shyam7250', '91224866467251', 'USA', 100000, 'Ram'),
(8, 'shiv_7250', 'shivangi7250', '91224866467252', 'india', 1000000, 'Shivangi'),
(9, 'prem_7250', 'prem7250', '91224866467253', 'india', 10000000, 'Manish'),
(10, 'sita_7250', 'sita7250', '91224866467254', 'india', 100000, 'Sita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
