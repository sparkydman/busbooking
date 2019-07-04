-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2018 at 11:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tfrom` varchar(225) NOT NULL,
  `Tto` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Tfrom`, `Tto`, `date`, `time`, `user_id`) VALUES
(6, 'enugu', 'lagos`', '2017-09-30', '8:00 to 9:00', 1),
(7, 'enugu', 'lagos`', '2017-09-30', '8:00 to 9:00', 1),
(12, 'enugu', 'lagos`', '2017-09-30', '8:00 to 9:00', 1),
(13, 'aba', 'enugu', '2017-09-29', '10:00', 2),
(19, 'Enugu', 'Abuja', '2017-09-30', '10:00', 4),
(20, 'aba', 'enugu', '2017-09-30', '9:00', 3),
(21, 'umuahia', 'owerri', '2018-09-14', '8:00', 7),
(22, 'benin', 'lagos', '2018-09-15', '8:00', 7),
(23, '', '', '', '8:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `idadmin`
--

DROP TABLE IF EXISTS `idadmin`;
CREATE TABLE IF NOT EXISTS `idadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idadmin`
--

INSERT INTO `idadmin` (`id`, `username`, `phone`, `email`, `password`) VALUES
(3, 'obi', '12345', 'obi@whatsup.com', 'obi'),
(4, 'chika', '2888888888', 'chi@gmail.com', 'chigo'),
(6, 'chika', '2888888', 'gozieugwuede@yahoo.com', 'chigo'),
(7, 'sparky', '2888888', 'chigo@gmail.com', 'chigo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'ada', '09876', 'ada@yahoo.com', 'ada'),
(2, 'obi', '0987654', 'obi@whatsup.com', 'obi'),
(3, 'Eze', '123456789', 'eze@yahoo.com', 'eze'),
(4, 'Obi', '12345', 'obi@whatsup.com', 'obi'),
(5, 'chigozie', '089090', 'sparkyglobe@gmal.com', 'chigo'),
(6, 'sparky', '08909099', 'chigo@gmail.com', 'chigo'),
(7, 'me', '08909099', 'chi@gmail.com', 'chigo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
