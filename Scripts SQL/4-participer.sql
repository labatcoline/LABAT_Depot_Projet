-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Client: 127.5.220.2:3306
-- Généré le: Lun 01 Juin 2015 à 18:51
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
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `Num` int(11) NOT NULL,
  `NumEv` int(11) NOT NULL,
  PRIMARY KEY (`Num`,`NumEv`),
  KEY `CE_PARTICIPER_2` (`NumEv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`Num`, `NumEv`) VALUES
(1, 1),
(6, 1),
(7, 1),
(9, 1),
(10, 1),
(16, 1),
(19, 1),
(22, 1),
(36, 1),
(43, 1),
(3, 2),
(4, 2),
(8, 2),
(10, 2),
(11, 2),
(15, 2),
(18, 2),
(21, 2),
(23, 2),
(31, 2),
(44, 2),
(46, 2),
(50, 2),
(53, 2),
(15, 3),
(30, 3),
(32, 3),
(40, 3),
(46, 3),
(48, 3),
(54, 3),
(9, 4),
(10, 4),
(13, 4),
(18, 4),
(20, 4),
(21, 4),
(23, 4),
(31, 4),
(33, 4),
(35, 4),
(36, 4),
(41, 4),
(14, 5),
(28, 5),
(30, 5),
(34, 5),
(37, 5),
(45, 5),
(48, 5),
(4, 6),
(10, 6),
(11, 6),
(12, 6),
(20, 6),
(23, 6),
(32, 6),
(37, 6),
(38, 6),
(39, 6),
(40, 6),
(43, 6),
(44, 6),
(46, 6),
(52, 6),
(53, 6),
(54, 6),
(3, 7),
(5, 7),
(6, 7),
(8, 7),
(22, 7),
(37, 7),
(40, 7),
(51, 7),
(1, 8),
(10, 8),
(16, 8),
(17, 8),
(19, 8),
(21, 8),
(29, 8),
(32, 8),
(35, 8),
(41, 8),
(44, 8),
(53, 8),
(11, 9),
(14, 9),
(21, 9),
(24, 9),
(28, 9),
(34, 9),
(39, 9),
(40, 9),
(47, 9),
(49, 9),
(8, 10),
(11, 10),
(21, 10),
(25, 10),
(30, 10),
(32, 10),
(36, 10),
(40, 10),
(43, 10),
(44, 10),
(1, 11),
(17, 11),
(20, 11),
(25, 11),
(30, 11),
(33, 11),
(38, 11),
(49, 11),
(5, 12),
(6, 12),
(11, 12),
(13, 12),
(17, 12),
(21, 12),
(22, 12),
(23, 12),
(30, 12),
(39, 12),
(42, 12),
(50, 12),
(52, 12),
(3, 13),
(12, 13),
(13, 13),
(17, 13),
(18, 13),
(20, 13),
(29, 13),
(35, 13),
(48, 13),
(52, 13),
(53, 13),
(3, 14),
(10, 14),
(14, 14),
(17, 14),
(25, 14),
(31, 14),
(32, 14),
(37, 14),
(38, 14),
(45, 14),
(49, 14),
(52, 14),
(53, 14);

--
-- Déclencheurs `participer`
--
DROP TRIGGER IF EXISTS `TRG_Ajout`;
DELIMITER //
CREATE TRIGGER `TRG_Ajout` AFTER INSERT ON `participer`
 FOR EACH ROW update personne set NbParticipation = NbParticipation+1 where Num=NEW.Num
//
DELIMITER ;
DROP TRIGGER IF EXISTS `TRG_Supp`;
DELIMITER //
CREATE TRIGGER `TRG_Supp` AFTER DELETE ON `participer`
 FOR EACH ROW update personne set NbParticipation = NbParticipation-1 where Num=OLD.Num
//
DELIMITER ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `CE_PARTICIPER_1` FOREIGN KEY (`Num`) REFERENCES `personne` (`Num`) ON DELETE CASCADE,
  ADD CONSTRAINT `CE_PARTICIPER_2` FOREIGN KEY (`NumEv`) REFERENCES `evenement` (`NumEv`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
