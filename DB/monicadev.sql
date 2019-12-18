-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 04:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monicadev`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_committee`
--

CREATE TABLE `tbl_committee` (
  `committee_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `Photo_URL` varchar(255) DEFAULT NULL,
  `invitation_code` int(4) NOT NULL,
  `description` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_committee`
--

INSERT INTO `tbl_committee` (`committee_id`, `name`, `Photo_URL`, `invitation_code`, `description`, `date_created`, `created_at`, `updated_at`) VALUES
(1, 'CBS 2018', NULL, 9901, 'HAHA', '2019-10-23 02:27:56', '2019-10-22 17:00:00', '2019-10-22 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Photo_URL` varchar(255) DEFAULT NULL,
  `Committee` int(2) DEFAULT NULL,
  `Bio` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `name`, `Photo_URL`, `Committee`, `Bio`, `date_created`, `created_at`, `updated_at`) VALUES
(1, 'Raidiance', 'r@ihan.com', '$2y$10$7RewC9h7Vbc/7l9VrvRthOyssqxvY2UJaQ3UYVRU3Od9JFcixL126', 'Avalon Des Pierre', NULL, 0, '', '2019-10-15 09:54:04', '2019-10-15 09:54:04', '2019-10-15 09:54:04'),
(10, 'angga01', 'angga@mon.ica', '01angga', 'angga', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(11, 'poji07', 'poji@mon.ica', '07poji', 'poji', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(12, 'anjas13', 'anjas@mon.ica', '13anjas', 'anjas', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(13, 'iyon49', 'iyon@mon.ica', '49iyon', 'iyon', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(14, 'pet65', 'pet@mon.ica', '65pet', 'pet', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(15, 'nopal33', 'nopal@mon.ica', '33nopal', 'pal', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(16, 'qy55', 'qy@mon.ica', '55qy', 'qy', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(17, 'kepin12', 'kepin@mon.ica', '12kepin', 'kepin', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(18, 'sopiw57', 'sopiw@mon.ica', '57sopiw', 'sopiw', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(19, 'paijin32', 'paijin@mon.ica', '32paijin', 'paijin', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(20, 'DIO05', 'dio@mon.ica', '05DIO', 'DIO', NULL, NULL, NULL, '2019-10-15 20:26:07', NULL, NULL),
(21, 'Ini juga coba', 'coba@in.com', '$2y$10$ezg2iErDGw4MWNpDyLmcMuAY3B0vf7GCauWKkNk28UgAThUHihYpm', 'Okayyyy', NULL, NULL, NULL, '2019-10-15 21:44:59', '2019-10-15 21:44:59', '2019-10-15 21:44:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
