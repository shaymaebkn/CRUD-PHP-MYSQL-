-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 mars 2022 à 12:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `persons`
--

CREATE TABLE `persons` (
  `id` int(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `department` varchar(200) NOT NULL,
  `salary` decimal(65,0) NOT NULL,
  `function` varchar(200) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `date`, `department`, `salary`, `function`, `picture`) VALUES
(15, 'devidd', 'drog', '2022-03-11', 'employee', '110000', 'New Yorkp', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F09%2F27%2Fhugh-hefner-1-2000.jpg'),
(16, 'devidd', 'drogo', '2022-03-11', 'employee', '110000', 'New Yorkp', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F09%2F27%2Fhugh-hefner-1-2000.jpg'),
(17, 'jwelry', 'medelton', '2022-03-01', 'president', '110000', 'RUssia', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2022%2F03%2F14%2Fduke-duchess-cambridge-9-2000.jpg'),
(18, 'Elizabeth', 'Realiste', '2013-02-10', 'Queen', '111100000', 'UK', 'https://media1.popsugar-assets.com/files/thumbor/VwVlCyfWlBHjESCSa_Vy6kBUY6A/0x78:2306x2384/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2019/06/19/950/n/1922153/1e5067d35d0aadb3e2ecf9.02908622_/i/Best-Celebrity-Makeup-Artists.jpg'),
(19, 'charlene', 'Realiste', '2022-03-02', 'princess', '10309', 'UK', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2022%2F03%2F11%2FImelda-Staunton-The-Crown.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
