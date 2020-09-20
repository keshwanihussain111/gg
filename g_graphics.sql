-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 12:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g_graphics`
--

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `g_id` int(11) NOT NULL,
  `name_of_party` varchar(30) NOT NULL,
  `g_particular` varchar(100) DEFAULT NULL,
  `matirial` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `quantity` varchar(25) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `t_amount` float DEFAULT NULL,
  `credit_amount` float DEFAULT NULL,
  `debit_amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`g_id`, `name_of_party`, `g_particular`, `matirial`, `size`, `quantity`, `rate`, `t_amount`, `credit_amount`, `debit_amount`) VALUES
(1, 'first', 'first', NULL, '10by10', '100', '19', 1900, 300, 1600),
(3, 'customer', 'partical', 'material``', '100', '10', '10', 100, 10, 90),
(4, 'customer', 'partical', 'material``', '100', '10', '10', 100, 1, 99),
(5, 'customer', 'partical', 'material``', '100', '10', '10', 100, 12, 88),
(6, 'demo', 'demo', 'demo', 'demo', '10', '20', 200, 100, 100),
(7, 'demo', 'demo', 'demo', 'demo', '10', '20', 200, 190, 10),
(8, 'demo', 'demo', 'demo', 'demo', '10', '20', 200, 200, 0),
(9, 'demo', 'demo', 'demo', 'demo', '10', '20', 200, 199, 1),
(10, 'gg', 'gg', '`gg', 'gg', '10', '199', 1990, 10, 1980);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`g_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
