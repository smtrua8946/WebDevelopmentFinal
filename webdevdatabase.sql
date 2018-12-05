-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 12:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdevdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinformation`
--

CREATE TABLE `customerinformation` (
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `loginstatus` tinyint(1) DEFAULT NULL,
  `creditcard` int(16) DEFAULT NULL,
  `availablefunds` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinformation`
--

INSERT INTO `customerinformation` (`firstname`, `lastname`, `email`, `password`, `userid`, `loginstatus`, `creditcard`, `availablefunds`) VALUES
('Seth', 'Truax', 'sethtruax@notarealplace.com', 'SimplePass', 1, 0, 2147483647, '12345.22'),
('Manny', 'Rodriguez', 'mannyrodriguez@notarealplace.com', 'SimplePass2', 2, 0, 2147483647, '50000.00'),
('Ben', 'Sedacca', 'bensedacca@notarealplace.com', 'SimplePass3', 3, 0, 2147483647, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productname` varchar(30) DEFAULT NULL,
  `bulksize` int(5) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `bulkprice` double(10,2) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `Product ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productname`, `bulksize`, `price`, `bulkprice`, `stock`, `Product ID`) VALUES
('Sprite', 12, 0.80, 8.00, 300, 1),
('Coka Cola', 12, 0.75, 7.50, 450, 2),
('Fanta Orange', 12, 0.90, 9.50, 240, 3),
('Fanta Grape', 12, 0.73, 7.30, 280, 4),
('Root Beer', 12, 0.60, 6.00, 450, 5),
('Powerade', 12, 0.79, 7.90, 450, 6),
('Cherry Coke', 12, 0.74, 7.40, 100, 7),
('Vanilla Coke', 12, 0.95, 9.50, 500, 8),
('Vanilla Sprite', 12, 0.70, 7.00, 360, 9),
('Mellow Yellow', 12, 0.80, 8.00, 220, 10);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `customerid` int(10) DEFAULT NULL,
  `item` varchar(30) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `bulkquantity` int(10) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
