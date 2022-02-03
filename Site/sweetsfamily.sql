-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 juil. 2021 à 04:23
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sweetsfamily`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id_actualite` int(11) NOT NULL,
  `titre_actualite` varchar(255) NOT NULL,
  `contenu_actualite` longtext NOT NULL,
  `date_publication_actualite` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id_actualite`, `titre_actualite`, `contenu_actualite`, `date_publication_actualite`, `image`) VALUES
(26, 'Les nouveautés !', 'Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.\r\n\r\nIllud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.', '2021-07-12', 'bonbon-8.jpg'),
(27, 'Des cadeaux ?', 'Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.\r\n\r\nIllud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.', '2021-07-01', 'bonbon-9.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`login`, `password`) VALUES
('admin', '$2y$10$3ldueSY/KPrZ5UtBG3QE/OF2wtWhPksUHX.Ec6gZnZE7F.fU4Vsa6');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_bin NOT NULL,
  `password` varchar(255) COLLATE latin1_bin NOT NULL,
  `prenom` varchar(255) COLLATE latin1_bin NOT NULL,
  `nom` varchar(255) COLLATE latin1_bin NOT NULL,
  `mail` varchar(255) COLLATE latin1_bin NOT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_user`, `username`, `password`, `prenom`, `nom`, `mail`, `statut`, `date_inscription`) VALUES
(6, 'jlkjl', 'cf6021b99969afd31e25d528f5b6946f0255f015c47cc55c6531718839c935b0', 'opoop', 'jqpjp', 'pork', NULL, '2020-12-17'),
(7, '7777', '41c991eb6a66242c0454191244278183ce58cf4a6bcd372f799e4b9cc01886af', '7777', '7777', '7777', NULL, '2020-12-17');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_bonbon` int(11) NOT NULL,
  `nom_bonbon` varchar(255) COLLATE latin1_bin NOT NULL,
  `reference` varchar(255) COLLATE latin1_bin NOT NULL,
  `description` text COLLATE latin1_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) COLLATE latin1_bin NOT NULL,
  `id_html` varchar(255) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_bonbon`, `nom_bonbon`, `reference`, `description`, `prix`, `image`, `id_html`) VALUES
(1, 'Super Frites - Pik Sachet en vrac de 1kg', 'P12348', 'CONFISERIE G&Eacute;LIFI&Eacute;E ACIDIFI&Eacute;E / Ingr&eacute;dients: sirop de glucose; sucre; g&eacute;latine; dextrose; acidifiants: acide citrique, acide malique; agent d\'enrobage: cire de carnauba; correcteurs d\'acidit&eacute;: citrate tricalcique, malate acide de sodium; ar&ocirc;me; concentr&eacute;s de fruits et de plantes: citron, carthame; sirop de sucre inverti; colorants: bleu patent&eacute; V, carot&egrave;nes v&eacute;g&eacute;taux, lut&eacute;ine, anthocyanes. Tenir &agrave; l\'abri de la chaleur et de l\'humidit&eacute;.', 8.5, 'bonbon-1.jpg', 'PIK'),
(2, 'Les Schtroumfs - Sachet vrac 1kg', 'S1234', 'CONFISERIE GÉLIFIÉE FANTAISIE / Ingrédients: sirop de glucose; sucre; gélatine; dextrose; acidifiant: acide citrique; arôme; colorants: carmins, bleu patenté V, lutéine; agents d\'enrobage: cire d\'abeille blanche et jaune, cire de carnauba. Tenir à l\'abri de la chaleur et de l\'humidité', 8.5, 'bonbon-2.jpg', 'SCHTROUMFS'),
(3, 'Fraise Tagada - Sachet vrac 1kg', 'T1234', 'CONFISERIE GÉLIFIÉE / Ingrédients: sucre; sirop de glucose; gélatine; acidifiant: acide citrique; arôme; concentrés de fruits et de plantes: radis, carotte, carthame, citron; sirop de sucre inverti. Tenir à l\'abri de la chaleur et de l\'humidité.', 8.5, 'bonbon-3.jpg', 'TAGADA'),
(41, 'Banan\'s - Sachet vrac 1kg.', 'B1234', 'CONFISERIE GÉLIFIÉE AROMATISÉE / Ingrédients: sucre; sirop de glucose; gélatine; acidifiant: acide citrique; arôme; concentrés de fruits et de plantes: citron, carthame; sirop de sucre inverti. Tenir à l\'abri de la chaleur et de l\'humidité.', 8.5, 'bonbon-4.jpg', 'BANANS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id_actualite`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_bonbon`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id_actualite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_bonbon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
