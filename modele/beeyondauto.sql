-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 fév. 2023 à 23:20
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
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idvehicule` int NOT NULL,
  `debutlocation` datetime NOT NULL,
  `finlocation` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `location_ibfk_1` (`idvehicule`)
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
  `modelFamily` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelRange` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelVariant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance_ch` int NOT NULL,
  `boitedevitesse` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombredeportes` int NOT NULL,
  `nombredeplaces` int NOT NULL,
  `anneedesortie` year NOT NULL,
  `stock` int NOT NULL,
  `prix_vente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `marque`, `modelFamily`, `modelRange`, `modelVariant`, `type`, `carburant`, `puissance_ch`, `boitedevitesse`, `nombredeportes`, `nombredeplaces`, `anneedesortie`, `stock`, `prix_vente`) VALUES
(1, 'AUDI', 'A6', 'A6', 'SA', 'BERLINE', 'DIESEL', 560, 'AUTOMATIQUE', 5, 5, 2018, 3, 60000),
(2, 'AUDI', 'A6', 'RS6', 'ES', 'BREAK', 'ESSENCE', 600, 'AUTOMATIQUE', 5, 5, 2020, 1, 125000),
(3, 'AUDI', 'A3', 'A3', 'CA', 'BERLINE', 'ESSENCE', 300, 'MANUELLE', 3, 2, 2019, 1, 30000),
(4, 'AUDI', 'Q5-SPORTBACK', 'SQ5-SPORTBACK', 'OD', 'SUV', 'DIESEL', 341, 'AUTOMATIQUE', 5, 5, 2021, 5, 80000),
(5, 'AUDI', 'A1', 'S1', 'HA', 'CITADINE', 'ESSENCE', 231, 'MANUELLE', 3, 5, 2017, 2, 15000),
(6, 'ABARTH', '500', '500', 'CA', 'CITADINE', 'ESSENCE', 165, 'AUTOMATIQUE', 3, 4, 2018, 1, 15200),
(7, 'ABARTH', '124-SPIDER', '124-SPIDER', 'CA', 'CABRIOLET', 'ESSENCE', 170, 'MANUELLE', 2, 2, 2018, 1, 27500),
(8, 'BMW', 'Z4', 'Z4', 'CA', 'CABRIOLET', 'ESSENCE', 197, 'AUTOMATIQUE', 3, 2, 2023, 6, 52300),
(9, 'BMW', 'I8', 'I8', 'CO', 'BERLINE', 'HYBRIDE', 374, 'AUTOMATIQUE', 3, 2, 2018, 2, 134800),
(10, 'BMW', 'SERIES-1', 'SERIES-1', 'CH', 'BERLINE', 'DIESEL', 170, 'AUTOMATIQUE', 5, 5, 2019, 4, 24675),
(11, 'FORD', 'B-MAX', 'B-MAX', 'HA', 'MONOSPACE', 'ESSENCE', 105, 'AUTOMATIQUE', 5, 5, 2016, 1, 7799),
(12, 'FORD', 'F-150', 'F-150', 'PU', 'RANGER', 'DIESEL', 375, 'AUTOMATIQUE', 2, 3, 2019, 2, 36985),
(13, 'FORD', 'TRANSIT-CUSTOM', 'TRANSIT-CUSTOM', 'CC', 'SOCIETE', 'DIESEL', 131, 'MANUELLE', 5, 3, 2019, 3, 14300),
(14, 'FORD', 'ECOSPORT', 'ECOSPORT', 'OD', 'SUV', 'ESSENCE', 125, 'MANUELLE', 5, 5, 2019, 2, 13700),
(15, 'FORD', 'RANGER', 'WILDTRACK', 'PU', 'RANGER', 'DIESEL', 240, 'AUTOMATIQUE', 4, 4, 2023, 6, 50650),
(16, 'CITROEN', 'C1', 'C1', 'MC', 'CITADINE', 'ESSENCE', 72, 'MANUELLE', 3, 4, 2019, 3, 10500),
(17, 'CITROEN', 'C3-AIRCROSS', 'C3-AIRCROSS', 'OD', 'SUV', 'ESSENCE', 130, 'MANUELLE', 5, 5, 2021, 9, 23400),
(18, 'CITROEN', 'C4', 'C4', 'HA', 'BERLINE', 'ELECTRIQUE', 136, 'AUTOMATIQUE', 5, 5, 2021, 1, 25250),
(19, 'TESLA', 'MODEL-3', 'MODEL-3', 'SA', 'LUXE', 'ELECTRIQUE', 325, 'AUTOMATIQUE', 5, 5, 2021, 1, 58100),
(20, 'TESLA', 'MODEL-S', 'MODEL-S', 'HA', 'LUXE', 'ELECTRIQUE', 422, 'AUTOMATIQUE', 5, 5, 2020, 1, 69990),
(21, 'BUGATTI', 'CHIRON', 'CHIRON', 'CO', 'LUXE', 'ESSENCE', 1600, 'AUTOMATIQUE', 2, 2, 2020, 3, 2800250),
(22, 'JAGUAR', 'F-PACE', 'F-PACE', 'OD', 'SUV', 'ESSENCE', 250, 'AUTOMATIQUE', 5, 5, 2020, 2, 47250),
(23, 'JAGUAR', 'XE', 'XE', 'SA', 'BERLINE', 'DIESEL', 180, 'AUTOMATIQUE', 5, 5, 2019, 2, 32999),
(24, 'ASTON-MARTIN', 'RAPIDE', 'RAPIDE-S', 'CO', 'LUXE', 'ESSENCE', 560, 'AUTOMATIQUE', 4, 4, 2015, 1, 139899),
(25, 'FIAT', '500X', '500X', 'OD', 'SUV', 'HYBRIDE', 131, 'AUTOMATIQUE', 5, 5, 2022, 13, 35370);

-- --------------------------------------------------------

--
-- Structure de la table `vehicules_location`
--

DROP TABLE IF EXISTS `vehicules_location`;
CREATE TABLE IF NOT EXISTS `vehicules_location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelFamily` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelRange` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelVariant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance_ch` int NOT NULL,
  `boitedevitesse` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombredeportes` int NOT NULL,
  `nombredeplaces` int NOT NULL,
  `anneedesortie` year NOT NULL,
  `prix_hebdomadaire` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicules_location`
--

INSERT INTO `vehicules_location` (`id`, `marque`, `modelFamily`, `modelRange`, `modelVariant`, `type`, `carburant`, `puissance_ch`, `boitedevitesse`, `nombredeportes`, `nombredeplaces`, `anneedesortie`, `prix_hebdomadaire`) VALUES
(1, 'BENTLEY', 'BENTAYGA', 'BENTAYGA', 'OD', 'SUV', 'ESSENCE', 545, 'AUTOMATIQUE', 5, 5, 2020, 1345),
(2, 'BENTLEY', 'FLYING-SPUR', 'FLYING-SPUR', 'SA', 'LUXE', 'ESSENCE', 625, 'AUTOMATIQUE', 4, 5, 2020, 2099),
(3, 'SMART', 'FORTWO', 'FORTWO', 'MC', 'CABRIOLET', 'ESSENCE', 90, 'AUTOMATIQUE', 2, 4, 2019, 46),
(4, 'LAMBORGHINI', 'HURACAN', 'HURACAN-EVO', 'CO', 'LUXE', 'ESSENCE', 639, 'AUTOMATIQUE', 2, 2, 2019, 3299),
(5, 'MASERATI', 'GHIBLI', 'GHIBLI', 'SA', 'LUXE', 'ESSENCE', 580, 'AUTOMATIQUE', 4, 5, 2021, 1299),
(6, 'MCLAREN', 'ARTURA', 'ARTURA', 'CO', 'LUXE', 'HYBRIDE', 680, 'AUTOMATIQUE', 2, 2, 2022, 1499),
(7, 'PORSHE', 'CAYENNE-COUPE', 'CAYENNE-COUPE', 'OD', 'COUPE', 'HYBRIDE', 462, 'AUTOMATIQUE', 5, 5, 2020, 699);

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
-- Contraintes pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  ADD CONSTRAINT `vehicules_occasion_ibfk_1` FOREIGN KEY (`username`) REFERENCES `utilisateurs` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
