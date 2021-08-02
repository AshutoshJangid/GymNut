-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_nut`
--

-- --------------------------------------------------------

--
-- Table structure for table `gn_admin_panel`
--

CREATE TABLE `gn_admin_panel` (
  `admin_id` int(11) NOT NULL,
  `admin_type` varchar(55) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gn_entry`
--

CREATE TABLE `gn_entry` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gn_entry`
--

INSERT INTO `gn_entry` (`id`, `reg_id`, `inserted_at`, `updated_at`) VALUES
(1, 2, '2021-07-22 23:09:39', '0000-00-00 00:00:00'),
(2, 2, '2021-07-22 23:09:59', '0000-00-00 00:00:00'),
(3, 2, '2021-07-22 23:10:49', '0000-00-00 00:00:00'),
(4, 2, '2021-07-22 23:11:56', '0000-00-00 00:00:00'),
(5, 2, '2021-07-22 23:12:03', '0000-00-00 00:00:00'),
(6, 2, '2021-07-22 23:23:02', '0000-00-00 00:00:00'),
(7, 2, '2021-07-22 23:26:39', '0000-00-00 00:00:00'),
(8, 2, '2021-07-22 23:26:41', '0000-00-00 00:00:00'),
(9, 2, '2021-07-22 23:26:44', '0000-00-00 00:00:00'),
(10, 2, '2021-07-22 23:27:01', '0000-00-00 00:00:00'),
(11, 2, '2021-07-22 23:28:28', '0000-00-00 00:00:00'),
(12, 2, '2021-07-22 23:28:34', '0000-00-00 00:00:00'),
(13, 19, '2021-07-22 23:56:00', '0000-00-00 00:00:00'),
(14, 1, '2021-07-23 10:45:12', '0000-00-00 00:00:00'),
(15, 19, '2021-07-25 10:25:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gn_nuts`
--

CREATE TABLE `gn_nuts` (
  `id` int(11) NOT NULL,
  `reg_num` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gn_nuts`
--

INSERT INTO `gn_nuts` (`id`, `reg_num`, `name`, `gender`, `mobile`, `email`, `inserted_at`, `updated_at`) VALUES
(1, 0, 'qwerty', 'male', '79654123', 'asd@asd.com', '2021-07-15 13:01:38', '2021-07-15 13:01:38'),
(2, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 13:44:19', '2021-07-15 13:44:19'),
(3, 0, 'Ashutosh Jangid', 'male', '79654123', 'ashujangid186@gmail.com', '2021-07-15 14:13:53', '2021-07-15 14:13:53'),
(4, 0, 'Ashutosh Jangid', 'male', '78563', 'a16786@gmail.com', '2021-07-15 14:14:31', '2021-07-15 14:14:31'),
(5, 0, 'Ashutosh Jangid', 'male', '9636719', 'ashujangid166@gmail.com', '2021-07-15 14:26:53', '2021-07-15 14:26:53'),
(6, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 14:46:58', '2021-07-15 14:46:58'),
(7, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 17:43:14', '2021-07-15 17:43:14'),
(8, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 17:46:32', '2021-07-15 17:46:32'),
(9, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 17:46:44', '2021-07-15 17:46:44'),
(10, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:06:03', '2021-07-15 18:06:03'),
(11, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:07:21', '2021-07-15 18:07:21'),
(12, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:24:44', '2021-07-15 18:24:44'),
(13, 0, 'ujjwal sharma', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:46:43', '2021-07-15 18:46:43'),
(14, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:48:17', '2021-07-15 18:48:17'),
(15, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:49:01', '2021-07-15 18:49:01'),
(16, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 18:52:18', '2021-07-15 18:52:18'),
(17, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 19:34:34', '2021-07-15 19:34:34'),
(18, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 19:39:21', '2021-07-15 19:39:21'),
(19, 0, 'Shubham Yaduvanshi', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 19:45:00', '2021-07-15 19:45:00'),
(20, 0, 'Ashutosh Jangid', 'female', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 19:47:11', '2021-07-15 19:47:11'),
(21, 0, 'Ashutosh Jangid', 'female', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 19:49:51', '2021-07-15 19:49:51'),
(22, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:01:58', '2021-07-15 20:01:58'),
(23, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:02:58', '2021-07-15 20:02:58'),
(24, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:04:39', '2021-07-15 20:04:39'),
(25, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:13:40', '2021-07-15 20:13:40'),
(26, 0, 'Ashutosh Jangid', 'female', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:15:08', '2021-07-15 20:15:08'),
(27, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:15:43', '2021-07-15 20:15:43'),
(28, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-15 20:21:08', '2021-07-15 20:21:08'),
(29, 0, 'Adiya Soni', 'other', '9649301386', 'adityasonigandu@gmail.com', '2021-07-16 12:03:26', '2021-07-16 12:03:26'),
(30, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-22 10:22:12', '2021-07-22 10:22:12'),
(31, 0, 'Raja Hindustani', 'male', '9537518520', 'rajahindustani@gmail.com', '2021-07-23 11:59:10', '2021-07-23 11:59:10'),
(32, 0, '', '', '', '', '2021-07-23 12:19:53', '2021-07-23 12:19:53'),
(33, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-23 12:21:50', '2021-07-23 12:21:50'),
(34, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-23 12:22:40', '2021-07-23 12:22:40'),
(35, 0, 'Ashutosh Jangid', 'male', '9636719464', 'ashujangid16786@gmail.com', '2021-07-23 12:23:50', '2021-07-23 12:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `gn_plans`
--

CREATE TABLE `gn_plans` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `type` enum('monthly','quarterly','half_yearly','yearly') NOT NULL,
  `cardio` enum('0','1') NOT NULL COMMENT '0 for no, 1 for yes',
  `plan_start` date NOT NULL,
  `plan_end` date NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gn_plans`
--

INSERT INTO `gn_plans` (`id`, `reg_id`, `type`, `cardio`, `plan_start`, `plan_end`, `inserted_at`, `updated_at`) VALUES
(1, 0, 'quarterly', '0', '2021-07-15', '0000-00-00', '2021-07-15 14:46:58', '0000-00-00 00:00:00'),
(2, 15, 'monthly', '1', '2021-07-16', '0000-00-00', '2021-07-15 18:49:08', '0000-00-00 00:00:00'),
(3, 15, 'monthly', '1', '2021-07-16', '0000-00-00', '2021-07-15 18:50:03', '0000-00-00 00:00:00'),
(4, 15, 'monthly', '1', '2021-07-16', '0000-00-00', '2021-07-15 18:51:58', '0000-00-00 00:00:00'),
(5, 16, 'monthly', '0', '2021-07-15', '0000-00-00', '2021-07-15 18:52:25', '0000-00-00 00:00:00'),
(6, 29, 'yearly', '1', '2021-07-17', '0000-00-00', '2021-07-16 12:03:52', '0000-00-00 00:00:00'),
(7, 30, 'monthly', '1', '0000-00-00', '0000-00-00', '2021-07-22 23:49:19', '0000-00-00 00:00:00'),
(8, 30, '', '1', '0000-00-00', '0000-00-00', '2021-07-23 00:40:25', '0000-00-00 00:00:00'),
(9, 30, '', '1', '0000-00-00', '0000-00-00', '2021-07-23 00:42:16', '0000-00-00 00:00:00'),
(10, 30, '', '1', '0000-00-00', '0000-00-00', '2021-07-23 00:42:29', '0000-00-00 00:00:00'),
(11, 30, '', '1', '0000-00-00', '0000-00-00', '2021-07-23 00:43:59', '0000-00-00 00:00:00'),
(12, 30, '', '1', '0000-00-00', '0000-00-00', '2021-07-23 00:44:59', '0000-00-00 00:00:00'),
(13, 31, 'monthly', '1', '2021-07-24', '2021-08-24', '2021-07-23 11:59:19', '0000-00-00 00:00:00'),
(14, 31, 'quarterly', '1', '0000-00-00', '1970-04-01', '2021-07-23 12:04:28', '0000-00-00 00:00:00'),
(15, 33, 'monthly', '0', '2021-07-24', '2021-08-24', '2021-07-23 12:22:01', '0000-00-00 00:00:00'),
(16, 34, 'half_yearly', '0', '2021-07-31', '2022-01-31', '2021-07-23 12:22:48', '0000-00-00 00:00:00'),
(17, 35, 'yearly', '1', '2021-07-01', '2022-07-01', '2021-07-23 12:23:57', '0000-00-00 00:00:00'),
(18, 35, '', '1', '0000-00-00', '0000-00-00', '2021-07-25 10:23:20', '0000-00-00 00:00:00'),
(19, 13, 'quarterly', '0', '2021-07-08', '2021-10-08', '2021-07-25 13:25:49', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gn_admin_panel`
--
ALTER TABLE `gn_admin_panel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `gn_entry`
--
ALTER TABLE `gn_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gn_nuts`
--
ALTER TABLE `gn_nuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gn_plans`
--
ALTER TABLE `gn_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gn_admin_panel`
--
ALTER TABLE `gn_admin_panel`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gn_entry`
--
ALTER TABLE `gn_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gn_nuts`
--
ALTER TABLE `gn_nuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `gn_plans`
--
ALTER TABLE `gn_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
