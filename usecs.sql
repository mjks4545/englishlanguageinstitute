-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 09:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usecs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `fkapplicationtype_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicationtype`
--

CREATE TABLE IF NOT EXISTS `applicationtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `starting_date` varchar(255) NOT NULL,
  `ending_date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int(11) NOT NULL,
  `admission_fee` varchar(255) NOT NULL,
  `monthly_fee` varchar(255) NOT NULL,
  `recieved_fee` varchar(255) NOT NULL,
  `remaining_fee` varchar(255) NOT NULL,
  `recieved_date` varchar(255) NOT NULL,
  `next_fee_date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `reg_number` int(11) NOT NULL,
  `guardian_number` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `class_timing` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `fkuser_id`, `reg_number`, `guardian_number`, `qualification`, `profession`, `courses`, `class_timing`, `description`, `created_at`, `updated_at`, `created_by`) VALUES
(8, 16, 33, '456789', 'bsc', '', 'English Language', '', 'something', '16-04-05', '16-04-05', ''),
(9, 17, 44, '445566', 'bs', '', 'cs', '', 'aaksgkagsfa', '16-04-05', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_number` varchar(255) NOT NULL,
  `fkuser_id` int(11) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `class_assign` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `reg_number`, `fkuser_id`, `salary`, `qualification`, `class_assign`, `description`, `created_at`, `updated_at`, `created_by`) VALUES
(3, '22', 9, '20', '', '10', 'cool', '16-04-04', '', '0'),
(4, '55', 10, '30', 'Bs Engr', '8', 'welcome to SS tech', '16-04-04', '', '0'),
(5, '11', 14, '20', 'MA', '10', 'welcome to ss', '16-04-05', '', '0'),
(6, '22', 15, '10', 'bs', '9', 'coollll', '16-04-05', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fktesttype_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testreults`
--

CREATE TABLE IF NOT EXISTS `testreults` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fktest_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testtype`
--

CREATE TABLE IF NOT EXISTS `testtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `obtaine_marks` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fktestresult_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `f_name`, `age`, `contact`, `address`, `nationality`, `email`, `role`, `fktestresult_id`, `description`, `created_at`, `updated_at`, `created_by`) VALUES
(14, 'imran', 'khan', '56', '123456789', 'islamabad', 'pakistani', 'imran@teacher.com', '0', 0, 'welcome to ss', '16-04-05', '', '0'),
(15, 'saddam', 'khan', '22', '123456', 'peshawar', 'pakistani', 'saddam@teacher.com', '0', 0, 'coollll', '16-04-05', '', '0'),
(16, 'bilal', 'khan', '24', '1235544', 'canal road pawaka peshawar', 'pakistani', 'bilal@student.com', '0', 0, 'something', '16-04-05', '16-04-05', '0'),
(17, 'gulzar', 'ahmed', '25', '11223344', 'kabul', 'afghani', 'gulzar@student.com', '0', 0, 'aaksgkagsfa', '16-04-05', '', '0'),
(18, 'mehboob ', 'khan', '23', '225588', 'mardan', 'pakistani', 'mehboob@visitor.com', '0', 0, 'agsdf;hkgasdfh;jasd', '16-04-05', '', '0'),
(19, 'naveed', 'ilyas', '33', '778899', 'mardan', 'pak', 'naveed@student.com', '0', 0, 'fagsfkglagf', '16-04-05', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuser_id` int(11) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `guardian_number` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`v_id`, `fkuser_id`, `profession`, `guardian_number`, `qualification`, `status`, `courses`, `description`, `created_at`, `updated_at`, `created_by`) VALUES
(5, 18, 'designer', '336699', 'bs', '', 'pak study', 'agsdf;hkgasdfh;jasd', '16-04-05', '', ''),
(6, 19, 'student', '445566', 'bs', '', 'nothing', 'fagsfkglagf', '16-04-05', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
