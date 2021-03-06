-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 06:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshfruitsadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerregistration`
--

CREATE TABLE `customerregistration` (
  `useremail` varchar(30) NOT NULL,
  `userfirstname` varchar(30) DEFAULT NULL,
  `userlastname` varchar(30) DEFAULT NULL,
  `userpannumber` varchar(11) DEFAULT NULL,
  `userphonenumber` bigint(10) DEFAULT NULL,
  `useraddress` varchar(100) DEFAULT NULL,
  `userpassword` varchar(20) DEFAULT NULL,
  `cwallet` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerregistration`
--

INSERT INTO `customerregistration` (`useremail`, `userfirstname`, `userlastname`, `userpannumber`, `userphonenumber`, `useraddress`, `userpassword`, `cwallet`) VALUES
('harshitha@gmail.com', 'harshitha', 'guggliam', 'abcde1234a', 9052250672, 'vijayawada', 'harshitha@123', NULL),
('nani@gmail.com', 'nani', 'nene', 'abcde1234a', 9052250672, 'vijayawada', 'nani@123', NULL),
('pa1kumarmaddula@gmail.com', 'pavan', 'kumar', 'abcde1234a', 9052250672, 'vijayawada', 'pavan@123', NULL),
('priyanka123@gmail.com', 'Priyanka', 'gutti', 'abcde1234a', 9000475433, 'vijayawada', 'priyanka@123', NULL),
('venky@gmail.com', 'venky', 'pedhinti', 'abcde1234a', 9052250672, 'vijayawada', 'venky@123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fruit_store`
--

CREATE TABLE `fruit_store` (
  `seller_email` varchar(40) NOT NULL,
  `fruit_name` varchar(40) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_store`
--

INSERT INTO `fruit_store` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('ram@gmail.coma', 'sapota', 1000, 10),
('ram@gmail.com', 'fruit2', 400, 30),
('ram@gmail.com', 'fruit3', 500, 156),
('ram@gmail.com', 'fruit4', 100, 12),
('ram@gmail.com', 'fruit5', 500, 200),
('ram@gmail.com', 'fruit6', 10, 1200),
('ram@gmail.com', 'fruit8', 100, 20),
('ram@gmail.com', 'fruit9', 1000, 11),
('alluaravind1313@gmail.com', 'apple', 120, 20),
('alluaravind1313@gmail.com', 'mango', 50, 10),
('alluaravind1313@gmail.com', 'banana', 45, 3),
('alluaravind1313@gmail.com', 'papaya', 67, 12),
('alluaravind1313@gmail.com', 'watermelon', 56, 15),
('alluaravind1313@gmail.com', 'oranges', 90, 9),
('neerajagutti97@gmail.com', 'cherries', 40, 10),
('rakesh@gmail.com', 'Watermelon', 100, 20),
('rakesh@gmail.com', 'oranges', 100, 10),
('rakesh@gmail.com', 'Apple', 100, 20),
('rakesh@gmail.com', 'Mango', 100, 20),
('rakesh@gmail.com', 'Grapes', 100, 20),
('rakesh@gmail.com', 'pine apple', 150, 20),
('gopi@gmail.com', 'mango', 120, 23),
('hari@gmail.com', 'mango', 20, 12),
('neerajagutti97@gmail.com', 'Papaya', 89, 12),
('neerajagutti97@gmail.com', 'watermelon', 89, 12),
('neerajagutti97@gmail.com', 'cherries', 89, 12),
('neerajagutti97@gmail.com', 'grapes', 89, 12);

-- --------------------------------------------------------

--
-- Table structure for table `retailerregistration`
--

CREATE TABLE `retailerregistration` (
  `email` varchar(30) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `pannumber` varchar(11) DEFAULT NULL,
  `phonenumber` bigint(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `shopname` varchar(255) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailerregistration`
--

INSERT INTO `retailerregistration` (`email`, `firstname`, `lastname`, `pannumber`, `phonenumber`, `address`, `shopname`, `password`) VALUES
('gopi@gmail.com', 'GOPI', 'KRISHNA', 'FADPM3986W', 9705828818, 'Vijayawada', 'Gopi', 'Gopi@123'),
('neerajagutti97@gmail.com', 'neeraja', 'gutti', 'ARDFA1234E', 8297332058, 'Pune', 'Fruits Royal Club', 'neeru@123'),
('phani@gmail.com', 'phani', 'chandra', 'BWCPA5775p', 9866904328, 'Hyderabad', 'Fruits Club', 'phani@123'),
('Priyankagutti01@gmail.com', 'priya', 'royal', 'BWCPA5775p', 8297332058, 'Vijayawada', 'Royality Fruits Centre', 'priya@123'),
('sai@gmail.com', 'sai', 'kiran', 'BWCPA5775p', 8297332058, 'Vijayawada', 'Kamala Fruits', 'sai@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerregistration`
--
ALTER TABLE `customerregistration`
  ADD PRIMARY KEY (`useremail`);

--
-- Indexes for table `retailerregistration`
--
ALTER TABLE `retailerregistration`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
