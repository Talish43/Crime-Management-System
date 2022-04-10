-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 10:21 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `cell` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `type`, `cell`, `city`, `pass`, `email`) VALUES
(3, 'Talish', 'superadmin', '03046767793', 'Lahore', '12345', 'jam.talish@gmail.com'),
(4, 'Babar', 'admin', '03088821388', 'Lahore', '12345', 'jambabar123@gmail.com'),
(5, 'Mohsin', 'sho', '03017431817', 'Faisalabad', '12345', 'mohsin@gmail.com'),
(6, 'Tushi', 'constable', '03466368793', 'Lahore', '12345', 'jam.tushi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_criminal`
--

CREATE TABLE `tbl_criminal` (
  `id` int(100) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `type` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `religion` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_criminal`
--

INSERT INTO `tbl_criminal` (`id`, `firstname`, `lastname`, `image`, `type`, `country`, `city`, `religion`, `email`) VALUES
(12, 'French', 'Kauzi', 'img/Criminal/one.jpg', 'Terrorist', 'Australia', 'Maxico', 'Non-Muslim', 'FrenchKauzi@gmail.com'),
(13, 'Alex', 'Thomas', 'img/Criminal/three.jpg', 'Kidnapper', 'Swezerland', 'Lake', 'Non-Muslim', 'alex-thomas420@gmail.com'),
(14, 'David', 'Warner', 'img/Criminal/four.jpg', 'Murdrer', 'England', 'Ovals', 'Non-Muslim', 'david@gmail.com'),
(15, 'Shariya', 'Vastavi', 'img/Criminal/two.jpg', 'Theft', 'India', 'Mumbai', 'Non-Muslim', 'shariya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fir`
--

CREATE TABLE `tbl_fir` (
  `id` int(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` varchar(200) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `ps` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `doo` varchar(200) NOT NULL,
  `poo` varchar(200) NOT NULL,
  `too` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fir`
--

INSERT INTO `tbl_fir` (`id`, `firstname`, `lastname`, `gender`, `cnic`, `mobile`, `city`, `ps`, `pass`, `email`, `doo`, `poo`, `too`, `details`) VALUES
(1, 'Talish', 'Nazir', 'male', '36303', '12345', 'Multan', 'Basti Malook', '12345', 'jam.talish@gmail.com', '14/11/2017', 'Basti Malook', '8:30', 'There is the details of the fir'),
(3, 'Lahore', 'Nazir', 'male', '36303', '12345', 'Lahore', 'Basti Malook', '12345', 'talishnazir875@gmail.com', '14/11/2017', 'Basti Malook', '8:30', '                       \r\n                     ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

CREATE TABLE `tbl_help` (
  `id` int(30) NOT NULL,
  `hdtype` varchar(300) NOT NULL,
  `hddetail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`id`, `hdtype`, `hddetail`) VALUES
(1, 'Help', 'Detail');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(30) NOT NULL,
  `ntype` varchar(100) NOT NULL,
  `nheading` varchar(100) NOT NULL,
  `ndetails` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `ntype`, `nheading`, `ndetails`) VALUES
(1, 'Crime', '3 Persons Died', '3 persons died in police mukabla in basti malook ................');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_station`
--

CREATE TABLE `tbl_station` (
  `id` int(30) NOT NULL,
  `scode` varchar(300) NOT NULL,
  `scity` varchar(300) NOT NULL,
  `sname` varchar(300) NOT NULL,
  `shoname` varchar(300) NOT NULL,
  `scontact` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_station`
--

INSERT INTO `tbl_station` (`id`, `scode`, `scity`, `sname`, `shoname`, `scontact`, `email`) VALUES
(1, '12345', 'Lahore', 'Ichra', 'Talish', '03046767793', 'jam.talish@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_update`
--

CREATE TABLE `tbl_update` (
  `id` int(30) NOT NULL,
  `uptype` varchar(200) NOT NULL,
  `updetail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_update`
--

INSERT INTO `tbl_update` (`id`, `uptype`, `updetail`) VALUES
(1, 'Info', 'This Is Info Detail');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `city` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `fname`, `cnic`, `city`, `phone`, `pass`) VALUES
(1, 'Talish ', 'Nazir', '36303', 'Lahore', '87878789', '123123'),
(2, 'Talish ', 'Nazir', '36303', 'Lahore', '87878789', '123123'),
(3, 'Talish ', 'Nazir', '36303', 'Lahore', '87878789', '123123'),
(4, 'Babar', 'Nasrullah', '36303', 'Multan', '03088821', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_criminal`
--
ALTER TABLE `tbl_criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_help`
--
ALTER TABLE `tbl_help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_station`
--
ALTER TABLE `tbl_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_update`
--
ALTER TABLE `tbl_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_criminal`
--
ALTER TABLE `tbl_criminal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_help`
--
ALTER TABLE `tbl_help`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_station`
--
ALTER TABLE `tbl_station`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_update`
--
ALTER TABLE `tbl_update`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
