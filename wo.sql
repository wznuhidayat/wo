-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 03:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `p_dress`
--

CREATE TABLE `p_dress` (
  `kode_dress` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_dress`
--

INSERT INTO `p_dress` (`kode_dress`, `name`, `price`, `type`, `detail`, `img`) VALUES
('1578251871', 'batak edition', 100000, 'asd', 'aa', 'profile-200105.png'),
('1578251923', 'jawa v2', 200000, 'asd', 'a', 'profile--200105.jpg'),
('1578252306', 'aku adalah', 100000, 'asd', 'a', 'profile-.png'),
('1578253861', 'aku adalah', 200000, 'asd', 'a', 'profile-200105.png'),
('DR5066212586', 'papua', 200000, 'asd', 'a', 'profile--200105.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_kuade`
--

CREATE TABLE `p_kuade` (
  `kode_kuade` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_kuade`
--

INSERT INTO `p_kuade` (`kode_kuade`, `name`, `price`, `detail`, `category`, `img`) VALUES
('TR5068275414', 'kuade', 200000, 'a', 'a', 'item-200113-62021a1833.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `p_makeup`
--

CREATE TABLE `p_makeup` (
  `kode_makeup` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_makeup`
--

INSERT INTO `p_makeup` (`kode_makeup`, `name`, `price`, `detail`, `category`, `img`) VALUES
('TR5068272643', 'diana makeup', 100000, 'a', 'a', 'item-200113-269cb020d9.png');

-- --------------------------------------------------------

--
-- Table structure for table `p_photo`
--

CREATE TABLE `p_photo` (
  `kode_photograp` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_photo`
--

INSERT INTO `p_photo` (`kode_photograp`, `name`, `price`, `type`, `detail`, `img`) VALUES
('DR5066347257', 'reza foto', 2000000, '1', 'a', 'item-200106-fae75a8425.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_tenda`
--

CREATE TABLE `p_tenda` (
  `kode_tenda` varchar(14) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vendor` int(30) NOT NULL,
  `price` int(20) NOT NULL,
  `discount` int(5) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_tenda`
--

INSERT INTO `p_tenda` (`kode_tenda`, `name`, `vendor`, `price`, `discount`, `detail`, `img`) VALUES
('TE363838674006', 'tenda ijo', 2132111, 10, 5, 'dasda', 'default.jpg'),
('TE364172547399', 'tenda', 123213, 200000, 10, 'adssa', 'default.jpg'),
('TE364172570008', 'tenda abang', 123012301, 200000, 100, 'asdas', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_transport`
--

CREATE TABLE `p_transport` (
  `kode_transport` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_transport`
--

INSERT INTO `p_transport` (`kode_transport`, `name`, `price`, `category`, `detail`, `img`) VALUES
('a', 'a', 1000000, 'a', 'a', 'item-200111-76a46a2fef.JPG'),
('TR5066344958', 'harapan jaya', 200000, 'bus', 'a', 'item-200111-abe6f17ee7.JPG');

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

--
-- Dumping data for table `t_sound`
--

INSERT INTO `t_sound` (`sound_id`, `name`, `id_vendor`, `price`, `kategori`, `detail`, `img`) VALUES
('SO3641656790', 'sound', 22976895, '200000', 'medium', 'asda', '');

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
(22976895, 'intan maulidaa', 'intanmaulida@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '08123456781', 'gresik', 'profile-200105.png'),
(56247184, 'wisnu artt', 'nextwznu@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '083144353355', 'tulung aggung', 'profile-200105.png'),
(1577102538, 'aku adalah', 'akuadalah@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0812345678', 'a', 'profile-191223.png'),
(1577102568, 'aku wisnu', 'akuadalaha@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', 'a', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_dress`
--
ALTER TABLE `p_dress`
  ADD PRIMARY KEY (`kode_dress`);

--
-- Indexes for table `p_photo`
--
ALTER TABLE `p_photo`
  ADD PRIMARY KEY (`kode_photograp`);

--
-- Indexes for table `p_tenda`
--
ALTER TABLE `p_tenda`
  ADD PRIMARY KEY (`kode_tenda`);

--
-- Indexes for table `p_transport`
--
ALTER TABLE `p_transport`
  ADD PRIMARY KEY (`kode_transport`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
