-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 10:40 AM
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Booking_id` int(30) NOT NULL,
  `cust_id` int(30) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ServiceType` varchar(50) NOT NULL,
  `car_reg_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Booking_id`, `cust_id`, `cust_name`, `contact`, `address`, `ServiceType`, `car_reg_no`) VALUES
(3, 1, 'abhi', 1234567891, 'ssssasasasas', 'Car Wash', 'KA01AB1501'),
(4, 17, 'rocky', 7760712345, 'Shivajinagar,Bangalore', 'Car wash', 'KA01AB1501');

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
  `address` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_signup`
--

INSERT INTO `customer_signup` (`cust_id`, `user_name`, `email`, `password1`, `password2`, `address`, `contact`) VALUES
(1, 'abhi', 'abhi05@gmail.com', 'pass123', 'pass123', 'sasasas', 1234567891),
(16, 'sujith', 'sujithn14@gmail.com', '$2y$10$d52MdeC95l30k', '$2y$10$d52MdeC95l30k', 'Bomanahalli,Bangalore', 9878564512),
(17, 'rocky', 'rockypes@gmail.com', 'rocky123', 'rocky123', 'Shivajinagar,Bangalore', 7760712345),
(18, 'karthik', 'karthikpes@gmail.com', 'karthik123', 'karthik123', 'Jayanagar,Bengaluru', 7894561210);

-- --------------------------------------------------------

--
-- Table structure for table `dealers_info`
--

CREATE TABLE `dealers_info` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `job` varchar(40) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers_info`
--

INSERT INTO `dealers_info` (`id`, `name`, `job`, `contact`, `address`) VALUES
(1, 'Anandh', 'Mechanic', 7886532101, 'Kalasipaalya, Bangalore'),
(2, 'Bharath', 'Engine Mechanic', 6785123410, 'Bannerughata,Bengaluru'),
(3, 'Vikas', 'Car Wash dealer', 7785123410, 'RR nagar,Bengaluru'),
(4, 'Sujith', 'Car paint dealer', 9448524169, 'GarebhaaviPaalya,Bengaluru'),
(5, 'Karthik', 'Mechanic', 8054321101, 'Electronic City,Bengaluru'),
(6, 'Jack', 'General motor Service test', 6654321210, 'Shivajinagar,Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_id`),
  ADD KEY `cust_id` (`cust_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_signup`
--
ALTER TABLE `customer_signup`
  MODIFY `cust_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dealers_info`
--
ALTER TABLE `dealers_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer_signup` (`cust_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer_signup` (`cust_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
