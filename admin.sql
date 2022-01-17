-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 11:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `busses`
--

CREATE TABLE `busses` (
  `plate` varchar(15) NOT NULL,
  `capacity` int(100) NOT NULL,
  `driver` text NOT NULL,
  `route` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busses`
--

INSERT INTO `busses` (`plate`, `capacity`, `driver`, `route`, `date`) VALUES
('KBB 124D', 85, 'martin', 'Nairobi - Nakuru', '2021-11-26'),
('KCD 453E', 40, 'Kamau', 'Nairobi - Kitale', '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `firstname` varchar(15) NOT NULL,
  `secondname` varchar(15) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `idnumber` varchar(15) NOT NULL,
  `passengers` int(100) NOT NULL,
  `origin` text NOT NULL,
  `destination` text NOT NULL,
  `amount` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`firstname`, `secondname`, `phone`, `idnumber`, `passengers`, `origin`, `destination`, `amount`, `date`) VALUES
('dree', 'waiso', 704680885, '5556586352', 8, 'Nakuru', 'Bungoma', 0, '2021-11-26'),
('dree', 'waiso', 704680885, '5556586352', 5, 'Kitale', 'Nairobi', 0, '2021-11-26'),
('dree', 'waiso', 704680885, '5556586352', 2, 'Kitale', 'Nairobi', 0, '2021-11-26'),
('juliet', 'maina', 704680885, '565865265', 2, 'Nakuru', 'Nairobi', 0, '2021-11-27'),
('flora', 'kioko', 4518196, '45488548', 1, 'Nakuru', 'Kisumu', 0, '2021-11-29'),
('juliet', 'maina', 704680885, '45488548', 1, 'Nairobi', 'Nairobi', 0, '2021-11-26'),
('juliet', 'maina', 704680885, '45488548', 1, 'Nairobi', 'Nairobi', 0, '2021-11-26'),
('juliet', 'maina', 704680885, '45488548', 1, 'Nairobi', 'Nakuru', 0, '2021-11-26'),
('juliet', 'maina', 704680885, '45488548', 1, 'Nairobi', 'Eldoret', 0, '2021-11-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
