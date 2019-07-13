-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 juil. 2019 à 15:56
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `personnalkey` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `personnalkey`) VALUES
(1, 'Hugues35133', '$2y$10$08kT4uCJza2oW3IDGTNoxOWpaqEXKJcbhls/cuWjJgdcA/.adW1jC', 'dc11081a-86fb-11e9-bc42-526af7764f64');

-- --------------------------------------------------------

--
-- Structure de la table `announce`
--

DROP TABLE IF EXISTS `announce`;
CREATE TABLE IF NOT EXISTS `announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(65) NOT NULL,
  `title` varchar(65) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(65) NOT NULL,
  `situation` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `festivals`
--

DROP TABLE IF EXISTS `festivals`;
CREATE TABLE IF NOT EXISTS `festivals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date_beginning` date NOT NULL,
  `date_end` date NOT NULL,
  `town` varchar(255) NOT NULL,
  `department` int(2) NOT NULL,
  `site_link` varchar(255) NOT NULL,
  `lat` decimal(65,20) NOT NULL,
  `lon` decimal(65,20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `festivals`
--

INSERT INTO `festivals` (`id`, `name`, `date_beginning`, `date_end`, `town`, `department`, `site_link`, `lat`, `lon`) VALUES
(5, 'Festival du Schmoul', '2025-01-19', '2026-01-19', 'Bain de Bretagne', 35, 'http://schmoulbrouk.com/', '0.00000000000000000000', '0.00000000000000000000'),
(7, 'Jardins d\'hiver brrr', '2001-02-19', '2003-02-19', 'Rennes', 35, 'https://www.leschampslibres.fr/index.php?id=525', '0.00000000000000000000', '0.00000000000000000000'),
(8, 'Astropolis\' l\'hiver', '2006-02-19', '2010-02-19', 'Brest', 29, 'http://astropolis.org/hiver2019/', '0.00000000000000000000', '0.00000000000000000000'),
(9, 'Festival Roue Waroch', '2015-02-19', '2017-02-19', 'Plescop', 56, 'https://www.roue-waroch.fr/', '0.00000000000000000000', '0.00000000000000000000'),
(10, 'Les Emancipées', '2019-03-19', '2024-03-19', 'Vannes', 56, 'https://www.scenesdugolfe.com/les-emancipees-tab-291.html', '0.00000000000000000000', '0.00000000000000000000'),
(11, 'Week end du rire', '2022-03-19', '2024-03-18', 'Liffré', 35, 'https://www.infoconcert.com/festival/week-end-du-rire-a-liffre-12598/concerts.html', '0.00000000000000000000', '0.00000000000000000000'),
(12, 'Bouge ton cube', '2022-03-19', '2023-03-19', 'Lauzach', 56, 'https://56.agendaculturel.fr/festival/festival-bouge-ton-cube-4.html', '0.00000000000000000000', '0.00000000000000000000'),
(13, 'Mythos', '2029-03-19', '2007-04-19', 'Rennes', 35, 'https://www.festival-mythos.com/', '0.00000000000000000000', '0.00000000000000000000'),
(14, 'Panoramas', '2012-04-19', '2014-04-19', 'Morlaix', 29, 'https://www.festivalpanoramas.com/', '0.00000000000000000000', '0.00000000000000000000'),
(16, 'Seiwa Festival', '2019-04-19', '2021-04-19', 'Plobannalec Lesconil ', 29, 'https://festival-insolent.com/', '0.00000000000000000000', '0.00000000000000000000'),
(17, 'Festival insolent', '2020-04-19', '2020-04-19', 'Lorient', 56, 'https://festival-insolent.com/', '0.00000000000000000000', '0.00000000000000000000'),
(18, 'Hellfest warm up tour', '2021-04-19', '2027-04-19', 'Rennes', 35, 'https://www.hellfest.fr/warmup/', '0.00000000000000000000', '0.00000000000000000000'),
(19, 'Comedy festival', '2025-04-19', '2029-04-19', 'Dinard', 35, 'http://www.lespetitesfolies-iroise.com/', '0.00000000000000000000', '0.00000000000000000000'),
(20, 'Les Petites folies', '2030-05-19', '2001-06-19', 'Lampaul Plouarzel', 29, 'http://www.lespetitesfolies-iroise.com/', '0.00000000000000000000', '0.00000000000000000000'),
(21, 'Festival Art Rock', '2007-06-19', '2009-06-19', 'Saint-Brieuc', 22, 'https://www.artrock.org/', '0.00000000000000000000', '0.00000000000000000000'),
(22, 'Les Pieds dans la vase', '2008-06-19', '2009-06-19', 'Kervignac', 56, 'https://www.lespiedsdanslavase.fr', '0.00000000000000000000', '0.00000000000000000000'),
(23, 'God save the kouign', '2015-06-19', '2015-06-19', 'Penmarch', 29, 'https://mobile.facebook.com/God-Save-the-Kouign-386128108483316/', '0.00000000000000000000', '0.00000000000000000000'),
(24, 'Bobital, l’armor à sons', '2005-07-19', '2006-07-19', 'Bobital', 22, 'https://www.bobital-festival.fr/', '0.00000000000000000000', '0.00000000000000000000'),
(25, 'Fête du bruit', '2006-07-19', '2007-07-19', 'Saint-Nolff', 56, 'https://stnolff.festival-fetedubruit.com/', '0.00000000000000000000', '0.00000000000000000000'),
(26, 'Les Vielles charrues', '2018-07-19', '2021-07-19', ' Carhaix Plouguer', 29, '', '48.27649970000000000000', '-3.57114770000000000000'),
(27, 'Festival du chant de marin', '2002-08-19', '2004-08-19', 'Paimpol', 22, '', '48.77948180000000000000', '-3.04840220000000000000'),
(28, 'Festival du bout du monde !', '2002-08-19', '2004-08-19', 'Crozon', 29, '', '48.24639890000000000000', '-4.48944630000000000000'),
(29, 'Fête du bruit', '2009-08-19', '2011-08-19', 'Landerneau', 29, '', '48.45090000000000000000', '-4.24931000000003700000'),
(30, 'Motocultor festival', '2015-08-19', '2018-08-19', 'Saint-Nolff', 56, '', '47.70329180000000000000', '-2.65237930000000000000'),
(38, 'Essai 2', '2019-07-01', '2019-07-02', 'Fougères', 35, 'http://www.huguesfleury.com', '0.00000000000000000000', '0.00000000000000000000'),
(33, 'Mov\'up festival', '2019-08-31', '2019-08-31', 'Argentré-du-plessis', 35, 'https://assomovup.fr', '48.05740220000000000000', '-1.15250930000000000000');

-- --------------------------------------------------------

--
-- Structure de la table `feuille1`
--

DROP TABLE IF EXISTS `feuille1`;
CREATE TABLE IF NOT EXISTS `feuille1` (
  `id` int(11) DEFAULT NULL,
  `Name` varchar(26) DEFAULT NULL,
  `Date_beginning` varchar(8) DEFAULT NULL,
  `Date_end` varchar(8) DEFAULT NULL,
  `Town` varchar(21) DEFAULT NULL,
  `Department` int(2) DEFAULT NULL,
  `Site_link` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `feuille1`
--

INSERT INTO `feuille1` (`id`, `Name`, `Date_beginning`, `Date_end`, `Town`, `Department`, `Site_link`) VALUES
(NULL, 'The Sham rock festival', '12/01/19', '12/01/19', 'Saint-Brieuc', 22, NULL),
(NULL, 'Festival du Schmoul', '25/01/19', '26/01/19', 'Bain de Bretagne', 35, ''),
(NULL, 'Les Nuits de l\'alligator', '31/01/19', '23/02/19', 'Vannes', 56, ''),
(NULL, 'Jardins d\'hiver', '01/02/19', '03/02/19', 'Rennes', 35, ''),
(NULL, 'Astropolis\' l\'hiver', '06/02/19', '10/02/19', 'Brest', 29, ''),
(NULL, 'Festival Roue Waroch', '15/02/19', '17/02/19', 'Plescop', 56, NULL),
(NULL, 'Les Emancipées', '19/03/19', '24/03/19', 'Vannes', 56, NULL),
(NULL, 'Week end du rire', '22/03/19', '24/03/18', 'Liffré', 35, NULL),
(NULL, 'Bouge ton cube', '22/03/19', '23/03/19', 'Lauzach', 56, NULL),
(NULL, 'Mythos', '29/03/19', '07/04/19', 'Rennes', 35, NULL),
(NULL, 'Panoramas', '12/04/19', '14/04/19', 'Morlaix', 29, NULL),
(NULL, 'Vinicircus', '12/04/19', '14/04/19', 'Guipel', 35, NULL),
(NULL, 'Seiwa Festival', '19/04/19', '21/04/19', 'Plobannalec Lesconil ', 29, NULL),
(NULL, 'Festival insolent', '20/04/19', '20/04/19', 'Lorient', 56, NULL),
(NULL, 'Hellfest warm up tour', '21/04/19', '27/04/19', 'Rennes', 35, NULL),
(NULL, 'Comedy festival', '25/04/19', '29/04/19', 'Dinard', 35, NULL),
(NULL, 'Les Petites folies', '30/05/19', '01/06/19', 'Lampaul Plouarzel', 29, NULL),
(NULL, 'Festival Art Rock', '07/06/19', '09/06/19', 'Saint-Brieuc', 22, NULL),
(NULL, 'Les Pieds dans la vase', '08/06/19', '09/06/19', 'Kervignac', 56, NULL),
(NULL, 'God save the kouign', '15/06/19', '15/06/19', 'Penmarch', 29, NULL),
(NULL, 'Bobital, l’armor à sons', '05/07/19', '06/07/19', 'Bobital', 22, NULL),
(NULL, 'Fête du bruit', '06/07/19', '07/07/19', 'Saint-Nolff', 56, NULL),
(NULL, 'Les Vielles charrues', '18/07/19', '21/07/19', ' Carhaix Plouguer', 29, NULL),
(NULL, 'Festival du chant de marin', '02/08/19', '04/08/19', 'Paimpol', 22, NULL),
(NULL, 'Festival du bout du monde', '02/08/19', '04/08/19', 'Crozon', 29, NULL),
(NULL, 'Fête du bruit', '09/08/19', '11/08/19', 'Landerneau', 29, NULL),
(NULL, 'Motocultor festival', '15/08/19', '18/08/19', 'Saint-Nolff', 56, NULL),
(NULL, 'I’m from Rennes', '13/09/19', '22/09/19', 'Rennes', 35, NULL),
(NULL, 'Baisers volés', '27/09/19', '29/09/19', 'Saint-Malo', 35, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
CREATE TABLE IF NOT EXISTS `instrument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instrument` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`id`, `instrument`) VALUES
(1, 'Accordéoniste'),
(2, 'Banjoïste'),
(3, 'Bassiste'),
(4, 'Batteur'),
(5, 'Chanteur(euse)'),
(6, 'Chef d\'orchestre'),
(7, 'Chef de chœur'),
(8, 'Chorale'),
(9, 'Clarinettiste'),
(10, 'Claviériste'),
(11, 'Contrebassiste'),
(12, 'DJ'),
(13, 'Flutiste'),
(14, 'Guitariste'),
(15, 'Harmoniciste'),
(16, 'Harpiste'),
(17, 'Luthiste'),
(18, 'Mandoliniste'),
(19, 'Percussionniste'),
(20, 'Pianiste'),
(21, 'Saxophoniste'),
(22, 'Sonneur de cornemuse'),
(23, 'Tromboniste'),
(24, 'Trompettiste'),
(25, 'Ukuléliste'),
(26, 'Violoncelliste'),
(27, 'Violoniste'),
(28, 'Non-défini');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `town` varchar(30) DEFAULT NULL,
  `departnum` int(2) DEFAULT NULL,
  `departname` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `town`, `departnum`, `departname`) VALUES
(1, 'Antrain (35)', 35, 'Ille et Vilaine'),
(2, 'Auray (56)', 56, 'Morbihan'),
(3, 'Bain-de-Bretagne (35)', 35, 'Ille et Vilaine'),
(4, 'Bégard (22)', 22, 'Côtes d’Armor'),
(5, 'Betton (35)', 35, 'Ille et Vilaine'),
(6, 'Brest (29)', 29, 'Finistère'),
(7, 'Briec (29)', 29, 'Finistère'),
(8, 'Broons (22)', 22, 'Côtes d’Armor'),
(9, 'Bruz (35)', 35, 'Ille et Vilaine'),
(10, 'Callac (22)', 22, 'Côtes d’Armor'),
(11, 'Carhaix-Plouguer (29)', 29, 'Finistère'),
(12, 'Châteaugiron (35)', 35, 'Ille et Vilaine'),
(13, 'Combourg (35)', 35, 'Ille et Vilaine'),
(14, 'Concarneau (29)', 29, 'Finistère'),
(15, 'Crozon (29)', 29, 'Finistère'),
(16, 'Dinan (22)', 22, 'Côtes d’Armor'),
(17, 'Dol-de-Bretagne (35)', 35, 'Ille et Vilaine'),
(18, 'Douarnenez (29)', 29, 'Finistère'),
(19, 'Fouesnant (29)', 29, 'Finistère'),
(20, 'Fougères (35)', 35, 'Ille et Vilaine'),
(21, 'Gourin (56)', 56, 'Morbihan'),
(22, 'Grand-Champ (56)', 56, 'Morbihan'),
(23, 'Guer (56)', 56, 'Morbihan'),
(24, 'Guichen (35)', 35, 'Ille et Vilaine'),
(25, 'Guidel (56)', 56, 'Morbihan'),
(26, 'Guingamp (22)', 22, 'Côtes d’Armor'),
(27, 'Guipavas (29)', 29, 'Finistère'),
(28, 'Hennebont (56)', 56, 'Morbihan'),
(29, 'Janzé (35)', 35, 'Ille et Vilaine'),
(30, 'La Guerche-de-Bretagne (35)', 35, 'Ille et Vilaine'),
(31, 'Lamballe (22)', 22, 'Côtes d’Armor'),
(32, 'Landerneau (29)', 29, 'Finistère'),
(33, 'Landivisiau (29)', 29, 'Finistère'),
(34, 'Lanester (56)', 56, 'Morbihan'),
(35, 'Lannion (22)', 22, 'Côtes d’Armor'),
(36, 'Lanvallay (22)', 22, 'Côtes d’Armor'),
(37, 'Le Rheu (35)', 35, 'Ille et Vilaine'),
(38, 'Lesneven (29)', 29, 'Finistère'),
(39, 'Liffré (35)', 35, 'Ille et Vilaine'),
(40, 'Lorient (56)', 56, 'Morbihan'),
(41, 'Loudéac (22)', 22, 'Côtes d’Armor'),
(42, 'Melesse (35)', 35, 'Ille et Vilaine'),
(43, 'Moëlan-sur-Mer (29)', 29, 'Finistère'),
(44, 'Montauban-de-Bretagne (35)', 35, 'Ille et Vilaine'),
(45, 'Montfort-sur-Meu (35)', 35, 'Ille et Vilaine'),
(46, 'Moréac (56)', 56, 'Morbihan'),
(47, 'Morlaix (29)', 29, 'Finistère'),
(48, 'Mûr-de-Bretagne (22)', 22, 'Côtes d’Armor'),
(49, 'Muzillac (56)', 56, 'Morbihan'),
(50, 'Paimpol (22)', 22, 'Côtes d’Armor'),
(51, 'Perros-Guirec (22)', 22, 'Côtes d’Armor'),
(52, 'Plabennec (29)', 29, 'Finistère'),
(53, 'Plaintel (22)', 22, 'Côtes d’Armor'),
(54, 'Plancoët (22)', 22, 'Côtes d’Armor'),
(55, 'Plélo (22)', 22, 'Côtes d’Armor'),
(56, 'Plénée-Jugon (22)', 22, 'Côtes d’Armor'),
(57, 'Pléneuf-Val-André (22)', 22, 'Côtes d’Armor'),
(58, 'Plérin (22)', 22, 'Côtes d’Armor'),
(59, 'Pleslin-Trigavou (22)', 22, 'Côtes d’Armor'),
(60, 'Plestin-les-Grèves (22)', 22, 'Côtes d’Armor'),
(61, 'Ploemeur (56)', 56, 'Morbihan'),
(62, 'Ploërmel (56)', 56, 'Morbihan'),
(63, 'Plonéour-Lanvern (29)', 29, 'Finistère'),
(64, 'Ploufragan (22)', 22, 'Côtes d’Armor'),
(65, 'Plouha (22)', 22, 'Côtes d’Armor'),
(66, 'Plouigneau (29)', 29, 'Finistère'),
(67, 'Pluvigner (56)', 56, 'Morbihan'),
(68, 'Pont-de-Buis-lès-Quimerch (29)', 29, 'Finistère'),
(69, 'Pont-l\'Abbé (29)', 29, 'Finistère'),
(70, 'Pontivy (56)', 56, 'Morbihan'),
(71, 'Questembert (56)', 56, 'Morbihan'),
(72, 'Quiberon (56)', 56, 'Morbihan'),
(73, 'Quimper (29)', 29, 'Finistère'),
(74, 'Quimperlé (29)', 29, 'Finistère'),
(75, 'Redon (35)', 35, 'Ille et Vilaine'),
(76, 'Rennes (35)', 35, 'Ille et Vilaine'),
(77, 'Rostrenen (22)', 22, 'Côtes d’Armor'),
(78, 'Saint-Brieuc (22)', 22, 'Côtes d’Armor'),
(79, 'Saint-Malo (35)', 35, 'Ille et Vilaine'),
(80, 'Saint-Pol-de-Léon (29)', 29, 'Finistère'),
(81, 'Saint-Renan (29)', 29, 'Finistère'),
(82, 'Séné (56)', 56, 'Morbihan'),
(83, 'Trégueux (22)', 22, 'Côtes d’Armor'),
(84, 'Tréguier (22)', 22, 'Côtes d’Armor'),
(85, 'Vannes (56)', 56, 'Morbihan'),
(86, 'Vitré (35)', 35, 'Ille et Vilaine');

-- --------------------------------------------------------

--
-- Structure de la table `stylezic`
--

DROP TABLE IF EXISTS `stylezic`;
CREATE TABLE IF NOT EXISTS `stylezic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stylezic`
--

INSERT INTO `stylezic` (`id`, `style`) VALUES
(1, 'Chanson française'),
(2, 'Classique'),
(3, 'Country, folk'),
(4, 'Electro, techno'),
(5, 'Gospel'),
(6, 'Jazz'),
(7, 'Latino'),
(8, 'Musique bretonne'),
(9, 'Musique du monde'),
(10, 'Pop'),
(11, 'Rap, hip-hop, slam'),
(12, 'Reggae, ska'),
(13, 'Rock, blues'),
(14, 'Soul, funk, disco'),
(15, 'Variété'),
(16, 'Hard rock, métal, punk'),
(17, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `birthyear` int(11) NOT NULL,
  `town` varchar(65) NOT NULL,
  `sex` varchar(65) NOT NULL,
  `status` varchar(65) NOT NULL,
  `situation` varchar(65) NOT NULL,
  `instrument` varchar(65) NOT NULL,
  `style` varchar(65) NOT NULL,
  `experience` int(11) NOT NULL,
  `groupname` varchar(65) NOT NULL,
  `weblink` text NOT NULL,
  `presentation` text NOT NULL,
  `title_announce` varchar(65) NOT NULL,
  `message` text NOT NULL,
  `status_announce` varchar(65) NOT NULL,
  `situation_announce` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `date`, `pseudo`, `password`, `email`, `birthyear`, `town`, `sex`, `status`, `situation`, `instrument`, `style`, `experience`, `groupname`, `weblink`, `presentation`, `title_announce`, `message`, `status_announce`, `situation_announce`) VALUES
(16, '2019-07-07 09:22:06', 'Guy', '$2y$10$aCRdrvEOlyIYGYp2VtXGJ.olLSLiSrUxOWl5t20IIfy5dxBDbhoPC', 'guylux@gmail.com', 1947, 'Concarneau (29)', 'man', 'pro', 'group', 'DJ', 'Variété', 30, 'Guylux', 'http:www.google.com', 'Je me présente, je m\'appelle Guy...', 'Cherche groupe du coin', 'Cherche à pratiquer...', 'pro', 'group'),
(4, '2019-06-09 16:10:34', 'Hugues3', '$2y$10$j8GQLKp6uH018v6heIP7mOjv1ep95X5i7pU6ONiLi.q44QUTdr/pe', 'huguesfleury35133@gmail.com', 1968, 'Antrain (35)', 'selected', 'amateur', 'group', 'Accordéoniste', 'Chanson française', 3, 'dghfdfhdg', 'http:www.google.com', 'essai modification', 'essai', 'essai', 'amateur', 'group'),
(5, '2019-06-09 16:11:51', 'Hugues3', '$2y$10$AIlb6A6xyiRZ2SZLoaRPw.sxa9e3HWiZTwMRaCU.n6hwgC5.5Ih7O', 'huguesfleury35133@gmail.com', 1968, 'Antrain (35)', '', 'pro', 'group', 'Accordéoniste', 'Chanson française', 3, 'qsdfsdfqsdfdfsqf', 'http:www.google.com', 'essai nouvelle modification', 'essai', 'essai', 'pro', 'group'),
(6, '2019-06-09 16:12:17', 'Hugues3', 'hugues3', 'huguesfleury35133@gmail.com', 1968, '8', 'woman', 'amateur', 'solo', 'Accordéoniste', '16', 3, '', '', 'essai', 'essai', 'essai', '', ''),
(7, '2019-06-09 16:13:11', 'Hugues3', 'hugues3', 'huguesfleury35133@gmail.com', 2, '4', 'woman', 'pro', 'group', '4', '15', 4, 'qdsf', '', 'essai', 'essai', 'essai', 'pro', 'group'),
(8, '2019-06-09 16:14:50', 'Hugues3', 'hugues3', 'huguesfleury35133@gmail.com', 1968, '2', 'woman', 'pro', 'group', '4', '16', 4, 'essai', '', 'essai', 'essai', 'essai', 'pro', 'group'),
(9, '2019-06-09 16:18:05', 'Hugues4', 'hugues4', 'huguesfleury35133@gmail.com', 1968, '4', 'woman', 'amateur', 'solo', 'Banjoïste', 'Hard rock, métal, punk', 5, 'essai', '', 'essai', 'essai', 'essai', 'amateur', 'solo'),
(10, '2019-06-09 16:34:58', 'Hugues5', 'hugues5', 'huguesfleury35133@gmail.com', 1968, '8', 'woman', 'pro', 'solo', 'Accordéoniste', 'Variété', 19, 'heyjoe', '', 'heyjoe', 'heyjoe', 'heyjoe', '', ''),
(11, '2019-06-09 16:42:18', 'Hugues6', 'hugues6', 'huguesfleury35133@gmail.com', 1695, 'Betton (35)', 'man', 'pro', 'solo', 'Clarinettiste', 'Rap, hip-hop, slam', 2, 'essai', '', 'essai', 'qds', 'dqsf', 'pro', 'sologroup'),
(12, '2019-06-22 15:01:30', 'Emile', '$2y$10$OFyilbjgqYxHQhZTuU2QaeWTOFjua4KIJ1uN0KLBVSbEigjjoCFG2', 'emile@emile.fr', 1968, 'Dinan (22)', 'man', 'pro', 'solo', 'Luthiste', 'Country, folk', 3, 'Emile&amp;co', 'http:www.nomdugroupe.com', 'Je me présente Emile', 'Annonce Emile', 'Annonce Emile message', 'pro', 'group'),
(13, '2019-07-04 18:03:46', 'Joseph', '$2y$10$MhyNOau2HFP9oVhnL23/fOLhkJO1MmZVfMxUbDhTyh1ziez0dbDaO', 'joseph@gmail.com', 1968, 'Fougères (35)', 'man', 'amateur', 'solo', 'Bassiste', 'Rock, blues', 1, 'FireJoseph', 'http:www.nomdugroupe.com', 'Bonjour, je cherche à pratiquer...', 'Recherche groupe', 'Bonjour, je recherche mon groupe', 'amateur', 'group'),
(14, '2019-07-04 18:28:03', 'madonna', '$2y$10$bDDRexUgF18Rc01fvI1z8e8r87ZR47SDKtu0fOi4rfwpPatUiqpJi', 'madonna@gmail.com', 1970, 'Dinan (22)', 'woman', 'pro', 'group', 'Chanteur(euse)', 'Pop', 25, 'Madonna', 'http:www.nomdugroupe.com', 'J\'aimerais relancer ma carrière', 'Cheche fans', 'Cherche à reconquérir la France', 'pro', 'group');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
