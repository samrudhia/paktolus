-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontform`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `mname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `zipcode` varchar(250) DEFAULT NULL,
  `unit` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `birthdate` varchar(250) DEFAULT NULL,
  `mobileno` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `mname`, `lname`, `address`, `state`, `city`, `zipcode`, `unit`, `email`, `birthdate`, `mobileno`) VALUES
(1, 'samrudhi', 'Krishna', 'Aher', 'H-201, parksyde residency,  indira nagar\r\nPathardi Road', 'maharashtra', 'NASHIK', '422009', '15', 'ahersamrudhi321@gmail.com', '1994-05-05', '7507202196'),
(2, 'samrudhi', 'Krishna', 'Aher', 'H-201, parksyde residency,  indira nagar\r\nPathardi Road', 'maharashtra', 'NASHIK', '422009', '15', 'ahersamrudhi321@gmail.com', '1994-05-05', '7507202196');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `code` char(2) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `code`, `name`) VALUES
(1, 'AL', 'Alabama'),
(2, 'AK', 'Alaska'),
(3, 'AS', 'American Samoa'),
(4, 'AZ', 'Arizona'),
(5, 'AR', 'Arkansas'),
(6, 'CA', 'California'),
(7, 'CO', 'Colorado'),
(8, 'CT', 'Connecticut'),
(9, 'DE', 'Delaware'),
(10, 'DC', 'District of Columbia'),
(11, 'FM', 'Federated States of Micronesia'),
(12, 'FL', 'Florida'),
(13, 'GA', 'Georgia'),
(14, 'GU', 'Guam'),
(15, 'HI', 'Hawaii'),
(16, 'ID', 'Idaho'),
(17, 'IL', 'Illinois'),
(18, 'IN', 'Indiana'),
(19, 'IA', 'Iowa'),
(20, 'KS', 'Kansas'),
(21, 'KY', 'Kentucky'),
(22, 'LA', 'Louisiana'),
(23, 'ME', 'Maine'),
(24, 'MH', 'Marshall Islands'),
(25, 'MD', 'Maryland'),
(26, 'MA', 'Massachusetts'),
(27, 'MI', 'Michigan'),
(28, 'MN', 'Minnesota'),
(29, 'MS', 'Mississippi'),
(30, 'MO', 'Missouri'),
(31, 'MT', 'Montana'),
(32, 'NE', 'Nebraska'),
(33, 'NV', 'Nevada'),
(34, 'NH', 'New Hampshire'),
(35, 'NJ', 'New Jersey'),
(36, 'NM', 'New Mexico'),
(37, 'NY', 'New York'),
(38, 'NC', 'North Carolina'),
(39, 'ND', 'North Dakota'),
(40, 'MP', 'Northern Mariana Islands'),
(41, 'OH', 'Ohio'),
(42, 'OK', 'Oklahoma'),
(43, 'OR', 'Oregon'),
(44, 'PW', 'Palau'),
(45, 'PA', 'Pennsylvania'),
(46, 'PR', 'Puerto Rico'),
(47, 'RI', 'Rhode Island'),
(48, 'SC', 'South Carolina'),
(49, 'SD', 'South Dakota'),
(50, 'TN', 'Tennessee'),
(51, 'TX', 'Texas'),
(52, 'UT', 'Utah'),
(53, 'VT', 'Vermont'),
(54, 'VI', 'Virgin Islands'),
(55, 'VA', 'Virginia'),
(56, 'WA', 'Washington'),
(57, 'WV', 'West Virginia'),
(58, 'WI', 'Wisconsin'),
(59, 'WY', 'Wyoming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
