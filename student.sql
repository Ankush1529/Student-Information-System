-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2018 at 05:23 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeusers`
--

DROP TABLE IF EXISTS `activeusers`;
CREATE TABLE IF NOT EXISTS `activeusers` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `regnum` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `cellnum` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activeusers`
--

INSERT INTO `activeusers` (`id`, `username`, `email`, `password`, `department`, `firstname`, `lastname`, `regnum`, `gname`, `praddress`, `cellnum`, `gender`, `category`, `year`, `dob`, `image`) VALUES
(3, 'anj123', 'anjalishaw26@yahoo.in', 'abc456', 'EE', 'Rinki', 'Shaw', '20160072', 'ganga', 'Rishra', '8981807545', 'female', 'OBC', 'first year', '1996-02-06', '861067_426882724068678_579959149_o.jpg'),
(5, 'naruto', 'naruto@leafvillage.com', 'abc123', 'CSE', 'Naruto', 'Uzumaki', '20180023', 'Minato Namikaze', 'Konoha', '12345678', 'male', 'GEN', 'first year', '2018-03-01', ''),
(6, 'sasuke', 'sasuke@hiddenleaf.com', 'abc123', 'EE', 'Sasuke', 'Uchiha', '20180045', 'Itachi', 'Konoha', '12345678', 'male', 'PWD', 'first year', '2018-03-01', ''),
(7, 'new_user', 'anjalishaw2610@gmail.com', 'abc123', 'EE', 'Anjali', 'Shaw', '20170032', 'hgjhgdjv', 'Hall-13,NIT Durgapur, Mah', '9083688241', 'female', 'GEN', 'second year', '2018-04-09', 'image.jpg'),
(8, 'uchiha_sasuke', 'sasuke@hiddenleaf.com', 'abc123', 'EE', 'Sasuke', 'Uchiha', '20170089', 'hjdjhgcj', 'Orochimaru hideout', '12345', 'male', 'PWD', 'second year', '2018-04-06', 'th (3).jpg'),
(9, 'anjali', 'anjalishaw2610@gmail.com', 'abc123', 'EE', 'Anjali', 'Shaw', '20170094', 'dsfsf', 'Hall-13,NIT Durgapur, Mah', '9083688241', 'female', 'GEN', 'second year', '2018-04-02', 'imagess.jpg'),
(11, 'Mikasa', 'mikasa@snk.jp', 'abc456', 'ME', 'Mikasa', 'Ackerman', '20180076', 'Levi Ackerman', 'Wall Maria', '12345678', 'female', 'GEN', 'first year', '2014-07-16', 'the-attack-on-titan-movies-flop-in-america-but-season-2-of-the-anime-is-coming-soon-att-680629-1050x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rejectedusers`
--

DROP TABLE IF EXISTS `rejectedusers`;
CREATE TABLE IF NOT EXISTS `rejectedusers` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `regnum` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `cellnum` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejectedusers`
--

INSERT INTO `rejectedusers` (`id`, `username`, `email`, `password`, `department`, `firstname`, `lastname`, `regnum`, `gname`, `praddress`, `cellnum`, `gender`, `category`, `year`, `dob`, `image`) VALUES
(4, 'khatake', 'khatake@gmail.com', 'abc123', 'IT', 'Kakashi', 'Hatake', '20140098', 'Sakumo', 'Konoha', '123456', 'female', 'GEN', 'final year', '2018-03-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `cellnum` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `email`, `password`, `department`, `firstname`, `lastname`, `regnum`, `gname`, `praddress`, `cellnum`, `gender`, `category`, `year`, `dob`, `image`) VALUES
(10, 'abcd', 'abcd@gmail.com', 'abc123', 'EE', 'Anjali', 'Shaw', '20150072', 'cdcdc', 'Hall-13,NIT Durgapur, Mah', '9083688241', 'male', 'OBC', 'first year', '2018-04-02', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
