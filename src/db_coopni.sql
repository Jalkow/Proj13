-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 avr. 2022 à 16:09
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_coopni`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

DROP TABLE IF EXISTS `actu`;
CREATE TABLE IF NOT EXISTS `actu` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` char(250) NOT NULL,
  `news_img` char(250) NOT NULL,
  `news_description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id_article`, `news_title`, `news_img`, `news_description`) VALUES
(1, 'news 1', 'img/media/img_art1.jpg', 'aled aled aled aled aled aled'),
(5, 'zea', 'img/media/img_art3.jpg', 'zae'),
(6, 'fge', 'img/media/img_art3.jpg', 'aeegrearg'),
(8, 'erzt', 'img/media/img_art3.jpg', 'erzter');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `mail` char(250) NOT NULL,
  `password` char(250) NOT NULL,
  `name` char(250) NOT NULL,
  `last_name` char(250) NOT NULL,
  `adress` char(250) NOT NULL,
  `city` char(250) NOT NULL,
  `postal_code` int(255) NOT NULL,
  `country` char(250) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`mail`, `password`, `name`, `last_name`, `adress`, `city`, `postal_code`, `country`, `phone`, `id`) VALUES
('hcaroumbin@gaming.tech', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'michel', 'gertrude', 'quelquepar', 'ici', 1995, 'parlaba', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
