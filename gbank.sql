-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `current_balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1, 'Ram Mohan', 'Mohan@gmail.com', 34355),
(2, 'Farah Khan', 'farah@yahoo.com', 75882),
(3, 'Rahul Roy', 'rahul@gmail.com', 99967),
(2309, 'Anjana Sharma', 'anjana@gmail.com', 24722),
(2310, 'Tonny Chadda', 'tonny@yahoo.com', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transfer_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`) VALUES
(1, 'Ram Mohan', 'Farah Khan', 800),
(2, 'Ram Mohan', 'Farah Khan', 100),
(3, 'Ram Mohan', 'Ram Mohan', 345),
(4, 'Ram Mohan', 'Farah Khan', 100),
(5, 'Ram Mohan', 'Rahul Roy', 100),
(6, 'Ram Mohan', 'Select Reciever', 122),
(7, 'Ram Mohan', 'Farah Khan', 111),
(8, 'Rahul Roy', 'Anjana Sharma', 122),
(9, 'Anjana Sharma', 'Ram Mohan', 555),
(10, 'Ram Mohan', 'Anjana Sharma', 4555),
(11, 'Farah Khan', 'Ram Mohan', 999),
(12, 'Farah Khan', 'Anjana Sharma', 100),
(13, 'Ram Mohan', 'Rahul Roy', 100),
(14, 'Ram Mohan', 'Farah Khan', 100),
(15, 'Rahul Roy', 'Farah Khan', 111),
(16, 'Ram Mohan', 'Farah Khan', 555),
(17, 'Farah Khan', 'Ram Mohan', 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`transfer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2311;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
