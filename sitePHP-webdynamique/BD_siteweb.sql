-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 12:16 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_sitephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `numclient` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepass` varchar(255) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `numphone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`numclient`, `email`, `motdepass`, `nom`, `numphone`) VALUES
(1, 'toto@cocomail.com', '123Autr?', 'amal moutaki', 987654321),
(2, 'sanfour@gmail.com ', 'Asb23lk!', 'rajab hajibu', 8764333),
(3, 'ahlanWar@hotmail.com', 'Aqruy&0tyu', 'ahalmn bhyg', 67540007),
(6, 'ben_tahernoura.99@yahoo.com', 'nmug76?>:{', 'Noura Bentaher', 89765);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`firstname`, `lastname`, `country`, `subject`) VALUES
('vvv', 'fff', 'australia', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `numclient` int(11) NOT NULL,
  `numproduct` int(11) NOT NULL,
  `achat` int(11) NOT NULL,
  `prixtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `numproduct` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`numproduct`, `title`, `price`) VALUES
(1, 'petit sac Rouge', 500),
(2, 'petit sac colorer', 567),
(3, 'Sac a dos noir', 700),
(4, 'sac a main rose', 400),
(5, 'bogner', 789),
(6, 'grand sac GUCCI', 800),
(7, 'Sac black', 344),
(8, '	\r\nsac GUCCI white', 790);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numclient`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD KEY `fk_client` (`numclient`),
  ADD KEY `fk_produit` (`numproduct`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`numproduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `numclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `numproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`numclient`) REFERENCES `client` (`numclient`),
  ADD CONSTRAINT `fk_produit` FOREIGN KEY (`numproduct`) REFERENCES `produit` (`numproduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
