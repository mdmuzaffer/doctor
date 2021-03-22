-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 06:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2019-12-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_email` varchar(255) NOT NULL,
  `app_address` varchar(255) NOT NULL,
  `doctor_id` tinyint(4) NOT NULL,
  `app_phone` varchar(255) NOT NULL,
  `app_date` varchar(255) NOT NULL,
  `app_time` varchar(255) NOT NULL,
  `app_message` varchar(255) NOT NULL,
  `app_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_email`, `app_address`, `doctor_id`, `app_phone`, `app_date`, `app_time`, `app_message`, `app_created_at`) VALUES
(1, 'Muzaffer', 'muzaffer@gmail.com', 'Patna', 4, '7896541235', '12/31/2019', '12:30am', 'Hello my test message', '2019-12-28 19:10:53'),
(2, 'Raman', 'raman@gmal.com', 'Noida', 5, '789456321', '1/3/2020', '', 'Hello my first test message', '2019-12-28 19:25:11'),
(3, 'Raise', 'raise@ypmail.com', 'Patna', 2, '7896325841', '1/3/2020', '4:00am', 'I have a problem please confirm my appointment quick.', '2019-12-30 16:55:25'),
(4, 'deepu', 'deepu@yopmail.com', 'patiyala', 6, '7896541235', '1/23/2020', '3:30am', 'Hello ', '2020-01-12 10:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE `doctor_profile` (
  `id` int(255) NOT NULL,
  `register_id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_profile`
--

INSERT INTO `doctor_profile` (`id`, `register_id`, `name`, `specialty`, `image`, `facebook_link`, `twitter_link`, `instagram_link`, `message`, `qualification`, `passing_year`, `email`, `phone`, `country`, `pin`, `state`, `city`, `hospital`, `status`, `created_at`) VALUES
(1, 2, 'Shazidh', 'General Physician', '1576941589gajendar.jpg', 'https://stackoverflow.com/', 'https://stackoverflow.com/', 'https://stackoverflow.com/', 'Hello I am doctor of specialty in eyes updated', 'MBBS', 'Year passing', 'shazidh@yopmail.com', '7894561235', 'India', '854692', 'Bihar', 'Katihar', 'Fatimah Hospital', 1, '2019-12-20 16:39:42'),
(2, 1, 'Raman', 'Opthalmology', '1577209618skkhan.jpg', 'https://facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'B.Tech', 'Year passing', 'raman@yopmail.com', '7896541235', 'Australia', '854698', 'New york', 'Mohali', 'New Life', 1, '2019-12-24 17:16:41'),
(3, 4, 'Alicia', 'Physiotherapy', '1577212358smt.jpg', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'MBBS', 'Year passing', 'alicia@yopmail.com', '7895236410', 'Canada', '852369', 'Bihar', 'Patna', 'Sanjeevni', 0, '2019-12-24 18:30:35'),
(4, 3, 'Ishan Smit', 'Cardiology', '1577212864lovepreet.jpg', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'MBBS', '2008', 'ishan@yopmail.com', '456891235', 'India', '854924', 'up', 'Kanpur', 'Fatimah', 0, '2019-12-24 18:41:04'),
(5, 5, 'Gajendara', 'Physiotherapy', '1577380254gajjj.jpg', 'http://facebook.com/', 'http://twittercom/', 'http://instagram.com/', 'Hello I am a developer', 'B.tech', '2018', 'gajendramehra14rgnv@gmail.com', '7894561234', 'USA', '85465', 'uk', 'garwal', 'Life save', 1, '2019-12-26 17:05:57'),
(7, 6, 'Dinesh', 'General Physician', '157772857635478_images.jpg', 'http://www.yopmail.com/', 'http://www.yopmail.com/', 'http://www.yopmail.com/', 'Hello I am doctor', 'MBBS', '1999', 'deepugaba7@gmail.com', '789651235', 'India', '14060', 'Punjab', 'Mohali', 'live save', 1, '2019-12-30 17:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_register`
--

CREATE TABLE `doctor_register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `term` tinyint(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_register`
--

INSERT INTO `doctor_register` (`id`, `name`, `email`, `password`, `cpassword`, `term`, `created`) VALUES
(1, 'Raman', 'raman@yopmail.com', '4c3ffd47d0bd7e2627d6d8e475fdb62d', '4c3ffd47d0bd7e2627d6d8e475fdb62d', 1, '2019-12-17 17:22:49'),
(2, 'Shazidh', 'shazidh@yopmail.com', 'f3224e95780e805873077b00b66c4c0d', 'f3224e95780e805873077b00b66c4c0d', 1, '2019-12-17 17:24:09'),
(3, 'Ishan Smith', 'ishan@yopmail.com', 'e77f8607ccf619ca9d4cd806c84b6772', 'f305e2425fc0b47de8729a7031728b20', 1, '2019-12-24 18:24:23'),
(4, 'Alicia', 'alicia@yopmail.com', '5198a62b6e05fc407ba711e29aba279d', '5198a62b6e05fc407ba711e29aba279d', 1, '2019-12-24 18:25:27'),
(5, 'Gajendar', 'gajendramehra14rgnv@gmail.com', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', 1, '2019-12-26 16:59:14'),
(6, 'Dinesh', 'deepugaba7@gmail.com', 'bda70b76a2f1f691318e79ed17e4d20d', 'bda70b76a2f1f691318e79ed17e4d20d', 1, '2019-12-30 17:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(255) NOT NULL,
  `patient_id` tinyint(4) NOT NULL,
  `doctor_id` tinyint(4) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `patient_id`, `doctor_id`, `medicine`, `quantity`, `price`, `created_at`) VALUES
(1, 3, 2, 'parasitamol', '10', 50, '2020-01-02 18:17:03'),
(2, 3, 2, 'cifran', '20', 450, '2020-01-02 18:17:03'),
(3, 3, 2, 'nise', '30', 70, '2020-01-02 18:17:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_register`
--
ALTER TABLE `doctor_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor_register`
--
ALTER TABLE `doctor_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
