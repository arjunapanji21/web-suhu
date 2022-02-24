-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2022 at 10:43 AM
-- Server version: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id` int(10) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `kelembaban` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id`, `ruangan`, `suhu`, `kelembaban`, `waktu`) VALUES
(1, 'Server', '24.50', '48.00', '2022-01-13 04:12:40'),
(2, 'Server', '24.50', '48.00', '2022-01-13 04:13:05'),
(3, 'Server', '24.50', '48.00', '2022-01-13 04:23:05'),
(4, 'Server', '24.50', '47.00', '2022-01-13 04:33:05'),
(5, 'Server', '24.50', '46.00', '2022-01-13 04:43:06'),
(6, 'Server', '24.50', '45.00', '2022-01-13 04:53:06'),
(7, 'Server', '24.50', '45.00', '2022-01-13 05:03:06'),
(8, 'Server', '24.50', '45.00', '2022-01-13 05:13:07'),
(9, 'Server', '24.50', '44.00', '2022-01-13 05:23:07'),
(10, 'Server', '24.50', '44.00', '2022-01-13 05:33:08'),
(11, 'Server', '24.50', '44.00', '2022-01-13 05:43:08'),
(12, 'Server', '24.80', '44.00', '2022-01-13 05:53:08'),
(13, 'Server', '24.80', '44.00', '2022-01-13 06:03:09'),
(14, 'Server', '24.80', '44.00', '2022-01-13 06:13:09'),
(15, 'Server', '24.80', '44.00', '2022-01-13 06:23:09'),
(16, 'Server', '24.50', '44.00', '2022-01-13 06:33:10'),
(17, 'Server', '24.50', '44.00', '2022-01-13 06:43:10'),
(18, 'Server', '24.50', '44.00', '2022-01-13 06:53:11'),
(19, 'Server', '24.50', '44.00', '2022-01-13 07:03:11'),
(20, 'Server', '24.50', '44.00', '2022-01-13 07:13:11'),
(21, 'Server', '24.80', '44.00', '2022-01-13 07:23:12'),
(22, 'Server', '24.80', '44.00', '2022-01-13 07:33:12'),
(23, 'Server', '24.80', '43.00', '2022-01-13 07:43:13'),
(24, 'Server', '24.80', '43.00', '2022-01-13 07:48:48'),
(25, 'Server', '24.80', '43.00', '2022-01-13 08:48:48'),
(26, 'Server', '25.80', '42.00', '2022-01-13 09:48:49'),
(27, 'Server', '24.50', '54.00', '2022-02-08 04:49:12'),
(28, 'Server', '0.00', '0.00', '2022-02-21 09:35:03'),
(29, 'Server', '0.00', '0.00', '2022-02-21 09:37:42'),
(30, 'Server', '0.00', '0.00', '2022-02-21 09:38:13'),
(31, 'Server', '24.80', '64.00', '2022-02-24 03:32:21'),
(32, 'Server', '24.80', '65.00', '2022-02-24 03:36:30'),
(33, 'Server', '25.80', '68.00', '2022-02-24 03:39:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
