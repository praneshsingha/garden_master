-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:37 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardenmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart10`
--

CREATE TABLE `cart10` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart10`
--

INSERT INTO `cart10` (`CRTID`, `IID`, `INAME`, `QTY`, `IPRICE`) VALUES
(8, 'it02', 'Kirloskar Chhotu Star Monoblock Pump (1 HP)', 1, 10000),
(9, 'it01', 'Pepper Agro GSI1001 1.5 Litre Garden', 1, 200),
(10, 'it02', 'Kirloskar Chhotu Star Monoblock Pump (1 HP)', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `cart11`
--

CREATE TABLE `cart11` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart11`
--

INSERT INTO `cart11` (`CRTID`, `IID`, `INAME`, `QTY`, `IPRICE`) VALUES
(22, 'IT01', 'Item 1', 1, 1234),
(23, 'IT02', 'item 2', 1, 2424);

-- --------------------------------------------------------

--
-- Table structure for table `cart12`
--

CREATE TABLE `cart12` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart13`
--

CREATE TABLE `cart13` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart14`
--

CREATE TABLE `cart14` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart15`
--

CREATE TABLE `cart15` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart16`
--

CREATE TABLE `cart16` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart16`
--

INSERT INTO `cart16` (`CRTID`, `IID`, `INAME`, `QTY`, `IPRICE`) VALUES
(9, 'it5', 'grass', 1, 299),
(8, 'it7', 'motor', 1, 45999);

-- --------------------------------------------------------

--
-- Table structure for table `cart17`
--

CREATE TABLE `cart17` (
  `CRTID` int(11) NOT NULL,
  `IID` char(20) DEFAULT NULL,
  `INAME` varchar(100) DEFAULT NULL,
  `QTY` int(11) DEFAULT '1',
  `IPRICE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart17`
--

INSERT INTO `cart17` (`CRTID`, `IID`, `INAME`, `QTY`, `IPRICE`) VALUES
(1, 'it7', 'motor', 2, 91998);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `username` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`username`, `country`, `email`, `phoneno`, `message`) VALUES
('sumit@gmail.com', 'India', 'praneshsingha@gmail.com', 9732916078, '		    	\r\n		    '),
('sumit@gmail.com', 'India', 'praneshsingha@gmail.com', 9732916078, '		    	\r\n		 message   '),
('', 'India', 'praneshsingha@gmail.com', 9732916078, 'wdsjd\r\n		    	\r\n		    '),
('rajr55951@gmail.com', 'India', 'praneshsingha@gmail.com', 9732916078, '		    	\r\n		 qwqwqw   '),
('rajr55951@gmail.com', 'asa', 'a', 1, '		    	\r\n		    '),
('sumit@gmail.com', 'India', 'praneshsingha@gmail.com', 9732916078, 'hsdhs		    	\r\n		    '),
('sumit@gmail.com', 'India', 'praneshsingha@gmail.com', 9732916078, 'hsdhs		    	\r\n		    '),
('rajr55951@gmail.com', 'india', 'rajr55951@gmail.com', 7204266841, '		    	\r\n		helll    ');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `ODID` int(4) NOT NULL,
  `CID` int(4) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PHONE` bigint(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`ODID`, `CID`, `NAME`, `PHONE`, `EMAIL`, `ADDRESS`) VALUES
(29, 16, 'raj', 7204266841, 'rajr55951@gmail.com', 'address'),
(28, 11, 'ejkhhk', 3456789098, 'dfghjk', 'address'),
(27, 11, 'rahul', 9732916078, 'praneshsingha@gmail.com', 'address'),
(26, 11, 'sumit', 9732916078, 'praneshsingha@gmail.com', 'address'),
(25, 11, 'sumit', 9732916078, 'praneshsingha@gmail.com', 'address'),
(24, 11, 'sumit', 9732916078, 'praneshsingha@gmail.com', 'address'),
(23, 11, 'sumit', 9732916078, 'praneshsingha@gmail.com', 'address'),
(22, 11, 'sumit', 9732916078, 'praneshsingha@gmail.com', 'address'),
(21, 11, 'kritti', 9732916078, 'praneshsingha@gmail.com', 'address'),
(20, 11, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(19, 11, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(18, 11, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(17, 10, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(16, 10, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(30, 16, 'raj', 7293882327, 'lucy127188@gmail.com', 'address'),
(31, 16, 'raj', 7204266841, 'lucy127188@gmail.com', 'address'),
(32, 11, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address'),
(33, 16, 'rahul', 9732916078, 'praneshsingha@gmail.com', 'address'),
(34, 17, 'Pranesh Kumar Singha', 9732916078, 'praneshsingha@gmail.com', 'address');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `CID` int(11) NOT NULL,
  `FIRST` varchar(30) NOT NULL,
  `LAST` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASS` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `MOB` bigint(10) NOT NULL,
  `PIN` int(6) NOT NULL,
  `ADDRESS` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`CID`, `FIRST`, `LAST`, `EMAIL`, `PASS`, `DOB`, `MOB`, `PIN`, `ADDRESS`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '123456', '1996-09-14', 1234567890, 765435, 'abcd'),
(13, 'mama', 'mama', 'mama@gmail.com', 'mama', '2017-01-01', 7082394709, 890345, 'abcd college'),
(12, 'rahul', 'kumar', 'lucy1281998@gmail.com', 'rahul', '2021-01-01', 7823740489, 790347, 'efgh college'),
(11, 'sumit', 'roy', 'sumit@gmail.com', 'sumit', '2004-01-01', 178350134, 29845, 'xyz college'),
(10, 'kritti', 'kumar', 'kritti@gmail.com', 'kritti', '1993-01-01', 7890346507, 790345, 'ghlegfqeg'),
(14, 'abcd', 'abcd', 'abcd@gmail.com', 'abcd', '2017-01-01', 9826346983, 28973, 'ijk college'),
(15, 'ram', 'ram', 'ram@gmail.com', 'ram', '2017-01-01', 5857648748, 564651, 'dghfhj'),
(16, 'rahul', 'raj', 'rajr55951@gmail.com', '123456', '2017-12-02', 7204266841, 560100, 'dskfs;dkf'),
(17, 'ritu', 'singha', 'ritu@gmail.com', 'ritu123', '1994-12-09', 7982569223, 733215, 'abcd college');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `TID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PHONE` bigint(10) NOT NULL,
  `ADDRESS` text NOT NULL,
  `SERVICE` varchar(20) NOT NULL,
  `SDATE` date NOT NULL,
  `STATUS` varchar(20) DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`TID`, `CID`, `NAME`, `PHONE`, `ADDRESS`, `SERVICE`, `SDATE`, `STATUS`) VALUES
(12, 11, 'rahul', 987654321, 'abcd', 'Garden Care', '2017-11-22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `slist`
--

CREATE TABLE `slist` (
  `SID` int(4) NOT NULL,
  `SNAME` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slist`
--

INSERT INTO `slist` (`SID`, `SNAME`) VALUES
(1, 'Garden Care'),
(2, 'Lawn Moving'),
(3, 'Rubbish Removal'),
(4, 'Landscape Design');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `IID` varchar(20) NOT NULL,
  `INAME` varchar(200) NOT NULL,
  `IMAGE` varchar(300) NOT NULL,
  `DESCRIPT` varchar(300) NOT NULL,
  `IQTY` int(4) NOT NULL,
  `ITYPE` varchar(30) NOT NULL,
  `IPRICE` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`IID`, `INAME`, `IMAGE`, `DESCRIPT`, `IQTY`, `ITYPE`, `IPRICE`) VALUES
('it7', 'motor', '5a0e711a280d3.jpg', '700 horsepower', 7, 'water ', 45999),
('it5', 'grass', '5a0e70baaebfe.jpg', 'fine and good greenish ', 9, 'design', 299),
('it4', 'cutter', '5a0e7055062dd.jpg', 'good for large big tree', 10, 'tramming ', 299),
('it01', 'basket', '5a0e5e3999cf1.jpg', 'wall decoration', 10, 'designing', 200),
('it10', 'pipe', '5a0e716738cd2.jpg', 'watering for garden 50meters long', 10, 'water', 399),
('it9', 'water', '5a0e71ca83c58.jpg', 'water can with 500ml', 10, 'water', 299),
('it11', 'water', '5a0e770bdb5ed.jpg', 'water can with 400ml   ', 10, 'water', 299),
('it2', 'grass', '5a0e773de22a2.jpg', '5 fit long ', 10, 'grass', 499),
('it3', 'tool', '5a0e7776b1a53.jpg', '3 meters long ', 12, 'tool', 299);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart10`
--
ALTER TABLE `cart10`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart11`
--
ALTER TABLE `cart11`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart12`
--
ALTER TABLE `cart12`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart13`
--
ALTER TABLE `cart13`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart14`
--
ALTER TABLE `cart14`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart15`
--
ALTER TABLE `cart15`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart16`
--
ALTER TABLE `cart16`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `cart17`
--
ALTER TABLE `cart17`
  ADD PRIMARY KEY (`CRTID`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ODID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `MOB` (`MOB`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `slist`
--
ALTER TABLE `slist`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `SNAME` (`SNAME`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`IID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart10`
--
ALTER TABLE `cart10`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cart11`
--
ALTER TABLE `cart11`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cart12`
--
ALTER TABLE `cart12`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart13`
--
ALTER TABLE `cart13`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cart14`
--
ALTER TABLE `cart14`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart15`
--
ALTER TABLE `cart15`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart16`
--
ALTER TABLE `cart16`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cart17`
--
ALTER TABLE `cart17`
  MODIFY `CRTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `ODID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slist`
--
ALTER TABLE `slist`
  MODIFY `SID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
