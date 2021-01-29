-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 12:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `therenalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `username`, `email`, `password`, `phone`) VALUES
('ADMN3208', 'rahul', 'rahul@gmail.com', 'rahul', '4567898734'),
('ADMN5188', 'admin', 'admin@gmail.com', 'admin', '9559097135'),
('ADMN8987', 'abhi', 'abhi@gmail.com', 'admin', '986745345678'),
('ADMN9277', 'vikash', 'vikash@gmail.com', 'vikash', '8945678745');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `AmountPerPatient` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchID`, `BranchName`, `AmountPerPatient`) VALUES
('BRNCH3730', 'sitapur', 7654),
('BRNCH6179', 'Biharlok', 8765),
('BRNCH6228', 'My Branch', 3456),
('BRNCH6417', 'Arera51', 56780);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `username`, `email`, `password`, `phone`) VALUES
('DCTR2421', 'mayank', 'mayank@gmail.com', 'admin', '9045286545'),
('DCTR4753', 'nirmal', 'nirmal@gmail.com', 'nirmal', '79484859392'),
('DCTR5190', 'vishal', 'vishal@gmail.com', 'vishal', '9845730209');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `name`, `phone`, `DOB`, `Time`) VALUES
('PTENT4959', 'vihan', '8456789543', '1998-08-09', '2021-01-29'),
('PTENT6196', 'Rahul', '7856458903', '1999-03-02', '2021-01-29'),
('PTENT7532', 'Madhav', '5678903456', '1989-05-02', '2021-01-28'),
('PTENT7882', 'shushil', '7579395823', '1998-04-07', '2021-01-27'),
('PTENT8182', 'shruti', '6437996543', '2001-03-12', '2021-01-25'),
('PTENT8196', 'abhi', '4568853225', '1999-07-04', '2021-01-29'),
('PTENT9167', 'khushi', '7535807543', '2001-07-06', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `username`, `email`, `password`, `phone`) VALUES
('STFN5085', 'arun45', 'arun@gmail.com', 'admin', '9559098754'),
('STFN3901', 'gopal', 'gopal@gmail.com', 'gopal', '8588458403'),
('STFN5960', 'mohan', 'mohan@gmail.com', 'mohan', '9494884994834'),
('STFN4575', 'vikky', 'vikky@gmail.com', 'admin', '6789453456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
