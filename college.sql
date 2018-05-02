-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 08:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(11) NOT NULL,
  `eventheader` varchar(150) DEFAULT NULL,
  `eventbody` varchar(1024) DEFAULT NULL,
  `eventdate` date DEFAULT NULL,
  `eventtime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `eventheader`, `eventbody`, `eventdate`, `eventtime`) VALUES
(1, 'Neon Cricket', 'Neon cricket event being held in 709 classroom in I.T. Department', '2017-04-27', '12:30:00'),
(2, 'Blind typing', 'Blind typing event being held in 706 lab on 7th floor in I.T. Department', '2017-04-27', '12:30:00'),
(3, 'Beg Borrow Steal', 'BBS Event is being held in the classroom 703 on 7th floor (I.T. Department)', '2017-04-27', '12:30:00'),
(4, 'Build from scratch', 'Build from scratch code war starting in the lab 805 , 8th floor I.T. Department', '2017-04-27', '09:30:00'),
(5, 'Intrusion', 'Intrusion hacking related event starting in 703 Lab 7th floor , I.T. Department', '2017-04-27', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `hpid` int(11) NOT NULL,
  `homepageheader` varchar(150) DEFAULT NULL,
  `homepagebody` varchar(1024) DEFAULT NULL,
  `homepagedate` date DEFAULT NULL,
  `homepagetime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `lid` int(11) NOT NULL,
  `ltype` enum('INSERT','DELETE','CREATE','EDIT') DEFAULT NULL,
  `ldata` varchar(250) DEFAULT NULL,
  `ltime` time DEFAULT NULL,
  `ldate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`lid`, `ltype`, `ldata`, `ltime`, `ldate`) VALUES
(1, 'CREATE', 'CREATED A NEW TOPIC', '17:46:42', '2018-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `newsheader` varchar(250) DEFAULT NULL,
  `newstags` varchar(250) DEFAULT NULL,
  `newsbody` varchar(1024) DEFAULT NULL,
  `newsdate` date DEFAULT NULL,
  `newstime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newsheader`, `newstags`, `newsbody`, `newsdate`, `newstime`) VALUES
(1, 'First News', 'Nothing,Here,Pal', 'First News body', '2018-03-05', '20:05:50'),
(2, 'Second News', 'You,ain\'t,getting,nothing', 'Second news body', '2018-03-05', '20:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `newsx`
--

CREATE TABLE `newsx` (
  `newsid` int(11) NOT NULL,
  `newsheader` varchar(30) DEFAULT NULL,
  `newsbody` varchar(500) DEFAULT NULL,
  `newstags` varchar(50) DEFAULT NULL,
  `newsdate` date DEFAULT NULL,
  `newstime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `upass` varchar(129) NOT NULL,
  `alevel` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `alevel`) VALUES
(1, 'admin', '7FCF4BA391C48784EDDE599889D6E3F1E47A27DB36ECC050CC92F259BFAC38AFAD2C68A1AE804D77075E8FB722503F3ECA2B2C1006EE6F6C7B7628CB45FFFD1D', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `newsx`
--
ALTER TABLE `newsx`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsx`
--
ALTER TABLE `newsx`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
