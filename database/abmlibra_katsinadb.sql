-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2024 at 11:07 PM
-- Server version: 8.0.39-cll-lve
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abmlibra_katsinadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'maaunlibrary', '$2y$10$BjJnUVjU8f9jMGxdPd8OXeLLkbbMfvfRj/DuZKbleowAMOIno.qMC'),
(2, 'Polylib2023', '$2y$10$gmz/lyhaKKB6vB5UPMlzD.wERe6gb8qMQ6P22p/Ym.Zmkd7kZHVR.'),
(3, 'Umyulib2023', '$2y$10$rBeMOB9Y4IJgJ1Cb2tEFFOgpTudCOZizlUniUo.yFg7qpNvtz3FaG'),
(4, 'Nursinglib2023', '$2y$10$WHyuPoxyv9zVP4I6sGl94.mtCUOXwZPfI/lwWpjzTdYi.5y94gQGm'),
(5, 'Healthlib2023', '$2y$10$VwGziZRbFpcfRNkYGRfzcOu/Il.vINSGylPThWkk/iFhoLJBLEcB6'),
(6, 'Midwiferylib2023', '$2y$10$/ikTABa3CoI5Q28ZzQier.9UhvTwdraAe8XMex9jhqoApnyCgKFZi'),
(7, 'Yusifbalalib2023', '$2y$10$fKOuxjC5UucjIXALSn4ZnOIFRx82G8Y9XMl0KibklYMvTZLHEhDMa'),
(8, 'Subeblib2023', '$2y$10$zL4TCZAgsuRSHOwBJOi9k.uRqO0s2VjisP2kJck93HdlSAZhFyl3m'),
(9, 'Tsblib2023', '$2y$10$Iga.KF.0mgup//L5PLWGz.1G0alexBb1uAV4egvuooCwyRcrBpsd2'),
(10, 'Moelib2023', '$2y$10$cdrXL4OWRvW7/Vs4GSwW9ua6gqA439ET8.DiPwJ8D6grTihPlmdOW'),
(11, 'Ktnlib2023', '$2y$10$h.vR5l6wtHmu2AOJ1xewk.liZRPTOEIwBbrFuaCNalFyA612q/fGq'),
(12, 'joshua', '$2y$10$LPzosLe1.MiiCuQVz2bxvu1Zkps8uEfWMKgqU4SfBKYxDAIgk6a9G'),
(13, 'COHSKTN2024', '$2y$10$bR6/mPIEBa1X77wnx5wv2e77f0R88SAG5mr.B7jO9zwr95vjWYD8e'),
(14, 'admin', '$2y$10$YcTkVye7AvTYg8.3WnaCNuZRqZS/mTQNi7qGIX67ewup7XKfsragO'),
(15, 'Katsina', '$2y$10$iiHy1c8XHGwR..LVOgkDdedrvNzfYWolvZVkS4whpTXZ/TtcpSCV.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
