-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 أكتوبر 2018 الساعة 05:39
-- إصدار الخادم: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compony2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `departemnt`
--

CREATE TABLE `departemnt` (
  `departemt_id` int(11) NOT NULL,
  `department_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `departemnt`
--

INSERT INTO `departemnt` (`departemt_id`, `department_name`) VALUES
(5, 'Building Maintenance '),
(4, 'car workshop'),
(3, 'General Maintenance'),
(2, 'Maintenance of production'),
(1, 'Manager');

-- --------------------------------------------------------

--
-- بنية الجدول `equipment`
--

CREATE TABLE `equipment` (
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `equipment_on` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `MAINT_SCALE` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `equipment`
--

INSERT INTO `equipment` (`name`, `equipment_on`, `location`, `MAINT_SCALE`, `create_at`, `update_at`, `last`) VALUES
('chain conver', 'cc1', 'silo', 'm', '2018-10-04 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1e2', 'e12', 'e21', 'e21', '2018-10-05 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('N1', 'N12', 'N', 'N', '2018-10-04 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('q1', 'q12', 'first', 'cmnv', '2018-10-04 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('w1', 'wer3', 'dd', 'ddddd', '2018-10-14 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('asa', 'ww2', 'qqw', 'wwe', '2018-10-05 21:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE `files` (
  `id_eq` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

CREATE TABLE `info` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`email`, `name`, `department_id`, `phone`, `create_at`, `update_at`) VALUES
('s1@hail,com', 'Fahadssss', 5, '0568508989', '2018-10-26 21:51:14', '0000-00-00 00:00:00'),
('t@ha.h', 'Test', 5, '0568508989', '2018-10-26 21:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `maintenance`
--

CREATE TABLE `maintenance` (
  `id_request` int(11) NOT NULL,
  `email_employee` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Note` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `depart` int(11) NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `maintenance`
--

INSERT INTO `maintenance` (`id_request`, `email_employee`, `Note`, `status`, `depart`, `file`, `create_at`, `update_at`) VALUES
(1, 's1@hail,com', '', 'open', 5, '', '2018-10-26 21:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `maintenance_type`
--

CREATE TABLE `maintenance_type` (
  `type_id` int(11) NOT NULL,
  `type_maninte` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `maintenance_type`
--

INSERT INTO `maintenance_type` (`type_id`, `type_maninte`) VALUES
(2, 'Emergency maintenance'),
(1, 'Periodic maintenance');

-- --------------------------------------------------------

--
-- بنية الجدول `operation`
--

CREATE TABLE `operation` (
  `eq_on` text COLLATE utf8_unicode_ci NOT NULL,
  `PHASES` text COLLATE utf8_unicode_ci NOT NULL,
  `VOLT` text COLLATE utf8_unicode_ci NOT NULL,
  `AMPS` text COLLATE utf8_unicode_ci NOT NULL,
  `P` text COLLATE utf8_unicode_ci NOT NULL,
  `RPM` text COLLATE utf8_unicode_ci NOT NULL,
  `PFCOS` text COLLATE utf8_unicode_ci NOT NULL,
  `CYCLE` text COLLATE utf8_unicode_ci NOT NULL,
  `MCC` text COLLATE utf8_unicode_ci NOT NULL,
  `SERIALMODELNO` text COLLATE utf8_unicode_ci NOT NULL,
  `TYPE` text COLLATE utf8_unicode_ci NOT NULL,
  `YEAR_OF_INSTALLATION` text COLLATE utf8_unicode_ci NOT NULL,
  `MANUFACTURE` text COLLATE utf8_unicode_ci NOT NULL,
  `YEAR_OF_MANUFACTURE` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `operation`
--

INSERT INTO `operation` (`eq_on`, `PHASES`, `VOLT`, `AMPS`, `P`, `RPM`, `PFCOS`, `CYCLE`, `MCC`, `SERIALMODELNO`, `TYPE`, `YEAR_OF_INSTALLATION`, `MANUFACTURE`, `YEAR_OF_MANUFACTURE`, `create_at`, `update_at`) VALUES
('N12', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', '2018-10-04 21:00:00', '0000-00-00 00:00:00'),
('cc1', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-10-04 21:00:00', '0000-00-00 00:00:00'),
('ww2', 'ds', 'sd', 'sdsd', 'sdsd', 'dsd', 'dssd', 'sds\\s', 'sdada', 'sdaa', 'dsda', 'dsaxa', 'asds', 'asdz', '2018-10-05 21:00:00', '0000-00-00 00:00:00'),
('e12', 'e21', 'e21', 'e21', 'e21', 'e21', 'e12', 'e12', 'e12', 'e21', 'e12', 'e12', 'e12', 'e12', '2018-10-05 21:00:00', '0000-00-00 00:00:00'),
('wer3', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '2018-10-14 21:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `parts`
--

CREATE TABLE `parts` (
  `parts_id` int(11) NOT NULL,
  `part_name` text COLLATE utf8_unicode_ci NOT NULL,
  `id_equ` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `request_maintenance`
--

CREATE TABLE `request_maintenance` (
  `id_requiest` int(11) NOT NULL,
  `id_equ` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_department` int(11) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Note` text COLLATE utf8_unicode_ci NOT NULL,
  `craete_att` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `request_maintenance`
--

INSERT INTO `request_maintenance` (`id_requiest`, `id_equ`, `id_type`, `id_department`, `day`, `Note`, `craete_att`, `update_at`, `status`) VALUES
(1, 'e12', 2, 5, '2018-10-27 15:49:51', 'esrsrsrsr', '2018-10-18 21:00:00', '0000-00-00 00:00:00', 'open');

-- --------------------------------------------------------

--
-- بنية الجدول `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(2, 'Head of Electricity'),
(3, 'Head of Mechanics'),
(1, 'Manager');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`email`, `password`, `role_id`) VALUES
('abdxax@gmail.com', '12121', '0'),
('aljarallahabdulrahman@gmail.com', 'wwww', '0'),
('s1@hail,com', '123', '1'),
('t@ha.h', '123', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemnt`
--
ALTER TABLE `departemnt`
  ADD PRIMARY KEY (`departemt_id`),
  ADD UNIQUE KEY `department_name` (`department_name`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_on`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_maninte` (`type_maninte`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`parts_id`);

--
-- Indexes for table `request_maintenance`
--
ALTER TABLE `request_maintenance`
  ADD PRIMARY KEY (`id_requiest`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemnt`
--
ALTER TABLE `departemnt`
  MODIFY `departemt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `parts_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_maintenance`
--
ALTER TABLE `request_maintenance`
  MODIFY `id_requiest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
