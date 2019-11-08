-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: xnk
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'admin','admin','brucelee.drupal@gmail.com','brucelee.drupal@gmail.com',1,'tLzjU19W1n1L.sVhMLGZFTrsnT0edKU7wmGfUEd7GEs','$argon2i$v=19$m=65536,t=4,p=1$NFlMandwVkoxbmpvcEZFTw$3fcN8AByMa9D4DlPAN/Hb/BfR6+CYj0lxY9oh+R4QYE','2019-11-04 08:31:22',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tree_root` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D035FA87A977936C` (`tree_root`),
  KEY `IDX_D035FA87727ACA70` (`parent_id`),
  KEY `lft_ix` (`lft`),
  KEY `rgt_ix` (`rgt`),
  KEY `lft_rgt_ix` (`lft`,`rgt`),
  KEY `lvl_ix` (`lvl`),
  CONSTRAINT `FK_D035FA87727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D035FA87A977936C` FOREIGN KEY (`tree_root`) REFERENCES `options` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,1,NULL,'性别',1,0,6),(2,1,1,'男',2,1,3),(3,1,1,'女',4,1,5),(4,4,NULL,'文化程度',1,0,12),(5,4,4,'大学',2,1,3),(6,4,4,'高中',4,1,5),(7,4,4,'初中',6,1,7),(8,4,4,'小学',8,1,9),(9,4,4,'文盲',10,1,11),(10,10,NULL,'婚姻状况',1,0,10),(11,10,10,'已婚',2,1,3),(12,10,10,'已婚丧偶',4,1,5),(13,10,10,'已婚离异',6,1,7),(14,10,10,'未婚',8,1,9),(15,15,NULL,'职业',1,0,12),(16,15,15,'公务员',2,1,3),(17,15,15,'农民',4,1,5),(18,15,15,'教师',6,1,7),(19,15,15,'经商',8,1,9),(20,15,15,'其他',10,1,11),(21,21,NULL,'医保类型',1,0,14),(22,21,21,'退休职工',2,1,3),(23,21,21,'在职职工',4,1,5),(24,21,21,'城镇居民',6,1,7),(25,25,NULL,'降压药物',1,0,16),(26,25,25,'ACEI',2,1,3),(27,25,25,'ARB',4,1,5),(28,25,25,'β阻滞剂',6,1,7),(29,25,25,'钙拮抗剂',8,1,9),(30,25,25,'利尿剂',10,1,11),(31,25,25,'其他',12,1,13),(32,25,25,'未用降压药',14,1,15),(33,33,NULL,'控制情况',1,0,8),(34,33,33,'控制理想',2,1,3),(35,33,33,'控制欠佳',4,1,5),(36,33,33,'控制情况不详',6,1,7),(37,37,NULL,'降糖药物',1,0,14),(38,37,37,'胰岛素',2,1,3),(39,37,37,'磺脲类',4,1,5),(40,37,37,'双胍类',6,1,7),(41,37,37,'噻唑烷二酮类',8,1,9),(42,37,37,'二肽基肽酶-4抑制剂',10,1,11),(43,37,37,'未用降糖药',12,1,13),(44,21,21,'离休',8,1,9),(45,21,21,'自费',10,1,11),(46,46,NULL,'降脂药物',1,0,8),(47,46,46,'他汀',2,1,3),(48,46,46,'贝特类',4,1,5),(49,46,46,'依折麦布',6,1,7),(50,50,NULL,'吸烟情况',1,0,8),(51,50,50,'当前吸烟',2,1,3),(52,50,50,'既往吸烟',4,1,5),(53,50,50,'无吸烟史',6,1,7),(54,54,NULL,'饮酒',1,0,12),(55,54,54,'白酒',2,1,3),(56,54,54,'黄酒',4,1,5),(57,54,54,'啤酒',6,1,7),(58,54,54,'已戒酒',8,1,9),(59,54,54,'无饮酒史',10,1,11),(60,21,21,'其他',12,1,13),(61,61,NULL,'痛风',1,0,6),(62,61,61,'别嘌呤醇',2,1,3),(63,61,61,'非布司他',4,1,5);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthday` date DEFAULT NULL,
  `tall` int(11) DEFAULT NULL,
  `ryrq` date NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zyh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `marriage_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `yibao_id` int(11) DEFAULT NULL,
  `fuwei` int(11) DEFAULT NULL,
  `gxykzqk_id` int(11) DEFAULT NULL,
  `tnbkzqk_id` int(11) DEFAULT NULL,
  `gxzkzqk_id` int(11) DEFAULT NULL,
  `xyqk_id` int(11) DEFAULT NULL,
  `xyqkzhi` int(11) DEFAULT NULL,
  `xyqkyear` int(11) DEFAULT NULL,
  `yjqk_id` int(11) DEFAULT NULL,
  `yjqkliang` int(11) DEFAULT NULL,
  `yjqkyear` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1ADAD7EB708A0E0` (`gender_id`),
  KEY `IDX_1ADAD7EB28722836` (`scholarship_id`),
  KEY `IDX_1ADAD7EB9DAE1DA4` (`marriage_id`),
  KEY `IDX_1ADAD7EBB58CDA09` (`career_id`),
  KEY `IDX_1ADAD7EBD338573F` (`yibao_id`),
  KEY `IDX_1ADAD7EBBA480FEE` (`gxykzqk_id`),
  KEY `IDX_1ADAD7EB88DA2383` (`tnbkzqk_id`),
  KEY `IDX_1ADAD7EB34C7080D` (`gxzkzqk_id`),
  KEY `IDX_1ADAD7EBDF53B864` (`xyqk_id`),
  KEY `IDX_1ADAD7EBFC66C3E5` (`yjqk_id`),
  CONSTRAINT `FK_1ADAD7EB28722836` FOREIGN KEY (`scholarship_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB34C7080D` FOREIGN KEY (`gxzkzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB708A0E0` FOREIGN KEY (`gender_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB88DA2383` FOREIGN KEY (`tnbkzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB9DAE1DA4` FOREIGN KEY (`marriage_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBB58CDA09` FOREIGN KEY (`career_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBBA480FEE` FOREIGN KEY (`gxykzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBD338573F` FOREIGN KEY (`yibao_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBDF53B864` FOREIGN KEY (`xyqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBFC66C3E5` FOREIGN KEY (`yjqk_id`) REFERENCES `options` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (5,'1985-11-07',169,'2017-11-30','18116381898','李跃健','800003649',2,6,11,17,79,23,69,34,36,35,51,3,2,56,2,3),(6,'2017-11-07',NULL,'2014-02-02','18116381898','lee','62',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options`
--

DROP TABLE IF EXISTS `patient_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_8D56AF6C6B899279` (`patient_id`),
  KEY `IDX_8D56AF6C3ADB05F1` (`options_id`),
  CONSTRAINT `FK_8D56AF6C3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8D56AF6C6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options`
--

LOCK TABLES `patient_options` WRITE;
/*!40000 ALTER TABLE `patient_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jtyw`
--

DROP TABLE IF EXISTS `patient_options_jtyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jtyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_E44879D76B899279` (`patient_id`),
  KEY `IDX_E44879D73ADB05F1` (`options_id`),
  CONSTRAINT `FK_E44879D73ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E44879D76B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jtyw`
--

LOCK TABLES `patient_options_jtyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jtyw` DISABLE KEYS */;
INSERT INTO `patient_options_jtyw` VALUES (5,40),(5,41);
/*!40000 ALTER TABLE `patient_options_jtyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jyyw`
--

DROP TABLE IF EXISTS `patient_options_jyyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jyyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EC90EA846B899279` (`patient_id`),
  KEY `IDX_EC90EA843ADB05F1` (`options_id`),
  CONSTRAINT `FK_EC90EA843ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EC90EA846B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jyyw`
--

LOCK TABLES `patient_options_jyyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jyyw` DISABLE KEYS */;
INSERT INTO `patient_options_jyyw` VALUES (5,26),(5,27);
/*!40000 ALTER TABLE `patient_options_jyyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jzyw`
--

DROP TABLE IF EXISTS `patient_options_jzyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jzyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EED654DD6B899279` (`patient_id`),
  KEY `IDX_EED654DD3ADB05F1` (`options_id`),
  CONSTRAINT `FK_EED654DD3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EED654DD6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jzyw`
--

LOCK TABLES `patient_options_jzyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jzyw` DISABLE KEYS */;
INSERT INTO `patient_options_jzyw` VALUES (5,48),(5,49);
/*!40000 ALTER TABLE `patient_options_jzyw` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-08 15:42:24
