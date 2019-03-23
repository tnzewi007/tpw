-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 03:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptw`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `audio_title` varchar(200) DEFAULT NULL,
  `audio_name` varchar(200) DEFAULT NULL,
  `file_size` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

/*INSERT INTO `audio` (`id`, `audio_title`, `audio_name`, `file_size`, `created_at`, `updated_at`) VALUES
(1, 'The lords Shepard', '13-Lagos-To-Kampala.mp3', '0', '2018-08-11 07:36:52', '0000-00-00 00:00:00'),
(2, 'Gospel truth', 'Sonnie_Badu-ESE_OLUWA_busysinging.com.mp3', '0', '2018-08-11 07:39:39', '0000-00-00 00:00:00'),
(3, 'Drake', 'copy745377new13-Lagos-To-Kampala.mp3', '0', '2018-08-11 07:43:07', '0000-00-00 00:00:00'),
(4, 'Songs', 'Mr-Eazi-Hollup-ft-Joey-B-x-Dammy-Krane.mp3', '0', '2018-08-11 07:46:36', '0000-00-00 00:00:00'),
(5, 'Try docx', 'A TERM PAPPER ON EBOLA VIRUS.docx', '18866', '2018-08-11 08:04:50', '0000-00-00 00:00:00'),
(6, 'Good now', 'copy574445new13-Lagos-To-Kampala.mp3', '0', '2018-08-11 08:06:51', '0000-00-00 00:00:00');
*/
-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_title` varchar(200) DEFAULT NULL,
  `message_body` varchar(2000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `last_login`) VALUES
  ('1', 'lawalgoodness14@gmail.com', 'hope123', 'olawale', 'lawal', '2018-08-08 08:54:34'),
  ('2', 'tnzewi@gmail.com', 'hope123', 'tochukwu', 'nzewi', '2018-08-08 08:54:34'),
  ('3', 'kencode007@gmail.com', 'hope123', 'kenneth', 'nwobi', '2018-08-08 08:54:34');
-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video_title` varchar(200) DEFAULT NULL,
  `video_name` varchar(200) DEFAULT NULL,
  `file_size` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
