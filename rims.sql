-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: rims
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.1

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,132),(2,1,NULL,NULL,'Bookings',2,15),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Cars',16,29),(9,8,NULL,NULL,'index',17,18),(10,8,NULL,NULL,'view',19,20),(11,8,NULL,NULL,'add',21,22),(12,8,NULL,NULL,'edit',23,24),(13,8,NULL,NULL,'delete',25,26),(14,1,NULL,NULL,'Groups',30,43),(15,14,NULL,NULL,'index',31,32),(16,14,NULL,NULL,'view',33,34),(17,14,NULL,NULL,'add',35,36),(18,14,NULL,NULL,'edit',37,38),(19,14,NULL,NULL,'delete',39,40),(20,1,NULL,NULL,'Pages',44,49),(21,20,NULL,NULL,'display',45,46),(22,1,NULL,NULL,'Users',50,67),(23,22,NULL,NULL,'login',51,52),(24,22,NULL,NULL,'logout',53,54),(25,22,NULL,NULL,'index',55,56),(26,22,NULL,NULL,'view',57,58),(27,22,NULL,NULL,'add',59,60),(28,22,NULL,NULL,'edit',61,62),(29,22,NULL,NULL,'delete',63,64),(30,1,NULL,NULL,'Acl',68,129),(31,30,NULL,NULL,'Acl',69,76),(32,31,NULL,NULL,'index',70,71),(33,31,NULL,NULL,'admin_index',72,73),(34,30,NULL,NULL,'Acos',77,90),(35,34,NULL,NULL,'admin_index',78,79),(36,34,NULL,NULL,'admin_empty_acos',80,81),(37,34,NULL,NULL,'admin_build_acl',82,83),(38,34,NULL,NULL,'admin_prune_acos',84,85),(39,34,NULL,NULL,'admin_synchronize',86,87),(40,30,NULL,NULL,'Aros',91,128),(41,40,NULL,NULL,'admin_index',92,93),(42,40,NULL,NULL,'admin_check',94,95),(43,40,NULL,NULL,'admin_users',96,97),(44,40,NULL,NULL,'admin_update_user_group',98,99),(45,40,NULL,NULL,'admin_ajax_group_permissions',100,101),(46,40,NULL,NULL,'admin_group_permissions',102,103),(47,40,NULL,NULL,'admin_user_permissions',104,105),(48,40,NULL,NULL,'admin_empty_permissions',106,107),(49,40,NULL,NULL,'admin_clear_user_specific_permissions',108,109),(50,40,NULL,NULL,'admin_grant_all_controllers',110,111),(51,40,NULL,NULL,'admin_deny_all_controllers',112,113),(52,40,NULL,NULL,'admin_get_group_controller_permission',114,115),(53,40,NULL,NULL,'admin_grant_group_permission',116,117),(54,40,NULL,NULL,'admin_deny_group_permission',118,119),(55,40,NULL,NULL,'admin_get_user_controller_permission',120,121),(56,40,NULL,NULL,'admin_grant_user_permission',122,123),(57,40,NULL,NULL,'admin_deny_user_permission',124,125),(58,1,NULL,NULL,'AclExtras',130,131),(59,2,NULL,NULL,'isAuthorized',13,14),(60,8,NULL,NULL,'isAuthorized',27,28),(61,14,NULL,NULL,'isAuthorized',41,42),(62,20,NULL,NULL,'isAuthorized',47,48),(63,22,NULL,NULL,'isAuthorized',65,66),(64,31,NULL,NULL,'isAuthorized',74,75),(65,34,NULL,NULL,'isAuthorized',88,89),(66,40,NULL,NULL,'isAuthorized',126,127);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',5,NULL,1,4),(2,NULL,'Group',6,NULL,5,12),(3,1,'User',11,NULL,2,3),(4,2,'User',12,NULL,6,7),(5,2,'User',13,NULL,8,9),(6,2,'User',14,NULL,10,11);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,2,1,'-1','-1','-1','-1'),(3,2,5,'1','1','1','1'),(4,2,7,'1','1','1','1'),(5,2,6,'1','1','1','1'),(6,2,3,'1','1','1','1'),(7,2,4,'1','1','1','1'),(9,2,26,'1','1','1','1'),(10,2,28,'1','1','1','1'),(11,5,11,'1','1','1','1'),(12,5,9,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `car_km` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_date` (`booking_date`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (15,'2013-02-12 00:00:00',11,1,'new car','2013-02-11 12:22:58','2013-02-11 12:22:58',NULL),(16,'2013-02-13 00:00:00',13,2,'I like cheap cars, just joking','2013-02-11 12:25:48','2013-02-11 12:26:01',NULL);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `km` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Bentley',5000,'2013-02-07 00:37:46','2013-02-07 00:37:46'),(2,'Tazz',120000,'2013-02-07 00:38:05','2013-02-07 00:38:05');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (5,'Aministrator','2013-02-07 01:33:43','2013-02-07 01:33:43'),(6,'User','2013-02-07 01:33:48','2013-02-07 01:33:48');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'Martin','55b5060ae0da69c6ea53f7ae8964f577a1fe9049',5,'mdjacton@gmail.com','2013-02-07 01:33:59','2013-02-07 01:33:59'),(13,'Sally','55b5060ae0da69c6ea53f7ae8964f577a1fe9049',6,'sally@home.com','2013-02-08 16:45:18','2013-02-09 14:21:15'),(14,'Bob','55b5060ae0da69c6ea53f7ae8964f577a1fe9049',6,'bob@home.com','2013-02-09 13:01:30','2013-02-09 13:01:30');
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

-- Dump completed on 2013-02-11 13:08:25
