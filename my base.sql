-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 avr. 2025 à 20:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emploi_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(5) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `email`, `passwd`) VALUES
(12, 'jj', 'igg', 'name@gmail.com', '$2y$10$79yaMqHLZmLQm.weL9bFS.aogzKV83U8NaMCSoidKC6iLXlqot/sm'),
(13, 'BANDEIRA', 'mm', 'name@gmail.com', '$2y$10$6pK0KIdDz9Ghg0sq6qvHwOFbLo.2O2hHHgQb1BrgDRTpu/gRq.23i'),
(14, 'BANDEIRA', 'Abrielle', 'name@gmail.com', '$2y$10$wuhGEDToHMy3O54gxXmBMeQlJxOx.r.6wUKwG0EV6xa5Vn7SXKhkW'),
(15, 'BANDEIRA', 'Abrielle', 'name@gmail.com', '$2y$10$l8zUQTCQTd.OqUJRrLfFauTpYKws3Oqiw6UkmZmavs07AwZEFQQ3W'),
(16, 'BANDEIRA', 'Abrielle', 'name@gmail.com', '$2y$10$s.wfq2XogLqmgccpyN3c.O8sq6spLzIZ0QJkU0qZClKKApV96NLEa'),
(17, 'BANDEIRA', 'Abrielle', 'name@gmail.com', '$2y$10$B1F9WTrDzfl837XRif5FmOauO4Alsj5n1AooNs62dOzZbYA918y6W'),
(18, 'mpo', 'Abrielle', 'name@gmail.com', '$2y$10$ACIQvzTModmgLfBRFOObCuMk1YYIBNnDeFPi38kNubeKXK5msBo2e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
