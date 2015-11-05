-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2015 at 12:21 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajadomino`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_bank`
--

CREATE TABLE IF NOT EXISTS `db_bank` (
  `bank_id` int(1) NOT NULL,
  `bank_nama` varchar(20) NOT NULL,
  `bank_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_bank`
--

INSERT INTO `db_bank` (`bank_id`, `bank_nama`, `bank_status`) VALUES
(1, 'bca', 1),
(2, 'mandiri', 2),
(3, 'bri', 3),
(4, 'danamon', 1),
(5, 'bni', 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_banner`
--

CREATE TABLE IF NOT EXISTS `db_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_file` varchar(40) NOT NULL,
  `banner_alt` varchar(1000) NOT NULL,
  `banner_title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_banner`
--

INSERT INTO `db_banner` (`banner_id`, `banner_file`, `banner_alt`, `banner_title`) VALUES
(1, 'slide2.jpg', '234ewr', ''),
(2, 'slide3.jpg', 'dfds', ''),
(3, 'slide3.jpg', 'dfds', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_footer`
--

CREATE TABLE IF NOT EXISTS `db_footer` (
  `footer_text` varchar(10000) NOT NULL,
  `footer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_footer`
--

INSERT INTO `db_footer` (`footer_text`, `footer_id`) VALUES
('Rajadomino.com AGEN POKER dan AGEN DOMINO selalu berusaha yang TERBAIK dan TERCEPAT dalam melayani member,<br>\r\nkarena Kepuasaan anda adalah PRIORITAS Utama kami. Dan nikmati permainan Poker Online dan Domino Online dengan system teknologi terbaru<br>\r\ndan tercanggih yang pernah ada, 100% MURNI PLAYER VS PLAYER ( TANPA ROBOT ).', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_marquee`
--

CREATE TABLE IF NOT EXISTS `db_marquee` (
  `marquee_id` int(11) NOT NULL,
  `marquee_text` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_marquee`
--

INSERT INTO `db_marquee` (`marquee_id`, `marquee_text`) VALUES
(1, ' Selamat Datang di Rajadomino -  STATUS BANK : BCA - ONLINE | MANDIRI - ONLINE | BNI - ONLINE | BRI - GANGGUAN | DANAMON - ONLINE ------- Bonus New member 5%, Bonus Next Deposit 2%, Bonus Turn Over 0.3% - 0.5% Setiap Minggunya, Bonus Refferal 15% Seumur Hidup. Terima Kasih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_username`, `user_password`) VALUES
(1, 'admin', 'goadmingoeditbannera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_bank`
--
ALTER TABLE `db_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `db_banner`
--
ALTER TABLE `db_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `db_footer`
--
ALTER TABLE `db_footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `db_marquee`
--
ALTER TABLE `db_marquee`
  ADD PRIMARY KEY (`marquee_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_footer`
--
ALTER TABLE `db_footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_marquee`
--
ALTER TABLE `db_marquee`
  MODIFY `marquee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
