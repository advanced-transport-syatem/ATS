-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 04:03 PM
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
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `Aadhar_no` bigint(20) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Mname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fingerprint` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`Aadhar_no`, `Fname`, `Mname`, `Lname`, `dob`, `address`, `age`, `gender`, `fingerprint`) VALUES
(123456789183, 'nidhi', 'jashubhai', 'sindha', '2019-04-01', 'sahyog complex,anand mahal road,adajan,surat', 20, 'female', NULL),
(785493216821, 'piyush', 'chhandrashekhar', 'bhtiya', '2019-04-02', 'udhana darwaja,surat', 21, 'male', NULL);

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
(1, 'SBI'),
(2, 'AXIS'),
(3, 'ICICI');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_id` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PNR` varchar(14) NOT NULL COMMENT 'PNR',
  `Bus_id` int(11) NOT NULL,
  `Total_fare` double NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `Payment_method` varchar(200) NOT NULL,
  `Aadhar_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_id`, `UserID`, `name`, `user`, `Date`, `PNR`, `Bus_id`, `Total_fare`, `Bank`, `Payment_method`, `Aadhar_no`) VALUES
(1, 1, 'nidhi', 'n11', '2019-04-08', '2019-04-08-14', 1, 200, 'SBH', 'Net Banking', 123456789183),
(2, 1, 'piyush', 'n11', '2019-04-08', '2019-04-08-15', 1, 200, 'SBH', 'Net Banking', 785493216821),
(3, 2, 'nidhi', 'piyush99', '2019-04-09', '2019-04-09-20', 2, 800, 'SBI', 'Debit card', 123456789183);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_Id` int(11) NOT NULL,
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

INSERT INTO `bus` (`Bus_Id`, `Name`, `Origin`, `Destination`, `Seats`, `Arrival_time`, `Departure_time`, `Date`, `Fare`) VALUES
(1, 'GUJ EXPRESS', 'surat', 'vadodara', 18, '22:30:00', '22:50:00', '2019-04-08', 200),
(2, 'GUJ EXPRESS', 'BHUJ', 'SURAT', 19, '02:30:00', '02:45:00', '2019-04-09', 800),
(3, 'GJJSRTC', 'AHMADABAD', 'SURAT', 20, '06:00:00', '06:30:00', '2019-04-08', 600);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_code` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `B_Id` int(10) NOT NULL,
  `BLongitude` float NOT NULL,
  `BLatitude` float NOT NULL,
  `SLongitude` float NOT NULL,
  `SLatitude` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`B_Id`, `BLongitude`, `BLatitude`, `SLongitude`, `SLatitude`) VALUES
(11, 72.8443, 21.1966, 73.1812, 22.3072);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `P_ID` int(11) NOT NULL,
  `Bus_Id` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `dob` date NOT NULL,
  `age` int(20) NOT NULL,
  `Origin` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `JourneyDate` date NOT NULL,
  `Aadhar_no` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`P_ID`, `Bus_Id`, `Fname`, `Lname`, `dob`, `age`, `Origin`, `Destination`, `JourneyDate`, `Aadhar_no`) VALUES
(1, 1, 'nidhi', 'sindha', '1997-11-02', 20, 'surat', 'vadodara', '2019-04-08', 123456789183),
(2, 1, 'piyush', 'bhatiya', '1997-02-20', 21, 'surat', 'vadodara', '2019-04-08', 785493216821),
(3, 2, 'piyush', 'bhtiya', '1997-02-20', 20, 'BHUJ', 'SURAT', '2019-04-09', 785493216821),
(4, 2, 'piyush', 'bhtiya', '1997-02-20', 20, 'BHUJ', 'SURAT', '2019-04-09', 785493216821);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `T_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`T_ID`, `P_ID`) VALUES
(1, 1),
(2, 2),
(3, 2);

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
  `Aadhar_no` bigint(20) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Username`, `Password`, `Aadhar_no`, `Timestamp`) VALUES
(1, 'nidhi', 'sindha', 'nidhisindha1@gmail.com', 'n11', 'e0eb416bcadb813f1623ac047969116936876e25', 123456789183, '2019-04-06 05:44:39'),
(2, 'piyush', 'bhtiya', 'bhtiyapiyush99@gmail.com', 'piyush99', 'e0eb416bcadb813f1623ac047969116936876e25', 785493216821, '2019-04-07 15:55:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar`
--
ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`Aadhar_no`);

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

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_id`),
  ADD KEY `Bus_id` (`Bus_id`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `Aadhar_no` (`Aadhar_no`),
  ADD KEY `UserID_2` (`UserID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_Id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_code` (`city_code`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`B_Id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Aadhar_no` (`Aadhar_no`),
  ADD KEY `Bus_Id` (`Bus_Id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Aadhar_no` (`Aadhar_no`);

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
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `Bus_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`Aadhar_no`) REFERENCES `aadhar` (`Aadhar_no`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `passenger` (`P_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Aadhar_no`) REFERENCES `aadhar` (`Aadhar_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
