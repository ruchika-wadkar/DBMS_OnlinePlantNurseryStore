-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 08, 2021 at 07:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `signuser`
--

CREATE TABLE `signuser` (
  `id` int(3) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signuser`
--

INSERT INTO `signuser` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `password`, `cpassword`, `city`, `state`, `gender`, `date`) VALUES
(5, 'Ruchika', 'Wadkar', 'rucha6792@gmail.com', '2147483647', 'ruchika', 'ruchika', 'Navi Mumbai', 'Maharashtra', 'female', '2021-04-29 10:58:31'),
(6, 'Rushabh', 'Wadkar', 'rushabh6792@gmail.com', '2147483647', 'rushabh', 'rushabh', 'Navi Mumbai', 'Maharashtra', 'male', '2021-04-29 11:00:16'),
(7, 'Radhika', 'Shet', 'rads12@gmail.com', '8899688876', 'radhika', 'radhika', 'Navi Mumbai', 'Maharashtra', 'female', '2021-04-29 14:34:41'),
(9, 'siddhi', 'paradhi', 'siddhiparadhi16@gmail.com', '8787765543', 'siddhi', 'siddhi', 'Navi Mumbai', 'Maharashtra', 'female', '2021-04-29 14:37:03'),
(14, 'Vinit', 'Chavan', 'vinitchavan45@gmail.com', '9876554322', 'vinit', 'vinit', 'mumbai', 'Maharashtra', 'male', '2021-04-29 16:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `succulent`
--

CREATE TABLE `succulent` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `succulent`
--

INSERT INTO `succulent` (`id`, `image`, `name`, `price`) VALUES
(1, 'photos/succulents3.jpg', 'Crassula Capitella Campfire', 'Rs.470'),
(2, 'photos/succulent1.jpg', 'Sedeveria Green Rose', 'Rs.300'),
(3, 'photos/succulent2.jpg', 'Echeveria Elegans', 'Rs.340'),
(4, 'photos/succulent4.jpg', 'Crassula Capitella \'Thyrsiflora\'', 'Rs.530'),
(5, 'photos/succulents1.jpg', 'Crassula Perforata', 'Rs.570'),
(6, 'photos/succulents6.jpg', 'Haworthia Reinwardtii', 'Rs.480');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signuser`
--
ALTER TABLE `signuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `succulent`
--
ALTER TABLE `succulent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signuser`
--
ALTER TABLE `signuser`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `succulent`
--
ALTER TABLE `succulent`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
