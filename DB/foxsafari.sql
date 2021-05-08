-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 05:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foxsafari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `email`, `time`) VALUES
(1, 'balaji', 'balaji', 'balajisivasakthi2020@gmail.com', '2021-05-02 20:59:52'),
(2, '11', 'balaji', 'balaji@gmail.com', '2021-05-02 20:59:52'),
(3, 'n', 'balaji', 'sivasakthi7772@gmail.com', '2021-05-02 20:59:52'),
(5, 'ddd', 'karthikeyan', 'karthi@gmail.com', '2021-05-02 20:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inside`
--

CREATE TABLE `inside` (
  `id` int(100) NOT NULL,
  `title` varchar(225) NOT NULL,
  `from-place` varchar(225) NOT NULL,
  `to-place` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(225) NOT NULL,
  `done-time` date NOT NULL DEFAULT current_timestamp(),
  `image` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inside`
--

INSERT INTO `inside` (`id`, `title`, `from-place`, `to-place`, `date`, `time`, `price`, `done-time`, `image`) VALUES
(3, 'New Event', 'covaI', 'CHENNAI', '2021-05-07', '19:40:36', 5000, '0000-00-00', 0x);

-- --------------------------------------------------------

--
-- Table structure for table `outside`
--

CREATE TABLE `outside` (
  `id` int(100) NOT NULL,
  `title` varchar(225) NOT NULL,
  `from-place` varchar(225) NOT NULL,
  `to-place` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(225) NOT NULL,
  `done-time` date NOT NULL DEFAULT current_timestamp(),
  `image` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `time`) VALUES
(1, 'kkkk', 2147483647, 'kkk@gmail.com', 'karthikeyan', '2021-05-03 03:55:55'),
(2, 'gsfhgadfg', 24134235, 'dfhadfhadffgnhsfg@gmail.opcm', 'fbadfbadfb', '2021-05-03 03:55:55'),
(3, 'hell', 44444444441, 'karthiramesh56ss@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2021-05-03 04:58:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inside`
--
ALTER TABLE `inside`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inside`
--
ALTER TABLE `inside`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
