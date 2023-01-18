-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 08 Mars 2022 à 20:41
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `logihabitat`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `code_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(40) NOT NULL,
  `mot_de_passe` text NOT NULL,
  `tel_admin` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  PRIMARY KEY (`code_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `administrateur`
--


-- --------------------------------------------------------

--
-- Structure de la table `agent_immobilier`
--

CREATE TABLE IF NOT EXISTS `agent_immobilier` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mot_de_passe` text NOT NULL,
  `telephone` int(11) NOT NULL,
  `adresse_agent` varchar(30) NOT NULL,
  PRIMARY KEY (`id_agent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `agent_immobilier`
--


-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mot_de_passe` text NOT NULL,
  `numero` int(11) NOT NULL,
  `adresse_client` varchar(40) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `client`
--


-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `comments`
--


-- --------------------------------------------------------

--
-- Structure de la table `residences`
--

CREATE TABLE IF NOT EXISTS `residences` (
  `id_residence` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `prix` double NOT NULL,
  `adresse` text NOT NULL,
  `catégorie` text NOT NULL,
  `image` longblob NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id_residence`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `residences`
--


-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `adresse_user` text NOT NULL,
  `numero` int(25) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`nom`, `email`, `adresse_user`, `numero`, `mot_de_passe`) VALUES
('Cindy', 'cindyfandio8@gmail.com', 'Cameroun', 65234412, 'sdfghjklm'),
('Fadimatou', 'fadimatou@gmail.com', 'Cameroun', 697996295, 'fadimatou');
