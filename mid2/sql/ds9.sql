-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 06:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE ds9;
  
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds9`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `detailedInfo` (IN `seasonIn` INT, IN `episodeIn` INT)  BEGIN
      SELECT season, episode, title, stardate, airdate, summary 
      FROM ds9 
      WHERE season = seasonIn AND episode = episodeIn;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getIndex` ()  NO SQL
SELECT season, episode, title, stardate from ds9$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ds9`
--

CREATE TABLE `ds9` (
  `season` int(3) NOT NULL,
  `episode` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stardate` varchar(255) NOT NULL,
  `airdate` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ds9`
--

INSERT INTO `ds9` (`season`, `episode`, `title`, `stardate`, `airdate`, `summary`) VALUES
(1, 1, 'Emissary', '46379.1', 'January 3, 1993', 'A new crew is assigned to a former Cardassian space station: Deep Space Nine. It is a joint Federation/Bajoran force, with Commander Sisko in charge, but his life is dramatically changed when he is declared the Emissary to the Prophets by a Bajoran priest'),
(1, 2, 'Past Prologue', '46397.3', 'January 10, 1993', 'A Bajoran terrorist with ties to Kira arrives on Deep Space Nine and is pursued by the Cardassians. Garak is introduced.'),
(1, 3, 'A Man Alone', '46421.5', 'January 17, 1993', 'Odo is accused of the murder of a Bajoran murderer.'),
(1, 4, 'Babel', '46423.7', 'January 24, 1993', 'A mysterious virus plagues the station, causing speech distortions and eventually death.'),
(1, 5, 'Captive Pursuit', '46477.5', 'January 31, 1993', 'O\'Brien befriends an alien from the Gamma Quadrant who is being hunted.'),
(1, 6, 'Q-Less', '46531.2', 'February 7, 1993', 'Q and Vash arrive on Deep Space Nine. However, Vash has realized the annoyance of Q and wants him to leave her alone.'),
(1, 7, 'Dax', '46910.1', 'February 14, 1993', 'Jadzia Dax is accused of a murder committed by her symbiont in another lifetime.'),
(1, 8, 'The Passenger', '465570.8', 'February 21, 1993', 'A sinister criminal is hiding in the mind of someone on Deep Space Nine, but Bashir struggles to understand how it works.'),
(1, 9, 'Move Along Home', '46612.4', 'March 14, 1993', 'Quark is forced to play a game by the Wadi, a newly encountered species, and the lives of the crew depend on the outcome.'),
(1, 10, 'The Nagus', '46657', 'March 21, 1993', 'Quark is named as the head of the Ferengi Alliance by Grand Nagus Zek, but he is now surrounded by enemies.'),
(1, 11, 'Vortex', '46689.6', 'April 18, 1993', 'Odo discovers he might not be the only one of his kind when a visitor from the Gamma Quadrant claims he can contact Odo\'s people.'),
(1, 12, 'Battle Lines', '46715.2', 'April 25, 1993', 'The spiritual leader of Bajor, Kai Opaka, travels with Sisko on a trip to the Gamma Quadrant but is stranded with him on a world where the dead are resurrected.'),
(1, 13, 'The Storyteller', '46729.1', 'May 2, 1993', 'O\'Brien is recruited to save a Bajoran village from destruction by a mysterious cloud creature.'),
(1, 14, 'Progress', '46844.3', 'May 9, 1993', 'Kira has to deal with a stubborn farmer (Brian Keith) who refuses to leave his home even though it is slated for demolition.'),
(1, 15, 'If Wishes Were Horses', '46853.2', 'May 16, 1993', 'Deep Space Nine is put in jeopardy when the crew\'s thoughts manifest themselves, and such figures as Rumpelstiltskin appear.'),
(1, 16, 'The Forsaken', '46925.1', 'May 23, 1993', 'The Federation ambassador from Betazed, Lwaxana Troi, visits the station, and develops an affection for Odo.'),
(1, 17, 'Dramatis Personae', '46922.3', 'May 30, 1993', 'A Klingon ship comes through the wormhole and explodes. A mutiny is considered.'),
(1, 18, 'Duet', '46933.4', 'June 13, 1993', 'A visiting Cardassian, Marritza, may in fact be the notorious war criminal Gul Darhe\'el, butcher of Gallitep Labor camp, and Kira is determined to bring him down.'),
(1, 19, 'In the Hands of the Prophets', '46951.7', 'June 20, 1993', 'Friction escalates when Vedek Winn arrives on Deep Space Nine and discovers schoolteacher Keiko O\'Brien is teaching about aliens in the Bajoran wormhole.'),
(2, 1, 'The Homecoming', '47101.2', 'September 26, 1993', 'Quark gives Kira a Bajoran earring he claims was sent as a message from a Cardassian mining planet.'),
(2, 2, 'The Circle', '47101.2', 'October 3, 1993', 'The Circle attempts to topple the Bajoran government, but there is more to the situation than meets the eye'),
(2, 3, 'The Siege', '47101.2', 'October 3, 1993', 'Sisko and Li Nalas help stop Deep Space Nine from being commandeered by the Bajorans, while Kira and Dax try to put an end to the Circle by presenting evidence that Minister Jaro is being backed by the Cardassians.'),
(2, 4, 'Invasive Procedures', '47182.1', 'October 3, 1993', 'A plasma storm leads to the evacuation of most of the station, but a Trill refugee has his own plans.'),
(2, 5, 'Cardassians', '47177.2', 'October 3, 1993', 'Garak investigates the identity of a Cardassian boy, Rugal, abandoned on Bajor, who has been raised by a Bajoran.'),
(2, 6, 'Melora', '47229.1', 'October 3, 1993', 'Bashir tries to help Ensign Melora Pazlar, the first Elaysian to join Starfleet, adjust to normal gravity.'),
(2, 7, 'Rules of Acquisition', '47261.7', 'November 7, 1993', 'Quark represents Grand Nagus Zek in a plot to establish a Ferengi business presence in the Gamma Quadrant. Pel, a young Ferengi, teams up with Quark and they learn that to do business in the Gamma Quadrant they must contact the Keremma, a member race of t'),
(2, 8, 'Necessary Evil', '47282.5', 'November 14, 1993', 'When Quark is shot, Odo re-opens a five-year-old murder case of Mr. Vaatrik who was a Cardassian collaborator.'),
(2, 9, 'Second Sight', '47329.4', 'November 21, 1993', 'A mysterious woman, Fenna, catches Sisko\'s eye during their fleeting meetings.'),
(2, 10, 'Sanctuary', '47391.2', 'November 28, 1993', 'The Skrreea, displaced humanoid farmers from the Gamma Quadrant, claim Bajor as Kentanna, their legendary homeland.'),
(2, 11, 'Rivals', '47349.2', 'January 2, 1994', 'Quark feels threatened when a charming swindler, Martus Mazur, opens a competing bar (Club Martus).'),
(2, 12, 'The Alternate', '47352.1', 'January 9, 1994', 'A scientist, Dr. Mora Pol of the Bajoran Science Institute, finds a life-form in the Gamma Quadrant that may be related to Odo.'),
(2, 13, 'Armageddon Game', '47444.8', 'January 30, 1994', 'O\'Brien and Bashir help two warring races, the Kellerans and T\'lani, erase all knowledge of a deadly biological weapon, but are not trusted to keep what they have learned a secret.'),
(2, 14, 'Whispers', '47581.2', 'February 6, 1994', 'While preparing the station for upcoming peace talks, O\'Brien discovers that the crew have been hiding information from him and giving orders behind his back. O\'Brien begins to suspect everyone on the station is gradually being altered or replaced by an u'),
(2, 15, 'Paradise', '47573.1', 'February 13, 1994', 'Commander Sisko and Chief O\'Brien are stranded on a planet, Aurelius, where their leader, Alixus, rejects technology, even when it means the death of others.'),
(2, 16, 'Shadowplay', '47603.3', 'February 20, 1994', 'Odo and Dax investigate why a village\'s residents are disappearing.'),
(2, 17, 'Playing God', '47678.3', 'February 27, 1994', 'A proto-universe threatens to destroy the station and Bajor. Dax has a field docent (a Trill candidate initiate), named Arjin, whom she helps find his voice — to discover what he wants from life and from joining.'),
(2, 18, 'Profit and Loss', '47678.3', 'March 20, 1994', 'Quark is reunited with his former Cardassian lover, Natima Lang, but she is engaged in dangerous political intrigue with her students Rekela and Hogue: they want to reduce the political power of the Cardassian military.'),
(2, 19, 'Blood Oath', '47678.3', 'March 27, 1994', 'Jadzia Dax honors an oath made by Curzon Dax to three Klingons (Kor, Koloth, and Kang), and goes with them on a crusade against their sworn enemy the Albino who murdered their firstborn children as revenge for stopping his raid on a Klingon colony.'),
(2, 20, 'The Maquis, Part I', '47678.3', 'April 24, 1994', 'Federation colonists reject a treaty with Cardassia and take matters into their own hands, forming a terrorist group called \'The Maquis\'.'),
(2, 21, 'The Maquis, Part I', '47678.3', 'May 1, 1994', 'In order to save Garak\'s life, Bashir must unravel some of the secrets in the Cardassian\'s past.'),
(2, 22, 'The Wire', '47802.3', 'May 8, 1994', 'Kira and Bashir accidentally cross into the Mirror Universe, where a Klingon-Cardassian alliance rules. A century before, James T. Kirk had made a similar crossover, affecting human and galactic history. Terrans are slaves on the station.'),
(2, 23, 'Crossover', '47805.1', 'May 15, 1994', 'A Bajoran secretary named Kubus, who aided the Cardassian occupation forces wants to return home from exile. Vedek Winn engages in a power play to become Kai against Vedek Bareil.'),
(2, 24, 'The Collaborator', '47849.8', 'May 22, 1994', 'O\'Brien is declared guilty of an unspecified crime and later tried at a tribunal held on Cardassia Prime.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
