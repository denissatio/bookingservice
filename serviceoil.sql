-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 08:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serviceoil`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `mobil` varchar(150) NOT NULL,
  `no_plat` varchar(150) NOT NULL,
  `kilometer` varchar(150) NOT NULL,
  `keluhan_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `tanggal_booking`, `nama_lengkap`, `email`, `no_hp`, `mobil`, `no_plat`, `kilometer`, `keluhan_service`) VALUES
(1, '0000-00-00 00:00:00', 'sdasd', '', 'asdasd', 'asdasd', 'asdasd', 'asda', 'sdasd\r\n	                    '),
(2, '0000-00-00 00:00:00', 'sdasd', '', 'asdasd', 'asdasd', 'asdasd', 'asda', 'sdasd\r\n	                    '),
(3, '0000-00-00 00:00:00', 'sdasd', '', 'asdasd', 'asdasd', 'asdasd', 'asda', 'sdasd\r\n	                    ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
