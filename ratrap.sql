-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 déc. 2021 à 13:23
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ratrap`
--

-- --------------------------------------------------------

--
-- Structure de la table `camion`
--

CREATE TABLE `camion` (
  `libelle` varchar(100) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `id_camion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `camion`
--

INSERT INTO `camion` (`libelle`, `matricule`, `id_camion`) VALUES
('mitsubisy', '77re8', 4),
('toyota', '487yr', 5);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `nom_type` varchar(100) NOT NULL,
  `id_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`nom_type`, `id_type`) VALUES
('4x4', 4),
('motor', 5),
('geant', 6);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `nom_user` varchar(100) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`nom_user`, `prenom_user`, `email_user`, `password`, `id_user`) VALUES
('camion', 'ratrappage', 'camion@gmail.com', 'passer123', 1),
('Tahir', 'Sarr', 'tahir@gmail.com', 'pass123', 2),
('Tahir', 'Sarr', 'tahir@gmail.com', 'pass123', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id_camion`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `camion`
--
ALTER TABLE `camion`
  MODIFY `id_camion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `camion`
--
ALTER TABLE `camion`
  ADD CONSTRAINT `camion_ibfk_1` FOREIGN KEY (`id_camion`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
