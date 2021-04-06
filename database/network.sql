-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 03:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `network`
--

-- --------------------------------------------------------

--
-- Table structure for table `nmae`
--

CREATE TABLE `nmae` (
  `id` int(11) NOT NULL,
  `idCode` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `otherName` varchar(40) NOT NULL,
  `emailAddress` varchar(60) NOT NULL,
  `contactAddress` varchar(50) NOT NULL,
  `referral` varchar(50) NOT NULL,
  `dateOfBirth` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `maritalStatus` varchar(40) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `whatsappNumber` varchar(16) NOT NULL,
  `NOKName` varchar(40) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `NOKphoneNumber` varchar(15) NOT NULL,
  `bankName` varchar(30) NOT NULL,
  `accountName` varchar(50) NOT NULL,
  `accountNumber` varchar(15) NOT NULL,
  `accountType` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nmae`
--

INSERT INTO `nmae` (`id`, `idCode`, `surname`, `otherName`, `emailAddress`, `contactAddress`, `referral`, `dateOfBirth`, `gender`, `nationality`, `state`, `maritalStatus`, `phoneNumber`, `whatsappNumber`, `NOKName`, `relationship`, `NOKphoneNumber`, `bankName`, `accountName`, `accountNumber`, `accountType`, `time`) VALUES
(1, '210306W01', 'dbdbdbdb', 'hdhvhdvhd', 'vhfdhfvhvf@gmail.com', 'hvdhvdh', 'dhdhvd', '2021-03-31', 'jfbfjbfjb', 'udgugfug', 'uudgudg', 'uudgufgu', 'ugdugud', 'gdugdujbd', 'fjpfkfi', 'ibcbcbcb', 'bhofifiipd', 'ihfihifh', 'ihfihufh', 'ihfihfiuh', 'ifhfifh', '2021-03-25 12:49:35'),
(2, '220306T01', 'Abubakri', 'Maryam Adejoke', 'maryam@gmail.com', 'Abeokuta', 'Baseet', '2021-03-22', 'Female', 'Nigeria', 'Ogun', 'Married', '08062119823', '08156709834', 'Mubarak', 'son', '09865421356', 'Sterling', 'ABUBAKRI MARYAM ADEJOKE', '00987654', 'savings', '2021-03-25 15:49:03'),
(3, '', 'ABUBAKRI', 'WAHAB ALABA', 'alabola2017@gmail.com', 'AGO-IJESHA, ABK.', 'ABUBAKRI BASEET ADEKUNLE', '2021-03-25', 'male', 'Nigeria', 'Ogun', 'Married', '08121238413', '08121238413', 'ABUBAKRI DHIKRAT', 'WIFE', '9020485020', 'FCMB', 'ABUBAKRI WAHAB ALABA', '6971584016', 'savings', '2021-03-25 21:22:43'),
(4, '210306S01', 'ABUBAKRI', 'WAHAB ALABA', 'alabola2017@gmail.com', 'AGO-IJESHA, ABK.', 'ABUBAKRI BASEET ADEKUNLE', '2021-03-25', 'male', 'Nigeria', 'Ogun', 'Married', '08121238413', '08121238413', 'ABUBAKRI DHIKRAT', 'WIFE', '9020485020', 'FCMB', 'ABUBAKRI WAHAB ALABA', '6971584016', 'savings', '2021-03-25 21:24:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nmae`
--
ALTER TABLE `nmae`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nmae`
--
ALTER TABLE `nmae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
