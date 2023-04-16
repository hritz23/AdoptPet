-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `type`, `size`, `about`, `gender`, `vaccinated`, `img`) VALUES
(1, 'Mocha', 'Dog', 'Small', ' Pug & Affenpinscher Mix ', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/48100346/1/?bust=1591093605&width=720'),
(2, 'Issa', 'Dog', 'Medium', ' Affenpinscher ', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/62730311/1/?bust=1681640853&width=300'),
(3, 'Byron', 'Cat', 'Small', 'kitten, Domestic Short Hair', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/48105713/1/?bust=1591006850&width=720'),
(4, 'Mac', 'Dog', 'Medium', 'Adult,  GOOD IN A HOME WITH\r\nOther dogs, children. ', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/62639627/1/?bust=1681467379&width=720'),
(5, 'Sansa', 'Cat', 'Large', 'HEALTH\r\nVaccinations up to date, spayed / neutered.', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/61914411/4/?bust=1681068300&width=720'),
(6, 'Nemo', 'Cat', 'Small', 'HEALTH\r\nVaccinations up to date, spayed / neutered.', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/55064014/1/?bust=1681067630&width=720'),
(7, 'Blizzard', 'Other', 'Small', ' Rabbit <br>CHARACTERISTICS\r\nAthletic, Spunky, Loves to dig in blankets, Loves to run', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/59296865/1/?bust=1672374686&width=720');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
