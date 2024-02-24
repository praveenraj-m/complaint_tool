-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2024 at 09:21 PM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_password` varchar(15) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Admin Information';

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_password`, `admin_name`, `admin_email`, `admin_phone`) VALUES
(1010, 'admin', 'admin', 'admin@admin.com', '9090909909');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_info`
--

DROP TABLE IF EXISTS `complaint_info`;
CREATE TABLE IF NOT EXISTS `complaint_info` (
  `complaint_id` int NOT NULL AUTO_INCREMENT,
  `tracking_id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` varchar(250) NOT NULL,
  `tracking_status` varchar(13) NOT NULL,
  `admin_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `complaint_raise_date` date NOT NULL,
  `complaint_update_date` date NOT NULL,
  PRIMARY KEY (`complaint_id`),
  UNIQUE KEY `tracking_id` (`tracking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Complaint Information';

--
-- Dumping data for table `complaint_info`
--

INSERT INTO `complaint_info` (`complaint_id`, `tracking_id`, `name`, `email`, `phone`, `description`, `tracking_status`, `admin_remarks`, `ip_address`, `complaint_raise_date`, `complaint_update_date`) VALUES
(35, 2131335638, 'Praveen', 'd@gamil.com', '8988238282', 'Complaints are pending', 'Completed', 'Hey as per the latest update your complaint has been resolved.\r\nFor details contact:\r\nJohn, john@jonhson.com ', '127.0.0.1', '0000-00-00', '0000-00-00'),
(38, 2042509205, 'Mani', 'mani@gmail.com', '94967494561', 'Hey what kind of products are you selling. They looks like already used one.', 'Open', '', '127.0.0.1', '0000-00-00', '0000-00-00'),
(37, 2142884877, 'varun', 'varun@gmail.com', '745544454546465', 'I have some complaints about the mobile I have bought\r\n', 'Open', '', '127.0.0.1', '0000-00-00', '0000-00-00'),
(39, 2074005673, 'Rajesh', 'rajesh@gmail.com', '9514684561351', 'My TV was not working and the display shows some random lines\r\n', 'In Progress', 'Your complaint is in progress and it will be completed as soon as possible.\r\nFor details contact:\r\nNisha, nisha@vinisha.com', '127.0.0.1', '0000-00-00', '0000-00-00'),
(40, 2105193344, 'Thamarai', 'thamarai@gmail.com', '954198749844', 'Give me the refund for the mixer  I have returned', 'Open', '', '127.0.0.1', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_status`
--

DROP TABLE IF EXISTS `complaint_status`;
CREATE TABLE IF NOT EXISTS `complaint_status` (
  `status_id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(15) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Status Information';

--
-- Dumping data for table `complaint_status`
--

INSERT INTO `complaint_status` (`status_id`, `status_name`) VALUES
(1, 'Open'),
(2, 'In Progress'),
(3, 'Completed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
