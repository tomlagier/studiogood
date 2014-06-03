# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: studiogood-com2
# Generation Time: 2014-05-15 22:57:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table people_table
# ------------------------------------------------------------

DROP TABLE IF EXISTS `people_table`;

CREATE TABLE `people_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `job_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `tattoos` int(100) NOT NULL,
  `biography` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `twitter` varchar(255) NOT NULL DEFAULT '',
  `linkedin` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `people_table` WRITE;
/*!40000 ALTER TABLE `people_table` DISABLE KEYS */;

INSERT INTO `people_table` (`id`, `active`, `name`, `job_title`, `location`, `tattoos`, `biography`, `image`, `twitter`, `linkedin`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,'Ryan S. Stuhl','Web Developer, Snark Administrator','San Luis Obispo',1,'I hail from the frozen tundra of the great western Canadian Plains.','test_avatar.jpg','rstuhl','https://www.linkedin.com/pub/ryan-stuhl/11/a9a/558','2014-05-15 18:26:42','2014-05-15 22:36:50',NULL),
	(2,1,'Sally Trigg Clayton','VP, Client Programs','San Luis Obispo',0,'Wes Anderson slow-carb ad Godard odio consequat. 3 wolf moon bespoke sustainable commodo, mlkshk yr eiusmod pug Tonx try-hard narwhal chia Neutra fixie. Marfa letterpress occaecat odio, butcher kitsch aesthetic normcore American Apparel esse. Vinyl normcore ethical, tempor veniam Wes Anderson fixie nihil beard vegan ad Odd Future leggings Williamsburg deserunt. Pug stumptown ennui mumblecore master cleanse. Whatever asymmetrical raw denim laboris Austin. Truffaut chillwave Schlitz, asymmetrical beard mollit iPhone flexitarian cillum disrupt banh mi pour-over XOXO magna direct trade.','Sally.jpg','sallytrigg','www.linkedin.com/pub/sally-trigg-clayton/0/bb/642','2014-05-15 18:42:13','2014-05-15 22:36:55',NULL),
	(3,1,'Kristin Kenney','Job Title Goes Here','San Luis Obispo',75,'Occupy readymade post-ironic, nisi seitan church-key master cleanse eu locavore labore meggings street art craft beer fugiat synth. IPhone Pitchfork American Apparel nostrud et, Godard food truck Neutra nisi fingerstache officia fanny pack cred DIY. Magna 3 wolf moon qui, gastropub Intelligentsia eu cupidatat mumblecore labore Pitchfork post-ironic. Portland ex PBR&B cardigan sustainable, nisi occupy id small batch American Apparel. Try-hard crucifix Echo Park readymade gentrify, ugh cliche. Artisan messenger bag deep v, ugh retro banh mi commodo food truck Kickstarter Shoreditch qui. Biodiesel you probably haven\'t heard of them slow-carb McSweeney\'s duis mlkshk.','Kristin.jpg','kkenney90','www.linkedin.com/pub/kristin-kenney/29/498/5a7','2014-05-15 18:48:17','2014-05-15 22:36:44',NULL),
	(4,1,'Jake Faulstich','Account Manager, Cheif of Keepin\' It Real','San Luis Obispo',8,'Gluten-free flannel art party culpa, fugiat reprehenderit fap umami wolf vegan church-key quis. Nostrud kale chips pug, vinyl paleo wayfarers organic Shoreditch viral 3 wolf moon XOXO laboris Bushwick stumptown. Ea ex fashion axe asymmetrical, American Apparel before they sold out skateboard fugiat bitters farm-to-table typewriter butcher. Farm-to-table magna do ethnic food truck whatever occupy qui, accusamus ad. DIY Vice synth aute minim. Officia tousled scenester, flexitarian pariatur dolore next level leggings nihil Portland before they sold out pug vegan beard. +1 sartorial Echo Park, artisan velit actually mixtape distillery PBR&B cardigan ethnic High Life.','Jake.jpg','jkfaul','www.linkedin.com/in/jakefaulstich','2014-05-15 18:50:00','2014-05-15 22:36:36',NULL),
	(5,1,'Melissa Kirkwood','Graphic Designer','San Luis Obispo',5,'Do small batch dreamcatcher, Carles Intelligentsia kitsch pork belly freegan deserunt aesthetic. Paleo raw denim sint, art party bespoke ugh High Life messenger bag fap Godard cliche ethical. Paleo minim single-origin coffee, organic forage keffiyeh dolore sunt ad photo booth crucifix pork belly esse stumptown aute. Mollit mixtape culpa cliche Marfa cred sed do. Fixie eu aliqua mustache Brooklyn, skateboard shabby chic anim drinking vinegar excepteur consectetur butcher. 90\'s PBR squid flannel adipisicing. Freegan officia hella, Kickstarter incididunt actually artisan salvia aliqua qui keytar literally.','Meli.jpg','studiogood','www.linkedin.com/in/melikirkwood','2014-05-15 18:51:46','2014-05-15 22:36:31',NULL),
	(6,1,'Joey Leslie','El Presidente','San Luis Obispo',1,'Pitchfork post-ironic butcher, kale chips sunt ugh sriracha tousled church-key sustainable salvia ethical aesthetic. IPhone ad High Life dolor. Lo-fi proident minim American Apparel tempor. Bespoke dolore cillum salvia, adipisicing placeat seitan Schlitz. Cillum exercitation butcher craft beer est, in proident mustache placeat street art nulla slow-carb tempor squid you probably haven\'t heard of them. Fingerstache 8-bit selvage Austin bitters. Velit gluten-free sriracha roof party.','Joey.jpg','jleslie','www.linkedin.com/in/joeyleslie','2014-05-15 18:52:59','2014-05-15 22:36:26',NULL),
	(7,1,'Tom Lagier','Web Developer, Clinical Genius','San Luis Obispo',0,'Kogi Neutra polaroid leggings, retro craft beer DIY raw denim Tumblr placeat art party mumblecore before they sold out Bushwick vero. Carles non PBR&B fugiat est normcore, keffiyeh wolf dreamcatcher Banksy consequat et bicycle rights. Mlkshk drinking vinegar whatever, nostrud sartorial sustainable salvia XOXO. Viral before they sold out banjo quinoa tote bag, gentrify cred literally hella Godard aliqua roof party. Fashion axe plaid mumblecore dreamcatcher Etsy try-hard. Plaid fashion axe vegan proident street art, nisi tousled fanny pack vinyl vero typewriter direct trade artisan XOXO do. Chia Helvetica bicycle rights, ugh laborum eiusmod Tonx beard roof party master cleanse.','Tom.jpg','LagierGear','www.linkedin.com/in/thomaslagier','2014-05-15 18:54:24','2014-05-15 22:36:21',NULL);

/*!40000 ALTER TABLE `people_table` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
