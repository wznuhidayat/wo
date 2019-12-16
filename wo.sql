-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 02:27 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.3.11-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wo`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_tenda`
--

CREATE TABLE `p_tenda` (
  `kode_tenda` varchar(14) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vendor` int(30) NOT NULL,
  `price` int(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_tenda`
--

INSERT INTO `p_tenda` (`kode_tenda`, `name`, `vendor`, `price`, `detail`, `img`) VALUES
('TE363838674006', 'tenda ijo', 2132111, 2000000, 'dasda', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `username` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`username`, `name`, `password`, `img`) VALUES
('adrian', 'ahmad adrian', '8c4205ec33d8f6caeaaaa0c10a14138c', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_sound`
--

CREATE TABLE `t_sound` (
  `sound_id` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `address` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`email`, `name`, `password`, `phone`, `gender`, `address`, `img`) VALUES
('ekoju@gmail.com', 'ekoju', '8a9a90935d5c9caa5f47e973dc22cbe5', '083144353354', 'L', 'palembang', ''),
('intanmaulida@gmail.com', 'intan maulida', 'c079f23d612970847aa341df16793272', '032940230492', 'P', 'gresik', ''),
('tegarseptiano@gmail.com', 'tegar septiano', 'bc44c7f00c1901c9e1214a7554e1d80e', '083144353354', 'L', 'wonogiri', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_vendor`
--

CREATE TABLE `t_vendor` (
  `id_vendor` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `address` varchar(50) NOT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_vendor`
--

INSERT INTO `t_vendor` (`id_vendor`, `name`, `email`, `password`, `phone`, `address`, `img`) VALUES
(22976895, 'intan maulida', 'intanmaulida@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '08123456781', 'gresik', 'default.jpg'),
(56247184, 'wisnu artt', 'nextwznu@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '083144353355', 'tulung aggung', 'default.jpg'),
(1576407100, 'aini bahrul izza', 'ainibahrul@gmail.com', 'ainibahrul', '2038409234', 'dasdas', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_tenda`
--
ALTER TABLE `p_tenda`
  ADD PRIMARY KEY (`kode_tenda`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_sound`
--
ALTER TABLE `t_sound`
  ADD PRIMARY KEY (`sound_id`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `t_vendor`
--
ALTER TABLE `t_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_sound`
--
ALTER TABLE `t_sound`
  ADD CONSTRAINT `t_sound_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
