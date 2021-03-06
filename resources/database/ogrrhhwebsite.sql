CREATE DATABASE  IF NOT EXISTS `db_recursoshumanos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_recursoshumanos`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: db_recursoshumanos
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convocatories`
--

LOCK TABLES `convocatories` WRITE;
/*!40000 ALTER TABLE `convocatories` DISABLE KEYS */;
/*!40000 ALTER TABLE `convocatories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convocatories_results`
--

DROP TABLE IF EXISTS `convocatories_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convocatories_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `convocatory_result_type` int(11) NOT NULL,
  `updated_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convocatories_results`
--

LOCK TABLES `convocatories_results` WRITE;
/*!40000 ALTER TABLE `convocatories_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `convocatories_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convocatory_types`
--

DROP TABLE IF EXISTS `convocatory_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convocatory_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convocatory_types`
--

LOCK TABLES `convocatory_types` WRITE;
/*!40000 ALTER TABLE `convocatory_types` DISABLE KEYS */;
INSERT INTO `convocatory_types` VALUES (1,'cas'),(2,'régimen laboral 276');
/*!40000 ALTER TABLE `convocatory_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependencies`
--

DROP TABLE IF EXISTS `dependencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dependencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `dependency_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependencies`
--

LOCK TABLES `dependencies` WRITE;
/*!40000 ALTER TABLE `dependencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `dependencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependency_types`
--

DROP TABLE IF EXISTS `dependency_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dependency_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependency_types`
--

LOCK TABLES `dependency_types` WRITE;
/*!40000 ALTER TABLE `dependency_types` DISABLE KEYS */;
INSERT INTO `dependency_types` VALUES (1,'facultad'),(2,'dependencia');
/*!40000 ALTER TABLE `dependency_types` ENABLE KEYS */;
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
-- Table structure for table `legislation_types`
--

DROP TABLE IF EXISTS `legislation_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legislation_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legislation_types`
--

LOCK TABLES `legislation_types` WRITE;
/*!40000 ALTER TABLE `legislation_types` DISABLE KEYS */;
INSERT INTO `legislation_types` VALUES (1,'ley'),(2,'decreto'),(3,'reglamento'),(4,'directiva'),(5,'resolución'),(6,'otro');
/*!40000 ALTER TABLE `legislation_types` ENABLE KEYS */;
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
  `number` varchar(45) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `publication_date` date NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `legislation_type_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legislations`
--

LOCK TABLES `legislations` WRITE;
/*!40000 ALTER TABLE `legislations` DISABLE KEYS */;
INSERT INTO `legislations` VALUES (52,'constitucion politica del peru','',NULL,'1993-01-01','leyes/Constitucion_Politica_Peru_1993.pdf',1,1,1,'2014-08-27'),(53,'ley del servicio civil','30057',NULL,'2013-07-04','leyes/Ley 30057_Servicio_Civil.pdf',1,1,1,'2014-08-27'),(54,'ley universitaria','23733',NULL,'1983-12-09','leyes/Ley_23733_Ley_Universitaria_2010.pdf',1,1,1,'2014-08-27'),(55,'ley de transparencia y acceso a la informacion publica','27806',NULL,'2003-08-07','leyes/Ley_27806_Transparencia_y_Acceso_Informacion_Publica.pdf',1,1,1,'2014-08-27'),(56,'ley que establece la eliminacion progresiva del regimen especial del decreto legislativo 1057 y otorga derechos laborales','29849',NULL,'2012-04-05','leyes/Ley_29849_CAS.pdf',1,1,1,'2014-08-27'),(57,'ley universitaria','30220',NULL,'2014-07-09','leyes/Ley_30220_Universitaria_2014 .pdf',1,1,1,'2014-08-27'),(58,'decreto legislativo 276 ley base de la carrera administrativa','276',NULL,'1984-03-24','decretos/DL_276_1984.pdf',1,2,1,'2014-08-27'),(59,'decreto legislativo 1057 que regula el regimen especial de contratacion administrativa de servicios','1057',NULL,'2008-06-28','decretos/DL_1057.pdf',1,2,1,'2014-08-27'),(60,'directiva 001-2013-PCM/OGA normas y procedimientos para la prevencion y sancion de los actos de nepotismo','001-2013-pcm/oga',NULL,'2013-12-04','directivas/DS_005_90_PCM_2013.pdf',1,4,1,'2014-08-27'),(61,'decreto supremo 065-2011-pcm ','065-2011-pcm',NULL,'2011-01-01','decretos/DS_065_2011_PCM.pdf',1,2,1,'2014-08-27'),(62,'decreto supremo 075-2008-pcm que aprueba el reglamento del decreto legislativo 1057, que regula el regimen especial de cas','075-2008-pcm',NULL,'2008-01-01','decretos/DS_075_2008_PCM.pdf',1,2,1,'2014-08-27'),(63,'directiva 003-dga-2008 para la aplicacion del regimen especial de contratacion de administracion de servicios','003-dga-2008',NULL,'2009-01-07','directivas/R. R. 0007-R-09, Directiva CAS DGA.pdf',1,4,1,'2014-08-27'),(64,'directiva 001-ogrrhh-2009 aspectos procedimentales en la palicacion del regimen especial de contratacion administrativa de servicios','001-ogrrhh-2009',NULL,'2009-04-28','directivas/R. R. 01823-R-09.pdf',1,4,1,'2014-08-27'),(65,'clasificador de cargos institucionales de la universidad nacional mayor de san marcos','',NULL,'2011-01-14','otros/Clasificador_de_Cargos_UNMSM.pdf',1,6,1,'2014-08-27'),(66,'manual del usuario de la oficina general de recursos humanos de la unmsm','',NULL,'2014-01-01','otros/Manual_Usuario_OGRRHH.pdf',1,6,1,'2014-08-27'),(67,'modificacion de los articulos 40, 46, 47 y 48 del estatuto universitario segu resolucion rectoral 03028-r-04','',NULL,'2004-01-01','otros/modificacion_art_estatuto_rr_3028-r-04.pdf',1,6,1,'2014-08-27'),(70,'PLAN NACIONAL DE GOBIERNO ELECTRONICO','_','PLAN NACIONAL DE GOBIERNO ELECTRONICO','2012-12-01','otros/PLAN NACIONAL DE GOBIERNO ELECTRONICO.pdf',1,6,1,'2014-09-01');
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
  `password` varchar(100) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin',1);
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

--
-- Dumping routines for database 'db_recursoshumanos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-05  9:38:19
