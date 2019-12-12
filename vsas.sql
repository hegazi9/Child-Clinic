-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 05:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `location`) VALUES
(1, 'abbasia'),
(2, 'helwan'),
(3, 'nasr city'),
(4, 'elmarg');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `parentid`, `name`, `age`) VALUES
(1, 24, 'ahmed', 3),
(2, 33, 'mousa', 5),
(3, 33, 'MOAMEN', 4),
(4, 24, 'mohamed', 3),
(5, 24, 'omar', 3),
(6, 24, 'mohaned', 4);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `cost`, `employeeid`, `creation`) VALUES
(1, 500, 32, '2016-05-08 07:23:43'),
(2, 5000, 32, '2016-05-08 07:23:43'),
(3, 500, 600, '2016-05-08 07:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `massege` varchar(500) NOT NULL,
  `destid` int(11) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `massege`, `destid`, `creation`) VALUES
(1, 'your Child Reservation has been rescheduled please try to choose another time', 0, '2016-05-10 14:47:52'),
(2, 'your Child Reservation has been rescheduled please try to choose another time', 0, '2016-05-10 14:49:21'),
(3, 'your Child Reservation has been rescheduled please try to choose another time', 24, '2016-05-10 14:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `parentid` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `parentid`, `url`) VALUES
(1, 'Contact us', 0, '?page=contact_us'),
(2, 'Feedback', 0, '?page=FeedBack'),
(3, 'Edit Profile', 0, '?page=../App/Controllers/parent_controller&action=update'),
(4, 'Reserve Appointment', 0, '?page=../App/Controllers/parent_controller&action=view'),
(5, 'Reservation History', 0, '?page=../App/Controllers/parent_controller&action=history'),
(6, 'Add_child', 0, '?page=add_Child'),
(7, 'parent_home', 0, '../App/Controllers/User_Page_Contrroler.php?user=Parent');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(11) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` double NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `childid` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `vaccineid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `branchid`, `childid`, `time`, `date`, `vaccineid`, `parentid`, `creationdate`) VALUES
(4, 1, 3, '838:59:59', '2016-05-11', 3, 24, '2016-05-10 13:02:55'),
(5, 1, 2, '00:00:00', '2016-05-10', 3, 24, '2016-05-09 18:49:02'),
(12, 1, 5, '838:59:59', '2016-05-11', 2, 24, '2016-05-10 14:51:34'),
(13, 3, 1, '11:00:00', '2016-05-08', 3, 24, '2016-05-08 16:33:01'),
(17, 2, 3, '10:30:00', '2016-05-18', 3, 16, '2016-05-07 07:22:00'),
(18, 2, 4, '09:00:00', '2016-05-24', 3, 24, '2016-05-09 18:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(2) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `age`, `usertype`) VALUES
(23, 'admin', 'admin', '12345678', 'admin@yahoo.com', 25, 1),
(24, 'parent125678', 'parent', '12345678', 'parent152@yahoo.com', 30, 2),
(31, 'moataz', 'moataz22', '12345678', 'moataz22@yahoo.com', 22, 3),
(32, 'mohamed ali', 'midogaber', '12345678', '123@yahoo.com', 20, 3),
(33, 'MOHAMED ALI', 'parent1', '123456789', 'parent1@yahoo.com', 21, 2),
(34, 'mohamed adel', 'mohamedadel', '12345678', 'mohamedadel@yahoo.com', 24, 4),
(37, 'mahmoud', 'mias', ',lnjkbhkn,. j', 'made8082@Gmail.com', 21, 2),
(40, 'mohamed', 'mohamedabdo', '12345678', 'moh@yahoo.com', 22, 3),
(41, 'fsdsdf', 'sdf', 'sfd', 'madel8082@Gmail.com', 25, 2),
(42, 'ss', 'sa', 'asc.,;/ad', 'asdsa@yahoo.com', 25, 2),
(43, 'mahmoud', 'hooda1', '1234', '1234@yahoo.com', 20, 2),
(44, 'mahmoud', '5678910', '12345678', 'doola2020202@yahoo.com', 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userbranch`
--

CREATE TABLE IF NOT EXISTS `userbranch` (
  `id` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbranch`
--

INSERT INTO `userbranch` (`id`, `branchid`, `userid`) VALUES
(1, 1, 23),
(3, 1, 25),
(4, 1, 26),
(5, 0, 0),
(6, 0, 39),
(7, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `usertype`) VALUES
(1, 'admin'),
(2, 'parent'),
(3, 'nurse'),
(4, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `usertypepages`
--

CREATE TABLE IF NOT EXISTS `usertypepages` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypepages`
--

INSERT INTO `usertypepages` (`id`, `userid`, `pageid`) VALUES
(1, 2, 3),
(2, 2, 4),
(3, 2, 5),
(4, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `id` int(11) NOT NULL,
  `dose` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `used` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `dose`, `name`, `quantity`, `used`) VALUES
(1, 100, 'A', 630, 25),
(2, 50, 'B', 750, 50),
(3, 20, 'C', 299, 34),
(4, 200, 'H', 600, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbranch`
--
ALTER TABLE `userbranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertypepages`
--
ALTER TABLE `usertypepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `userbranch`
--
ALTER TABLE `userbranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usertypepages`
--
ALTER TABLE `usertypepages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
