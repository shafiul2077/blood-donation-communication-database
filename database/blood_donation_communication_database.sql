-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 11:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation_communication_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptor`
--

CREATE TABLE `acceptor` (
  `acceptor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood_group` tinytext NOT NULL,
  `age` int(3) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acceptor`
--

INSERT INTO `acceptor` (`acceptor_id`, `name`, `blood_group`, `age`, `address`, `contact_number`) VALUES
(0, 'null', 'null', 0, 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `passcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'sumona', '0000'),
(2, 'rakibur', '0000'),
(3, 'kazi', '0000'),
(4, 'shafiul', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `forms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `age` int(3) NOT NULL,
  `last_donated` date NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(14) NOT NULL,
  `acceptor_id` int(10) DEFAULT NULL,
  `refer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_referral`
--

CREATE TABLE `donor_referral` (
  `refer_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_referral`
--

INSERT INTO `donor_referral` (`refer_id`, `name`, `address`, `contact_number`) VALUES
(0, 'null', 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptor`
--
ALTER TABLE `acceptor`
  ADD PRIMARY KEY (`acceptor_id`),
  ADD UNIQUE KEY `acceptor_id` (`acceptor_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`),
  ADD KEY `acceptor_id` (`acceptor_id`),
  ADD KEY `donor_ibfk_2` (`refer_id`);

--
-- Indexes for table `donor_referral`
--
ALTER TABLE `donor_referral`
  ADD PRIMARY KEY (`refer_id`),
  ADD UNIQUE KEY `refer_id` (`refer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`acceptor_id`) REFERENCES `acceptor` (`acceptor_id`),
  ADD CONSTRAINT `donor_ibfk_2` FOREIGN KEY (`refer_id`) REFERENCES `donor_referral` (`refer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
