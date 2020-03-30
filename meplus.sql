-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2019 at 04:56 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `hacking`
--

CREATE TABLE `hacking` (
  `certification_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `full_description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hacking`
--

INSERT INTO `hacking` (`certification_id`, `title`, `short_description`, `full_description`) VALUES
(1, 'demo title hacking certification', 'demo short descriptiion hacking table', 'this is full long description of the one row of the hacking table');

-- --------------------------------------------------------

--
-- Table structure for table `programming_languages`
--

CREATE TABLE `programming_languages` (
  `certification_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `full_description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_development`
--

CREATE TABLE `web_development` (
  `certification_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `full_description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hacking`
--
ALTER TABLE `hacking`
  ADD PRIMARY KEY (`certification_id`);

--
-- Indexes for table `programming_languages`
--
ALTER TABLE `programming_languages`
  ADD PRIMARY KEY (`certification_id`);

--
-- Indexes for table `web_development`
--
ALTER TABLE `web_development`
  ADD PRIMARY KEY (`certification_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hacking`
--
ALTER TABLE `hacking`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `programming_languages`
--
ALTER TABLE `programming_languages`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `web_development`
--
ALTER TABLE `web_development`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
