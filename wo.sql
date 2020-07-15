-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 10:57 PM
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
-- Table structure for table `p_catering`
--

CREATE TABLE `p_catering` (
  `kode_catering` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_catering`
--

INSERT INTO `p_catering` (`kode_catering`, `name`, `id_vendor`, `price`, `category`, `detail`, `img`) VALUES
('CT5070605251', 'warung', 1577102568, 1000000, 1, 'a', 'item-200124-b991e1dcd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_dress`
--

CREATE TABLE `p_dress` (
  `kode_dress` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_dress`
--

INSERT INTO `p_dress` (`kode_dress`, `name`, `id_vendor`, `price`, `type`, `detail`, `img`) VALUES
('DR5070224086', 'batak', 1579097421, 1000000, '1', '1', 'item-200120-e9b3f2e3a0.png'),
('DR5070225083', 'jawa', 56247184, 1000000, '1', '1', 'default.jpg'),
('DR5070280625', 'betawi ', 22976895, 1, 'da', 'asda', 'default.jpg'),
('DR5118466838', 'batik moderen', 1593027851, 1200000, 'medium', 'L,XL,S', 'default.jpg'),
('DR5118468936', 'mandarin dress', 22976895, 12222222, 'low', 'L', 'default.jpg'),
('DR5118469138', 'Minang dress version', 1593027851, 30000000, 'high', 'XL', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_gedung`
--

CREATE TABLE `p_gedung` (
  `kode_gedung` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(20) NOT NULL,
  `category` varchar(1) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_gedung`
--

INSERT INTO `p_gedung` (`kode_gedung`, `name`, `id_vendor`, `price`, `category`, `detail`, `img`) VALUES
('GD5073834616', 'asdas', 56247184, 3123, 'a', 'asd', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_kuade`
--

CREATE TABLE `p_kuade` (
  `kode_kuade` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(12) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_kuade`
--

INSERT INTO `p_kuade` (`kode_kuade`, `name`, `id_vendor`, `price`, `detail`, `category`, `img`) VALUES
('KU5073832042', 'mewah', 1579097421, 200000, '1', '1', 'item-200202-b0ada4f4c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_kursi`
--

CREATE TABLE `p_kursi` (
  `kode_kursi` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_kursi`
--

INSERT INTO `p_kursi` (`kode_kursi`, `name`, `id_vendor`, `price`, `category`, `detail`, `img`) VALUES
('KR5070611193', 'chair', 22976895, 200000, '1', '1', 'item-200121-c57330a3a5.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `p_makeup`
--

CREATE TABLE `p_makeup` (
  `kode_makeup` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_makeup`
--

INSERT INTO `p_makeup` (`kode_makeup`, `name`, `id_vendor`, `price`, `detail`, `category`, `img`) VALUES
('TR5070284259', 'diana collection', 56247184, 12222, '1', '1', 'item-200120-db59260cce.JPG'),
('MK5073834526', 'asdass', 56247184, 123, '12', 'asda', 'item-200202-0b5f2caf4c.jpg'),
('MK5118482596', 'Nanik salon', 1593027851, 150000, 'a', 'makeup', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_photo`
--

CREATE TABLE `p_photo` (
  `kode_photograp` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_photo`
--

INSERT INTO `p_photo` (`kode_photograp`, `name`, `id_vendor`, `price`, `type`, `detail`, `img`) VALUES
('PH5070205184', 'kang adit', 22976895, 1000000, '1', '1', 'item-200202-007202387c.jpg'),
('PH5118482310', 'Reza Risa Studio', 1593027851, 300000, 'per sesi', 'aa', 'item-200713-ced556cd9f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_sound`
--

CREATE TABLE `p_sound` (
  `kode_sound` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_sound`
--

INSERT INTO `p_sound` (`kode_sound`, `name`, `id_vendor`, `price`, `category`, `detail`, `img`) VALUES
('SO3648656941', 'asdas', 22976895, '1000000', '22', '1', 'item-200709-3a15c7d0bb.png'),
('SO3648658255', '1', 22976895, '1000000', '1', '1', 'default.jpg'),
('SO5118760630', 'Sound Extra bass', 1593027851, '500000', 'med', 'a', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_tenda`
--

CREATE TABLE `p_tenda` (
  `kode_tenda` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_tenda`
--

INSERT INTO `p_tenda` (`kode_tenda`, `name`, `id_vendor`, `price`, `detail`, `img`) VALUES
('TE3648668614', 'asdas', 22976895, 1000000, '1', 'default.jpg'),
('TE3648668708', 'asdass', 22976895, 1000000, '1', 'default.jpg'),
('TE3683393313', 'Tenda Biru', 1593027851, 500000, 'full service', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_transport`
--

CREATE TABLE `p_transport` (
  `kode_transport` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_vendor` int(8) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_transport`
--

INSERT INTO `p_transport` (`kode_transport`, `name`, `id_vendor`, `price`, `category`, `detail`, `img`) VALUES
('TR5070231713', 'harapan jaya', 22976895, 1000000, '1', '1', 'item-200124-e27c71957d.jpg'),
('TR5074167001', 'chair', 22976895, 1000000, '1', '2', 'item-200203-9648c6933c.png'),
('TR5118482005', 'Elf ', 1593027851, 1200000, 'transp', 'free driver', 'default.jpg');

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
('adrian', 'ahmad adrian', '8c4205ec33d8f6caeaaaa0c10a14138c', 'profile-200124-324450bbc4.jpg'),
('dewi', 'dewi nafi', '597d306e0737661104758b58a970a003', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_blog`
--

CREATE TABLE `t_blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_meta_dress`
--

CREATE TABLE `t_meta_dress` (
  `kode_event_dress` varchar(12) NOT NULL,
  `kode_schedule` varchar(12) NOT NULL,
  `kode_dress` varchar(12) NOT NULL,
  `start_event` date NOT NULL,
  `end_event` date NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_schedule`
--

CREATE TABLE `t_schedule` (
  `kode_schedule` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `start_event` varchar(10) NOT NULL,
  `end_event` varchar(10) NOT NULL,
  `detail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_schedule`
--

INSERT INTO `t_schedule` (`kode_schedule`, `name`, `email_user`, `address`, `start_event`, `end_event`, `detail`) VALUES
('105e36ad88e3', 'adasd', 'ekoju@gmail.com', 'a', '02/20/20', '02/22/20', 'a'),
('105e373ce96b', 'adasd', 'ekoju@gmail.com', 's', '02/19/2020', '02/20/2020', 'a'),
('105e373cfdce', 'ahmad adrian', 'ekoju@gmail.com', 'a', '02/03/2020', '02/06/2020', 'a'),
('105e374766cd', 'wedding rumahan', 'ekoju@gmail.com', 'a', '02/10/2020', '02/12/2020', 'a'),
('105e8851e0d2', 'gedung A', 'ekoju@gmail.com', 'gfjhj', '04/28/2020', '04/22/2020', 'kljj'),
('105edcb78b14', 'asdasd', 'intanmaulida@gmail.com', 'asdas', '06/10/2020', '06/12/2020', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `img` varchar(300) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`email`, `name`, `password`, `phone`, `gender`, `address`, `img`) VALUES
('ekoju@gmail.com', 'ekoju', 'd41d8cd98f00b204e9800998ecf8427e', '083144353354', 'L', 'palembang', 'profile-200501-1f239457a5.jpg'),
('intanmaulida@gmail.com', 'intan maulida', 'c079f23d612970847aa341df16793272', '032940230492', 'P', 'gresik', 'profile-200501-1fbee9dc43.png'),
('nengimas@gmail.com', 'neng imas', '0cd4fc40f1601e757306ce29057e4659', NULL, NULL, NULL, 'default.jpg'),
('tegarseptiano@gmail.com', 'tegar septiano', 'd41d8cd98f00b204e9800998ecf8427e', '083144353354', 'L', 'wonogiri', 'profile-200501-936e8d4318.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_vendor`
--

CREATE TABLE `t_vendor` (
  `id_vendor` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_vendor`
--

INSERT INTO `t_vendor` (`id_vendor`, `name`, `email`, `password`, `phone`, `address`, `img`) VALUES
(22976895, 'intan maulidaa', 'intanmaulida@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '08123456781', 'gresik', 'profile-200105.png'),
(56247184, 'wisnu artt', 'nextwznu@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '083144353355', 'tulung aggung', 'profile-200105.png'),
(1577102568, 'aku wisnu', 'akuadalaha@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', 'a', 'default.jpg'),
(1579097421, 'azrial', 'muhammadazrial@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1', 'a', 'profile-200115-9dc603ead0.png'),
(1593027851, 'anggit hermawan', 'anggithermawan@gmail.com', '2e577e52ea50c6cf0a1e896c0295239a', NULL, 'alas', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlist`
--

CREATE TABLE `t_wishlist` (
  `id_wishlist` varchar(32) NOT NULL,
  `kode_product` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_wishlist`
--

INSERT INTO `t_wishlist` (`id_wishlist`, `kode_product`, `email`, `updated_at`) VALUES
('1594396296', 'KU5073832042', 'anggithermawan@gmail.com', '2020-07-10 15:51:36'),
('1594842943', 'TE3683393313', 'intanmaulida@gmail.com', '2020-07-15 19:55:43'),
('1594842947', 'MK5118482596', 'intanmaulida@gmail.com', '2020-07-15 19:55:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_catering`
--
ALTER TABLE `p_catering`
  ADD PRIMARY KEY (`kode_catering`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_dress`
--
ALTER TABLE `p_dress`
  ADD PRIMARY KEY (`kode_dress`),
  ADD KEY `p_dress_ibfk_1` (`id_vendor`);

--
-- Indexes for table `p_gedung`
--
ALTER TABLE `p_gedung`
  ADD PRIMARY KEY (`kode_gedung`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_kuade`
--
ALTER TABLE `p_kuade`
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_kursi`
--
ALTER TABLE `p_kursi`
  ADD PRIMARY KEY (`kode_kursi`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_makeup`
--
ALTER TABLE `p_makeup`
  ADD KEY `p_makeup_ibfk_1` (`id_vendor`);

--
-- Indexes for table `p_photo`
--
ALTER TABLE `p_photo`
  ADD PRIMARY KEY (`kode_photograp`),
  ADD KEY `p_photo_ibfk_1` (`id_vendor`);

--
-- Indexes for table `p_sound`
--
ALTER TABLE `p_sound`
  ADD PRIMARY KEY (`kode_sound`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_tenda`
--
ALTER TABLE `p_tenda`
  ADD PRIMARY KEY (`kode_tenda`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `p_transport`
--
ALTER TABLE `p_transport`
  ADD PRIMARY KEY (`kode_transport`),
  ADD KEY `p_transport_ibfk_1` (`id_vendor`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_blog`
--
ALTER TABLE `t_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `t_meta_dress`
--
ALTER TABLE `t_meta_dress`
  ADD PRIMARY KEY (`kode_event_dress`),
  ADD KEY `kode_schedule` (`kode_schedule`),
  ADD KEY `kode_dress` (`kode_dress`);

--
-- Indexes for table `t_schedule`
--
ALTER TABLE `t_schedule`
  ADD PRIMARY KEY (`kode_schedule`),
  ADD KEY `email_user` (`email_user`);

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
-- Indexes for table `t_wishlist`
--
ALTER TABLE `t_wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_catering`
--
ALTER TABLE `p_catering`
  ADD CONSTRAINT `p_catering_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_dress`
--
ALTER TABLE `p_dress`
  ADD CONSTRAINT `p_dress_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_gedung`
--
ALTER TABLE `p_gedung`
  ADD CONSTRAINT `p_gedung_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_kuade`
--
ALTER TABLE `p_kuade`
  ADD CONSTRAINT `p_kuade_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`);

--
-- Constraints for table `p_kursi`
--
ALTER TABLE `p_kursi`
  ADD CONSTRAINT `p_kursi_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_makeup`
--
ALTER TABLE `p_makeup`
  ADD CONSTRAINT `p_makeup_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_photo`
--
ALTER TABLE `p_photo`
  ADD CONSTRAINT `p_photo_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_sound`
--
ALTER TABLE `p_sound`
  ADD CONSTRAINT `p_sound_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`);

--
-- Constraints for table `p_tenda`
--
ALTER TABLE `p_tenda`
  ADD CONSTRAINT `p_tenda_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_transport`
--
ALTER TABLE `p_transport`
  ADD CONSTRAINT `p_transport_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `t_vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_meta_dress`
--
ALTER TABLE `t_meta_dress`
  ADD CONSTRAINT `t_meta_dress_ibfk_1` FOREIGN KEY (`kode_schedule`) REFERENCES `t_schedule` (`kode_schedule`),
  ADD CONSTRAINT `t_meta_dress_ibfk_2` FOREIGN KEY (`kode_dress`) REFERENCES `p_dress` (`kode_dress`);

--
-- Constraints for table `t_schedule`
--
ALTER TABLE `t_schedule`
  ADD CONSTRAINT `t_schedule_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `t_user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
