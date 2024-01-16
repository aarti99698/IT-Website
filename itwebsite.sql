-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 10:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `itwebsite`
--

CREATE TABLE `itwebsite` (
  `name` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itwebsite`
--

INSERT INTO `itwebsite` (`name`, `mobile`, `email`, `message`) VALUES
('Aarti', 1234567890, 'kashyapaarti007@gmai', 'Testing'),
('hema', 1234567890, 'aartiavantika01@gmai', 'good'),
('wertyui', 2147483647, 'qwerty@gmail.com', 'qwertyuio'),
('hema', 1234567890, 'qwerty@gmail.com', 't'),
('hema', 1234567890, 'qwerty@gmail.com', 't'),
('hema', 1234567890, 'qwerty@gmail.com', 't'),
('hema', 1234567890, 'kashyapaarti007@gmai', 'try'),
('hema', 1234567890, 'kkjhk@gmail.com', 'qwertyuio'),
('hema', 1234567890, 'hemac964@gmail.com', 'hii'),
('Mani', 1234567890, 'kashyapaarti007@gmai', 'hii'),
('hema', 1234567890, 'qwerty@gmail.com', 'www'),
('hema', 1234567890, 'qwerty@gmail.com', 'hh'),
('hema', 1234567890, 'qwerty@gmail.com', 'hh'),
('hema', 1234567890, 'qwerty@gmail.com', 'hh'),
('hema', 1234567890, 'qwerty@gmail.com', 'hh'),
('aarti', 1234567890, 'aartiavantika01@gmai', 'hello'),
('aarti', 1234567890, 'aartiavantika01@gmai', 'hello'),
('aarti', 1234567890, 'sdfghjk@gmail.com', 'hello'),
('hema', 1234567890, 'kkjhk@gmail.com', 'ttt');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `is_verified`) VALUES
(122, 'mani', 'avantika0196@gmail.com', '$2y$10$Dh2uWriGhFuGbF454C4wkOCsEJrPxElzq0uO26b7rFlFcSBC36CGy', 1),
(123, 'prachi', 'aartiavantika01@gmail.com', '$2y$10$VConzztxTp/Xv2CVq298POG2ReUsGtLIYEaD3Ggn9s6fp5OHtYPy6', 0),
(124, 'm', 'manishpsstech12@gmail.com', '$2y$10$s6DRD.x2sk2OVtpf4vRbZ.NRmNcN4QBoKTz0V8ac/SMonX9mu5KXC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
