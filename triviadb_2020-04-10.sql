# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.8-MariaDB)
# Database: triviadb
# Generation Time: 2020-04-09 21:59:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


--
-- Database: `triviadb`
--


# Dump of table quiz
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quiz`;

CREATE TABLE `quiz` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  `quesone` varchar(100) DEFAULT '',
  `questwo` varchar(100) DEFAULT '',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;

INSERT INTO `quiz` (`id`, `name`, `quesone`, `questwo`, `date`)
VALUES
	(27,'Ankit','Virat Kohli','Yellow,Orange,Green','2020-04-09 11:38:59'),
	(28,'Ankit','Virat Kohli','Yellow,Orange,Green','2020-04-09 11:40:44'),
	(29,'Ankit','Virat Kohli','Yellow,Orange,Green','2020-04-09 11:42:05'),
	(30,'Ankit','Virat Kohli','Yellow,Orange','2020-04-10 03:26:23');

/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
