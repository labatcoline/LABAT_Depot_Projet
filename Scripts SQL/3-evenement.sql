-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Client: 127.5.220.2:3306
-- Généré le: Lun 01 Juin 2015 à 18:50
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
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `NumEv` int(11) NOT NULL AUTO_INCREMENT,
  `NomEv` varchar(20) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `VilleEv` varchar(20) NOT NULL,
  `DateEv` date NOT NULL,
  `NbPlaces` int(11) NOT NULL,
  PRIMARY KEY (`NumEv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`NumEv`, `NomEv`, `Description`, `VilleEv`, `DateEv`, `NbPlaces`) VALUES
(1, 'REMUNERE-FETES', 'Animation du repas du midi', 'AUBAGNAN', '2015-05-10', 645),
(2, 'REMUNERE-JASSO', 'Journee inter-associations - animation de la soiree au bar le BAHUSATE', 'BAHUS', '2015-05-14', 840),
(3, 'BENEVOLAT-FETES', 'Animation du marche dans le cadre des fetes locales en fin de matinee', 'AIRE SUR ADOUR', '2015-06-20', 610),
(4, 'REMUNERE-MARIAGE', 'Animation du mariage de Melanie et Vincent', 'DUHORT-BACHEN', '2015-08-29', 600),
(5, 'REMUNERE-FETES', 'Animation de la soiree dans le cadre des fetes locales', 'DUHORT-BACHEN', '2015-09-05', 700),
(6, 'REUNION', 'Comptes de l''année 2014', 'AIRE SUR ADOUR', '2015-05-30', 600),
(7, 'BENEVOLAT', 'Sainte-Cécile, animation repas', 'AIRE SUR ADOUR', '2015-11-22', 990),
(8, 'BENEVOLAT', 'Concert de Printemps', 'AIRE SUR ADOUR', '2015-03-21', 600),
(9, 'REMUNERE-FETES', 'Fêtes de Mont-de-Marsan, animation Corrida', 'MONT-DE-MARSAN', '2015-07-26', 675),
(10, 'REMUNERE-FETES', 'Cavalcade Roquefort', 'ROQUEFORT', '2015-08-15', 680),
(11, 'BENEVOLAT', 'Fête de la musique Lannux, animation dessert', 'LANNUX', '2015-06-21', 600),
(12, 'MARIAGE-CONTRAT', 'Mariage Présidente Los Angeles', 'LOS ANGELES', '2015-07-07', 1000),
(13, 'BENEVOLAT', 'Bapteme Candice', 'AIRE SUR ADOUR', '2015-06-28', 600),
(14, 'REMUNERE FETES', 'Animation audition ecole de musique', 'AIRE SUR ADOUR', '2015-06-27', 850);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
