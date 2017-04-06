-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 07:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `times_vending`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`name`, `date`, `location`) VALUES
('(eBook - PDF) - Programming - C Sharp Language Ref', '2016-11-18', 'uploads/(eBook - PDF) - Programming - C Sharp Language Reference 0.1.pdf'),
('0764548298.pdf', '2016-11-18', 'uploads/0764548298.pdf'),
('2679.pdf', '2016-11-18', 'uploads/2679.pdf'),
('582e8bcb65a410.39511855.pdf', '2016-11-18', 'uploads/582e8bcb65a410.39511855.pdf'),
('582e8cb9a038c6.07184024.pdf', '2016-11-18', 'uploads/582e8cb9a038c6.07184024.pdf'),
('A Programmer''s Introduction to C# - APress.pdf', '2016-11-18', 'uploads/A Programmer''s Introduction to C# - APress.pdf'),
('A Programmer_s Introduction to C# - APress.pdf', '2016-11-18', 'uploads/A Programmer_s Introduction to C# - APress.pdf'),
('C# and VB_NET Comparison Cheat Sheet ASP Alliance.', '2016-11-18', ''),
('Part1.pdf', '2016-11-18', 'uploads/Part1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
