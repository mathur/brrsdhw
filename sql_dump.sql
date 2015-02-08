-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 04:27 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7196206_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `login` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `passwd` varchar(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `member_id` varchar(100) CHARACTER SET latin7 DEFAULT NULL,
  `Teacher` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Homework` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Subject` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` VALUES('test', 'test teacher', 'http://www.homeworkhero.com/cgi-bin/aahero05/acceptit20/display.cgi?DSETCAVAGE+nj_brrhs04', 'test subject');
