-- MySQL dump 10.13  Distrib 5.1.51, for pc-linux-gnu (i686)
--
-- Host: localhost    Database: cc62_201002_db
-- ------------------------------------------------------
-- Server version	5.1.51

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alternativas`
--

DROP TABLE IF EXISTS `alternativas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alternativas` (
  `alternativa_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `opcion_id` int(11) NOT NULL,
  `lugar` int(11) NOT NULL,
  PRIMARY KEY (`alternativa_id`),
  KEY `fk_alternativa_usuarios1` (`usuario_id`),
  KEY `fk_alternativa_opciones1` (`opcion_id`),
  CONSTRAINT `fk_alternativa_opciones1` FOREIGN KEY (`opcion_id`) REFERENCES `opciones` (`opcion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_alternativa_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternativas`
--

LOCK TABLES `alternativas` WRITE;
/*!40000 ALTER TABLE `alternativas` DISABLE KEYS */;
/*!40000 ALTER TABLE `alternativas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunas`
--

DROP TABLE IF EXISTS `comunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunas` (
  `comuna_id` int(11) NOT NULL AUTO_INCREMENT,
  `comuna` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`comuna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunas`
--

LOCK TABLES `comunas` WRITE;
/*!40000 ALTER TABLE `comunas` DISABLE KEYS */;
INSERT INTO `comunas` VALUES (1,'Alhué'),(2,'Buin'),(3,'Calera de Tango'),(4,'Cerrillos'),(5,'Cerro Navia'),(6,'Colina'),(7,'Conchalí'),(8,'Curacaví'),(9,'El Bosque'),(10,'El Monte'),(11,'Estación Central'),(12,'Huechuraba'),(13,'Independencia'),(14,'Isla de Maipo'),(15,'Joaquín'),(16,'La Cisterna'),(17,'La Florida'),(18,'La Granja'),(19,'La Pintana'),(20,'La Reina'),(21,'Lampa'),(22,'Las Condes'),(23,'Lo Barnechea'),(24,'Lo Espejo'),(25,'Lo Prado'),(26,'Macul'),(27,'Maipú'),(28,'María Pinto'),(29,'Melipilla'),(30,'Ñuñoa'),(31,'Padre Hurtado'),(32,'Paine'),(33,'Peñaflor'),(34,'Peñalolén'),(35,'Pedro Aguirre Cerda'),(36,'Pirque'),(37,'Providencia'),(38,'Pudahuel'),(39,'Puente Alto'),(40,'Quilicura'),(41,'Quinta Normal'),(42,'Recoleta'),(43,'Renca'),(44,'San Bernardo'),(45,'San José de Maipo'),(46,'San Miguel'),(47,'San Pedro'),(48,'San Ramón'),(49,'Santiago'),(50,'Talagante'),(51,'Tiltil'),(52,'Vitacura');
/*!40000 ALTER TABLE `comunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `empresa_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_fantasia` varchar(64) NOT NULL,
  `razon_social` varchar(256) NOT NULL,
  `rut` int(11) NOT NULL,
  `guion` varchar(1) NOT NULL,
  `mision` text,
  `vision` text,
  `sitio_web` varchar(128) DEFAULT NULL,
  `resena_historica` text,
  `usuario_id` int(11) NOT NULL,
  `validada` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`empresa_id`),
  UNIQUE KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informaciones`
--

DROP TABLE IF EXISTS `informaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informaciones` (
  `informacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `referencia` varchar(64) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`informacion_id`),
  KEY `fk_informaciones_usuarios1` (`usuario_id`),
  CONSTRAINT `fk_informaciones_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informaciones`
--

LOCK TABLES `informaciones` WRITE;
/*!40000 ALTER TABLE `informaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `informaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ofertas` (
  `oferta_id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) DEFAULT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `cargo` varchar(128) DEFAULT NULL,
  `descripcion` text,
  `ambiente_laboral` text,
  `sueldo` int(11) DEFAULT NULL,
  `nivel_practica` enum('1','2','3','Trabajo') DEFAULT NULL,
  `comuna_id` int(11) DEFAULT NULL,
  `subzona` enum('centro','norte','sur','este','oeste') DEFAULT NULL,
  `nombre_empresa` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`oferta_id`),
  KEY `fk_ofertas_comunas` (`comuna_id`),
  KEY `fk_ofertas_empresas` (`empresa_id`),
  CONSTRAINT `fk_ofertas_comunas` FOREIGN KEY (`comuna_id`) REFERENCES `comunas` (`comuna_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ofertas_empresas` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`empresa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertas`
--

LOCK TABLES `ofertas` WRITE;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ofertas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opciones`
--

DROP TABLE IF EXISTS `opciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opciones` (
  `opcion_id` int(11) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(256) NOT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`opcion_id`),
  KEY `fk_opciones_tipo_usuarios1` (`tipo_usuario_id`),
  CONSTRAINT `fk_opciones_tipo_usuarios1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuarios` (`tipo_usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opciones`
--

LOCK TABLES `opciones` WRITE;
/*!40000 ALTER TABLE `opciones` DISABLE KEYS */;
INSERT INTO `opciones` VALUES (1,'Posibilidad de crear reviews de empresas',1),(2,'Formulario editable de curriculum vitae',1),(3,'Busqueda de practica segun diferentes criterios( remuneracion, lugar de trabajo, horario, tecnologias, etc.)',1),(4,'Recibir notificaciones con ofertas de practicas o trabajos',1),(5,'Contactar alumnos que han trabajado en dicha empresa antes',1),(6,'Descargar CV en distintos formatos (pdf, doc, etc.)',1),(7,'Recibir notificaciones con ferias de trabajo',1),(8,'Registro historico de postulaciones y trabajos realizados',1),(9,'Posibilidad de ver cuantas personas han postulado a dicha oferta',1),(15,'Publicar avisos indicando descripcion, sueldo, puesto laboral, etc.',2),(16,'Visualizar la cantidad de alumnos que postularon, asi como el CV de estos',2),(17,'Poder realizar evaluaciones a los alumnos que realizaron practicas con ellos',2),(18,'Poder dar de baja un aviso (por si ya tomaron la oferta)',2),(19,'Visualizacion historica de avisos publicados y cambios o rechazos que tuvo',2),(20,'Personalizar el como se muestran los avisos y habilitar si permite review para la empresa',2);
/*!40000 ALTER TABLE `opciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `req_adicionales`
--

DROP TABLE IF EXISTS `req_adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `req_adicionales` (
  `req_adicional_id` int(11) NOT NULL AUTO_INCREMENT,
  `oferta_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `requerimiento` varchar(128) NOT NULL,
  PRIMARY KEY (`req_adicional_id`),
  KEY `fk_req_adicionales_tipo_requerimientos` (`tipo_id`),
  KEY `fk_req_adicionales_ofertas` (`oferta_id`),
  CONSTRAINT `fk_req_adicionales_ofertas` FOREIGN KEY (`oferta_id`) REFERENCES `ofertas` (`oferta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_req_adicionales_tipo_requerimientos` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_requerimientos` (`tipo_requerimiento_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `req_adicionales`
--

LOCK TABLES `req_adicionales` WRITE;
/*!40000 ALTER TABLE `req_adicionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `req_adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_requerimientos`
--

DROP TABLE IF EXISTS `tipo_requerimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_requerimientos` (
  `tipo_requerimiento_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(128) NOT NULL,
  PRIMARY KEY (`tipo_requerimiento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_requerimientos`
--

LOCK TABLES `tipo_requerimientos` WRITE;
/*!40000 ALTER TABLE `tipo_requerimientos` DISABLE KEYS */;
INSERT INTO `tipo_requerimientos` VALUES (1,'Lenguaje de Programación'),(2,'Base de datos'),(3,'Framework de desarrollo'),(4,'Tecnología/Plataforma'),(5,'Aptitudes');
/*!40000 ALTER TABLE `tipo_requerimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuarios`
--

DROP TABLE IF EXISTS `tipo_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuarios` (
  `tipo_usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(128) NOT NULL,
  PRIMARY KEY (`tipo_usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuarios`
--

LOCK TABLES `tipo_usuarios` WRITE;
/*!40000 ALTER TABLE `tipo_usuarios` DISABLE KEYS */;
INSERT INTO `tipo_usuarios` VALUES (1,'Trabajador'),(2,'Empresa'),(3,'Administrador'),(4,'Sandra');
/*!40000 ALTER TABLE `tipo_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) DEFAULT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  KEY `fk_usuarios_tipo_usuarios1` (`tipo_usuario_id`),
  CONSTRAINT `fk_usuarios_tipo_usuarios1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuarios` (`tipo_usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-11-20 18:40:53
