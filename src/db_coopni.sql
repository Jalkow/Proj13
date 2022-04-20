-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 avr. 2022 à 13:57
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id_article`, `news_title`, `news_img`, `news_description`) VALUES
(1, 'efrgopihuj', 'img/img_art2', 'erghùmflsdj');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `emailSAV` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `text1`, `text2`, `img1`, `img2`, `phone`, `email`, `emailSAV`, `linkedin`) VALUES
(1, 'hello heloo hello heloo hello heloo hello heloo hello heloo hello heloo', 'ooleh olleh ooleh olleh ooleh olleh ooleh olleh ooleh olleh ooleh olleh', 'img/img_art1', 'img/img_art2', 677890001, 'coopnistudio@gmail.com', 'coopnistudio.maintenance@gmail.com', 'https://www.linkedin.com/company/riot-games/');

-- --------------------------------------------------------

--
-- Structure de la table `page_picture`
--

DROP TABLE IF EXISTS `page_picture`;
CREATE TABLE IF NOT EXISTS `page_picture` (
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` char(250) NOT NULL,
  `password` char(250) NOT NULL,
  `name` char(250) NOT NULL,
  `last_name` char(250) NOT NULL,
  `adress` char(250) NOT NULL,
  `city` char(250) NOT NULL,
  `postal_code` int(255) NOT NULL DEFAULT '0',
  `country` char(250) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `admin` int(3) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `last_name`, `adress`, `city`, `postal_code`, `country`, `phone`, `admin`, `id`) VALUES
('ab@gmail.com', '1234', 'wui', 'iuw', 'ijo', 'es', 41, 'sdqqf', 1451, 2, 1),
('az@gmail.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'qg', 'qdgqd', 'dqfgq', 'qdfgdfg', 45145, 'dqfgdfq', 645156, 0, 2),
('po@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'dfsg', 'dfsgsdf', 'dsfgsdf', 'gdfsgdfs', 987, 'dfsgdfsg', 41, 0, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
