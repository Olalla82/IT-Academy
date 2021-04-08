-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: youtube
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
-- Table structure for table `playlist_has_videos`
--

DROP TABLE IF EXISTS `playlist_has_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist_has_videos` (
  `playlist_id_playlist` int NOT NULL,
  `videos_id_videos` int NOT NULL,
  `videos_etiquetas_id_etiquetas` int NOT NULL,
  `videos_usuarios_id` int NOT NULL,
  PRIMARY KEY (`playlist_id_playlist`,`videos_id_videos`,`videos_etiquetas_id_etiquetas`,`videos_usuarios_id`),
  KEY `fk_playlist_has_videos_videos1_idx` (`videos_id_videos`,`videos_etiquetas_id_etiquetas`,`videos_usuarios_id`),
  KEY `fk_playlist_has_videos_playlist1_idx` (`playlist_id_playlist`),
  CONSTRAINT `fk_playlist_has_videos_playlist1` FOREIGN KEY (`playlist_id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_playlist_has_videos_videos1` FOREIGN KEY (`videos_id_videos`, `videos_etiquetas_id_etiquetas`, `videos_usuarios_id`) REFERENCES `videos` (`id_videos`, `etiquetas_id_etiquetas`, `usuarios_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_has_videos`
--

LOCK TABLES `playlist_has_videos` WRITE;
/*!40000 ALTER TABLE `playlist_has_videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlist_has_videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-08 19:00:26
