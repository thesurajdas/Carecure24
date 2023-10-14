-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2023 at 01:32 PM
-- Server version: 10.5.22-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aboutokc_carecure`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_alt` int(20) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `address` text NOT NULL,
  `service_id` int(50) NOT NULL,
  `book_datetime` datetime NOT NULL,
  `appoint_datetime` datetime NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `phone_alt`, `age`, `gender`, `pin_code`, `address`, `service_id`, `book_datetime`, `appoint_datetime`, `description`) VALUES
(1, 'Atanu Saha', '07407619028', 0, 75, 'Male', 741257, 'Vill- Subudhipur, P.0- Mahadebpur, P.S- Haringhata,Nadia ', 2, '2022-10-15 13:10:07', '2022-10-15 16:40:00', ''),
(2, 'Atanu Saha', '07407619028', 0, 22, 'Male', 741257, 'haringhata', 1, '2022-10-28 10:54:07', '2022-10-29 14:23:00', ''),
(3, 'Suraj Das', '09635596856', 0, 76, 'Male', 741257, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,', 2, '2023-01-02 14:35:33', '2023-01-02 20:05:00', ''),
(4, 'Suraj Das', '09635596856', 0, 65, 'Male', 741257, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,', 9, '2023-01-02 14:35:57', '2023-01-02 20:05:00', ''),
(5, 'RANAJIT RUIDAS', '6294626392', 0, 23, 'Male', 741235, 'Nimai Bhavan', 0, '2023-01-02 17:01:02', '2023-01-03 22:30:00', ''),
(6, 'Suraj Das', '09635596856', 0, 21, 'Male', 741257, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,', 6, '2023-01-07 06:17:09', '2023-01-07 11:47:00', 'desc'),
(7, 'Tanu Das', '9749706093', 2147483647, 22, 'Male', 741257, 'Nimtala Bazar ', 2, '2023-01-13 08:19:50', '2023-01-13 18:30:00', ''),
(8, 'Tanu Das', '9749706093', 2147483647, 22, 'Male', 741257, 'Nimtala Bazar ', 0, '2023-01-13 08:22:49', '2023-01-13 18:30:00', ''),
(9, 'Tapas Kumar Mondal', '9874737538', 0, 60, 'Male', 743144, 'Ichapore', 2, '2023-01-20 18:22:14', '2023-01-22 09:51:00', ''),
(10, 'Tapas Kumar Mondal', '9874737538', 0, 60, 'Male', 743144, 'Ichapore', 2, '2023-01-20 18:22:14', '2023-01-22 09:51:00', ''),
(11, 'Test', '9635596856', 0, 22, 'Male', 741257, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,', 11, '2023-01-21 10:12:12', '2023-01-21 15:41:00', ''),
(12, 'Rituparna Saha', '7001781596', 2147483647, 29, 'Female', 741222, 'Chakdaha, Nadia ', 6, '2023-01-22 16:50:36', '2023-01-25 18:15:00', ''),
(13, 'Atanu Saha', '07407619028', 0, 90, 'Male', 741257, 'Vill- Subudhipur, P.0- Mahadebpur, P.S- Haringhata,Nadia ', 6, '2023-01-30 13:24:37', '2023-01-30 18:53:00', ''),
(14, 'Doctor U Mishra', '6297889972', 0, 56, 'Male', 741235, 'Mishra Bhaban, A block, Kalyani', 11, '2023-01-31 19:05:55', '2023-02-01 00:35:00', ''),
(15, 'Sabita Saha', '6291541882', 0, 56, 'Female', 741257, 'Subuddhipur nichupare,mahadebpur, nimtala bazar nadia ', 2, '2023-02-24 07:25:25', '2023-02-25 12:55:00', ''),
(16, 'Kalpana saha', '8348608807', 0, 46, 'Female', 741222, 'Gobindapur ,chakdaha,741222', 5, '2023-03-01 17:31:51', '2023-03-05 05:01:00', ''),
(17, 'Swapna Roy ', '9038816732', 2147483647, 52, 'Female', 743144, '376/B Anandamath Ichhapur, PO - Anandamath, PS - Noapara, Near by - Dipayan Club, Pin - 743144', 6, '2023-03-16 05:15:34', '2023-03-20 18:30:00', 'Had total knee replacement surgery last month for that reason need physiotherapy on alternative days.'),
(18, 'Sumedha Basu biswas', '+918617748018', 0, 23, 'Male', 743144, 'Bapuji colony, icchapur', 6, '2023-03-18 19:14:48', '2023-03-20 00:44:00', ''),
(19, 'FL', '9876537898', 0, 61, 'Male', 743263, 'Shsik, sisih, sjsvs, didibe', 3, '2023-04-16 16:44:45', '2023-04-16 22:14:00', ''),
(20, 'Firoz Molla', '7439699339', 0, 22, 'Male', 741235, 'Kalyani ', 2, '2023-05-02 14:17:01', '2023-05-04 19:46:00', ''),
(21, 'Mina Debnath ', '8910048148', 0, 50, 'Female', 743130, 'Naihati ', 2, '2023-07-06 19:17:49', '2023-07-07 08:00:00', ''),
(22, 'Baal', '8585029145', 0, 999999, 'Male', 99999, 'Gadhar gaar', 5, '2023-08-11 18:21:17', '2023-08-11 23:55:00', 'Lagao bara');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `details` varchar(150) NOT NULL,
  `type` int(11) NOT NULL,
  `gender` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `details`, `type`, `gender`) VALUES
(1, 'Dr. Ashim Das', 'MBBS (SSKM), DNB General Medicine', 1, 0),
(2, 'Dr. Bittam Das (PT)', 'BPT, MPT Physiotherapist', 2, 0),
(3, 'Dr. Sudip Sarkar', 'MBBS, MD, DVL (Dermatologist & Cosmetologist)', 1, 0),
(4, 'Dr. Raja Biswas', 'MBBS (MMC&H), General Physician, Critical care (M.O), Ex. House Surgeon', 1, 0),
(5, 'Dr. Digbijoy Bose', 'MBBS (NRSMC&H), CCAMS (WHO, Geneva)', 0, 0),
(6, 'Dr. Digbijoy Bose', 'MBBS (NRSMC&H), CCAMS (WHO, Geneva)', 1, 0),
(7, 'Dr. Nirupam Biswas', 'MBBS (R.G.KarMCH), PGPN (Boston), FBNC Trained, Ex. House Physician (Paediatric)', 0, 0),
(8, 'Dr. Nirupam Biswas', 'MBBS (R.G.KarMCH), PGPN (Boston), FBNC Trained, Ex. House Physician (Paediatric)', 1, 0),
(9, 'Dr. Soujato Ghosh', 'MBBS (SSKM), Critical Care Unit In-Charge (MOIC) COM&JNMH', 1, 0),
(10, 'Dr. Nitin Biswas', 'MBBS (COM&JNMH), General Physician & Critical Care R.M.O', 1, 0),
(11, 'Dr. Amartya Acharya', 'MBBS (Hons.)(R.G.KarMCH),General Physician & Critical Care R.M.O', 1, 0),
(12, 'Dr. SK Obaidur Rahman', 'MBBS (COM&JNMH), General Physician', 1, 0),
(13, 'Dr. Jeshan Sarkar', 'MBBS (CAL), Ex House Surgeon (COM&JNMH), Medical Officer (WBHS)', 1, 0),
(14, 'Dr. Puja Saha (PT)', 'BPT, PGT(MPT)', 2, 1),
(15, 'Dr. Saheli Roy (PT)', 'BPT, WBUHS (CONSULTANT PHYSIOTHERAPIST)', 2, 1),
(16, 'Riya Saha', 'B.Sc. Nursing (RGKMCH)', 2, 1),
(17, 'Pintu Mondal', 'Critical Care Paramedics', 2, 0),
(18, 'Rupam Dutta', 'Critical Care Paramedics\r\n\r\n', 2, 0),
(19, 'Arup Mondal', 'Critical Care Paramedics', 2, 0),
(20, 'Aritra Saha', 'Physician Associates', 2, 0),
(21, 'Lokenath Saha', 'Medical Technologist (B.Sc. MTLab)\r\n\r\n', 2, 0),
(22, 'Ritupan Sil', '(GNM Nursing) Brothers', 2, 0),
(23, 'MD. Ajaharuddin Mondal', '(B.Sc. Nursing) Brothers', 2, 0),
(24, 'Dr. Ishani Basu', 'MBBS (General Physician)\r\nFormerly attached to dept. of Oncology', 1, 1),
(25, 'Dr. Rais Khan', 'MBBS (WBUHS)\r\nCritical Care Physician\r\nGeneral Physician', 1, 0),
(26, 'Dr. Shuvra Mondal', 'MBBS(WBUHS) MD(Radiology)', 1, 1),
(27, 'Amrita Pramanick', 'B.sc,M.sc(DFSM)\r\nConsultant Dietitian & Clinical Nutritionist ', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`) VALUES
(1, 'Doctors at Home'),
(2, 'Blood Investigation at Home'),
(3, 'Nurses at Home'),
(4, 'Vaccination at Home'),
(5, 'Nutritionist at Home'),
(6, 'Physiotherapy at Home'),
(7, 'Elder Care'),
(8, 'Online Doctor Consultation'),
(9, 'Medical Equipment Buy & Rent'),
(10, 'Diagnostic Services'),
(11, 'Home care consultation'),
(12, 'Palliative Care'),
(13, 'Mobility care at Home'),
(14, 'BIPAP & CPAP Rental Service'),
(15, 'Wound Management at Home'),
(16, 'Oxygen concentration Rental Service'),
(17, 'Hospital Bed set up at Home'),
(18, 'Bed sore Management & Post Operative Care ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'atanu123', '@Pw543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
