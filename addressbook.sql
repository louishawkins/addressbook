# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.14.04.1)
# Database: addressbook
# Generation Time: 2014-11-25 17:32:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table address_person
# ------------------------------------------------------------

DROP TABLE IF EXISTS `address_person`;

CREATE TABLE `address_person` (
  `address_id` int(11) unsigned NOT NULL,
  `person_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`address_id`,`person_id`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `address_person_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `address_person_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`add_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `address_person` WRITE;
/*!40000 ALTER TABLE `address_person` DISABLE KEYS */;

INSERT INTO `address_person` (`address_id`, `person_id`)
VALUES
	(1,1),
	(18,15),
	(19,16),
	(20,17);

/*!40000 ALTER TABLE `address_person` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table addresses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `add_id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `zip` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;

INSERT INTO `addresses` (`add_id`, `street`, `city`, `state`, `zip`)
VALUES
	(1,'PO BOX 877','Castroville ','TX','78009'),
	(2,'45 Smith','Sinton','TX','78102'),
	(3,'47 Smith','Sims','TX','78104'),
	(4,'45 Jake','Lytle','TX','78105'),
	(5,'45 Smith','Sinton','TX','78102'),
	(6,'47 Smith','Sims','TX','78104'),
	(7,'45 Jake','Lytle','TX','78105'),
	(8,'45 Smith','Sinton','TX','78102'),
	(9,'47 Smith','Sims','TX','78104'),
	(10,'45 Jake','Lytle','TX','78105'),
	(11,'45 Smith','Sinton','TX','78102'),
	(12,'47 Smith','Sims','TX','78104'),
	(13,'45 Jake','Lytle','TX','78105'),
	(14,'4062 Tallulah','San anto','Texas','78218'),
	(15,'33 fake street','Indy','IN','46205'),
	(16,'Beanstock lane','Kingsville','Tx','78654'),
	(17,'4062 Tallulah','Beeville','Texas','78218'),
	(18,'4062 Tallulah','Oaktown','Texas','78218'),
	(19,'4062 Tallulah','Jay','Texas','78218'),
	(20,'4062 Tallulah','Djd','Texas','78218');

/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table people
# ------------------------------------------------------------

DROP TABLE IF EXISTS `people`;

CREATE TABLE `people` (
  `p_id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `ph_num` char(10) DEFAULT '',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;

INSERT INTO `people` (`p_id`, `first_name`, `last_name`, `ph_num`)
VALUES
	(1,'John','Staudt','210-998-98'),
	(2,'Louis','Hawkins','210-998-98'),
	(3,'Paul','Kuzma','210-998-99'),
	(4,'joe','smith','222-222-22'),
	(5,'John','Staudt','333-3333'),
	(6,'John','Staudt','333-3322'),
	(7,'J','S','34343'),
	(8,'S','S','S'),
	(9,'Skjfd','Sldkjf','2323223'),
	(10,'Fake','Fake','32323'),
	(11,'John','Staudt','1212'),
	(12,'Paul','Kuzma','555-5555'),
	(13,'Jack','Bean','234-2333'),
	(14,'John','Staudt','444-3333'),
	(15,'John','Staudt','555-5555'),
	(16,'John','Staudt','22'),
	(17,'John','Staudt','33');

/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
