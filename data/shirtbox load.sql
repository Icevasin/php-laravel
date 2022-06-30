-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: laravel-db
-- Generation Time: Nov 08, 2019 at 02:43 PM
-- Server version: 5.7.27
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `CustomerID` int(11) NOT NULL,
  `CustomerFirstname` varchar(100) NOT NULL,
  `CustomerLastname` varchar(100) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`CustomerID`, `CustomerFirstname`, `CustomerLastname`, `Phone`, `Address`) VALUES
(61160001, 'Armando', 'Luciano', '0845231651', 'Tourism Authority of Thailand 11600  New Petchaburi Rd. Makkasan Ratchathewi Bangkok 10400 Thailand'),
(61160002, 'Balthazar', 'Gunnar', '0845231652', 'Small Air Office Great Bldg, 2nd Fl Soi Lat Phrao 110, Lat Phrao Rd Klong Chan, Bang Kapi Bangkok Thailand 10240'),
(61160003, 'Barnaby', 'Gaston', '0845231653', '42 Moo 1 Baan Sang Kae Sadao Buached Surin 32230'),
(61160004, 'Bastien', 'Cruz', '0845231654', '256/344 Moo.4, Ramkhumhaeng Road, Tambon Klongkum, Amphur Bungkum, Bangkok, 12400'),
(61160005, 'Cosmo', 'Dion', '0845231655', '119/2 Moo.7, Wangban, Lomkao, Phetchabun, 67120');

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetails`
--

CREATE TABLE `OrderDetails` (
  `OrderNumber` int(11) NOT NULL,
  `ProductID` varchar(45) NOT NULL,
  `QuantityOrdered` varchar(45) NOT NULL,
  `PriceEach` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `OrderDetails`
--

INSERT INTO `OrderDetails` (`OrderNumber`, `ProductID`, `QuantityOrdered`, `PriceEach`) VALUES
(4001, '450001', '2', '200'),
(4001, '450002', '3', '170'),
(4001, '450003', '3', '150'),
(4002, '450002', '4', '170'),
(4002, '450003', '2', '150'),
(4003, '450001', '3', '200'),
(4003, '450003', '2', '150'),
(4004, '450002', '5', '170'),
(4004, '450004', '5', '160'),
(4005, '450001', '6', '200'),
(4005, '450005', '2', '250');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderNumber` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `ShippingDate` datetime NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Comment` varchar(500) DEFAULT NULL,
  `CustomerID` int(11) NOT NULL,
  `SellerID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OrderNumber`, `OrderDate`, `ShippingDate`, `Status`, `Comment`, `CustomerID`, `SellerID`) VALUES
(4001, '2019-11-01 00:00:00', '2019-11-04 00:00:00', 'Payable', NULL, 61160001, '1001'),
(4002, '2019-11-02 00:00:00', '2019-11-05 00:00:00', 'To be shipped', NULL, 61160002, '1002'),
(4003, '2019-11-03 00:00:00', '2019-11-06 00:00:00', 'Must have been', NULL, 61160003, '1003'),
(4004, '2019-11-04 00:00:00', '2019-11-07 00:00:00', 'succeeded', NULL, 61160004, '1004'),
(4005, '2019-11-05 00:00:00', '2019-11-08 00:00:00', 'canceled', 'Not transferred within 1 day Causing the order to be canceled', 61160005, '1005');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PaymentNumber` int(11) NOT NULL,
  `PaymentBy` varchar(50) NOT NULL,
  `PaymentDate` datetime NOT NULL,
  `OrderNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`PaymentNumber`, `PaymentBy`, `PaymentDate`, `OrderNumber`) VALUES
(701, 'PromptPay', '2019-11-03 00:00:00', 4001),
(702, 'PromptPay', '2019-11-04 00:00:00', 4002),
(703, 'TrueWallet', '2019-11-05 00:00:00', 4003),
(704, 'BankTransfer', '2019-11-06 00:00:00', 4004),
(705, 'BankTransfer', '2019-11-07 00:00:00', 4005);

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductID` int(11) NOT NULL,
  `TypeOfShirt` varchar(45) NOT NULL,
  `Size` varchar(45) NOT NULL,
  `PricePerItem` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductID`, `TypeOfShirt`, `Size`, `PricePerItem`) VALUES
(450001, 'Long sleeve shirt', 'S', '200'),
(450002, 'Short Sleeve', 'M', '170'),
(450003, 'T-shirt', 'L', '150'),
(450004, 'Long sleeved t-shirt', 'XL', '160'),
(450005, 'Polo shirt', 'XXL', '250');

-- --------------------------------------------------------

--
-- Table structure for table `TheSeller`
--

CREATE TABLE `TheSeller` (
  `SellerID` int(11) NOT NULL,
  `SellerFirstname` varchar(100) NOT NULL,
  `SellerLastname` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TheSeller`
--

INSERT INTO `TheSeller` (`SellerID`, `SellerFirstname`, `SellerLastname`, `E-mail`, `Phone`, `Address`) VALUES
(1001, 'Aaron', 'Maverick', 'Aaron@buu.com', '0864824101', '17/4 Village No.5 Bamroongrat Road, Pibulsongkram Sub-district, Muang District, Chiang Rai, 51000'),
(1002, 'Ethan', 'Niko', 'Ethan@buu.com', '0864824102', '69/5 Suthisarnvinijchai Rd., Samseannok, Huaykwang 10320 Bangkok 10320'),
(1003, 'Ezra', 'Newlin', 'Ezra@buu.com', '0864824103', '46, Moo 9, Noknoi Village, SoiRatchadapisek 66,Khwaeng Bang Sue, Khet Bang Sue, Bangkok, 10800'),
(1004, 'Gavin', 'Ozi', 'Gavin@buu.com', '0864824104', 'Room 152, 15th Fl., Unity Condominium, Soi Song-sup, Bangrak, Bangkok, 10220'),
(1005, 'Keith', 'MSeth', 'Keith@buu.com', '0864824105', '17/4 Village No.5 Bamroongrat Road, Pibulsongkram Sub-district, Muang District, Bangkok, 10400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD PRIMARY KEY (`OrderNumber`,`ProductID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderNumber`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PaymentNumber`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `TheSeller`
--
ALTER TABLE `TheSeller`
  ADD PRIMARY KEY (`SellerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
