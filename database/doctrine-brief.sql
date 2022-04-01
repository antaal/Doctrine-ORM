-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 01 avr. 2022 à 10:35
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `doctrine-brief`
--

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id_proprietaire` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mot_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Civilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Sexe` tinyint(1) NOT NULL,
  `Date_naissance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lieu_naissance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Code_identite_national` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_identite_national` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id_proprietaire`),
  ADD UNIQUE KEY `UNIQ_71D2422E30D515B1` (`Mot_passe`),
  ADD UNIQUE KEY `UNIQ_71D2422EF2F6E4A8` (`Numero`),
  ADD UNIQUE KEY `UNIQ_71D2422E5F69610` (`Code_identite_national`),
  ADD UNIQUE KEY `UNIQ_71D2422E4C6B6AE4` (`Numero_identite_national`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id_proprietaire` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
