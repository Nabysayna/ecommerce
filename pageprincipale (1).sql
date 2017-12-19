-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 03 Novembre 2017 à 13:37
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbmbirmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `pageprincipale`
--

CREATE TABLE `pageprincipale` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `idcategorie` int(11) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL,
  `avis` int(11) DEFAULT NULL,
  `nbreavis` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pageprincipale`
--

INSERT INTO `pageprincipale` (`id`, `id_user`, `designation`, `description`, `prix`, `stock`, `img_link`, `date_ajout`, `idcategorie`, `categorie`, `avis`, `nbreavis`, `adresse`, `couleur`, `taille`) VALUES
(1, 2, 'chemise', 'very nice', 5000, 10, './index_files/static2.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '{"region":"dakar","zone":"dakar","szone":"dakar"}', 'rouge', 0),
(2, 2, 'chemise', 'very nice', 12000, 10, './index_files/ass.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '{"region":"dakar","zone":"dakar","szone":"almadie"}', 'rouge', 0),
(3, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/7.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '{"region":"dakar","zone":"dakar","szone":"dakar"}', 'blanc', 0),
(4, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/15.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '{"region":"thies","zone":"thies","szone":"thies"}', 'jaune', 0),
(5, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/16.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '{"region":"thies","zone":"thies","szone":"thies"}', 'bleu', 0),
(6, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/8.jpg', '2017-10-09 00:00:00', 3, 'en vedette', 2, 3, '', '', 0),
(7, 2, 'chemise', 'tres jolie chemise', 14000, 10, './index_files/12.jpg', '2017-10-09 00:00:00', 3, 'en vedette', 2, 3, '', '', 0),
(8, 2, 'chemise', 'tres jolie chemise', 20000, 10, './index_files/7.jpg', '2017-10-09 00:00:00', 3, 'en vedette', 2, 3, '', 'verte', 0),
(9, 2, 'chemise', 'tres jolie chemise', 20000, 10, './index_files/9.jpg', '2017-10-09 00:00:00', 3, 'en vedette', 2, 3, '', '', 0),
(10, 2, 'chemise', 'tres jolie chemise', 20000, 10, './index_files/14.jpg', '2017-10-09 00:00:00', 3, 'en vedette', 2, 3, '', '', 0),
(11, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/b1.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '', 'verte', 0),
(12, 2, 'chemise', 'tres jolie chemise', 15000, 10, './index_files/13.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '', '', 0),
(13, 2, 'chemise', 'very nice', 5000, 10, './index_files/7.jpg', '2017-10-09 00:00:00', 3, 'nouveaute', 2, 3, '', '', 0),
(14, 2, 'chemise', 'very nice', 5000, 10, './index_files/16.jpg', '2017-10-09 00:00:00', 3, 'homme', 2, 3, '', '', 0),
(15, 2, 'chemise', 'very nice', 5000, 10, './index_files/15.jpg', '2017-10-09 00:00:00', 3, 'homme', 2, 3, '', '', 0),
(16, 2, 'chemise', 'very nice', 5000, 10, './index_files/17.jpg', '2017-10-09 00:00:00', 3, 'homme', 2, 3, '', '', 0),
(17, 2, 'chemise', 'very nice', 5000, 10, './index_files/2(3).jpg', '2017-10-09 00:00:00', 3, 'femme', 2, 3, '', 'rouge', 0),
(18, 2, 'robe', 'very nice', 5000, 10, './index_files/1.jpg', '2017-10-09 00:00:00', 3, 'femme', 2, 3, '', 'bleu', 0),
(19, 2, 'robe', 'very nice', 5000, 10, './index_files/4(1).jpg', '2017-10-09 00:00:00', 3, 'femme', 2, 3, '', '', 0),
(20, 2, 'robe', 'very nice', 5000, 10, './index_files/1(5).png', '2017-10-09 00:00:00', 3, 'sac', 2, 3, '', '', 0),
(21, 2, 'robe', 'very nice', 5000, 10, './index_files/1(2).jpg', '2017-10-09 00:00:00', 3, 'sac', 2, 3, '', 'rouge', 0),
(22, 2, 'robe', 'very nice', 5000, 10, './index_files/femme.png', '2017-10-09 00:00:00', 3, 'sac', 2, 3, '', 'verte', 0),
(23, 2, 'robe', 'very nice', 5000, 10, './index_files/diap1.jpg', '2017-10-09 00:00:00', 3, 'electronique', 2, 3, '', '', 0),
(24, 2, 'robe', 'very nice', 5000, 10, './index_files/diapv1.jpg', '2017-10-09 00:00:00', 3, 'electronique', 2, 3, '', '', 0),
(25, 2, 'robe', 'very nice', 5000, 10, './index_files/office.jpg', '2017-10-09 00:00:00', 3, 'electronique', 2, 3, '', '', 0),
(26, 2, 'robe', 'very nice', 5000, 10, './index_files/matelectro.jpg', '2017-10-09 00:00:00', 3, 'electronique', 2, 3, '', '', 0),
(27, 2, 'robe', 'very nice', 5000, 10, './index_files/office.jpg', '2017-10-09 00:00:00', 3, 'electronique', 2, 3, '', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pageprincipale`
--
ALTER TABLE `pageprincipale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pageprincipale`
--
ALTER TABLE `pageprincipale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
