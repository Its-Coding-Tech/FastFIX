-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 07:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Mohsin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `subject`, `email`, `message`, `submitted time`) VALUES
(1, 'ahmed', 'need information about  services ', 'ahmed@gmail.com', 'need a plumber', '2024-10-04 17:11:56'),
(2, 'ahmed', 'need information about  services ', 'ahmed@gmail.com', 'need a plumber', '2024-10-04 17:16:26'),
(3, 'ahmed', 'need information about  services ', 'ahmed@gmail.com', 'need a plumber', '2024-10-04 17:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_gender` varchar(10) NOT NULL,
  `r_mobile` int(20) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_gender`, `r_mobile`, `r_email`, `r_password`) VALUES
(28, 'sadoon', 'male', 324678944, 'sadoon@gmail.com', 'sadoon1234'),
(29, 'farhan', 'male', 302113690, 'farhan@gmail.com', '1234'),
(30, 'ali', 'male', 32444187, 'ali@gmail.com', '1234'),
(31, 'hanzala', 'male', 313457890, 'hanzala@gmail.com', 'hanzala12'),
(32, 'anwar', 'male', 123456987, 'anwar@gmail.com', '0987'),
(33, 'Zafer', 'male', 2147483647, 'zafer@gmail.com', '741'),
(34, 'talha ', 'male', 32156140, 'talha@gmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `reviewer_email` varchar(255) NOT NULL,
  `submited_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewer_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `service_name`, `rating`, `review`, `reviewer_email`, `submited_time`, `reviewer_name`) VALUES
(2, 'carpenter', 5, '\"I hired a carpenter through FastFIX to build a custom bookshelf, and the results were fantastic! The craftsmanship was top-notch, and the service was professional and timely. I\'m extremely satisfied and will definitely use their services again!\"', 'farhan@gmail.com', '2024-10-15 09:18:37', 'farhan'),
(4, 'plumber', 5, 'I recently hired a plumber for a leaky faucet and was thoroughly impressed! The technician arrived on time, diagnosed the issue quickly, and provided a transparent estimate before starting the work. The repair was done efficiently, and they left the area clean. I highly recommend this service for any plumbing needs!', 'ali@gmail.com', '2024-10-15 09:50:18', 'ali'),
(5, 'tv', 5, 'Excellent  Working ', 'talha@gmail.com', '2024-10-15 17:42:24', 'talha ');

-- --------------------------------------------------------

--
-- Table structure for table `sp_login_tb`
--

CREATE TABLE `sp_login_tb` (
  `sp_login_id` int(20) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_gender` varchar(20) NOT NULL,
  `sp_mobile` int(20) NOT NULL,
  `sp_email` varchar(255) NOT NULL,
  `sp_password` varchar(20) NOT NULL,
  `sp_field` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sp_login_tb`
--

INSERT INTO `sp_login_tb` (`sp_login_id`, `sp_name`, `sp_gender`, `sp_mobile`, `sp_email`, `sp_password`, `sp_field`) VALUES
(12, 'raza', 'male', 306164480, 'raza@gmail.com', '12345', 'Electrical'),
(13, 'ahmed', 'male', 312445570, 'ahmed@gmail.com', 'ahmed11', 'Plumber'),
(14, 'rehmat', 'male', 34415965, 'rehmet@gmail.com', '1234', 'Carpenter'),
(15, 'usman', 'male', 312447859, 'usman@gmail.com', '8880', 'AcRepair');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `request_date` date NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `handled_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`, `status`, `handled_by`) VALUES
(1, 'plumber', 'sink pipe issue', 'ali', 'near aksa musjid', 'qila didar singh', 'gujrawala', 'pakistan', 1235, 'ali@gmail.com', 12345890, '2024-10-11', 'accepted', 'ahmed@gmail.com'),
(2, 'plumber', 'wash pipes  leak', 'sadoon', 'Qila Didar Singh', 'Gujrawala', 'Gujranwala ', 'Pakistan ', 2222, 'sadoon@gmail.com', 324678944, '2024-10-17', 'rejected', 'ahmed@gmail.com'),
(3, 'carpenter', 'door issue ', 'anwar', 'Qila Didar Singh', 'Gujrawala', 'Gujranwala ', 'Pakistan ', 22222, 'anwar@gmail.com', 123456987, '2024-10-29', 'pending', NULL),
(4, 'carpenter', 'kichen cabinet', 'farhan', 'Qila Didar Singh', 'Gujrawala', 'Gujranwala ', 'Pakistan ', 1478, 'farhan@gmail.com', 302113690, '2024-10-30', 'pending', NULL),
(5, 'tv', 'Tv issue ', 'talha ', 'Qila Didar Singh', 'Gujrawala', 'Gujranwala ', 'Pakistan ', 741, 'talha@gmail.com', 32156140, '2024-11-09', 'pending', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sp_login_tb`
--
ALTER TABLE `sp_login_tb`
  ADD PRIMARY KEY (`sp_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp_login_tb`
--
ALTER TABLE `sp_login_tb`
  MODIFY `sp_login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
