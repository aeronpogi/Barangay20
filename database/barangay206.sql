-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 07:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay206`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `activityId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `action` text NOT NULL,
  `dates` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activityId`, `name`, `action`, `dates`, `position`) VALUES
(48, 'Administrator', 'Added RBI 0054', '2022-04-22 14:12:52', 'Admin'),
(49, 'Administrator', 'Update Document Fee', '2022-04-22 14:14:21', 'Admin'),
(50, 'Administrator', 'Approved Jem Ferrer Indigency request', '2022-04-22 14:14:33', 'Admin'),
(51, 'Administrator', 'Added Barangay clearance for Miyuki Pecdasen', '2022-04-22 14:15:05', 'Admin'),
(52, 'Romeo Marcellano', 'Added Barangay clearance for Jem Ferrer', '2022-04-22 20:51:31', 'Chairman'),
(53, 'Administrator', 'Created staff account for asdasdasd', '2022-04-22 21:53:56', 'Barangay Staff'),
(54, 'Administrator', 'Approved Jem Ferrer Business clearance request', '2022-04-22 22:29:06', 'Admin'),
(55, 'Administrator', 'Added Business clearance for Jem Ferrer', '2022-04-22 22:43:47', 'Admin'),
(56, 'Administrator', 'Denined  Business request', '2022-04-23 18:14:49', 'Admin'),
(57, 'Felipe Fautisno', 'Added Blotter for asd', '2022-04-23 18:25:37', 'Secretary'),
(58, 'Administrator', 'Created staff account for asdasd', '2022-04-24 11:06:53', 'Barangay Staff'),
(59, 'Admin', 'Added RBI 002', '2022-04-25 13:44:10', 'Admin'),
(60, 'Admin', 'Approved  Business request', '2024-01-04 12:08:03', 'Admin'),
(61, 'Admin', 'Approved  Business request', '2024-01-04 12:10:05', 'Admin'),
(62, 'Admin', 'Added family Aeron Paul  Pecdasen in RBI 002', '2024-01-04', 'Admin'),
(63, 'Admin', 'Created resident account for Aeron Paul  Pecdasen', '2024-01-04 14:41:50', 'Admin'),
(64, 'Admin', 'Approved  Business request', '2024-01-04 14:43:54', 'Admin'),
(65, 'Admin', 'Added Barangay clearance for Jem Ferrer', 'Jan-04-2024', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `upurpose` varchar(255) DEFAULT NULL,
  `businessName` varchar(255) DEFAULT NULL,
  `businessType` varchar(255) DEFAULT NULL,
  `businessAddress` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `udate` varchar(255) DEFAULT NULL,
  `ustatus` varchar(255) DEFAULT NULL,
  `udate_approve` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `ucontactno` varchar(255) DEFAULT NULL,
  `to_travel` varchar(255) DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `receiptImg` varchar(255) DEFAULT NULL,
  `pickupMode` varchar(255) DEFAULT NULL,
  `residentId` varchar(255) DEFAULT NULL,
  `permit_status` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `requestMode` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `uname`, `uemail`, `upurpose`, `businessName`, `businessType`, `businessAddress`, `urbi`, `udate`, `ustatus`, `udate_approve`, `permit_type`, `ucontactno`, `to_travel`, `owner`, `receiptImg`, `pickupMode`, `residentId`, `permit_status`, `street`, `requestMode`, `fee`) VALUES
(289, 'Jem Ferrer', NULL, 'asd', NULL, NULL, NULL, '1', 'April 22, 2022, 10:32 am', 'Approved', '2022-04-22', 'Indigency', NULL, NULL, '', 'none', NULL, '1-2-1', 'none', 'kanto', 'Walkin', NULL),
(290, 'Jem Ferrer', NULL, 'asd', NULL, NULL, NULL, '1', 'April 22, 2022, 10:33 am', 'Denied', '2022-04-22', 'Barangay Clearance', NULL, NULL, '', 'none', NULL, '1-2-1', 'none', 'kanto', 'Walkin', NULL),
(291, 'Jem Ferrer', NULL, NULL, 'Manila', 'Partnership', 'Manila', '1', 'April 22, 2022, 10:47 am', 'Approved', '2022-04-22', 'Business Clearance', NULL, NULL, '', 'none', NULL, '1-2-1', 'none', NULL, 'Walkin', NULL),
(292, 'Miyuki Pecdasen', NULL, 'asdasd', NULL, NULL, NULL, '1', 'April 22, 2022, 2:15 pm', 'Approved', '2022-04-22 14:15:05', 'Barangay Clearance', NULL, NULL, '', 'none', NULL, '1-1-2', 'none', 'kanto', 'Walkin', NULL),
(293, 'Jem Ferrer', NULL, 'asd', NULL, NULL, NULL, '1', 'April 22, 2022, 8:51 pm', 'Approved', '2022-04-22 20:51:31', 'Barangay Clearance', NULL, NULL, '', 'none', NULL, '1-2-1', 'none', 'kanto', 'Walkin', NULL),
(294, 'Jem Ferrer', NULL, NULL, 'Manila', 'Partnership', 'Manila', '0054', 'April 22, 2022, 10:43 pm', 'Approved', '2022-04-22 22:43:47', 'Business Clearance', NULL, NULL, '', 'none', NULL, '0054-1-1', 'none', NULL, 'Walkin', NULL),
(295, 'Aeron Pecdasen', 'aerrron@gmail.com', 'asd', NULL, NULL, NULL, '0061', 'April 22, 2022 10:50:pm  ', 'Pending', NULL, 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', '0061-1-1', 'none', 'Kanto', NULL, NULL),
(296, 'Aeron Pecdasen', 'aerrron@gmail.com', 'asd', NULL, NULL, NULL, '0061', 'April 24, 2022 10:55:am  ', 'Pending', NULL, 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', '0061-1-1', 'none', 'Kanto', NULL, NULL),
(297, 'Aeron Pecdasen', 'aerrron@gmail.com', 'asd', NULL, NULL, NULL, '0061', 'April 24, 2022 ', 'Pending', NULL, 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', '0061-1-1', 'none', 'Kanto', NULL, NULL),
(298, 'Jem Ferrer', NULL, 'Bank', NULL, NULL, NULL, '002', 'Jan-04-2024', 'Approved', '2024-01-04 14:45:12', 'BarangayClearance', NULL, NULL, '', 'none', 'Walk in', '002-1-1', 'none', 'kanto', 'Walkin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(50) NOT NULL,
  `complainant` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date_session` date NOT NULL,
  `details_session` varchar(255) NOT NULL,
  `complainantAge` varchar(255) DEFAULT NULL,
  `complainantAddress` varchar(255) DEFAULT NULL,
  `complainantContact` varchar(255) DEFAULT NULL,
  `complainee` varchar(255) DEFAULT NULL,
  `complaineeAge` varchar(255) DEFAULT NULL,
  `complaineeAddress` varchar(255) DEFAULT NULL,
  `complaineeContact` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `session_no` varchar(255) DEFAULT NULL,
  `blotter_id` varchar(255) DEFAULT NULL,
  `natureCases` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_account`
--

CREATE TABLE `brgy_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upwd` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image_picture` varchar(255) NOT NULL,
  `accountStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_account`
--

INSERT INTO `brgy_account` (`id`, `fullname`, `position`, `contact_no`, `uemail`, `upwd`, `role`, `image_picture`, `accountStatus`) VALUES
(36, 'Admin', 'Admin', '0912345678', 'Admin@gmail.com', '$2y$10$zmRpvJ1djmMHtlLZCgCVy.l/d1Kmn2SzT3ohEpNlZzUJU49Vs9oRi', '1', '1650195145_user.png', 'Active'),
(39, 'Hector Sy', 'Kagawad', '0912345678', 'hector@gmail.com', '$2y$10$eR8M3ebwDy.BY.hhMQHHSedXRR9V1YuvxOIn0yFStuRsNh9xcBcU2', '2', '1650171431_user.png', 'Active'),
(40, 'Esperanza Simundo', 'Kagawad', '09123456789', 'eperanza@gmail.com', '$2y$10$6FAR3JczZYXH3G./RL6xfO4/vGMpcmI96hvOA5TTcfe0Q.A3Il53q', '2', '1650171464_user.png', 'Active'),
(41, 'Jacqueline Caimbon', 'Kagawad', '09123456789', 'jacqueline@gmail.com', '$2y$10$F7vpYqqYuUwtd/20vA6Uk.oCPBoKQMXFzbHIbje4EdoaN2H9aUxEm', '2', '1650171496_user.png', 'Active'),
(42, 'Juanito Espero', 'Kagawad', '09123456789', 'juanito@gmail.com', '$2y$10$EUdmV4cH6MegMHJJm3MpPOgpOrvxZqkM0o3d.BqV.BOKGfuK0H.32', '2', '1650171517_user.png', 'Active'),
(43, 'Eduardo Belen Jr.', 'Kagawad', '09123456789', 'eduardo@gmail.com', '$2y$10$H0CM.0L/41c2gB2nZzjWeuJpmtckzzM5NSF1SrP5rKgNpd7pxX9ZW', '2', '1650171541_user.png', 'Active'),
(44, 'Robert Ablen', 'Kagawad', '09123456789', 'robert@gmail.com', '$2y$10$3S7mhAO/iAVTg.r6bUhDsO4QidtZiii.ikHLuKHeQ.yjOHL.CS9bm', '2', '1650171559_user.png', 'Active'),
(45, 'Carlo Jose', 'Kagawad', '09123456789', 'carlo@gmail.com', '$2y$10$4UxYNbwoh6tJMQKaS2qquufjN9ZfSnhMx3ns0rS3SyLPxhLzbakfi', '2', '1650171578_user.png', 'Active'),
(46, 'Ridgeway Geroleo', 'Sk Chairman', '09123456789', 'ridgeway@gmail.com', '$2y$10$cL5oAlF4nZ4qPm2cMUAko.yT9UiQdX1jN8d.2wsaX4uZh3BnlV.Bu', '2', '1650171770_user.png', 'Active'),
(47, 'Felipe Fautisno', 'Secretary', '09123456789', 'Felipe@gmail.com', '$2y$10$vhylOnj1wyQlcdT45CgIo.Aji.pCT2HHM92NxkevQI0PVKeirI6Le', '2', '1650171865_user.png', 'Active'),
(48, 'Parrissa Janne De Guzman', 'Treasurer', '09123456789', 'Parrissa@gmail.com', '$2y$10$ywL2lWlk/cm8YvrFihOjA.CkrQIPG.5u8shzBnq42aUWASA/rN1C.', '2', '1650171912_user.png', 'Active'),
(51, 'Romeo Marcellano', 'Chairman', '09123456789', 'Romeo@gmail.com', '$2y$10$2W00UJRFXA4uAopRAMvFme4sZTyzYIEP5yTn5Mvjm.dTKxhgs.SLS', '2', '1650213278_user.png', 'Active'),
(52, 'Jem Ferrer', 'Barangay Staff', '09512323123', 'asdasdasd@asd.com', '$2y$10$oD5Nz4iO6zEqZ0sPzqxdqeqAUYPjb6MgDvwdcbGbW/MQS/6HvriMy', '3', '1650635636_user.png', 'Active'),
(53, 'Miyuki Shiba Pecdasen', 'Barangay Staff', '09512323123', 'miyuki@gmail.com', '$2y$10$kvW112NQsd833FOp4SycA.weroeZ/4K1W9oSrDgmtGhya8pvsDVg6', '3', '1650777819_user.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `ID` int(11) NOT NULL,
  `businessName` varchar(128) NOT NULL,
  `businessContactno` varchar(128) NOT NULL,
  `businessEmail` varchar(128) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `businessImg` varchar(255) DEFAULT NULL,
  `bstatus` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `udate_approve` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `residentId` varchar(255) DEFAULT NULL,
  `uemail` varchar(50) DEFAULT NULL,
  `date_set` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`ID`, `businessName`, `businessContactno`, `businessEmail`, `location`, `description`, `businessImg`, `bstatus`, `urbi`, `uname`, `udate_approve`, `status`, `residentId`, `uemail`, `date_set`) VALUES
(100, 'Wanderer', '09515945288', 'wanderer@gmail.com', 'Manila', 'Welcome to Wanderer, where every bite is a burst of flavor! Our handcrafted burgers are culinary masterpieces, featuring flame-grilled patties, artisanal cheeses, and fresh, locally sourced ingredients. From classic cheeseburgers to bold creations like th', '1704350607_flat-sale-background_23-2147750048.jpg', 'Approved', '002', 'Aeron Paul  Pecdasen', '2024-01-04', 'Active', '002-2-1', 'aeron@gmail.com', '2024-01-04 14:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `dates` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `narration` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `residentId` varchar(255) DEFAULT NULL,
  `dateSettled` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `fullname`, `dates`, `email`, `details`, `status`, `narration`, `urbi`, `contactno`, `residentId`, `dateSettled`) VALUES
(36, 'asd asd', '2022-04-06 21:02:12', 'aerskargu21@gmail.com', 'asdq', 'Settled', 'Littering', '0054', '09512323123', ' 0054-2-1', '2022-04-22'),
(37, 'asd asd', '2022-04-06 21:02:38', 'aerskargu21@gmail.com', 'qwe', 'Settled', 'Noise', '0054', '09512323123', ' 0054-2-1', '2022-04-06'),
(38, 'asd asd', '2022-04-20 14:32:13', 'aerskargu21@gmail.com', 'asdsa', 'Settled', 'Littering', '0054', '09512323123', ' 0054-2-1', '2022-04-20'),
(39, 'Aeron Pecdasen', '2022-04-22 22:51:28', 'aerrron@gmail.com', 'asdasdasd', 'Active', 'Littering', '0061', '09512323123', ' 0061-1-1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `barangay_clearance` varchar(255) DEFAULT NULL,
  `business_clearance` varchar(255) DEFAULT NULL,
  `indigency` varchar(255) DEFAULT NULL,
  `delivery_fee` varchar(255) DEFAULT NULL,
  `aboutus` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vission` text DEFAULT NULL,
  `gName` varchar(50) DEFAULT NULL,
  `gNumber` varchar(50) DEFAULT NULL,
  `qrCode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `barangay_clearance`, `business_clearance`, `indigency`, `delivery_fee`, `aboutus`, `mission`, `vission`, `gName`, `gNumber`, `qrCode`) VALUES
(1, '0', '500', '0', '25', 'e-Barangay 206 is a milestone spearheaded by Barangay 206 Dinalupihan Tondo, Maynila government\r\n\r\nIt is created to empower Barangay 206 Dinalupihan to digitally transform its community by providing efficient access to different services at its community\'s convenience while implementing government transaparency.\r\n\r\ne-Barangay 206 is dedicated in enhancing its services to build a sustainable future for its community.', 'With the guidance of the divine providence, multi-sectoral developments in the barangay aimed to be realized thru self-reliant, supportive citizens, efficient and effective public leaders.', 'Envisions a Progressive, Healthy, Peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance.', 'asdasd', '065410011', '1650318089_qr.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(128) NOT NULL,
  `news_img` varchar(128) DEFAULT NULL,
  `time_upload` varchar(128) DEFAULT NULL,
  `file_type` varchar(255) NOT NULL,
  `news_descri` varchar(255) DEFAULT NULL,
  `news_Status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_img`, `time_upload`, `file_type`, `news_descri`, `news_Status`, `status`) VALUES
(120, 'WATER INTERRUPTION', 'news-61e468bb621ca1.01607201.jpg', 'January 17, 2022 2:49:am  ', 'img', '  On November 12, 2021, our barangay will be having a water interruption.', NULL, 'Publish'),
(121, 'AYUDA FOR SENIOR CITIZENS', 'news-61e46bbcacec97.77824531.jpg', 'January 17, 2022 2:57:am  ', 'img', '              Please be advised that the distribution of benefits for senior citizens will be held on November 22, 2021.', 'Archive', 'Unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `id` int(11) NOT NULL,
  `purokName` varchar(50) DEFAULT NULL,
  `dateAdded` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`id`, `purokName`, `dateAdded`) VALUES
(1, 'Poruk 1', 'April 17, 2022 12:00:pm  '),
(2, 'Poruk 2', 'April 22, 2022 11:40:am  '),
(3, 'Poruk 3', 'April 22, 2022 11:41:am  '),
(4, 'Poruk 22', 'April 22, 2022 11:43:am  ');

-- --------------------------------------------------------

--
-- Table structure for table `rbi_tenant`
--

CREATE TABLE `rbi_tenant` (
  `id` int(50) NOT NULL,
  `family_no` int(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `rbi_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `tenantOwner` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `resident_no` varchar(255) DEFAULT NULL,
  `rnumber` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `dateAdded` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rbi_tenant`
--

INSERT INTO `rbi_tenant` (`id`, `family_no`, `full_name`, `address`, `birth_place`, `birth_date`, `gender`, `civil_status`, `occupation`, `voter_status`, `rbi_id`, `firstname`, `middlename`, `lastname`, `tenantOwner`, `position`, `resident_no`, `rnumber`, `status`, `dateAdded`, `street`, `age`) VALUES
(240, 1, 'Jem Ferrer', '', 'Manila', '2022-04-01', 'Male', 'Single', 'Tambay', 'Registered', '002', 'Jem', 'Baldog', 'Ferrer', 'Tenant', NULL, '002-1-1', '1', 'Active', '2022-04-25 13:44:10', 'kanto', NULL),
(241, 2, 'Aeron Paul  Pecdasen', '', 'Antipolo', '1999-07-04', 'Male', 'Single', 'IT', 'Registered', '002', 'Aeron Paul ', 'Minoza', 'Pecdasen', 'Tenant', NULL, '002-2-1', '1', 'Active', '2024-01-04 14:39:52', 'kanto', '24');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ufullname` varchar(128) NOT NULL,
  `uhouseholdno` int(11) NOT NULL,
  `uemail` varchar(128) NOT NULL,
  `upwd` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `voter` varchar(128) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image_picture` varchar(255) DEFAULT NULL,
  `role` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `ucontactno` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `ustatus` varchar(255) DEFAULT NULL,
  `residentId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `img`, `ufullname`, `uhouseholdno`, `uemail`, `upwd`, `gender`, `voter`, `position`, `image_picture`, `role`, `address`, `urbi`, `ucontactno`, `street`, `ustatus`, `residentId`) VALUES
(100, '', 'Aeron Paul  Pecdasen', 0, 'aeron@gmail.com', '$2y$10$xsLZS9abLZcY3Z76FcI5TuI2iIAXCN/yfl55c/9c/QhH6lDQX4buO', '', '', '', 'null', 0, '', '002', '09515945288', 'kanto', 'Active', '002-2-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`activityId`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_account`
--
ALTER TABLE `brgy_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rbi_tenant`
--
ALTER TABLE `rbi_tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `brgy_account`
--
ALTER TABLE `brgy_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rbi_tenant`
--
ALTER TABLE `rbi_tenant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
