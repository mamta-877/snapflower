-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 07:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsnap`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbblog`
--

CREATE TABLE `tbblog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbblog`
--

INSERT INTO `tbblog` (`id`, `title`, `pic`, `description`, `poston`) VALUES
(1, 'Feature Shoot', 'img15.jpg', 'Showcasing the work of established photographers, Feature Shoot focuses on featuring photo stories across several categories. Topics include portraits, still life photography, landscapes, fine art, and some of the very best documentary photography. They appreciate images that tell stories and focus on the narrative behind each photo.', '2023-06-05'),
(2, 'Chase Jarvis', 'img50.jpg', 'Chase Jarvis travels the world capturing both still and motion pictures. He aims to be “...as creative as possible towards everything I endeavor.” So, his photography blog features inspiring photo shoots, in addition to tips on how to improve your photography. He often interviews his subjects or other professionals in his blog posts.', '2023-06-05'),
(3, 'Depositphotos Blog', 'img51.jpg', 'Depositphotos has a great blog where they write about photography, design, and marketing. They publish photography tutorials, latest trends, stock photography insights, and marketing tips. If you need some inspiration, you can read their interviews with famous photographers, explore featured collections of images from their library or keep up with the latest trends.', '2023-06-05'),
(4, 'Ken Kaminesky', 'img52.jpg', 'Ken Kaminesky likes to take photos because he loves the work. For fifteen years, he has supplied lifestyle images for stock photography agencies. With technically sound and consistent work, he knows how to set up an excellent photo shoot. His posts focus on tutorials and “how to” articles featuring knowledge from the field.', '2023-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`id`, `name`, `email`, `website`, `message`) VALUES
(1, 'laxika', '123@gmail.com', '', 'hi..my name is lakshika'),
(3, 'laxika', '123@gmail.com', 'https//:www.gmail.com', 'hi i am lakshika.'),
(6, 'lakshika ', 'lakshika@gmail.com', 'https:// www.gmail.com ', 'hi I am going on a side note.'),
(10, 'lakshika ', 'lakshika@Gmail.com', 'https:// www.Google.com', 'hi i am laxika'),
(11, 'laxika', 'laxika2005@gmail.com ', 'https:// www.google.com', 'fuvbnjem;em ');

-- --------------------------------------------------------

--
-- Table structure for table `tbhome`
--

CREATE TABLE `tbhome` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbhome`
--

INSERT INTO `tbhome` (`id`, `email`) VALUES
(1, '123@gmail.com'),
(2, '123@gmail.com'),
(3, '123@gmail.com'),
(5, '123@gmail.com'),
(7, 'lakshika@gmail.com'),
(8, 'lakshika@Gmail.com'),
(9, 'lakshika@Gmail.com'),
(10, 'lakshika@Gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbblog`
--
ALTER TABLE `tbblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbhome`
--
ALTER TABLE `tbhome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbblog`
--
ALTER TABLE `tbblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbhome`
--
ALTER TABLE `tbhome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
