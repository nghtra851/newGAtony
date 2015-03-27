-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 27 mars 2015 kl 13:38
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `projectdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `color` varchar(25) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `availability` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `color`, `size`, `quantity`, `availability`) VALUES
(1, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(2, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(3, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(4, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(5, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(6, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(7, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(8, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(9, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(10, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(11, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(12, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(13, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(14, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(15, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(16, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(17, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(18, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(19, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(20, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(21, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(22, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(23, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(24, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(25, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(26, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(27, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(28, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(29, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(30, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(31, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(32, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(33, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(34, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(35, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(36, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(37, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(38, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(39, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(40, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(41, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(42, 'T-Shirt', 200, 'Brown, Blue, Orange', 'XS, M, XL', 30, 0),
(43, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(44, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(45, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(46, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0),
(47, 'Tophat', 499, 'Green, Blue, Yellow', 'S, M, L', 13, 0);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Index för tabell `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
