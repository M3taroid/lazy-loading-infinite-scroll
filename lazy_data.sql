-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 13 juil. 2021 à 01:49
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lazy_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`) VALUES
(1, 'Jean', NULL),
(2, 'John', NULL),
(3, 'Jean', NULL),
(4, 'Pure', NULL),
(5, 'Full', NULL),
(6, 'John', NULL),
(7, 'Ken', NULL),
(8, 'John', NULL),
(9, 'Herve', NULL),
(10, 'Avy', NULL),
(11, 'Fanny', NULL),
(12, 'John', NULL),
(13, 'John', NULL),
(14, 'Guerth', NULL),
(15, 'Tonny', NULL),
(16, 'Manne', NULL),
(17, 'Nail', NULL),
(18, 'Po', NULL),
(19, 'John', NULL),
(20, 'John', NULL),
(21, 'Priscille', NULL),
(22, 'Carl', NULL),
(23, 'John', NULL),
(24, 'Bill', NULL),
(25, 'Coll', NULL),
(26, 'John', NULL),
(27, 'Flip', NULL),
(28, 'Rod', NULL),
(29, 'Chi', NULL),
(30, 'Jean', NULL),
(31, 'Pure', NULL),
(32, 'Full', NULL),
(33, 'John', NULL),
(34, 'Ken', NULL),
(35, 'John', NULL),
(36, 'Herve', NULL),
(37, 'Avy', NULL),
(38, 'Fanny', NULL),
(39, 'John', NULL),
(40, 'John', NULL),
(41, 'Guerth', NULL),
(42, 'Tonny', NULL),
(43, 'Manne', NULL),
(44, 'Nail', NULL),
(45, 'Po', NULL),
(46, 'John', NULL),
(47, 'John', NULL),
(48, 'Priscille', NULL),
(49, 'Carl', NULL),
(50, 'John', NULL),
(51, 'Bill', NULL),
(52, 'Coll', NULL),
(53, 'John', NULL),
(54, 'Flip', NULL),
(55, 'Rod', NULL),
(56, 'Chi', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
