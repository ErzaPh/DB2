-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 05:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting`
--
DROP DATABASE IF EXISTS `accounting`;
CREATE DATABASE IF NOT EXISTS `accounting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `accounting`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `client_zip` varchar(100) DEFAULT NULL,
  `client_age` smallint(3) DEFAULT NULL,
  `client_city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_zip`, `client_age`, `client_city`) VALUES
(1, 'Maris Racal', '8000', 20, 'Davao City'),
(2, 'Joanna Marie Anabeza', '8000', 21, 'Davao City'),
(3, 'Geraldine Gomez', '8000', 21, 'Davao City'),
(4, '', '', 0, ''),
(5, 'dfs', '', 0, ''),
(6, 'dfs', '', 0, ''),
(7, 'Mycka', '8000', 20, 'Davao City'),
(8, 'Mycka', '8000', 20, 'Davao City'),
(9, 'Mycka Rafols', '8000', 20, 'Davao City'),
(10, 'Mycka Carino', '9000', 20, 'Zamboanga City'),
(11, 'Mycka Carino', '9000', 20, 'Zamboanga City'),
(12, 'Selena Gomez', '9000', 20, 'Tagum City'),
(13, 'Mycka', '8000', 20, 'Davao');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_amt` int(20) NOT NULL,
  `invoice_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `client_id`, `invoice_date`, `invoice_amt`, `invoice_description`) VALUES
(1, 1, '2018-08-30', 2200, 'Educational Loan'),
(2, 2, '2018-09-05', 3000, 'Educational Loan'),
(3, 3, '2018-10-06', 0, '4000\r\n'),
(4, 8, '2018-08-27', 3000, 'Loans'),
(5, 9, '2018-09-13', 5000, 'Educational Loan'),
(6, 10, '2018-09-07', 10000, 'Housing Loan'),
(7, 11, '2018-09-07', 10000, 'Housing Loan'),
(8, 12, '2018-08-30', 5000, 'Car Loan'),
(9, 13, '2018-09-14', 1000, 'Coffe Loan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `invoice_date` (`invoice_date`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
