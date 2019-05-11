-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 11 mai 2019 à 12:16
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `employe`
--

-- --------------------------------------------------------

--
-- Structure de la table `circuit`
--

CREATE TABLE `circuit` (
  `themeCircuit` varchar(64) DEFAULT NULL,
  `descriptionCircuit` text NOT NULL,
  `dureeCircuit` varchar(11) NOT NULL,
  `transportCircuit` varchar(64) CHARACTER SET utf8 NOT NULL,
  `numCircuit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `circuit`
--

INSERT INTO `circuit` (`themeCircuit`, `descriptionCircuit`, `dureeCircuit`, `transportCircuit`, `numCircuit`) VALUES
('Nature & Culture', 'Un circuit magnifique avec des paysages plus que splendides à Bni Mtir où vous allez profiter de la vue panoramique du Djebal et du lac, en passant par Tabarka et le village de Aïn Draham pour découvrir l’immense forêt qui couvre le massif de Khroumirie ces sont aussi des lieux de séjour exceptionnel pour une détente absolue dans un environnement vivifiant. Par la suite, vous irez vers la ville de Bni Mtir pour visiter la cascade de Charchara et la forêt et pour terminer cette aventure, vous profiterez d’une  visite de la ville de Béja pour faire le shopping des produits laitiers traditionnels comme le fromage blanc, Fromage sans sel, le Beurre…', '3 jours', 'Bus', 123448),
('Sahara', 'Programme Circuit Sud Tunisien\r\n\r\n4 Jours / 3 Nuits \r\n\r\navec facilités de paiement sur 04 mois ', '4jours', 'Bus', 123449),
('mere', 'alalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalalal', '4jours', 'voiture', 123450);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `cinClient` int(11) NOT NULL,
  `nomClient` varchar(64) NOT NULL,
  `prenomClient` varchar(64) NOT NULL,
  `adresseClient` varchar(64) NOT NULL,
  `telephonneClient` int(11) NOT NULL,
  `sexeClient` varchar(8) NOT NULL,
  `passwordClient` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cinClient`, `nomClient`, `prenomClient`, `adresseClient`, `telephonneClient`, `sexeClient`, `passwordClient`) VALUES
(14, '', '', '', 0, 'male', ''),
(1111111, 'ahmed', 'trabesli', 'unis', 25252525, 'male', '12345678'),
(14767530, 'Sayed', 'Sayed', '5,rue 7332 el menzah 9', 20301098, 'male', '301098g03994'),
(1010101010, 'sayed', 'hamdi', '123456', 20301098, 'male', '301098');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `cin` varchar(14) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nbHeures` int(11) NOT NULL,
  `tarifHoraire` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `nbHeures`, `tarifHoraire`) VALUES
('14767530', 'mo', 'mo,j', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `nomPersonne` varchar(64) NOT NULL,
  `prenomPersonne` varchar(64) NOT NULL,
  `agePersonne` int(11) NOT NULL,
  `idReservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nomPersonne`, `prenomPersonne`, `agePersonne`, `idReservation`) VALUES
(9, 'hamdi', 'sayed', 1212, 127),
(10, 'Hamdi', 'Sayed', 1313, 127);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(11) NOT NULL,
  `cinClient` int(11) NOT NULL,
  `dureeReservation` int(11) NOT NULL,
  `idCircuit` int(11) NOT NULL,
  `nbrePersonne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `cinClient`, `dureeReservation`, `idCircuit`, `nbrePersonne`) VALUES
(125, 1111111, 111, 123447, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`numCircuit`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cinClient`) USING BTREE;

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `cinClient` (`cinClient`) USING BTREE,
  ADD KEY `idCircuit` (`idCircuit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `circuit`
--
ALTER TABLE `circuit`
  MODIFY `numCircuit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123452;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
