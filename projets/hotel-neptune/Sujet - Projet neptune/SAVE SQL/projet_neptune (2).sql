-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 déc. 2022 à 13:07
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

-- --------------------------------------------------------

--
-- Structure de la table `resa`
--

DROP TABLE IF EXISTS `resa`;
CREATE TABLE IF NOT EXISTS `resa` (
  `id_resa` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `num_chambre` int(11) NOT NULL,
  `prix` float NOT NULL,
  `d_debut` date NOT NULL,
  `d_fin` date NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_resa`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `resa`
--

INSERT INTO `resa` (`id_resa`, `id_user`, `num_chambre`, `prix`, `d_debut`, `d_fin`, `etat`) VALUES
(8, 13, 0, 150, '2022-12-10', '2022-12-20', -1),
(9, 12, 8, 150, '2022-12-05', '2022-12-09', 1),
(10, 14, 6, 150, '2022-12-01', '2022-12-03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `civilite` text NOT NULL,
  `email` varchar(139) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `civilite`, `email`, `password`, `isAdmin`) VALUES
(12, 'Palermo', 'Giovanni', 'F', 'dz@gmail.com', 'dzd', 0),
(13, 'Palermo', 'Enzo', 'M', 'palermo.enzo.ep@gmail.com', 'pass', 1),
(14, 'Palermo', 'Alexandra', 'F', 'rthgf@gmail.com', 'kty', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
