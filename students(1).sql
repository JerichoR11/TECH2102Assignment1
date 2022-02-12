-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 09:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(30) NOT NULL,
  `student_age` tinyint(2) NOT NULL,
  `student_number` bigint(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `student_age`, `student_number`, `id`) VALUES
('sample_name01', 15, 23101, 1),
('sample_name02', 20, 23102, 2),
('sample_name03', 20, 23103, 3),
('sample_name04', 23, 23104, 4),
('sample_name05', 24, 23105, 5),
('sample_name06', 23, 23106, 6),
('sample_name07', 19, 23107, 7),
('sample_name08', 18, 23108, 8),
('sample_name09', 24, 23109, 9),
('sample_name10', 25, 23110, 10),
('sample_name11', 17, 23111, 11),
('sample_name12', 26, 23112, 12),
('sample_name13', 27, 23113, 13),
('sample_name14', 21, 23114, 14),
('sample_name15', 20, 23115, 15),
('sample_name16', 21, 23116, 16),
('sample_name17', 25, 23117, 17),
('sample_name18', 26, 23118, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
