-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2022 at 03:06 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20014872_abc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id` int(11) NOT NULL,
  `suhu` decimal(11,0) NOT NULL,
  `kelembaban` int(11) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`id`, `suhu`, `kelembaban`, `tgl`) VALUES
(1, 27, 75, '2022-12-16 15:32:15'),
(2, 27, 74, '2022-12-16 15:34:58'),
(3, 27, 74, '2022-12-16 15:39:53'),
(4, 28, 74, '2022-12-16 15:41:55'),
(5, 28, 73, '2022-12-16 15:43:56'),
(6, 28, 74, '2022-12-16 15:45:57'),
(7, 25, 78, '2022-12-17 10:29:52'),
(8, 25, 77, '2022-12-17 10:31:57'),
(9, 25, 78, '2022-12-17 10:33:59'),
(10, 25, 78, '2022-12-17 10:36:02'),
(11, 25, 78, '2022-12-17 10:38:05'),
(12, 25, 78, '2022-12-17 10:40:07'),
(13, 25, 78, '2022-12-17 10:42:10'),
(14, 25, 78, '2022-12-17 10:44:15'),
(15, 25, 78, '2022-12-17 10:46:17'),
(16, 26, 76, '2022-12-17 10:48:20'),
(17, 26, 75, '2022-12-17 10:50:22'),
(18, 26, 75, '2022-12-17 10:52:25'),
(19, 29, 85, '2022-12-17 10:54:27'),
(20, 28, 74, '2022-12-17 10:56:29'),
(21, 28, 72, '2022-12-17 10:58:32'),
(22, 27, 72, '2022-12-17 11:00:34'),
(23, 26, 73, '2022-12-17 11:02:37'),
(24, 26, 74, '2022-12-17 11:04:39'),
(25, 29, 87, '2022-12-17 11:06:42'),
(26, 27, 80, '2022-12-17 11:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'John Doe', 'john@mail.com', 'admin', '99c5e07b4d5de9d18c350cdf64c5aa3d'),
(2, 'Michel Mona', 'mona@mail.com', 'member', 'aa08769cdcb26674c6706093503ff0a3'),
(3, 'Kurnia Aisyah', 'aisyah@gmail.com', 'aisyah', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Irbah Azhaar Nazhifah', 'irbah@gmail.com', 'irb', '202cb962ac59075b964b07152d234b70'),
(10, 'rexena', 'rexena@gmail.com', 'rexena', '202cb962ac59075b964b07152d234b70'),
(11, 'kurnia', 'kurnia@gmail.com', 'kurnia', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'nabila cantik', 'nabiladp@gmail.com', 'nabilacantii', '202cb962ac59075b964b07152d234b70'),
(13, 'Nabila', 'nabila@gmail.com', 'nbl', '202cb962ac59075b964b07152d234b70'),
(14, 'Kurnia Nur Aisyah', 'aishi@gmail.com', 'kurniaaisyah', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
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
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
