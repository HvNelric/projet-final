-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 21 mai 2018 à 03:02
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hex_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `name`) VALUES
(1, 'Balade foret'),
(5, 'Kamasutra'),
(4, 'Paintball'),
(3, 'Ski nautique'),
(2, 'Sport Extreme');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `region`) VALUES
(2, 'Aquitaine'),
(1, 'Champagne Ardenne'),
(3, 'PACA');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `user_reservation_id` int(11) DEFAULT NULL,
  `sejour_id` int(11) DEFAULT NULL,
  `reservation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

CREATE TABLE `sejour` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_depart` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hebergement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transport` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `activites_sejour_id` int(11) NOT NULL,
  `region_sejour_id` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sejour`
--

INSERT INTO `sejour` (`id`, `prix`, `date_depart`, `description`, `hebergement`, `transport`, `duree`, `activites_sejour_id`, `region_sejour_id`, `ville`, `ville_img`) VALUES
(1, 251, '2018-05-30 11:14:00', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.', 'Chateau-fort', 'Drone', 5, 2, 3, 'Marseille', 'DSC0105-min.jpg'),
(2, 364, '2018-06-20 16:26:00', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard.', 'Sous le pont', 'Skateboard', 8, 1, 2, 'La Blague', 'DSC0266-min.jpg'),
(3, 567, '2018-05-29 12:21:00', 'L\'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).', 'Chalet', 'Sous-marin', 45, 3, 1, 'Troyes', 'DSC0271-min.jpg'),
(4, 123, '2018-05-25 16:16:00', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. ', 'Hotel miteux', 'Car', 6, 1, 3, 'Aubagne', 'DSC0285-min.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `date_dispo` date NOT NULL,
  `date_fin` date NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profil_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `sexe`, `prenom`, `nom`, `age`, `date_dispo`, `date_fin`, `role`, `profil_img`) VALUES
(17, 'azer@gmail.com', '$2y$13$VFLpawv/VQlRwvbYb/ZnJ.vWX8prCL/6hjs5RGOa4YAwjMDX7Tduu', 'femme', 'Normal', 'Low', 18, '2018-08-20', '2019-02-10', 'ROLE_USER', '5b0175daf362e.jpeg'),
(18, 'hvn@gmail.com', '$2y$13$foJdq4xr9QGH5V1gkf5K3ONx9zhRZGGU3..X5/TIsBh64hYln1miW', 'homme', 'Hoan Vu', 'Ngo', 45, '2018-05-19', '2018-08-15', 'ROLE_ADMIN', '5b01e0f17cee2.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `user_activites`
--

CREATE TABLE `user_activites` (
  `activites_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_activites`
--

INSERT INTO `user_activites` (`activites_id`, `user_id`) VALUES
(3, 17),
(1, 18),
(4, 18),
(5, 18);

-- --------------------------------------------------------

--
-- Structure de la table `user_region`
--

CREATE TABLE `user_region` (
  `region_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_region`
--

INSERT INTO `user_region` (`region_id`, `user_id`) VALUES
(2, 17),
(1, 18);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_766B5EB55E237E06` (`name`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F62F176F62F176` (`region`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C84955D3B748BE` (`user_reservation_id`),
  ADD KEY `IDX_42C8495584CF0CF` (`sejour_id`);

--
-- Index pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_96F5202895A6D2B7` (`activites_sejour_id`),
  ADD KEY `IDX_96F520285B8CA4FB` (`region_sejour_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `user_activites`
--
ALTER TABLE `user_activites`
  ADD PRIMARY KEY (`user_id`,`activites_id`),
  ADD KEY `IDX_768BD3515B8C31B7` (`activites_id`),
  ADD KEY `IDX_768BD351A76ED395` (`user_id`);

--
-- Index pour la table `user_region`
--
ALTER TABLE `user_region`
  ADD PRIMARY KEY (`user_id`,`region_id`),
  ADD KEY `IDX_6A30EA4B98260155` (`region_id`),
  ADD KEY `IDX_6A30EA4BA76ED395` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sejour`
--
ALTER TABLE `sejour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495584CF0CF` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`),
  ADD CONSTRAINT `FK_42C84955D3B748BE` FOREIGN KEY (`user_reservation_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `FK_96F520285B8CA4FB` FOREIGN KEY (`region_sejour_id`) REFERENCES `region` (`id`),
  ADD CONSTRAINT `FK_96F5202895A6D2B7` FOREIGN KEY (`activites_sejour_id`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `user_activites`
--
ALTER TABLE `user_activites`
  ADD CONSTRAINT `FK_768BD3515B8C31B7` FOREIGN KEY (`activites_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_768BD351A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_region`
--
ALTER TABLE `user_region`
  ADD CONSTRAINT `FK_6A30EA4B98260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6A30EA4BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
