-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 06:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--
CREATE DATABASE IF NOT EXISTS `db_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_test`;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(1, '2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `podms_profiling`
--

CREATE TABLE `podms_profiling` (
  `id` int(11) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `violation_level` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podms_profiling`
--

INSERT INTO `podms_profiling` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `course`, `violation_level`, `violation`, `status`, `date`) VALUES
(19, 19016512, 'cyna', 'gracio', 'panit', 'bsit', '', '', 1, '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `podms_records`
--

CREATE TABLE `podms_records` (
  `id` int(11) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `violation_level` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podms_records`
--

INSERT INTO `podms_records` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `course`, `violation_level`, `violation`, `status`, `date`) VALUES
(1, 19016512, 'john mark', 'zerna', 'escobar', 'bsit', '', 'das', 3, '2022-11-27'),
(2, 19016812, 'john mark', 'zerna', 'escobar', 'bsit', '', 'Minor', 0, '0000-00-00'),
(3, 190163784, 'jonman', 'hjashdjk', 'hjlashdjka', 'jkadhsj', 'Minor', 'Minor Violation 3', 3, '2022-11-27'),
(4, 1901645123, 'asdasdas', 'dadasasd', 'dasasdasdd', 'adasdadwqeqw', 'Minor', 'dadadada', 3, '2022-11-27'),
(5, 21312312, '312wada', '123123', 'awed12', '213asd', 'Major', 'dsadad', 3, '2022-11-27'),
(6, 123123123, '12asdasda', 'dasd', 'adas', 'dasda', 'Grave', 'dasdada', 3, '2022-11-27'),
(7, 2147483647, 'asdzxczas', 'asdad', 'zsdasda', 'casda', 'Grave', 'Grave Violation 3', 3, '2022-11-27'),
(8, 2147483647, '21asdada', 'dasdas', 'dasdas', 'dasdasad', 'Major', 'dsad', 3, '2022-11-27'),
(9, 2147483647, 'sdadadhjk', 'hasdjkhjkdhasuihkn', 'jhduiasnkdniahcun', 'husahcihasuihsad', 'Major', 'Major Violation 3', 3, '2022-11-27'),
(10, 2147483647, '4askl;jdljaskldjasihjlk', 'lnjkasklndjklasjmdklnui', 'hnklnmdasndnmaslj', 'njklcnasklnmcklassad', 'Grave', 'Grave Violation 3', 3, '2022-11-27'),
(11, 123123, '12asdasd', 'asdadas', 'dasd', 'asdasda', 'Major', 'Major Violation 2', 3, '2022-11-27'),
(12, 2147483647, '21awdasdas', 'dad', 'ada', 'dadada', 'Major', 'Major Violation 3', 3, '2022-11-27'),
(13, 2147483647, 'd89as7d9a79', '78da9s7d89a789', '7d8as7d89a7', 'bsit', 'Major', 'dadadada', 3, '2022-11-27'),
(14, 2147483647, 'asdasdqwqe', 'qwe', 'e', 'qweqweqw', 'Minor', 'dadada', 3, '2022-11-27'),
(15, 2147483647, '12asdasd12', '12312341512416', 'asdhasuih', 'ashjkdkjashkdas', 'Minor', 'Minor Violation 2', 3, '2022-11-27'),
(16, 2147483647, 'asdasda', '127903hjk', 'bnjkasdhjkbn', 'asdbnjkasd a', 'Minor', 'Minor Violation 2', 3, '2022-11-27'),
(17, 45565341, 'sadhajs', 'kldjasikljdklaj', 'kljdlasjkldjasklj', 'kljldjalsjld', 'Minor', 'dsadada', 3, '2022-11-27'),
(18, 2147483647, 'hjksdhahkd', 'hdasjkhdkahh', 'dhkashdhashu', 'hdiuashukdhasd', 'Minor', 'dasda', 3, '2022-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `podms_sp_appointment`
--

CREATE TABLE `podms_sp_appointment` (
  `id` int(11) NOT NULL,
  `complainant_id_number` int(11) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(11) NOT NULL,
  `complained_first_name` varchar(255) NOT NULL,
  `complained_middle_name` varchar(255) NOT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_course` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `appointment_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podms_sp_appointment`
--

INSERT INTO `podms_sp_appointment` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_course`, `status`, `description`, `appointment_date`, `appointment_time`) VALUES
(1, 1312312, 'asdasd', 'asdad', 'asdas', 'dada', 0, '', '', '', '', 0, 'dasda', '', ''),
(2, 19016512, 'john mark', 'zerna', 'escobar', 'bsit', 0, '', '', '', '', 0, 'guardian ', '', ''),
(3, 19016534, 'juan', 'juan', 'juan', 'bsit', 0, '', '', '', '', 0, 'BRING GUARDIAN', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_profiling`
--
ALTER TABLE `podms_profiling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_records`
--
ALTER TABLE `podms_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_sp_appointment`
--
ALTER TABLE `podms_sp_appointment`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `podms_profiling`
--
ALTER TABLE `podms_profiling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `podms_records`
--
ALTER TABLE `podms_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `podms_sp_appointment`
--
ALTER TABLE `podms_sp_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
