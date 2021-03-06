-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 08:56 AM
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
(12, 'karthikeyamofficl', 'ed7bb817085e119815490462d29d8798', 'karthiramesh56@gmail.com', '2021-05-08 23:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleryin`
--

CREATE TABLE `galleryin` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleryin`
--

INSERT INTO `galleryin` (`id`, `image`, `image_text`) VALUES
(4, 'download.jpg', 'this is the image with beautiful background');

-- --------------------------------------------------------

--
-- Table structure for table `galleryout`
--

CREATE TABLE `galleryout` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleryout`
--

INSERT INTO `galleryout` (`id`, `image`, `image_text`) VALUES
(5, 'hari1.PNG', 'wow what a beauty');

-- --------------------------------------------------------

--
-- Table structure for table `inside`
--

CREATE TABLE `inside` (
  `id` int(100) NOT NULL,
  `title` varchar(225) NOT NULL,
  `fromplace` varchar(225) NOT NULL,
  `toplace` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inside`
--

INSERT INTO `inside` (`id`, `title`, `fromplace`, `toplace`, `date`, `time`, `price`, `image`, `image_text`) VALUES
(18, 'karthikeyan', 'ooty', 'kodaikanal', '5555-05-05', '05:55:00', 5555, 'download.jpg', 'see it');

-- --------------------------------------------------------

--
-- Table structure for table `outside`
--

CREATE TABLE `outside` (
  `id` int(100) NOT NULL,
  `title` varchar(225) NOT NULL,
  `fromplace` varchar(225) NOT NULL,
  `toplace` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outside`
--

INSERT INTO `outside` (`id`, `title`, `fromplace`, `toplace`, `date`, `time`, `price`, `image`, `image_text`) VALUES
(18, 'hello', 'kk', 'dp', '6666-06-06', '06:06:00', 66666, 'Emoji Meanings Dictionary List _ App Price Drops.png', 'wowowowwo');

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
(1, 'kkkk', 2147483647, 'kkk@gmail.com', 'karthikeyan', '2021-05-03 03:55:55');

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
-- Indexes for table `galleryin`
--
ALTER TABLE `galleryin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryout`
--
ALTER TABLE `galleryout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inside`
--
ALTER TABLE `inside`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outside`
--
ALTER TABLE `outside`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galleryin`
--
ALTER TABLE `galleryin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleryout`
--
ALTER TABLE `galleryout`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inside`
--
ALTER TABLE `inside`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `outside`
--
ALTER TABLE `outside`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
