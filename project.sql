-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 06:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertData` (IN `name` VARCHAR(15), IN `email` VARCHAR(20), IN `message` VARCHAR(200))  BEGIN
INSERT into contact(name,email,message)VALUES (name,email,message);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booktimings`
--

CREATE TABLE `booktimings` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktimings`
--

INSERT INTO `booktimings` (`id`, `cid`, `bdate`) VALUES
(1, 68, '2019-11-11 19:24:24'),
(2, 69, '2019-11-11 19:32:52'),
(3, 70, '2019-11-11 19:35:22'),
(4, 71, '2019-11-12 13:29:56'),
(5, 74, '2019-11-12 14:20:44'),
(6, 75, '2019-11-12 14:56:39'),
(7, 76, '2019-11-12 15:48:15'),
(8, 78, '2019-11-12 15:59:48'),
(9, 79, '2019-11-12 19:43:34'),
(10, 80, '2019-11-12 19:45:08'),
(11, 81, '2019-11-13 19:54:04'),
(12, 83, '2019-11-13 20:31:26'),
(13, 84, '2019-11-13 21:19:15'),
(14, 85, '2019-11-13 21:21:39'),
(15, 86, '2019-11-13 23:15:30'),
(16, 87, '2019-11-13 23:20:28'),
(17, 88, '2019-11-13 23:27:27'),
(18, 89, '2019-11-13 23:33:09'),
(19, 90, '2019-11-14 16:59:45'),
(20, 91, '2019-11-14 21:03:45'),
(21, 92, '2019-11-14 21:05:22'),
(22, 93, '2019-11-17 17:57:34'),
(23, 94, '2019-11-17 18:34:58'),
(24, 95, '2019-11-17 18:57:53'),
(25, 96, '2019-11-17 19:01:30'),
(26, 97, '2019-11-17 19:06:51'),
(27, 98, '2019-11-17 21:34:30'),
(28, 99, '2019-11-17 21:41:22'),
(29, 100, '2019-11-18 19:08:53'),
(30, 101, '2019-11-18 19:09:13'),
(31, 102, '2019-11-19 20:10:58'),
(32, 103, '2019-11-19 20:12:36'),
(33, 104, '2019-11-20 18:34:12'),
(34, 105, '2019-11-20 22:15:42'),
(35, 106, '2019-11-23 19:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('varuni', 'varunipherle@gmail.c', 'asdgh'),
('varuni', 'varunipherle@gmail.c', 'asdgh'),
('varuni', 'varunipherle@gmail.c', '123'),
('varuni', 'varunipherle@gmail.c', '123885'),
('uiiiio', 'ssvd123@yahoo.co.in', 'hello'),
('', '', ''),
('hamo', 'ssvd123@yahoo.co.in', 'lolll'),
('varuni', 'varunipherle@gmail.c', 'fddhgkk'),
('', '', ''),
('bvhhh', 'varuni@gmail.com', 'fcgthg'),
('varuni', 'varunipherle@gmail.c', 'i hate this bus');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `name` varchar(15) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `pid`, `email`, `date`, `price`, `contact`, `seat`, `name`, `r_id`) VALUES
(42, 46, 'varunipherle@gm', '2019-11-09', 2000, '9945181260', 'A1,B1', 'varuni', 1),
(43, 47, 'ramya@gmail.com', '2019-11-10', 6000, '9900889965', 'A1,A2,A3', 'ramya', 3),
(45, 49, 'ssvd123@yahoo.c', '2019-11-23', 3000, '9845281446', 'A1,A2,A3', 'nagendra herle', 1),
(46, 50, 'varunipherle@gm', '2019-11-07', 2000, '9845281446', 'A1,A2', 'varuni', 1),
(47, 51, 'varunipherle@gm', '2019-11-08', 2000, '9341601855', 'A1,A2', 'varuni', 1),
(48, 52, 'varunipherle@gm', '2019-11-10', 2000, '9341601855', 'A2,A3', 'varuni', 1),
(49, 53, 'varunipherle@gm', '2019-11-17', 2000, '9945181126', 'E2,E3', 'varuni', 1),
(50, 54, 'varunipherle@gm', '2019-11-17', 2000, '9945181126', 'D3,E1', 'varuni', 1),
(51, 55, 'varunipherle@gm', '2019-11-17', 2000, '9341601855', 'A3,B1', 'varuni', 1),
(52, 56, 'varunipherle@gm', '2019-11-10', 2000, '9845281446', 'B1,B3', 'varuni', 1),
(53, 57, 'dhruvitha@gamil', '2019-11-10', 2000, '9341601855', 'C1,C3', 'dhruvitha', 1),
(54, 58, 'hello@gmail.com', '2019-11-10', 2000, '9341601855', 'D2,E3', 'geeetthhh', 1),
(55, 59, 'varuni@yahoo.co', '2019-11-07', 2000, '9845281446', 'B1,B2', 'varuni', 1),
(56, 60, 'ssvd123@yahoo.c', '2019-11-09', 1000, '9845281446', 'E3', 'varuni', 1),
(57, 61, 'varunipherle@gm', '2019-11-15', 1000, '9845281446', 'A2', 'varuni', 1),
(58, 62, 'pvaruniherle@gm', '2019-11-14', 1000, '9845281446', 'A2', 'varuni', 1),
(59, 63, 'pvaruniherle@gm', '2019-11-14', 1000, '9845281446', 'E3', 'varuni', 1),
(60, 64, 'prabhanjanpmh@g', '2019-11-16', 1000, '9995612323', 'A2', 'prabhanjan', 1),
(61, 65, 'ssvd123@yahoo.c', '2019-11-16', 2000, '9845281446', 'D3,E2', 'varuni', 1),
(62, 66, 'ssvd123@yahoo.c', '2019-11-15', 1500, '9845281446', 'B1', 'nagendra herle', 4),
(63, 67, 'ssvc1972@gmail.', '2019-11-16', 800, '9341601855', 'B3', 'susheela', 5),
(64, 68, 'varunipherle@gm', '2019-11-09', 1000, '9845281446', 'A3', 'varuni', 1),
(65, 69, 'varunipherle@gm', '2019-11-30', 1000, '9845281446', 'C1', 'varuni', 1),
(66, 70, 'varunipherle@gm', '2019-11-15', 1000, '9945181126', 'E1', 'varuni', 1),
(67, 71, 'varunipherle@gm', '2019-11-15', 1000, '9845281446', 'B1', 'varuni', 1),
(68, 72, 'ssvc1972@gmail.', '2019-11-22', 2000, '9845281446', 'C2,C3', 'susheela', 1),
(69, 73, 'ssvc1972@gmail.', '2019-11-29', 1000, '9845281446', 'B3', 'susheela', 1),
(70, 74, 'ssvc1972@gmail.', '2019-11-10', 1000, '9845281446', 'C2', 'susheela', 1),
(71, 75, 'varunipherle@gm', '2019-11-12', 2000, '9945181126', 'A2,A3', 'g', 1),
(74, 78, 'abc@gmail.com', '2019-11-29', 2000, '1213112', 'D3,E1', 'abc', 1),
(75, 80, 'jawad.ahmedkp@g', '2019-11-07', 1000, '6969696969', 'A3', 'studboii', 1),
(76, 81, 'dhruvitha@gamil', '2019-11-14', 13000, '9341601855', 'A1,A3,B1,B2,B3,C1,C2,C3,D1,D2,', 'dhruvitha', 1),
(78, 83, 'varunipherle@gm', '2019-11-16', 2000, '9341601855', 'A1,C2', 'varuni', 1),
(79, 84, 'varunipherle@gm', '2019-11-07', 2000, '9845281446', 'C2,D1', 'varuni', 1),
(80, 85, 'varunipherle@gm', '2019-11-16', 1000, '9845281446', 'F2', 'varuni', 1),
(81, 86, 'varunipherle@gm', '2019-11-14', 1000, '9845281446', 'F2', 'varuni', 1),
(83, 89, 'ssvc1972@gmail.', '2019-11-08', 3000, '9341601855', 'B2,C3,D2', 'varuni', 1),
(84, 90, 'varunipherle@gm', '2019-11-23', 2000, '9945181126', 'B3,E3', 'varuni', 1),
(85, 92, 'varunipherle@gm', '2019-11-22', 1000, '9845281446', 'D3', 'varuni', 1),
(86, 93, 'varunipherle@gm', '2019-11-07', 1000, '9945181126', 'F2', 'varuni', 1),
(87, 94, 'varunipherle@gm', '2019-11-15', 1000, '9845281446', 'D2', 'varuni', 1),
(88, 95, 'varunipherle@gm', '2019-11-08', 1000, '9945181126', 'B1', 'varuni', 1),
(89, 96, 'varunipherle@gm', '2019-12-03', 2000, '9845281446', 'A2,B3', 'varuni', 1),
(90, 97, 'varunipherle@gm', '2019-11-03', 1000, '9341601855', 'A3', 'varuni', 1),
(91, 98, 'varunipherle@gm', '2019-11-23', 1000, '9845281446', 'F3', 'varuni', 1),
(92, 99, 'varunipherle@gmail.com', '2019-11-15', 1000, '9341601855', 'F2', 'varuni', 1),
(93, 100, 'varunipherle@gmail.com', '2019-11-28', 3000, '9845281446', 'A2,F2,G3', 'varuni', 1),
(94, 101, 'varunipherle@gmail.com', '2019-11-21', 1000, '9845281446', 'F2', 'varuni', 1),
(95, 102, 'prabhanjanpmh@gmail.com', '0000-00-00', 1000, '9845281446', 'A2', 'dhrabanjan', 1),
(96, 103, 'varunipherle@gmail.com', '2019-11-08', 1000, '9341601855', 'C2', 'susheela', 1),
(97, 104, 'varunipherle@gmail.com', '2019-11-23', 1000, '9845281446', 'F2', 'varuni', 1),
(98, 105, 'varuni@gmail.com', '2019-11-23', 1000, '9945181260', 'C2', 'varuni', 1),
(99, 106, 'ssvd123@yahoo.co.in', '2019-11-21', 1000, '9845281446', 'A1', 'varuni', 1),
(100, 107, 'varuni@gmail.com', '2019-11-24', 1000, '9945181260', 'E2', 'varuni', 1),
(101, 109, 'varuni@gmail.com', '2019-11-24', 1000, '9945181260', 'E2', 'varuni', 1),
(102, 110, 'varunipherle@gmail.com', '2019-11-29', 1000, '9845281446', 'A1', 'varuni', 1),
(103, 111, 'varunipherle@gmail.com', '2019-11-20', 1000, '7932800', 'A1', 'varuni', 1),
(104, 112, 'varunipherle@gmail.com', '2019-11-21', 1000, '9966454845', 'A2', 'varuni', 1),
(105, 113, 'ssvc1972@gmail.com', '2019-11-22', 1000, '9945181260', 'A1', 'susheela', 1),
(106, 114, 'ssvc1972@gmail.com', '2019-11-30', 2000, '9341601855', 'A2,F3', 'varuni', 1);

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `booking` AFTER INSERT ON `customer` FOR EACH ROW insert into booktimings VALUES(null,new.id,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `refno` varchar(28) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `refno`, `contact`, `price`) VALUES
(46, '123400000', '9945181260', 2000),
(47, '12369', '9900889965', 6000),
(49, '1236955', '9845281446', 3000),
(50, '0002', '9845281446', 2000),
(51, '12336987', '9341601855', 2000),
(52, 'hihj', '9341601855', 2000),
(53, '455569', '9945181126', 2000),
(54, '526985', '9945181126', 2000),
(55, '45369', '9341601855', 2000),
(56, '1236987', '9845281446', 2000),
(57, '123698', '9341601855', 2000),
(58, '1236547892', '9341601855', 2000),
(59, '12345fg', '9845281446', 2000),
(60, 'as4556', '9845281446', 1000),
(61, 'as1234', '9845281446', 1000),
(62, '12369asfdg', '9845281446', 1000),
(63, 'asdfg45', '9845281446', 1000),
(64, '123698pp', '9995612323', 1000),
(65, '12369233', '9845281446', 2000),
(66, 'asdt656677', '9845281446', 1500),
(67, 'assdf233', '9341601855', 800),
(68, '1225sdfgh', '9845281446', 1000),
(69, 'asdf78965', '9845281446', 1000),
(70, '12345tyu', '9945181126', 1000),
(71, 'asdzxc', '9845281446', 1000),
(72, '1234asdfg', '9845281446', 2000),
(73, 'cgffd678', '9845281446', 1000),
(74, 'asdfg3456', '9845281446', 1000),
(75, 'affh775538', '9945181126', 2000),
(76, 'asdf3335ee', '12345', 1000),
(78, '352R', '1213112', 2000),
(80, '3214w5q6', '6969696969', 1000),
(81, '3443443443', '9341601855', 13000),
(82, 'addfgf3233', '9341601855', 2000),
(83, 'addt567', '9341601855', 2000),
(84, 'HI900', '9845281446', 2000),
(85, 'asdfgMB', '9845281446', 1000),
(86, 'asdfg1234d', '9845281446', 1000),
(87, 'asdfgfdgft', '9341601855', 3000),
(89, 'asdfgfdgftrdc', '9341601855', 3000),
(90, '12369adasf', '9945181126', 2000),
(92, 'asdfghdsagf4', '9845281446', 1000),
(93, 'asdfghyr445', '9945181126', 1000),
(94, 'sdfe1215231', '9845281446', 1000),
(95, '12369nvnhm', '9945181126', 1000),
(96, '12369bnvgh', '9845281446', 2000),
(97, 'asdfghmnnnhb', '9341601855', 1000),
(98, '12369fsdgfer', '9845281446', 1000),
(99, '123456sdfghjvgh', '9341601855', 1000),
(100, '1236fdhtyn', '9845281446', 3000),
(101, 'qgdsvf61768', '9845281446', 1000),
(102, '12369jhgfuygf', '9845281446', 1000),
(103, 'asdfghsaccfv', '9341601855', 1000),
(104, 'asdfghjhuj', '9845281446', 1000),
(105, 'hbfjh873458927', '9945181260', 1000),
(106, 'fytg656453', '9845281446', 1000),
(107, 'safasdgryst56', '9945181260', 1000),
(109, 'safasdgryst56hhh', '9945181260', 1000),
(110, 'asdfghcatismyhe', '9845281446', 1000),
(111, 'hatimeresathi', '7932800', 1000),
(112, 'asdfh6789hj', '9966454845', 1000),
(113, '123vsdsgjjj', '9945181260', 1000),
(114, 'imnotugly', '9341601855', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `r_id` int(11) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`r_id`, `s_id`, `date`) VALUES
(1, 'A1', '2019-11-09'),
(1, 'B1', '2019-11-09'),
(1, 'A1', '2019-11-23'),
(1, 'A2', '2019-11-23'),
(1, 'A3', '2019-11-23'),
(1, 'A1', '2019-11-23'),
(1, 'A2', '2019-11-23'),
(1, 'A3', '2019-11-23'),
(1, 'A1', '2019-11-07'),
(1, 'A2', '2019-11-07'),
(1, 'A1', '2019-11-08'),
(1, 'A2', '2019-11-08'),
(1, 'A2', '2019-11-10'),
(1, 'A3', '2019-11-10'),
(1, 'E2', '2019-11-17'),
(1, 'E3', '2019-11-17'),
(1, 'D3', '2019-11-17'),
(1, 'E1', '2019-11-17'),
(1, 'A3', '2019-11-17'),
(1, 'B1', '2019-11-17'),
(1, 'B1', '2019-11-10'),
(1, 'B3', '2019-11-10'),
(1, 'C1', '2019-11-10'),
(1, 'C3', '2019-11-10'),
(1, 'D2', '2019-11-10'),
(1, 'E3', '2019-11-10'),
(1, 'B1', '2019-11-07'),
(1, 'B2', '2019-11-07'),
(1, 'E3', '2019-11-09'),
(1, 'A2', '2019-11-15'),
(1, 'A2', '2019-11-14'),
(1, 'E3', '2019-11-14'),
(1, 'A2', '2019-11-16'),
(1, 'D3', '2019-11-16'),
(1, 'E2', '2019-11-16'),
(1, 'A3', '2019-11-09'),
(1, 'C1', '2019-11-30'),
(1, 'E1', '2019-11-15'),
(1, 'B1', '2019-11-15'),
(1, 'C2', '2019-11-22'),
(1, 'C3', '2019-11-22'),
(1, 'B3', '2019-11-29'),
(1, 'C2', '2019-11-10'),
(1, 'A2', '2019-11-12'),
(1, 'A3', '2019-11-12'),
(1, 'E3', '2019-11-13'),
(1, 'E3', '2019-11-13'),
(1, 'D3', '2019-11-29'),
(1, 'E1', '2019-11-29'),
(1, 'D3', '2019-11-29'),
(1, 'E1', '2019-11-29'),
(1, 'A3', '2019-11-07'),
(1, 'A1', '2019-11-14'),
(1, 'A3', '2019-11-14'),
(1, 'B1', '2019-11-14'),
(1, 'B2', '2019-11-14'),
(1, 'B3', '2019-11-14'),
(1, 'C1', '2019-11-14'),
(1, 'C2', '2019-11-14'),
(1, 'C3', '2019-11-14'),
(1, 'D1', '2019-11-14'),
(1, 'D2', '2019-11-14'),
(1, 'D3', '2019-11-14'),
(1, 'E1', '2019-11-14'),
(1, 'E2', '2019-11-14'),
(1, 'A1', '2019-11-16'),
(1, 'C2', '2019-11-16'),
(1, 'A1', '2019-11-16'),
(1, 'C2', '2019-11-16'),
(1, 'C2', '2019-11-07'),
(1, 'D1', '2019-11-07'),
(1, 'F2', '2019-11-16'),
(1, 'F2', '2019-11-14'),
(1, 'B2', '2019-11-08'),
(1, 'C3', '2019-11-08'),
(1, 'D2', '2019-11-08'),
(1, 'B2', '2019-11-08'),
(1, 'C3', '2019-11-08'),
(1, 'D2', '2019-11-08'),
(1, 'B2', '2019-11-08'),
(1, 'C3', '2019-11-08'),
(1, 'D2', '2019-11-08'),
(1, 'B3', '2019-11-23'),
(1, 'E3', '2019-11-23'),
(1, 'B3', '2019-11-23'),
(1, 'E3', '2019-11-23'),
(1, 'D3', '2019-11-22'),
(1, 'F2', '2019-11-07'),
(1, 'D2', '2019-11-15'),
(1, 'B1', '2019-11-08'),
(1, 'A2', '2019-12-03'),
(1, 'B3', '2019-12-03'),
(1, 'A3', '2019-11-03'),
(1, 'F3', '2019-11-23'),
(1, 'F2', '2019-11-15'),
(1, 'A2', '2019-11-28'),
(1, 'F2', '2019-11-28'),
(1, 'G3', '2019-11-28'),
(1, 'F2', '2019-11-21'),
(1, 'A2', '0000-00-00'),
(1, 'C2', '2019-11-08'),
(1, 'F2', '2019-11-23'),
(1, 'C2', '2019-11-23'),
(1, 'A1', '2019-11-21'),
(1, 'E2', '2019-11-24'),
(1, 'E2', '2019-11-24'),
(1, 'E2', '2019-11-24'),
(1, 'A1', '2019-11-29'),
(1, 'A1', '2019-11-20'),
(1, 'A2', '2019-11-21'),
(1, 'A1', '2019-11-22'),
(1, 'A2', '2019-11-30'),
(1, 'F3', '2019-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `r_id` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`r_id`, `source`, `dest`, `price`, `type`, `time`) VALUES
(1, 'BANGLORE', 'MUMBAI', 1000, 'AC', '9:00pm'),
(2, 'MUMBAI', 'BANGLORE', 1800, 'AC', '9:00 pm'),
(3, 'UDUPI', 'MANGLORE', 500, 'AC', '9:40pm');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `s_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`s_id`) VALUES
('A1'),
('A2'),
('A3'),
('B1'),
('B2'),
('B3'),
('C1'),
('C2'),
('C3'),
('D1'),
('D2'),
('D3'),
('E1'),
('E2'),
('E3'),
('F1'),
('F2'),
('F3'),
('G1'),
('G2'),
('G3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('varuni', 'varuni123', 'varunipherle@gm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktimings`
--
ALTER TABLE `booktimings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `r_id` (`r_id`),
  ADD KEY `r_id_2` (`r_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `refno` (`refno`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD KEY `r_id` (`r_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktimings`
--
ALTER TABLE `booktimings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `pid` FOREIGN KEY (`pid`) REFERENCES `payment` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `r_id` FOREIGN KEY (`r_id`) REFERENCES `route` (`r_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `s_id` FOREIGN KEY (`s_id`) REFERENCES `seat` (`s_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
