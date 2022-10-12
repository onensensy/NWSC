-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2022 at 12:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nswc_complaintbillingsystem`
--
CREATE DATABASE IF NOT EXISTS `nswc_complaintbillingsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nswc_complaintbillingsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `administratorId` varchar(25) NOT NULL,
  `administratorName` varchar(80) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `administratorPassword` varchar(30) NOT NULL,
  PRIMARY KEY (`administratorId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administratorId`, `administratorName`, `contact`, `email`, `administratorPassword`) VALUES
('AD001', 'Makabayi Allan', '+256 775594969', 'allanmakabayi@gmail.com', 'alllax14@'),
('AD002', 'Otema Joel', '+256 775594582', 'joelotema@gmail.com', 'jolitE@otemax'),
('AD003', 'Ssembijji Ceaser', '+256 700734571', 'ceaser1234@gmail.com', 'Ssembex!1999'),
('AD004', 'Andera Recho', '+256 758413531', 'rechoandera@gmail.com', 'preDox%67'),
('AD005', 'Aguyo Esther', '+256 782017199', 'aguyoesther@gmail.com', 'aguyo3recy6.'),
('AD006', 'Nakato Newton', '+256 705594582', 'nakatonewton@gmail.com', 'newts1423'),
('AD007', 'Nagudy Nancy', '+256 777734571', 'nanacy1234@gmail.com', 'naTex351.'),
('AD008', 'Okwi Emmanuel', '+256 758414731', 'okwiemma@gmail.com', 'bazilx67.'),
('AD009', 'Ariko Jimmy', '+256 784697199', 'jimmyariko@gmail.com', 'jimmy888.'),
('AD010', 'Katende Simon', '+256 776050195', 'simonkatende@gmail.com', 'simxkats2');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `meterNo` varchar(30) NOT NULL,
  `clientNo` varchar(30) NOT NULL,
  `units` varchar(35) NOT NULL,
  `billingMonth` date NOT NULL,
  `readingDate` date NOT NULL,
  `previousReading` varchar(100) NOT NULL,
  `curentReading` varchar(90) NOT NULL,
  `paymentMethod` varchar(30) NOT NULL,
  PRIMARY KEY (`meterNo`),
  KEY `clientNo` (`clientNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `branchNo` varchar(30) NOT NULL,
  `branchName` varchar(60) NOT NULL,
  `location` varchar(70) NOT NULL,
  `address` varchar(65) NOT NULL,
  PRIMARY KEY (`branchNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchNo`, `branchName`, `location`, `address`) VALUES
('123', 'Bqwnh', 'ugandan', 'lakjdfiksdf'),
('BR01', 'Soroti NWSC-Branch', 'Otichopi', 'P.O.BOX 014 Moroto RD'),
('BR02', 'Kampala NWSC-Branch', 'Nakasero', 'P.O.BOX 013 Buganda RD'),
('BR03', 'Moroto NWSC-Branch', 'Kooli Street', 'P.O.BOX 100 Kooli RD'),
('BR04', 'Katakwi NWSC-Brnach', 'Katakwi Towncouncil HQ', 'P.O.BOX 669 Amuge RD'),
('BR05', 'Mukono NWSC-Branch', 'Byogerere', 'P.O.BOX 0134 Iganga RD'),
('BR06', 'Jinja NWSC-Branch', 'Kakiira', 'P.O.BOX 4302 Kakiira Centre'),
('BR07', 'Kumi NWSC-Branch', 'Kumi Town Council HQ', 'Soroti RD'),
('BR08', 'Wakiso NWSC-Branch', 'Wakiso Town Council HQ', 'Seguku RD'),
('BR09', 'Mabarara NWSC-Branch', 'Bachikakase Clause', 'P.O.BOX Kati'),
('BR10', 'Mbale NWSC-Branch', 'Public Street', 'Kumi RD');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `clientNo` varchar(30) NOT NULL,
  `clientName` varchar(60) NOT NULL,
  `District` varchar(40) NOT NULL,
  `Zone` varchar(30) NOT NULL,
  `Location` varchar(70) NOT NULL,
  `plotNo` varchar(30) NOT NULL,
  `cPassword` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clientNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientNo`, `clientName`, `District`, `Zone`, `Location`, `plotNo`, `cPassword`, `email`) VALUES
('752742', 'dsfghsdfgh', 'dsfgsdfg', 'dsfhdsfg', 'dsfghdsfg', 'dsfghsdg', 'Sensy@gg.com', '122323434'),
('C0001', 'Angodo Francis', 'Soroti', 'Madera', 'Soroti East', 'P680', '#festline.', 'francisangodo@gmail.com'),
('C0002', 'Twebaze Evas', 'Kagadi', 'Muhorro', 'Buyaga West', 'P146', '#Eva@12.com?.', 'evastwebaze@gmail.com'),
('C0003', 'Nassaka Specioza', 'Wakiso', 'Bbuye', 'Naalya', 'P1230', '!cheryl:', 'nspeyy@gmail.com'),
('C0004', 'Nanyonga Angellah', 'Kampala', 'Buyega', 'Kawempe', 'P333', '@sanyu1234:', 'sanyu@gmail.com'),
('C0005', 'Namususwa Rachael JFK', 'Kampala', 'Kikoni', 'Makerere', 'P0986', '@recho4321:', 'rechojfk@gmail.com'),
('C0006', 'Mumbere MUttoro Martin', 'Kasese', 'Domi', 'Payida', 'P4738', '!!muts.mm', 'muttoro@gamil.com'),
('C0007', 'Allukut Innocent', 'Tororo', 'Mooli', 'Bululu', 'P6904', 'inncoentian!.1', 'innocentallukut@gmail.com'),
('C0008', 'Napakol Joy', 'Mukono', 'Latin', 'Byogerere', 'P555', 'naps_joy!', 'joynapakol@gmail.com'),
('C0009', 'Nekesa Rodah', 'Busia', 'Elgon', 'Kagadi', 'P7402', 'nerodke678.', 'rodahnekesa@gmail.com'),
('C0010', 'Mwanga Daniel', 'Katakwi', 'Katanga', 'Imario RD', 'PK7654', 'danny1234.', 'danielmwanga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `complaintform`
--

DROP TABLE IF EXISTS `complaintform`;
CREATE TABLE IF NOT EXISTS `complaintform` (
  `complaintNo` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `staffId` varchar(20) NOT NULL,
  `resolution` varchar(150) NOT NULL,
  `status` varchar(80) NOT NULL,
  `compliantType` varchar(100) NOT NULL,
  PRIMARY KEY (`complaintNo`),
  KEY `staffId` (`staffId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintform`
--

INSERT INTO `complaintform` (`complaintNo`, `date`, `staffId`, `resolution`, `status`, `compliantType`) VALUES
('123', '2022-09-29', '001', 'jubadfk', 'jbsdjf', 'compliantType');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` varchar(20) NOT NULL,
  `staffName` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `position` varchar(80) NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `staffName`, `dob`, `phone`, `address`, `email`, `position`) VALUES
('001', 'Okello', '2002-10-09', '078552462', 'Kampala, Uganda', 'okello@gmail.com', 'Manager'),
('002', 'Opiyo', '2022-10-05', '12318616', 'Kampala', 'opio@gmail.com', 'Accountant');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`clientNo`) REFERENCES `client` (`clientNo`);

--
-- Constraints for table `complaintform`
--
ALTER TABLE `complaintform`
  ADD CONSTRAINT `complaintform_ibfk_1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;