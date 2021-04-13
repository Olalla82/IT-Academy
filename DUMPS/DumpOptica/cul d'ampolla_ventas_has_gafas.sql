-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: cul d'ampolla
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `ventas_has_gafas`
--

DROP TABLE IF EXISTS `ventas_has_gafas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas_has_gafas` (
  `ventas_id` int NOT NULL,
  `ventas_empleados_id` int NOT NULL,
  `ventas_clientes_id` int NOT NULL,
  `gafas_id` int NOT NULL,
  PRIMARY KEY (`ventas_id`,`ventas_empleados_id`,`ventas_clientes_id`,`gafas_id`),
  KEY `fk_ventas_has_gafas_gafas1_idx` (`gafas_id`),
  KEY `fk_ventas_has_gafas_ventas1_idx` (`ventas_id`,`ventas_empleados_id`,`ventas_clientes_id`),
  CONSTRAINT `fk_ventas_has_gafas_gafas1` FOREIGN KEY (`gafas_id`) REFERENCES `gafas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ventas_has_gafas_ventas1` FOREIGN KEY (`ventas_id`, `ventas_empleados_id`, `ventas_clientes_id`) REFERENCES `ventas` (`id`, `empleados_id`, `clientes_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas_has_gafas`
--

LOCK TABLES `ventas_has_gafas` WRITE;
/*!40000 ALTER TABLE `ventas_has_gafas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas_has_gafas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-13 18:48:36
