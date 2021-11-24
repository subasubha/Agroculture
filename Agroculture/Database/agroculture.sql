-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 04:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agroculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bmycart`
--

CREATE TABLE `bmycart` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `boporders`
--

CREATE TABLE `boporders` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `dod` varchar(255) NOT NULL,
  `tid` int(10) NOT NULL,
  `oid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boporders`
--

INSERT INTO `boporders` (`bid`, `pid`, `dod`, `tid`, `oid`) VALUES
(21, 8, '2021-05-24', 11, 20);

-- --------------------------------------------------------

--
-- Table structure for table `boptransaction`
--

CREATE TABLE `boptransaction` (
  `tid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `dod` date DEFAULT NULL,
  `cost` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boptransaction`
--

INSERT INTO `boptransaction` (`tid`, `bid`, `dod`, `cost`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`) VALUES
(11, 21, '2021-05-24', '740.00', 'D. Francis Franko', 'Tirunelveli', '8608898851', 'dfrancisfrancis2000@gmail.com', '627002', 'St.Xaviers College,Palayamkottai, Tirunelveli District,Tamilnadu.');

-- --------------------------------------------------------

--
-- Table structure for table `borders`
--

CREATE TABLE `borders` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `dod` varchar(255) NOT NULL,
  `tid` int(10) NOT NULL,
  `oid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borders`
--

INSERT INTO `borders` (`bid`, `pid`, `dod`, `tid`, `oid`) VALUES
(21, 4, '2021-05-24', 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `btransaction`
--

CREATE TABLE `btransaction` (
  `tid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `dod` date NOT NULL,
  `cost` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btransaction`
--

INSERT INTO `btransaction` (`tid`, `bid`, `dod`, `cost`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`) VALUES
(7, 21, '2021-05-24', '240.00', 'D. Francis Franko', 'Tirunelveli', '8608898851', 'dfrancisfrancis2000@gmail.com', '627002', 'St.Xaviers College,Palayamkottai, Tirunelveli District,Tamilnadu.');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` int(255) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `buname` varchar(100) NOT NULL,
  `bpassword` varchar(100) NOT NULL,
  `bpass` varchar(100) NOT NULL,
  `bemail` varchar(100) NOT NULL,
  `bmobile` varchar(100) NOT NULL,
  `baccno` varchar(255) NOT NULL,
  `baddr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `bname`, `buname`, `bpassword`, `bpass`, `bemail`, `bmobile`, `baccno`, `baddr`) VALUES
(21, 'D.Francis Franko', 'franko', 'franko', 'franko', 'dfrancisfrancis2000@gmail.com', '8608898851', '355346645775', 'St.Xaviers College,Palayamkottai - 627002,Tirunelveli District,Tamilnadu.'),
(18, 'F. Dominic', 'dominic', 'dominic', 'dominic', 'dominic@gmail.com', '9876543210', '255236634774', 'St.Xaviers College,Palayamkottai - 627002,Tirunelveli District,Tamilnadu.');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fid` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `funame` varchar(255) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `fpass` varchar(255) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `fmobile` varchar(255) NOT NULL,
  `faccno` varchar(255) NOT NULL,
  `faddr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fname`, `funame`, `fpassword`, `fpass`, `femail`, `fmobile`, `faccno`, `faddr`) VALUES
(49, 'D. Francis Franko', 'franko', 'franko', 'franko', 'dfrancisfrancis2000@gmail.com', '8608898851', '355346645775', 'St.Xaviers College,Palayamkottai - 627002,Tirunelveli District,Tamilnadu.'),
(46, 'F. Dominic', 'dominic', 'dominic', 'dominic', 'dominic@gmail.com', '9876543210', '255234434334', 'St.Xaviers College,Palayamkottai - 627002,Tirunelveli District,Tamilnadu.'),
(50, 'D. Sarala', 'sarala', 'sarala', 'sarala', 'sarala@gmail.com', '9876543012', '399457767558', 'asdfghgfdssdfghjhgfdsdfghmnbv.'),
(48, 'S. Orbil Smith', 'smith', 'smith', 'smith', 'smith@gmail.com', '9876543210', '912873465564', 'St.Xaviers College,Palayamkottai - 627002,Tirunelveli District,Tamilnadu.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `mid` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`mid`, `message`) VALUES
(4, 'Hi, I am Franko,\r\nI like this website very much. It is very helpful to everyone.');

-- --------------------------------------------------------

--
-- Table structure for table `fmycart`
--

CREATE TABLE `fmycart` (
  `fid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foporders`
--

CREATE TABLE `foporders` (
  `fid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `dod` varchar(255) NOT NULL,
  `tid` int(10) NOT NULL,
  `oid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foporders`
--

INSERT INTO `foporders` (`fid`, `pid`, `dod`, `tid`, `oid`) VALUES
(49, 3, '2021-05-24', 24, 26);

-- --------------------------------------------------------

--
-- Table structure for table `foptransaction`
--

CREATE TABLE `foptransaction` (
  `tid` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `dod` date DEFAULT NULL,
  `cost` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foptransaction`
--

INSERT INTO `foptransaction` (`tid`, `fid`, `dod`, `cost`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`) VALUES
(24, 49, '2021-05-24', '240.00', 'D. Francis Franko', 'Tirunelveli', '8608898851', 'dfrancisfrancis2000@gmail.com', '627002', 'St.Xaviers College,Palayamkottai, Tirunelveli District,Tamilnadu.');

-- --------------------------------------------------------

--
-- Table structure for table `forders`
--

CREATE TABLE `forders` (
  `fid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `dod` varchar(255) NOT NULL,
  `tid` int(10) NOT NULL,
  `oid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forders`
--

INSERT INTO `forders` (`fid`, `pid`, `dod`, `tid`, `oid`) VALUES
(49, 2, '2021-05-24', 8, 11);

-- --------------------------------------------------------

--
-- Table structure for table `fproduct`
--

CREATE TABLE `fproduct` (
  `fid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `picStatus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fproduct`
--

INSERT INTO `fproduct` (`fid`, `pid`, `product`, `pcat`, `pinfo`, `price`, `pimage`, `picStatus`) VALUES
(49, 2, 'Tomato', 'Vegetable', 'Available 8 Kilograms.', 100, 'Tomato49.jpg', 1),
(49, 3, 'Carrot', 'Vegetable', 'Available 6 Kilograms.', 200, 'Carrot49.jpg', 1),
(46, 4, 'Banana', 'Fruit', 'Available 5 kilograms.', 200, 'Banana46.jpg', 1),
(46, 5, 'Papaya', 'Fruit', 'Available 7 kilograms.', 130, 'Papaya46.jpg', 1),
(50, 7, 'Wheat', 'Grains', 'Available 15 Kilograms.', 400, 'Wheat50.jpg', 1),
(50, 8, 'Rice', 'Grains', 'Available 20 Kilograms.', 700, 'Rice50.jpg', 1),
(48, 11, 'Onion', 'Vegetable', 'Available 10 Kilograms.', 110, 'Onion48.jpg', 1),
(48, 12, 'Garlic', 'Vegetable', 'Available 3 Kilograms.', 350, 'Garlic48.jpg', 1),
(49, 13, 'Green Apple', 'Fruit', 'Available 2 Kilograms.', 390, 'Green Apple49.jpg', 1),
(49, 14, 'Orange', 'Fruit', 'Available 5 Kilograms.', 360, 'Orange49.jpg', 1),
(46, 15, 'Corn', 'Grains', 'Available 5 Kilograms.', 85, 'Corn46.jpg', 1),
(46, 16, 'Peanuts', 'Grains', 'Available 7 Kilograms.', 415, 'Peanuts46.jpg', 1),
(50, 17, 'Cabbage', 'Vegetable', 'Available 2 Kilograms.', 200, 'Cabbage50.jpg', 1),
(50, 18, 'Cauliflower', 'Vegetable', 'Available 3 Kilograms.', 80, 'Cauliflower50.jpg', 1),
(48, 19, 'Guava', 'Fruit', 'Available 4 Kilograms.', 280, 'Guava48.jpg', 1),
(48, 20, 'Pomegranate', 'Fruit', 'Available 2 Kilograms.', 220, 'Pomegranate48.jpg', 1),
(49, 21, 'Almonds', 'Grains', 'Available 1 Kilogram.', 770, 'Almonds49.jpg', 1),
(49, 22, 'Pistachio', 'Grains', 'Available 500 Grams.', 560, 'Pistachio49.jpg', 1),
(46, 23, 'Red Chilli', 'Vegetable', 'Available 2 Kilograms.', 112, 'Red Chilli46.jpg', 1),
(46, 25, 'Lemon', 'Vegetable', 'Available 3 kilograms.', 115, 'Lemon46.jpg', 1),
(50, 26, 'Watermelon', 'Fruit', 'Available 8 Kilograms.', 120, 'Watermelon50.jpg', 1),
(50, 27, 'Cucumber', 'Fruit', 'Available 8 Kilograms.', 67, 'Cucumber50.jpg', 1),
(48, 30, 'Cashew', 'Grains', 'Available 500 Grams.', 470, 'Cashew48.jpg', 1),
(48, 31, 'Oats', 'Grains', 'Available 2 Kilograms.', 280, 'Oats48.jpg', 1),
(49, 36, 'Egg Plant', 'Vegetable', 'Available 3 Kilograms.', 115, 'Egg Plant49.jpg', 1),
(49, 37, 'Green Peas', 'Vegetable', 'Available 2 Kilograms.', 260, 'Green Peas49.jpg', 1),
(46, 38, 'Grapes', 'Fruit', 'Available 4 Kilograms.', 290, 'Grapes46.jpg', 1),
(46, 39, 'Pine Apple', 'Fruit', 'Available 2.5 Kilograms.', 195, 'Pine Apple46.jpg', 1),
(50, 40, 'Black Pepper', 'Grains', 'Available 500 Grams.', 250, 'Black Pepper50.jpg', 1),
(50, 41, 'Clove', 'Grains', 'Available 500 Grams.', 385, 'Clove50.jpg', 1),
(48, 42, 'Potato', 'Vegetable', 'Available 7 Kilograms.', 90, 'Potato48.jpg', 1),
(48, 43, 'Pumpkin', 'Vegetable', 'Available 6 Kilograms.', 130, 'Pumpkin48.jpg', 1),
(49, 44, 'Mango', 'Fruit', 'Available 3 Kilograms.', 140, 'Mango49.jpg', 1),
(46, 45, 'Buck Wheat', 'Grains', 'Available 1 Kilogram.', 295, 'Buck Wheat46.jpg', 1),
(46, 46, 'Mustard', 'Grains', 'Available 3.5 Kilograms.', 440, 'Mustard46.jpg', 1),
(49, 47, 'Apples', 'Fruit', 'Available 2 kilograms.', 400, 'Apples49.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ftransaction`
--

CREATE TABLE `ftransaction` (
  `tid` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `dod` date DEFAULT NULL,
  `cost` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ftransaction`
--

INSERT INTO `ftransaction` (`tid`, `fid`, `dod`, `cost`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`) VALUES
(8, 49, '2021-05-24', '140.00', 'D. Francis Franko', 'Tirunelveli', '8608898851', 'dfrancisfrancis2000@gmail.com', '627002', 'St.Xaviers College,Palayamkottai, Tirunelveli District,Tamilnadu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmycart`
--
ALTER TABLE `bmycart`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `boporders`
--
ALTER TABLE `boporders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `boptransaction`
--
ALTER TABLE `boptransaction`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `borders`
--
ALTER TABLE `borders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `btransaction`
--
ALTER TABLE `btransaction`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bemail`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`femail`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `fmycart`
--
ALTER TABLE `fmycart`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `foporders`
--
ALTER TABLE `foporders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `foptransaction`
--
ALTER TABLE `foptransaction`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `forders`
--
ALTER TABLE `forders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `ftransaction`
--
ALTER TABLE `ftransaction`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmycart`
--
ALTER TABLE `bmycart`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `boporders`
--
ALTER TABLE `boporders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `boptransaction`
--
ALTER TABLE `boptransaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `borders`
--
ALTER TABLE `borders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `btransaction`
--
ALTER TABLE `btransaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fmycart`
--
ALTER TABLE `fmycart`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `foporders`
--
ALTER TABLE `foporders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `foptransaction`
--
ALTER TABLE `foptransaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `forders`
--
ALTER TABLE `forders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fproduct`
--
ALTER TABLE `fproduct`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ftransaction`
--
ALTER TABLE `ftransaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
