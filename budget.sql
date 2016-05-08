-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 09:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `budget`
--
CREATE DATABASE IF NOT EXISTS `budget` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `budget`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `academic`
--
CREATE TABLE IF NOT EXISTS `academic` (
`fname` varchar(50)
,`lname` varchar(50)
,`universityName` varchar(50)
,`matricNo` varchar(25)
,`programCode` varchar(10)
,`programName` varchar(50)
,`faculty` varchar(50)
,`cSem` int(6)
,`totalSem` int(6)
,`totalYear` int(6)
);
-- --------------------------------------------------------

--
-- Table structure for table `calculation`
--

CREATE TABLE IF NOT EXISTS `calculation` (
  `vin` float NOT NULL,
  `vout` float NOT NULL,
  `semLength` int(5) NOT NULL,
  `TotalMonthlyIncome` float NOT NULL,
  `overUn` float NOT NULL,
  `TotalMonthlyExpenses` float NOT NULL,
  `totalMonthlyCost` float NOT NULL,
  `job` float NOT NULL,
  `aid` float NOT NULL,
  `momDad` float NOT NULL,
  `other` float NOT NULL,
  `totalEachMonth` float NOT NULL,
  `tuition` float NOT NULL,
  `lab` float NOT NULL,
  `book` float NOT NULL,
  `oFee` float NOT NULL,
  `totalNeed` float NOT NULL,
  `rent` float NOT NULL,
  `utilities` float NOT NULL,
  `cellPhone` float NOT NULL,
  `groceries` float NOT NULL,
  `carPayment` float NOT NULL,
  `carInsurance` float NOT NULL,
  `gas` float NOT NULL,
  `loans` float NOT NULL,
  `creditCard` float NOT NULL,
  `pCare` float NOT NULL,
  `entertainment` float NOT NULL,
  `misc` float NOT NULL,
  `emergency` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE IF NOT EXISTS `login` (
`username` varchar(36)
,`password` varchar(36)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `personal`
--
CREATE TABLE IF NOT EXISTS `personal` (
`fname` varchar(50)
,`lname` varchar(50)
,`gender` text
,`age` int(5)
,`dob` date
,`race` text
,`religion` text
,`address` varchar(50)
,`zip` int(10)
,`town` varchar(36)
,`city` varchar(36)
,`state` varchar(36)
,`country` varchar(36)
,`mobile` varchar(25)
,`home` varchar(25)
);
-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `age` int(5) NOT NULL,
  `dob` date NOT NULL,
  `race` text NOT NULL,
  `religion` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` int(10) NOT NULL,
  `town` varchar(36) NOT NULL,
  `city` varchar(36) NOT NULL,
  `state` varchar(36) NOT NULL,
  `country` varchar(36) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `home` varchar(25) NOT NULL,
  `universityName` varchar(50) NOT NULL,
  `matricNo` varchar(25) NOT NULL,
  `programCode` varchar(10) NOT NULL,
  `programName` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `cSem` int(6) NOT NULL,
  `totalSem` int(6) NOT NULL,
  `totalYear` int(6) NOT NULL,
  `financial` varchar(50) NOT NULL,
  `othersF` varchar(36) NOT NULL,
  `acc` int(36) NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `zip2` int(10) NOT NULL,
  `town2` varchar(36) NOT NULL,
  `city2` varchar(36) NOT NULL,
  `state2` varchar(36) NOT NULL,
  `country2` varchar(36) NOT NULL,
  `username` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `answer` varchar(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `gender`, `age`, `dob`, `race`, `religion`, `address`, `zip`, `town`, `city`, `state`, `country`, `mobile`, `home`, `universityName`, `matricNo`, `programCode`, `programName`, `faculty`, `cSem`, `totalSem`, `totalYear`, `financial`, `othersF`, `acc`, `bankName`, `address2`, `zip2`, `town2`, `city2`, `state2`, `country2`, `username`, `email`, `password`, `answer`) VALUES
(1, 'senorita', 'benjamin', 'Female', 26, '1989-01-11', 'Iban', 'Christian', 'swk', 96800, 'kpt', 'kpt', 'swk', 'Malaysia', '0198248311', '0844798685', 'UPSI', 'D20122061856', 'AC10', 'ISM SOFTWARE ENGINEERING (EDUCATION SOFTWARE)', 'FSKIK', 5, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Public Bank Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'senorita', 'senorita@gmail.com', 'senorit89', ''),
(2, 'Tani', 'Rantai', 'Female', 26, '1989-01-11', 'Iban', 'Christian', 'RH.Tajai,NG.Sebiro,P.o box 275', 96800, 'KAPIT', 'KAPIT', 'sarawak', 'Malaysia', '0198248311', 'NIL', 'UPSI', 'D20122061854', 'AC10', 'ISM SOFTWARE ENGINEERING (EDUCATION SOFTWARE)', 'FSKIK', 5, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Public Bank Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'taani_ann', 'arvensetr@gmail.com', 'tani89', ''),
(4, 'Siti Suraida', 'Mohd Nor', 'Female', 24, '1991-05-15', 'Melayu', 'Islam', 'Lot 1,LRG Cantik', 15800, 'Pasir Mas', 'Kota Bahru', 'Kelantan', 'Malaysia', '0178679548', 'NIL', 'UPSI', 'D20122061860', 'AT20', 'ISM Multimedia', 'FSKIK', 5, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Bank Islam Malaysia Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'eyda90', 'ct_suraida@yahoo.com', '123456', ''),
(5, 'Loviana Lenyu', 'Anak Dunstan Mandau', 'Female', 24, '1991-08-15', 'Iban', 'Christian', 'TMN MUHIBAH', 97000, 'Kanowit', 'Sibu', 'sarawak', 'Malaysia', '0148869156', '084798345', 'UPSI', 'D20122061856', 'AC10', 'ISM SOFTWARE ENGINEERING (EDUCATION SOFTWARE)', 'FSKIK', 5, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Bank Islam Malaysia Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'loviana', 'lovianadunstan@gmail.com', 'loviana91', ''),
(7, 'Calvin', 'Client', 'Male', 33, '1982-07-05', 'Iban', 'Christian', 'RH.Tajai,NG.Sebiro,P.o box 275', 96800, 'KAPIT', 'KAPIT', 'sarawak', 'Malaysia', '0198176505', '0847689547', 'upsi', 'D20122061890', 'AC10', 'ISM SOFTWARE ENGINEERING (EDUCATION SOFTWARE)', 'FSKIK', 5, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Bank Islam Malaysia Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'calvin', 'calvin@gmail.com', 'calvin82', 'cat'),
(8, 'Nur Hazirah Murni', 'Rantai', 'Female', 28, '1987-06-28', 'Iban', 'Christian', 'RH.Tajai,NG.Sebiro,P.o box 275', 96800, 'KAPIT', 'KAPIT', 'sarawak', 'Malaysia', '0198248311', '0844798685', 'UPSI', 'D20122061886', 'AC10', 'ISM SOFTWARE ENGINEERING (EDUCATION SOFTWARE)', 'FSKIK', 7, 8, 4, 'PTPTN', 'PARENTS', 2147483647, 'Bank Islam Malaysia Berhad', 'PANGSAPURI SERI HARMONI,BLOK A', 35900, 'HULU BERNAM', 'HULU SELANGOR', 'SELANGOR', 'MALAYSIA', 'hazirah', 'mnc@gmail.com', '123456', 'cat');

-- --------------------------------------------------------

--
-- Structure for view `academic`
--
DROP TABLE IF EXISTS `academic`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `academic` AS select `register`.`fname` AS `fname`,`register`.`lname` AS `lname`,`register`.`universityName` AS `universityName`,`register`.`matricNo` AS `matricNo`,`register`.`programCode` AS `programCode`,`register`.`programName` AS `programName`,`register`.`faculty` AS `faculty`,`register`.`cSem` AS `cSem`,`register`.`totalSem` AS `totalSem`,`register`.`totalYear` AS `totalYear` from `register`;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login` AS select `register`.`username` AS `username`,`register`.`password` AS `password` from `register`;

-- --------------------------------------------------------

--
-- Structure for view `personal`
--
DROP TABLE IF EXISTS `personal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `personal` AS select `register`.`fname` AS `fname`,`register`.`lname` AS `lname`,`register`.`gender` AS `gender`,`register`.`age` AS `age`,`register`.`dob` AS `dob`,`register`.`race` AS `race`,`register`.`religion` AS `religion`,`register`.`address` AS `address`,`register`.`zip` AS `zip`,`register`.`town` AS `town`,`register`.`city` AS `city`,`register`.`state` AS `state`,`register`.`country` AS `country`,`register`.`mobile` AS `mobile`,`register`.`home` AS `home` from `register`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
