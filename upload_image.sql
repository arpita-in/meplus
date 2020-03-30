-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2019 at 04:46 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

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
-- Table structure for table `upload_image`
--

CREATE TABLE `upload_image` (
  `user_id` varchar(20) NOT NULL,
  `image_id` varchar(20) NOT NULL,
  `image_name` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `upload_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_image`
--

INSERT INTO `upload_image` (`user_id`, `image_id`, `image_name`, `path`, `file_name`, `upload_time`) VALUES
('kdfjkadjfj', 'pQPX4GyOVjbRhJo0', '', 'uploads/images', '1901111547190836.jpg', '2019-01-11 12:01:56'),
('kdfjkadjfj', 'pQPX4GyOVjbRhJo0', '', 'uploads/images', '1901111547190836.jpg', '2019-01-11 12:01:56'),
('kdfjkadjfj', 'pQPX4GyOVjbRhJo0', '', 'uploads/images', '1901111547190836.jpg', '2019-01-11 12:01:56'),
('kdfjkadjfj', 'pQPX4GyOVjbRhJo0', '', 'uploads/images', '1901111547190836.jpg', '2019-01-11 12:01:56'),
('kdfjkadjfj', 'pQPX4GyOVjbRhJo0', '', 'uploads/images', '1901111547190836.jpg', '2019-01-11 12:01:56'),
('MFSk03ULvitqHhzI', '5BHsnLAi1FMNuZwr', '', 'uploads/images', '1901111547202115.jpg', '2019-01-11 03:01:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
