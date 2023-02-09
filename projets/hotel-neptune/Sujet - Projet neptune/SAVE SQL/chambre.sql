-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 déc. 2022 à 13:04
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_neptune`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nb_place` int(11) NOT NULL,
  `prix/nuit` int(11) NOT NULL,
  `expo` text COLLATE utf8_bin NOT NULL,
  `etage` int(11) NOT NULL,
  `dispo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`num`, `nb_place`, `prix/nuit`, `expo`, `etage`, `dispo`) VALUES
(2, 2, 89, 'N', 2, 1),
(4, 5, 260, 'S', 0, 1),
(5, 1, 26, 'E', 4, 1),
(6, 2, 180, 'W', 6, 1),
(7, 1, 80, 'S', 2, 1),
(8, 4, 190, 'E', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
