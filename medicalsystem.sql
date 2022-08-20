-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 أغسطس 2022 الساعة 12:28
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalsystem`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admins`
--

INSERT INTO `admins` (`adminID`, `fullname`, `email`, `phone`, `username`, `password`, `type`) VALUES
(1, 'Mohamad Salame', 'mhmd@admin.com', 8156732, 'mhmd.salame', 'ms12345', 'owner'),
(2, 'Sara Kasab', 'sara@kasab.com', 8146732, 'sara.kasab', 'sk12345', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `admintype`
--

CREATE TABLE `admintype` (
  `TID` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admintype`
--

INSERT INTO `admintype` (`TID`, `type`) VALUES
(1, 'admin'),
(2, 'owner');

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `issue` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `issue`) VALUES
(1, 'Salame Admin', 'salame@admin.com', 'this message is for test only'),
(2, 'Sara Admin', 'sara@test.com', 'this is another message for test'),
(3, 'Qadeer Hameed', 'qadeer@hamed.com', 'i need help');

-- --------------------------------------------------------

--
-- بنية الجدول `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `actype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `medicinepaper`
--

CREATE TABLE `medicinepaper` (
  `PAPID` int(11) NOT NULL,
  `organizaionName` varchar(30) NOT NULL,
  `organizaionPhone` int(11) NOT NULL,
  `doctorName` varchar(30) NOT NULL,
  `medicines` varchar(3000) NOT NULL,
  `dosage` varchar(3000) NOT NULL,
  `patuser` varchar(30) NOT NULL,
  `writeDate` varchar(25) NOT NULL,
  `takedDate` varchar(25) NOT NULL,
  `orgusername` varchar(30) NOT NULL,
  `givenByUser` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `patients`
--

CREATE TABLE `patients` (
  `pid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `mothername` varchar(15) NOT NULL,
  `fathername` varchar(15) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `registrationDate` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `patients`
--

INSERT INTO `patients` (`pid`, `username`, `firstname`, `lastname`, `mothername`, `fathername`, `phone`, `email`, `address`, `district`, `status`, `registrationDate`, `password`, `type`) VALUES
(1, 'khaled_hazem', 'Khaled', 'Hazem', 'Lina', 'Azeez', 8146732, 'khaled@patient.com', 'Saida, Rejal Al-Arbeen street, near dana coffee', 'Saida', 'new', '07/23/2022 08:56:41 pm', 'Kh123456', 'Patient'),
(2, 'sahar123', 'Yasmin', 'Zayton', 'Sahar', 'Reyad', 7078526, 'yasmin@patient.com', 'Beirut,', 'Beirut', 'new', '07/23/2022 08:59:05 pm', 'Sa1234', 'Patient');

-- --------------------------------------------------------

--
-- بنية الجدول `reports`
--

CREATE TABLE `reports` (
  `RID` int(11) NOT NULL,
  `patuser` varchar(30) NOT NULL,
  `orauser` varchar(30) NOT NULL,
  `orgname` varchar(30) NOT NULL,
  `orgphone` int(30) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `report` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `reports`
--

INSERT INTO `reports` (`RID`, `patuser`, `orauser`, `orgname`, `orgphone`, `doctorname`, `date`, `report`) VALUES
(1, 'khaled_hazem', 'hamod_hospital', 'Ghassan Hammoud', 7064723, 'Waseem Khasab', '07/30/2022 03:48:20 pm', 'this report is for test the medical system');

-- --------------------------------------------------------

--
-- بنية الجدول `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `ownername` varchar(30) NOT NULL,
  `owneremail` varchar(30) NOT NULL,
  `ownerphone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `certificateimgName` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `userinfo`
--

INSERT INTO `userinfo` (`userID`, `username`, `name`, `email`, `phonenumber`, `ownername`, `owneremail`, `ownerphone`, `address`, `district`, `type`, `certificateimgName`, `status`, `registration_date`, `password`) VALUES
(1, 'hamod_hospital', 'Ghassan Hammoud', 'G.hammoud@hos.com', 7064723, 'Ghassan Hammoud', 'ghassan@myemail.com', 8164723, 'Saida, rahbat street, behind falafel antar', 'Saida', 'Hospital', 'certificate.png', 'Active', '07/23/2022 08:55:48 pm', 'Gh1234'),
(2, 'marj.pharm', 'Al Marj', 'marj@pharma.com', 7167352, 'Sadek Sayed', 'sadek@sayed.com', 8167352, 'Saida, al balad street', 'Saida', 'Pharmacy', 'certificate2.png', 'Active', '07/30/2022 12:38:37 am', 'Mar123'),
(3, 'shaaban.clc', 'Shaaban', 'shaaban@clinic.com', 8174890, 'Mohamad', 'mhmd@shaa.com', 7046732, 'Beirut,', 'Beirut', 'Doctor', 'shaabanClinic.png', 'Active', '07/31/2022 09:18:25 pm', 'Sha1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `admintype`
--
ALTER TABLE `admintype`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`,`username`);

--
-- Indexes for table `medicinepaper`
--
ALTER TABLE `medicinepaper`
  ADD PRIMARY KEY (`PAPID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userID`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admintype`
--
ALTER TABLE `admintype`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicinepaper`
--
ALTER TABLE `medicinepaper`
  MODIFY `PAPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
