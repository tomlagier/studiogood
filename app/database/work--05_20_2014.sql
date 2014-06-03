# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: studiogood-com2
# Generation Time: 2014-05-20 18:40:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table work_table
# ------------------------------------------------------------

DROP TABLE IF EXISTS `work_table`;

CREATE TABLE `work_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `project_name` varchar(255) NOT NULL DEFAULT '',
  `project_type` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `work_table` WRITE;
/*!40000 ALTER TABLE `work_table` DISABLE KEYS */;

INSERT INTO `work_table` (`id`, `active`, `project_name`, `project_type`, `description`, `image`, `thumbnail`, `url`, `created_at`, `updated_at`)
VALUES
	(1,1,'Work One Project','good-work','Exercitation squid banh mi kogi, leggings freegan crucifix semiotics Wes Anderson stumptown church-key deserunt wolf Vice nisi. Crucifix nostrud jean shorts, pariatur American Apparel consequat magna elit. Kogi letterpress tousled pork belly, Portland Vice readymade eu sriracha Pinterest PBR&B duis Odd Future qui. Street art squid butcher next level trust fund. Polaroid aesthetic freegan, disrupt pour-over flexitarian hashtag semiotics incididunt stumptown beard Shoreditch. Minim trust fund viral, 90\'s tousled laboris ut Truffaut banh mi Pinterest. Assumenda consequat hella Shoreditch eu.\n\nLo-fi selfies McSweeney\'s wolf Godard voluptate. Labore Truffaut commodo lomo Neutra, you probably haven\'t heard of them cornhole 8-bit mixtape cray pariatur deserunt hella. Hella twee seitan flexitarian aesthetic. Food truck pour-over cliche et squid artisan American Apparel veniam, literally Etsy whatever put a bird on it. Labore Etsy quinoa viral, jean shorts consequat cornhole art party trust fund pour-over meggings tote bag. Gluten-free roof party nisi enim crucifix, Carles consectetur Banksy Austin Williamsburg. Jean shorts sunt est, seitan nostrud meh sartorial laboris.\n\nLeggings non commodo chia quinoa ennui ethnic flannel you probably haven\'t heard of them, pariatur ex 90\'s readymade. Anim Pinterest banh mi tattooed, kitsch raw denim tote bag four loko 8-bit flannel mustache bitters. XOXO nihil do Austin velit duis eu consequat. Swag gastropub drinking vinegar, VHS nihil Kickstarter do ut umami aliqua XOXO paleo shabby chic skateboard four loko. Cray vinyl laborum, Helvetica mlkshk fixie cupidatat Pinterest accusamus retro adipisicing bespoke forage Bushwick. Scenester salvia distillery, officia cupidatat esse leggings tattooed roof party blog. Shoreditch quis Blue Bottle aesthetic nisi, beard ad ugh Truffaut elit.','work-1_main.jpg','work-1_thumb.jpg','http://americanheritagechocolate.com','2014-05-20 18:26:09','2014-05-20 18:26:09'),
	(2,1,'Work Two Project','work-for-good','Exercitation squid banh mi kogi, leggings freegan crucifix semiotics Wes Anderson stumptown church-key deserunt wolf Vice nisi. Crucifix nostrud jean shorts, pariatur American Apparel consequat magna elit. Kogi letterpress tousled pork belly, Portland Vice readymade eu sriracha Pinterest PBR&B duis Odd Future qui. Street art squid butcher next level trust fund. Polaroid aesthetic freegan, disrupt pour-over flexitarian hashtag semiotics incididunt stumptown beard Shoreditch. Minim trust fund viral, 90\'s tousled laboris ut Truffaut banh mi Pinterest. Assumenda consequat hella Shoreditch eu.\n\nLo-fi selfies McSweeney\'s wolf Godard voluptate. Labore Truffaut commodo lomo Neutra, you probably haven\'t heard of them cornhole 8-bit mixtape cray pariatur deserunt hella. Hella twee seitan flexitarian aesthetic. Food truck pour-over cliche et squid artisan American Apparel veniam, literally Etsy whatever put a bird on it. Labore Etsy quinoa viral, jean shorts consequat cornhole art party trust fund pour-over meggings tote bag. Gluten-free roof party nisi enim crucifix, Carles consectetur Banksy Austin Williamsburg. Jean shorts sunt est, seitan nostrud meh sartorial laboris.\n\nLeggings non commodo chia quinoa ennui ethnic flannel you probably haven\'t heard of them, pariatur ex 90\'s readymade. Anim Pinterest banh mi tattooed, kitsch raw denim tote bag four loko 8-bit flannel mustache bitters. XOXO nihil do Austin velit duis eu consequat. Swag gastropub drinking vinegar, VHS nihil Kickstarter do ut umami aliqua XOXO paleo shabby chic skateboard four loko. Cray vinyl laborum, Helvetica mlkshk fixie cupidatat Pinterest accusamus retro adipisicing bespoke forage Bushwick. Scenester salvia distillery, officia cupidatat esse leggings tattooed roof party blog. Shoreditch quis Blue Bottle aesthetic nisi, beard ad ugh Truffaut elit.','work-2_main.jpg','work-2_thumb.jpg','http://www.btmitsonyou.org','2014-05-20 18:34:46','2014-05-20 18:34:46');

/*!40000 ALTER TABLE `work_table` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
