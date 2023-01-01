-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php_login_database
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','$2y$10$gpogiyASBnVZ0LWlpkmBE.tVoP3TQK0E6JBSy3lnKzDtv0JnYTrLO'),(2,'admin@admin.com','$2y$10$LPW9.5izJezwYkuo1PZiH.RKu7E3NPqhVivC.r41UsH9BYcEEu8BW'),(3,'juan@admin.com','$2y$10$GsJ6R6DT5gnQAtVKCQqfmucxK6okjZ6e/t2Agwbh4bYUUMA3cHk7O'),(4,'juan@admin.com','$2y$10$MbRwAdBAu66IfvZFHFA64uf392HJVMV7oTklicC0Eqi618eTTtDTq'),(5,'juan@admin.com','123'),(6,'juan1@admin.com','123'),(7,'adminadmin@gmail.com','123'),(8,'prueba1@admin.com','$2y$10$k53KYhSjaWIcHxmwFdsJ9OBGraQkGtJaRfDTCofEfg83nzjjDv0qS'),(9,'prueba1@admin.com','$2y$10$mZZektZokLXd1gv6EK9akuqcw3B8F47m2Robo1nDuBdAKwAQakAgG'),(10,'prueba2@admin.com','$2y$10$AGHWoGWWFboWwU3gc63lDOfTmCuX/nwsly63OAhK8fOEO3/z06bKS'),(11,'prueba2@admin.com','$2y$10$MspJsrPlPO2sJ4gWqzmyN..LHXcQvBQBD2B.naXfIlVBNiMFCJ3MK'),(12,'admin123@admin.com','$2y$10$Awew6r0S8Ev3C7pAnG15MenHhEU0C6C7ZmjtnR.LJ/xQHTkhrAiy.'),(13,'admin123@admin.com','$2y$10$QjgBwix68wWe77GGhOWxke4ETYIqvH6V.Qa2s68feRhwmzGSzdPSC'),(14,'admin123@admin.com','$2y$10$7nD7mjBGeNhkcaEGyKEx5Ok2O/RmCmHEHi4ozgjtJOm5sZV0KIaz2'),(15,'admin123@admin.com','$2y$10$wK2mFJmaL/UOJ8b39dbV2eYxa3aixoTtbAT.iI.cNmQkoOVe9Ty5K');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-01 16:47:38
