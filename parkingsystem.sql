-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 04:23 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `AcctNo` int(11) NOT NULL,
  `State` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`AcctNo`, `State`) VALUES
(100000000, 1),
(100379538, 2),
(100515638, 1),
(100517944, 2),
(100523158, 1),
(100525222, 1),
(100528555, 2),
(100535658, 1);

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `AcctNo` int(11) NOT NULL,
  `CardNumHash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`AcctNo`, `CardNumHash`) VALUES
(100000000, '#159357468'),
(100379538, '#987654321'),
(100515638, '#013794682'),
(100515638, '#013794688'),
(100517944, '#12345456788'),
(100517944, '#12345456789'),
(100523158, '#580004321'),
(100525222, '#457812177'),
(100528555, '#852741963'),
(100535658, '#580004585'),
(100535658, '#580004586'),
(100535658, '#580004587');

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `AcctNo` int(11) DEFAULT NULL,
  `EventNum` int(11) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Time` datetime NOT NULL,
  `LotNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlog`
--

INSERT INTO `eventlog` (`AcctNo`, `EventNum`, `Message`, `Time`, `LotNo`) VALUES
(NULL, 1, 'Arm Malfunction', '2015-10-25 10:33:00', 1),
(100517944, 2, 'Unauthorized Access', '2015-10-25 10:22:00', 3),
(100379538, 3, 'Entered Lot', '2015-10-30 15:24:00', 3),
(100379538, 4, 'Left Lot', '2015-10-30 18:00:00', 3),
(100000000, 5, 'Left Lot', '2015-10-30 19:30:00', 3),
(100000000, 7, 'Entered Lot', '2015-10-30 15:30:00', 3),
(100515638, 8, 'Entered Lot', '2015-10-30 07:03:00', 5),
(100515638, 9, 'Left Lot', '2015-10-30 16:38:00', 5),
(100523158, 10, 'Entered Lot', '2015-10-28 18:24:00', 2),
(100523158, 11, 'Left Lot', '2015-10-29 06:53:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `AcctNo` int(11) NOT NULL,
  `LotNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lot`
--

INSERT INTO `lot` (`AcctNo`, `LotNo`) VALUES
(100000000, 3),
(100000000, 4),
(100379538, 3),
(100379538, 4),
(100515638, 5),
(100517944, 1),
(100523158, 2),
(100523158, 5),
(100525222, 4),
(100528555, 2),
(100535658, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parkinglot`
--

CREATE TABLE `parkinglot` (
  `LotNo` int(11) NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `LotName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkinglot`
--

INSERT INTO `parkinglot` (`LotNo`, `Location`, `LotName`) VALUES
(1, 'North Side', 'Greenview Lot A'),
(2, 'East Wing', 'Greenview Lot B'),
(3, 'West Wing', 'Hafeez Lot'),
(4, 'East Campus', 'That Lot'),
(5, 'South Village', 'Quoderatdemonstrandum');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `TagNo` int(11) NOT NULL,
  `AcctNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`TagNo`, `AcctNo`) VALUES
(9, NULL),
(10, NULL),
(11, NULL),
(12, NULL),
(7, 100000000),
(2, 100379538),
(8, 100515638),
(1, 100517944),
(3, 100523158),
(5, 100525222),
(6, 100528555),
(4, 100535658);

-- --------------------------------------------------------

--
-- Table structure for table `transactionlog`
--

CREATE TABLE `transactionlog` (
  `TransNum` int(11) NOT NULL,
  `acctNum` int(11) NOT NULL,
  `BalanceChange` float DEFAULT NULL,
  `EventNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactionlog`
--

INSERT INTO `transactionlog` (`TransNum`, `acctNum`, `BalanceChange`, `EventNum`) VALUES
(1, 100379538, -7.68, 4),
(2, 100000000, -5.88, 7),
(3, 100515638, -15.24, 9),
(4, 100523158, -15.45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `PlateNo` varchar(20) NOT NULL,
  `ModelMake` varchar(20) DEFAULT NULL,
  `AcctNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`PlateNo`, `ModelMake`, `AcctNum`) VALUES
('BBBX 859', 'Lada Niva', 100000000),
('ARCW 866', 'Honda Civic', 100379538),
('2V2982', 'Chevrolet Uplander', 100515638),
('659 4YH', 'Bugatti Veyron 16.4', 100515638),
('BHYL 435', 'Nova LF-S', 100517944),
('BBCD', 'Chevrolet Malibu', 100523158),
('BXWK 040', 'GMC Acadia', 100523158),
('ASHL 888', 'Nissan Altima', 100525222),
('AFDF 222', 'Porsche Carrera GT', 100528555),
('ASDF 123', 'Lamborghini Huracan', 100528555),
('BBCX 858', 'Chevrolet Impala', 100535658);

-- --------------------------------------------------------

--
-- Table structure for table `_user`
--

CREATE TABLE `_user` (
  `AccountNumber` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNo` char(12) DEFAULT NULL,
  `LotNo` int(11) NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `CheckIn` datetime DEFAULT NULL,
  `CheckOut` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_user`
--

INSERT INTO `_user` (`AccountNumber`, `Name`, `PhoneNo`, `LotNo`, `balance`, `CheckIn`, `CheckOut`) VALUES
(100000000, 'Khalid Hafeez', '905-721-8668', 3, -35.44, '2015-10-30 15:30:00', '2015-10-30 19:30:00'),
(100379538, 'Scott McLean', '905-809-0000', 3, -7.68, '2015-10-30 15:24:00', '2015-10-30 18:00:00'),
(100515638, 'Troy Scrivens', '613-539-0000', 5, 25, '2015-10-30 07:04:00', '2015-10-30 16:31:00'),
(100517944, 'Dominick Mancini', '289-675-0000', 1, -128.55, '2015-10-30 15:30:00', '2015-10-30 16:00:00'),
(100523158, 'Mohannad Abdo', '905-213-1111', 2, 0, '2015-10-28 18:24:00', '2015-10-29 06:53:00'),
(100525222, 'Jon An', '705-313-8888', 4, 45, '2015-10-31 09:30:00', '2015-10-31 10:11:00'),
(100528555, 'Joseph Evelyn', '705-652-1111', 2, -26.55, '2015-10-31 09:32:00', '2015-10-31 11:00:00'),
(100535658, 'Mirna Zohiry', '905-123-4567', 1, -3.55, '2015-10-29 08:24:00', '2015-10-29 16:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`AcctNo`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`AcctNo`,`CardNumHash`);

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`EventNum`,`Time`),
  ADD KEY `LotNo` (`LotNo`),
  ADD KEY `eventlog_ibfk_1` (`AcctNo`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`AcctNo`,`LotNo`),
  ADD KEY `LotNo` (`LotNo`);

--
-- Indexes for table `parkinglot`
--
ALTER TABLE `parkinglot`
  ADD PRIMARY KEY (`LotNo`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`TagNo`),
  ADD KEY `acct_ifkb` (`AcctNo`);

--
-- Indexes for table `transactionlog`
--
ALTER TABLE `transactionlog`
  ADD PRIMARY KEY (`TransNum`),
  ADD KEY `EventNum` (`EventNum`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`AcctNum`,`PlateNo`);

--
-- Indexes for table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`AccountNumber`),
  ADD KEY `_user_ibfk_1` (`LotNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD CONSTRAINT `blacklist_ibfk_1` FOREIGN KEY (`AcctNo`) REFERENCES `_user` (`AccountNumber`);

--
-- Constraints for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`AcctNo`) REFERENCES `_user` (`AccountNumber`) ON UPDATE CASCADE;

--
-- Constraints for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD CONSTRAINT `eventlog_ibfk_1` FOREIGN KEY (`AcctNo`) REFERENCES `_user` (`AccountNumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `eventlog_ibfk_2` FOREIGN KEY (`LotNo`) REFERENCES `parkinglot` (`LotNo`) ON UPDATE CASCADE;

--
-- Constraints for table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `lot_ibfk_1` FOREIGN KEY (`AcctNo`) REFERENCES `_user` (`AccountNumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lot_ibfk_2` FOREIGN KEY (`LotNo`) REFERENCES `parkinglot` (`LotNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `acct_ifkb` FOREIGN KEY (`AcctNo`) REFERENCES `_user` (`AccountNumber`) ON UPDATE CASCADE;

--
-- Constraints for table `transactionlog`
--
ALTER TABLE `transactionlog`
  ADD CONSTRAINT `transactionlog_ibfk_1` FOREIGN KEY (`EventNum`) REFERENCES `eventlog` (`EventNum`) ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`AcctNum`) REFERENCES `_user` (`AccountNumber`) ON UPDATE CASCADE;

--
-- Constraints for table `_user`
--
ALTER TABLE `_user`
  ADD CONSTRAINT `_user_ibfk_1` FOREIGN KEY (`LotNo`) REFERENCES `parkinglot` (`LotNo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
