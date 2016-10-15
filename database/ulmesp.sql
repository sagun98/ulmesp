-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2016 at 06:13 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulmesp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ulmesp`
--

CREATE TABLE `ulmesp` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post_time` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulmesp`
--

INSERT INTO `ulmesp` (`id`, `name`, `post_time`, `description`) VALUES
(20, 'momo.png', '2016 Oct 15', 'change'),
(21, 'DSC01046.JPG', '2016 Oct 15', 'THi is the familyfdsadfsgfdsfdsa'),
(22, '20160820_150837.jpg', '2016 Oct 15', 'data is updated'),
(23, 'cartoon.png', '2016 Oct 15', 'No description'),
(24, 'Momo.jpg', '2016 Oct 15', 'No description');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ulmesp`
--
ALTER TABLE `ulmesp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ulmesp`
--
ALTER TABLE `ulmesp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
