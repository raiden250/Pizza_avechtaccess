-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 juin 2020 à 11:02
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pizzabox`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `calculcommande`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `calculcommande` (IN `NUMCOMMANDE` INT)  BEGIN
    SELECT SUM(lister.QteList  * pizza.TarifPizz )  as MontantCommmande
				 FROM lister,pizza
				 WHERE pizza.NroPizz = lister.NroPizzList
			   AND lister.NroCmdeList = NUMCOMMANDE; 

 end$$

DROP PROCEDURE IF EXISTS `proc_calcul_commande`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_calcul_commande` (IN `numcommande` INT)  BEGIN

SELECT   sum(lister.QteList  * pizza.TarifPizz )  as Montantcommande 
FROM lister,pizza
WHERE pizza.NroPizz = lister.NroPizzList
AND lister.NroCmdeList = numcommande ;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `NroClie` int(255) NOT NULL AUTO_INCREMENT,
  `NomClie` varchar(255) DEFAULT NULL,
  `PrenomClie` varchar(255) DEFAULT NULL,
  `AdresseClie` varchar(255) DEFAULT NULL,
  `VilleClie` varchar(255) DEFAULT NULL,
  `NroTelClie` varchar(255) DEFAULT NULL,
  `TitreClie` varchar(255) DEFAULT NULL,
  `passwd_client` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NroClie`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`NroClie`, `NomClie`, `PrenomClie`, `AdresseClie`, `VilleClie`, `NroTelClie`, `TitreClie`, `passwd_client`) VALUES
(1, 'Dourban', 'Georgess', '7, rue Emile Bertin', 'PARIS', '5400054', 'M', NULL),
(2, 'Dumas', 'Jean-Baptiste', '10, rue Ernest Renan', 'LAXOU', '54520', 'M', NULL),
(3, 'Duvernoy', 'Martine', '24, rue du Sergent Blandan', 'NANCY', '54000', 'Mme', NULL),
(4, 'Durendal', 'Roland', '17, boulevard Charlemagne', 'NANCY', '54000', 'M', NULL),
(5, 'Durer', 'Albrecht', '20, rue Jules Ferry', 'NANCY', '54000', 'M', NULL),
(6, 'Duquesnoy', 'Agnès', '10, rue des Clos', 'LAXOU', '54520', 'Mlle', NULL),
(7, 'Dutronc', 'Jacques', '6, rue Rodin', 'VILLERS', '54600', 'M', NULL),
(8, 'Durham', 'Jonathan', '12, rue Voltaire', 'NANCY', '54000', 'M', NULL),
(9, 'Duluth', 'Pierre', '6, avenue Aristide Briand', 'NANCY', '54000', 'M', NULL),
(11, 'Dufour', 'Elodie', '52, boulevard Charlemagne', 'NANCY', '54000', 'Mme', NULL),
(12, 'Duchatelet', 'Emilie', '20, boulevard Emile Zola', 'LAXOU', '54520', 'Mlle', NULL),
(13, 'Durao', 'José', '10, avenue du Général Leclerc', 'VANDOEUVRE', '54000', 'M', NULL),
(14, 'Dubcek', 'Alexndre', '20, rue de la Moselotte', 'LAXOU', '54520', 'Mme', NULL),
(15, 'Dupatin', 'Sébastien', '101, rue Raymond Poincaré', 'NANCY', '54000', 'M', NULL),
(16, 'Dupeyron', 'Juliette', '55, rue Emile Bertin', 'NANCY', '54000', 'M', NULL),
(17, 'Durrazo', 'Jérémie', '120, avenue de Boufflers', 'NANCY', '54000', 'M', NULL),
(18, 'Durango', 'Flora', '220, boulevard des Aiguillettes', 'VILLERS', '54600', 'Mlle', NULL),
(19, 'Dusapin', 'Pascal', '45, rue de Maréville', 'LAXOU', '54520', 'M', NULL),
(20, 'Duparc', 'Henri', '20, rue de l\'Abbé Didelot', 'LAXOU', '54520', 'M', NULL),
(21, 'Durey', 'Louis', '30, rue Paul Bert', 'NANCY', '54000', 'M', NULL),
(22, 'Duroc', 'Pierre', '25, rue de Santifontaine', 'NANCY', '54000', 'M', NULL),
(23, 'Duverger', 'Maurice', '30, place de la Commanderie', 'NANCY', '54000', 'M', NULL),
(24, 'Dullin', 'Charles', '5, rue du Petit Arbois', 'LAXOU', '54520', 'M', NULL),
(25, 'Dughet', 'Gaspard', '20, rue Anatole France', 'NANCY', '54000', 'M', NULL),
(26, 'Durbuy', 'Claudine', '25, rue de la Forêt', 'LAXOU', '54520', 'Mlle', NULL),
(27, 'Dubrovnik', 'Raguse', '42, rue du Plateau', 'LAXOU', '54520', 'M', NULL),
(28, 'Dufay', 'Guillaume', '15, rue du Four', 'LAXOU', '54520', 'M', NULL),
(29, 'Dulcinée', 'Ginette', '53, avenue Aristide Briand', 'NANCY', '54000', 'M', NULL),
(30, 'Dudley', 'Carole', '10, boulevard d\'Haussonville', 'VILLERS', '54600', 'Mlle', NULL),
(31, 'Duse', 'Eléonora', '10, avenue Paul Déroulède', 'LAXOU', '54520', 'Mme', NULL),
(32, 'Dunedine', 'Ginette', '50, rue du Petit Arbois', 'LAXOU', '54520', 'Mme', NULL),
(33, 'Dudelange', 'Catherine', '3, place du Jet d\'eau', 'LAXOU', '54520', 'Mlle', NULL),
(34, 'Dukou', 'Michaël', '52, rue Jules Ferry', 'NANCY', '54000', 'M', NULL),
(35, 'Ducos', 'Martine', '10, place Paul painlevé', 'NANCY', '54000', 'Mle', NULL),
(36, 'Dunham', 'Catherine', '135, boulevard des Aiguilette', 'VILLERS', '54600', 'Mlle', NULL),
(37, 'Duclos', 'Jacques', '42, boulevard Charlemagne', 'NANCY', '54000', 'M', NULL),
(38, 'Dublin', 'Zaccharie', '42, avenue du Montet', 'VANDOEUVRE', '54500', 'M', NULL),
(39, 'Duchesne', 'Aline', '5, allée du Bassigny', 'LAXOU', '54520', 'Mme', NULL),
(40, 'Ducommun', 'Elie', '42, rue du Sergent Blandan', 'NANCY', '54000', 'M', NULL),
(41, 'Dubout', 'Albert', '20, avenue du Montet', 'VANDOEUVRE', '54500', 'M', NULL),
(42, 'Dubarry', 'Jeanne', '74, boulevard de Hardeval', 'LAXOU', '54520', 'Mme', NULL),
(43, 'Dugommier', 'Jacques', '45, avenue de l\'Europe', 'LAXOU', '54520', 'M', NULL),
(44, 'Duhem', 'Pierre', '10, rue Victor Hugo', 'LAXOU', '54520', 'M', NULL),
(45, 'Duprat', 'Antoine', '25, rue de Heubach', 'LAXOU', '54520', 'M', NULL),
(46, 'Duguillet', 'Pernette', '15, rue Lavigerie', 'NANCY', '54000', 'Mle', NULL),
(47, 'Dumas', 'Alexandre', '25, rue du Sergent Bobillot', 'NANCY', '54000', 'M', NULL),
(48, 'Dupin', 'Jacques', '5, rue de l\'Octroi', 'NANCY', '54000', 'M', NULL),
(49, 'Dumézil', 'Georges', '25, avenue de l\'Europe', 'NANCY', '54520', 'M', NULL),
(50, 'Duguit', 'Léon', '12, rue Jean Mermoz', 'VILLERS', '54600', 'M', NULL),
(51, 'Dupin', 'André', '52, avenue Paul Déroulède', 'LAXOU', '54520', 'M', NULL),
(52, 'Dupond', 'Patrick', '24, rue du Onze Novembre', 'LAXOU', '54520', 'M', NULL),
(53, 'Dupré', 'Marcel', '35, avenue Pierre Curie', 'LAXOU', '54520', 'M', NULL),
(54, 'Dutourd', 'Jean', '21, rue de Cronstadt', 'NANCY', '54000', 'M', NULL),
(55, 'Dutrochet', 'René', '3, avenue de l\'europe', 'LAXOU', '54520', 'M', NULL),
(56, 'Duvivier', 'Julien', '2, rue de l\'Abbé Gridel', 'NANCY', '54000', 'M', NULL),
(57, 'Duruflé', 'Maurice', '6, place des Ducs de Bar', 'NANCY', '54000', 'M', NULL),
(58, 'Duras', 'Marguerite', '25, boulevard Cattenoz', 'VILLERS', '54600', 'Mme', NULL),
(59, 'Duparc', 'Thérèse', '51, avenue de L\'Europe', 'LAXOU', '54520', 'Mme', NULL),
(60, 'Dupré', 'Jules', '2, rue Léomont', 'VILLERS', '54600', 'M', NULL),
(61, 'Duguesclin', 'Bertrand', '72, rue de Santifontaine', 'NANCY', '54000', 'M', NULL),
(62, 'Dupré', 'Jacqueline', '25, rue de Mondésert', 'NANCY', '54000', 'Mme', NULL),
(63, 'Dumas', 'Alexandre', '14, boulevard Cattenoz', 'VILLERS', '54600', 'M', NULL),
(64, 'Dunand', 'Henri', '74, Boulevard de Baudricourt', 'VILLERS', '54600', 'M', NULL),
(65, 'Duplessis', 'Armand', '20, rue de la Forêt', 'LAXOU', '54520', 'M', NULL),
(66, 'Dulac', 'Germaine', '12, rue Marie-Odile', 'LAXOU', '54000', 'Mlle', NULL),
(67, 'Dulong', 'Pierre', '13, rue de Mondésert', 'NANCY', '54000', 'M', NULL),
(68, 'Dukas', 'Paul', '14, rue Edouard Grosjean', 'LAXOU', '54520', 'M', NULL),
(69, 'Dufy', 'Raoul', '23, rue du Pressoir', 'LAXOU', '54000', 'M', NULL),
(70, 'Dufresne', 'Diane', '25, Rue Pasteur', 'NANCY', '54000', 'Mme', NULL),
(71, 'Duby', 'Georges', '51, rue des Coteaux', 'VILLERS', '54600', 'M', NULL),
(72, 'Dubalet', 'Raoul', '14, rue baron Buquet', 'VILLERS', '54600', 'M', NULL),
(73, 'Durango', 'Marina', '51, rue Ernest Albert', 'LAXOU', '54520', 'Mme', NULL),
(74, 'Dubillard', 'Roland', '13, rue Chopin', 'VILLERS', '54600', 'M', NULL),
(75, 'Duchamps', 'marcel', '54, rue Raymond Poincaré', 'LAXOU', '54520', 'M', NULL),
(76, 'Dubellay', 'Joachim', '21, rue Mozart', 'VILLERS', '54600', 'M', NULL),
(77, 'Dubuffet', 'Jean', '38, rue Coriolis', 'NANCY', '5400', 'M', NULL),
(78, 'Dubos', 'René', '45, rue de l\'Asnée', 'VILLERS', '54600', 'M', NULL),
(79, 'Ducasse', 'Alain', '15, Allées de Médreville', 'LAXOU', '54520', 'M', NULL),
(81, 'goh', 'son', '7, rue Emile Bertin', 'PARIS', '5400054', 'Mme', NULL),
(82, 'test2', 'son', 'fhgc', 'PARIS', '5400054', 'mlle', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `NroCmde` varchar(255) NOT NULL DEFAULT '',
  `DateCmde` varchar(255) DEFAULT NULL,
  `HeureCmde` varchar(255) DEFAULT NULL,
  `NroClieCmde` varchar(255) NOT NULL,
  `NroLivrCmde` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NroCmde`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`NroCmde`, `DateCmde`, `HeureCmde`, `NroClieCmde`, `NroLivrCmde`) VALUES
('452', '02/02/2004', '11:00:00', '1', ''),
('453', '02/02/2004', '11:05:00', '66', '303'),
('454', '02/02/2004', '11:25:00', '40', '303'),
('455', '02/02/2004', '11:45:00', '81', '303'),
('456', '02/02/2004', '11:55:00', '16', '303'),
('457', '02/02/2004', '12:20:00', '15', '202'),
('458', '02/02/2004', '12:25:00', '14', '202'),
('459', '02/02/2004', '12:50:00', '34', '303'),
('460', '02/02/2004', '13:15:00', '25', '202'),
('461', '02/02/2004', '18:14:00', '52', '202'),
('462', '02/02/2004', '18:24:00', '74', '202'),
('463', '02/02/2004', '18:40:00', '72', '303'),
('464', '02/02/2004', '19:00:00', '11', '303'),
('465', '02/02/2004', '19:10:00', '42', '303'),
('466', '02/02/2004', '19:20:00', '30', '202'),
('467', '02/02/2004', '19:25:00', '62', '202'),
('468', '02/02/2004', '19:35:00', '7', '202'),
('469', '02/02/2004', '19:40:00', '8', '303'),
('470', '02/02/2004', '19:50:00', '64', '303'),
('471', '02/02/2004', '19:55:00', '4', ''),
('472', '02/02/2004', '20:00:00', '27', '202'),
('473', '02/02/2004', '20:10:00', '38', '202'),
('474', '02/02/2004', '20:15:00', '39', '202'),
('475', '02/02/2004', '20:25:00', '75', '303'),
('476', '02/02/2004', '20:35:00', '31', '303'),
('477', '03/02/2004', '11:40:00', '13', '404'),
('478', '03/02/2004', '11:50:00', '60', '404'),
('479', '03/02/2004', '12:30:00', '18', ''),
('480', '03/02/2004', '12:45:00', '54', '404'),
('481', '03/02/2004', '19:10:00', '35', '505'),
('482', '03/02/2004', '19:20:00', '51', '505'),
('483', '03/02/2004', '19:30:00', '48', '505'),
('484', '03/02/2004', '19:50:00', '3', ''),
('485', '03/02/2004', '20:45:00', '59', '505'),
('486', '03/02/2004', '20:50:00', '13', '505'),
('487', '04/02/2004', '12:10:00', '52', '101'),
('488', '04/02/2004', '12:15:00', '67', '101'),
('489', '04/02/2004', '12:30:00', '29', '101'),
('490', '04/02/2004', '12:50:00', '45', '101'),
('491', '04/02/2004', '19:10:00', '46', '202'),
('492', '04/02/2004', '20:00:00', '31', '101'),
('493', '04/02/2004', '20:15:00', '75', '101'),
('494', '04/02/2004', '20:30:00', '79', ''),
('495', '04/02/2004', '20:35:00', '20', '101'),
('496', '04/02/2004', '20:45:00', '22', '101');

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

DROP TABLE IF EXISTS `composer`;
CREATE TABLE IF NOT EXISTS `composer` (
  `NroPizzComp` varchar(255) NOT NULL DEFAULT '',
  `CodeIngrComp` varchar(255) NOT NULL DEFAULT '',
  `QteComp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NroPizzComp`,`CodeIngrComp`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `composer`
--

INSERT INTO `composer` (`NroPizzComp`, `CodeIngrComp`, `QteComp`) VALUES
('1', 'champignon', '40'),
('1', 'chorizo', '50'),
('1', 'jambon', '60'),
('1', 'mozzarelle', '120'),
('1', 'tomate', '80'),
('2', 'chèvre', '60'),
('2', 'jambon', '40'),
('2', 'mozzarelle', '90'),
('2', 'olive', '6'),
('2', 'tomate', '70'),
('3', 'chèvre', '40'),
('3', 'emmental', '50'),
('3', 'mozzarelle', '60'),
('3', 'roquefort', '40'),
('3', 'tomate', '60'),
('4', 'champignon', '20'),
('4', 'crème', '10'),
('4', 'jambon', '40'),
('4', 'lard', '20'),
('4', 'tomate', '80'),
('5', 'jambon', '50'),
('5', 'mozzarelle', '120'),
('5', 'oeuf', '1'),
('5', 'tomate', '60'),
('6', 'chèvre', '30'),
('6', 'herbes', '5'),
('6', 'mozzarelle', '80'),
('6', 'thym', '4'),
('6', 'tomate', '60'),
('6', 'tomates', '1'),
('7', 'boeuf', '75'),
('7', 'mozzarelle', '80'),
('7', 'oignon', '40'),
('7', 'olive', '6'),
('7', 'tomate', '80'),
('8', 'merguez', '1'),
('8', 'mozzarelle', '80'),
('8', 'oeuf', '1'),
('8', 'poivron', '40'),
('8', 'tomate', '80'),
('9', 'boeuf', '50'),
('9', 'champignon', '30'),
('9', 'mozzarelle', '120'),
('9', 'poivron', '30'),
('9', 'poulet', '60'),
('9', 'tomate', '100'),
('10', 'artichaut', '5'),
('10', 'mozzarelle', '80'),
('10', 'oignon', '30'),
('10', 'olive', '8'),
('10', 'poivron', '30'),
('10', 'thym', '4'),
('10', 'tomate', '80'),
('10', 'tomates', '1'),
('11', 'basilic', '10'),
('11', 'féta', '70'),
('11', 'mozzarelle', '60'),
('11', 'olive', '8'),
('11', 'poivron', '20'),
('11', 'tomates', '80'),
('12', 'crème', '50'),
('12', 'jambon', '40'),
('12', 'lard', '40'),
('12', 'oignon', '20'),
('12', 'roblochon', '40'),
('13', 'capre', '20'),
('13', 'mozzarelle', '80'),
('13', 'thon', '60'),
('13', 'tomate', '80'),
('13', 'tomates', '1');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `CodeIngr` varchar(255) NOT NULL DEFAULT '',
  `NomIngr` varchar(255) DEFAULT NULL,
  `UniteIngr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CodeIngr`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`CodeIngr`, `NomIngr`, `UniteIngr`) VALUES
('artichaut', 'Cœur d\'artichaut', 'u'),
('basilic', 'Basilic Frais', 'gr'),
('boeuf', 'Bœuf haché', 'gr'),
('capre', 'Capres', 'gr'),
('champignon', 'Champignons frais', 'gr'),
('chèvre', 'Fromage de chêvre', 'gr'),
('chorizo', 'Chorizo', 'gr'),
('ciboulette', 'Ciboulette fraîche', 'gr'),
('crème', 'Crème fraiche', 'cl'),
('emmental', 'emmental français', 'gr'),
('féta', 'Féta provençale', 'gr'),
('herbes', 'Herbes de provences', 'gr'),
('jambon', 'Epaule de porc', 'gr'),
('lard', 'Lardons', 'gr'),
('merguez', 'Merguez', 'u'),
('mozzarelle', 'Fromage mozzarelle', 'gr'),
('oeuf', 'Œuf', 'u'),
('oignon', 'Oignons frais', 'gr'),
('olive', 'olives noires', 'u'),
('poivron', 'Poivron Frais', 'gr'),
('poulet', 'morceaux de poulet', 'u'),
('roblochon', 'roblochon de savoie', 'gr'),
('roquefort', 'Roquefort', 'gr'),
('thon', 'Miettes de thon', 'gr'),
('thym', 'Thym de provence', 'gr'),
('tomate', 'Purée de tomate', 'ml'),
('tomates', 'Tomates fraiches', 'u');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `listepizza`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `listepizza`;
CREATE TABLE IF NOT EXISTS `listepizza` (
`NroPizz` int(255)
,`DesignPizz` varchar(255)
,`TarifPizz` decimal(5,1)
);

-- --------------------------------------------------------

--
-- Structure de la table `lister`
--

DROP TABLE IF EXISTS `lister`;
CREATE TABLE IF NOT EXISTS `lister` (
  `NroCmdeList` varchar(255) NOT NULL DEFAULT '',
  `NroPizzList` varchar(255) NOT NULL DEFAULT '',
  `QteList` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NroCmdeList`,`NroPizzList`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `lister`
--

INSERT INTO `lister` (`NroCmdeList`, `NroPizzList`, `QteList`) VALUES
('452', '1', '2'),
('452', '7', '2'),
('453', '5', '1'),
('454', '2', '4'),
('454', '3', '1'),
('454', '8', '1'),
('455', '2', '1'),
('455', '3', '1'),
('455', '7', '1'),
('455', '12', '1'),
('456', '10', '2'),
('457', '9', '1'),
('458', '1', '3'),
('458', '4', '1'),
('459', '6', '2'),
('459', '7', '1'),
('459', '11', '1'),
('460', '6', '2'),
('460', '10', '2'),
('461', '7', '2'),
('462', '1', '1'),
('462', '4', '1'),
('462', '9', '1'),
('463', '12', '4'),
('464', '2', '1'),
('464', '9', '3'),
('465', '2', '1'),
('465', '3', '1'),
('466', '10', '1'),
('467', '2', '1'),
('467', '12', '2'),
('468', '4', '2'),
('468', '8', '1'),
('468', '9', '1'),
('469', '1', '2'),
('470', '3', '1'),
('470', '4', '3'),
('471', '5', '2'),
('472', '11', '1'),
('473', '4', '1'),
('473', '6', '2'),
('473', '10', '1'),
('474', '3', '2'),
('474', '10', '1'),
('475', '8', '2'),
('476', '2', '2'),
('476', '9', '1'),
('477', '3', '1'),
('477', '12', '1'),
('478', '1', '3'),
('479', '12', '2'),
('480', '4', '2'),
('480', '5', '2'),
('480', '11', '1'),
('481', '5', '2'),
('482', '7', '3'),
('483', '11', '1'),
('484', '1', '2'),
('484', '12', '1'),
('485', '2', '1'),
('486', '3', '2'),
('486', '10', '1'),
('486', '11', '1'),
('487', '4', '2'),
('488', '5', '2'),
('488', '8', '1'),
('488', '9', '1'),
('489', '6', '2'),
('490', '7', '1'),
('491', '5', '2'),
('492', '1', '2'),
('492', '4', '1'),
('492', '6', '1'),
('492', '7', '1'),
('492', '8', '1'),
('493', '11', '2'),
('494', '2', '1'),
('494', '8', '1'),
('495', '3', '1'),
('496', '7', '3'),
('496', '10', '2');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `liste_client_nancy`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `liste_client_nancy`;
CREATE TABLE IF NOT EXISTS `liste_client_nancy` (
`TitreClie` varchar(255)
,`NomClie` varchar(255)
,`PrenomClie` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `NroLivr` int(255) NOT NULL,
  `NomLivr` varchar(255) DEFAULT NULL,
  `PrenomLivr` varchar(255) DEFAULT NULL,
  `DatEmbauchLivr` date DEFAULT NULL,
  PRIMARY KEY (`NroLivr`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`NroLivr`, `NomLivr`, `PrenomLivr`, `DatEmbauchLivr`) VALUES
(101, 'vegeta', 'Syl', '2020-06-10'),
(202, 'Gillon', 'Sylvette', '2003-10-01'),
(303, 'jirico', 'Dino', '2003-11-01'),
(404, 'Pigeot', 'Loïc', '2003-12-01'),
(505, 'Patoux', 'Michel', '2003-12-01'),
(606, 'Ferry', 'Martin', '2004-02-01'),
(707, 'gohan', 'son', '2020-06-25');

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `NroPizz` int(255) NOT NULL AUTO_INCREMENT,
  `DesignPizz` varchar(255) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `TarifPizz` decimal(5,1) DEFAULT NULL,
  PRIMARY KEY (`NroPizz`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`NroPizz`, `DesignPizz`, `description`, `TarifPizz`) VALUES
(2, 'La Seguine', 'lkj', '19.5'),
(3, 'La From', 'sqfsdf', '15.5'),
(4, 'La Fermière', '', '12.5'),
(5, 'La chausssson', '', '13.0'),
(6, 'La ProvenÃƒÂ§ale', '', '13.5'),
(7, 'La Caramba', '', '14.5'),
(8, 'l\'Orient Express', '', '14.5'),
(9, 'La Gourmande', '', '14.5'),
(10, 'La primeure', '', '12.5'),
(11, 'La Péloponèse', '', '14.5'),
(12, 'La Savoyarde', '', '16.5'),
(13, 'la Pêcheur', '', '13.5');

-- --------------------------------------------------------

--
-- Structure de la table `pizzajdbc`
--

DROP TABLE IF EXISTS `pizzajdbc`;
CREATE TABLE IF NOT EXISTS `pizzajdbc` (
  `nom_pizza` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pizzajdbc`
--

INSERT INTO `pizzajdbc` (`nom_pizza`) VALUES
('quatre fromages'),
('chorizoss'),
('chorizo'),
('chorizo'),
('chorizo'),
('chorizo'),
('chorizo'),
('chorizo'),
('chorizo');

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `DesignPizz` varchar(255) DEFAULT NULL,
  `TarifPizz` decimal(5,1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=473 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pizzas`
--

INSERT INTO `pizzas` (`id`, `DesignPizz`, `TarifPizz`) VALUES
(1, 'La Regina', '10.0'),
(2, 'La Seguin', '13.5'),
(3, 'La From', '14.5'),
(4, 'La Fermière', '12.5'),
(5, 'La chausson', '13.0'),
(6, 'La Provençale', '12.5'),
(7, 'La Caramba', '14.5'),
(8, 'l\'Orient Express', '14.5'),
(9, 'La Gourmande', '14.5'),
(10, 'La primeure', '12.5'),
(11, 'La Péloponèse', '14.5'),
(12, 'La Savoyarde', '14.5'),
(13, 'la Pêcheur', '13.5'),
(472, 'test', '15.0');

-- --------------------------------------------------------

--
-- Structure de la table `pizza_copy`
--

DROP TABLE IF EXISTS `pizza_copy`;
CREATE TABLE IF NOT EXISTS `pizza_copy` (
  `NroPizz` int(255) NOT NULL,
  `DesignPizz` varchar(255) DEFAULT NULL,
  `TarifPizz` decimal(3,1) DEFAULT NULL,
  PRIMARY KEY (`NroPizz`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pizza_copy`
--

INSERT INTO `pizza_copy` (`NroPizz`, `DesignPizz`, `TarifPizz`) VALUES
(1, 'La Regina', '10.0'),
(2, 'La Seguin', '13.5'),
(3, 'La From', '14.5'),
(4, 'La Fermière', '12.5'),
(5, 'La chausson', '13.0'),
(6, 'La Provençale', '12.5'),
(7, 'La Caramba', '14.5'),
(8, 'l\'Orient Express', '14.5'),
(9, 'La Gourmande', '14.5'),
(10, 'La primeure', '12.5'),
(11, 'La Péloponèse', '14.5'),
(12, 'La Savoyarde', '14.5'),
(13, 'la Pêcheur', '13.5'),
(122, 'pomme de terre', '50.0'),
(456, 'puree', '99.9');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `idpromo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `t_pizza`
--

DROP TABLE IF EXISTS `t_pizza`;
CREATE TABLE IF NOT EXISTS `t_pizza` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `DesignPizz` varchar(255) DEFAULT NULL,
  `TarifPizz` decimal(5,1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=469 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `t_pizza`
--

INSERT INTO `t_pizza` (`id`, `DesignPizz`, `TarifPizz`) VALUES
(1, 'La Regina', '10.0'),
(2, 'La Seguin', '13.5'),
(3, 'La From', '14.5'),
(4, 'La Fermière', '12.5'),
(5, 'La chausson', '13.0'),
(6, 'La Provençale', '12.5'),
(7, 'La Caramba', '14.5'),
(8, 'l\'Orient Express', '14.5'),
(9, 'La Gourmande', '14.5'),
(10, 'La primeure', '12.5'),
(11, 'La Péloponèse', '14.5'),
(12, 'La Savoyarde', '14.5'),
(13, 'la Pêcheur', '13.5');

-- --------------------------------------------------------

--
-- Structure de la vue `listepizza`
--
DROP TABLE IF EXISTS `listepizza`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listepizza`  AS  select `pizza`.`NroPizz` AS `NroPizz`,`pizza`.`DesignPizz` AS `DesignPizz`,`pizza`.`TarifPizz` AS `TarifPizz` from `pizza` where `pizza`.`TarifPizz` = 12 ;

-- --------------------------------------------------------

--
-- Structure de la vue `liste_client_nancy`
--
DROP TABLE IF EXISTS `liste_client_nancy`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `liste_client_nancy`  AS  select `client`.`TitreClie` AS `TitreClie`,`client`.`NomClie` AS `NomClie`,`client`.`PrenomClie` AS `PrenomClie` from `client` where `client`.`VilleClie` = 'nancy' ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
