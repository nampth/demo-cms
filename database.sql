-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: call-center
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.36-MariaDB

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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(45) DEFAULT NULL,
  `permission_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (41,'1','1'),(42,'1','2'),(43,'1','3'),(44,'1','4'),(47,'9','5'),(48,'10','6');
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin_dashboard','Truy cập màn hình dashboard của Admin'),(2,'user_management','Quản trị người dùng'),(3,'role_management','Quản trị nhóm người dùng'),(4,'permission_management','Quản trị quyền người dùng'),(5,'user_dashboard','Truy cập dashboard của user thường'),(6,'sale_dashboard','Truy cập trang Dashboard của Nhân viên quản lý bán hàng');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `default_redirect` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','/admin/dashboard'),(9,'normal','Người dùng thông thường','/'),(10,'sale_manager','Nhân viên quản lý bán hàng','/sale/dashboard');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `role_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'1','1'),(71,'3','9'),(76,'9','9'),(77,'10','10'),(78,'11','9'),(79,'12','9');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `updated_at` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nampth','Phan Nam','annamphu95@gmail.com','$2y$10$tY.rJ4g/zaw0Rn.l0q4nCO/mnDTDJT.vUFZ.YLtHQIYVFud1qanJO','0','FZvQlIXa5uAczO4rIhR0fXeHLtpaQoPh2q3BZmiSPwHYljspYhv3KXbV5Xmj',NULL,'2018-11-08 08:15:49'),(3,'test123','Phan Nam hihi','nampth@kalapa.vn','$2y$10$VHxMi8eyePfM1PGzFvlIqufkT/tcQlVBeY9iTVrPgTNF7a4YDx.oi','0','kym19Rw2FhFnSdfHLen0IYTUo6kGxbEnontL290p4jXmbdxGB7FmSN5gBSZ8','2018-11-08 09:09:09','2018-11-08 09:47:28'),(9,'nampthtest','Test test','nampthtest@test.com','$2y$10$r3cf1s9URIa3AVkMH8tqtuUdIOVy4WvQgW/Sz.di/sAs2SH4VMcSm','0','0gt5Z7KosIHPydmBsJlx0mCGQ0H731nx2yFICg3bzSMiINyeZdRbxJVPANLQ','2018-11-15 10:28:06','2018-11-15 10:28:06'),(10,'nampth_sale','Phan Nam đi bán cam','nambancam@test.com','$2y$10$9W5ilQI1sNlDEIrWn8dCqekdTIzYUU.5D39R.0bsrfkB.Ow149leq','0','VmlNQ9YY3JK7FiM3NGUiTAA9UXXhz1scXp2IXvdyeY934owzXNsnzkeu6uBf','2018-11-16 08:41:44','2018-11-16 08:41:44'),(11,'nampthtest2','Phan Nam test2','nampthtest2@test.com','$2y$10$6Q4k7QX8cE7g3Fr2P/Tzsem/ABe/KWck9pQ6kLrBxosQc7A4z7wQe','0','fdZEUykZXDOIGuM6SLRQ3hbUaDYG8zkAuj2guBKdHgBeicRJRaZ4GknM7T3T','2018-11-16 09:31:13','2018-11-16 09:31:13'),(12,'nampthtest3','Phan Nam test3','namtest3@gmail.com','$2y$10$4FnJr0l.SpSsGshwgYGhiuYp5ZuiQZ9fmD28pR4F4Au5J38FwK2BC','0','kYWjAcKLDpWqioUymygDtT7tZMVmNIA7NiigoLt3XpJBBOTDkhXYcJsLRDkr','2018-11-16 10:40:22','2018-11-16 10:40:22');
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

-- Dump completed on 2018-11-20 15:15:59
