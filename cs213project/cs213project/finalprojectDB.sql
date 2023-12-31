-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2020 at 07:44 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojectDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `user_id` int NOT NULL,
  `music_id` int NOT NULL,
  `music_genre` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `music` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`user_id`, `music_id`, `music_genre`, `Title`, `album_name`, `music`) VALUES
(2, 5, 'kwaito', 'Daisy', 'Daisies', 'song1.mp3'),
(2, 6, 'kwaito', 'Hello', 'Hello', 'song1.mp3'),
(2, 7, 'kwaito', 'Summer', 'Summer Day', 'song1.mp3'),
(2, 8, 'kwaito', 'Great', ' Day', 'song1.mp3'),
(2, 9, 'kwaito', 'Daisy', 'Daisies', 'song1.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE `paintings` (
  `painting_id` int NOT NULL,
  `user_id` int NOT NULL,
  `painting` varchar(100) NOT NULL,
  `painting_type` varchar(50) NOT NULL,
  `painting_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paintings`
--

INSERT INTO `paintings` (`painting_id`, `user_id`, `painting`, `painting_type`, `painting_name`) VALUES
(25, 2, 'art2.png', 'acrylic', 'Waves'),
(26, 2, 'art1.jpg', 'abstract', 'Femme Africaine'),
(27, 20, 'art2.png', 'watercolor', 'Waves '),
(28, 2, 'art1.jpg', 'acrylic', 'drupal');

-- --------------------------------------------------------

--
-- Table structure for table `photogragh`
--

CREATE TABLE `photogragh` (
  `photography_id` int NOT NULL,
  `user_id` int NOT NULL,
  `photograph_name` varchar(50) NOT NULL,
  `photograph` varchar(100) NOT NULL,
  `photograph_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photogragh`
--

INSERT INTO `photogragh` (`photography_id`, `user_id`, `photograph_name`, `photograph`, `photograph_type`) VALUES
(6, 2, 'Flowers', 'art3.jpg', 'nature'),
(7, 2, 'Waves', 'art2.png', 'nature'),
(8, 2, 'Femme Africaine', 'art1.jpg', 'macro'),
(9, 2, 'White Flower', '20190211_160241.jpg', 'land'),
(10, 2, 'pink Flower', '20190603_185015.jpg', 'nature'),
(11, 2, 'Nature', 'new.jpg', 'macro'),
(12, 2, 'Art', 'art3.jpg', 'macro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `art` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_id` int NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `art`, `email`, `user_id`, `country`) VALUES
('jdoe', 'd35514736146439b7277437016cdb40d7fb65497', 'Music', 'jdoe@gmail.com', 2, 'mali'),
('jdoen', 'letmein', 'photography', 'jdoe@gmail.com', 3, 'burkina Faso'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 4, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 5, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 6, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 7, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 8, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 9, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 10, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 11, 'cape-verde'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 12, 'congo-brazzaville'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 13, 'congo-brazzaville'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 14, 'congo-brazzaville'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 15, 'congo-brazzaville'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 16, 'congo-brazzaville'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'elliot', 17, 'congo-brazzaville'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 18, 'cape-verde'),
('hello', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'painting', 'world', 19, 'cape-verde'),
('Summer', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'summer@gmail.com', 20, 'chad'),
('Summer', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'summer@gmail.com', 21, 'chad'),
('Summer', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'summer@gmail.com', 22, 'chad'),
('Summer', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'summer@gmail.com', 23, 'chad'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'jdoe@hotmail.com', 24, 'burundi'),
('jdoe', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'music', 'jdoe@hotmail.com', 25, 'burundi'),
('Ali Jason ', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'ali@gmail.com', 26, 'cape-verde'),
('Ali Jason ', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'ali@gmail.com', 27, 'cape-verde'),
('Ali Jason', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'alij@gmail.com', 28, 'chad'),
('Ali Jason', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'photography', 'alij@gmail.com', 29, 'chad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`painting_id`);

--
-- Indexes for table `photogragh`
--
ALTER TABLE `photogragh`
  ADD PRIMARY KEY (`photography_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `painting_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `photogragh`
--
ALTER TABLE `photogragh`
  MODIFY `photography_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
