-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 01:01 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `Name`, `Pass_word`) VALUES
(1, 'eddy', 'eddy');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `id` int(255) NOT NULL,
  `Student_name` varchar(250) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Student_birth_place` varchar(250) NOT NULL,
  `Student_birth_date` year(4) NOT NULL,
  `Student_region` varchar(50) NOT NULL,
  `Student_division` varchar(50) NOT NULL,
  `Student_subdivision` varchar(50) NOT NULL,
  `Student_city` varchar(50) NOT NULL,
  `Student_area` varchar(50) NOT NULL,
  `Student_email` varchar(50) NOT NULL,
  `Student_tell_code` int(50) NOT NULL,
  `Student_tell` int(50) NOT NULL,
  `Father_name` varchar(255) NOT NULL,
  `Father_code` int(10) NOT NULL,
  `Father_tell` int(50) NOT NULL,
  `Father_birth_place` varchar(250) NOT NULL,
  `Father_occupation` varchar(50) NOT NULL,
  `Mother_name` varchar(255) NOT NULL,
  `Mother_code` int(10) NOT NULL,
  `Mother_tell` int(50) NOT NULL,
  `Mother_birth_place` varchar(255) NOT NULL,
  `Mother_occupation` varchar(255) NOT NULL,
  `Gardian_name` varchar(255) NOT NULL,
  `Gardian_code` int(10) NOT NULL,
  `Gardian_tell` int(50) NOT NULL,
  `Gardian_birth_place` varchar(255) NOT NULL,
  `Gardian_occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`id`, `Student_name`, `Sex`, `Student_birth_place`, `Student_birth_date`, `Student_region`, `Student_division`, `Student_subdivision`, `Student_city`, `Student_area`, `Student_email`, `Student_tell_code`, `Student_tell`, `Father_name`, `Father_code`, `Father_tell`, `Father_birth_place`, `Father_occupation`, `Mother_name`, `Mother_code`, `Mother_tell`, `Mother_birth_place`, `Mother_occupation`, `Gardian_name`, `Gardian_code`, `Gardian_tell`, `Gardian_birth_place`, `Gardian_occupation`) VALUES
(4, 'wertyui', 'male', 'ertyu', 2019, 'ghjkl', 'fghnjmk,', 'fgyuio', 'limbe', ' vbhjkmjnb', 'goddyedmond@gmail.com', 237, 23456789, '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
(5, 'wertyui', 'male', 'ertyu', 2019, 'ghjkl', 'fghnjmk,', 'fgyuio', 'limbe', ' vbhjkmjnb', 'goddyedmond@gmail.com', 237, 23456789, '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
