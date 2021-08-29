-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: developm_proj
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `developm_proj`
--


--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,5,'SERVICES','poor'),(2,5,'SERVICES','great');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_pic`
--

DROP TABLE IF EXISTS `profile_pic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_pic` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `profile_pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_pic`
--

LOCK TABLES `profile_pic` WRITE;
/*!40000 ALTER TABLE `profile_pic` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_pic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (16,'test','turnertm02333@gmail.com','330137431','$2y$10$CoYAGTIWHZRU9ZM509pDouFoCqZODcq1WsUxcbpamvOnlwma/0roW'),(17,'tom','turnertm02@gmail.com','1199804946','$2y$10$Q1tLPrt2jqivTrAWHqdqw.lbdtFii9omqV/s9TY7J7kziFULzARsO'),(18,'Rootman','ipwnosx@gmail.com','224176092','$2y$10$547MgKxBPfgk7wBYYp3oQ.2516P.QuZhw/uv2ES6GSG44udTRtdSy'),(19,'Animus','Vapelv0@gmail.com','694792558','$2y$10$nvweAde2byqt/2UzxQYm3.oUAOM/uEpqvWdYkwQa0kBDXdWeT4Zuy'),(20,'cracker505','cracker505@protonmail.com','973097142','$2y$10$G1bVPDpqlP.9FmmZmivNouyzda4OKfhQCnrT7HLNuucnQDgU5TSy.'),(21,'mazafaka','moviez@abv.bg','316889428','$2y$10$baqYmDsFax3LTlKhTwwb2.Xt8PHGY.JKq97rGOVTGqqaPAUnclN2.'),(22,'alimerdan78','emailiolmayan22@gmail.com','152588999','$2y$10$1yiEeN3HqOe4T5/3G0ZwG.uNz1yPiiCa4HVxF5ZbLp2U2AKBL31jm'),(23,'Fff','Fff@ddf.co','2089054641','$2y$10$RFwL9UPwtOHZm5d/nUmd3uPEKFW9MHmaDioSmvDVlmk2ZjN/9ok0u'),(24,'Yeetyeet','Jeetjeet@gmail.com','1874573741','$2y$10$cw5mMZOj2r91hoizfWJuhe07Nn6G6fzgfqOA9EQkrZ2ZREftgF5Yy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_session`
--

DROP TABLE IF EXISTS `users_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_session` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_session`
--

LOCK TABLES `users_session` WRITE;
/*!40000 ALTER TABLE `users_session` DISABLE KEYS */;
INSERT INTO `users_session` VALUES (2,'7','$2y$10$wzj/wehS7Bv.OZP50GdIF.ct25a.i8tb296GHyHCIuGafQS7/P1Xm'),(5,'19','$2y$10$hdgcp6xTHiEEPPFebOgnjujuZQrW1D3yJbGVQGMC3UPh1VjCItuvO');
/*!40000 ALTER TABLE `users_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-27 21:46:46

