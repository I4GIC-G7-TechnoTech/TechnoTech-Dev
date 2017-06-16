-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 06:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `title`, `content`, `author`, `featureImage`, `postImage`, `youtubeLink`, `created`, `updated`, `deleted`) VALUES
(3, 'Camera1', '<p>Camera1</p>', NULL, './../public/img/imgGallery/f1497595185.jpg', '', '', '2017-06-16 06:39:45', '2017-06-16 06:39:45', '2017-06-16 06:39:45'),
(4, 'Camera2', '<p>Camera2</p>', NULL, './../public/img/imgGallery/f1497595205.jpg', '', '', '2017-06-16 06:40:05', '2017-06-16 06:40:05', '2017-06-16 06:40:05'),
(5, 'Camera3', '<p>Camera3</p>', NULL, './../public/img/imgGallery/f1497595390.jpg', '', '', '2017-06-16 06:43:10', '2017-06-16 06:43:10', '2017-06-16 06:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `title`, `content`, `author`, `featureImage`, `postImage`, `youtubeLink`, `created`, `updated`, `deleted`) VALUES
(1, 'Com1', '<p>Com1</p>', NULL, './../public/img/imgGallery/f1497591879.jpg', '', '', '2017-06-16 05:44:39', '2017-06-16 05:44:39', '2017-06-16 05:44:39'),
(2, 'com2', '<p>com2</p>', NULL, './../public/img/imgGallery/f1497591893.jpg', '', '', '2017-06-16 05:44:53', '2017-06-16 05:44:53', '2017-06-16 05:44:53'),
(3, 'com3', '<p>com3</p>', NULL, './../public/img/imgGallery/f1497591910.jpg', '', '', '2017-06-16 05:45:10', '2017-06-16 05:45:10', '2017-06-16 05:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureImage` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postImage` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `youtubeLink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `author`, `featureImage`, `postImage`, `youtubeLink`, `created`, `updated`, `deleted`) VALUES
(67, 'Tst', '<p>Comenet</p>', NULL, './../public/img/imgGallery/f1497544843.jpg', './../public/img/imgGallery/p1497544843.jpg', '', '2017-06-15 16:40:43', '2017-06-15 23:40:43', '2017-06-15 16:40:43'),
(68, 'Hello', '<p>TEst</p>', NULL, './../public/img/imgGallery/f1497575623.jpg', './../public/img/imgGallery/p1497575623.jpg', '', '2017-06-16 01:13:43', '2017-06-16 08:13:43', '2017-06-16 01:13:43'),
(69, 'Hello2', '<p>Test2</p>', NULL, './../public/img/imgGallery/f1497575661.jpg', './../public/img/imgGallery/p1497575661.jpg', '', '2017-06-16 01:14:21', '2017-06-16 08:14:21', '2017-06-16 01:14:21'),
(70, 'Hello3', '<p>Test3</p>', NULL, './../public/img/imgGallery/f1497575678.jpg', './../public/img/imgGallery/p1497575678.jpg', '', '2017-06-16 01:14:38', '2017-06-16 08:14:38', '2017-06-16 01:14:38'),
(71, 'News5', '<p>News5</p>', NULL, './../public/img/imgGallery/f1497589620.jpg', './../public/img/imgGallery/p1497589620.jpg', '', '2017-06-16 05:07:00', '2017-06-16 12:07:00', '2017-06-16 05:07:00'),
(72, 'News6', '<p>news6</p>', NULL, './../public/img/imgGallery/f1497590813.jpg', './../public/img/imgGallery/p1497590813.jpg', '', '2017-06-16 05:26:53', '2017-06-16 12:26:53', '2017-06-16 05:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `title`, `content`, `author`, `featureImage`, `postImage`, `youtubeLink`, `created`, `updated`, `deleted`) VALUES
(2, 'Phone1', '<p>phone1</p>', NULL, './../public/img/imgGallery/f1497591458.jpg', './../public/img/imgGallery/p1497591458.jpg', '', '2017-06-16 05:37:38', '2017-06-16 05:37:38', '2017-06-16 05:37:38'),
(3, 'Phone2', '<p>phone</p>', NULL, './../public/img/imgGallery/f1497591477.jpg', './../public/img/imgGallery/p1497591477.jpg', '', '2017-06-16 05:37:57', '2017-06-16 05:37:57', '2017-06-16 05:37:57'),
(4, 'Phone3', '<p>Phone3</p>', NULL, './../public/img/imgGallery/f1497591502.jpg', './../public/img/imgGallery/p1497591502.jpg', '', '2017-06-16 05:38:22', '2017-06-16 05:38:22', '2017-06-16 05:38:22'),
(5, 'Phone4', '<p>Phone4</p>', NULL, './../public/img/imgGallery/f1497591527.jpg', './../public/img/imgGallery/p1497591527.jpg', '', '2017-06-16 05:38:47', '2017-06-16 05:38:47', '2017-06-16 05:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `profilePic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id`, `title`, `content`, `author`, `featureImage`, `postImage`, `youtubeLink`, `created`, `updated`, `deleted`) VALUES
(1, 'Wiki1', '<p>Wiki1</p>', NULL, './../public/img/imgGallery/f1497588071.jpg', './../public/img/imgGallery/p1497588071.jpg', '', '2017-06-16 04:41:11', '2017-06-16 04:41:11', '2017-06-16 04:41:11'),
(2, 'Wiki2', '<p>Wiki2</p>', NULL, './../public/img/imgGallery/f1497588089.jpg', './../public/img/imgGallery/p1497588089.jpg', '', '2017-06-16 04:41:29', '2017-06-16 04:41:29', '2017-06-16 04:41:29'),
(3, 'Wiki3', '<p>Wiki3</p>', NULL, './../public/img/imgGallery/f1497588107.jpg', './../public/img/imgGallery/p1497588107.jpg', '', '2017-06-16 04:41:47', '2017-06-16 04:41:47', '2017-06-16 04:41:47'),
(4, 'Wiki4', '<p>wiki4</p>', NULL, './../public/img/imgGallery/f1497590761.jpg', './../public/img/imgGallery/p1497590761.jpg', '', '2017-06-16 05:26:01', '2017-06-16 05:26:01', '2017-06-16 05:26:01'),
(5, 'Wiki5', '<p>Wiki5</p>', NULL, './../public/img/imgGallery/f1497590922.jpg', './../public/img/imgGallery/p1497590922.jpg', '', '2017-06-16 05:28:42', '2017-06-16 05:28:42', '2017-06-16 05:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
