-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 06:22 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbantrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_antrian`
--

CREATE TABLE `arsip_antrian` (
  `username` varchar(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(90) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nmr_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`username`, `nama`, `email`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `nmr_telepon`) VALUES
('callmegrady', 'grady askarika', 'abcdefgrady@gmail.com', '2012-04-02', 'Laki-laki', 'bintaro', '089666643117');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`username`, `password`) VALUES
('callmegrady', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tr_antrian`
--

CREATE TABLE `tr_antrian` (
  `no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_user`
--

CREATE TABLE `tr_user` (
  `username` varchar(20) NOT NULL,
  `aktifitas` varchar(200) NOT NULL,
  `Waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_user`
--

INSERT INTO `tr_user` (`username`, `aktifitas`, `Waktu`) VALUES
('callmegrady', 'daftar diri', '2016-04-22 13:15:07'),
('callmegrady', 'login', '2016-04-22 13:15:19'),
('callmegrady', 'login', '2016-04-22 13:48:36'),
('callmegrady', 'login', '2016-04-22 13:49:45'),
('callmegrady', 'login', '2016-04-22 13:50:48'),
('callmegrady', 'login', '2016-04-22 13:51:54'),
('callmegrady', 'login', '2016-04-22 16:41:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
