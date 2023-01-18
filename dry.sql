-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 12:55 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dry`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(3) NOT NULL,
  `farmer_id` int(3) DEFAULT NULL,
  `farmer_name` varchar(20) DEFAULT NULL,
  `center_id` int(3) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `farmer_id`, `farmer_name`, `center_id`, `quantity`, `amount`) VALUES
(1, 4, 'Lokesh ', 3, 2, 120),
(2, 1, 'Ravi kumar', 1, 26, 1482),
(3, 4, 'Lokesh ', 3, 2, 120),
(4, 4, 'Lokesh ', 3, 2, 120),
(5, 4, 'Lokesh ', 3, 2, 120),
(6, 4, 'Lokesh ', 3, 2, 120),
(7, 1, 'Ravi kumar', 1, 26, 1482),
(8, 1, 'Ravi kumar', 1, 26, 1482),
(9, 1, 'Ravi kumar', 1, 26, 1482),
(10, 1, 'Ravi kumar', 1, 26, 1482),
(11, 1, 'Ravi kumar', 1, 17, 969),
(12, 1, 'Ravi kumar', 1, 17, 969),
(13, 1, 'Ravi kumar', 1, 17, 969),
(14, 1, 'Ravi kumar', 1, 17, 969),
(15, 1, 'Ravi kumar', 1, 17, 969),
(16, 1, 'Ravi kumar', 1, 17, 969),
(17, 1, 'Ravi kumar', 1, 17, 969),
(18, 1, 'Ravi kumar', 1, 17, 969),
(19, 1, 'Ravi kumar', 1, 17, 969),
(20, 1, 'Ravi kumar', 1, 17, 969),
(21, 1, 'Ravi kumar', 1, 17, 969),
(22, 1, 'Ravi kumar', 1, 17, 969),
(23, 1, 'Ravi kumar', 1, 17, 969),
(24, 1, 'Ravi kumar', 1, 17, 969),
(25, 1, 'Ravi kumar', 1, 17, 969),
(26, 1, 'Ravi kumar', 1, 17, 969),
(27, 1, 'Ravi kumar', 1, 17, 969),
(28, 1, 'Ravi kumar', 1, 17, 969),
(29, 1, 'Ravi kumar', 1, 17, 969),
(30, 1, 'Ravi kumar', 1, 17, 969),
(31, 1, 'Ravi kumar', 1, 17, 969),
(32, 1, 'Ravi kumar', 1, 17, 969),
(33, 1, 'Ravi kumar', 1, 17, 969),
(34, 1, 'Ravi kumar', 1, 17, 969),
(35, 1, 'Ravi kumar', 1, 17, 969),
(36, 1, 'Ravi kumar', 1, 17, 969),
(37, 1, 'Ravi kumar', 1, 17, 969),
(38, 1, 'Ravi kumar', 1, 17, 969),
(39, 1, 'Ravi kumar', 1, 17, 969),
(40, 1, 'Ravi kumar', 1, 17, 969),
(41, 1, 'Ravi kumar', 1, 17, 969),
(42, 1, 'Ravi kumar', 1, 17, 969),
(43, 1, 'Ravi kumar', 1, 17, 969),
(44, 1, 'Ravi kumar', 1, 17, 969),
(45, 1, 'Ravi kumar', 1, 17, 969),
(46, 1, 'Ravi kumar', 1, 17, 969),
(47, 1, 'Ravi kumar', 1, 17, 969),
(48, 1, 'Ravi kumar', 1, 17, 969),
(49, 1, 'Ravi kumar', 1, 17, 969),
(50, 1, 'Ravi kumar', 1, 17, 969),
(51, 1, 'Ravi kumar', 1, 17, 969),
(52, 1, 'Ravi kumar', 1, 17, 969),
(53, 1, 'Ravi kumar', 1, 17, 969);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(5) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `salary` int(5) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `phno`, `salary`, `designation`, `address`) VALUES
(12335, 'rahul', '9441733399', 3000, 'staff', 'kurnool'),
(12336, 'govind', '9441733995', 3000, 'staff', 'kurnool'),
(12337, 'gpoal', '9441733996', 3000, 'staff', 'kurnool'),
(12338, 'ramya', '9441733998', 3000, 'staff', 'kurnool'),
(12339, 'rashi', '9441733999', 3000, 'staff', 'kurnool'),
(12340, 'priya', '9441733910', 3000, 'staff', 'kurnool'),
(12341, 'sudheeer', '9441733912', 3000, 'staff', 'kurnool'),
(12342, 'girish', '9441733913', 3000, 'staff', 'kurnool'),
(12344, 'rehman', '9441733914', 3000, 'staff', 'kurnool'),
(12345, 'ravi', '9908407185', 20000, 'staff', 'kurnool'),
(12346, 'mani', '8688764855', 30000, 'manager', 'ndk'),
(12347, 'rasi', '9908407285', 3000, 'manager', 'kudapa'),
(12348, 'nani', '9666613357', 3000, 'manager', 'kurnool');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `f_vid` int(3) NOT NULL,
  `milk_type` text NOT NULL,
  `min_litre` int(2) NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp(),
  `animalID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `fname`, `ph`, `f_vid`, `milk_type`, `min_litre`, `reg_date`, `animalID`) VALUES
(1, 'Ravi kumar', '2147483647', 1, 'cow', 1, '2021-07-23', 98123),
(2, 'Kishore', '9908407281', 2, 'buffalo', 2, '2021-07-23', 98124),
(3, 'Rahul', '9908407286', 4, 'cow', 1, '2021-07-23', 98125),
(4, 'Lokesh ', '9908407288', 3, 'buffalo', 1, '2021-07-23', 98126),
(5, 'Seshi', '9848870676', 6, 'cow', 2, '2021-07-23', 98127),
(6, 'Nivesh', '9848870673', 5, 'buffalo', 2, '2021-07-23', 98128),
(7, 'Bhargav', '9908407289', 9, 'buffalo', 2, '2021-07-23', 98131),
(8, 'Charan', '9666613257', 7, 'buffalo', 2, '2021-07-23', 98132),
(9, 'Dharma', '9666613258', 0, 'buffalo', 2, '2021-07-23', 98133),
(10, 'Niranjan', '9848870987', 8, 'cow', 2, '2021-07-23', 98134),
(11, 'ravindra', '9848870612', 10, 'buffalo', 1, '2021-07-25', 98145),
(12, 'ramya', '9908407256', 6, 'cow', 2, '2021-07-28', 12378);

-- --------------------------------------------------------

--
-- Table structure for table `milk_center`
--

CREATE TABLE `milk_center` (
  `cid` int(3) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `village_id` int(3) DEFAULT NULL,
  `staff_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_center`
--

INSERT INTO `milk_center` (`cid`, `cname`, `village_id`, `staff_id`) VALUES
(1, 'c1', 1, 12335),
(2, 'c2', 2, 12336),
(3, 'c3', 3, 12337),
(4, 'c4', 4, 12338),
(5, 'c5', 5, 12339),
(6, 'c6', 6, 12340),
(7, 'c7', 7, 12341),
(8, 'c8', 8, 12342),
(9, 'c9', 9, 12344),
(10, 'c10', 10, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(3) NOT NULL,
  `pname` varchar(15) NOT NULL,
  `pcost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pcost`) VALUES
(1, 'cmilk', 57),
(2, 'bmilk', 60),
(3, 'cghee', 1200),
(4, 'bghee', 800),
(5, 'curd', 40),
(6, 'cheese', 250),
(7, 'butter', 480),
(8, 'panner', 320);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `dt` date DEFAULT NULL,
  `fid` int(5) DEFAULT NULL,
  `quan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`dt`, `fid`, `quan`) VALUES
('2021-07-01', 1, 2),
('2021-07-01', 2, 2),
('2021-07-01', 3, 2),
('2021-07-01', 4, 2),
('2021-07-01', 5, 2),
('2021-07-02', 1, 3),
('2021-07-02', 2, 2),
('2021-07-02', 3, 2),
('2021-07-01', 6, 1),
('2021-07-02', 6, 2),
('2021-07-03', 3, 2),
('2021-07-05', 2, 3),
('2021-07-04', 1, 2),
('2021-07-06', 1, 4),
('2021-07-10', 1, 3),
('2021-07-12', 1, 3),
('2021-07-16', 1, 2),
('2021-07-19', 1, 2),
('2021-07-22', 1, 2),
('2021-07-23', 1, 3),
('2021-07-29', 9, 23);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `vid` int(3) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `route_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`vid`, `vname`, `route_no`) VALUES
(1, 'c-camp,kurnool', 1),
(2, 'b-camp,kurnool', 1),
(3, 'a-camp,kurnool', 1),
(4, 'madhava nagar,kurnool', 2),
(5, 'checkpost,kurnool', 2),
(6, 'saraswathi nagar,kurnool', 3),
(7, 'VR coloney,kurnool', 4),
(8, 'chowrasata,kurnool', 4),
(9, 'dr coloney,kurnool', 3),
(10, 'lakshmi nagar,kurnool', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `farmer_id` (`farmer_id`),
  ADD KEY `center_id` (`center_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ph` (`ph`);

--
-- Indexes for table `milk_center`
--
ALTER TABLE `milk_center`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pid` (`pid`,`pname`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12351;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `vid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`center_id`) REFERENCES `milk_center` (`cid`);

--
-- Constraints for table `milk_center`
--
ALTER TABLE `milk_center`
  ADD CONSTRAINT `milk_center_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `employee` (`eid`),
  ADD CONSTRAINT `milk_center_ibfk_2` FOREIGN KEY (`village_id`) REFERENCES `village` (`vid`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `farmer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
