-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 06:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Fname`, `Lname`, `Email`, `Username`, `Password`) VALUES
(1, 'Nidhi', 'Sindha', 'nidhisindha1@gmail.com', 'nidhi', 'd1051c4d4d2c9fff63cac2907ecc0c8c3881e603');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
(1, 'SBH'),
(2, 'ABC'),
(3, 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_id` int(11) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PNR` varchar(14) NOT NULL COMMENT 'PNR',
  `Bus_id` int(11) NOT NULL,
  `Seats_no` int(11) NOT NULL,
  `Total_fare` double NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `Payment_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_id`, `UserID`, `user`, `Date`, `PNR`, `Bus_id`, `Seats_no`, `Total_fare`, `Bank`, `Payment_method`) VALUES
(1, 2, 'n11', '2019-03-25', '2019-03-25-14', 6, 2, 980, 'SBH', 'Net Banking');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `B_Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Origin` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Arrival_time` time NOT NULL,
  `Departure_time` time NOT NULL,
  `Date` date NOT NULL,
  `Fare` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`B_Id`, `Name`, `Origin`, `Destination`, `Seats`, `Arrival_time`, `Departure_time`, `Date`, `Fare`) VALUES
(1, 'gj05', 'surat', 'vadodara', 10, '03:10:00', '03:30:00', '2019-01-24', 500),
(2, 'gj05', 'surat', 'vadodara', 10, '03:30:00', '03:40:00', '2019-01-24', 497),
(3, 'gj05', 'surat', 'vadodara', 8, '22:00:00', '23:00:00', '2019-01-25', 600),
(4, 'GUJ EXPRESS', 'AHMADVAD', 'SURAT', 18, '02:10:00', '03:00:00', '2019-01-26', 592),
(5, 'GUJ EXPRESS', 'surat', 'vadodara', 20, '23:00:00', '00:00:00', '2019-03-22', 488),
(6, 'gj05', 'surat', 'vadodara', 9, '20:00:00', '20:50:00', '2019-03-25', 490),
(7, 'GUJ EXPRESS', 'surat', 'vadodara', 15, '20:00:00', '20:30:00', '2019-03-26', 500);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_code` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_code`, `city_name`) VALUES
(1, 'SURAT', 'VADODARA'),
(2, 'AHAMADABAD', 'SURAT'),
(3, 'BHUJ', 'SURAT'),
(4, 'GANDHINAGAR', 'BHUJ');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `B_Id` int(10) NOT NULL,
  `Longitude` float NOT NULL,
  `Latitude` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `rowId` int(50) NOT NULL,
  `columnId` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Username`, `Password`, `Timestamp`) VALUES
(2, 'nidhi', 'sindha', 'nidhisindha1@gmail.com', 'n11', '95a141a7998fa85e03179b32dae3c09417318541', '2019-01-24 16:48:10'),
(3, 'nidhi', 'patel', 'nidhisindha12@gmail.com', 'nn', 'e0eb416bcadb813f1623ac047969116936876e25', '2019-01-24 16:51:32');

--
-- Indexes for dumped tables
--
CREATE TABLE `passenger` (
  `P_ID` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Aadhar_no` varchar(200) DEFAULT NULL,
  `Booking_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Ticket` (
  `T_id` int(11) NOT NULL,
  `Booking_id` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `aadhar` (
  `Aadhar_no` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Mname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `fingerprint` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

ALTER TABLE `passenger`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Booking_id` (`Booking_id`),
  ADD KEY `Aadhar_no` (`Aadhar_no`);

ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `Booking_id` (`Booking_id`),
  ADD KEY `P_ID` (`P_ID`);

ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`Aadhar_no`),
  ADD KEY `P_ID` (`P_ID`);
--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_id`),
  ADD KEY `Bus_id` (`Bus_id`),
  ADD KEY `UserID` (`UserID`);
--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`B_Id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_code` (`city_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `B_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `passenger`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `Ticket`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;