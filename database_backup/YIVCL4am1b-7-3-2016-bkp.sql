-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 07 mrt 2016 om 09:21
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b_2015_loginregistration`
--
CREATE DATABASE IF NOT EXISTS `am1b_2015_loginregistration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b_2015_loginregistration`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `activation` enum('true','false') NOT NULL DEFAULT 'false',
  `password` varchar(32) NOT NULL,
  `userrole` enum('root','administrator','developer','customer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `email`, `activation`, `password`, `userrole`) VALUES
(1, 'Arjan', 'de', 'Ruijter', 'adruijter@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'developer'),
(2, 'Frans', 'van de', 'Dusschoot', 'dusschoten@gmail.com', 'false', 'e8636ea013e682faf61f56ce1cb1ab5d', 'administrator'),
(3, 'Bert', 'de', 'Vries', 'vries@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer'),
(4, 'harry', 'van', 'beckhoven', 'beckhoven@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer'),
(5, 'admin', 'de', 'admin', 'administrator@gmail.com', 'false', 'e8636ea013e682faf61f56ce1cb1ab5c', 'administrator'),
(6, 'rooting', 'van', 'rootenstein', 'root@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'root'),
(7, 'customer', 'de', 'customer', 'customer@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer'),
(8, 'Arjan', 'de', 'Ruijter', 'developer@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'developer'),
(9, 'Archibaldus', 'de', 'Ruijter', 'adruijter@hotmail.com', 'false', '7f521c440c6b0c1adbd78ac13602b9ed', 'customer'),
(10, 'Tedje', 'van', 'Workum', 'tedje@gmail.com', 'false', 'd35fe664e030a88f4f4d98fe3426c1a8', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
