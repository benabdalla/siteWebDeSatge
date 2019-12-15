-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 fév. 2019 à 21:53
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apptt`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('123', 'mootez');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `mp` varchar(30) NOT NULL,
  `nt` varchar(30) NOT NULL,
  `adl` varchar(30) NOT NULL,
  `nc` varchar(30) NOT NULL,
  `nomc` varchar(30) NOT NULL,
  `cvv` varchar(30) NOT NULL,
  `de` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `npm`, `addr`, `mp`, `nt`, `adl`, `nc`, `nomc`, `cvv`, `de`) VALUES
('123tel1', '', '', '', '', '', '', '', '', ''),
('123tel2', 'mootez', 'mootezbenabadllah@hotmal.fr', '123456789', '58 888 850', 'nabeul-manzel temime-alwedyen', '4788639108983700', 'mootez', '3451', '07/22');

-- --------------------------------------------------------

--
-- Structure de la table `tell`
--

CREATE TABLE `tell` (
  `idtel` varchar(30) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `src` varchar(30) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tell`
--

INSERT INTO `tell` (`idtel`, `marque`, `desc`, `src`, `prix`) VALUES
('123tel1', 'EVERTEK', 'Ecran 5.45\" IPS - Résolution: 480 x 960 pixels \r\nProcesseur MT6580M Quad Core 1.3 Ghz \r\nRAM 1 Go - Mémoire 8 Go \r\nAndroid 7.0 Nougat \r\n2x Appareils Photos 8 MP Arrière, 5 MP Frontale \r\nGarantie 1 an', 'tell/images (1).jpg', 45),
('123tel2', 'odise', 'Ecran 5.45\" IPS - Résolution: 480 x 960 pixels \r\nProcesseur MT6580M Quad Core 1.3 Ghz \r\nRAM 1 Go - Mémoire 8 Go \r\nAndroid 7.0 Nougat \r\n2x Appareils Photos 8 MP Arrière, 5 MP Frontale \r\nGarantie 1 an', 'tell/images (2).png', 30),
('123tel3', 'NOKIA', 'Ecran 5.45\" IPS - Résolution: 480 x 960 pixels \r\nProcesseur MT6580M Quad Core 1.3 Ghz \r\nRAM 1 Go - Mémoire 8 Go \r\nAndroid 7.0 Nougat \r\n2x Appareils Photos 8 MP Arrière, 5 MP Frontale \r\nGarantie 1 an', 'tell/images (4).png', 50),
('123tel4', 'condor', 'Ecran 5.45\" IPS - Résolution: 480 x 960 pixels \r\nProcesseur MT6580M Quad Core 1.3 Ghz \r\nRAM 1 Go - Mémoire 8 Go \r\nAndroid 7.0 Nougat \r\n2x Appareils Photos 8 MP Arrière, 5 MP Frontale \r\nGarantie 1 an', 'tell/images (5).jpg', 60),
('123tel5', 'SUMMSUNG', '55fgghbgccffgddc', 'tell/images (7).jpg', 80);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tell`
--
ALTER TABLE `tell`
  ADD PRIMARY KEY (`idtel`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tell` (`idtel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
