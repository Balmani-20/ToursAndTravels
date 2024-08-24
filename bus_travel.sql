-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 12:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `name`, `mobile`, `aadhar`, `address`, `age`, `gender`, `seat_no`, `date`, `bid`) VALUES
(1, 'Anjali Guda', 6302320921, 965231487856, '222 telangi paccha peth solapur', 19, 'female', '19', '2024-03-09 09:52:11', 1),
(2, 'Anand', 7666398554, 968547965874, 'pune', 20, 'male', '13', '2024-03-09 09:53:58', 2),
(3, 'ritu', 9632145875, 78945621389, 'solpaur', 22, 'female', '4', '2024-03-09 09:55:30', 3),
(4, 'anju', 6302320921, 63254179965, 'solapur', 23, 'female', '10', '2024-03-09 09:57:15', 4),
(5, 'divya', 9658745632, 632541789654, 'pune', 29, 'female', '32', '2024-03-09 09:58:28', 5),
(6, 'jana', 2345789876, 12234557, 'jel road', 24, 'female', '13', '2024-03-09 11:29:43', 6);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`id`, `pid`, `cid`, `b_date`, `date`) VALUES
(1, 'Himachal Pradesh', 'abc@gmail.com', '2024-03-09', '2024-03-09 15:22:00'),
(2, 'Paris', 'abc@gmail.com', '2024-03-09', '2024-03-08 15:23:00'),
(3, 'Santorini,Greece', 'abc@gmail.com', '2024-03-09', '2024-03-08 15:25:00'),
(4, 'Goa', 'anju@gmail.com', '2024-03-09', '2024-03-09 15:26:00'),
(5, 'Hawai', 'anju@gmail.com', '2024-03-09', '2024-03-09 15:28:00'),
(6, 'Hawai', 'janabaianandkar88@gmail.com', '2024-03-09', '2024-03-15 16:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bus_type` bigint(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `bus_no`, `bus_type`, `date`) VALUES
(2, 'ABC', 'A41253', 45, '2024-03-04 16:45:33'),
(3, 'XYZ', '48Ad2', 43, '2024-03-04 16:45:50'),
(4, 'demo', 'demo123', 43, '2024-03-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'anju', 'anju@gmail.com', 'booking ', 'available seats'),
(2, 'shrutika', 's@gmail.com', 'travel', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `name`, `phone`, `email`, `address`, `aadhar`, `password`) VALUES
(1, 952665, 'Rajeshwari  Ganji', '9595959595', 'rajeshwariganji1979@gmail.com', 'nilam nagar', 'nilam nagar solapur', '12345678'),
(2, 801339, 'Lavanya Kadadas', '1234706050', 'lavanyakadadas2002@gmail.com', 'gharkul', 'solapur', '1233445'),
(3, 348150, 'Shrutika Kadgi', '8877664433', 'shrutikakadgi2002@gmail.com', 'pune', 'pune', '78654');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `destination` text NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `datetime`, `destination`, `request`) VALUES
(1, 'abc', 'abc@gmail.com', '2024-03-05 20:10:00', '	Paris, France', 'enquiry demo'),
(2, 'uyfwgusd', 'abc@gmail.com', '2024-03-30 18:43:00', '	Paris, France', 'sgfuejf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `videofile` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `image`, `videofile`, `rating`, `description`) VALUES
(1, 'ritu', 'download (8).jpeg', 'video.mp4', '4', 'ejfhkjd');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(250) NOT NULL,
  `package` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `stay` int(252) NOT NULL,
  `traveltype` varchar(550) NOT NULL,
  `startdate` datetime NOT NULL,
  `endate` datetime NOT NULL,
  `bookdate` datetime NOT NULL,
  `charges` bigint(20) NOT NULL,
  `busno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package`, `title`, `description`, `image`, `stay`, `traveltype`, `startdate`, `endate`, `bookdate`, `charges`, `busno`) VALUES
(1, 'Two Day', 'Himachal Pradesh', 'Himachal Pradesh', 'places-in-chittaurgarh.jpg', 2, ' ac pravas', '2024-03-09 15:14:14', '2024-03-09 15:14:14', '2024-03-09 15:14:14', 5000, 2),
(2, 'Three Day', 'Paris', 'Paris', 'pre1.jpg', 3, ' ac pravas', '2024-03-09 15:15:24', '2024-03-09 15:15:24', '2024-03-09 15:15:24', 20000, 3),
(3, 'Two Day', 'Santorini,Greece', 'Santorini,Greece', 'pre4.jpg', 2, ' ac pravas', '2024-03-09 15:16:56', '2024-03-09 15:16:56', '2024-03-09 15:16:56', 25000, 2),
(4, 'Three Day', 'Goa', 'Goa', 'popular_6.jpg', 3, ' ac pravas', '2024-03-09 15:18:14', '2024-03-09 15:18:14', '2024-03-09 15:18:14', 6000, 3),
(5, 'Two Day', 'Hawai', 'Hawai', 'popular_1.jpg', 3, ' ac pravas', '2024-03-09 15:19:35', '2024-03-09 15:19:35', '2024-03-09 15:19:35', 9000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'anjali', 'anju@gmail.com', '1234'),
(2, 'abc', 'abc@gmail.com', '123'),
(3, 'ritu', 'r@gmail.com', '1234'),
(4, 'jana', 'janabaianandkar88@gmail.com', 'jana');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'r@gmail.com'),
(2, 'abc@gmail.com'),
(3, 'anju@gmail.com'),
(4, 'abc@gmail.com'),
(5, 'abc@gmail.com'),
(6, 'anju@gmail.com'),
(7, 'xyz@gmail.com'),
(8, 'janabaianandkar88@gmail.com'),
(9, 'janabaianandkar88@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
