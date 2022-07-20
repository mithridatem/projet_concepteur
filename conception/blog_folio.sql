-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 juil. 2022 à 17:24
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_folio`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int NOT NULL AUTO_INCREMENT,
  `name_art` varchar(50) NOT NULL,
  `content_art` text NOT NULL,
  `date_art` date NOT NULL,
  `id_type` int DEFAULT NULL,
  PRIMARY KEY (`id_art`),
  KEY `article_type_FK` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `name_art`, `content_art`, `date_art`, `id_type`) VALUES
(2, '$_GET', 'Aujourd\'hui nous allons parler de la super globale $_GET.\r\nCette variable va nous permettre de passer des argument dans l\'url de votre site web.\r\nIl sera ainsi possible de faire passer des argument précis pour la suite de vos opération.\r\nPar exemple vous êtes sur une page ou il y a plusieurs article, la requêtes va donc demandez l\'ensemble des articles.\r\nAvec par exemple: \r\nSELECT * FROM articles;\r\n\r\nMaintenant vous souhaitez voir l\'article entierement sur une page dédier, alors avec la super globale GET vous pourrez faire passez l\'id de l\'article dans l\'url et ainsi faire la requete suivante sur la prochaine page.\r\nSELECT * FROM articles WHERE id=\"$_GET[\"id\"] , faite attention parcontre il faudra sécuriser votre entrée sinon vous risquez une injection sql.\r\nVoila à vous de jouer :)', '2022-07-18', 1),
(3, 'Hello World !', 'Ecrire un Hello world en JavaScript(JS) est relativement simple.\r\nJS est un langage haut niveau et permet d’écrire rapidement du code.\r\n\r\nconsole.log(\"Hello World !\")\r\n\r\nfaite une liaison de votre script avec la balise <script src=\"script.js\"></script> \r\n\r\nEt voila ! \r\nEn quelques ligne vous trouver votre hello world sur votre page\r\n             ', '2022-07-20', 2),
(4, 'Doctype', 'Le doctype permet de spécifier au navigateur le type de document que vous allez lui transmettre.\r\nC\'est une information importantes pour le navigateur.\r\n\r\n<!DOCTYPE html>          \r\n\r\nET voila simple et efficace ', '2022-07-20', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commenter`
--

DROP TABLE IF EXISTS `commenter`;
CREATE TABLE IF NOT EXISTS `commenter` (
  `id_art` int NOT NULL,
  `id_util` int NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `commentaire` text,
  PRIMARY KEY (`id_art`,`id_util`,`date_commentaire`),
  KEY `fk_utilisateur` (`id_util`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commenter`
--

INSERT INTO `commenter` (`id_art`, `id_util`, `date_commentaire`, `commentaire`) VALUES
(2, 1, '2022-07-18 02:07:21', '      zefzefzfzef'),
(2, 1, '2022-07-20 01:07:24', '      azdazd');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `name_type` varchar(255) NOT NULL,
  `img_type` text,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `name_type`, `img_type`) VALUES
(1, 'PHP', 'php_type.png'),
(2, 'JavaScript', 'javascript_type.jpg'),
(3, 'HTML/CSS', 'html_type.jpg'),
(4, 'Autre', 'autre_type.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` int NOT NULL AUTO_INCREMENT,
  `name_util` varchar(50) NOT NULL,
  `first_name_util` varchar(50) NOT NULL,
  `mail_util` varchar(50) NOT NULL,
  `mdp_util` varchar(100) NOT NULL,
  `img_util` varchar(50) NOT NULL,
  `statut_util` tinyint(1) NOT NULL,
  `id_role` int DEFAULT NULL,
  PRIMARY KEY (`id_util`),
  KEY `utilisateur_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `name_util`, `first_name_util`, `mail_util`, `mdp_util`, `img_util`, `statut_util`, `id_role`) VALUES
(1, 'Ruben', 'Navone', 'navone_ruben@msn.com', '$2y$10$/KSM//s4Nr.PFpbm1hjiruaYB14NYPOGBP.cVSIXkf.frrajESa0W', 'default.jpg', 0, NULL),
(2, 'Gérard', 'malin', 'gerard@mail.Fr', '$2y$10$STUhzZUEWDp98ftp0S9kguOy0YX7sCtWGhS4PqjwR9FtANGwbVEqi', 'default.jpg', 0, NULL),
(3, 'James', 'pal', 'james@gd.com', '$2y$10$C6KgWRO7UOH7vaUFaex3Nue4Zq9SIMz0vAvjz/PbiejkxBrFZIfoK', 'barzork_mort-removebg-preview.png', 0, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_type_FK` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `commenter`
--
ALTER TABLE `commenter`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
