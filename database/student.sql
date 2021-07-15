-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 10:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `image` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `image`, `address`, `email`, `pass`) VALUES
(1, 'test', 1862117112, 'img/test.jpg', 'Etavara, Keraniganj, Dhaka-1313', 'test@test.com', 'test'),
(2, 'Rimon Mahamud Rony', 1862117112, 'img/rimon.jpg', 'Etavara, Keraniganj, Dhaka', 'rimon@rimon.com', 'rimon');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `s_id` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `s_sex` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `s_phone` int(15) NOT NULL,
  `address` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `s_name`, `s_id`, `s_sex`, `s_email`, `s_phone`, `address`) VALUES
(7, 'kaes mahamud', '10.10.100.110', 'male', 'Kaesmahmud@gmail.com', 1839765995, 'Etavara, Keraniganj, Dhaka-1313'),
(9, 'Rimon Mahamud Rony', 'ASH1601012M', 'male', 'rimonronycste11@gmail.com', 1862117112, 'Dhaka, Bangladesh'),
(10, 'Jesmin Joya', '2014001', 'female', 'jesmin@gmail.com', 2147483647, 'Dhaka, Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
