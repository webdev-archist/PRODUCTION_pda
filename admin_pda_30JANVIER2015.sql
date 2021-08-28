-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 30 Janvier 2015 à 15:38
-- Version du serveur :  5.5.41
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `admin_pda`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id_produits` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  `fr` varchar(175) NOT NULL,
  `en` varchar(175) NOT NULL,
  `es` varchar(175) NOT NULL,
  `fr1` text NOT NULL,
  `en1` text NOT NULL,
  `es1` text NOT NULL,
  `taille` varchar(15) NOT NULL,
  `materiaux` varchar(20) NOT NULL,
  `autre` varchar(20) NOT NULL,
  `prix` int(6) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '1',
  `vendus` int(11) NOT NULL DEFAULT '0',
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=181 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_produits`, `nom`, `user_name`, `auteur`, `img`, `fr`, `en`, `es`, `fr1`, `en1`, `es1`, `taille`, `materiaux`, `autre`, `prix`, `stock`, `vendus`, `actif`, `code`) VALUES
(1, 'tableau/icone', 'objet', '', 'notre-dame-de-toutes-graces', '<strong>Notre Dame de toutes Grâces</strong>', '', '', 'Nous avons 4 tailles différentes pour les icône religieuse.<br/>Veuillez faire le choix entre <ul><li>5cm/10cm</li><li>20cm/25cm</li><li>30cm/40cm</li><li>50cm/70cm</li></ul>dans le menu déroulant ci-avant:', '', '', '5cm/10cm', '', '', 2000, 15, 15, 1, ''),
(2, 'tableau/icone', 'objet', '', 'notre-dame-de-medjugorje', '<strong>Notre Dame de Medjugorje</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(3, 'tableau/icone', 'objet', '', 'notre-dame-de-garabandal', '<strong>Notre Dame de Guadeloupe</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(4, 'tableau/icone', 'objet', '', 'notre-dame-de-la-compassion', '<strong>Notre Dame de la Compassion</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(5, 'tableau/icone', 'objet', '', 'notre-dame-de-la-guadeloupe', '<strong>Notre Dame de la Guadeloupe</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 1, 1, ''),
(6, 'tableau/icone', 'objet', '', 'notre-dame-de-la-tendresse', '<strong>Notre Dame de la Tendresse</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 3, 1, ''),
(7, 'tableau/icone', 'objet', '', 'notre-dame-de-la-tendresse-1', '<strong>Notre Dame de la Tendresse</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(8, 'tableau/icone', 'objet', '', 'notre-dame-du-perpetuel-secours', '<strong>Notre Dame du perpétuel secours</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(9, 'tableau/icone', 'objet', '', 'notre-dame-du-perpetuel-secours-dore', '<strong>Notre Dame du perpétuel secours</strong> doré', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(10, 'tableau/icone', 'objet', '', 'la-vierge-et-enfant', 'La <strong>Vierge</strong> et l''enfant', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(11, 'tableau/icone', 'objet', '', 'la-vierge-noire-et-enfant', 'La <strong>Vierge Noire</strong> et l''enfant', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(12, 'tableau/icone', 'objet', '', 'notre-dame-fatima', '<strong>Notre Dame de Fatima</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(13, 'tableau/icone', 'objet', '', 'notre-dame-du-bon-conseil', '<strong>Notre Dame du bon conseil</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(14, 'tableau/icone', 'objet', '', 'coeur-sacre-de-jesus', '<strong>Coeur Sacré de Jésus</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(15, 'tableau/icone', 'objet', '', 'coeur-sacre-de-jesus-1', '<strong>Coeur Sacré de Jésus</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(16, 'tableau/icone', 'objet', '', 'coeur-sacre-de-jesus-2', '<strong>Coeur Sacré de Jésus</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(17, 'tableau/icone', 'objet', '', 'jesus-en-meditation', '<strong>Jésus en méditation</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(18, 'tableau/icone', 'objet', '', 'jesus-ressuscite', '<strong>Jésus réssuscité</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(19, 'tableau/icone', 'objet', '', 'jesus-misericordieux', '<strong>Jésus miséricordieux</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(20, 'tableau/icone', 'objet', '', 'visage-jesus-misericordieux', 'Visage de <strong>Jésus miséricordieux</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(21, 'tableau/icone', 'objet', '', 'jesus-crucifie', '<strong>Jésus</strong> Crucifié', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(22, 'tableau/icone', 'objet', '', 'jesus-crucifie-1', '<strong>Jésus Crucifié</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(23, 'tableau/icone', 'objet', '', 'jesus-crucifie-2', '<strong>Jésus Crucifié</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(24, 'tableau/icone', 'objet', '', 'jesus-enseigne', '<strong>Jésus</strong> enseigne', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(25, 'tableau/icone', 'objet', '', 'jesus-enseigne-1', '<strong>Jésus enseigne</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(26, 'tableau/icone', 'objet', '', 'jesus-enseigne-2', '<strong>Jésus enseigne</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(27, 'tableau/icone', 'objet', '', 'jesus-epine', '<strong>Jésus épine</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(28, 'tableau/icone', 'objet', '', 'jesus-eucharistie', '<strong>Jésus Eucharistie</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(29, 'tableau/icone', 'objet', '', 'sainte-face', '<strong>La Sainte Face</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(30, 'tableau/icone', 'objet', '', 'saint-sacrement', '<strong>Saint Sacrement</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(31, 'tableau/icone', 'objet', '', 'sainte-famille', 'La <strong>Sainte Famille</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(32, 'tableau/icone', 'objet', '', 'sainte-famille-1', 'La <strong>Sainte</strong> Famille', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(33, 'tableau/icone', 'objet', '', 'sainte-famille-2', '<strong>La Sainte Famille</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(34, 'tableau/icone', 'objet', '', 'sainte-cene', 'La <strong>Sainte Cène</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(35, 'tableau/icone', 'objet', '', 'saint-michel-archange', '<strong>Saint Michel Archange</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(36, 'tableau/icone', 'objet', '', 'saint-gabriel-archange', '<strong>Ange</strong> de la musique', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(37, 'tableau/icone', 'objet', '', 'sainte-trinite', '<strong>Sainte Trinité</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(38, 'tableau/icone', 'objet', '', 'saint-antoine', '<strong>Saint Antoine</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(39, 'tableau/icone', 'objet', '', 'saint-esprit', '<strong>Saint-Esprit</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(40, 'tableau/icone', 'objet', '', 'saint-therese', '<strong>Sainte Therèse</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(41, 'tableau/icone', 'objet', '', 'saint-francois-assise', '<strong>Saint François d''assise</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(42, 'tableau/icone', 'objet', '', 'saint-joseph', '<strong>Saint Joseph</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(43, 'tableau/icone', 'objet', '', 'la-pieta', '<strong>La Pieta</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(44, 'tableau/icone', 'objet', '', 'padre-pio', '<strong>Padré pio</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(45, 'tableau/icone', 'objet', '', 'padre-pio-1', '<strong>Padré pio</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(46, 'tableau/icone', 'objet', '', 'coeur-immacule', '<strong>Coeur Immaculé de Marie</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(47, 'tableau/icone', 'objet', '', 'coeur-immacule-1', '<strong>Coeur Immaculé de Marie</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(48, 'tableau/icone', 'objet', '', 'croix-de-st-francois', '<strong>Croix de Saint François</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(49, 'tableau/icone', 'objet', '', 'pape-francois', '<strong>Pape François</strong>', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(50, 'tableau/icone', 'objet', '', 'pape-francois-1', '<strong>Pape</strong> François', '', '', '', '', '', '5cm/10cm', '', '', 2000, 10, 0, 1, ''),
(51, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-1', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 1: La préparation (3 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, faciles et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 1: La préparation<br/>Jésus se prépare à sa mission dans le silence du foyer famillial.', '', '', '21cm/15cm', '', '80-120', 7500, 10, 0, 1, ''),
(52, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-2', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 2: 1ère année de la vie publique de Jésus (8 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 2:  1ère année de la vie publique de Jésus<br/>Jésus enseigne et forme le collège apostolique.', '', '', '21cm/15cm', '', '80-120', 20000, 5, 0, 1, ''),
(53, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-3', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 3: 2ème année de la vie publique de Jésus (14 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 3: 2ème année de la vie publique de Jésus<br/>Jésus, maître, Seigneur et thaumaturge', '', '', '21cm/15cm', '', '80-120', 35000, 3, 0, 1, ''),
(54, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-4', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 4: 3ème année de la vie publique de Jésus (1/2) (10 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 4: 3ème année de la vie publique de Jésus<br/>Jésus prépare les apôtre et disciples à leur mission à leur mission d''évangélisation.', '', '', '21cm/15cm', '', '80-120', 25000, 3, 0, 1, ''),
(55, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-4', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 5: 3ème année de la vie publique de Jésus (2/2) (8 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 5: 3ème année de la vie publique de Jésus<br/>Jésus se prépare à sa Passion.', '', '', '21cm/15cm', '', '80-120', 20000, 3, 0, 1, ''),
(56, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-5', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 6: Pré-passion & Passion (9 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 6: La Passion<br/>La passion complète du Christ.', '', '', '21cm/15cm', '', '80-120', 22500, 3, 0, 1, ''),
(57, 'livret P.D', 'publication', '<strong>Maria Valtorta</strong>', 'evangile-revele-maria-valtorta-6', '<b>L''&Eacute;vangile Révélé à </b> <i>Maria Valtorta</i><br/> Coffret 7: La Glorification (3 livrets)<br/>', '', '', '&Eacute;vangile révélé à Maria Valtorta, en 10 volumes de 6500 pages subdivisés en 55 livrets de 80 à 120 pages (gros caractères, facils et agréables à lire). C''est certainement l''une des plus grandes révélations privées de l''histoire de l''<strong>&Eacute;glise catholique</strong> par la densité, la puissance et la force de ses <strong>enseignements</strong>... <strong>Méditer</strong> régulièrement l''<strong>&Eacute;vangile Révélé</strong> est une grande bénédiction pour soi. il fait plonger dans l''océan de l''<strong>amour</strong> et de la <strong>sagesse de Dieu</strong>.<br/>Coffret 7: La Glorification<br/>La Réssurection et l''Ascension du Christ.', '', '', '21cm/15cm', '', '80-120', 7500, 3, 0, 1, ''),
(58, 'livret P.D', 'publication', 'Fraternité PDA', 'evangile-explique', '<strong>Jésus</strong> enseigne: Collection 24 cahiers', '', '', '24 cahiers d''<strong>enseignements</strong> thématiques extraits de l''<strong>&Eacute;vangile Révélé</strong> (à <strong>Maria Valtorta</strong>). La <strong>méditation</strong> quotidienne de l''<strong>&Eacute;vangile expliqué</strong> est un chemin de sanctification', '', '', '15cm/10cm', '', '60-300', 1500, 10, 0, 1, ''),
(59, 'livret P.D', 'publication', 'ACHI KOMAN', 'st-martin-de-porres', '<strong>Neuvaine</strong> à <strong>Saint Martin de Porrès</strong> ou frère de la charité', '', '', '...à la découverte de l''un des plus grands <strong>saints</strong> de l''<strong>Eglise catholique</strong>. Il est invoqué pour les causes désespérées et les cas dits impossibles.', '', '', '21cm/15cm', '', '60', 2000, 10, 0, 1, ''),
(60, 'livret P.D', 'publication', 'ACHI KOMAN', 'priez', 'PRIEZ: <i>le matin, à 15H, le soir</i>', '', '', 'Le livre de prières par excellence du chrétien.<br/>- Prières du matin pour affronter les épreuves de la journée avec la puissance de l''Esprit-Saint.<br/>- Prières de 15H pour attirer les grâces, les bénédictions et la protection sur sa vie.<br/>- Prières du soir pour combattre les forces du mal.', '', '', '15cm/10cm', '', '91', 1500, 10, 0, 1, ''),
(61, 'livret P.D', 'publication', 'ACHI KOMAN', 'priezC', 'PRIEZ: <i>le matin, à 15H, le soir</i><br/>Vendu avec le chapelet du Saint-Esprit', '', '', 'Le livre de prières par excellence du chrétien.<br/>- Prières du matin pour affronter les épreuves de la journée avec la puissance de l''Esprit-Saint.<br/>- Prières de 15H pour attirer les grâces, les bénédictions et la protection sur sa vie.<br/>- Prières du soir pour combattre les forces du mal.<br/>Ce livre est accompagné du chapelet du Saint-Esprit.', '', '', '15cm/10cm', '', '91', 3000, 10, 0, 1, ''),
(62, 'livret P.D', 'publication', 'ACHI KOMAN', 'priere-de-combat', 'Prières de combat', '', '', 'Puissantes <strong>prières</strong> de délivrance, de libération et de protection contre toutes formes de maléfices', '', '', '15cm/10cm', '', '97', 1000, 10, 0, 1, ''),
(63, 'livret P.D', 'publication', 'ACHI KOMAN', 'priere-des-1000-ave', 'Prière des 1000 Ave', '', '', 'Prières particulièrement efficaces pour les situations de blocage et la libération des <strong>âmes du purgatoire</strong>.', '', '', '15cm/10cm', '', '31', 500, 10, 1, 1, ''),
(64, 'livret P.D', 'publication', 'ACHI KOMAN', 'neuvaine-esprit-saint', 'Neuvaine à l''Esprit-Saint', '', '', 'Pour recevoir <strong>l''Esprit-Saint</strong>, ses dons et ses charismes.', '', '', '15cm/10cm', '', '76', 1000, 10, 0, 1, ''),
(65, 'livret P.D', 'publication', 'ACHI KOMAN', 'neuvaine-de-delivrance', 'Neuvaine de délivrance', '', '', 'Pour briser les liens de la sorcellerie, vaincre et chasser les maris de nuit et femmes de nuit et obtenir la <strong>grâce</strong> du mariage.', '', '', '15cm/10cm', '', '56', 1000, 10, 0, 1, ''),
(66, 'livret P.D', 'publication', 'ACHI KOMAN', 'le-purgatoire-existe', 'Le purgatoire existe', '', '', 'Il y a des gens qui ne veulent pas accepter l''idée de l''existence d''un <strong>purgatoire</strong> et d''un enfer. Erreur!!!<br/><strong>Le purgatoire existe</strong>, l''<strong>Enfer existe</strong>. Ce livre rapporte des témoignages poignants de leur existence.', '', '', '21cm/14.5cm', '', '69', 1500, 10, 0, 1, ''),
(67, 'livret P.D', 'publication', 'ACHI KOMAN', 'parole-amour', 'Paroles d''Amour', '', '', 'Puissantes paroles du <strong>Seigneur Jésus-Christ</strong> pour enseigner la <strong>Paix</strong>, l''<strong>Amour</strong>, la <strong>Sagesse</strong> et la connaissance de <strong>Dieu</strong>, l''Obéïssance, la Bonté, la Miséricorde etc..', '', '', '15cm/10cm', '', '81', 1000, 10, 0, 1, ''),
(68, 'livret P.D', 'publication', 'ACHI KOMAN', 'apocalypse-13', 'Apocalypse 13', '', '', 'Le chiffre de la bête: 666 énoncé dans l''<strong>Apocalypse de Saint Jean</strong>, au chapitre 13, est expliqué par la <strong>Sainte Vierge Marie</strong> qui donne par ailleurs les précautions de survie pour les évenements annoncés pour la <strong>fin des temps</strong>, mais pour aussi l''avènement du <strong>règne de Dieu</strong>, règne d''amour, règne de paix et de justice.', '', '', '21cm/15cm', '', '54', 1500, 10, 0, 1, ''),
(69, 'livret P.D', 'publication', 'ACHI KOMAN', 'chretien-rosicrucien', 'Peut-on être <strong>Chétiens</strong> et Rosicrusien', '', '', '', '', '', '21cm/15cm', '', '35', 500, 10, 0, 0, ''),
(70, 'bibles', 'publication', '', 'la-bible-des-peuples', 'La <strong>bible</strong> des peuples', '', '', 'Bible d''étude en français facile (catholique)', '', '', '', '', '', 8000, 3, 0, 1, ''),
(71, 'bibles', 'publication', '', 'bible-bahoule', 'La <strong>bible</strong> en Baoulé', '', '', '', '', '', '', '', '', 7000, 3, 0, 1, ''),
(72, 'bibles', 'publication', '', 'bible-communaute-chretienne', 'La <strong>bible</strong> des communautes chretiennes (catholique)', '', '', '', '', '', '', '', '', 7000, 3, 0, 1, ''),
(73, 'bibles', 'publication', '', 'bible-de-jerusalem', 'La <strong>bible</strong> de Jérusalem (catholique)', '', '', '', '', '', '', '', '', 10000, 3, 0, 1, ''),
(74, 'bibles', 'publication', '', 'bible-francais-courant', 'La <strong>bible</strong> en français courant', '', '', 'Bible catholique en gros caractères', '', '', '', '', '', 23000, 0, 0, 1, ''),
(75, 'bibles', 'publication', '', 'cathechisme-eglise-catholique', 'Compendium du <strong>cathechisme</strong> de l''<strong>église catholique</strong>', '', '', 'Un condensé du cathéchisme de l''Eglise catholique.', '', '', '', '', '', 4000, 3, 0, 1, ''),
(76, 'bibles', 'publication', '', 'bible-tob', 'La <strong>bible</strong> tob (catholique)', '', '', 'Traduction Oecuménique biblique', '', '', '', '', '', 5000, 3, 0, 1, ''),
(77, 'bibles', 'publication', '', 'bible-enfant-ma-petitebible', '<strong>Bible</strong> pour enfant: ma <strong>petite bible</strong>', '', '', '', '', '', '', '', '', 6500, 0, 0, 1, ''),
(78, 'bibles', 'publication', '', 'bible-enfant-ma-premeire-bible', 'Ma première <strong>bible</strong>', '', '', 'Pour de 0 à 3 ans.', '', '', '', '', '', 3500, 3, 0, 1, ''),
(79, 'bibles', 'publication', '', 'bible-des-tout-petits', '<strong>Bible</strong> des tout petits', '', '', 'de 0 à 4 ans', '', '', '', '', '', 8000, 2, 0, 1, ''),
(80, 'bibles', 'publication', '', 'sainte-bible', 'La <strong>Sainte</strong> <strong>Bible Louïs Segond</strong> (protestante, évangélique)', '', '', '', '', '', '', '', '', 5000, 3, 0, 1, ''),
(81, 'bibles', 'publication', '', 'sainte-bible-louis-second', 'La <strong>Sainte<strong> <strong>Bible Louïs Segond</strong> (protestante, évangélique)', '', '', '(gros caractère avec dictionnaire des concordances)', '', '', '', '', '', 22000, 3, 0, 1, ''),
(82, 'NEI', 'publication', '', 'veillez-et-priez', 'Veillez et <strong>priez</strong>', '', '', 'Excellent livre de prières pour tous et pour toutes les circonstances de la vie.', '', '', '', '', '', 3500, 3, 0, 1, ''),
(83, 'texte&priere', 'publication', '', 'saint-raphael', '<strong>Saint Raphaël</strong>', '', '', 'Médecin de Dieu. Guérisseur de tous les malades. Guide les gestes incertains de notre vie.', '', '', '', '', '71', 5500, 5, 0, 1, ''),
(84, 'texte&priere', 'publication', '', 'saint-gabriel', '<strong>Saint Gabriel</strong>', '', '', 'Veut dire: "Ma force est Dieu" ou "Puissance de Dieu". Il est lié au mystère de l&acute;incarnation de Dieu', '', '', '', '', '71', 5500, 5, 0, 1, ''),
(85, 'texte&priere', 'publication', '', 'saint-benoit', '<strong>Saint Benoît</strong>', '', '', '"Au commencement d&acute;un nouveau siècle et d&acute;un nouveau millénaire, il est opportun de se souvenir de Saint-Benoît, d&acute;écouter à nouveau ses enseignements, d&acute;avoir recours à son intercession très puissante." Don Antoine Forgeot.', '', '', '', '', '59', 5500, 5, 0, 1, ''),
(86, 'texte&priere', 'publication', '', 'saint-ange-gardien', 'L''<strong>ange gardien</strong>', '', '', '"Quand un esprit se rend invisiblement présent, le corps ressent de la crainte; mais en présence d&acute;un Ange, l&acute;âme des humbles est remplies de joie. Aussi, quand nous reconnaissons cette présence à l&acute;effet qu&acute;elle produit, hâtons-nous de prier parceque notre bon gardien veut se joindre à notre prière." Saint Jean Climaque', '', '', '', '', '71', 5500, 5, 0, 1, ''),
(87, 'texte&priere', 'publication', '', 'saint-st-michel', 'La dévotion à <strong>SAINT MICHEL</strong> et aux <strong>ANGES</strong>', '', '', 'Veut dire : "Qui est comme Dieu". Il est le chef des armées celestes et le plus puissant des <strong>Anges</strong>', '', '', '', '', '71', 5500, 5, 0, 1, ''),
(88, 'texte&priere', 'publication', '', 'saint-sacrementL', 'Le <strong>saint</strong> sacrement', '', '', '''C''est pour être hostie vivante que Notre <strong>Seigneur</strong> est venue habiter notre coeur.''<i>Mère Marie-Thérèse Dubouché</i><br/>''La chair immaculée de <strong>Jésus-Christ</strong>, l''Agneau sans tâche, devient le remède de ceux que le fruit défendu avait rendus malades et qui avaient perdus l''éternelle et immarcescible couronne.''<i><strong>Saint</strong> Thomas d''Aquin</i>', '', '', '', '', '55', 5500, 5, 0, 1, ''),
(89, 'texte&priere', 'publication', '', 'precieux-sang', 'Le précieux sang', '', '', '''Oui, Je suis l''Amour ! Je suis le Fils de la Vierge Immaculée, Je suis l''époux des vierges, la force des faibles, la lumière des âmes, leur vie, leur récompense et leur fin ! Mon Sang efface tous leurs péchés, car Je suis leur réparateur et leur rédempteur !''<br/><i><strong>Jésus</strong> à soeur Josefa Menéndez, 13/11/1923</i>', '', '', '', '', '47', 5500, 5, 0, 1, ''),
(90, 'divers', 'publication', 'Père Jean DEROBERT', 'chevalier-de-dieu', '<strong>Saint Michel</strong>, Chevalier de <strong>Dieu</strong>', '', '', '''...C''est lui qui refoule au fond des enfers l''horrible tête du Dragon, et qui, du haut du ciel, foudroie les rebelles et leur chef.<br/>Marchons, à la suite de notre Prince, contre chefs orgeuilleux, afin que, du trône de l''Agneau, nous recevions la couronne de la victoire...''<br/><i>Hymne à <strong>Saint Michel</strong></i>', '', '', '', '', '40', 5000, 2, 0, 1, ''),
(91, 'divers', 'publication', 'Stormie ORMATIAN', 'priere-epouse-efficace', 'La <strong>Prière</strong> d''une épouse est efficace', '', '', 'S''inquiéter pour votre mariage ne change rien...<strong>Prier</strong> pour votre mariage peut tout changer.<br/>Les défis et les pressions aujourd''hui peuvent nous poter à croire qu''un mariage heureux et épanouï est un rêve impossible. Mais <strong>Dieu</strong> prend plaisir à faire ce qui est impossible... pour autant que nous le lui demandions !<br/><br/><a href='''' target=''_blank''>Stormie OMARTIAN</a> partagent comment <strong>Dieu</strong> a fortifié son propre mariage dès lors qu''elle s''est mise à <strong>prier</strong> pour son mari concernant certains domaines clé de sa vie, tels que...<ul><li>sa marche spirituelle</li><li>ses émotions</li><li>son rôle en tant que père, leader, et décideur</li><li>sa sécurité au travail et dans les finances</li><li>sa santé et sa potection physique</li><li>sa foi et son avenir</li></ul>Toute femme aspirant à une relation plus intime avec son mari appréciera ce regard rafraîchissant sur les puissances de la <strong>prière</strong> dans le mariage. Stormie partage des expériences vécues ainsi que des exemples de <strong>prière</strong> et ''d''outils efficaces'', c''est à dire des versets qui inspirent et encouragent. C''est ainsi qu''elle invite les épouses à se reposer dans l''assurance qu''apportent les puissantes promesses divines de restauration, de renouveau et de croissance dans le mariage. Stormie Ormatian est l''auteur de ''La <strong>prière</strong> des parents est efficace''.', '', '', '', '', '206', 7500, 2, 0, 1, ''),
(92, 'divers', 'publication', 'Gary Chapman', 'avant-me-marier', 'Ce que j''aurais aimé savoir avant de me marier', '', '', 'Saviez-vous que le fait d''être amoureux ne suffit pas pour construire un mariage heureux ? Que l''amour comporte deux étapes et qu''il faut savoir passer de l''une à l''autre ? Que le proverbe ''Telle mère, telle fille; tel père tel fils'' n''est pas un mythe ? Qu''en vous mariant, vous épouserez non seulement la personne que vous aimez mais aussi sa famille ?<br>Que vous soyez célibataire ou que vous envisagiez le mariage, ce livre vous aidera à réfléchir à différentes question qu''il vaut mieux se poser avant. Et pour ceux qui se sont déjà dit ''oui'', il sera une bonne occasion de ''faire le ppoint'' !<br/>Un ouvrage à lire, à offrir et à mettre en pratique dès aujourd''hui!', '', '', '', '', '159', 6000, 2, 0, 1, ''),
(93, 'divers', 'publication', 'Gary Chapman', 'language-amour-dieu', 'Les langages d''<strong>Amour</strong> de <strong>Dieu</strong>', '', '', 'Le docteur Gary Chapman explore depuis longtemps nos différentes façons de communiquer et de percevoir l''amour:<ul><li>Les paroles valorisantes,</li><li>Les moments de qualité,</li><li>les cadeaux,</li><li>les services rendus</li><li>le toucher physique</li></ul>Dans cet ouvrage unique, il nous invite à découvrir notre langage d''amour dominant afin de nous épanouir dans un contexte des plus important: notre relation avec <strong>Dieu</strong><br/>Au travers de son vécu, des expériences de personnes venues le consulter ou d''exemples tirés de la <strong>Bible</strong>, l''auteur montre comment <strong>Dieu</strong> vient à la rencontre de chacun en ''parlant'' le langage d''amour qui lui est propre. Ce livre original aidera tout lecteur à se rapporcher de <strong>Dieu</strong>, à se sentir aimé de Lui et de développer une vie émotionnellement riche.', '', '', '', '', '200', 5500, 2, 0, 1, ''),
(94, 'divers', 'publication', 'Rick WARREN', 'vie-motivee-par-essentiel', 'Une vie mitovée par l''essentiel<br/>Pourquoi suis-je sur Terre ?', '', '', 'Quel est le sens de notre vie ? <strong>Dieu</strong> aurait-il des projets pour nous, pour notre vie et pour l''éternité ?<br/>Pendant 40 jours et autant de chapitres quotidiens, l''auteur Rick Warren propose de partir à la découverte du sens de la vie. ''Pourquoi suis-je sur Terre ?'': la réponse à cette question permet de vivre l''essentiel, d''affronter la vie avec sérénité, et de se préparer pour l''éternité.', '', '', '', '', '350', 5500, 2, 0, 1, ''),
(95, 'divers', 'publication', 'Evelyn CHISTENSON', 'quand-femme-prie', 'Quand les femmes prient...<br/>il se passe toujours quelque chose', '', '', 'Quand les femmes <strong>prient</strong>... est un livre pratique et biblique sur la <strong>prière</strong>. L''enseignement qu''il contient a été éprouvé lors de centaines de séminaires sur la <strong>prière</strong> de par le monde entier, par des femmes qui ont ainsi appris à <strong>prier</strong> de façon plus personnelle et plus efficace.<br/>L''auteur sait mieux que quiconque exprimer ce que ressentent et vivent les femmes. Elle sait aussi démontrer comment leur vie et leur intercession ont un impact puissant.<br/>Quand les femmes <strong>prient</strong>... vous montrera comment entrer dans la dynamique qui intervient lorsque quelqu''un <strong>prie</strong>. Ce livre pourrait bien changer votre vie personnelle, mais aussi votre famille et votre église.', '', '', '', '', '189', 6500, 2, 0, 1, ''),
(96, 'divers', 'publication', 'Evelyn CHISTENSON', 'dieu-fait-femme-prient', 'Ce que <strong>Dieu</strong> fait quand les femmes <strong>prient</strong>', '', '', '''Que se passe-t-il quand les femmes <strong>prient</strong> ?''<br/>Au fil des pages, l''auteur répond à cette question. Il ne s''agit ni de théorie ni de recette miracle.<br/>Après avoir noté miraculeusement les exaucements de <strong>Dieu</strong> à la <strong>prière</strong> pendant trois décennies, cette femme très appréciée comme leader dans le ministère auprès des femmes, sait de quoi elle parle en matière de réponse à la <strong>prière</strong> des femmes. L''auteur retrace son propre pélérinage et nous lance un défi à travers les leçons et les victoires remportées par ces femmes qui on prié.', '', '', '', '', '253', 6500, 2, 0, 1, ''),
(97, 'divers', 'publication', 'Patricia WILSON', '52-prieres-femme-active', '52 <strong>prières</strong> pour femmes actives', '', '', 'Aujourd''hui, la femme active est très sollicité. Partagée entre vie professionnelle et familiale, elle assume de multiples responsabilités et gère des emplois du temps particulièrement remplis.<br/>Malgré toutes ces sollicitations, elles aspirent à vivre des moments d''intimité avec <strong>Dieu</strong>, pour entendre Sa voix et renouveler sa foi. Comment trouvera-t-elle le temps de se ressourcer spirituellement ?<br/><i>52 <strong>prières</strong> pour les femmes actives</i> est une réponse appropriée à ce besoin de rencontrer <strong>Dieu</strong> au coeur d''une vie trépidante. Chaque prière est conçue comme une pause de cinq minutes : elle débute par un verset extrait du livre des Psaumes et se conclut par une parole de <strong>Jésus</strong>.<br/>Ces prières ont pour thème :<ul><li>la vie quotidienne : travail, vie de couple, vie de famille.</li><li>les circonstances difficiles : fatique, stress, découragement, maladie, doute.</li><li>les occasions spéciales : anniversaire, nouvel an, Pâques...</li></ul>', '', '', '', '', '129', 4000, 2, 0, 1, ''),
(98, 'divers', 'publication', 'Germaine COPELAND', 'priere-revolutionne-vie-femme', 'La <strong>prière</strong> qui révolutionne la vie des femmes', '', '', 'Les femmes, plus que d''autres peut être, ont besoin de <strong>prier</strong> de manière efficace! Avec toutes les charges qui pèsent aujourd''hui sur elles - dans leur foyer ou dans leur profession, dans leur célibat ou en tant qu''épouse, dans leur ministère ou en famille - elles ont besoin de la puissance de la <strong>prière</strong> pour tenir bon et les aider à faire face à toutes leurs obligations.<br/>Ce livre propose des prières spécifiques traitant des questions auxquelles les femmes d''aujourd''hui sont confrontées au quotidien. Basées sur les &Eacute;critures, elles permettront de libérer la puissance de <strong>Dieu</strong> et de changer l''adversité en triomphe !<br/>Apprenez à vous saisir des clés que <strong>Dieu</strong> met à votre disposition pour remporter d''éclatantes victoires dans tous les domaines de votre vie. Prenez le temps de prier et vous ne tarderez pas à en voir les effets.', '', '', '', '', '201', 7500, 2, 0, 1, ''),
(99, 'divers', 'publication', 'Merlin CAROTHERS', 'reponse-ala-louange', 'Réponse à la <strong>louange</strong>', '', '', '''Réponse à la Louange'' fait suite aux livres ''De la prison à la <strong>louange</strong>'' et ''Puissance de la <strong>louange</strong>'' du même auteur.<br/>Merlin Carothers a reçu beaucoup de lettres de personnes qui ont expérimenté la puissance de la louange. Afin de pouvoir partager leurs témoignages, l''auteur a décidé d''éditer ces lettres accompagnées de réponses bibliques percutantes.', '', '', '', '', '142', 5500, 2, 0, 1, ''),
(100, 'divers', 'publication', 'Merlin CAROTHERS', 'puissance-dela-louange', 'Puissance de la <strong>louange</strong>', '', '', '''Puissance de la Louange'' fait suite à ''De la Prison à la Louange'': de nouvelles applications spirituelles et pratiques, de nouvelles expériences , de nouvelles dimensions de cette vie de louange.<br/> C''est de l''authentique, du ''vécu'', mais présenté de telle façon que le lecteur est mis en mesure d''entrer lui aussi dans ce même monde d''expériences miraculeuses.<br/>Ce livre applique courageusement le principe de la reconnaissance déterminée et de la louange à <strong>Dieu</strong> en toutes circonstances. Il nous introduit parfois dans des situations de vie d''un réalisme tragique. nous prions le lecteur qui se choquerait de surmonter cette première réaction plus ou moins instinctive et de reprendre la question à la lumière de la <strong>révélation</strong> <strong>biblique</strong> Nous l''invitons à réagir, non plus en fonction des réflexes naturels ou d''habitudes humaines de pensée, mais en fonction de cette sagesse supérieure, de ces critères divins d''estimation que nous fait découvrir la <strong>Parole de Dieu</strong> illuminée par l<strong>''Esprit-Saint</strong>.', '', '', '', '', '221', 5500, 2, 0, 1, ''),
(101, 'divers', 'publication', 'Père Pietro Rossi o.f.m', 'qui-est-lesprit-saint', 'Qui est l''<strong>Esprit-saint</strong>', '', '', 'Ô <strong>Saint-Esprit</strong>, <strong>Esprit</strong> de <strong>lumière</strong> et <strong>d''amour</strong>, je te consacre mon intelligence, mon coeur et ma volonté, tout mon être, pour toujours.<br/>Que mon intelligence soit toujours docile à tes inspirations et à l''<strong>enseignement</strong> de l''<strong>Eglise</strong>, toujours conforme à la <strong>volonté de Dieu</strong>.<br/>Que toute ma vie soit une imitation fidèle de la vie et des vertus de <strong>Notre Seigneur</strong> et Sauveur <strong>Jésus-Christ</strong>.<br/>&Agrave; Toi, <strong>Esprit Saint</strong>, avec le Père et le Fils, soient honneur et gloire à jamais. Amen.', '', '', '', '', '63', 2500, 2, 0, 1, ''),
(102, 'divers', 'publication', '&Eacute;dition du PARVIS', 'les-dons-du-saint-esprit', 'Les dons du <strong>Saint Esprit</strong><br/>extrait de <strong>La vrai vie en Dieu</strong>', '', '', 'Les sept dons du Saint Esprit<br/>Sagesse<br/>Intelligence<br/>Conseil<br/>Force<br/>Science<br/>piété<br/>Sainte crainte de Dieu', '', '', '', '', '47', 2000, 2, 0, 1, ''),
(103, 'divers', 'publication', 'ABB&Eacute; BERTINA', 'marthe-robin-qui-etes-vous', 'Marthe ROBIN: qui êtes-vous ?', '', '', 'C''est avec <strong>saint Padre Pio</strong> la plus grande stigmatisée de tous les temps. Durant 51 ans, elle revécut du jeudi au dimanche, l''Agonie et <strong>la Passion</strong> de <strong>Notre Seigneur</strong>. Elle ne mangeait pas, elle ne buvais pas, ne vivant que de la Communion qu''elle ne recevrait qu''une fois par semaine.<br/><br/>Et que d''oeuvres elle a accomplies ! Des écoles, des foyers de charité (Centre de retraite), créés dans le monde entier ! Que de coeurs brisés elle a pansés, que de ménages brisés elle a réunis, que d''âmes laïques ou consacrées elle a lancées à la conquête du monde.<br/><br/>Une vie extraordinaire.', '', '', '', '', '39', 4000, 2, 0, 1, ''),
(104, 'divers', 'publication', 'ABB&Eacute; Jean DEROBERT', 'les-apparitions-de-medjugorje', 'Les apparitions de <strong>MEDJUGORJE</strong>', '', '', '', '', '', '', '', '40', 4000, 2, 0, 1, ''),
(105, 'divers', 'publication', 'Dr. H. W.', 'soeur-fostine-apotre-de-la-misericorde-divine', '<strong>Soeur</strong> <strong>FAUSTINE APOTRE</strong> de la <strong>MISERICORDE DIVINE</strong>', '', '', '', '', '', '', '', '', 7500, 2, 0, 1, ''),
(106, 'divers', 'publication', 'André CASTELLA', 'recueil-de-neuvaines', 'Recueil de <strong>neuvaines</strong>', '', '', 'La <strong>neuvaine de prière</strong> est une très ancienne tradition au sein de <strong>l''Eglise</strong>. On fait une <strong>neuvaine</strong> dans l''intention d''assaillir le ciel, pendant <strong>neuf jours</strong> consécutifs, de <strong>prières d''intercession</strong> comprenant une intention considérée comme importante: maladie grave, perte récente d''un être cher, désunion dans une famille, conversion, succès d''une entreprise cruciale, etc.<br/>Le <strong>Père céleste</strong> aime couvrir ses enfants de ses bienfaits. Il exause <strong>nos prières</strong> à son heure, qui n''est pas nécessairement la nôtre, à sa manière, qui n''est pas nécessairement toujours conforme à nos intentions, mais dont nous pouvons être sûrs qu''elle concourt à notre bien. Les fruits en seront d''autant plus abondants que cette neuvaine bénéficie de l''intercession de la <strong>Bienheureuse Vierge Marie</strong>.<br/>Ce recuieil contient plus de 50 neuvaines pour toutes les <strong>grandes fêtes chrétiennes</strong>, à <strong>Jésus</strong> et <strong>Marie</strong>, aux <strong>anges</strong> et aux plus <strong>grands saints</strong>. Priées avec <strong>foi</strong>, elles nous permettront d''adresser nos demandes au Ciel dans toutes les situations de la vie. <strong>Dieu</strong> n''attend que <strong>nos prières</strong> pour nous couvrir de <strong>ses grâces</strong> et de faire de nous des <strong>chrétiens heureux</strong>.', '', '', '', '', '499', 15000, 2, 0, 1, ''),
(107, 'divers', 'publication', 'Christiane VAN DE WALLE', 'recueil-de-priere-et-de-meditation', 'Recueil de <strong>prières</strong> et de <strong>méditations</strong>', '', '', 'Appelés à vivre dans ce monde et dans ce temps, nous devons cheminer sur terre, mais en tant que citoyen des cieux, avec le coeur enraciné en <strong>Dieu</strong> par la <strong>prière</strong> et la contemplation. Cette attitude ne signifie pas fuite devant les conflits, mais condition pour un don fécond aux autres.<br/><strong>Les chrétiens</strong>, animés par ce même <strong>Esprit</strong>, sont invités à faire de la <strong>prière</strong> la source de leur vie quotidienne. Elle crée en eux un climat de <strong>louange au Seigneur</strong>, elle augmente leur <strong>foi</strong>, les fortifie dans l''espérance, les amènes à se donner à leurs frères et soeurs et à être fidèles à leur <strong>mission apostolique</strong>. Voici <strong>l''esprit</strong> de ce ''<strong>Recueil de prière</strong> et de <strong>méditations</strong>''. <strong>Les prières</strong> proposées par l''auteur... n''y sont pas présentées comme unique formule pour prier, mais comme une aide, soit dans les moments difficiles où nous ne trouvons pas de mots pour nous tourner vers <strong>Dieu</strong>, soit comme inspiration pour le faire avec nos propres paroles.<br/>J''exprime ici ma gratitude envers l''auteur de ce recueil si précieux, fruit d''une vie qui a donné une place importante à la <strong>prière</strong>.', '', '', '', '', '366', 12000, 2, 0, 1, ''),
(108, 'divers', 'publication', 'Jean PLIYA', 'prier-comme-un-enfant-de-roi', '<strong>Prier</strong> comme un enfant de Roi', '', '', 'Tu es <strong>chrétiens</strong>, tu crois que <strong>Dieu</strong> t''aime et veut te donner le bonheur par <strong>Jésus-Christ</strong>; ou tu cherches Dieu pour trouver un sens à ta vie, mais il te semble difficle de parler à un <strong>Dieu</strong> que tu ne vois pas et qui te parait lointain, indifférent. Tu te révoltes même contre lui à cause du mal et de la souffrane, que tu juges incompatibles avec l''idée d''un <strong>Père</strong> juste bon.<br/>Ou bien tu prie habituellement, mais ta <strong>prière</strong> est parasitée par des distractions, banalisée par la routine et l''ennui et tu crois que <strong>Dieu</strong> ne t''exauce pas ou ne te parle pas.<br/>Devant cet échec relatif, tu te décourahes et tu es peut être tenté de renoncer à la <strong>prière</strong> ou de chercher du secours dans l''occultisme, l''ésotérisme ou dans les sectes, pour avoir la santé =, le succès, l''équilibre psycho-affectif.<br/>Ce livre, véritable <strong>témoignage sur la prière</strong>, te montrera comment adorer et faire oraison, comment pardonner, échapper aux pièges du diable, triompher dans les épreuves de la vie avec la <strong>force du ''Dieu</strong> qui a tout fait pour toi''.<br/><i>Prier comme un enfant de Roi</i> est devenu, en quelques années, un immense succès parce qu''il a comblé l''attente de dizaines de milliers de <strong>chrétiens</strong> qui cherchaient un moyen de prier de façon simple, vivante, concrète et profondément <strong>biblique</strong>. <strong>La grâce de Dieu</strong> s''en est servi pour toucher, convertir, délivrer des gens et les enraciner dans une prière régulière. Cette nouvelle édition s''est enrichie pour mieux libérer le souffle de l''Esprit.', '', '', '', '', '216', 5000, 2, 0, 1, ''),
(109, 'divers', 'publication', 'Mgr ALDO Gregori', 'la-venue-intermediaire-de-jesus', 'La venue intermédiaire de <strong>Jésus</strong>', '', '', '', '', '', '', '', '155', 8000, 2, 0, 1, ''),
(110, 'divers', 'publication', 'Mgr TOURNYOL du Clos', 'pour-se-defendre-du-malin', 'Un prêtre exorciste<br/>Pour se défendre du Malin', '', '', '''Ce dont l''Eglise a besoin en priorité aujourd''hui, c''est de se défendre de démon'', déclarait le pape Paul VI l''audience générale du 15 Novembre 1972. Et Jean-Paul II: ''Le mal, l''incohérence de l''homme, la fracture intérieure dont il est victime ne sont pas seulement des conséquences du péché originel, mais aussi l''effet de l''action dévastatrice et obscure de Satan.'' (Mont Gargan, 24 mai 1987).Mis à part ceux qui leur rendent un culte, qui croit encore à l''existence personnelle de Lucifer ou de Satan ?S''appuyant sur son expérience d''exorciste, l''auteur éclaire avec bonheur et simplicité les questions que se posent de nos jours un nombre grandissant d''hommes et de femmes: ''Comment s''introduit le démon ? Quels signes indiquent sa présence ? et surtout: comment s''en défaire ?''', '', '', '', '', '254', 16000, 2, 0, 1, ''),
(111, 'divers', 'publication', 'Jean PLIYA', 'des-tenebres-a-la-lumiere', 'DES TENEBRES A LA LUMIERE...<br/>Osez prier pour la délivrance', '', '', 'La portée de l''ouvrage dépasse le cadre spécifique du combat spirituel et touche l''accompagnement qui conduit à la guérison intérieure, à la libération des personnes en détresse. Des suggestions pratiques de prières animées d''un souffle charismatique aideront certainement tous ceux, laïcs ou prêtres, qui s''impliquent dans ce ministère.<br/>Puisse l''Esprit Saint se servir de ce livre pour ''porter la Bonne Nouvelle aux pauvres, annoncer aux captifs la délivrance, aux aveugles le retour à la vue et rendre la liberté aux opprimés.''', '', '', '', '', '364', 16500, 2, 0, 1, ''),
(112, 'divers', 'publication', 'Jean-Marie Mathiot', 'vue-du-ciel', 'Vues du ciel<br/>Prophéties pour aujourd''hui et demain', '', '', 'Dans la situation mondiale actuelle, au milieu de mutations inquiétantes, l''insécurité se fait croissante à tous les plans. La paix sur la Terre est de plus en plus précaire. Les grandes nations font de la corde raide pour conserver la paix, des peuples entiers sont traversés par de profondes crises et vagues révolutionnaires, des conflits n''en finissent pas; on craint des catastrophes incontrôlables.<br/><br/>Cet ouvrage est comme une anthologie des prophéties du Christ, des ap^ôtres, des saints et des mystiques révélant ce qui s''en vient pour l''Eglise et l''Humanité.<br/>Voici les 22 plus importantes prophéties relevées dans le Nouveau Testament (celles de Jésus et des apôtres, dont celle de l''Apocalypse), et les 20 du Magistère de l''Eglise au XXè siècle. Puis 70 prophéties privées qui ont été sélectionnées pour cet ouvrage sur 147 répertoriées qui s''étalent sur plus de 20 siècles. Quasiment toutes se rattachent à celles de la Bible et à celles daites par le Christ et ses apôtres qui en donnent la lumière principale; elles les précisent, les développent et apportent bien des éclairages.<br/>Une grande espérance est devant nous, avec l''avènement final du retour du Christ qui est ''aux portes'' et qui signera la fin d''un monde sans Dieu et l''inauguration d''une nouvelle ère avec Dieu.', '', '', '', '', '238', 15000, 2, 0, 1, ''),
(113, 'divers', 'publication', 'René LEJEUNE', '365-jours-ange-gardien', '365 jours avec mon ange gardien', '', '', 'Ces messages d''un ange gardien doivent être lus et médités un à un. Un par jour. Ils sont ''inspirés''. Leur formulation s''est faite sans peine. Celui à qui ils ont été comme ''dictés'' est un simple exécutant.<br/>Ton ange gardien voit sans cesse la Face de Dieu (voir mt 18,10). Et, en même temps, il t''assiste, jour et nuit, depuis ta naissance jusqu''à ton passage dans l''au-delà; il sera à tes côtés au Jugement dernier? C''est ton compagnon d''éternité.<br/>Il porte un nom. Il t''aime; il se réjouit avec toi; il pleure quand tu pleures. Il verse des larmes quand tu te mets à l''écoute du ''père du mensonge, meurtrier de l''homme depuis le commencement'' (jn 8,44). Il est débordant de joie chauqe fois que tu fais un effort qui accroît ta ressemblance avec Jésus, ''doux et humble de coeur'' (mt 11,29); chaque fois que tu vis l''amour comme l''apôtre Paul l''évoque (1 Co 13).<br/>Ces messages renvoient l''écho de l''Evangile, la Bonne Nouvelle annoncée aux hommes par Jésus-Christ. Ou encore, ils sont le reflet de la vie sur terre du Fils de Dieu.''', '', '', '', '', '190', 9000, 2, 0, 1, ''),
(114, 'divers', 'publication', 'René LEJEUNE', '10-questions-sur-le-purgatoire', '10 questions sur les âmes du purgatoire', '', '', 'Un petit livret fort précieux qui rappelle la doctrine de l''Eglise sur le Purgatoire et dévoile des confidences du Ciel à des saints et à des âmes privilégiées.<br/>Il contient également des prières pour les saintes âmes du purgatoire, et une neuvaine en leur faveur.<br/>Il faut revenir en force à ces prières négligées depuis une trentaine d''années: elles ont traversé les siècles et prouvé leur extraordinaire fécondité, pour ces âmes comme pour nous-même.', '', '', '', '', '43', 2500, 2, 0, 1, '');
INSERT INTO `articles` (`id_produits`, `nom`, `user_name`, `auteur`, `img`, `fr`, `en`, `es`, `fr1`, `en1`, `es1`, `taille`, `materiaux`, `autre`, `prix`, `stock`, `vendus`, `actif`, `code`) VALUES
(115, 'divers', 'publication', 'Patrizia CATTANEO', 'comment-defendre-diable-sorcellerie', 'Comment se défendre du Diable, de la sorcellerie et couper les liens ?', '', '', 'A l''occasion de pélerinages de guérison et de délivrance qu''elle organise en Italie, Patrizia Cattaneo a eu de nombreuses occassions d''interroger des exorcistes. Elles s''est surtout mise à l''école du doyen d''entre eux, le Père capucin Cipriano de Meo, qui a derrière lui une expérience d''exorciste de soixante ans et représente une autorité indiscutable.<br/>Ceux qui s''interrogent sur le diable et la sorcellerie trouveront dans ce livre des réponses précises à des questions telles que: qui est le diable, ses armes, la possession, la science et la psychatrie, les sorciers et les envoûtements, la musique satanique ou les infestations.<br/>Ils y découvriront aussi les secours à notre disposition: exorcisme, coupure des liens, prières, aides à la délivrance.<br/>Des témoignages de saints complètent cet ouvrage clair, qui dissipera l''ignorance et la peur qui règnent autour du Malin, lequel ne peut rien faire sans la permission de Dieu et redoute la puissance du Christ dans son Eglise.', '', '', '', '', '199', 13000, 2, 0, 1, ''),
(116, 'divers', 'publication', 'Augustine Madonda fsp', 'une-heure-avec-jesus', 'Une heure avec Jésus', '', '', 'Ne craignez point<br/>Je suis avec vous<br/>D''ici je veux éclairer<br/>Vivez dans la conversion continuelle', '', '', '', '', '103', 2000, 2, 0, 1, ''),
(117, 'divers', 'publication', 'Jean-Paul DUFOUR', 'jesus-noous-apprend-a-prier', 'Jésus nous apprend à prier', '', '', 'Jésus, dans ce livre qui a reçu l''imprimatur de l''Eglise, nous donne des instructions simples et profondes sur le prière. Ces enseignements ont été donnés à une âme, mais ils s''adressent à nous tous qui cherchons à connaître et trouver Dieu.<br/>''L''oraison est une élévation de l''âme et du coeur vers Dieu... pour remercier Dieu de tout ce qu''Il donne continuellement à chacun et pour nouer avec Lui des liens d''une amitié spirituelle toujours plus forte. Prier est important comme l''air est important pour la respiration de l''âme, elle est l''oxygène qui alimente la vie spirituelle.''<br/>Mettons-nous donc à l''école de Notre Seigneur qui nous dit:''Je suis le chemin, la vérité et la vie'' et cherchons à demeurer dès à présent dans l''Amour, lui qui veut notre bonheur.', '', '', '', '', '164', 2500, 2, 0, 1, ''),
(118, 'divers', 'publication', 'Père Jean DEROBERT', 'padre-pio-temoin-de-dieu', 'Padre Pio, témoin de Dieu', '', '', 'L''Auteur, fils spirituel du stigmatisé du Gargarno, veut nous faire profiter des conseils que ce grand maître de la spiritualité lui a prodigués. Il nous livre de nombreuses anecdotes qui nous feront tour à tour sourire ou pleurer.<br/>Par l''authenticité de son récit, il nous confirmme que ce grand ami de Dieu peut nous obtenir ce dont le monde et nous-mêmes avons tant besoin : la pénitence et l''amour de Dieu.<br/>La plaquette se termine par une évocation de ''la Messe, Passion du Seigneur'', qui nous fera comprendre comment Padre Pio célèbrait l''Eucharistie, comment il vivait sa Messe... et comment nous devons, nous aussi la vivre.<br/>Une plaquette d''une grande utilité.', '', '', '', '', '40', 4500, 2, 0, 1, ''),
(119, 'divers', 'publication', 'Père Jean DEROBERT', 'la-rose-de-padre-pio', 'La rose de Padre Pio', '', '', 'Le 20 septembre 1968, trois jours avant sa mort, on avait célébré dans la joie, le cinquantième anniversaire de la stigmatisation de Padre Pio. Cinquante vases de roses rouges symbolisaient les cinquante années de souffrances et de sang. De sa main bléssée, le père prit l''une des roses rouges et la confia à l''un de ses fils spirituels qui repartait pour Naples, en lui demandant de la porter au sanctuaire de Pompéi et de la placer devant le tableau de la Vierge du Rosaire.<br/>La rose ne se flétrit pas...Le 23 septembre jour de la mort de Padre Pio, l''évêque-prélat de Pompéi voyant que cette rose était encore fraîche et qu''elle avait un parfum exquis, la fit déposer parmi les souvenirs les plus précieux du sanctuaire.', '', '', '', '', '40', 5000, 2, 0, 1, ''),
(120, 'divers', 'publication', 'Raymond Peyret', 'prend-ma-vie-seigneur', 'Prends ma vie Seigneur', '', '', 'Le livre a connu un succès extraordinaire : plus de cinquante mille exemplaires ont été vendus, huit traductions ont vu le jour, trois autres sont en préparation.<br/>Dans ce nouvel ouvrage ''PRENDS MA VIE SEIGNEUR : LA LONGUE MESSE DE MARTHE ROBIN'', Raymond Peyret présente l''itinéraire spirituel de Marthe. Sa vie se déroule comme une messe qui a son chant d''entrée dans la vie, joyeux, puis tourmenté, et son écoute de la parole de Dieu. Elle a son offrande tragique et sa communion avec le ciel. Elle se prolonge par un envoi en mission d''une étonnante fécondité, qui se poursuit présentement.<br/>''PRENDS MA VIE SEIGNEUR'', le livre qui était attendu par tous les lecteurs de ''LA CROIX ET LA JOIE''', '', '', '', '', '264', 9500, 2, 0, 1, ''),
(121, 'divers', 'publication', 'Bernard BALAYN', 'le-cure-d-ars', 'Le curé d''Ars et l''Eucharistie', '', '', 'Cet ouvrage révèle le génie spirituel du saint Curé qui a intégré admirablement dans sa vocation et son ministère les exigences du seul vrai Père, Jésus-Christ, en s''immolant totalement pour son amour et le salut des âmes, en s''immergeant si profondément dans tous les actes eucharistiques qui ont sanctifié sa paroisse, de façon à la convertir, et à évangéliser à partir d''elle tous ceux qui sont venus trouver Dieu par lui, selon la parole célèbre d''un pélerin : '' &Agrave; Ars, j''ai rencontré Jésus-Christ dans un homme.''<br/>&Agrave; l''heure où le sacerdoce souffre, Bernard Balayn démontre ainsi sans peine l''actualité et l''acuité du témoignage ardent de cet humble prêtre pétri d''amour et dévouement pour les âmes à travers le sacrement incontournable de l''Eucharistie. Plus encore, il expose l''influence considérable que, par son zèle eucharistique, Jean-Marie Vianny a eu sur l''Eglise contemporaine et sur les papes eux-mêmes, surtout Jean Paul II, le plus grand pape eucharistique de notre temps, et pourquoi il a mérité son titre de ''Patron de tous les curés (Pie XIà et de tous les prêtres du monde'' (Benoit XVI).', '', '', '', '', '173', 15000, 2, 0, 1, ''),
(122, 'divers', 'publication', 'Bernard BALAYN', 'eucharistie-vie-du-monde', 'L''Eucharistie, vie du monde', '', '', 'L''Eucharistie est à travers les épreuves du monde, l''unique source de salut, susceptible de ramener l''humanité à l''ordre voulu par Dieu, en lui insufflant la Vie de la grâce, venue du Sacrifice rédempteur du Christ, qui a dit: ''Je suis la Voie, la Vérité, la Vie... Je suis venu pour que vous ayez la Vie, et que vous l''ayiez en abondance...''<br/>&Agrave; l''aide de l''Ecriture, de l''héritage spirituel des Pères, des Papes et des Saints, l''auteur dégage les richesses incomparables de Celui qui s''est proclamé ''Pain de Vie'' et qui s''est mort pour redonner à l''homme bléssé par le Mal, la vraie Vie, c''est-à-dire le sens de son existence et l''espérance de rejoindre le ciel pour lequel il a été crée. Judicieusement préfacé par Mgr Guy Bagnard, Evêque de Belley-Ars, son livre a en outre le privilège et l''avantage de s''achever sur la synthèse du Synode eucharistique d''octobre 2006, présidé par le Pape Benoît XVI.<br/>L''Eucharistie demeure à tout jamais la Présence aimante et féconde du Christ parmi ses frères les hommes. Quiconque croit, adore, communie aux Corps et Sang du Sauveur, vit de sa Vie divine et est en passe de divinisation pour l''éternité.', '', '', '', '', '287', 15000, 2, 0, 1, ''),
(123, 'divers', 'publication', 'Jean-Marie MATHIOT', 'miracles-signes-et-prodiges', 'Miracles, signes et prodiges Eucharistiques', '', '', 'Si Jésus accomplissait des miracles durant sa vie terrestre, c''était certes parce qu''il compatissait à la douleur, à la misère de ses contemporains, mais c''était aussi pour confirmer à ses apôtres qu''il était réellement le Messie annoncé par les prophètes.<br/>De même, les nombreux prodiges eucharistiques ont pour but de confirmer, aux hommes d''aujourd''hui, la Présence réelle du Corps et du Sang de Jésus sous les espèces du pain et du vin. Tout au long des siècles, Dieu en a donné des preuves. Parmi les plus célèbres prodiges, citons ceux de Lanciano (vers l''an 800), de Mont-Cornillon de Liège (1208) qui donna naissance à l''adoration eucharistique et à la Fête-Dieu, de Douai (1254), d''Orvieto/Bolsena (1263), de Bois-Seigneur-Isaac (1405), de Faverney (1609), de Paray-le-Monial (1673), etc.<br/>Sous l''égide de l''Organisation Mondiale de la Santé, une analyse scientifique récente a démontré que la Chair du miracle de Lanciano est vraiment de la chair humaine, provenant du tissu musculaire du myocarde, que la Chair et le Sang sont exactement semblables à ceux d''une personne humaine ayant récemment existé.<br/>Devant un tel résultat, scientifiquement irréfutable, l''homme n''a plus qu''à admettre la Toute-Puissance divine et à louer et remercier le Dieu d''Amour, qui se sacrifie chaque jour sur les autels de nos églises.', '', '', '', '', '', 15000, 2, 0, 1, ''),
(124, 'divers', 'publication', 'Anne-Marie et Christian GUISLAIN', 'jusquou-va-la-miseridorde-de-dieu', 'Jusqu''où va la miséricorde de Dieu', '', '', 'Les apparitions de la Vierge Marie à Medjugorje: Comment se présente Marie à Medjugorje. Notre Evangélisatrice et Catéchiste, Celle qui prie et demande de prier, Mère très aimante et infiniment présente, Reine de la Paix qui vient en ultime recours.<br/>DOZULE - LA CROIX GLORIEUSE. l''événement et l''essentiel du Message du Christ. Extraits du journal de la voyante.<br/>LE LIEN IMPRESSIONNANT ENTRE MEDJUGORJE ET DOZULE N''EST-IL PAS UN SIGNE DU CIEL ? Les nombreux points communs à Medjugorje et Dozulé. Medjugorje fait renaître avec éclat Dozulé. Dozulé explique les apparitions exceptionnelles de Yougoslavie: La confession, l''Eucharistie et la croix à Medjugorje apparaissent comme un prolongement de Dozulé. L''Evéneemnt de Dozulé donne toute la lumière sur l''ampleur et le caractère unique de Medjugorje.', '', '', '', '', '104', 9000, 2, 0, 1, ''),
(125, 'divers', 'publication', 'Daniel J. Lynch', 'dame-guadeloupe-image-missionaire', 'Notre Dame de Guadeloupe et son image missionnaire', '', '', 'Ce livre rapporte la fin des sacrifices humains et la conversion de millions d''âmes dans l''empire aztèque du seizième siècle, par la conquête de Cortez et les apparitions de notre Dame de Guadeloupe. Il explique la signification de l''Image miraculeuse sur la tilma (manteauà de Juan Diego, du point de vue scientifique, des Aztèques et des saintes Ecritures. Il rapporte les nmbreux signes, grâces et conversions et la dévotion des fidèles et des papes.<br/>Notre Dame de Guadeloupe visite notre monde padre-païen aujourd''hui dans son Image missionaire, pour mettre fin aux sacrifices humains par l''avortement et pour convertir les âmes. L''Image missionaire nous est expliqués, via ses origines, ses visites, ses signes, ses grâces et ses conversions. Les récentes requêtes de Notre Dame de Guadeloupe sont présentées accompées d''un appel à nous joindre à elle par notre consécration totale afin que nous marchions ensemble sous sa bannière, alors que nous nous engageons dans la bataille qpirituelle qui mettra fin aux avortements et qui apportera des millions de conversions.', '', '', '', '', '217', 12000, 2, 0, 1, ''),
(126, 'divers', 'objet', '', 'pierre-noire', 'Pierre noire', '', '', '', '', '', '', '', '', 1000, 10, 0, 1, ''),
(127, 'encens', 'objet', '', 'saint-jean-geranium', '<strong>Saint Jean</strong> au <b>Geranium</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(128, 'encens', 'objet', '', 'saint-expedito-jasmin', 'Encens <strong>Saint</strong> Expedito au <b>Jasmin</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(129, 'encens', 'objet', '', 'sainte-therese-jesus-fleur-oranger', '<strong>Sainte thérèse</strong> de <strong>Jésus<§strong> à la <b>Fleur d''oranger</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(130, 'encens', 'objet', '', 'saint-pedro-jacinthe', '<strong>Saint</strong> Pédro à la <b>Jacinthe</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(131, 'encens', 'objet', '', 'sainte-rita-mugue', '<strong>Saint Rita<§strong> au <b>Muguet</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(132, 'encens', 'objet', '', 'saint-francois-assise-eucalyptus', '<strong>Saint François</strong> d''Assise à <b>l''''Eucalyptus</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(133, 'encens', 'objet', '', 'marie-auxiliadora-jasmin', 'Maria Auxiliadora au <b>Jasmin</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(134, 'encens', 'objet', '', 'saint-raphael-archange-myrrhe', '<strong>Encens</strong> bâton : <strong>Saint Raphaël</strong> <strong>archange</strong> à la <b>Myrrhe</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 1, ''),
(135, 'encens', 'objet', '', 'saint-michel-archange-encens-naturel', '<strong>Encens</strong> bâton : <strong>Saint Michel</strong> <strong>archange</strong> à <b>l''Encens Naturel</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 1, ''),
(136, 'encens', 'objet', '', 'saint-gabriel-archange-oeillet', '<strong>Encens</strong> bâton : <strong>Saint Gabriel<strong> <strong>archange<strong> à <b>l''Oeillet</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 1, ''),
(137, 'encens', 'objet', '', 'ange-guerison-lavande', 'L''<strong>ange</strong> de la guérison à la <b>Lavande</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(138, 'encens', 'objet', '', 'sainte-mere-lourdes-muguet', '<strong>Encens</strong> bâton : <strong>Sainte mère de Lourdes</strong> au <b>Muguet</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 1, ''),
(139, 'encens', 'objet', '', 'sainte-mere-du-perpetuel-secours-citron', '<strong>Sainte mère du pertpétuel secours</strong> au <b>Citron</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(140, 'encens', 'objet', '', 'sainte-mere-de-fatima-rose', '<strong>Sainte mère de Fatima</strong> à la <b>Rose</b>', '', '', '', '', '', '', '', '', 2500, 10, 0, 0, ''),
(141, 'encens', 'objet', '', 'encens-jerusalem', '<strong>Encens</strong> poudre : <strong>Jérusalem</strong>', '', '', '', '', '', '', '', '', 500, 10, 0, 1, ''),
(142, 'encens', 'objet', '', 'encens-pontfical', '<strong>Encens</strong> poudre : <strong>Pontifical</strong>', '', '', '', '', '', '', '', '', 500, 10, 0, 1, ''),
(143, 'encens', 'objet', '', 'encens-st-michel', '<strong>Encens</strong> poudre :  <strong>Saint-Michel</strong>', '', '', '', '', '', '', '', '', 500, 10, 0, 1, ''),
(144, 'croixm', 'objet', '', 'crucifix-bois', '<strong>Crucifix</strong> en bois', '', '', '', '', '', '', '', '', 600, 10, 0, 1, ''),
(145, 'croixp', 'objet', '', 'crucifix-bois-posee', '<strong>Crucifix en bois</strong> posée', '', '', '', '', '', '', '', '', 1000, 10, 0, 1, ''),
(146, 'croixm', 'objet', '', 'crucifix-bronze', '<strong>Crucifix</strong> en bronze', '', '', '', '', '', '', '', '', 35000, 2, 0, 1, ''),
(147, 'croixm', 'objet', '', 'croix-lumiseuse', '<strong>Croix mur</strong><br/>resine : lumineuse', '', '', '', '', '', '20cm/10cm', '', '', 2000, 10, 0, 1, ''),
(148, 'croixm', 'objet', '', 'croix-st-benoit-lumiseuse', '<strong>Croix mur</strong> de <strong>Saint Benoit</strong><br/>resine : lumineuse', '', '', '', '', '', '15cm/9cm', '', '', 5000, 10, 0, 1, ''),
(149, 'croixm', 'objet', '', 'croix-st-benoit-bois', '<strong>Croix mur</strong> de <strong>Saint Benoit</strong><br/>en bois', '', '', '', '', '', '20cm/10cm', '', '', 25000, 10, 0, 1, ''),
(150, 'croixm', 'objet', '', 'croix-st-benoit', '<strong>Croix mur</strong> de <strong>Saint Benoit</strong><br/>en metal', '', '', '', '', '', '', '', '', 3000, 10, 0, 1, ''),
(151, 'croixp', 'objet', '', 'croix-posee-st-benoit-lumineuse', '<strong>Croix posée</strong> <br/>resine : lumineuse', '', '', '', '', '', '22cm/11cm', '', '', 9000, 10, 0, 1, ''),
(152, 'croixp', 'objet', '', 'croix-posee-st-benoit', '<strong>Croix posée</strong> de <strong>Saint Benoit</strong>', '', '', '', '', '', '', '', '', 3500, 10, 0, 1, ''),
(153, 'croixp', 'objet', '', 'croix-posee-st-benoit-bleu', '<strong>Croix posée<strong> de <strong>Saint Benoit</strong>', '', '', '', '', '', '', '', '', 2000, 10, 0, 0, ''),
(154, 'croixm', 'objet', '', 'croix-st-esprit', '<strong>Croix</strong> du <strong>Saint-Esprit</strong>', '', '', '', '', '', '18cm/9cm', '', '', 18000, 10, 0, 1, ''),
(155, 'croixm', 'objet', '', 'croix-eucharistie', '<strong>Croix</strong> de l''<strong>Eucharistie</strong>', '', '', '', '', '', '18cm/9cm', '', '', 18000, 10, 0, 1, ''),
(156, 'croix', 'objet', '', 'st-benoit-beige', '<strong>Croix</strong> de <strong>Saint Benoit</strong>', '', '', '', '', '', '', '', '', 3000, 10, 0, 0, ''),
(157, 'croix', 'objet', '', 'st-benoit-bois', '<strong>Croix</strong> de <strong>Saint Benoit</strong>', '', '', '', '', '', '', '', '', 2000, 10, 0, 0, ''),
(158, 'chapelet', 'objet', '', 'chapelet-gregoire', '<strong>Chapelet</strong> du <strong>Pape Saint Grégoire</strong>', '', '', 'Le <strong>chapelet</strong> du <strong>Pape St Grégoire</strong> a été révélé au St père pour la délivrance massive et assurée des <strong>âmes du purgatoire</strong>. Il consiste à dire 75 Pater et <strong>Ave</strong> pendant 7 jours d''affilé accompagnés de 7 aumônes par jour pendant 7 jours.<br/>Il se dit ainsi:<br/><ul><li>Sur le <strong>crucifix</strong>: <ul><li>le credo.</li></ul></li>	<li>1er grain:<ul><li><strong>Père éternel</strong>, je t''offre le Corps et le Sang, l''Âme et la Divinité de ton Fils bien-aimé, notre <strong>Seigneur Jésus-Christ</strong>, en réparation de nos péchés et de ceux du monde entier</li></ul></li>	<li>Les deux grains blancs :<ul><li><strong>Notre père</strong>, qui ête au cieux....</li><li>Je vous salut <strong>Marie</strong>,....</li></ul></li><li>Sur le grain rouge:<ul><li><strong>Gloire au Père</strong>,....</li></ul></li></ul> et ainsi de suite jusqu''à la fin du <strong>chapelet</strong>.<br/>&Agrave, dire pendant 7 jours.', '', '', '', '', '', 2000, 10, 0, 0, ''),
(159, 'chapelet', 'objet', '', 'chapelet-saint-esprit', '<strong>Chapelet</strong> du <strong>Saint-Esprit</strong>', '', '', 'Il consiste à dire :<br/>V: Viens <strong>Saint-Esprit</strong>,<br/>R: Rempli les coeurs de tes fidèles<br/>et allume en eux le feu de ton <strong>amour</strong>.<br/>Avec le <strong>chapelet</strong> rouge à 7 grains du <strong>Saint-Esprit</strong>,il se dit ainsi:<br/><ul><li>Sur le <strong>crucifix</strong>:<ul><li><strong>Dieu</strong>, viens à mon aide.</li><li><strong>Seigneur</strong> à notre secours.</li></ul></li>	<li>Sur le premier grain:<ul><li><strong>Gloire au Père</strong> au fils et au <strong>saint-esprit</strong>....</li><li>Gloire adoration bénédiction et amour à toi....</li></ul></li>	<li>Sur les 7 grains suivants:<ul><li>Viens <strong>saint-esprit</strong>....</li></ul></li><li>Terminer par:<ul><li><strong>Gloire au Père</strong>,....</li><li>Gloire, adoration, bénédiction,....</li></ul></li></ul>Ainsi de suite jusqu''à la fin du <strong>chapelet</strong>.', '', '', '', '', '', 1000, 10, 0, 1, ''),
(160, 'chapelet', 'objet', '', 'chapelet-sauveur', '<strong>Chapelet<strong> du <strong>Saint Sauveur</strong>', '', '', '&Agrave, dire pour les situations de détresse et d''angoisse, d''attaque psychique et <strong>spirituelle</strong>, et pour les pays en guerre. <br/>Il comporte 33 grains. Il se dit ainsi:<br/><ul><li>Sur le <strong>crucifix</strong>:<ul><li><strong>Dieu</strong>, viens à mon aide.</li><li><strong>Seigneur</strong> à notre secours.</li></ul></li>	<li>Sur le gros grain:<ul><li><strong>Gloire au Père</strong>....</li></ul></li>	<li>Petits grains (en continu):<ul><li>Il n''y a de puissance que ta puissance, <strong>Seigneur Jésus</strong>! <br/>Viens me sauver <b>ou</b> Viens sauver x (dire le nom de la personne pour qui l''on prie).</li></ul></li><li>&Agrave, la fin:<ul><li><strong>Gloire au Père</strong>,....</li></ul></li></ul>', '', '', '', '', '', 2000, 10, 0, 0, ''),
(161, 'grotte', 'objet', '', 'grotte-religieuse-sur-commande', '<strong>Grotte</strong> <strong>Religieuse</strong> toutes tailles<br/>en : Pierre, Granit<br/>(<strong>sur commande</strong> : construction à domicile)', '', '', 'Nous avons un atelier d''artisans locaux pour la fabrication de grotte en ciment. Cette équipe, basé au <a href=''index.php?menu=lieu-bolobi''>Sanctuaire Notre Dame du Rosaire de Bolobi</a> produit, à l''aide de fournitures d''autres artisans des alentours, des <strong>grottes</strong> à votre domicile', '', '', '', '', '', 0, 10, 0, 1, ''),
(162, 'statue', 'objet', '', 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '<strong>Statue religieuse</strong> toutes tailles <br/>en: Plâtre, Fibro-ciment, Granit, Poudre de Marbre, Polyestère<br/>(<strong>sur commande</strong>)', '', '', 'Nous avons un atelier d''artisans locaux pour la fabrication de <strong>statues</strong> en plâtre. Cette équipe, basé au <a href=''index.php?menu=lieu-bolobi''>Sanctuaire Notre Dame du Rosaire de Bolobi</a> produit, à l''aide de fournitures d''autres artisans des alentours.', '', '', '', '', '', 0, 1, 0, 1, ''),
(163, 'statue', 'objet', '', 'statue-religieuse-polyestere-sainte-vierge-marie-notre-dame-toute-grace', '<strong>Statue</strong> <strong>Notre Dame de toute Grâce</strong><br/>en polyestère', '', '', '.', '', '', '', '', '', 25000, 10, 0, 1, ''),
(164, 'statue', 'objet', '', 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace', '<strong>Statue Notre Dame de toute Grâce</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues<§strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(165, 'statue', 'objet', '', 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace', '<strong>Statue Notre Dame de toute Grâce</strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(166, 'statue', 'objet', '', 'statue-religieuse-resine0-colore-saint-michel', '<strong>Statue</strong> <strong>Saint Michel</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(167, 'statue', 'objet', '', 'statue-religieuse-resine-colore-saint-michel', '<strong>Statue</strong> <strong>Saint Michel</strong><br/>en résine spéciale', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(168, 'statue', 'objet', '', 'statue-religieuse-resine-lumineuse-saint-michel', '<strong>Statue</strong> <strong>Saint Michel</strong><br/>en résine spéciale : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(169, 'statue', 'objet', '', 'statue-religieuse-resine0-lumineuse-saint-michel', '<strong>Statue</strong> <strong>Saint Michel</strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 2000, 10, 0, 1, ''),
(170, 'statue', 'objet', '', 'statue-religieuse-resine-colore-padre-pio', '<strong>Statue Padre Pio</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 6000, 10, 0, 1, ''),
(171, 'statue', 'objet', '', 'statue-religieuse-resine-lumineuse-padre-pio', '<strong>Statue Padre Pio</strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 50000, 10, 0, 0, ''),
(172, 'statue', 'objet', '', 'statue-religieuse-resine-colore-jesus-prague', '<strong>Statue Jésus de Prague</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '17cm', '', '', 4000, 10, 0, 1, ''),
(173, 'statue', 'objet', '', 'statue-religieuse-resine-lumineuse-jesus-prague', '<strong>Statue Jésus de Prague</strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '17cm', '', '', 4000, 10, 0, 1, ''),
(174, 'statue', 'objet', '', 'statue-religieuse-resine0-colore-saint-joseph', '<strong>Statue</strong> <strong>Saint Joseph</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '15cm', '', '', 3500, 10, 0, 1, ''),
(175, 'statue', 'objet', '', 'statue-religieuse-resine-colore-saint-joseph0', '<strong>Statue</strong> <strong>Saint Joseph</strong><br/>en résine spéciale', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '15cm', '', '', 3500, 10, 0, 1, ''),
(176, 'statue', 'objet', '', 'statue-religieuse-resine-colore-saint-joseph', '<strong>Statue</strong> <strong>Saint Joseph</strong><br/>en résine spéciale', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 4000, 10, 0, 1, ''),
(177, 'statue', 'objet', '', 'statue-religieuse-resine-lumineuse-saint-joseph', '<strong>Statue</strong> <strong>Saint Joseph</strong></strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 4000, 10, 0, 1, ''),
(178, 'statue', 'objet', '', 'statue-religieuse-resine-sainte-rita', '<strong>Statue</strong> <strong>Saint Joseph</strong></strong><br/>en résine : lumineuse', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 7000, 10, 0, 1, ''),
(179, 'statue', 'objet', '', 'statue-religieuse-resine-colore-notre-dame-victoire', '<strong>Notre Dame de la Victoire</strong><br/>en résine : coloré', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '', '', '', 50000, 10, 0, 0, ''),
(180, 'statue', 'objet', '', 'statue-religieuse-resine-rosa-mistica', '<strong>Rosa Mistica</strong><br/>(import Rome)', '', '', 'Ces <strong>statues</strong> du Nigéria sont en résine.', '', '', '50cm', '', '', 150000, 10, 0, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `user_name` varchar(20) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `texte` text NOT NULL,
  `phrase` varchar(200) DEFAULT NULL,
  `heure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(50) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `vote` text,
  `retirer` varchar(100) DEFAULT NULL,
  `retireurIP` varchar(20) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`user_name`, `titre`, `texte`, `phrase`, `heure`, `pseudo`, `img`, `vote`, `retirer`, `retireurIP`, `IP`, `code`) VALUES
('49', 'Les sentiers de l''amour', 'Et Jésus, comme il le fait d''ordinaire, monte sur un petit talus pour que tous puissent le voir. Il a devant Lui, au premier rang les cinq Jean. En arrière se trouvent les disciples, mêlés à ceux qui sont accourus de toutes parts de la Palestine, pour leur santé ou pour entendre la parole. \r\n"La paix à vous tous, et la sagesse sur vous. \r\nÉcoutez. Quelqu''un, en un jour lointain, m''a demandé si Dieu est miséricordieux envers les pecheurs et jusqu''à quel point Il l''est. Celui qui le demandait était un pécheur pardonné qui n''arrivait pas à se persuader de l''absolu pardon de Dieu. Et Moi, par des paraboles, je le calmai, le rassurai et lui promis que pour lui j''aurais toujours parlé de miséricorde pour que son cœur repenti qui, semblable à un enfant égaré lui pleurait au-dedans, se sentît assuré d''être déjà en possession de son Père des Cieux. \r\nDieu est Miséricorde parce que Dieu est Amour. \r\nLe serviteur de Dieu doit être miséricordieux pour imiter Dieu. Dieu se sert de la miséricorde pour attirer à Lui ses fils dévoyés. Le serviteur de Dieu doit se servir de la miséricorde comme d''un moyen pour amener à Dieu les fils dévoyés. \r\nLe précepte de l''amour doit être obligatoire pour tous, mais il doit l''être trois fois pour les serviteurs de Dieu. \r\nOn ne conquiert pas le Ciel si on n''aime pas. Mais cela, il suffit de le dire aux croyants. Aux serviteurs de Dieu, Moi je dis : "On ne fait pas conquérir le Ciel aux croyants si on n''aime pas avec perfection". Et vous, qui êtes vous, vous qui vous pressez tout autour ? En plus grande partie, vous êtes des créatures qui tendez à une vie parfaite, à la vie bénie, à la vie pénible, lumineuse du serviteur de Dieu, du ministre du Christ. Et quels devoirs avez-vous en cette vie de serviteurs et de ministres ? Un amour total pour Dieu, un amour total pour le prochain. Votre but : servir. Comment ?  En rendant à Dieu ceux que le monde, la chair, le démon ont pris à Dieu. De quelle façon ? Par l''amour. L''amour qui a mille façons de s''exercer et une fin unique : faire aimer. \r\nPensons à notre beau Jourdain. Comme il est imposant à Jéricho ! Mais, était-il ainsi à sa source ? Non, c''était un filet d''eau, et tel il serait resté s''il avait toujours été seul. Au contraire, voilà que des montagnes, et des collines, de l''une et l''autre rive de sa vallée, descendent mille et mille affluents, les uns seuls, d''autres déjà formés de cent ruisseaux, et tous se déversent dans son lit, qui croit, croît, croît, jusqu''à devenir, de doux ruisseau qu''il était, cours d''eau d''argent azuré qui rit et s''amuse dans son enfance de fleuve, le fleuve large, solennel, tranquille qui déroule son ruban d''azur au milieu de ses rives fertiles couleur d''émeraude. \r\nAinsi en est-il de l''amour. Un filet initial chez ceux qui sont des enfants sur le Chemin de la Vie, qui savent à peine se garder du péché grave par crainte de la punition et puis, avançant sur le chemin de la perfection, voilà que des montagnes de l''humanité rugueuses, arides, orgueilleuses, dures, sortent par la volonté de l''amour de nombreuses rivières de cette principale vertus et tout sert à la faire surgir et jaillir : les douleurs et les joies, comme sur les montagnes servent à faire des ruisseaux les neiges gelées et le soleil qui les fait fondre. Tout sert à leur ouvrir le chemin : l''humilité comme le repentir. Tout sert à les diriger vers le fleuve initial, car l''âme, poussée sur cette voie, aime descendre dans l''anéantissement du moi aspirant à remonter, attirée par le Soleil-Dieu, après être devenue un fleuve puissant, magnifique, bienfaisant. \r\nLes ruisseaux qui nourrissent le ruisseau embryonnaire de l''amour de respect sont, outre les vertus, les œuvres que les vertus apprennent à accomplir, les œuvres qui justement, pour être des ruisselets d''amour, sont des œuvres de miséricorde. Voyons-les ensemble. Certaines étaient déjà connues à Israël, d''autres, c''est Moi qui vous les fais connaître parce que ma loi est perfection d''amour. \r\n', 'les-sentiers-de-lamour', '2014-11-25 08:05:29', 'Les oeuvres de la miséricorde divine', '2014', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('03', 'Visiter les prisonniers', 'Croyez-vous que dans les galères il n''y ait que des criminels ? La justice humaine est aveugle d''un oeil, et l''autre a des troubles visuels. Elle voit des chameaux où il y a des nuages et prend un serpent pour un rameau fleuri. Elle juge mal. Plus mal encore parce que celui qui préside crée volontairement des nuages de ', 'visiter-les-prisonniers', '2014-11-25 15:36:47', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('02', 'Visiter les malades', 'Oh ! En vérité, comme les hommes sont des voyageurs, ils sont tous malades. Et les maladies les plus graves sont celles de l''esprit, les maladies invisibles et les plus mortelles.  Et pourtant elles ne provoquent pas le dégoût. La plaie morale n''inspire pas de répugnance. La puanteur du vice ne donne pas la nausée. La folie démoniaque ne fait pas peur. La gangrène d''un lépreux spirituel ne repousse pas. Le tombeau rempli d''ordure d''un homme dont l''âme est morte et putréfiée ne fait pas fuir. Ce n''est pas un anathème de s''approcher de l''une de ces impuretés. Pauvre, étroite pensée de l''homme ! Mais dites : est-ce l''esprit qui a le plus de valeur ou ', 'visiter-les-malades', '2014-11-25 15:37:26', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('01', 'Héberger les sans-abris', 'Si rassasier, désaltérer, vêtir, en se privant pour donner aux autres, unit la sainte tempérance à la très sainte charité et si la bienheureuse justice vous unit aussi, elle par qui on modifie saintement le sort des frères malheureux en donnant de ce que nous avons en abondance, par la permission de Dieu, en faveur de ceux qui, par la méchanceté des hommes ', 'heberger-les-sans-abris', '2014-11-25 15:37:57', 'Les oeuvres de la miséricorde divine', '2015', '\r\n', NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('52', 'Vêtir ceux qui sont nus', 'Il passe sur les routes de la terre des misères nues, honteuses, pitoyables. Il y a les vieillards abandonnés, ceux qui sont invalides par maladies ou accidents; il y a les lépreux qui reviennent à la vie par la bonté du Seigneur; il y a les veuves, chargées de famille, il y a ', 'vetir-ceux-qui-sont-nus', '2014-11-25 15:38:42', 'Les oeuvres de la miséricorde divine', '2014', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('51', 'Donner à boire à ceux qui ont soif', 'Avez-vous jamais pensé à ce qui arriverait si le Père ne faisait plus pleuvoir ? Ou bien s''Il disait : "A cause de votre dureté pour celui qui a soif, J''empêcherai les nuages de descendre sur la terre" pourrions-nous protester et maudire ? L''eau, plus encore que le grain, appartient à Dieu. Car le grain est cultivé par l''homme, mais c''est Dieu seul qui cultive les champs de nuages qui descendent en pluie ou en rosée, comme les bro', 'donner-a-boire-a-ceux-qui-ont-soif', '2014-11-25 15:39:13', 'Les oeuvres de la miséricorde divine', '2014', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('50', 'Donner à manger aux affamés', 'Devoir de reconnaissance et d''amour. Devoir d''imitation. Les enfants sont reconnaissants au père du pain qu''il leur procure et, devenus hommes, ils l''imitent en procurant du pain à leurs enfants, et à leur père que l''âge rend désormais incapable de travailler, ils procurent le pain par leur propre travail, affectueuse restitution', 'donner-a-manger-aux-affames', '2014-11-25 15:39:40', 'Les oeuvres de la miséricorde divine', '2014', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('comment', '', 'Message très touchant', '2014-11-25 17:39:13', '2014-12-09 20:26:00', 'serge', '', NULL, NULL, NULL, NULL, NULL),
('une-priere', 'obeissance-011', '', NULL, '2014-12-22 17:19:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('premier-enseignement', 'Vetir ceux qui sont nus', '', NULL, '2014-12-30 22:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', 'Réprimander les pécheurs', 'Enfin efforcez-vous d''ensevelir les pécheurs pour préparer leur retour à la vie de la Grâce. Savez-vous quand vous le faites ? Quand vous les réprimandez avec une insistance paternelle, patiente, affectueuse. C''est comme si vous ensevelissiez peu à peu les laideurs ', 'Réprimander-les-pécheurs', '2015-01-06 14:13:19', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('10', 'Supportez les importuns', 'Ils viennent déranger la petite maison de notre moi, comme les voyageurs viennent déranger la maison que nous habitons. Mais, comme je vous ai dit d''accueillir ces derniers, accueillez aussi les premiers.', 'Supportez-les-importuns', '2015-01-06 14:13:49', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('09', 'Consoler les affligés', 'Soyez miséricordieux envers ceux qui pleurent. Ce sont ceux que la vie a blessés, ceux dont le cœur a été brisé dans ses affections. \r\nNe vous enfermez ', 'Consoler-les-affligés', '2015-01-06 15:13:49', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('08', 'Pardonner les offenses', 'Revêtez ceux dont l''esprit est nu en pardonnant à ceux qui vous offensent. \r\nL''offense est une contrecharité. La contrecharité dépouille de Dieu. Aussi celui qui commet l''offense s''est dévêtu et seulement le pardon de celui qu''il a offensé revêt ', 'Pardonner-les-offenses', '2015-01-06 15:33:49', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('04', 'Ensevelir les morts', 'La contemplation de la mort est une école de la vie. Je voudrais pouvoir vous amener tous en face de la mort et vous dire : "Sachez vivre en saints pour n''avoir que cette mort : séparation temporaire du corps et de l''esprit pour ressusciter ensuite triomphalement pour l''éternité, réunis, bienheureux". \r\nTous, nous naissons nus. Tous nous mourons en devenant des dépouilles vouées à la décomposition. Rois ou gueux, on meurt comme on vient au monde. Et si le luxe des rois permet une ', 'Ensevelir-les-morts', '2015-01-06 15:36:21', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('06', 'Prier pour les vivants et les morts', 'Ne soyez pas avares et orgueilleux des choses que vous savez, mais donnez avec une humble générosité. Et donnez le rafraîchissement limpide et bienfaisant de la prière aux vivants et aux morts qui ont soif de grâces. On ne doit pas refuser l''eau aux gosiers desséchés. Que faut-il donner alors aux cœurs des vivants angois', 'Prier-vivants-et-morts', '2015-01-06 15:36:41', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('05', 'Instruire les ignorants', 'Il y a des ignorants qui font le mal parce qu''ils ne connaissent pas le bien. Combien ne connaissent pas ou connaissent mal les choses de Dieu et même les lois morales ! Ils languissent comme des affamés parce qu''il n''y a personne pour leur donner la nourriture et ils tombent en langueur par manque de vérités qui les n', 'Instruire-les-ignorants', '2015-01-06 15:36:45', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint'),
('07', 'Conseiller ceux qui doutent', 'Beaucoup de personnes dans le monde savent. Mais ne savent pas croire avec fermeté. Comme si elles étaient prises entre deux camps opposés, elles hésitent, elles hésitent sans avancer d''un seul pas, et elles épuisent leurs forces sans arriver à rien. Ce sont les hésitants. Les gens des "mais" des "si" des "et puis". Ceux qui de', 'Conseiller-ceux-qui-doutent', '2015-01-06 15:36:49', 'Les oeuvres de la miséricorde divine', '2015', NULL, NULL, NULL, NULL, 'Dieu le père, Sainte vierge Marie, Jésus-Christ, saint-esprit, esprit-saint');

-- --------------------------------------------------------

--
-- Structure de la table `cnnexions`
--

CREATE TABLE IF NOT EXISTS `cnnexions` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cnnexions`
--

INSERT INTO `cnnexions` (`ip`, `timestamp`) VALUES
('41.66.39.239', 1420890908);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` int(13) NOT NULL,
  `tel2` int(13) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `adresse_comp` varchar(150) DEFAULT NULL,
  `cp` varchar(30) NOT NULL,
  `pays` varchar(75) NOT NULL,
  `montant` int(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiration` date NOT NULL,
  `type_de_carte` varchar(20) DEFAULT NULL,
  `securite` int(3) DEFAULT NULL,
  `numero_de_carte` int(20) DEFAULT NULL,
  `nomporteur` varchar(75) DEFAULT NULL,
  `type_de_lig` varchar(25) DEFAULT NULL,
  `email_compte` varchar(75) DEFAULT NULL,
  `email_compte_user` varchar(75) DEFAULT NULL,
  `type_de_tel` varchar(25) DEFAULT NULL,
  `phone_compte` int(13) DEFAULT NULL,
  `phone_compte_user` int(13) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `email`, `tel`, `tel2`, `adresse`, `adresse_comp`, `cp`, `pays`, `montant`, `timestamp`, `expiration`, `type_de_carte`, `securite`, `numero_de_carte`, `nomporteur`, `type_de_lig`, `email_compte`, `email_compte_user`, `type_de_tel`, `phone_compte`, `phone_compte_user`, `validation`) VALUES
('04xta', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:43:44', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('0shYk', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:10:21', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('1RDBb', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:45:55', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('1ZU50', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:39:57', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('2MNbQ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:06:24', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('2pn4Z', 'KJhkh', 'de@dqs.QSd', 98789, 798789897, 'KJHK', 'JKHK', 'JKJK', 'cotedivoire', 274000, '2014-12-17 18:08:36', '2014-12-24', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('38mhk', 'jkhkjk', 'hi.cyril@gmail.com', 2147483647, 897879789, 'H', 'HKH', 'JKHJKHJ', 'cotedivoire', 18000, '2014-12-04 16:24:58', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('3IvKk', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:56:40', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('4Ef4l', 'KJhhhk', 'kkhh@sqdqs.dqs', 98989898, 8998, 'HK', 'HH', 'KLJH', 'cotedivoire', 18000, '2014-12-04 16:13:11', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('4o4JM', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:33:11', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('56rSb', 'hjfjg', 'hi.cyril@gmail.com', 34567, 3456, 'FEA', 'FE', 'RGF', 'cotedivoire', 18000, '2014-12-04 20:07:23', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('5Gg8j', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:59:45', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('6UF3p', 'ifkck', 'jfif@hh.hh', 353538, 353838, 'Vikc', 'ucivci', 'jcjf', 'cotedivoire', 28000, '2014-12-18 12:24:20', '2014-12-25', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('6xw3c', 'hjjgj', 'hi.cyril@gmail.com', 897789789, 897789978, 'HHJ', 'HHKH', 'JKJKH', 'cotedivoire', 25500, '2014-12-04 16:22:53', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('73cWh', 'FSFSD', 'achicyr@yahoo.fr', 87789789, 2147483647, 'KJ', 'JKJK', 'LK', 'cotedivoire', 150000, '2014-12-08 15:00:08', '2014-12-15', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('7L4Od', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:42:13', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('8Ak5S', 'ifkck', 'jfif@hh.hh', 353538, 353838, 'Vikc', 'ucivci', 'jcjf', 'cotedivoire', 28000, '2014-12-18 12:24:29', '2014-12-25', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('AKBCR', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:49:23', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('aOSmQ', 'jkhkjk', 'hi.cyril@gmail.com', 2147483647, 897879789, 'H', 'HKH', 'JKHJKHJ', 'cotedivoire', 18000, '2014-12-04 16:24:00', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('BE2WD', 'ojihu', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'UHHU', 'HUU', 'JHHHU', 'cotedivoire', 31500, '2014-12-04 21:16:25', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('BvPA0', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:56:07', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('bzZvF', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:56:45', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('Cgmjc', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:31:55', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('cJLHQ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:35:28', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('cJzIF', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:46:55', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('CtAEW', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:11:48', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('Ctjkh', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:00:14', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('cw8Ka', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:47:34', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('cyawn', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:35:46', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('DTcfc', 'ojihu', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'UHHU', 'HUU', 'JHHHU', 'cotedivoire', 31500, '2014-12-04 21:18:50', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('dYzGp', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:12:13', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('e0ZMA', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:54:09', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('e7Ze1', 'jhjhg', 'hi.cyril@gmail.com', 111111, 121321, 'RFGHV', 'TFGHV', 'RDGFHV', 'cotedivoire', 13500, '2014-12-04 15:59:19', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('Ek1bT', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:46:00', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('eOTnX', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:49:39', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('evJOe', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 19:02:13', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('f34Gz', 'achi', 'puissancedamour@yahoo.fr', 9, 47, 'rue des jardins', 'portail jaune', '08 bp 111 abidjan 08', 'cotedivoire', 60000, '2015-01-06 08:53:51', '2015-01-13', '', 0, 0, '', '', '', '', 'orangemoney', 225, 225, 0),
('foCk1', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:38:23', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('fS3V3', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:14:44', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('Gu3ET', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:54:48', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('gW6ds', 'achi geneviève', 'puissancedamour@yahoo.fr', 9, 47, 'rue des jardins 2 plateaux', 'portail jaune en face pharmacie st gil', '08 bp 111 abidjan 08', 'cotedivoire', 33500, '2015-01-14 09:38:44', '2015-01-21', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('gYm5U', 'LJIJLI', 'hi.cyril@gmail.com', 87978789, 879897789, 'GHJHGJ', 'JHHJGJ', 'KHGJH', 'cotedivoire', 12000, '2014-12-04 16:26:09', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('h2jAd', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:37:59', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('h5Grp', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:36:33', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('h8c08', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:48:23', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('HanGk', 'ifkck', 'jfif@hh.hh', 353538, 353838, 'Vikc', 'ucivci', 'jcjf', 'cotedivoire', 28000, '2014-12-18 12:24:18', '2014-12-25', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('hg7Ec', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:54:38', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('hNSED', 'KJHKH', 'hi.cyril@gmail.com', 89778789, 78987879, 'HG', 'JH', 'KJ', 'cotedivoire', 15000, '2014-12-04 16:31:11', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('HPxpw', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:50:33', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('hSNlo', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:55:32', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('Il6j4', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:41:01', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('ilWR6', 'achi geneviève', 'puissancedamour@yahoo.fr', 2147483647, 0, 'cocody 2 plateaux rue des jardins', 'portail jaune en face pharmacie st gil', '08 bp 111 abidjan 08', 'cotedivoire', 50000, '2014-12-07 15:32:12', '2014-12-14', '', 0, 0, '', '', '', '', 'orangemoney', 225, 225, 0),
('iNdcB', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:51:20', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('IV1Ra', 'hjjgj', 'hi.cyril@gmail.com', 897789789, 897789978, 'HHJ', 'HHKH', 'JKJKH', 'cotedivoire', 25500, '2014-12-04 16:16:48', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('izMdI', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:37:44', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('jhfRH', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:50:05', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('JLcGp', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:53:48', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('JLerZ', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:08:40', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('Jx2mE', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:03:03', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('kkrJo', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:55:56', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('krCOb', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:43:51', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('kSsPM', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:09:20', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('kuNcz', 'kjjk', 'hi.cyril@gmail.com', 76890879, 2147483647, 'HJH', 'HHK', 'HJHJ', 'cotedivoire', 22500, '2014-12-04 21:08:42', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('Kw7Sz', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:40:47', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('LGeBE', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:39:48', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('lGHsI', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:00:54', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('Lkl8a', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:47:57', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('LMxPz', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:48:50', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('LXCVv', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 16:48:44', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('MAEuJ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:44:37', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('MsyPF', 'ljkjh', 'hi.cyril@gmail.com', 786788, 86768, 'KK', 'JHJK', 'JHHKH', 'cotedivoire', 22500, '2014-12-04 21:04:09', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('mV7xJ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:37:37', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('NFUIJ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:51:49', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('NHffP', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 21:01:27', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('nl5RR', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:36:17', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('nrBnV', 'achi', 'achicyr@hotmail.fr', 99090909, 2147483647, 'YUGGYUG£IU', 'YGYGGY', '83150', 'cotedivoire', 18000, '2014-12-03 12:29:39', '2014-12-10', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('NxTFz', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:31:18', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('NzX6x', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:38:19', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('o1kw3', 'KJHKH', 'hi.cyril@gmail.com', 89778789, 78987879, 'HG', 'JH', 'KJ', 'cotedivoire', 15000, '2014-12-04 16:28:04', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('oD74S', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:37:19', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('OVAy3', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:37:54', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('p0pzh', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:15:07', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('p0u6J', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:13:41', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('p5UwW', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:27:39', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('pjHFg', 'iojoioi', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JK', 'KJJK', 'JKNJK', 'cotedivoire', 15000, '2014-12-04 16:34:07', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('Pkcv2', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:38:43', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('PN6WV', 'hhi', 'hi.cyril@gmail.com', 87678687, 7676, 'HJHJHJ', 'HJKJ', 'JHHJ', 'cotedivoire', 22500, '2014-12-04 21:23:01', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('QHTaS', 'achi geneviève', 'puissancedamour@yahoo.fr', 2147483647, 0, 'abidjan 2 plateaux rue desjardins', 'portail jaune en face pharmacie st gil', '08 bp 111 abidjan 08', 'cotedivoire', 31000, '2015-01-29 11:15:05', '2015-02-05', '', 0, 0, '', '', '', '', 'orangemoney', 225, 225, 0),
('R3se4', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:48:04', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('RaCS7', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:49:26', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('RD2hN', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:33:40', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('RGiBM', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:43:08', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('rrCLC', 'ksfdj', 'achicyr@hotmail.fr', 989890, 90980890, 'JKNJ', 'NNN', 'NJKJKJ', 'cotedivoire', 150000, '2014-12-08 14:56:55', '2014-12-15', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('RVRFk', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:57:54', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('S45NT', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:36:43', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('s6xOY', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:39:22', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('skGIV', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:03:57', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('ssQQs', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:37:43', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('sZUrE', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:58:24', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('TfQiu', 'JHGJJG', 'hi.cyril@gmail.com', 87789978, 897978789, 'JBKBH', 'HHG', 'KJBKJB', 'cotedivoire', 18000, '2014-12-04 16:13:52', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('tKp2h', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:35:38', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('tNAFU', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:13:57', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('trZV3', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:56:10', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('ueoQW', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 17:51:26', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('UfoNe', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:05:56', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('Uyllr', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:01:42', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('V0KIK', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:57:32', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('veBg5', 'KJhj', 'hi.cyril@gmail.com', 87686667, 666777678, 'UH\r\n', 'I', 'HUUH', 'cotedivoire', 22500, '2014-12-04 21:24:35', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('vMeT5', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:06:35', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('vt6r5', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 21:03:11', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('w15a4', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:39:28', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('x3FCQ', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:40:08', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('xBjRX', 'iojoioi', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JK', 'KJJK', 'JKNJK', 'cotedivoire', 15000, '2014-12-04 16:32:07', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('XCmte', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 19:58:33', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('XOI7e', 'GHHFH', 'hi.cyril@gmail.com', 56789, 5678, 'RGFD', 'GFD', 'G', 'cotedivoire', 18000, '2014-12-04 20:02:37', '2014-12-11', '', 0, 0, '', '', '', '', 'orangemoney', 225, 2147483647, 0),
('y1leo', 'kjh', 'hi.cyril@gmail.com', 2147483647, 2147483647, 'JHHH', 'YUHU', 'KJH', 'cotedivoire', 22500, '2014-12-04 21:15:39', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('ygzMI', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:12:32', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('YlSnB', 'hjfjg', 'hi.cyril@gmail.com', 34567, 3456, 'FEA', 'FE', 'RGF', 'cotedivoire', 18000, '2014-12-04 20:06:37', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('Z2igr', 'GHF', 'hi.cyril@gmail.com', 3456, 3467, 'R', 'FZ', 'D', 'cotedivoire', 18000, '2014-12-04 20:13:10', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0),
('zragQ', 'hghf', 'hi.cyril@gmail.com', 1234546, 23456, 'JHJH', 'HHJJG', 'SEDCGFVB', 'cotedivoire', 22500, '2014-12-04 18:36:42', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 225, 0),
('Zyzk1', 'hjgjh', 'hi.cyril@gmail.com', 89789879, 7879878, 'J', 'J', 'KLJ', 'cotedivoire', 25500, '2014-12-04 19:52:03', '2014-12-11', '', 0, 0, '', '', '', '', 'mtnmoney', 225, 2147483647, 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscripts`
--

CREATE TABLE IF NOT EXISTS `inscripts` (
`id_inscript` int(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `news` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `inscripts`
--

INSERT INTO `inscripts` (`id_inscript`, `email`, `news`) VALUES
(1, 'achicyr@hotmail.fr', 'meditation'),
(2, 'achicyr@hotmail.fr', 'meditation'),
(3, 'achicyr@hotmail.fr', ''),
(4, 'achicyr@hotmail.fr', ''),
(5, 'achicyr@hotmail.fr', ''),
(6, 'puissancedamour@gmail.com', ''),
(7, 'qdsqds@ddsq.dsq', ''),
(8, 'puissancedamour@gmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
`id` int(11) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE IF NOT EXISTS `liste` (
`id_liste` int(15) NOT NULL,
  `id_commande` varchar(10) NOT NULL,
  `id_article` varchar(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `heures` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Contenu de la table `liste`
--

INSERT INTO `liste` (`id_liste`, `id_commande`, `id_article`, `quantity`, `heures`) VALUES
(12, 'nrBnV', '51', 2, '2014-12-03 12:29:39'),
(13, 'e7Ze1', '|150', 2, '2014-12-04 15:59:19'),
(14, 'e7Ze1', '51', 1, '2014-12-04 15:59:19'),
(15, '4Ef4l', '51', 2, '2014-12-04 16:13:11'),
(16, 'TfQiu', '51', 2, '2014-12-04 16:13:52'),
(17, 'IV1Ra', '51', 3, '2014-12-04 16:16:48'),
(18, 'aOSmQ', '51', 2, '2014-12-04 16:24:00'),
(19, 'gYm5U', '|19', 2, '2014-12-04 16:26:09'),
(20, 'o1kw3', '|20', 1, '2014-12-04 16:28:04'),
(21, 'hNSED', '|20', 1, '2014-12-04 16:31:11'),
(22, 'xBjRX', '|20', 1, '2014-12-04 16:32:07'),
(23, 'pjHFg', '|20', 1, '2014-12-04 16:34:07'),
(24, '1RDBb', '|20', 1, '2014-12-04 16:45:55'),
(25, '1RDBb', '51', 1, '2014-12-04 16:45:55'),
(26, 'cJzIF', '|20', 1, '2014-12-04 16:46:55'),
(27, 'cJzIF', '51', 1, '2014-12-04 16:46:55'),
(28, 'cw8Ka', '|20', 1, '2014-12-04 16:47:34'),
(29, 'cw8Ka', '51', 1, '2014-12-04 16:47:34'),
(30, 'LXCVv', '|20', 1, '2014-12-04 16:48:44'),
(31, 'LXCVv', '51', 1, '2014-12-04 16:48:44'),
(32, 'AKBCR', '|20', 1, '2014-12-04 16:49:23'),
(33, 'AKBCR', '51', 1, '2014-12-04 16:49:23'),
(34, 'jhfRH', '|20', 1, '2014-12-04 16:50:05'),
(35, 'jhfRH', '51', 1, '2014-12-04 16:50:05'),
(36, 'iNdcB', '|20', 1, '2014-12-04 16:51:20'),
(37, 'iNdcB', '51', 1, '2014-12-04 16:51:20'),
(38, 'JLcGp', '|20', 1, '2014-12-04 16:53:48'),
(39, 'JLcGp', '51', 1, '2014-12-04 16:53:48'),
(40, 'hg7Ec', '|20', 1, '2014-12-04 16:54:38'),
(41, 'hg7Ec', '51', 1, '2014-12-04 16:54:38'),
(42, 'hSNlo', '|20', 1, '2014-12-04 16:55:32'),
(43, 'hSNlo', '51', 1, '2014-12-04 16:55:32'),
(44, 'BvPA0', '|20', 1, '2014-12-04 16:56:07'),
(45, 'BvPA0', '51', 1, '2014-12-04 16:56:07'),
(46, '3IvKk', '|20', 1, '2014-12-04 16:56:40'),
(47, '3IvKk', '51', 1, '2014-12-04 16:56:40'),
(48, 'izMdI', '|20', 1, '2014-12-04 17:37:44'),
(49, 'izMdI', '51', 1, '2014-12-04 17:37:44'),
(50, 'NzX6x', '|20', 1, '2014-12-04 17:38:19'),
(51, 'NzX6x', '51', 1, '2014-12-04 17:38:19'),
(52, 'LGeBE', '|20', 1, '2014-12-04 17:39:48'),
(53, 'LGeBE', '51', 1, '2014-12-04 17:39:48'),
(54, 'Zyzk1', '51', 3, '2014-12-04 19:52:03'),
(55, 'e0ZMA', '51', 2, '2014-12-04 19:54:09'),
(56, 'YlSnB', '51', 2, '2014-12-04 20:06:37'),
(57, 'JLerZ', '51', 2, '2014-12-04 20:08:40'),
(58, 'kSsPM', '51', 2, '2014-12-04 20:09:20'),
(59, 'CtAEW', '51', 2, '2014-12-04 20:11:48'),
(60, 'dYzGp', '51', 2, '2014-12-04 20:12:13'),
(61, 'ygzMI', '51', 2, '2014-12-04 20:12:32'),
(62, 'Z2igr', '51', 2, '2014-12-04 20:13:10'),
(63, 'p5UwW', '51', 2, '2014-12-04 20:27:39'),
(64, 'Cgmjc', '51', 2, '2014-12-04 20:31:55'),
(65, 'cyawn', '51', 2, '2014-12-04 20:35:46'),
(66, 'S45NT', '51', 2, '2014-12-04 20:36:43'),
(67, 'ssQQs', '51', 2, '2014-12-04 20:37:43'),
(68, 'h2jAd', '51', 2, '2014-12-04 20:37:59'),
(69, 's6xOY', '51', 2, '2014-12-04 20:39:22'),
(70, 'x3FCQ', '51', 2, '2014-12-04 20:40:08'),
(71, 'krCOb', '51', 2, '2014-12-04 20:43:51'),
(72, 'Lkl8a', '51', 2, '2014-12-04 20:47:57'),
(73, 'RaCS7', '51', 2, '2014-12-04 20:49:26'),
(74, 'Gu3ET', '51', 2, '2014-12-04 20:54:48'),
(75, 'kkrJo', '51', 2, '2014-12-04 20:55:56'),
(76, 'NHffP', '51', 2, '2014-12-04 21:01:27'),
(77, 'vt6r5', '51', 2, '2014-12-04 21:03:11'),
(78, 'MsyPF', '51', 2, '2014-12-04 21:04:09'),
(79, 'MsyPF', '|19', 1, '2014-12-04 21:04:09'),
(80, 'kuNcz', '51', 1, '2014-12-04 21:08:42'),
(81, 'kuNcz', '|20', 1, '2014-12-04 21:08:42'),
(82, '0shYk', '|20', 1, '2014-12-04 21:10:21'),
(83, '0shYk', '51', 1, '2014-12-04 21:10:21'),
(84, 'p0u6J', '|20', 1, '2014-12-04 21:13:41'),
(85, 'p0u6J', '51', 1, '2014-12-04 21:13:41'),
(86, 'tNAFU', '|20', 1, '2014-12-04 21:13:58'),
(87, 'tNAFU', '51', 1, '2014-12-04 21:13:58'),
(88, 'fS3V3', '|20', 1, '2014-12-04 21:14:44'),
(89, 'fS3V3', '51', 1, '2014-12-04 21:14:44'),
(90, 'p0pzh', '|20', 1, '2014-12-04 21:15:07'),
(91, 'p0pzh', '51', 1, '2014-12-04 21:15:07'),
(92, 'y1leo', '|20', 1, '2014-12-04 21:15:39'),
(93, 'y1leo', '51', 1, '2014-12-04 21:15:39'),
(94, 'BE2WD', '|20', 1, '2014-12-04 21:16:26'),
(95, 'BE2WD', '51', 2, '2014-12-04 21:16:26'),
(96, 'BE2WD', '|19', 1, '2014-12-04 21:16:26'),
(97, 'PN6WV', '|20', 1, '2014-12-04 21:23:01'),
(98, 'PN6WV', '51', 1, '2014-12-04 21:23:01'),
(99, 'veBg5', '51', 1, '2014-12-04 21:24:35'),
(100, 'veBg5', '|20', 1, '2014-12-04 21:24:35'),
(101, 'ilWR6', '51', 1, '2014-12-07 15:32:12'),
(102, 'ilWR6', '71', 1, '2014-12-07 15:32:12'),
(103, 'ilWR6', '83', 1, '2014-12-07 15:32:12'),
(104, 'ilWR6', '111', 1, '2014-12-07 15:32:12'),
(105, 'ilWR6', '61', 1, '2014-12-07 15:32:12'),
(106, 'ilWR6', '76', 1, '2014-12-07 15:32:12'),
(107, 'ilWR6', '84', 1, '2014-12-07 15:32:12'),
(108, 'rrCLC', '51', 20, '2014-12-08 14:56:55'),
(109, '2pn4Z', '|25', 20, '2014-12-17 18:08:36'),
(110, '2pn4Z', '|42', 2, '2014-12-17 18:08:36'),
(111, '2pn4Z', '|45', 2, '2014-12-17 18:08:36'),
(112, 'HanGk', '54', 1, '2014-12-18 12:24:18'),
(113, '6UF3p', '54', 1, '2014-12-18 12:24:20'),
(114, '8Ak5S', '54', 1, '2014-12-18 12:24:29'),
(115, 'f34Gz', '57', 1, '2015-01-06 08:53:52'),
(116, 'f34Gz', '52', 1, '2015-01-06 08:53:52'),
(117, 'f34Gz', '80', 1, '2015-01-06 08:53:52'),
(118, 'f34Gz', '89', 1, '2015-01-06 08:53:52'),
(119, 'f34Gz', '|34', 1, '2015-01-06 08:53:52'),
(120, 'gW6ds', '54', 1, '2015-01-14 09:38:44'),
(121, 'gW6ds', '61', 1, '2015-01-14 09:38:44'),
(122, 'gW6ds', '84', 1, '2015-01-14 09:38:44'),
(123, 'QHTaS', '52', 1, '2015-01-29 12:15:05'),
(124, 'QHTaS', '60', 2, '2015-01-29 12:15:05'),
(125, 'QHTaS', '79', 1, '2015-01-29 12:15:05');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(3) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT '<img src=""alt="" title=""/>',
  `fr` varchar(100) NOT NULL,
  `en` varchar(100) NOT NULL,
  `es` varchar(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(200) NOT NULL DEFAULT 'Institution chrétienne catholique de la Puissance Divine. Unie le saint-esprit aux fidèles chrétiens : prière assistance action caritative.',
  `keywords` varchar(300) DEFAULT NULL,
  `keywords-1` varchar(300) DEFAULT NULL,
  `keywords-2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `user_name`, `img`, `fr`, `en`, `es`, `title`, `description`, `keywords`, `keywords-1`, `keywords-2`) VALUES
(1, 'objectifs', '<img src=""alt="" title=""/>', 'Objectifs', '', '', 'Puissance Divine: vente en ligne ecommerce évangile révélé Maria Valtorta', 'Institution chrétienne catholique de la Puissance Divine. Unie le saint-esprit aux fidèles chrétiens : prière assistance action caritative.', 'vente objet piété, retraite spirituelle, louer espace prière, prière, ecommerce chrétien catholique, ecommerce religieux, librairie religieuse abidjan cocody 2plateaux, librairie catholique', NULL, NULL),
(2, 'vente', '<img src=""alt="" title=""/>', 'Vente en ligne', '', '', 'Librairie Puissance Divine : ecommerce publication chrétienne et objets de piété', 'Puissance Divine, fraternité de prière chrétienne catholique, boutique en ligne, ecommerce religieux d''objets et livres de piétés. enseignements et retraites spirituelle', 'vente en ligne, ecommerce religieux,e-boutique, publications catholique,évangile révélé maria valtorta, bible, prière, saint-esprit, Jésus christ', 'vente en ligne catholique, ecommerce religieux, vente-en-ligne publications chrétienne, vente-en-ligne bibles, vente-en-ligne publications catholique, évangile révélé maria valtorta, bible, bible enfant, prière, saint-esprit, Dieu, Jésus christ, sainte vierge Marie, foi', 'vente en ligne catholique, ecommerce religieux, vente-en-ligne publications chrétienne, vente-en-ligne icône religieuse, vente-en-ligne statue religieuse, vente-en-ligne chapelets, vente-en-ligne croix religieuse, crucifix, saint-esprit, Dieu, Jésus christ, sainte vierge Marie, sainte, foi'),
(3, 'enseignements', '<img src=""alt="" title=""/>', 'Enseignements', '', '', 'Enseignements spirituels de Jésus Christ : Saint-esprit Dieu et Homme', 'Institution chrétienne catholique de la Puissance Divine. Unie le saint-esprit aux fidèles chrétiens : prière assistance action caritative.', 'sanctuaire rosaire, fraternité prière, librairie puissance divine, ecommerce chrétien catholique, retraite spirituelle, louer espace prière, prière, jésus christ, Dieu, Jésus christ, virege Marie, saint-esprit, foi', 'fraternité prière, vente en ligne, vente-en-ligne objet piété, vente-en-ligne publications catholique, évangile révélé maria valtorta, vente bible, louer espace prière, prière au saint-esprit, veillé 1000 ave, prière, Dieu, Jésus christ, sainte vierge Marie, saint-esprit, foi', 'sanctuaire rosaire, retraite spirituelle, retraite grégorienne, retraite au saint-esprit, séminaire, conférence, saint martin de porrès, fille-mère rue, activités caritatives, prière, Dieu, Jésus christ, sainte vierge Marie, saint-esprit, foi'),
(4, 'priere', '<img src=""alt="" title=""/>', 'Retraites et Prières', '', '', 'retraite spirituelle, retraite Grégorienne, retraite à l''esprit-saint, chemin du rosaire à Abidjan', 'La Fraternité chrétienne catholique Puissance Divine d''Amour, organise régulièrement des activités spirituelles sur deux lieux d''Abidjan: 2plateaux et Azaguié', 'retraite spirituelle, retraite spirituelle grégorienne, retraite spirituelle au saint-esprit, prière à esprit-saint, prière, sanctuaire du rosaire, prière du rosaire, location espace prière, librairie religieuse, ecommerce chrétien catholique, Dieu, Jésus christ, vierge Marie, saint-esprit, foi', NULL, NULL),
(5, 'lieux-activites', '<img src=""alt="" title=""/>', 'Lieux et Activités', '', '', 'Description de nos lieux consacrés pour la foi des fidèle chrétiens', 'Description de lieux de la Puissance Divine d''Abidjan: centre du coeur d''accueil de Jésus, fraternité de prière au saint-esprit, Librairie Puissance Divine', 'sanctuaire rosaire, fraternité prière, librairie puissance divine, ecommerce chrétien catholique, retraite spirituelle, louer espace prière, prière, jésus christ, Dieu, Jésus christ, virege Marie, saint-esprit, foi', 'fraternité prière, vente en ligne, vente-en-ligne objet piété, vente-en-ligne publications catholique, évangile révélé maria valtorta, vente bible, louer espace prière, prière au saint-esprit, veillé 1000 ave, prière, Dieu, Jésus christ, sainte vierge Marie, saint-esprit, foi', 'sanctuaire rosaire, retraite spirituelle, retraite grégorienne, retraite au saint-esprit, séminaire, conférence, saint martin de porrès, fille-mère rue, activités caritatives, prière, Dieu, Jésus christ, sainte vierge Marie, saint-esprit, foi');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` varchar(2) NOT NULL,
`idp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `statut` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `idp`, `email`, `nom`, `statut`) VALUES
('pe', 5, 'puissancedamour@gmail.com', '', 22),
('en', 6, 'puissancedamour@gmail.com', '', 4),
('pr', 7, 'puissancdamour@gmail.com', '', 1),
('ac', 8, 'puissancdamour@gmail.com', '', 1),
('pe', 9, 'hi.cyril@gmail.com', '', 28),
('en', 10, 'hi.cyril@gmail.com', '', 5),
('pr', 11, 'hi.cyril@gmail.com', '', 1),
('ac', 12, 'hi.cyril@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `options_article`
--

CREATE TABLE IF NOT EXISTS `options_article` (
`id` int(11) NOT NULL,
  `img_article` varchar(150) NOT NULL,
  `stock` varchar(6) NOT NULL DEFAULT '1',
  `vendus` int(5) NOT NULL DEFAULT '0',
  `coloris` varchar(20) DEFAULT NULL,
  `couverture` int(4) DEFAULT NULL,
  `taille_` varchar(50) DEFAULT NULL,
  `opt_nom` varchar(50) DEFAULT NULL,
  `opt_prix` int(5) DEFAULT NULL,
  `autre` varchar(50) DEFAULT NULL,
  `opt_img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=256 ;

--
-- Contenu de la table `options_article`
--

INSERT INTO `options_article` (`id`, `img_article`, `stock`, `vendus`, `coloris`, `couverture`, `taille_`, `opt_nom`, `opt_prix`, `autre`, `opt_img`) VALUES
(1, 'croix-posee-st-benoit', '2', 0, NULL, NULL, '8cm/4cm', NULL, 3500, '', ''),
(2, 'croix-posee-st-benoit', '2', 0, NULL, NULL, '12cm/5cm', NULL, 7000, '', ''),
(3, 'croix-posee-st-benoit', '2', 0, NULL, NULL, '20cm/9.5cm', NULL, 20000, '', ''),
(4, 'croix-lumiseuse', '2', 0, NULL, NULL, '20cm/10cm', NULL, 3000, '', ''),
(5, 'croix-st-benoit', '2', 0, NULL, NULL, '8cm/4cm', NULL, 3000, '', ''),
(6, 'croix-st-benoit', '2', 0, NULL, NULL, '12cm/5cm', NULL, 4500, '', ''),
(7, 'croix-st-benoit', '2', 0, NULL, NULL, '20cm/9.5cm', NULL, 20000, '', ''),
(8, 'croix-st-benoit', '2', 0, NULL, NULL, '29cm/15cm', NULL, 30000, '', ''),
(9, 'croix-posee-st-benoit-bleu', '2', 0, 'bleu', NULL, NULL, NULL, NULL, '', ''),
(10, 'croix-posee-st-benoit-bleu', '2', 0, 'rouge', NULL, NULL, NULL, NULL, NULL, ''),
(11, 'st-benoit-beige', '2', 0, 'beige', NULL, NULL, NULL, NULL, '', ''),
(12, 'st-benoit-beige', '2', 0, 'doree', NULL, NULL, NULL, NULL, '', ''),
(13, 'st-benoit-beige', '2', 0, 'noire', NULL, NULL, NULL, NULL, '', ''),
(14, 'st-benoit-petit-beige', '2', 0, 'beige', NULL, NULL, NULL, NULL, '', ''),
(15, 'st-benoit-petit-beige', '2', 0, 'bleu', NULL, NULL, NULL, NULL, '', ''),
(16, 'st-benoit-petit-beige', '2', 0, 'verte', NULL, NULL, NULL, NULL, '', ''),
(17, 'st-benoit-petit-beige', '2', 0, 'doree', NULL, NULL, NULL, NULL, '', ''),
(18, 'notre-dame-de-toutes-graces', '0', 0, NULL, NULL, '5cm/10cm', NULL, 1500, '', ''),
(19, 'notre-dame-de-toutes-graces', '2', 0, NULL, NULL, '20cm/25cm', NULL, 4500, '', ''),
(20, 'notre-dame-de-toutes-graces', '2', 0, NULL, NULL, '30cm/40cm', NULL, 12000, '', ''),
(21, 'notre-dame-de-toutes-graces', '2', 0, NULL, NULL, '50cm/70cm', NULL, 20000, '', ''),
(22, 'notre-dame-lourdes', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(23, 'notre-dame-de-medjugorje', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(24, 'notre-dame-de-medjugorje', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(25, 'notre-dame-de-medjugorje', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(26, 'notre-dame-de-medjugorje', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(27, 'notre-dame-de-garabandal', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(28, 'notre-dame-de-la-compassion', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(29, 'notre-dame-de-la-compassion', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(30, 'notre-dame-de-la-guadeloupe', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(31, 'notre-dame-de-la-guadeloupe', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(32, 'notre-dame-de-la-guadeloupe', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(33, 'notre-dame-de-la-tendresse', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(34, 'notre-dame-de-la-tendresse', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(35, 'notre-dame-de-la-tendresse-1', '0', 0, NULL, NULL, '5cm/10cm', NULL, 2000, '', ''),
(36, 'notre-dame-de-la-tendresse-1', '2', 0, NULL, NULL, '50cm/70cm', NULL, 23000, '', ''),
(37, 'notre-dame-du-perpetuel-secours', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(38, 'notre-dame-du-perpetuel-secours', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(39, 'notre-dame-du-perpetuel-secours', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(40, 'notre-dame-du-perpetuel-secours', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(41, 'notre-dame-du-perpetuel-secours-dore', '2', 0, NULL, NULL, '50cm/70cm', NULL, 23000, '', ''),
(42, 'la-vierge-et-enfant', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(43, 'la-vierge-noire-et-enfant', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(44, 'la-vierge-noire-et-enfant', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(45, 'notre-dame-fatima', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(46, 'notre-dame-du-bon-conseil', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(47, 'notre-dame-du-bon-conseil', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(48, 'coeur-sacre-de-jesus', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(49, 'coeur-sacre-de-jesus', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(50, 'coeur-sacre-de-jesus', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(51, 'coeur-sacre-de-jesus', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(52, 'coeur-sacre-de-jesus-1', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(53, 'coeur-sacre-de-jesus-1', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(54, 'coeur-sacre-de-jesus-1', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(55, 'coeur-sacre-de-jesus-2', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(56, 'coeur-sacre-de-jesus-2', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(57, 'coeur-sacre-de-jesus-2', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(58, 'coeur-sacre-de-jesus-2', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(59, 'jesus-en-meditation', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(60, 'jesus-en-meditation', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(61, 'jesus-en-meditation', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(62, 'jesus-en-meditation', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(63, 'jesus-ressuscite', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(64, 'jesus-misericordieux', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(65, 'jesus-misericordieux', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(66, 'jesus-misericordieux', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(67, 'jesus-misericordieux', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(68, 'visage-jesus-misericordieux', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(69, 'visage-jesus-misericordieux', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(70, 'visage-jesus-misericordieux', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(71, 'visage-jesus-misericordieux', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(72, 'jesus-crucifie', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(73, 'jesus-crucifie', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(74, 'jesus-crucifie-1', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(75, 'jesus-crucifie-2', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(76, 'jesus-enseigne', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(77, 'jesus-enseigne-1', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(78, 'jesus-enseigne-2', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(79, 'jesus-epine', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(80, 'jesus-epine', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(81, 'jesus-epine', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(82, 'jesus-eucharistie', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(83, 'sainte-face', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(84, 'sainte-face', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(85, 'sainte-face', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(86, 'sainte-face', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(87, 'saint-sacrement', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(88, 'saint-sacrement', '0', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(89, 'saint-sacrement', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(90, 'saint-sacrement', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(91, 'sainte-famille', '2', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(92, 'sainte-famille', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(93, 'sainte-famille-1', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(94, 'sainte-famille-2', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(95, 'sainte-cene', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(96, 'sainte-cene', '0', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(97, 'sainte-cene', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(98, 'saint-michel-archange', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(99, 'saint-michel-archange', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(100, 'saint-michel-archange', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(101, 'saint-michel-archange', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(102, 'saint-gabriel-archange', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(103, 'sainte-trinite', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(104, 'sainte-trinite', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(105, 'sainte-trinite', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(106, 'sainte-trinite', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(107, 'saint-antoine', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(108, 'saint-antoine', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(109, 'saint-esprit', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(110, 'saint-esprit', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(111, 'saint-therese', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(112, 'saint-therese', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(113, 'saint-francois-assise', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(114, 'saint-joseph', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(115, 'saint-joseph', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(116, 'saint-joseph', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(117, 'saint-joseph', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(118, 'la-pieta', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(119, 'la-pieta', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(120, 'padre-pio', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(121, 'padre-pio', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(122, 'padre-pio', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(123, 'padre-pio-1', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(124, 'coeur-immacule', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(125, 'coeur-immacule', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(126, 'coeur-immacule', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(127, 'coeur-immacule', '2', 0, NULL, NULL, '50cm/70cm', NULL, NULL, '', ''),
(128, 'coeur-immacule-1', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(129, 'coeur-immacule-1', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(130, 'croix-de-st-francois', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(131, 'croix-de-st-francois', '2', 0, NULL, NULL, '30cm/40cm', NULL, NULL, '', ''),
(132, 'pape-francois', '2', 0, NULL, NULL, '20cm/25cm', NULL, NULL, '', ''),
(133, 'pape-francois-1', '0', 0, NULL, NULL, '5cm/10cm', NULL, NULL, '', ''),
(134, 'st-martin-de-porres', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(135, 'priere-des-1000-ave', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(136, 'priere-de-combat', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(137, 'neuvaine-esprit-saint', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(138, 'neuvaine-de-delivrance', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(139, 'le-purgatoire-existe', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(140, 'parole-amour', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(141, 'apocalypse-13', '3', 0, NULL, 200, NULL, NULL, NULL, '', ''),
(142, 'la-bible-des-peuples', '3', 0, NULL, 2500, NULL, NULL, NULL, '', ''),
(143, 'bible-bahoule', '3', 0, NULL, 2500, NULL, NULL, NULL, '', ''),
(144, 'bible-communaute-chretienne', '3', 0, NULL, 2000, NULL, NULL, NULL, '', ''),
(145, 'bible-de-jerusalem', '3', 0, NULL, 2500, NULL, NULL, NULL, '', ''),
(146, 'bible-francais-courant', '3', 0, NULL, 2000, NULL, NULL, NULL, '', ''),
(147, 'bible-tob', '3', 0, NULL, 2000, NULL, NULL, NULL, '', ''),
(148, 'sainte-bible', '3', 0, NULL, 1000, NULL, NULL, NULL, '', ''),
(149, 'veillez-et-priez', '3', 0, NULL, 1000, NULL, NULL, NULL, '', ''),
(150, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'La vie cachée de Jésus', 1500, '1', ''),
(151, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Marie, la nouvelle Eve', 4000, '2', ''),
(152, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Saint Joseph, vie et mort', 2000, '3', ''),
(153, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'La Tentation de Jésus au désert', 1500, '4', ''),
(154, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'L’élection des apôtres', 4000, '5', ''),
(155, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Les 10 Commandements', 4000, '6', ''),
(156, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Foi, Espérance, Charité', 5000, '7', ''),
(157, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Le banquet de l’amour', 1000, '8', ''),
(158, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Les béatitudes', 2500, '9', ''),
(159, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Prendre soin des orphelins : un devoir chrétien', 1500, '10', ''),
(160, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Satan', 1500, '11', ''),
(161, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Judas, fils de Satan', 1500, '12', ''),
(162, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Marie Madeleine', 2000, '13', ''),
(163, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Mort et réssurection de Lazare de Béthanie', 3500, '14', ''),
(164, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'La Passion du Christ', 2000, '15', ''),
(165, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Crucifixion et mort du Christ', 1500, '16', ''),
(166, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'La Résurrection du Christ', 2500, '17', ''),
(167, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Assomption de Marie', 1500, '18', ''),
(168, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Les 7 Sacrements de l’Eglise apostolique', 2000, '19', ''),
(169, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'La Pentecôte', 1500, '20', ''),
(170, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Prédications diverses au Temple de Jérusalem', 6000, '21', ''),
(171, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Guérisons, miracles et prodiges', 2000, '22', ''),
(172, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Guérisons, miracles et prodiges', 3500, '23', ''),
(173, 'evangile-explique', '5', 0, NULL, NULL, NULL, 'Guérisons, miracles et prodiges', 7000, '24', ''),
(174, 'crucifix-bronze', '2', 0, NULL, NULL, '11cm/5.5cm', NULL, 2000, '', ''),
(175, 'crucifix-bronze', '2', 0, NULL, NULL, '42cm/21cm', NULL, 35000, '', ''),
(176, 'crucifix-bois', '10', 0, NULL, NULL, '11cm/5.5cm', NULL, 600, '', ''),
(177, 'crucifix-bois', '10', 0, NULL, NULL, '17cm/8cm', NULL, 1200, '', ''),
(178, 'crucifix-bois', '10', 0, NULL, NULL, '25cm/13cm', NULL, 2000, '', ''),
(179, 'crucifix-bois', '10', 0, NULL, NULL, '30cm/15cm', NULL, 2500, '', ''),
(180, 'crucifix-bois-posee', '10', 0, NULL, NULL, '11cm/5.5cm', NULL, 1000, '', ''),
(181, 'crucifix-bois-posee', '10', 0, NULL, NULL, '18cm/8cm', NULL, 1500, '', ''),
(182, 'crucifix-bois-posee', '10', 0, NULL, NULL, '27cm/13cm', NULL, 2500, '', ''),
(183, 'crucifix-bois-posee', '10', 0, NULL, NULL, '32cm/15cm', NULL, 3500, '', ''),
(184, 'grotte-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1m/0.5cm', NULL, 50000, '', ''),
(185, 'grotte-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1.5m/1cm', NULL, 100000, '', ''),
(186, 'grotte-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2.5m/1.5cm', NULL, 200000, '', ''),
(187, 'grotte-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2m/1cm', NULL, 175000, '', ''),
(188, 'grotte-religieuse-argile-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1m/0.5cm', NULL, 30000, '', ''),
(189, 'grotte-religieuse-argile-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1.5m/1cm', NULL, 70000, '', ''),
(190, 'grotte-religieuse-argile-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2.5m/1.5cm', NULL, 150000, '', ''),
(191, 'grotte-religieuse-argile-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2m/1cm', NULL, 125000, '', ''),
(192, 'grotte-religieuse-granite-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1m/0.5cm', NULL, 0, '', ''),
(193, 'grotte-religieuse-granite-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1.5m/1cm', NULL, 0, '', ''),
(194, 'grotte-religieuse-granite-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2.5m/1.5cm', NULL, 0, '', ''),
(195, 'grotte-religieuse-granite-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2m/1cm', NULL, 0, '', ''),
(196, 'statue-religieuse-platre-doree-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '105cm', NULL, 80000, '', ''),
(197, 'statue-religieuse-platre-doree-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '90cm', NULL, 50000, '', ''),
(198, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '105cm', NULL, 80000, '', ''),
(199, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '90cm', NULL, 50000, '', ''),
(200, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '123cm', NULL, 100000, '', ''),
(201, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '77cm', NULL, 30000, '', ''),
(202, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '63cm', NULL, 25000, '', ''),
(203, 'statue-religieuse-platre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '45cm', NULL, 10000, '', ''),
(204, 'statue-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '105cm', NULL, 110000, '', ''),
(205, 'statue-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '63cm', NULL, 30000, '', ''),
(206, 'statue-religieuse-ciment-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '123cm', NULL, 120000, '', ''),
(207, 'statue-religieuse-marbre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1m/0.5cm', NULL, 0, '', ''),
(208, 'statue-religieuse-marbre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '1.5m/1cm', NULL, 0, '', ''),
(209, 'statue-religieuse-marbre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2.5m/1.5cm', NULL, 0, '', ''),
(210, 'statue-religieuse-marbre-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, '2m/1cm', NULL, 0, '', ''),
(211, 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '10cm', NULL, 2000, '', 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace-1'),
(212, 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '16cm', NULL, 3000, '', 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace-2'),
(213, 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '25cm', NULL, 10000, '', 'statue-religieuse-resine-colore-sainte-vierge-marie-notre-dame-toute-grace-3'),
(214, 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '10cm', NULL, 2000, '', 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace-1'),
(215, 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '16cm', NULL, 3000, '', 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace-2'),
(216, 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '25cm', NULL, 10000, '', 'statue-religieuse-resine-lumineuse-sainte-vierge-marie-notre-dame-toute-grace-3'),
(217, 'statue-religieuse-resine-colore-jesus-misericordieux', '2', 0, NULL, NULL, '19cm', NULL, 4000, '', 'statue-religieuse-resine-colore-jesus-misericordieux-1'),
(218, 'statue-religieuse-resine-lumineuse-jesus-misericordieux', '2', 0, NULL, NULL, '19cm', NULL, 4000, '', 'statue-religieuse-resine-lumineuse-jesus-misericordieux-1'),
(219, 'statue-religieuse-resine-colore-notre-dame-victoire', '2', 0, NULL, NULL, '50cm', NULL, 30000, '', ''),
(220, 'statue-religieuse-resine-colore-notre-dame-victoire', '2', 0, NULL, NULL, '65cm', NULL, 60000, '', ''),
(221, 'statue-religieuse-resine-colore-notre-dame-victoire', '2', 0, NULL, NULL, '125cm', NULL, 130000, '', ''),
(222, 'statue-religieuse-resine-lumineuse-notre-dame-victoire', '2', 0, NULL, NULL, '50cm', NULL, 30000, '', ''),
(223, 'statue-religieuse-resine-lumineuse-notre-dame-victoire', '2', 0, NULL, NULL, '65cm', NULL, 60000, '', ''),
(224, 'statue-religieuse-resine-lumineuse-notre-dame-victoire', '2', 0, NULL, NULL, '125cm', NULL, 130000, '', ''),
(225, 'statue-religieuse-platre-notre-dame-lourdes', '2', 0, NULL, NULL, '55cm', NULL, 20000, '', ''),
(226, 'statue-religieuse-platre-notre-dame-lourdes', '2', 0, NULL, NULL, '65cm', NULL, 25000, '', ''),
(227, 'statue-religieuse-platre-notre-dame-lourdes', '2', 0, NULL, NULL, '105cm', NULL, 80000, '', ''),
(228, 'statue-religieuse-polyestere-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '50cm', NULL, 25000, '', 'statue-religieuse-polyestere-sainte-vierge-marie-notre-dame-toute-grace-1'),
(229, 'statue-religieuse-polyestere-sainte-vierge-marie-notre-dame-toute-grace', '2', 0, NULL, NULL, '77cm', NULL, 40000, '', 'statue-religieuse-polyestere-sainte-vierge-marie-notre-dame-toute-grace-2'),
(230, 'statue-religieuse-resine-colore-saint-joseph0', '2', 0, NULL, NULL, '15cm', NULL, 5000, '', 'statue-religieuse-resine-colore-saint-joseph0-1'),
(231, 'statue-religieuse-resine-colore-saint-joseph0', '2', 0, NULL, NULL, '40cm', NULL, 37000, '', 'statue-religieuse-resine-colore-saint-joseph0-2'),
(232, 'statue-religieuse-resine-colore-saint-joseph', '2', 0, NULL, NULL, '30cm', NULL, 24000, '', 'statue-religieuse-resine-colore-saint-joseph-1'),
(233, 'statue-religieuse-resine-colore-saint-joseph', '2', 0, NULL, NULL, '41cm', NULL, 37000, '', 'statue-religieuse-resine-colore-saint-joseph-2'),
(234, 'statue-religieuse-resine-sainte-rita', '2', 0, NULL, NULL, '19cm', NULL, 7000, '', 'statue-religieuse-resine-sainte-rita-1'),
(235, 'statue-religieuse-resine-sainte-rita', '2', 0, NULL, NULL, '26cm', NULL, 11000, '', 'statue-religieuse-resine-sainte-rita-2'),
(236, 'statue-religieuse-resine-colore-padre-pio', '2', 0, NULL, NULL, '11cm', NULL, 3000, '', 'statue-religieuse-resine-colore-padre-pio-0'),
(237, 'statue-religieuse-resine-colore-padre-pio', '2', 0, NULL, NULL, '16cm', NULL, 6000, '', 'statue-religieuse-resine-colore-padre-pio-2'),
(238, 'statue-religieuse-resine-colore-padre-pio', '2', 0, NULL, NULL, '20cm', NULL, 8000, '', 'statue-religieuse-resine-colore-padre-pio-3'),
(239, 'statue-religieuse-resine-colore-padre-pio', '2', 0, NULL, NULL, '39cm', NULL, 37000, '', 'statue-religieuse-resine-colore-padre-pio-4'),
(240, 'statue-religieuse-resine0-colore-saint-michel', '2', 0, NULL, NULL, '13cm', NULL, 2000, '', 'statue-religieuse-resine0-colore-saint-michel-1'),
(241, 'statue-religieuse-resine0-colore-saint-michel', '2', 0, NULL, NULL, '19cm', NULL, 5000, '', 'statue-religieuse-resine0-colore-saint-michel-2'),
(242, 'statue-religieuse-resine0-colore-saint-michel', '2', 0, NULL, NULL, '24cm', NULL, 8000, '', 'statue-religieuse-resine0-colore-saint-michel-3'),
(243, 'statue-religieuse-resine-colore-saint-michel', '2', 0, NULL, NULL, '12cm', NULL, 5000, '', 'statue-religieuse-resine-colore-saint-michel-1'),
(244, 'statue-religieuse-resine-colore-saint-michel', '2', 0, NULL, NULL, '22cm', NULL, 15000, '', 'statue-religieuse-resine-colore-saint-michel-2'),
(245, 'statue-religieuse-resine0-lumineuse-saint-michel', '2', 0, NULL, NULL, '13cm', NULL, 2000, '', 'statue-religieuse-resine0-lumineuse-saint-michel-1'),
(246, 'statue-religieuse-resine0-lumineuse-saint-michel', '2', 0, NULL, NULL, '19cm', NULL, 5000, '', 'statue-religieuse-resine0-lumineuse-saint-michel-2'),
(247, 'statue-religieuse-resine0-colore-coeur-sacre-jesus', '2', 0, NULL, NULL, '17cm', NULL, 3500, '', 'statue-religieuse-resine-colore-coeur-sacre-jesus-1'),
(248, 'grotte-religieuse-sur-commande', '2', 0, NULL, NULL, 'en Granit', NULL, 0, '', ''),
(249, 'grotte-religieuse-sur-commande', '2', 0, NULL, NULL, 'en Pierre', NULL, 0, '', ''),
(250, 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, 'en Plâtre', NULL, 0, '', ''),
(251, 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, 'en Fibro-ciment', NULL, 0, '', ''),
(252, 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, 'en Granit', NULL, 0, '', ''),
(253, 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, 'en Poudre de marbre', NULL, 0, '', ''),
(254, 'statue-religieuse-resine-lumineuse-coeur-sacre-jesus', '2', 0, NULL, NULL, '17cm', NULL, 4000, '', 'statue-religieuse-resine-lumineuse-coeur-sacre-jesus-1'),
(255, 'statue-religieuse-sainte-vierge-marie-notre-dame-toute-grace-sur-commande', '2', 0, NULL, NULL, 'en Polyestère', NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `id` varchar(4) NOT NULL,
  `prospecteur` varchar(20) NOT NULL,
  `reduc` int(4) NOT NULL,
  `autre` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `promotions`
--

INSERT INTO `promotions` (`id`, `prospecteur`, `reduc`, `autre`) VALUES
('KJhk', 'achi cyrille', 1000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`id` int(5) NOT NULL,
  `id_retraite` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nombre` int(2) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel1` varchar(15) NOT NULL,
  `tel2` varchar(15) DEFAULT NULL,
  `adresse` varchar(150) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `montant` int(7) DEFAULT NULL,
  `type_de_tel` varchar(50) DEFAULT NULL,
  `phone_compte` varchar(15) DEFAULT NULL,
  `phone_compte_user` varchar(15) DEFAULT NULL,
  `type_de_lig` varchar(50) DEFAULT NULL,
  `email_compte` varchar(50) DEFAULT NULL,
  `email_compte_user` varchar(50) DEFAULT NULL,
  `type_de_carte` varchar(50) DEFAULT NULL,
  `numero` int(20) DEFAULT '0',
  `secu` int(3) DEFAULT NULL,
  `nomp` varchar(50) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_retraite`, `username`, `nombre`, `nom`, `email`, `tel1`, `tel2`, `adresse`, `pays`, `timestamp`, `date1`, `date2`, `montant`, `type_de_tel`, `phone_compte`, `phone_compte_user`, `type_de_lig`, `email_compte`, `email_compte_user`, `type_de_carte`, `numero`, `secu`, `nomp`, `validation`) VALUES
(1, 0, 'week', 1, 'KJHJKH', 'KJJ@DSDQ.SDQ', '0022598798787', '', 'KHKJHKJ', 'cotedivoire', '2014-12-11 18:38:27', '0000-00-00', '0000-00-00', 0, 'orangemoney', '0022559724963', '225', '', '', '', '', 0, 0, '', 0),
(2, 0, 'week', 1, 'ujhjo', 'hhu@fds.fds', '0022598908982', '', 'jhuihui', 'cotedivoire', '2014-12-11 19:33:07', '0000-00-00', '0000-00-00', 0, 'orangemoney', '0022559724963', '225', '', '', '', '', 0, 0, '', 0),
(3, 0, 'week', 1, 'hjgjh', 'jhgh@qddsq.qds', '0022578687687', '', 'gjhgjh', 'cotedivoire', '2014-12-24 10:31:26', '0000-00-00', '0000-00-00', 0, 'orangemoney', '0022559724963', '225', '', '', '', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ret`
--

CREATE TABLE IF NOT EXISTS `ret` (
`id` int(3) NOT NULL,
  `user_name` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `places` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `ret`
--

INSERT INTO `ret` (`id`, `user_name`, `date`, `places`) VALUES
(1, 'fermee', '2015-04-17', 999),
(2, 'ouverte', '2015-08-14', 999),
(3, 'week', '2015-02-13', 1000),
(5, 'week', '2015-03-13', 1000),
(6, 'week', '2015-04-10', 1000),
(7, 'week', '2015-05-08', 1000),
(8, 'week', '2015-06-12', 1000),
(9, 'week', '2015-07-10', 1000),
(10, 'week', '2015-08-14', 1000),
(11, 'week', '2015-09-11', 1000),
(12, 'week', '2015-10-09', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `Scnnexions`
--

CREATE TABLE IF NOT EXISTS `Scnnexions` (
  `ip` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Scnnexions`
--

INSERT INTO `Scnnexions` (`ip`, `timestamp`) VALUES
('41.242.34.157||', '1418040907||');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id_produits`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`heure`);

--
-- Index pour la table `cnnexions`
--
ALTER TABLE `cnnexions`
 ADD PRIMARY KEY (`ip`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscripts`
--
ALTER TABLE `inscripts`
 ADD PRIMARY KEY (`id_inscript`);

--
-- Index pour la table `liens`
--
ALTER TABLE `liens`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
 ADD PRIMARY KEY (`id_liste`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `options_article`
--
ALTER TABLE `options_article`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ret`
--
ALTER TABLE `ret`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `id_produits` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT pour la table `inscripts`
--
ALTER TABLE `inscripts`
MODIFY `id_inscript` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `liens`
--
ALTER TABLE `liens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
MODIFY `id_liste` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `options_article`
--
ALTER TABLE `options_article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ret`
--
ALTER TABLE `ret`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
