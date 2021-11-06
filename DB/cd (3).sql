-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3000
-- Generation Time: Nov 17, 2020 at 08:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd`
--

-- --------------------------------------------------------

--
-- Table structure for table `userl`
--

CREATE TABLE `userl` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userl`
--

INSERT INTO `userl` (`email`, `name`, `password`) VALUES
('nakshaj1999@gmail.com', 'Akshaj', 'd0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09'),
('nanna_madhu@yahoo.com', 'MADHU', 'd0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09'),
('ram@gmail.com', 'Ram', 'd0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09'),
('shyam@gmail.com', 'snyam', 'd0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09');

-- --------------------------------------------------------

--
-- Table structure for table `userla`
--

CREATE TABLE `userla` (
  `email` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userla`
--

INSERT INTO `userla` (`email`, `name`, `password`) VALUES
('gaurnsharora@gmail.com', 'gauransh', '3f6ce6dfd36edac3317193231228628fdc6739d98b3b275cb279b6009d7b2b82994d9c3db0d52a4d7bb75677be081c7f0c6759f3b01fb3c4bdd050454ed7e42ed0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab093da31b82892eb1d5f853d68c6707d790e2f4b2e06009590764e2867eede5aa67170bcb934ac924d80f02db9f2998db8a06c924341b312fdfa136d9faa0e3ddef'),
('nakshaj1999@gmail.com', 'Akshaj', 'a331eeb16fad8e4780e2a4c9de3b669c280558061217f059c6744e03e90eafdfdc074f79885168101f0cea3332a844cef21cda8b6d849d4db56ad46fcca87c5fd0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab0919541b0188016df966c5432719b27017544df88c36d542d737ba9331ace8e6e0b0d936afd48ec4b6989abd52f712206c2f57a9e887dd4b50c7c424b30dd4a37a'),
('nannapaneni.akshaj2018@vitstudent.ac.in', 'N Akshaj', '9de37f4dfb4fe1f664ddbfbad6bbfedca3fa8350942d0e1933be95e3906f558b6a2ab8c8bf5689081656fc223037d748a8e73bbf3db25f754e8757586cf62223d0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09f61fd406fec0942c464628bdb39599a1aaa02a6a3eac7e5d28900009451941d0c8302296274e8446c0b9e05d03f35a17b890a03a6acdd8de591b42edd7bf39a0'),
('nanna_madhu@yahoo.com', 'MADHU', 'f88d236d02c5c519fba616fef00d407c661e97f2cd9fed1602d43e2e1e65bfc78dec1fc32e4362764d42c0aec9bffb03b701a95799b1bd53498dcae66e2d1679d0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab09ebaad3a4fc94ba0c96eb785f9d25ac1ba3960224f38a0fb2f49d1859cce239682c3095c1371f9ac16c215b89301792684e905a221f14245e8a6303bd2d513945'),
('shyam@gmail.com', 'shyam', 'e030b465684c9df2a328cdd58dfb82f94c4b43d4b858a027c1fd5d75c2703f158dab7a476eaa8861ab0fab30d65523faa93ab0eb77fd46d47f6f4b32be6f562ed0293b9411c50f4be1a93aeb8d1b3abaddf6a0bd5b3fd9e01c7adcbd65d2f11201b4b54894538e22d71e059ce909a7621cfa5904efa5ce2b31dc79b82557ab097f66c0d3bb9eed9345c949b6934b9cc5ce6bdfdf113c9c9fc2bd9a1e31b5c7b165828ba6b8856985ab6846c599bdac5daf9225ac53bf59b541091c2d782cc6a0');

-- --------------------------------------------------------

--
-- Table structure for table `writ`
--

CREATE TABLE `writ` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `college` varchar(100) NOT NULL,
  `genre` varchar(60) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writ`
--

INSERT INTO `writ` (`id`, `user`, `title`, `description`, `college`, `genre`, `image`, `date`) VALUES
(3, 'Akshaj', 'Stone Quarry', 'A beautiful quarry behind our college. It is a place we never get bored even after visiting so many times. The first time when we went over there, we actualy bunked our classes.But it was our bad luck that our vehical broke down in the mid way and we had to pull it for around 5 KM to reach the mechanic. Even though it got so late, we went back to the quarry. The best thing to do there is the stepping stone in the water at the center of the quarry. It was a very good expirience.', 'VIT ', 'BUNKING CLASSES', '', '2020-07-21 03:32:51'),
(5, 'ram1234', 'Water Fight (A ritual in Boys Hostel)', 'A night, when there was noting to do my bestie came to my room with a bucket in hand. It was a call for the water fight. It was only 2 of us who started the thing, but within 15 min, it was the whole floor who got involved. As we started to go toward the badminton court, the whole hostel joined. We played this for around an hour, but when the security came whistling, we all ran up the stairs and locked ourselves into the first empty room found. It was a really memorable night.', 'IITB', 'HOSTEL', '', '2020-07-22 04:34:53'),
(11, 'Akshaj', 'Cup and Saucer', 'This was one of the most challenging, yet most memorable trek. This place is far from the vellore city and behind a village. We started at morning and reached the top in around 2 hours. Then relaxed for a while. We took a different unknown route to get down. We lost our way into the woods and had no clue in which direction we were heading. While getting down, my ankle got twisted and my leg started to swell. I was even difficult for me to walk. Somehow I started to walk, and finally we found stirs and descended down. By the time we reached back college, we all were so dirty that I have never been so dirty.', 'VIT', 'HOSTEL', '', '2020-11-17 06:52:31'),
(13, 'Akshaj', 'Good Times', 'A night, when there was noting to do my bestie came to my room with a bucket in hand. It was a call for the water fight. It was only 2 of us who started the thing, but within 15 min, it was the whole floor who got involved. As we started to go toward the badminton court, the whole hostel joined. We played this for around an hour, but when the security came whistling, we all ran up the stairs and locked ourselves into the first empty room found. It was a really memorable night.', 'VIT', 'FIGHTS', '', '2020-11-17 07:08:10'),
(14, 'Akshaj', 'Best Times', 'This was one of the most challenging, yet most memorable trek. This place is far from the vellore city and behind a village. We started at morning and reached the top in around 2 hours. Then relaxed for a while. We took a different unknown route to get down. We lost our way into the woods and had no clue in which direction we were heading. While getting down, my ankle got twisted and my leg started to swell. I was even difficult for me to walk. Somehow I started to walk, and finally we found stirs and descended down. By the time we reached back college, we all were so dirty that I have never been so dirty.', 'VIT', 'BUNKING CLASSES', '', '2020-11-17 07:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userl`
--
ALTER TABLE `userl`
  ADD PRIMARY KEY (`email`,`name`);

--
-- Indexes for table `userla`
--
ALTER TABLE `userla`
  ADD PRIMARY KEY (`email`,`name`);

--
-- Indexes for table `writ`
--
ALTER TABLE `writ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `writ`
--
ALTER TABLE `writ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
