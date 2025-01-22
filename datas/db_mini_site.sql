-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 jan. 2025 à 14:39
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `db_mini_site`
--
DROP DATABASE IF EXISTS `db_mini_site`;
CREATE DATABASE IF NOT EXISTS `db_mini_site` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_mini_site`;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `titlep` varchar(150) NOT NULL,
  `textp` varchar(500) NOT NULL,
  `datep` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `titlep`, `textp`, `datep`) VALUES
(1, 'Homepage', 'On écrit « acceuil » ou « accueil » ?\r\nRègle : On écrit toujours « accueil » avec le -u après le double -c. La définition de ce mot désigne « le fait d’accueillir, la manière d’accueillir ».\r\n\r\nExplications : dans la plupart des cas, le son [oeil] qu\'on écrit « oeil » s’écrit -euil en fin de mot, comme par exemple dans « fauteuil », « deuil », « écureuil » etc. Il y a toutefois des exceptions à cette règle, les noms accueil, cercueil, écueil, orgueil et recueil s\'écrivent -ueil. Ces exceptions s', '2025-01-22 15:32:37'),
(2, 'PHP', 'PHP: Hypertext Preprocessor6, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre7, principalement utilisé pour produire des pages Web dynamiques via un serveur web6, mais pouvant également fonctionner comme n\'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.\r\n\r\nPHP a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia8. Il est considéré comme une des bases de la création de sites ', '2025-01-22 15:33:37'),
(3, 'SQL', 'SQL (sigle pour Structured Query Language, « langage de requêtes structurées ») est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d\'ajouter, de modifier ou de supprimer des données dans les bases de données relationnelles.\r\n\r\nOutre le langage de manipulation des données :\r\n\r\nle langage de définition des données permet de créer et de modifier l\'organisation des données dans la b', '2025-01-22 15:34:04'),
(4, 'JavaScript', 'JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les langages HTML et CSS, JavaScript est au cœur des langages utilisés par les développeurs web4. Une grande majorité des sites web l\'utilisent5, et la majorité des navigateurs web disposent d\'un moteur JavaScript6 pour l\'interpréter.\r\n\r\nJavaScript est aussi employé pour les serveurs Web7 avec l\'utilisation (par exemple) ', '2025-01-22 15:34:20');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
