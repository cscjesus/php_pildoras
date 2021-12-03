-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: proyecto_jsp
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `datospersonales`
--
create database 'proyecto_jsp';
use 'proyecto_jsp';

DROP TABLE IF EXISTS `datospersonales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datospersonales` (
  `nif` varchar(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  PRIMARY KEY (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datospersonales`
--

LOCK TABLES `datospersonales` WRITE;
/*!40000 ALTER TABLE `datospersonales` DISABLE KEYS */;
INSERT INTO `datospersonales` VALUES ('1','maria','gomez',27),('2','juan','gomez',18),('3','elena','martin',27);
/*!40000 ALTER TABLE `datospersonales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES ('Ana','Lopez','Directora',75000.00),('Antonio','Fernandez','Administrativo',35000.00),('Sandra','Fernandez','Jefe Area',45000.00);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_table`
--

DROP TABLE IF EXISTS `new_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_table` (
  `nif` varchar(15) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  PRIMARY KEY (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_table`
--

LOCK TABLES `new_table` WRITE;
/*!40000 ALTER TABLE `new_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `new_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `codigoarticulo` varchar(10) NOT NULL,
  `seccion` varchar(45) DEFAULT NULL,
  `nombrearticulo` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `importado` varchar(9) DEFAULT NULL,
  `paisdeorigen` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoarticulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES ('AR01','FERRETERÍA','DESTORNILLADOR',6.63,'2000-10-22','1','ESPAÑA',NULL),('AR02','CONFECCIÓN','TRAJE CABALLERO',284.58,'2002-03-11','1','ITALIA',NULL),('AR03','JUGUETERÍA','COCHE TELEDIRIGIDO',159.45,'2002-05-26','1','MARRUECOS',NULL),('AR04','DEPORTES','RAQUETA TENIS',93.47,'2000-03-20','1','USA',NULL),('AR06','DEPORTES','MANCUERNAS',60.00,'2000-09-13','1','USA',NULL),('AR07','CONFECCIÓN','SERRUCHO',30.20,'2001-03-23','1','FRANCIA',NULL),('AR08','JUGUETERÍA','CORREPASILLOS',103.34,'2000-04-11','1','JAPÓN',NULL),('AR09','CONFECCIÓN','PANTALÓN SEÑORA',174.23,'2000-01-10','1','MARRUECOS',NULL),('AR10','JUGUETERÍA','CONSOLA VIDEO',442.54,'2002-09-24','1','USA',NULL),('AR11','CERÁMICA','TUBOS',168.43,'2000-02-04','1','CHINA',NULL),('AR12','FERRETERÍA','LLAVE INGLESA',24.40,'2001-05-23','1','USA',NULL),('AR13','CONFECCIÓN','CAMISA CABALLERO',67.13,'2002-08-11','0','ESPAÑA',NULL),('AR14','JUGUETERÍA','TREN ELÉCTRICO',1.00,'2001-07-03','1','JAPÓN',NULL),('AR15','CERÁMICA','PLATO DECORATIVO',54.09,'2000-06-07','1','CHINA',NULL),('AR16','FERRETERÍA','ALICATES',6.74,'2000-04-17','1','ITALIA',NULL),('AR17','JUGUETERÍA','MUÑECA ANDADORA',105.06,'2001-01-04','0','ESPAÑA',NULL),('AR18','DEPORTES','PISTOLA OLÍMPICA',46.73,'2001-02-02','1','SUECIA',NULL),('AR19','CONFECCIÓN','BLUSA SRA.',101.06,'2000-03-18','1','CHINA',NULL),('AR20','CERÁMICA','JUEGO DE TE',43.27,'2001-01-15','1','CHINA',NULL),('AR21','CERÁMICA','CENICERO',19.75,'2001-07-02','1','JAPÓN',NULL),('AR22','FERRETERÍA','MARTILLO',11.40,'2001-09-04','0','ESPAÑA',NULL),('AR23','CONFECCIÓN','CAZADORA PIEL',522.69,'2001-07-10','1','ITALIA',NULL),('AR24','DEPORTES','BALÓN RUGBY',111.64,'2000-11-11','1','USA',NULL),('AR25','DEPORTES','BALÓN BALONCESTO',75.27,'2001-06-25','1','JAPÓN',NULL),('AR26','JUGUETERÍA','FUERTE DE SOLDADOS',143.70,'2000-11-25','1','JAPÓN',NULL),('AR27','CONFECCIÓN','ABRIGO CABALLERO',500.00,'2002-04-05','1','ITALIA',NULL),('AR28','DEPORTES','BALÓN FÚTBOL',43.91,'2002-07-04','0','ESPAÑA',NULL),('AR29','CONFECCIÓN','ABRIGO SRA',360.07,'2001-05-03','1','MARRUECOS',NULL),('AR30','FERRETERÍA','DESTORNILLADOR',9.06,'2002-02-20','1','FRANCIA',NULL),('AR31','JUGUETERÍA','PISTOLA CON SONIDOS',57.25,'2001-04-15','0','ESPAÑA',NULL),('AR32','DEPORTES','CRONÓMETRO',439.18,'2002-01-03','1','USA',NULL),('AR33','CERÁMICA','MACETA',29.04,'2000-02-23','0','ESPAÑA',NULL),('AR34','OFICINA','PIE DE LÁMPARA',39.76,'2001-05-27','1','TURQUÍA',NULL),('AR35','FERRETERÍA','LIMA GRANDE',22.07,'2002-08-10','0','ESPAÑA',NULL),('AR36','FERRETERÍA','JUEGO DE BROCAS',15.10,'2002-07-04','1','TAIWÁN',NULL),('AR37','CONFECCIÓN','CINTURÓN DE PIEL',4.33,'2002-05-12','0','ESPAÑA',NULL),('AR38','DEPORTES','CAÑA DE PESCA',270.00,'2000-02-14','1','USA',NULL),('AR39','CERÁMICA','JARRA CHINA',127.77,'2002-09-02','1','CHINA',NULL),('AR40','DEPORTES','BOTA ALPINISMO',144.00,'2002-05-05','0','ESPAÑA',NULL),('AR41','DEPORTES','PALAS DE PING PONG',21.60,'2002-02-02','0','ESPAÑA',NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Usuario` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(20) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `Tecnologia` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (7,'Jesús','Hernández','jesus','jesus','México','Java'),(8,'Juan','Perez','juan','juan','Perú','Java');
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

-- Dump completed on 2021-12-03  6:28:58
