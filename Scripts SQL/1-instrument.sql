-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Client: 127.5.220.2:3306
-- Généré le: Lun 01 Juin 2015 à 18:48
-- Version du serveur: 5.5.41
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `NumInst` int(11) NOT NULL AUTO_INCREMENT,
  `NomInst` varchar(15) NOT NULL,
  PRIMARY KEY (`NumInst`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `instrument`
--

INSERT INTO `instrument` (`NumInst`, `NomInst`) VALUES
(1, 'SAXOPHONE'),
(2, 'TROMPETTE'),
(3, 'TROMBONE'),
(4, 'PERCUSSIONS'),
(5, 'SOUBA'),
(6, 'TUBA'),
(7, 'CLARINETTE'),
(8, 'FLUTE'),
(9, 'CHEF');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
