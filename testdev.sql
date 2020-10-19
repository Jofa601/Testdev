-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 16 oct. 2020 à 08:30
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--
-- Création :  jeu. 15 oct. 2020 à 10:57
-- Dernière modification :  jeu. 15 oct. 2020 à 10:57
--

DROP TABLE IF EXISTS `compteur`;
CREATE TABLE IF NOT EXISTS `compteur` (
  `access_page` varchar(56) NOT NULL,
  `access_date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `access_counter` int(11) NOT NULL,
  UNIQUE KEY `page` (`access_page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `compteur`
--

INSERT INTO `compteur` (`access_page`, `access_date`, `access_counter`) VALUES
('Casablancadetails', '2020-10-16 07:54:40', 10),
('Casablancaphoto', '2020-10-15 18:47:06', 6),
('Casablancamap', '2020-10-15 16:43:19', 5),
('Fesdetails', '2020-10-15 16:33:09', 3),
('Fesphoto', '2020-10-15 18:47:09', 5),
('Fesmap', '2020-10-15 18:31:45', 8),
('Rabatdetails', '2020-10-15 16:43:26', 2),
('Rabatphoto', '2020-10-15 14:45:03', 3),
('Rabatmap', '2020-10-15 18:47:12', 3),
('Fes', '2020-10-15 19:22:14', 47),
('Rabat', '2020-10-15 18:29:52', 4),
('Casablanca', '2020-10-16 07:54:39', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
