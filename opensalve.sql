-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 10:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opensalve`
--

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` text NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL,
  `people` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `uid`, `title`, `lat`, `lng`, `people`, `tag`, `phone`) VALUES
(1, 5, 'Kainakary Post Office', '9.480852490279304', '76.38832569122314', 0, 0, '+9475578965'),
(2, 5, 'Paloma Backwater Resorts', '9.484238805630962', '76.37905597686768', 0, 0, '+9475578965'),
(3, 5, 'St Mary''s Church', '9.48178373033339', '76.3948917388916', 50, 0, '+9475578965'),
(4, 5, 'Gov High School', '9.48481024304974', '76.38630867004395', 114, 0, '+9475578965'),
(5, 5, 'Catholic Church', '9.485004307794387', '76.39640705297847', 45, 0, '+9475578965'),
(6, 5, 'Chavara Bhavan', '9.491730909508112', '76.39115810394287', 78, 0, '+9475578965'),
(7, 5, 'Kumarakom School', '9.621426519193264', '76.4254767133092', 78, 0, '+9475578965'),
(8, 5, 'Muhamma School', '9.601297262364174', '76.36028435552566', 85, 0, '+9475578965'),
(9, 5, 'Chambakulam School', '9.40891454392502', '76.4104914335129', 85, 0, '+9475578965'),
(10, 5, 'Palamattom School', '9.498755789748847', '76.60903279117701', 67, 0, '+9475578965'),
(11, 5, 'Thiruvanathapuram', '8.57346380470179', '76.96101115431588', 45, 0, '+9475578965'),
(12, 5, 'Ernakulam School', '9.994876907291092', '76.29165667211032', 47, 0, '+9475578965'),
(13, 5, 'Kollam School', '8.895951475938', '76.65715150267783', 78, 0, ''),
(14, 5, 'Mukathala School', '8.915230970416175', '76.64902846718996', 89, 0, ''),
(15, 5, 'Chakirikkada Junction', '8.867602296548078', '76.62775039672852', 56, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `camp` int(11) NOT NULL,
  `item` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `required_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `camp`, `item`, `quantity`, `required_quantity`) VALUES
(1, 1, '0', 5, 0),
(2, 2, 'Water Bottles', 5, 15),
(3, 4, 'Water Bottles', 15, 15),
(4, 4, 'Water Bottles', 15, 15),
(5, 4, 'Water Bottles', 15, 15),
(6, 4, 'Water Bottles', 5, 15),
(7, 4, 'Water Bottles', 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` text NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `startedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) NOT NULL DEFAULT 'u'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `startedon`, `role`) VALUES
(1, 'ramanan', 'mocha', '2018-08-04 11:11:30', 'u'),
(3, 'subin', 'su/bin', '2018-08-04 11:32:28', 'u'),
(4, 'geon', 'george', '2018-08-04 12:54:43', 'u'),
(5, 'a', 'a', '2018-08-04 14:23:03', 'a'),
(6, 'a', 'a', '2018-08-05 01:53:24', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
