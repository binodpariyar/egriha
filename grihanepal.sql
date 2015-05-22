-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2015 at 11:57 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grihanepal`
--
CREATE DATABASE IF NOT EXISTS `grihanepal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grihanepal`;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE IF NOT EXISTS `tbl_advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_advertisement`
--

INSERT INTO `tbl_advertisement` (`id`, `title`, `link`, `image`, `order`) VALUES
(1, 'binod', 'http://binodpariyar.com.np', 'esRnyPxg.PNG', 2),
(2, 'binod', 'http://binodpariyar.com.np', 'vWC5JO8y.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apartment`
--

CREATE TABLE IF NOT EXISTS `tbl_apartment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `address`, `phone`, `email`, `username`, `password`, `image`) VALUES
(1, 'Binod Pariyar', 'Kathmandu,Chandol', '98411111111', 'binodpariyar69@gmail.com', 'binod', '1f49756f262ef0b16355bb23eff4f828', 'SOBEe7ev.png'),
(2, 'Reejan', 'gangabu', '984563124', 'rex@gmail.com', 'reezan', '51318ddd0e898b0524aa1647dd05054c', 'FFiVNEZJ.jpg'),
(3, 'Abiral Khanal', 'Kathmandu', '9845000000', 'abiral@gmail.com', 'abiral', '74ab6cd1f8572421b90aeda4f5bf47e2', 'UDWR95Nk.jpg'),
(4, 'Rajesh Dhakal', 'Balaju KTM', '98451245412', 'rajesh@gmail.com', 'rajesh', 'e360bc13bcba071f4746adbb334cd78e', 'VjbaAVSM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house`
--

CREATE TABLE IF NOT EXISTS `tbl_house` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `storey` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_milestone_client`
--

CREATE TABLE IF NOT EXISTS `tbl_milestone_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_milestone_client`
--

INSERT INTO `tbl_milestone_client` (`id`, `name`, `image`, `image_1`, `image_2`, `description`, `project_id`, `status`) VALUES
(1, 'Plaster', 'z96d7oey.jpg', '', '', '<p>this is tests</p>', 1, 0),
(2, 'DPC', 'ssNCSeeR.jpg', '', '', '<p>this is the description of DPC</p>', 2, 0),
(3, 'Plaster', 'osEq9qhW.jpg', '', '', '<p>this is the description of plaster</p>', 2, 0),
(4, 'DPC', 'mEzj0SF0.jpg', 'qQbtdPm6.png', 'ac03Hlom.png', '<p>binod</p>', 3, 0),
(5, 'Plaster', 'SIkHlYOG.jpg', 'oCcyL5Nn.jpg', 'dZ7qOnvU.jpg', '<p>sdfgadfwfas asdfadsfad basfas dfa sdfa sfasdf asdf</p>', 3, 0),
(6, 'DCP', 'hsovh57V.jpg', '', '', '<p>this is dcp</p>', 5, 0),
(7, 'DPC', 'ilQ0WCG7.jpg', '', '', '<p>this task is complete</p>', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `title`, `owner`, `location`, `area`, `client_image`, `cat_id`, `image_1`, `image_2`, `image_3`, `description`, `client_id`) VALUES
(2, 'My Project', 'test', 'kathmandu', 2344443, 'hq9tyOwk.png', 1, 'syfHJgdm.jpg', 'o75Ufmzf.jpg', 'qwpTyZFj.jpg', '<p>teset</p>', 0),
(3, 'Test1', 'test', 'kathmandu', 2344443, '', 1, 'BOGILVc1.jpg', '3ReXwtm4.jpg', 'ImmZtjdQ.jpg', '<p>asdfasdf</p>', 1),
(4, 'Test2', 'test', 'kathmandu', 2344443, '', 1, '9tUwyInn.jpg', 'AvclIjmZ.jpg', 'BhT9LbK0.jpg', '<p>sdfsdfwefw</p>', 1),
(5, 'House', 'Abiral', 'kathmandu', 451542, '', 1, 'yRWSPlrm.jpg', 'BLbnj7is.jpg', 'JcqGAb5l.jpg', '<p>this is test</p>', 3),
(6, 'Home', 'binod pariyar', 'kathmandu', 1451212, '7Ku56s5c.jpeg', 5, 'ZW9J1ygh.jpg', 'Qd1i1pAY.jpg', 'yvqClqHx.jpeg', '<p>this is decscription</p>', 0),
(7, 'Rajesh home', 'rajesh', 'kathmandu', 45000, '', 1, 'XhhRsChq.jpg', 'JDsDchLY.jpg', 'FDmDVcJX.jpg', '<p>rajesh home</p>', 4),
(8, 'shop', 'rajesh', 'putalisadak', 4500, '', 1, 'brfGZG2h.jpg', 'CtSN3m5b.jpg', '0enJBPB4.jpg', '<p>this test</p>', 4),
(9, 'isa', 'rajesh', 'kathmandu', 2344443, 'B6HrBLDW.jpg', 1, 'TEOo0zcw.jpg', 'Tfu5i2iE.jpg', '5zWCImNd.jpg', '<p>&nbsp;sadasd</p>', 0),
(10, 'binod', 'binod', 'kathmandu', 45000, '', 5, 'HsNY0YgW.jpg', '3KhOsYn9.jpg', '5xe3Wr0a.jpg', '<p>this is binod</p>', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE IF NOT EXISTS `tbl_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_project`
--

CREATE TABLE IF NOT EXISTS `tbl_services_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `services_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_services_project`
--

INSERT INTO `tbl_services_project` (`id`, `services_id`, `project_id`) VALUES
(12, 1, 9),
(13, 5, 9),
(14, 2, 2),
(15, 5, 2),
(16, 2, 6),
(17, 3, 6),
(18, 5, 6),
(22, 1, 10),
(23, 2, 10),
(24, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com'),
(2, 'Binod Pariyar', 'binod', '1f49756f262ef0b16355bb23eff4f828', 'binodpariyar69@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `address`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0', ''),
(4, '127.0.0.1', 'abir4l', '$2y$08$qGJ0xKMjqOKCH7bxCENqyerbabdtkfd8aer5Qvpv4luiFG6Nih8/u', NULL, 'abiral09@gmail.com', NULL, NULL, NULL, NULL, 1427354483, NULL, 1, '0', '0', NULL, '0', 'Besigaun'),
(5, '127.0.0.1', 'abir4l1', '$2y$08$6KaYYdNwdAG4sFCuhTM63ufoW6IQ2TQtZt7pbyFHjCmlhMmHcwu.u', NULL, 'sandhyan070@gmail.com', NULL, NULL, NULL, NULL, 1427725441, NULL, 1, '0', '0', NULL, '0', 'askdjkasd'),
(6, '127.0.0.1', 'abir4l2', '$2y$08$P4Uxbc6OIwKxhi6hKy27HeycDdHifrexhWcgeP61A/l8usc1nWtA2', NULL, 'sandhyan07s0@gmail.com', NULL, NULL, NULL, NULL, 1427725784, NULL, 1, '0', '0', NULL, '0', 'Besigaun'),
(8, '127.0.0.1', 'admin', '$2y$08$/1UnZG4o3N9Wz6ip9uJz6.4FuYoSvYUL7aNsOT38TfMMyaPycqJpy', NULL, 'binodpariyar69@gmail.com', NULL, NULL, NULL, NULL, 1427892925, 1429872334, 1, '0', '0', NULL, '0', 'Putalisadak'),
(12, '127.0.0.1', 'binodpar', '$2y$08$8MpFSsUfiCFCJ.zBxFrskeOxMzrDq81F9j4DMQ37Nuv7wROw7b7m.', NULL, 'binod1@gmail.com', NULL, NULL, NULL, NULL, 1429859429, NULL, 1, 'binod', 'pariyar', NULL, '0', 'Kathmandu,Chandol'),
(13, '127.0.0.1', 'testuser', '$2y$08$XtbCqmqS8FXwYEH8s.MLbeT4hYPfUq7G7r8k0GRtlEBlM8md4s3bC', NULL, 'binod2@gmail.com', NULL, NULL, NULL, NULL, 1429859645, 1429860022, 1, 'binod', 'pariyar', NULL, '0', 'binod');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(9, 8, 2),
(13, 12, 2),
(14, 13, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
