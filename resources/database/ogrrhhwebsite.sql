CREATE DATABASE  IF NOT EXISTS `ogrrhhwebsitedb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ogrrhhwebsitedb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: ogrrhhwebsitedb
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `contain_type`
--

DROP TABLE IF EXISTS `contain_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contain_type` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contain_type`
--

LOCK TABLES `contain_type` WRITE;
/*!40000 ALTER TABLE `contain_type` DISABLE KEYS */;
INSERT INTO `contain_type` VALUES (1,'texto'),(2,'documento_descarga');
/*!40000 ALTER TABLE `contain_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_web_page_contain`
--

DROP TABLE IF EXISTS `detail_web_page_contain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_web_page_contain` (
  `web_page_contain_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_web_page_contain`
--

LOCK TABLES `detail_web_page_contain` WRITE;
/*!40000 ALTER TABLE `detail_web_page_contain` DISABLE KEYS */;
INSERT INTO `detail_web_page_contain` VALUES (1,1);
/*!40000 ALTER TABLE `detail_web_page_contain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_page_id` int(11) DEFAULT NULL,
  `website_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'INICIO','/home',NULL,1,NULL,1),(2,'NOSOTROS','/about_us',NULL,2,NULL,1),(3,'OFICINAS','/offices',NULL,3,NULL,1),(4,'NORMAS LEGALES','/legislation',NULL,4,NULL,1),(5,'DE INTERES PÚBLICO','/public_interest',NULL,5,NULL,1),(6,'UBICACIÓN','/location',NULL,6,NULL,1),(7,'RESULTADOS DE BÚSQUEDA','/search_result',NULL,0,NULL,1),(8,'NOVEDADES','/news',NULL,0,NULL,1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_page_contains`
--

DROP TABLE IF EXISTS `web_page_contains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_page_contains` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `contain` varchar(500) NOT NULL,
  `document_url` varchar(100) DEFAULT NULL,
  `publication_date` datetime NOT NULL,
  `contain_type_id` int(11) NOT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_page_contains`
--

LOCK TABLES `web_page_contains` WRITE;
/*!40000 ALTER TABLE `web_page_contains` DISABLE KEYS */;
INSERT INTO `web_page_contains` VALUES (1,'BIENVENIDO',' a la Oficina General de Recursos Humanos de la UNMSM','Ser adipiscing elit sed diam nonummy nibh euismod. Dolore magnaorem ipsum dolor ser adipiscing elit sed diam nonummy nibh euismod. Dolore magnaorem ipsum dolor ser adipiscing. Dolore magnaorem ipsum dolor ser adipiscing elit sed diam nonummy nibh euismod.',NULL,'2014-05-06 00:00:00',1,NULL);
/*!40000 ALTER TABLE `web_page_contains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websites`
--

DROP TABLE IF EXISTS `websites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `url` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websites`
--

LOCK TABLES `websites` WRITE;
/*!40000 ALTER TABLE `websites` DISABLE KEYS */;
INSERT INTO `websites` VALUES (1,'ogrrhhwebsite','ogrrhhwebsite','ogrrhhwebsite');
/*!40000 ALTER TABLE `websites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-05 16:20:11
