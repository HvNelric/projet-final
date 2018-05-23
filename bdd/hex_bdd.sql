-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 mai 2018 à 14:44
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
(3, 'Atypique'),
(1, 'Balade romantique'),
(7, 'Bord de Mer'),
(4, 'Escalade'),
(8, 'Montagne'),
(2, 'Patrimoine'),
(6, 'Randonée'),
(5, 'Site Naturel');

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
(5, 'Auvergne-Rhône-Alpes'),
(6, 'Bretagne'),
(9, 'Centre-Val de Loire'),
(1, 'Champagne Ardenne'),
(11, 'Corse'),
(8, 'Grand-Est'),
(4, 'Normandie'),
(7, 'Occitanie'),
(3, 'PACA'),
(10, 'Pays de la Loire');

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
(1, 251, '2018-05-30 11:14:00', 'Dans le fuselage de cet avion, un prototype de Skylander, l\'intérieur de la cabine a été entièrement repensé pour accueillir un couple avec (ou sans) enfant. Un lit double et un espace cuisine, une douche et des toilettes. Dans le cockpit un lit junior jouxte le siège du pilote et le manche, autant dire que c\'est un espace de jeu rêvé. ', 'Camping du haut village', 'Voiture', 5, 3, 10, 'Saint-Michel-Chef-Chef', 'DSC0105-min.jpg'),
(2, 250, '2018-06-20 16:26:00', 'Allier découverte et gastronomie, voilà ce que Les Bulles et Une Nuits vous offrent de découvrir dans les Vosges. \r\n\r\nDans un pré, à portée de couverts de l\'Auberge du Val Joli, une bulle de 4m2 vous offre tout le confort d\'une chambre, un lit douillet, du linge de bain et des rangements ; une seconde bulle attenante sert de cabinet de toilette de campagne (toilettes sèches et point d\'eau). \r\nA elles deux, elles vous procureront cette douce sensation de dormir à la belle étoile au pied de la forêt vosgienne, mais bien au chaud !\r\n', 'Bulles et une nuit le valtin', 'Voiture', 3, 3, 8, 'Le Valtin', 'DSC0266-min.jpg'),
(3, 350, '2018-05-29 12:21:00', 'Au milieu des thuyas géants, elle semble perchée drôlement haut cette cabane... Avant de la rejoindre, une petite mise en jambe s\'avère nécessaire. Un moniteur vous accompagne sur un parcours d\'entraînement pour acquérir la pratique et vous livre les explications nécessaires avant de vous lancer. Le parcours ? Une échelle de câbles et barreaux en bois, des ponts de singe, une échelle de papou, des tyroliennes horizontales, voire un filet. ', 'Cabanes Domaines des Ormes', 'Voiture', 3, 3, 6, 'Dol de Bretagne', 'DSC0271-min.jpg'),
(4, 150, '2018-05-25 16:16:00', 'La dune du Pilat1, située en bordure du massif forestier des Landes de Gascogne sur la côte d\'Argent à l\'entrée du bassin d\'Arcachon, en France, est la plus haute dune d’Europe\r\nSituée à l\'entrée sud du bassin d\'Arcachon, elle s\'étend sur 616 m d\'ouest en est et sur 2,9 km du nord au sud et contient environ 550 millions de mètres cubes de sable, dans la localité de Pyla-sur-Mer qui dépend administrativement de la commune de La Teste-de-Buch, à proximité d\'Arcachon, au cœur des Landes de Gascogne.', 'Hotel de la Corniche', 'Voiture', 6, 3, 2, 'Pyla-sur-mer', 'DSC0285-min.jpg'),
(5, 450, '2018-05-31 00:00:00', 'Le Mont Blanc est un lieu privilégié pour les randonneurs et les passionnés de découverte de la nature venus de plusieurs pays du monde notamment de France. Situé autour de la ville de Chamonix-Mont Blanc dans le département de la Haute Savoie en région Auvergne-Rhône-Alpes. Le Mont Blanc est le point culminant de la chaine de montagnes des Alpes. Son altitude est d’environ 4809.', 'Refuge du Couvercle', 'bus', 4, 6, 5, 'Chamonix Mont-Blanc', ''),
(6, 350, '2018-05-31 00:00:00', 'Le circuit de Girancourt est une randonnée à Epinal dans les Vosges en Alsace dans la région du Grand Est. Elle vous permettra  d\'apprécier au mieux l’environnement vosgien, sa ceinture verte  mais aussi l’hospitalité de ses habitants notamment ceux d’Epinal. Cette ville d’Epinal se trouve au cœur de l’Europe occidentale et à proximité aussi bien de la Belgique, du Luxembourg, de l’Allemagne et de la Suisse.  La randonnée est davantage appréciée à sa juste valeur lorsqu’elle est effectuée avec deux personnes qui partagent le même amour pour cet exercice physique et de resistance dans ce paysage unique des Vosges', 'Gîte du Ruisseau', 'bus', 3, 4, 8, 'Epinal', ''),
(7, 250, '2018-06-06 00:00:00', 'Le sentier Martel désormais appelé le sentier Blanc-Martel est par excellence un sentier de randonnée emblématique des gorges du Verdon. Les Gorges du Verdon est un canyon crusé par la rivière Verdon depuis plus d\'un millénaire. Il est mondialement connu et appréciè en duo ou en groupe de personnes. Par ailleurs, , il fait partie des sentiers les plus fréquentés de la région Provence Alpes-Côte-d\'Azur. On estime que plus de 30 000 randonneurs par an effectuent le sentier dans sa totalité. Ce sentier attire aussi plus de 70 000 visiteurs par an sur le secteur du Couloir Samson.  Le départ de cette  randonnée se fait essentiellement en partant à gauche du chalet de la Maline et en empruntant le GR4. Le début n’est pas assez difficile. Cepoendant, pour commencer, il faudra rejoindre le niveau du lit de la rivière du Verdon par une descente plus ou moins régulière de 300m environ. ', 'Gîte-Studio Vacances Gorges-Verdon', 'bus', 4, 6, 8, 'Gorges du Verdon', ''),
(8, 450, '2018-06-01 00:00:00', 'La randonnée à Saint Malo dans le département des Illes et Vailaine est un moment assez agréable lorsqu\'elle se fait en groupe en particulier à deux. Vous savez tous le charme de la Bretagne notamment de la belle cité de Saint cité de Saint Malo. L\'hospitalité des Bretons est reconnu de tous, surtout lorsqu\'il s\'agit de recevoir des voyageurs passionnés de la randonnée et de la mer.', 'l\'Abri Côtier', 'bus', 4, 6, 4, 'Saint-Malo', ''),
(9, 350, '2018-06-07 00:00:00', 'La Promenade des Anglais autrefois appelé Chemin des Anglais dans la  belle et luxuriante cité balnéaire de Nice date de 1820. Elle est en bordure de la façade maritime et considerée comme l\'une des plus belles avenues au monde. La ville de Nice dans le département des Alpes-Maritimes est un haut lieu de la jet-set. Ses eaux turquoises sont une merveille du monde et la beauté de cette ville ne laisse personne indifférent. Le charme de la Promenade des Anglais dans cette cité paradisiaque offre le bonheur sans fin', 'La Residence du Copacabana', 'Train', 4, 1, 3, 'Nice', ''),
(10, 320, '2018-06-14 00:00:00', 'Le vieux port de Menton est situé sur la Côte d\'Azur de la ville historique du même nom. La découverte du vieux port peut se faire à n\'importe quelie période de l\'année dans cette ville ensoleillée 316 jours par an.  Vous ne regretterez pas le choix du voyage dans la ville du citron.', 'Gîte La Tramontane à Mento', 'Train', 5, 1, 3, 'Menton', ''),
(11, 300, '2018-05-25 00:00:00', 'Les falaises d\'Etretat sont une merveille du monde. Cette formation rocheuse est située dans  ce qui était autrefois un village de pécheurs du même nom. Etretat est devenue une station balnéaire d\'importance en France. Plusieurs personnalités ont toujours apprécié son mystérieux paysage. Parmi eux, les écrivains Guy de Maupassant, Gustave Flaubert, Maurice Leblanc, les peintres Gustave Courbet , eugène Boudin et Claude Boudin', 'La Tramontane', 'train', 2, 1, 4, 'Etretat', ''),
(12, 250, '2018-06-13 00:00:00', 'La découverte des formations géologiques exceptionnelles est toujours une source d\'enrichissement. C\'est le cas pour le Mont Aiguille à Chichilianne, un village de la Trièves qui se trouve à 60km au sud de Grenoble en Isère dans la région de Auvergne-Rhône-Alpes. L\'ascension de ce Mont ne date pas d\'hier. Effet, le seigneur lorrain Antoine de Ville avait réussi l\'exploit de son ascension le 26 juin 1492. Le Mont Aiguille, sommet majestueux et berceaui de l\'alpinisme est considerée comme l\'une des sept merveilles du Dauphiné.', 'Au Gai Soleil du Mont Aiguille', 'Voiture', 3, 3, 5, 'Chichilianne', ''),
(13, 300, '2018-06-07 00:00:00', 'Le Via ferrata Vertige  de l\'Adour est située à Bagnères-de-Bigorre au coeur des Pyrénées non loin du Pic de Midi. Les passionnés de sport trouveront ici un site epoustouflant et unique pour des sensations fortes.  Cette activité sportive humaine et humanisante  vous permettra d\'effectuer une expérience hors du commun dans un environnement  façonné par le mystère de cette formation géologique qui est un canyon sauvage creusé par le fleuve Adour.', 'Hôtel Saint Vincent', 'Voiture', 4, 8, 7, 'Bagnères de Bigorre', ''),
(14, 300, '2018-05-25 00:00:00', 'La cité balnéaire de Biarritz est une merveilleuse ville de la côte basque.  Ce havre de paix situé  dans le sud-ouest de la France est l\'une des importantes destibations touristiques en France et sur le Vieux continent. Biarritz est populaire et attire les têtes couronnées de toute l\'Europe. En effet,  c\'est un lieu de villégiature depuis  les années 1800. La ville est aussi prisé des surfeurs.Ses plages font rêver et son rocher de la Vierge, lemblème de Biarritz offre une vue panoramique sur le Golfe de Gascogne.', 'Le Superhost Sylvie', 'Train', 4, 7, 2, 'Biarritz', ''),
(15, 250, '2018-06-21 00:00:00', 'Le Mont Saint-Michel est un site touristique emblématique qu\'on ne présente plus.                     Ce  patrimoine mondial de l\'Unesco est situé entre Granville et Saint-Malo dans le département de la Manche en Normandie.Tellement son histoire fascine. C\'est pourquoi le Mont-Saint-Michel demeure l\'un des sites touristiques les plus visités de France  avec environ 2,5 millions de touristes par an.  Son nom est tiré de l\'îlot rocheux  à l\'honneur de saint-Michel. L\'Abbaye du Mont Saint-Michel offre aux visiteurs le sentiment d\'une assurance de proximité avec des forces spirituelles relevant de la divinité suiprême. Le Mont-Saint-Michel fascine quiconque effectue les 150 m d\'altitude jusqu\'à la statue de Saint-Michel.', 'Hotel Gabriel', 'train', 3, 2, 4, 'Le Mont-Saint-Michel', ''),
(16, 250, '2018-06-14 00:00:00', 'Surnommé la « Venise Verte », le Marais Poitevin est encore assez peu couru parmi les plus beaux sites naturels de France, mais non moins magnifique, situé à une heure de la Rochelle. Le meilleur moyen de se familiariser avec le lieu est de louer une barque, ou mieux, de partir pour une balade accompagnée d’un guide passionné qui vous en livrera tous les secrets', 'LE LUMA BLEU', 'Voiture', 5, 5, 2, 'Arcais', ''),
(17, 250, '2018-06-21 00:00:00', 'Classée parmi les 10 régions du monde à visiter en 2016, l’Auvergne offre une variété étourdissante de paysages et d’espaces naturels s’étendant à l’infini. Entre causses et volcans, tourbières, plaines et plateaux, le Parc Naturel Régional des Volcans d’Auvergne regorge de trésors pour les visiteurs avides de verdure', 'Hotel de la patrie', 'Voiture', 4, 5, 5, 'Thiézac', ''),
(18, 250, '2018-06-15 00:00:00', 'Les cascades de Tufs figurent parmi les plus belles en Europe. L’endroit offre une balade des plus agréables en famille, bien qu’il faille faire attention au chemin, parfois glissant. Des grandes aires aménagées permettent de pique-niquer à proximité, avant de barboter dans les piscines naturelles, au pied des cascades. ', 'Hôtel des Messageries', 'Voiture', 4, 5, 2, 'Arbois', ''),
(19, 250, '2018-06-27 00:00:00', 'Le Plateau de Valensole : Amandes, olives, miel et blé complètent ce très joli panier garni provençal le reste de l’année. Pour les plus belles photos, rendez-vous y au lever ou au coucher du soleil, mais attention, il est interdit de ramasser la lavande !', 'Château du grand jardin', 'Voiture', 5, 5, 5, 'Corbières', ''),
(20, 350, '2018-06-21 00:00:00', 'Sur cette falaise abrupte qui domine la forêt de l\'Ospédale, trois nids aussi blancs qu\'époustouflants vous promettent une nuit unique au sommet. Carine et Jean-Michel ont ouvert à l\'été 2016 un Village Cocoon dans ce lieu qu\'ils connaissent et aiment tant. Un village composé de trois sphères suspendues à la roche (sécurité renforcée même avec des vents à 160 km/h) et auxquelles on accède par un petit sentier qui longe la falaise avant d’emprunter des passerelles de bois.', 'Glamping Corsica', 'Avion', 4, 3, 11, 'Porto-Vecchio', '');

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
(18, 'hv@gmail.com', '$2y$13$foJdq4xr9QGH5V1gkf5K3ONx9zhRZGGU3..X5/TIsBh64hYln1miW', 'homme', 'Hoan Vu', 'Ngo', 75, '2018-05-19', '2018-05-30', 'ROLE_ADMIN', '5b01e0f17cee2.jpeg');

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
(2, 18),
(3, 18),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sejour`
--
ALTER TABLE `sejour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
