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
-- Table structure for table `convocatories`
--

DROP TABLE IF EXISTS `convocatories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convocatories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `convocatory_type_id` int(11) NOT NULL,
  `dependency_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `life_date` date NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convocatories`
--

LOCK TABLES `convocatories` WRITE;
/*!40000 ALTER TABLE `convocatories` DISABLE KEYS */;
/*!40000 ALTER TABLE `convocatories` ENABLE KEYS */;
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
INSERT INTO `detail_web_page_contain` VALUES (1,1),(2,2),(3,2),(4,2),(5,2),(4,2),(5,2);
/*!40000 ALTER TABLE `detail_web_page_contain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legislation_type`
--

DROP TABLE IF EXISTS `legislation_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legislation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legislation_type`
--

LOCK TABLES `legislation_type` WRITE;
/*!40000 ALTER TABLE `legislation_type` DISABLE KEYS */;
INSERT INTO `legislation_type` VALUES (1,'ley'),(2,'decreto'),(3,'reglamento'),(4,'directiva'),(5,'resolución'),(6,'otro');
/*!40000 ALTER TABLE `legislation_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legislations`
--

DROP TABLE IF EXISTS `legislations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legislations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `publication_date` date NOT NULL,
  `pathFile` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `legislation_type_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legislations`
--

LOCK TABLES `legislations` WRITE;
/*!40000 ALTER TABLE `legislations` DISABLE KEYS */;
INSERT INTO `legislations` VALUES (1,'hi','1982-11-01','hi',1,1,1,'1982-11-01'),(2,'asd','2014-08-08','Embarque.pdf',1,1,1,'2014-08-08'),(3,'asd','2014-08-07','Embarque.pdf',1,1,1,'2014-08-07'),(4,'asdfg','2014-08-15','fop_actions.pdf',1,1,1,'2014-08-07'),(5,'asdfg','2014-08-09','doc.pdf',1,1,1,'2014-08-08'),(6,'afs','2014-08-31','HojaDeRequerimientoServicios.pdf',1,1,1,'2014-08-08'),(7,'rrrr','2014-08-01','fop_actions.pdf',1,1,1,'2014-08-08'),(8,'eee','2014-08-17','doc.pdf',1,1,1,'2014-08-08'),(9,'qqq','2014-08-09','HojaDeRequerimientoServicios.pdf',1,1,1,'2014-08-08'),(10,'1','2014-08-11','PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,1,1,'2014-08-12'),(11,'2','2014-08-11','PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,1,1,'2014-08-12'),(12,'2','2014-08-11','PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,1,1,'2014-08-12'),(13,'2','2014-08-11','PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,1,1,'2014-08-12'),(14,'2','2014-08-11','PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,1,1,'2014-08-12'),(15,'Decreto 1','2014-08-15','decretos/PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,2,1,'2014-08-12'),(16,'Reglamento','2014-08-11','reglamentos/PDT 601-INFORMACION INCONSISTENTE-INGRESOS Y EGRESOS TRABAJADOR-201407.pdf',1,3,1,'2014-08-12');
/*!40000 ALTER TABLE `legislations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
  `contain` longtext NOT NULL,
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
INSERT INTO `web_page_contains` VALUES (1,'BIENVENIDO',' a la Oficina General de Recursos Humanos de la UNMSM','Aquí va la bienvenida',NULL,'2014-05-06 00:00:00',1,NULL),(2,'MISIÓN','Misión','La Oficina General de Recursos Humanos, plenamente identificada con la misión, visión y los valores universitarios, es la responsable de gestionar el talento humano para la Universidad Nacional Mayor de San Marcos, a traves de los procesos de ingreso, incentivos, estímulos del Personal Administrativo en sus distintas modalidades, requerido por las facultades y dependencias. De esta manera, contribuye a la presencia de un adecuado entorno laboral y bienestar a los trabajadores, sustentándose en el mejoramiento integral de procesos y en su personal de alta calidad humana y profesional.',NULL,'2014-05-18 00:00:00',1,NULL),(3,'VISIÓN','Visión','La Oficina General de Recursos Humanos, plenamente identificada con la misión, visión y los valores universitarios, es la responsable de gestionar el talento humano para la Universidad Nacional Mayor de San Marcos, a traves de los procesos de ingreso, incentivos, estímulos del Personal Administrativo en sus distintas modalidades, requerido por las facultades y dependencias. De esta manera, contribuye a la presencia de un adecuado entorno laboral y bienestar a los trabajadores, sustentándose en el mejoramiento integral de procesos y en su personal de alta calidad humana y profesional.',NULL,'2014-05-18 00:00:00',1,NULL),(4,'HISTORIA','Historia','La Oficina General de Recursos Humanos es el órgano de apoyo, dependiente de la Dirección General de Administración, encargado de planificar, normar y ejecutar los procesos técnicos en materia de gestión del recurso humano de la Institución.\n\nLas funciones que desarrolla en esta oficina son:\n\na) Planificar, normar, organizar, conducir y controlar las acciones del Sistema de Recursos Humanos de la Universidad Nacional Mayor de San Marcos.\nb) Proponer a la Alta Dirección las normas, planes, programas y acciones para la gestión del Sistema de Recursos Humanos.\nc) Aplicar las normas, instrumentos de gestión y procesos técnicos en materia de desarrollo integral de los recursos humanos, en concordancia con las necesidades institucionales y de acuerdo a la normatividad vigente.\nd) Fomentar una actitud proactiva en los servidores docentes, administrativos y obreros y desarrollo del liderazgo de los directivos de la Universidad a través de acciones sostenidas de mejoramiento de su calidad personal y profesional.\ne) Coordinar sus acciones con otras entidades públicas en asuntos vinculados a sus funciones.\nf) Formular el Presupuesto Analítico de Personal (PAP), en coordinación con la Oficina General de Planificación.\ng) Coordinar, asesorar y supervisar las acciones descentralizadas del Sistema de Recursos Humanos con las diversas dependencias de la Universidad.\nh) Resolver, por delegación de Facultades, los asuntos de su competencia.\ni) Proponer a la Alta Dirección políticas y programas específicos de planificación, organización, acceso, evaluación de rendimiento, compensación y desarrollo de los recursos humanos, acorde con los procesos establecidos por ley.\nj) Promover el desarrollo personal, social y laboral así como la capacitación técnica de los servidores, orientados al logro de las metas y objetivos institucionales, en función de las necesidades de la entidad y los resultados de la evaluación de desempeño.\nk) Proponer y coordinar la celebración de convenios nacionales e internacionales orientados al mejoramiento de la calidad del servicio y la capacitación y desarrollo de competencias de los servidores.\nl) Realizar investigaciones y desarrollar estrategias prospectivas en materia de productividad, con el fin de hacer mas eficiente la función pública en la Universidad.\nm) Elaborar y proponer la normatividad para el otorgamiento de reconocimientos, incentivos y estímulos al desempeño desatacado de los servidores de la Universidad.\nn) Mantener actualizado el archivo de Legajos de servidores y ex servidores docentes, administrativos y obreros de la Universidad.\no) Elaborar la Planilla Única de Remuneraciones y de Pensiones, de acuerdo con los dispositivos legales vigentes, vigilando registrar en ella únicamente a los servidores que cumplan labores efectivas, así como consignar los conceptos que legalmente correspondan abonarse.\np) Establecer estrategias para aprovechar los conocimientos y experiencia de ex servidores docentes, administrativos y obreros en beneficio del mejoramiento de la calidad del servicio.\nq) Llevar el registro de los cargos públicos que califican como funcionario público y empleado de confianza e informar periódicamente a las autoridades del Gobierno Central.\nr) Asesorar a la Alta Dirección en los asuntos de su competencia.\ns) Otras que le asigne la Dirección General de Administración.\nLa Oficina General de Recursos Humanos tiene la estructura orgánica siguiente :\n- Oficina de Gestión y Escalafón\n- Oficina de Remuneraciones y Obligaciones Sociales\n- Oficina de Pensiones y Beneficios sociales\n- Oficina de Desarrollo y Bienestar Social\n- Oficina de Modernización e Informatización',NULL,'2014-05-18 00:00:00',1,NULL),(5,'ORGANIGRAMA','Organigrama','Aquí va el organigrama','/docs/otros/organigrama.pdf','2014-05-18 00:00:00',2,NULL);
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

-- Dump completed on 2014-08-11 20:13:34
