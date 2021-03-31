-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: youtube
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
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id_videos` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `nombre_archivo` blob NOT NULL,
  `thumbnail` blob NOT NULL,
  `numero_reproducciones` varchar(45) NOT NULL,
  `num_likes` int NOT NULL,
  `num_dislikes` int NOT NULL,
  `etiquetas_id_etiquetas` int NOT NULL,
  PRIMARY KEY (`id_videos`,`etiquetas_id_etiquetas`),
  KEY `fk_videos_etiquetas1_idx` (`etiquetas_id_etiquetas`) /*!80000 INVISIBLE */,
  KEY `id_video_coment` (`id_videos`),
  CONSTRAINT `fk_estado_oculto` FOREIGN KEY (`id_videos`) REFERENCES `estados_video` (`oculto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_estado_privado` FOREIGN KEY (`id_videos`) REFERENCES `estados_video` (`privado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_estado_publico` FOREIGN KEY (`id_videos`) REFERENCES `estados_video` (`publico`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_videos_etiquetas1` FOREIGN KEY (`etiquetas_id_etiquetas`) REFERENCES `etiquetas` (`id_etiquetas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-30 15:56:10
