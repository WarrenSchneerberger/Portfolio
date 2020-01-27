-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 11 Mars 2019 à 11:07
-- Version du serveur: 5.5.59
-- Version de PHP: 5.4.4-14+deb7u10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `schneebergerw`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Sexe` varchar(1) NOT NULL,
  `Date_de_naissance` varchar(255) NOT NULL,
  `Ville_de_naissance` varchar(255) NOT NULL,
  `Pays_de_naissance` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Code_postal` varchar(5) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `essai_c` varchar(30) NOT NULL DEFAULT 'Ne Participe Pas',
  `essai_c_r` varchar(30) NOT NULL DEFAULT 'Ne Participe Pas',
  `essai_p` varchar(30) NOT NULL DEFAULT 'Ne Participe Pas',
  `etude_c` varchar(30) NOT NULL DEFAULT 'Ne Participe Pas',
  `diagnostic_s` varchar(30) NOT NULL DEFAULT 'Ne Participe Pas',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
