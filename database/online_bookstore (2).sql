-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `AdminID` varchar(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pasword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`AdminID`, `first_name`, `email`, `pasword`) VALUES
('Ad100', 'ayomal', 'ayomal11@gmail.com', 'ayomal@');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AID` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `pasword` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BID` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `image`, `title`, `Author`, `price`) VALUES
(2, 'cartimage/MadolDoova.jpg', 'madolduwa', 'martin wikrma singhe', 600),
(3, 'cartimage/gindara samaga sellan.jpg', 'gindara samaga sellan', 'auther konen doil', 700),
(4, 'cartimage/LAAK-KURULU-NADA-6245666031.png', 'Laak Kurulu Nada', 'amaradewwa', 540),
(5, 'cartimage/YAKSHI-9559713418.png', 'Yakshii', 'pushpa', 4500),
(6, 'cartimage/WORKING-BACKWARDS-1529033845.png', 'Working Backwards', 'amozon founder', 2245),
(7, 'cartimage/KADULAKDA-ADARE-6245834430.png', 'Kadulakda Adare', 'deelapa', 800),
(11, 'cartimage/3001.jpeg', '3001', 'auther c clark', 2000),
(12, 'cartimage/2001.jpeg', '2001', 'auther c clark', 3666);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `BID` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `c_name`, `BID`, `image`, `book_name`, `price`, `Quantity`, `Total_price`) VALUES
(26, 'udara@gmail.com', 1, '', '3001', 500, 2, 1000),
(28, 'udara@gmail.com', 2, '', 'madolduwa', 600, 2, 1200),
(43, 'pasinduayomal2001@gmail.com', 4, 'cartimage/LAAK-KURULU-NADA-6245666031.png', 'Laak Kurulu Nada', 540, 2, 1080),
(54, 'chalan@gmail.com', 3, 'cartimage/gindara samaga sellan.jpg', 'gindara samaga sellan', 700, 4, 8400);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CID` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pasword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CID`, `first_name`, `phoneNumber`, `address`, `email`, `pasword`) VALUES
(1, 'malisha', 1111111111, '', 'malisha@gmail.com', '1234'),
(2, 'udara', 555555555, '', 'udara@gmail.com', '1111'),
(3, 'tharu', 2147483647, '', 'tharu@gmail.com', 'tharu123'),
(6, 'Ayomal', 718559281, '', 'pasinduayomal2001@gmail.com', 'Ayomal234'),
(7, 'chalana', 2147483647, '', 'chalan@gmail.com', 'Chalana@');

-- --------------------------------------------------------

--
-- Table structure for table `final_cart`
--

CREATE TABLE `final_cart` (
  `final_cart_ID` int(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `final_payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_cart`
--

INSERT INTO `final_cart` (`final_cart_ID`, `c_name`, `final_payment`) VALUES
(8, 'pasinduayomal2001@gmail.com', 540),
(26, 'chalan@gmail.com', 2800);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `T_payment` int(10) NOT NULL,
  `address_line1` varchar(200) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `cardholder_name` varchar(30) NOT NULL,
  `card_number` int(30) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` int(6) NOT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payID`, `c_name`, `T_payment`, `address_line1`, `address_line2`, `cardholder_name`, `card_number`, `exp_month`, `exp_year`, `cvv`) VALUES
(2, 'malisha@gmail.com', 8900, 'dfhdrh', 'drhdsrahg', 'thsrth', 0, '0', 0, 0),
(3, 'malisha@gmail.com', 4580, 'dsrheahr', 'erhaerh', 'therth', 435346, '0', 0, 0),
(7, 'malisha@gmail.com', 1080, 'SIDHBFIAUEGF', 'OWEJFBWOEJFN', 'WHIEBWIEJU', 2147483647, 'september', 2024, 888),
(8, 'malisha@gmail.com', 14570, '350/4A,kumarathunga Mawatha,nupe,matara', '', '', 0, 'january', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `first_name` (`first_name`,`email`);

--
-- Indexes for table `final_cart`
--
ALTER TABLE `final_cart`
  ADD PRIMARY KEY (`final_cart_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `final_cart`
--
ALTER TABLE `final_cart`
  MODIFY `final_cart_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
