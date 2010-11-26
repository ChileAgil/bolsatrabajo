-- MySQL dump 10.13  Distrib 5.1.51, for Win32 (ia32)
--
-- Host: localhost    Database: bolsa
-- ------------------------------------------------------
-- Server version	5.1.51-community

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
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternativas`
--

LOCK TABLES `alternativas` WRITE;
/*!40000 ALTER TABLE `alternativas` DISABLE KEYS */;
INSERT INTO `alternativas` VALUES (1,1,2,1),(2,1,1,2),(3,1,4,3),(4,1,6,4),(5,1,7,5),(6,4,6,1),(7,4,7,2),(8,4,3,3),(9,6,4,1),(10,6,9,2),(11,6,2,3),(12,6,7,4),(13,6,1,5),(14,7,3,1),(15,7,5,2),(16,7,9,3),(17,7,1,4),(18,7,4,5),(19,8,3,1),(20,8,9,2),(21,8,2,3),(22,8,5,4),(23,8,4,5),(24,9,3,1),(25,9,4,2),(26,9,1,3),(27,9,7,4),(28,9,9,5),(29,10,4,1),(30,10,3,2),(31,10,2,3),(32,10,5,4),(33,10,8,5),(34,11,4,1),(35,11,3,2),(36,11,2,3),(37,11,1,4),(38,11,5,5),(39,11,9,6),(40,11,7,7),(41,11,6,8),(42,11,8,9),(43,12,3,1),(44,12,4,2),(45,12,7,3),(46,12,8,4),(47,12,9,5),(48,13,4,1),(49,13,3,2),(50,13,1,3),(51,13,2,4),(52,13,9,5),(53,15,3,1),(54,15,4,2),(55,15,7,3),(56,15,9,4),(57,15,2,5),(58,16,4,1),(59,16,3,2),(60,16,2,3),(61,16,7,4),(62,16,5,5),(63,17,3,1),(64,17,4,2),(65,17,9,3),(66,17,5,4),(67,17,2,5),(68,18,4,1),(69,18,3,2),(70,18,1,3),(71,18,9,4),(72,18,8,5),(73,19,3,1),(74,19,4,2),(75,19,2,3),(76,19,6,4),(77,19,9,5),(78,20,15,1),(79,20,17,2),(80,20,16,3),(81,21,15,1),(82,21,16,2),(83,21,18,3),(84,23,4,1),(85,23,9,2),(86,23,1,3),(87,23,7,4),(88,23,5,5),(89,24,3,1),(90,24,4,2),(91,24,1,3),(92,24,9,4),(93,24,5,5),(94,25,4,1),(95,25,3,2),(96,25,2,3),(97,25,7,4),(98,25,8,5),(99,26,1,1),(100,26,2,2),(101,26,4,3),(102,26,6,4),(103,26,7,5),(104,29,1,1),(105,29,2,2),(106,29,4,3),(107,29,5,4),(108,29,6,5),(109,29,9,6),(110,30,15,1),(111,30,16,2),(112,30,18,3),(113,30,17,4),(114,30,19,5),(115,30,20,6),(116,31,1,1),(117,31,2,2),(118,31,9,3),(119,31,8,4),(120,31,7,5),(121,31,5,6),(122,31,6,7),(123,31,3,8),(124,31,4,9),(125,32,4,1),(126,32,9,2),(127,32,1,3),(128,32,3,4),(129,32,6,5),(130,33,3,1),(131,33,4,2),(132,33,1,3),(133,33,9,4),(134,33,8,5),(135,34,3,1),(136,34,7,2),(137,34,5,3),(138,34,9,4),(139,34,8,5),(140,35,4,1),(141,35,7,2),(142,35,9,3),(143,37,16,1),(144,37,15,2),(145,37,17,3),(146,38,2,1),(147,38,3,2),(148,38,1,3),(149,38,5,4),(150,38,8,5),(151,39,3,1),(152,39,5,2),(153,39,7,3),(154,39,6,4),(155,39,2,5),(156,40,3,1),(157,40,4,2),(158,40,7,3),(159,40,9,4),(160,41,3,1),(161,41,4,2),(162,41,9,3),(163,41,2,4),(164,41,7,5),(165,42,3,1),(166,42,2,2),(167,42,9,3),(168,42,4,4),(169,42,8,5),(170,43,1,1),(171,43,3,2),(172,43,9,3),(173,43,5,4),(174,43,8,5),(175,44,1,1),(176,44,5,2),(177,44,3,3),(178,44,7,4),(179,44,9,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Sonda','Sonda',23285174,'0','mision','vision','web','historia',1,1),(2,'Mobilitas SpA','Mobilitas SpA',76095037,'8','','','www.ikwest.com','',20,0),(3,'ZhetaPricing','ZhetaPricing Chile S.A.',76021508,'2','Ser Lideres en el desarrollo de soluciones de Revenue Management en diversas industrias a nivel global para así generar valor económico sostenible a nuestros clientes.','','www.zpricing.com','',21,0),(4,'Teki','Teki Soluciones de Software Ltda.',76055611,'4','','','http://www.teki.cl','',30,0),(5,'Newtenberg','Newtenberg Publicaciones Digitales Limitada',77543180,'6','Proveer soluciones de tecnología para la comunicación humana para distintos contextos','Newtenberg, el Nuevo Gutenberg, es una compañía chilena dedicada al desarrollo de tecnologías de información que permitan apoyar los procesos de informar, comunicar y coordinar acciones entre las personas. Bajo esta premisa un grupo multidisciplinario de profesionales ha combinado los mundos del diseño, software y medios de comunicación para proveer a las organizaciones de tecnologías y prácticas virtuosas en el manejo de información y coordinación de sus “haceres”.  ','http://www.newtenberg.com/','Hacia 1450 la aparición de la Imprenta de Tipos Móviles de Gutenberg permitió la revitalización del desarrollo intelectual de nuestra cultura entregándonos la posibilidad de acceder al conocimiento de la sociedad en formato libro. Esta tecnología improntó en el conocimiento dos restricciones que no le son inherentes: la serialización y la jerarquización, si bien el libro es una contribución en si, el resultado de su aplicación por mas de 500 años ha conducido a un dinámica fragmentaria en que los libros de matemáticas, filosofía o historia necesariamente pertenecen a áreas del conocimiento casi disjuntas. \r\nLa aparición del WWW hacia 1992 y la conceptualización de los hipertextos desde mucho antes, abren la posibilidad de una interrelación distinta que posibilita la recomposición de los contenidos y la posibilidad de aproximaciones no lineales que implican una transformación cultural importante para un mundo obsesionado con la búsqueda de jerárquías únicas y con el afán de sentar convenciones universales que obligan a otros a mirar y pensar de una única forma.\r\nEl aporte de Newtenberg en este contexto viene de la mano del estudio del fenómeno de la comunicación humana en términos de la biología, el rol del lenguaje, el establecimiento de protocolos, la registro de observaciones y la integración de distintas visiones: software, medios de comunicación, bibliotecología, diseño de información.\r\nA partir del año 2000 esto se traduce en el desarrollo tecnológico de una plataforma para la documentación y organización del conocimiento: basada en 3 distinciones: una unidad básica de contenido universal (eidox), soporte para taxonomías y miradas semánticas múltiples (clasificandos) y un modelamiento de cualquier sistema humano de coordinación como una conversación que se registra y caracteriza.\r\nEsta aproximación ha permitido a la compañía resolver con la misma plataforma un conjunto diverso de problemas: desde la recopilación de fuentes primarias de la historia, la organización de sistemas legales y de jurisprudencia, el desarrollo de grandes portales de información y recientemente el monitoreo de todo tipo de indicadores.\r\nNos interesa trabajar con personas que amen su trabajo y aspiren a que las obras que desarrollemos en conjunto sean una contribución al desarrollo de la sociedad e impacten positivamente en la educación de las nuevas generaciones.    ',37,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informaciones`
--

LOCK TABLES `informaciones` WRITE;
/*!40000 ALTER TABLE `informaciones` DISABLE KEYS */;
INSERT INTO `informaciones` VALUES (1,1,'Sonda','Empresa de desarrollo de Software'),(2,4,'test','test'),(3,11,'Camilo Palma','Curso CC4401 (Ing, de Software)'),(4,11,'Diego Rivera','En cursos varios del DCC'),(5,37,'Carlos Castillo Ocaranza','Socio fundador, actualmente trabaja para Yahoo Research'),(6,37,'Héctor Rodríguez','Ingeniero de desarrollo, interfases y visualización'),(7,37,'Alejandro Vera','Ingenierio de desarrollo, inteoperabilidad de sistemas'),(8,43,'Felipe Garrido','Implementación de Prototipo de WebApp en cake');
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
  `validada` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oferta_id`),
  KEY `fk_ofertas_comunas` (`comuna_id`),
  KEY `fk_ofertas_empresas` (`empresa_id`),
  CONSTRAINT `fk_ofertas_comunas` FOREIGN KEY (`comuna_id`) REFERENCES `comunas` (`comuna_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ofertas_empresas` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`empresa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertas`
--

LOCK TABLES `ofertas` WRITE;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;
INSERT INTO `ofertas` VALUES (4,2,'Oferta 1','Cargo de analista','desc 1','',NULL,'1',37,'centro',NULL,0),(5,3,'titulo 2','Cargo de analista 2','descripcion 2','',NULL,'Trabajo',37,'norte',NULL,0),(7,NULL,'Titulo Test','Cargo Test','Descripcion Test','',100000,'2',13,'sur','Empresa Test',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `req_adicionales`
--

LOCK TABLES `req_adicionales` WRITE;
/*!40000 ALTER TABLE `req_adicionales` DISABLE KEYS */;
INSERT INTO `req_adicionales` VALUES (2,4,1,'C'),(3,5,1,'C++'),(4,5,2,'MySQL'),(5,7,1,'C, C++, Matlab'),(6,7,2,'MySQL, PostgreSQL, SQLServer');
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
  `nombre` varchar(64) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuario_id`),
  KEY `fk_usuarios_tipo_usuarios1` (`tipo_usuario_id`),
  CONSTRAINT `fk_usuarios_tipo_usuarios1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuarios` (`tipo_usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Christian Eduardo','Palomares Peralta','palomares.c@gmail.com','fb7b751b835cbc5770acb573a4fe2dc33867a735','1985-02-01',1,0),(2,'Sandra','Gaez','sandra@dcc.uchile.cl','bdacdd0c1c3e9a7627361bbe8d46a76d59decf7e',NULL,4,1),(3,'Ivan','Videla','ividela@gmail.com','498e7892f466de7fbb8f19f978aaef63c59b2e42','1985-05-30',3,1),(4,'test','test','test@test.com','fb5099cad340f5a7ae385ec27babb02f2474f959','1991-01-02',1,0),(5,'Ramón','Cruzat Hermosilla','cruzzat@gmail.com','d421fa74fb4268976b02a17e84029a47f0a27bb0','1984-01-03',1,0),(6,'milton galo patricio','inostroza aguilera','minostro@dcc.uchile.cl','1c1b76b1904d2b965d33ffcb1514a482014f6a6b','1983-04-08',1,0),(7,'Mauricio','Farah','mfarah@dcc.uchile.cl','15a0c7f16e286979fb5a184c3e7e0a0021b2f60a','1984-03-31',1,0),(8,'Gonzalo','Pérez-Cotapos','gonzalo.perezcotapos.santis@gmail.com','5685e42edace2cf319bd56728164957728cf3ad8','1988-03-25',1,0),(9,'Felipe','Orellana','forellancast@gmail.com','1a99be5ef24285ebec26906f4f500803955b7cd1','1988-11-27',1,0),(10,'felipe','hernández','fhernand@dcc.uchile.cl','bcb843e13bbce29dc2a78e22526853d60ebc7637','1989-06-13',1,0),(11,'Pablo','Estefó','pestefo@gmail.com','04eae590b4302f484f327e9ca173a0a34b7ee92c','1989-02-09',1,0),(12,'Fernanda','Ramírez','feramire@dcc.uchile.cl','72bb21c1586675cb8cf2c0cadef720e4cb719d53','1989-04-11',1,0),(13,'Mauricio','Quezada','mquezada@dcc.uchile.cl','4a916c350118a624eb1adfa9cdca751f6d655298','1989-04-20',1,0),(14,'Sebastian','Valenzuela','svalenzu@ing.uchile.cl','a860554e2f75d14df423342b3cd220ab8f3372c3','1987-06-22',1,0),(15,'Eduardo','Escobar','eduescob@dcc.uchile.cl','fb150fe2ec5d135565e458ec9be79d654a857248','1989-02-16',1,0),(16,'Felipe Ignacio','González Martínez','felipegmch@gmail.com','9f2385577e28d0776520f141f68e95ebd72f859d','1987-09-12',1,0),(17,'Lissette','Cabrera','lisss.c@gmail.com','e412ae31702a2c555a08a42b46fdfd3cc4a98f1c','1986-04-15',1,0),(18,'Nicolas','Ulriksen','nulrikse@dcc.uchile.cl','01c9e62ded2d2c523ca3ab23ba3d8af944d8c8bc','1989-04-12',1,0),(19,'Aldo','Bertero','aldo.bertero@gmail.com','7338fc6d641499dae1477de9818ff29b24ff74c0','1989-05-25',1,0),(20,'Heiko','Linn','hlinn@ikwest.com','f856b149002e095820fd27a2811454c1a6f36cab','1969-08-15',2,0),(21,'Nicolás','Dujovne','nicolas.dujovne@zpricing.com','0e8561125695cac4d7e4282c0939280f0a3c0f59','1982-12-26',2,0),(22,'Cristián','Cámpora','ccampora@gmail.com','702c312fa62ae89b6c9421e663b24e74d650ca4b','1982-05-05',1,0),(23,'Mauricio','Zúñiga','mzuniga@gmail.com','a841467d2b02d82946b048f556ed67f749188726','1978-06-14',1,0),(24,'Mauricio','Farah','mafarah@gmail.com','f371298583281458a09add674b224a313d0aee2c','1984-03-31',1,0),(25,'Antonio','Jimenez','anthonyzucabar@gmail.com','1d6805d08ec2409232301d965b3fdd64ca21d526','1987-01-23',1,0),(26,'Diego','Bonilla','dbonilla.cl@gmail.com','54dce3761bd72af04f2200046217146305cc619a','1983-09-25',1,0),(27,'Anibal','Llanos Prado','anllanos@ing.uchile.cl','7e067ec27312946faad58ec788320eca4c208327','1986-03-19',1,0),(28,'Alfredo\'); select * from usuarios;','Perez','ass@mailinator.com','7ba778100b554bc598f8c5505f16296635a0d527','1970-02-01',1,0),(29,'Cristian','Olate','colate@dcc.uchile.cl','e050abad66199911a1e03528284d20d71bc7a985','1979-10-22',1,0),(30,'José Miguel','Vives','jmvives@teki.cl','24453d5c764bedd7f5e8df085926f576841f89b9','1982-09-16',2,0),(31,'Sergio','Pola','sergio.pola.contreras@gmail.com','1a22594abd302d89ff73ea160822f1a70569dc9d','1983-12-25',1,0),(32,'Francisco','Méndez','franc.mendez@gmail.com','66b45d50a411307f695e289761fe0224b9116759','1983-08-21',1,0),(33,'Felipe','Sologuren','sologuren@estudiohum.cl','f67af6dfc93be6aecd13836229795be0dad4e37d','1973-10-19',1,0),(34,'Nicolas','Malbran','nmalbran@gmail.com','15205c408ee02033454ec76079c6dd739fc2dfb7','1988-06-11',1,0),(35,'Roberto','Varas','rvaras@dcc.uchile.cl','046eba177d9d48e7359704ae338d87d667faf2ea','1980-06-19',1,0),(36,'Roberto','Riquelme','rriquelm@dcc.uchile.cl','afcf7de80a389cb6cf8f70f6144604b5c529a211','1987-01-05',1,0),(37,'José Pepe','Flores Peters','jflores@newtenberg.com','20eba75c8337f1c61942f26e04c68dee7e344985','1968-12-04',2,0),(38,'Ivan','Pliouchtchai','ivan.pli+bolsa.trabajo.dcc@gmail.com','3b2e84dd350067c403901e7734630ce8d20d7236','1986-06-24',1,0),(39,'Alejandro','Lavado','alejandro.lvd@gmail.com','337836de2afa3d032a9e3216b6f0d3c144007bd7','1988-03-17',1,0),(40,'Ivan','Rojas','ivanrohe@gmail.com','4116c1a670a92fcfe20203e95d55a29ad5234c58','1990-03-10',1,0),(41,'Diego','Schmitt Rivera','dschmitt@dcc.uchile.cl','d49eb5298f8fc5e910e023587fb7ef0f1a9db99e','1987-04-04',1,0),(42,'Rodrigo','Díaz','Rodrigo.Diaz.D@gmail.com','fffacd1af71c72183b87c0bc08192dd56776451b','1986-08-07',1,0),(43,'Pedro','Valencia','pvalencia@gmail.com','5559255305bbc4a9df2366c43fc4268f3b7071de','1985-08-25',1,0),(44,'alex','cevallos','alexcevallos@hotmail.com','684fde787aa62c227c93355fa9f5541058d5ab91','1982-11-09',1,0);
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

-- Dump completed on 2010-11-26 12:20:20
