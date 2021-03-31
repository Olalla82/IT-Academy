-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: pizerria_m7
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
-- Table structure for table `productos_has_hamburguesas`
--

DROP TABLE IF EXISTS `productos_has_hamburguesas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_has_hamburguesas` (
  `productos_id_productos` int NOT NULL,
  `hamburguesas_id_hamburguesas` int NOT NULL,
  PRIMARY KEY (`productos_id_productos`,`hamburguesas_id_hamburguesas`),
  KEY `fk_productos_has_hamburguesas_hamburguesas1_idx` (`hamburguesas_id_hamburguesas`),
  KEY `fk_productos_has_hamburguesas_productos1_idx` (`productos_id_productos`),
  CONSTRAINT `fk_productos_has_hamburguesas_hamburguesas1` FOREIGN KEY (`hamburguesas_id_hamburguesas`) REFERENCES `hamburguesas` (`id_hamburguesas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_productos_has_hamburguesas_productos1` FOREIGN KEY (`productos_id_productos`) REFERENCES `productos` (`id_productos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_has_hamburguesas`
--

LOCK TABLES `productos_has_hamburguesas` WRITE;
/*!40000 ALTER TABLE `productos_has_hamburguesas` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_has_hamburguesas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-25 20:35:16
