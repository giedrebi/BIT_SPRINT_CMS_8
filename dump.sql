CREATE DATABASE  IF NOT EXISTS `cms_project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cms_project`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cms_project
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `isRoot` int(11) NOT NULL DEFAULT 1,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home',0,'<p>Welcome to Food Spot!</p></br>\r\n<p>Here you can find food recipes for your breakfast, lunch, dinner or even snack recipes.</p></br>\r\n<p>Are you vegan? Do not worry, because we will have some recipes for you as well.</p></br>\r\n<img src=\"https://images.pexels.com/photos/5908252/pexels-photo-5908252.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2\" alt=\"cooking\" width=\"800\"/>\r\n'),(2,'About',1,'<p>My name is Giedre, and I love cooking!</p>\r\n<img src=\"https://images.pexels.com/photos/7669561/pexels-photo-7669561.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2\" alt=\"cooking\" width=\"650\"/>\r\n'),(3,'Recipes',1,'<h4>Lemony prawn & courgette tagliatelle</h4></br>\r\n<img src=\"https://images.immediate.co.uk/production/volatile/sites/30/2018/05/CourgettePrawnPasta-b44d874.jpg?resize=960,872?quality=90&webp=true&resize=375,341\" alt=\"Lemony prawn & courgette tagliatelle\" width=\"500\"/></br></br>\r\n<h6>Ingredients:</h6>\r\n<p>2 tbsp olive oil</p>\r\n<p>2 courgettes (about 500g), trimmed and coarsely grated</p>\r\n<p>1 large garlic clove , finely grated</p>\r\n<p>1 small red chilli , finely chopped</p>\r\n<p>180g tagliatelle</p>\r\n<p>150g raw king prawns , peeled and deveined</p>\r\n<p>1 lemon , zested and juiced</p>\r\n<p>½ small bunch of parsley , finely chopped</p> </br>\r\n<h6>STEP 1</h6>\r\n<p>Heat the oil in a frying pan and fry the courgette for 4-5 mins, then stir through the garlic and chilli.</p>\r\n<h6>STEP 2</h6>\r\n<p>Cook the tagliatelle following pack instructions. Drain, reserving some of the cooking water.</p>\r\n<h6>STEP 3</h6>\r\n<p>Add the prawns to the courgette mixture, and cook for 2 mins until pink. Toss through the tagliatelle, the lemon zest and juice, parsley, some seasoning and a splash of the reserved cooking water. Divide between bowls and serve.</p>'),(4,'Contacts',1,'<p>You can contact me via email giedrebielske@gmail.com</p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','c93ccd78b2076528346216b3b2f701e6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-04 22:02:13
