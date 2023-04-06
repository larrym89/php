-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 10:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobilephones`
--

CREATE TABLE `mobilephones` (
  `id` int(11) NOT NULL,
  `producator` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pret` decimal(10,2) NOT NULL,
  `an_productie` year(4) NOT NULL,
  `data_adaugare` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mobilephones`
--

INSERT INTO `mobilephones` (`id`, `producator`, `model`, `pret`, `an_productie`, `data_adaugare`) VALUES
(3, 'huawei', 'nova 9', '300.00', 2021, '2023-03-14 15:28:42'),
(4, 'samsung', 'A13', '745.00', 2018, '2023-03-14 16:40:12'),
(5, 'samsung', 'A13', '742.00', 2018, '2023-03-14 17:07:51'),
(6, 'applwe', 'iphone 14', '1300.00', 2023, '2023-03-14 17:08:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobilephones`
--
ALTER TABLE `mobilephones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobilephones`
--
ALTER TABLE `mobilephones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
