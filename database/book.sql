-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 12:29 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `number` int(200) NOT NULL,
  `tour` varchar(200) COLLATE utf8_bin NOT NULL,
  `date` varchar(200) COLLATE utf8_bin NOT NULL,
  `ti` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `email`, `number`, `tour`, `date`, `ti`) VALUES
('Altynay Koshkinbayeva', '1', 2147483647, '', '12 ', '12'),
('Altynay Koshkinbayeva', '1', 2147483647, '', '12', '12'),
('Altynay Koshkinbayeva', '1', 2147483647, '', '12', '12'),
('Altynay Koshkinbayeva', '1', 2147483647, '', '12', '12'),
('ghvhg', '1', 0, '', 'yftyfytf', 'hgtuttuk'),
('ghvhg', '1', 0, '', 'yftyfytf', 'hgtuttuk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
