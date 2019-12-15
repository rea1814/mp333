-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: mp3
-- ------------------------------------------------------
-- Server version	5.1.41-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `free`
--

DROP TABLE IF EXISTS `free`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `free` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `nick` char(10) NOT NULL,
  `subject` char(100) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `is_html` char(1) DEFAULT NULL,
  `file_name_0` char(40) DEFAULT NULL,
  `file_name_1` char(40) DEFAULT NULL,
  `file_name_2` char(40) DEFAULT NULL,
  `file_name_3` char(40) DEFAULT NULL,
  `file_name_4` char(40) DEFAULT NULL,
  `file_copied_0` char(30) DEFAULT NULL,
  `file_copied_1` char(30) DEFAULT NULL,
  `file_copied_2` char(30) DEFAULT NULL,
  `file_copied_3` char(30) DEFAULT NULL,
  `file_copied_4` char(30) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free`
--

LOCK TABLES `free` WRITE;
/*!40000 ALTER TABLE `free` DISABLE KEYS */;
/*!40000 ALTER TABLE `free` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_ripple`
--

DROP TABLE IF EXISTS `free_ripple`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `free_ripple` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `nick` char(10) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_ripple`
--

LOCK TABLES `free_ripple` WRITE;
/*!40000 ALTER TABLE `free_ripple` DISABLE KEYS */;
/*!40000 ALTER TABLE `free_ripple` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `name` char(10) NOT NULL,
  `id` char(15) NOT NULL,
  `pass` char(15) NOT NULL,
  `nick` char(10) NOT NULL,
  `hp` char(20) NOT NULL,
  `email` char(80) DEFAULT NULL,
  `regist_day` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('Áö¾ð','jwjw','1111','Áö¾ð','123-123','ff@fff',NULL),('·¡Á¤','rea','1234','·¡Á¤','5656-565','aaaa@aa',NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-15 23:50:41
