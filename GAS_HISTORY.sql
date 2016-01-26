-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2015 at 11:47 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `GAS_HISTORY`
--

-- --------------------------------------------------------

--
-- Table structure for table `HISTORY`
--

CREATE TABLE `HISTORY` (
  `DATE` date DEFAULT NULL,
  `KM` float DEFAULT NULL,
  `L` float DEFAULT NULL,
  `KM/L` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
