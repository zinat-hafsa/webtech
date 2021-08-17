-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 08:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequest`
--

CREATE TABLE `buyerrequest` (
  `OrderId` int(6) UNSIGNED NOT NULL,
  `BuyerName` varchar(40) NOT NULL,
  `BuyerPhoneNumber` varchar(30) NOT NULL,
  `SellerName` varchar(10) NOT NULL,
  `BookName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerrequest`
--

INSERT INTO `buyerrequest` (`OrderId`, `BuyerName`, `BuyerPhoneNumber`, `SellerName`, `BookName`) VALUES
(1, 'sanzida11', '123456', 'aiman', 'Dune (nove'),
(2, 'sanzida11', '123456', 'aiman', 'Sherlock H');

-- --------------------------------------------------------

--
-- Table structure for table `confirmtable`
--

CREATE TABLE `confirmtable` (
  `orderId` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `MovieID` varchar(10) NOT NULL,
  `MovieName` varchar(30) NOT NULL,
  `Director` varchar(30) NOT NULL,
  `Production` varchar(50) NOT NULL,
  `Genre` varchar(15) NOT NULL,
  `Rating` double NOT NULL,
  `MoviePublished` date NOT NULL,
  `UserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`MovieID`, `MovieName`, `Director`, `Production`, `Genre`, `Rating`, `MoviePublished`, `UserName`) VALUES
('112233', 'Steve Jobs', 'Walter Isaacson', 'Us Publication', 'Biography', 300, '2020-11-19', 'aiman'),
('12345', 'Sherlock Holmes', 'Arthur Conan Doyle', 'UK Publication', 'Fantasy', 500, '2020-11-07', 'aiman'),
('22222', 'Dune (novel)', 'Frank Herbert', 'UK Publication', 'Sci-Fiction', 800, '2020-11-14', 'aiman'),
('456321', 'Hitler\'s Secret Book', 'Zweites Buch', 'Us Publication', 'Biography', 600, '2020-11-10', 'aiman');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `movie_name` varchar(25) NOT NULL,
  `movie_year` varchar(4) NOT NULL,
  `movie_rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `nid` int(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `imageg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `email`, `username`, `password`, `address`, `phoneno`, `nid`, `gender`, `type`, `dob`, `imageg`) VALUES
('Nasir Uddin', 'sabbir.nasir26@yahoo.com', 'sabbir26', '12345', 'South Jhiltuly, Faridpur,Dhaka', '0152123498', 78945612, 'male', 'admin', '1999-05-10', '../view/uploads/Batman_Arkham-'),
('Sanzida Mannan', 'sanzida@gmail.com', 'sanzida11', '1234', 'Chattogram', '123456789', 213654799, 'female', 'buyer', '1998-06-17', '../view/uploads/Blonde-wallpap'),
('Aimaan Amin', 'aiman@gmail.com', 'aiman22', '1234', 'Banani, Dhaka', '321654987', 421536987, 'male', 'seller', '1999-06-12', '../view/uploads/Arrow-wallpape'),
('Fahmida Alam', 'rafa@gmail.com', 'rafa33', '1234', 'Baridhara, Dhaka', '12365478', 654221445, 'female', 'dguy', '1999-01-21', '../view/uploads/Chloe-wallpape'),
('test', 'test@test.com', 'test', 'test', 'test', 'test', 0, 'male', 'seller', '2021-08-18', 'uploads/nothing.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  MODIFY `OrderId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
