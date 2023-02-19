-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 19 fév. 2023 à 21:14
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `beeyondauto`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idvehicule` int NOT NULL,
  `dateachat` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idvehicule` (`idvehicule`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idvehicule` int NOT NULL,
  `debutlocation` datetime NOT NULL,
  `finlocation` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idvehicule` (`idvehicule`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `motdepasse` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photodeprofil` longblob NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance` int NOT NULL,
  `boitedevitesse` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombredeportes` int NOT NULL,
  `nombredeplaces` int NOT NULL,
  `anneedesortie` year NOT NULL,
  `stock` int NOT NULL,
  `prix_vente` int NOT NULL,
  `prix_location` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicules_occasion`
--

DROP TABLE IF EXISTS `vehicules_occasion`;
CREATE TABLE IF NOT EXISTS `vehicules_occasion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance` int NOT NULL,
  `boitedevitesse` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombredeportes` int NOT NULL,
  `nombredeplaces` int NOT NULL,
  `anneedesortie` year NOT NULL,
  `prix_vente` int NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`idvehicule`) REFERENCES `vehicules` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`username`) REFERENCES `utilisateurs` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`idvehicule`) REFERENCES `vehicules` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`username`) REFERENCES `utilisateurs` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  ADD CONSTRAINT `vehicules_occasion_ibfk_1` FOREIGN KEY (`username`) REFERENCES `utilisateurs` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
