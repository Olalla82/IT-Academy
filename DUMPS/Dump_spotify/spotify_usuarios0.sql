-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: spotify
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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` enum('femenino','masculino') DEFAULT NULL COMMENT 'sexo femenino: (F);\nsexo masculino: (M);',
  `pais_usuarios_premium` varchar(45) DEFAULT NULL,
  `codigo_postal` int DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT `fk_tipo_user` FOREIGN KEY (`id_usuario`) REFERENCES `tipo_usuario` (`usuario_free`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tipo_user_premium` FOREIGN KEY (`id_usuario`) REFERENCES `tipo_usuario` (`usuario_premium`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_artistas` FOREIGN KEY (`id_usuario`) REFERENCES `artista` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_playlist` FOREIGN KEY (`id_usuario`) REFERENCES `playlist` (`id_playlist`) ON UPDATE CASCADE,
  CONSTRAINT `fk_user_suscription` FOREIGN KEY (`id_usuario`) REFERENCES `suscripciones` (`id_suscripciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_userpremium_playlist_borradas` FOREIGN KEY (`id_usuario`) REFERENCES `playlist_borradas` (`id_playlist_borradas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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

-- Dump completed on 2021-04-08 19:03:11
