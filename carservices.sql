-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 02:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(10) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin`, `password`) VALUES
(1, 'sumukh', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_signup`
--

CREATE TABLE `customer_signup` (
  `cust_id` int(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_signup`
--

INSERT INTO `customer_signup` (`cust_id`, `user_name`, `email`, `password1`, `password2`, `address`, `contact`) VALUES
(1, 'abhi', 'abhi05@gmail.com', 'pass123', 'pass123', 'sasasas', 1234567891),
(5, 'arman', 'arman.1@gmail.com', '0', '$2y$10$f11ClyWYayBjj', 'BTM LAYOUT BANGA:LORE', 1211234562),
(6, 'alok', 'alokkumar545@gmail.c', '0', '$2y$10$l4kmFR.9BcK.l', 'BTM LAYOUT BANGA:LORE', 1211035562),
(8, 'Aran', 'aran.1@gmail.com', '0', '$2y$10$/o498tznSIhLZ', 'BTM LAYOUT BANGA:LORE', 2147483647),
(9, 'smaran', 'smaransep05@gmail.co', '0', '$2y$10$icxxffuCelI64', 'Thirthahalli shivamogga', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `dealers_info`
--

CREATE TABLE `dealers_info` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `job` varchar(11) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers_info`
--

INSERT INTO `dealers_info` (`id`, `name`, `job`, `contact`, `address`) VALUES
(1, 'Anandh', 'Mechanic', 7886532101, 'Kalasipaalya, Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer_signup`
--
ALTER TABLE `customer_signup`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dealers_info`
--
ALTER TABLE `dealers_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_signup`
--
ALTER TABLE `customer_signup`
  MODIFY `cust_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dealers_info`
--
ALTER TABLE `dealers_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
