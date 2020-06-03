-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2020 at 12:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` char(8) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `judul`, `penulis`, `penerbit`, `gambar`) VALUES
(1, '12345678', 'Runtuhnya Hindia Belanda', 'Onghokham', 'Gramedia', '1.jpg'),
(2, '13424256', 'The American Adventures', 'Mark Twain', 'Elex Media Komputindo', '2.jpg'),
(3, '98392402', 'Kitab Bahasa Tubuh', 'Allan &amp; Barbara', 'Gramedia', '3.jpg'),
(4, '94923742', 'Diary of a Wimpy Kid 1', 'Jeff Kinney', 'Amulet', '4.jpg'),
(13, '13324255', 'Lisa Diary', 'Arleen A &amp; Veronica Gabriella', 'Bhuana Sastra', '5ed67dba12641.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '$2y$10$ZgVUhq8NzErdERXCE8ErAeqAyxEXgyykFnwPlycQvmXUMv.vIcNHe'),
(2, 'Yemima Sutanto', 'yemima', '$2y$10$5RzOxo4oO3v6u8ZFJ9lJhOd.tRovH2YfApGLY43QG1kZtvQT4/Vda'),
(3, 'Elkana Hans', 'elknhns', '$2y$10$F5P5YnQpPcXHKUeqxuQAX.R7ikbkOm0mxW1LOpev79xI.d7RIltDy'),
(4, 'Pootreth Production', 'pootreth', '$2y$10$o2JI7bwlINcEE048d5RFmuczxBvH57TWHx4/0ZMPny7lsLHwI7BGq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
