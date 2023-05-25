-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 09 mai 2023 à 07:39
-- Version du serveur : 10.3.38-MariaDB-0+deb10u1
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actipress`
--

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

CREATE TABLE `droits` (
  `id_droit` int(5) NOT NULL,
  `Description` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id_droit`, `Description`) VALUES
(1, 'Utilisateur'),
(10, 'Collaborateur'),
(100, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(10) NOT NULL,
  `idEmetteur` int(10) DEFAULT NULL,
  `idDestinataire` int(10) DEFAULT NULL,
  `sujet` varchar(127) NOT NULL DEFAULT 'test',
  `contenue` varchar(10000) NOT NULL,
  `dateEnvoie` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Localisation` varchar(40) NOT NULL DEFAULT '0.000;0.000',
  `Date_suppression` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `idEmetteur`, `idDestinataire`, `sujet`, `contenue`, `dateEnvoie`, `Localisation`, `Date_suppression`) VALUES
(1, 4, 1, 'test', 'test', '2023-05-09 07:36:43', '0.000;0.000', NULL),
(2, 1, 4, '', '2', '2023-05-09 07:37:16', '0.000;0.000', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(5) NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Numero_tel_pro` char(10) DEFAULT NULL,
  `Adresse_mail_pro` varchar(135) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Droits` int(5) DEFAULT NULL,
  `Pseudo` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Mdp_clair` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Mot de passe non chiffré'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `Nom`, `Prenom`, `Numero_tel_pro`, `Adresse_mail_pro`, `Droits`, `Pseudo`, `Mdp_clair`) VALUES
(1, 'Smaniotto', 'Logan', '123456789', 'loganpro@gmail.com', 100, 'mitsunari', 'test'),
(2, 'Lorenzati', 'Luca', '5233058520', 'lucapro@gmail.com', 100, 'Nemeiz', 'An@nke241)'),
(3, 'Nichanian', 'Louis', '0649232126', 'louisnichanian@actipress.com', 100, 'l.nichanian', 'Pixou_du_82'),
(4, 'test', 'test', '0123456789', 'test@test.com', 100, 'test', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `droits`
--
ALTER TABLE `droits`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `idEmetteur` (`idEmetteur`),
  ADD KEY `idDestinataire` (`idDestinataire`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `Fk_droits` (`Droits`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`idEmetteur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`idDestinataire`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `Fk_droits` FOREIGN KEY (`Droits`) REFERENCES `droits` (`id_droit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
