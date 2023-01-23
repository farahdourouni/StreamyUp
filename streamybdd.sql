-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: streamy
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES ('yo','farahdourouni@hotmail.fr','yooo','fddfthhdfhfghfghf'),('gdggdg','mandybeatles@gmail.com','fgdfdfg','ggdfdggdgdfg'),('gfgdfg','mandybeatles@gmail.com','fdfgfgg','dfgfdgd'),('dffdff','farahdourouni@hotmail.fr','rgerg','egergeger'),('dffdff','farahdourouni@hotmail.fr','rgerg','egergeger'),('dddddd','mandybeatles@gmail.com','dfffddf','fdfdfdfdfd'),('dddddd','mandybeatles@gmail.com','dfffddf','fdfdfdfdfd'),('dssdfsf','mandybeatles@gmail.com','dfsd','fsdsdfsdf'),('dssdfsf','mandybeatles@gmail.com','dfsd','fsdsdfsdf'),('grregrg','mandybeatles@gmail.com','grgererg','greergggg'),('grregrg','mandybeatles@gmail.com','grgererg','greergggg'),('dsfgdsfgd','farahdourouni@hotmail.fr','dgfdfg','dgfdfdfgdg'),('dsfgdsfgd','farahdourouni@hotmail.fr','dgfdfg','dgfdfdfgdg'),('grregrg','mandybeatles@gmail.com','grgererg','greergggg'),('grregrg','mandybeatles@gmail.com','grgererg','greergggg'),('gdfgdgdfg','farahdourouni@hotmail.fr','dfss','sfdsdfsdfsf'),('fsfdsdfsfdsf','mandybeatles@gmail.com','fdgdgdf','gddfgdgdg'),('gdfgdgdgdg','ffsdfsdfs@gmail.com','dgdfdfgd','gdfgdgdgdg'),('gdfgdgdgdg','ffsdfsdfs@gmail.com','dgdfdfgd','gdfgdgdgdg'),('bvbnbnbnbbn','farahdourouni@hotmail.fr','fdgdfg','gfgdfgdg'),('','','',''),('ggfdgfhfg','faff@hotmail.fr','fgf','sdfsfsdfsfsfs');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard`
--

DROP TABLE IF EXISTS `standard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard` (
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard`
--

LOCK TABLES `standard` WRITE;
/*!40000 ALTER TABLE `standard` DISABLE KEYS */;
/*!40000 ALTER TABLE `standard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard2`
--

DROP TABLE IF EXISTS `standard2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard2` (
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard2`
--

LOCK TABLES `standard2` WRITE;
/*!40000 ALTER TABLE `standard2` DISABLE KEYS */;
INSERT INTO `standard2` VALUES ('htrt(t','ryereryey','standard2','fc0a502f879ad766b1cd7482576c88c0',NULL,NULL),('systemctl restart apache2','systemctl restart apache2','admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL),('admin','admin','admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL),('admin','admin','admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL);
/*!40000 ALTER TABLE `standard2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard3`
--

DROP TABLE IF EXISTS `standard3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard3` (
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard3`
--

LOCK TABLES `standard3` WRITE;
/*!40000 ALTER TABLE `standard3` DISABLE KEYS */;
INSERT INTO `standard3` VALUES ('szzss','sssss','2021-05-12','ssss','8f60c8102d29fcd525162d02eed4566b',NULL,NULL),('aaaaa','aaaaa','2021-05-06','aaaaa','594f803b380a41396ed63dca39503542',NULL,NULL),('aaaa','aaaa','2021-05-28','aaaa','74b87337454200d4d33f80c4663dc5e5',NULL,NULL),('admin','admin','2021-05-07','admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL),('admin2','admin2','2021-05-14','admin2','c84258e9c39059a89ab77d846ddab909',NULL,NULL);
/*!40000 ALTER TABLE `standard3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard4`
--

DROP TABLE IF EXISTS `standard4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard4` (
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard4`
--

LOCK TABLES `standard4` WRITE;
/*!40000 ALTER TABLE `standard4` DISABLE KEYS */;
/*!40000 ALTER TABLE `standard4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard5`
--

DROP TABLE IF EXISTS `standard5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard5` (
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL,
  `paiement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard5`
--

LOCK TABLES `standard5` WRITE;
/*!40000 ALTER TABLE `standard5` DISABLE KEYS */;
INSERT INTO `standard5` VALUES ('admin2','admin2','admin2','c84258e9c39059a89ab77d846ddab909',NULL,NULL,'visa'),('admin3','admin3','admin3','32cacb2f994f6b42183a1300d9a3e8d6',NULL,NULL,'cb'),('admin3','admin3','admin3','32cacb2f994f6b42183a1300d9a3e8d6',NULL,NULL,'cb');
/*!40000 ALTER TABLE `standard5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard5pro`
--

DROP TABLE IF EXISTS `standard5pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard5pro` (
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL,
  `paiement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard5pro`
--

LOCK TABLES `standard5pro` WRITE;
/*!40000 ALTER TABLE `standard5pro` DISABLE KEYS */;
INSERT INTO `standard5pro` VALUES ('admin3','admin3','admin3','32cacb2f994f6b42183a1300d9a3e8d6',NULL,NULL,'master'),('test','test','test','098f6bcd4621d373cade4e832627b4f6',NULL,NULL,'cb');
/*!40000 ALTER TABLE `standard5pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard5pro1`
--

DROP TABLE IF EXISTS `standard5pro1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard5pro1` (
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL,
  `paiement` varchar(255) DEFAULT NULL,
  `numerocb` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `payer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard5pro1`
--

LOCK TABLES `standard5pro1` WRITE;
/*!40000 ALTER TABLE `standard5pro1` DISABLE KEYS */;
/*!40000 ALTER TABLE `standard5pro1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard5pro2`
--

DROP TABLE IF EXISTS `standard5pro2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standard5pro2` (
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordConf` varchar(255) DEFAULT NULL,
  `pass_crypt` varchar(255) DEFAULT NULL,
  `paiement` varchar(255) DEFAULT NULL,
  `numerocb` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `payer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard5pro2`
--

LOCK TABLES `standard5pro2` WRITE;
/*!40000 ALTER TABLE `standard5pro2` DISABLE KEYS */;
INSERT INTO `standard5pro2` VALUES ('hghhh','hghghgh','ghhghghg','fe0f3d5d494116d00ccd63cd71975a9b',NULL,NULL,'visa',NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,NULL,'jjjjjjjjjjjjjjjjjjjjjj','jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj','jjjjjjjjjjjjjjjjjjjjjjjjjjjjj',NULL),('admin3','admin3','admin3','32cacb2f994f6b42183a1300d9a3e8d6',NULL,NULL,'cb',NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,NULL,'tyggggg','ggggg','gggg',NULL);
/*!40000 ALTER TABLE `standard5pro2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-29  5:42:06
