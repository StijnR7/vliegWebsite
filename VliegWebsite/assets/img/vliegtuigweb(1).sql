-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2024 at 12:59 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vliegtuigweb`
--
CREATE DATABASE IF NOT EXISTS `vliegtuigweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `vliegtuigweb`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `onderwerp` text NOT NULL,
  `bericht` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`naam`, `email`, `onderwerp`, `bericht`) VALUES
('', 'stijnreitsstijnreits@gmail.com', 'test ohoi', 'hallo, bijn anam is stijn van der reits de 3de. ik vind dit een zeer mooie site ');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

DROP TABLE IF EXISTS `orderinfo`;
CREATE TABLE IF NOT EXISTS `orderinfo` (
  `Ordernummer` int NOT NULL AUTO_INCREMENT,
  `vluchtID` int DEFAULT NULL,
  `userID` int NOT NULL,
  `stayID` int DEFAULT NULL,
  `kinderen` int DEFAULT NULL,
  `volwassenen` int DEFAULT NULL,
  `vertrekDatum` date DEFAULT NULL,
  `prijs` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`Ordernummer`),
  KEY `userID` (`userID`),
  KEY `orderinfo_ibfk_2` (`vluchtID`),
  KEY `orderinfo_ibfk_3` (`stayID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`Ordernummer`, `vluchtID`, `userID`, `stayID`, `kinderen`, `volwassenen`, `vertrekDatum`, `prijs`) VALUES
(50, 36, 14, NULL, NULL, NULL, '0000-00-00', 2024.00),
(51, 36, 9, NULL, NULL, NULL, '0000-00-00', 2024.00);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`email`, `message`) VALUES
('stijn@gmail.com', 'goeie website'),
('yo@gmail.com', 'heyhey'),
('', ''),
('', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggv'),
('vickaasblokje@gmail.com', 'fnatatsiche websiteegfbv '),
('yoyo@gmail.com', 'hallo'),
('yoyo@gmail.com', 'hallo');

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

DROP TABLE IF EXISTS `stay`;
CREATE TABLE IF NOT EXISTS `stay` (
  `stayID` int NOT NULL AUTO_INCREMENT,
  `stayLocatie` varchar(255) NOT NULL,
  `stayPrijs` double(10,2) NOT NULL,
  `stayRating` int NOT NULL,
  `activiteiten` varchar(255) NOT NULL,
  PRIMARY KEY (`stayID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`stayID`, `stayLocatie`, `stayPrijs`, `stayRating`, `activiteiten`) VALUES
(7, '123', 12.00, 1, '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `permissions` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `permissions`) VALUES
(1, 'yo', 'yoyoyo@gmail.com', 'f', 0),
(2, 'yo', 'yoyoyo@gmail.com', 'f', 0),
(3, 'henk', 'henk123', 'henk@gmail.com', 0),
(4, 'Willem', 'willem@gmail.com', 'Yoyoyo', 0),
(5, 'stijn', 'stijn@gmail.com', 'stijn123', 0),
(6, 'stijn', 'stijn123', 'stijn123', 0),
(7, 'willem', '123', '1234', 0),
(8, '123', '1234', '12345', 0),
(9, '567', '000', '789', 0),
(10, 'kind', 'hoi', 'kind@jeugd.nl', 0),
(11, 'kind', 'hoi', 'kind@jeugd.nl', 0),
(12, 'hoi', 'hoihoihoi', 'hallo@gmail', 0),
(13, 'stijn', 'stijn', 'stijn@gmail.com', 0),
(14, 'stijn', 'reits', 'stijn@gmail.nl', 1),
(15, 'Rianne', '12345', 'rianne81@outlook.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vlucht`
--

DROP TABLE IF EXISTS `vlucht`;
CREATE TABLE IF NOT EXISTS `vlucht` (
  `vluchtID` int NOT NULL AUTO_INCREMENT,
  `bestemmingsStad` varchar(255) DEFAULT NULL,
  `vertrekStad` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bestemmingsLand` varchar(256) DEFAULT NULL,
  `vertrekLand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reistijd` time DEFAULT NULL,
  `vertrekDatum` date NOT NULL,
  `Prijs` int NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`vluchtID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vlucht`
--

INSERT INTO `vlucht` (`vluchtID`, `bestemmingsStad`, `vertrekStad`, `bestemmingsLand`, `vertrekLand`, `reistijd`, `vertrekDatum`, `Prijs`, `foto`) VALUES
(36, 'Amsterdam', 'London', 'Nederland', 'Engeland', '00:00:05', '2024-06-03', 250, 'assets/img/amsterdam1.jpg'),
(37, 'Willemstad', 'Nijmegen', 'Curacao', 'Nederland', '00:00:20', '2024-06-28', 500, 'assets/img/curacao1.webp'),
(38, 'Parijs', 'Nijmegen', 'Frankrijk', 'Nederland', '00:00:10', '2024-06-28', 150, 'assets/img/frankrijkFoto.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD CONSTRAINT `orderinfo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `orderinfo_ibfk_2` FOREIGN KEY (`vluchtID`) REFERENCES `vlucht` (`vluchtID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `orderinfo_ibfk_3` FOREIGN KEY (`stayID`) REFERENCES `stay` (`stayID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
